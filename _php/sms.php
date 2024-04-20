<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';
    
    $current_time = date('H:i:00', time());
    $today        = date('Y-m-d', time());
    $schedules    = array();
    $index        = 0;
    
    $sql    = "SELECT id,`time` FROM b_schedule ORDER BY id DESC;";
    $result = mysqli_query($con,$sql);
    
    while ($row  = mysqli_fetch_row($result)) {
        $temp = array();
        $temp["id"]   = $row[0];
        $temp["time"] = $row[1];

        array_push($schedules, $temp);
    }
    
    compareTime();
    function compareTime() {
        global $index,$schedules,$current_time,$con,$today;
        
        $db_current_time = $schedules[$index]["time"];
        $nearest_time    = "";
        
        $sql_find_nearest = "SELECT id,`time` FROM b_schedule WHERE `time` <= '$current_time' ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($con,$sql_find_nearest);

        while ($row  = mysqli_fetch_row($result)) {
            $nearest_time = $row[1];
        }
        
        if ($db_current_time == $nearest_time) {
            /* If nearest then check if schedule already added in temp table  */
            $is_temp_added = mysqli_query($con,"SELECT * FROM b_schedule_temp WHERE `time` = '$nearest_time' AND `date` = '$today'");
            if (mysqli_num_rows($is_temp_added) == 0) {
                mysqli_next_result($con);
                
                $query = "INSERT INTO b_schedule_temp (`time`,`date`) VALUES (?,?)";
                if ($stmt = mysqli_prepare($con, $query)) {
                    mysqli_stmt_bind_param($stmt,"ss",$nearest_time,$today);
                    mysqli_stmt_execute($stmt);
                    
                    sendSMS();
                    
                    if ($index < count($schedules)) {
                        $index++;
                        compareTime();
                    }
                } else {
                    echo "Error saving";
                }
            } else {
                echo "Do Nothing";
            }
        }
    }
    
    function sendSMS() {
        global $con,$current_time;
        
        $sql    = "
        SELECT
            a.mobileNumber,
            CONCAT(c.cityName,' will expirience ',b.description,' with temp. of ',b.temp,' degrees') AS message
        FROM
            b_subscribers a
        INNER JOIN (
            SELECT
                a.cityId,
                a.temp,
                a.description
            FROM
                b_temp_report a
            ORDER BY
                a.dateCreated DESC
            LIMIT
                10
        ) b
        ON
            a.cityID = b.cityID
        INNER JOIN
            b_cities c
        ON
            a.cityID = c.cityId
        ";
        $result = mysqli_query($con,$sql);
        
        while ($row  = mysqli_fetch_row($result)) {
            $key     = "1649169443613";
            $mobile  = $row[0];
            $message = UrlEncoder::encode($row[1],UrlEncoder::STANDARD_CUSTOM_RFC3986_ISH);
            
            file_get_contents("https://apps.project4teen.online/smsable/send_sms.php?key=$key&message=$message&mobile=$mobile");
        }
        mysqli_free_result($result);
    }
    
    class UrlEncoder{
        public const STANDARD_RFC1738 = 1;
        public const STANDARD_RFC3986 = 2;
        public const STANDARD_CUSTOM_RFC3986_ISH = 3;
        // add more here
    
        static function encode($string, $rfc){
            switch ($rfc) {
                case self::STANDARD_RFC1738:
                    return  urlencode($string);
                    break;
                case self::STANDARD_RFC3986:
                    return rawurlencode($string);
                    break;
                case self::STANDARD_CUSTOM_RFC3986_ISH:
                    // Add your custom encoding
                    $entities = ['%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D'];
                    $replacements = ['!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]"];
                    return str_replace($entities, $replacements, urlencode($string));
                    break;
                default:
                    throw new Exception("Invalid RFC encoder - See class const for reference");
                    break;
            }
        }
    }
    
    mysqli_free_result($result);
    mysqli_close($con);
?>