<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';

    $mobile   = $_POST["mobile"];
    $message  = str_replace(array('BAGYO','BALITA','CITY', ' '), '',$_POST["message"]);
    
    
    
    $cityid   = "";
    $cityName = "";
    $isExist  = false;
    
    $key   = "1649169443613";
    $reply = "";
    
    $sql    = "
        SELECT
            cityId,
            cityName
        FROM
            b_cities 
        WHERE
            REPLACE(cityName,' ','') LIKE CONCAT( '%', '$message', '%' )
    ";
    
    $result = mysqli_query($con,$sql);

    while ($row  = mysqli_fetch_row($result)) {
        $cityid   = $row[0];
        $cityName = $row[1];
    }
    
    $find_query = mysqli_query($con,"SELECT * FROM b_subscribers WHERE mobileNumber = '$mobile'");
    if (mysqli_num_rows($find_query) != 0) {
        mysqli_next_result($con);
        
        $isExist = true;
    }
    
    if ($isExist) {
        $reply = UrlEncoder::encode("You already subscribed. To subscribe to a different city kindly contact admin to remove your current subscription",UrlEncoder::STANDARD_CUSTOM_RFC3986_ISH);
    } else {
        if ($cityid == "") {
            /* Keyword not found */
            $reply = UrlEncoder::encode("We did not find any city that you want to subscribe",UrlEncoder::STANDARD_CUSTOM_RFC3986_ISH);
        } else {
            $find_query = mysqli_query($con,"SELECT * FROM b_subscribers WHERE cityID = '$cityid' AND mobileNumber = '$mobile'");
            if (mysqli_num_rows($find_query) == 0) {
                
                $query = "INSERT INTO b_subscribers (cityID,mobileNumber,dateCreated) VALUES (?,?,?);";
                if ($stmt = mysqli_prepare($con, $query)) {
                    mysqli_stmt_bind_param($stmt,"sss",$cityid,$mobile,$global_date);
                    mysqli_stmt_execute($stmt);
                }
            }
            
            $reply = UrlEncoder::encode("Thanks for subscribing AtmosHunch. You will be receiving weather updates in $cityName",UrlEncoder::STANDARD_CUSTOM_RFC3986_ISH);
        }   
    }
    
    file_get_contents("https://apps.project4teen.online/smsable/send_sms.php?key=$key&message=$reply&mobile=$mobile");
    
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
    
    mysqli_close($con);
?>