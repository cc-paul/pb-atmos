var Graph;
var tblSchedule;

runApi();

setInterval(function(){ 
	runApi();
	callChart($("#cmbCities").val());
}, 60000);

setInterval(function(){ 
	checkSMS();
}, 5000);

function checkSMS() {
	$.get("../_php/sms.php");
}

function runApi() {
	$.ajax({
		url: "../_php/bagyo_api.php",
		data: {
			parameter_name   : 'value',
		},
		type: 'post',
		success: function (data) {
			var data = jQuery.parseJSON(data);
			
			for (var i = 0; i < data.length; i++) {
				$("#title_" + i).text(data[i].displayToUser);
				$("#spDeg_" + i).text(data[i].temp);
				$("#spDesc_" + i).text(toTitleCase(data[i].description));
				$("#img_" + i).attr("src",data[i].icon);
			}
		}
	});
}

function callChart(cityID) {
	$.ajax({
	    url: "../_php/get_data.php",
	    data: {
	        cityID : cityID,
	    },
	    type: 'post',
	    success: function (data) {
	        arr = JSON.parse(data);
	        
	        Graph = new Chart('tempChart', {
	            type: 'line',
	            data: {
	                labels: arr.map(o => o.reading_time),
	                datasets: [{
	                    fill: true,
	                    borderColor: "rgba(59, 89, 152, 1)",
	                    backgroundColor : "rgba(59, 89, 152, 0.8)",
	                    data: arr.map(o => o.value1)
	                }],
	            },
	            options: {
	                legend: {
	                    display: false
	                },
	                scales: {
	                    x: {
	                        ticks: {
	                            min: 0,
	                            beginAtZero: true
	                        }
	                    },
	                    y: {
	                        ticks: {
	                            autoSkip: false,
	                            beginAtZero: true,
	                            stepSize: 1
	                        }
	                    }
	                }
	            }
	        });
	        
	        //checkValueAndInsert(wtGraph,arr);
	    }
	});
}

function toTitleCase(str) {
	return str.replace(
		/\w\S*/g,
		function(txt) {
			return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
		}
	);
}

$(document).ready(function(){
	callChart($("#cmbCities").val());
});

$("#cmbCities").on("change", function() {
    var selected_value = $(this).val();
    callChart(selected_value);
});

$("#aSubscribe").click(function(){
	$("#cmbSelectCities").val(null).trigger("change");
	$("#txtFullName").val("");
	$("#txtMobile").val("");
	$("#modal-simple").modal("show");
});

$("#aAdmin").click(function(){
	$("#txtUsername").val("");
	$("#txtPassword").val("");
	$("#modal-login").modal("show");
});

$("#btnProceed").click(function(){
	var city   = $("#cmbSelectCities").val();
	var fname  = $("#txtFullName").val();
	var mobile = $("#txtMobile").val();
	
	if (city == "" || mobile == "") {
		alert("Please provide at least city and mobile number");
    } else {
		if (mobile.length < 11) {
			alert("Mobile number must be 11 digits");
        } else {
			$.ajax({
				url: "../_php/subscribe.php",
				data: {
					command : 'save',
					cityid  : city,
					name    : fname,
					mobile  : mobile
				},
				type: 'post',
				success: function (data) {
					var data = data.trim();
					
					if (data == 1) {
						alert("Thanks for subscribing");
						$("#modal-simple").modal("hide");
                    }
				}
			});
		}
	}
});

$("#btnLogin").click(function(){
	var username = $("#txtUsername").val();
	var password = $("#txtPassword").val();
	
	if (username == "" || password == "") {
		alert("Please provide username and password");
    } else {
		$.ajax({
			url: "../_php/login.php",
			data: {
				username : username,
				password : password
			},
			type: 'post',
			success: function (data) {
				var data = data.trim();
				
				if (data == 1) {
					$("#modal-login").modal("hide");
					
					setTimeout(function() {
						$('#mdAdmin').modal({
							backdrop: 'static',
							keyboard: false
						}); 
						$("#mdAdmin").modal("show");
						
						loadSched();
						loadSub();
						loadLink();
					}, 1000);
				} else {
					alert("Account does not exist");
					$("#txtUsername").val("");
					$("#txtPassword").val("");
				}
			}
		});
	}
});

$("#btnAddSched").click(function(){
	var time = $("#txtTime").val();
	
	if (time == "") {
		alert("Please add a schedule");
    } else {
		$.ajax({
			url: "../_php/addtime.php",
			data: {
				time : time,
			},
			type: 'post',
			success: function (data) {
				var data = data.trim();
				
				alert(data);
				$("#txtTime").val("");
				loadSched();
			}
		});
	}
});

$('#tblSchedule tbody').on('click', 'td button', function (){
	var data = tblSchedule.row( $(this).parents('tr') ).data();
	
	$.ajax({
		url: "../_php/deletetime.php",
		data: {
			row_id : data.id,
		},
		type: 'post',
		success: function (data) {
			var data = data.trim();
			
			alert(data);
			loadSched();
		}
	});
});

function loadSched() {
	tblSchedule = 
	$('#tblSchedule').DataTable({
		'destroy'       : true,
		'paging'        : true,
		'lengthChange'  : false,
		'pageLength'    : 5,
		"order"         : [],
		'info'          : true,
		'autoWidth'     : false,
		'select'        : true,
		'sDom'			: 'tp<"clear">', 
		'fnRowCallback' : function( nRow, aData, iDisplayIndex ) {
			$('td', nRow).attr('nowrap','nowrap');
			return nRow;
		},
		'ajax'          : {
			'url'       : "../_php/displaytime.php",
		},
		'aoColumns' : [
			{ mData: 'time'},
			{ mData: 'fullName'},
			{ mData: 'dateCreated'},
			{ mData: 'id',
				render: function (data,type,row) {
					return '<div class="input-group">' + 
						   '	<button type="submit" class="btn btn-default">' +
							'		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
							'			<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
							'			<line x1="4" y1="7" x2="20" y2="7"></line>' +
							'			<line x1="10" y1="11" x2="10" y2="17"></line>' +
							'			<line x1="14" y1="11" x2="14" y2="17"></line>' +
							'			<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>' +
							'			<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>' +
							'		</svg> Delete' +
							'	</button>' +
						   '</div>';
				}
			}
		],
		'aoColumnDefs': [
			//{"className": "custom-center", "targets": [8]},
			//{"className": "dt-center", "targets": [0,1,2,3,4,5,6,7]},
			{ "width": "1%", "targets": [3] },
			//{"className" : "hide_column", "targets": [9]} 
		],
		"drawCallback": function() {  
			row_count = this.fnSettings().fnRecordsTotal();
		},
		"fnInitComplete": function (oSettings, json) {
			//alert('DataTables has finished its initialisation.');
		}
	}).on('user-select', function (e, dt, type, cell, originalEvent) {
		if ($(cell.node()).parent().hasClass('selected')) {
			e.preventDefault();
		}
	});
}

function loadSub() {
	tblSubscribers = 
	$('#tblSubscribers').DataTable({
		'destroy'       : true,
		'paging'        : true,
		'lengthChange'  : false,
		'pageLength'    : 8,
		"order"         : [],
		'info'          : true,
		'autoWidth'     : false,
		'select'        : true,
		'sDom'			: 'tp<"clear">', 
		'fnRowCallback' : function( nRow, aData, iDisplayIndex ) {
			$('td', nRow).attr('nowrap','nowrap');
			return nRow;
		},
		'ajax'          : {
			'url'       : "../_php/displaysub.php",
		},
		'aoColumns' : [
			{ mData: 'cityID'},
			{ mData: 'cityName'},
			{ mData: 'fullName'},
			{ mData: 'mobileNumber'},
			{ mData: 'dateCreated'},
			{ mData: 'id',
				render: function (data,type,row) {
					return '<div class="input-group">' + 
						   '	<button type="submit" class="btn btn-default">' +
							'		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
							'			<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
							'			<line x1="4" y1="7" x2="20" y2="7"></line>' +
							'			<line x1="10" y1="11" x2="10" y2="17"></line>' +
							'			<line x1="14" y1="11" x2="14" y2="17"></line>' +
							'			<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>' +
							'			<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>' +
							'		</svg> Delete' +
							'	</button>' +
						   '</div>';
				}
			}
		],
		//'aoColumnDefs': [
		//	{"className": "custom-center", "targets": [8]},
		//	{"className": "dt-center", "targets": [0,1,2,3,4,5,6,7]},
		//	{ "width": "1%", "targets": [8] },
		//	{"className" : "hide_column", "targets": [9]} 
		//],
		"drawCallback": function() {  
			row_count = this.fnSettings().fnRecordsTotal();
		},
		"fnInitComplete": function (oSettings, json) {
			//alert('DataTables has finished its initialisation.');
		}
	}).on('user-select', function (e, dt, type, cell, originalEvent) {
		if ($(cell.node()).parent().hasClass('selected')) {
			e.preventDefault();
		}
	});
}

function loadLink() {
	tblLinks = 
	$('#tblLinks').DataTable({
		'destroy'       : true,
		'paging'        : true,
		'lengthChange'  : false,
		'pageLength'    : 8,
		"order"         : [],
		'info'          : true,
		'autoWidth'     : false,
		'select'        : true,
		'sDom'			: 'tp<"clear">', 
		'fnRowCallback' : function( nRow, aData, iDisplayIndex ) {
			$('td', nRow).attr('nowrap','nowrap');
			return nRow;
		},
		'ajax'          : {
			'url'       : "../_php/displaylink.php",
		},
		'aoColumns' : [
			{ mData: 'cityName'},
			{ mData: 'link'},
			{ mData: 'id',
				render: function (data,type,row) {
					return '<div class="input-group">' + 
						   '	<button type="submit" class="btn btn-default">' +
							'		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
							'			<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
							'			<line x1="4" y1="7" x2="20" y2="7"></line>' +
							'			<line x1="10" y1="11" x2="10" y2="17"></line>' +
							'			<line x1="14" y1="11" x2="14" y2="17"></line>' +
							'			<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>' +
							'			<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>' +
							'		</svg> Delete' +
							'	</button>' +
						   '</div>';
				}
			}
		],
		//'aoColumnDefs': [
		//	{"className": "custom-center", "targets": [8]},
		//	{"className": "dt-center", "targets": [0,1,2,3,4,5,6,7]},
		//	{ "width": "1%", "targets": [8] },
		//	{"className" : "hide_column", "targets": [9]} 
		//],
		"drawCallback": function() {  
			row_count = this.fnSettings().fnRecordsTotal();
		},
		"fnInitComplete": function (oSettings, json) {
			//alert('DataTables has finished its initialisation.');
		}
	}).on('user-select', function (e, dt, type, cell, originalEvent) {
		if ($(cell.node()).parent().hasClass('selected')) {
			e.preventDefault();
		}
	});
}

$('#txtFindSub').keyup(function(){
    tblSubscribers.search($(this).val()).draw() ;
});

$('#tblSubscribers tbody').on('click', 'td button', function (){
	var data = tblSubscribers.row( $(this).parents('tr') ).data();
	
	$.ajax({
		url: "../_php/delete_sub.php",
		data: {
			id : data.id,
		},
		type: 'post',
		success: function (data) {
			var data = data.trim();
			
			alert(data);
			loadSub();
		}
	});
});

$("#btnAddLink").click(function(){
	var cityID = $("#cmbSelectCities2").val();
	var link   = $("#txtLink").val();
	
	if (cityID == null || link == "") {
		alert("Please provide City and the Video Link");
    } else {
		$.ajax({
			url: "../_php/addlink.php",
			data: {
				cityID : cityID,
				link   : link
			},
			type: 'post',
			success: function (data) {
				var data = data.trim();
				
				alert(data);
				loadLink();
				
				$("#cmbSelectCities2").val(null).trigger('change');
				$("#txtLink").val('');
			}
		});
	}
});

$('#tblLinks tbody').on('click', 'td button', function (){
	var data = tblLinks.row( $(this).parents('tr') ).data();
	
	$.ajax({
		url: "../_php/deletelink.php",
		data: {
			id : data.id
		},
		type: 'post',
		success: function (data) {
			var data = data.trim();
			
			alert(data);
			loadLink();
		}
	});
});

