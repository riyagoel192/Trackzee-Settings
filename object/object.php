<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="obj_style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style>
		
		th:hover
		{
			color:red;
		}

		tr:hover
		{
			background-color: lightgreen !important;
			/*display: block;*/
		}

		tr:hover td
		{
			background-color: lightgreen !important;
		}
	
	</style>
</head>
<body style="background-color:#eaeded;">

	<?php
		include('sample.php');
	?>

	<div id="main">
		<div id="company">
			<p style="margin-left: 8px;color:white;font-size: 18px;padding: 8px;">Object Overview

			<a href="#" style="color:white;"><i class="fa fa-filter" aria-hidden="true" style="margin-left: 1030px;position: absolute;" title="Filter"></i></a>

			<a href="#" style="color:white;"><i class="fa fa-sliders" aria-hidden="true" style="margin-left: 1060px;position: absolute;" title="Settings"></i></a>

			<a href="#" style="color: white;"><i class="fa fa-question" aria-hidden="true" style="margin-left: 1090px;position: absolute;" title="Help"></i></a>

			</p>
		</div>

		<div id="fortable">
			
			<table>
				
				<tr>
					<th style="margin-left: 10px;">Company
						<img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;">
					</th>

					<hr style="height: 570px;margin-left: 80px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 100px;">Branch
						<!-- <img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;"> -->
					</th>
					<hr style="height: 570px;margin-left: 170px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 180px;">Object Name</th>
					<hr style="height: 570px;margin-left: 270px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 280px;">Plate Number</th>
					<hr style="height: 570px;margin-left: 370px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 400px;">IMEI Number</th>
					<hr style="height: 570px;margin-left: 490px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 520px;">SIM Number</th>
					<hr style="height: 570px;margin-left: 610px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 630px;">GPS Device Type</th>
					<hr style="height: 570px;margin-left: 740px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 760px;">Timezone</th>
					<hr style="height: 570px;margin-left: 840px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 855px;">Created Date</th>
					<hr style="height: 570px;margin-left: 940px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 950px;">Installation Date</th>
					<hr style="height: 570px;margin-left: 1050px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 1080px;">Sensor</th>
					<hr style="height: 570px;margin-left: 1160px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 1180px;">Expiry Date</th>

				</tr>

				<tr>
					<td>Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;">9786756453</td>
					<td style="margin-left: 530px;">9786756453</td>
					<td style="margin-left: 630px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;">UTC+00:00</td>
					<td style="margin-left: 860px;">25-01-2020</td>
					<td style="margin-left: 990px;">--</td>
					<td style="margin-left: 1100px;">--</td>
					<td style="margin-left: 1210px;">--</td>
				</tr>

				<tr>
					<td style="margin-top: 90px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 90px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 90px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 90px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 90px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 90px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 90px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 90px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 90px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 90px;">--</td>
					<td style="margin-left: 1100px;margin-top: 90px;">--</td>
					<td style="margin-left: 1210px;margin-top: 90px;">--</td>
				</tr>

				<tr>
					<td style="margin-top: 140px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 140px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 140px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 140px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 140px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 140px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 140px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 140px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 140px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 140px;">--</td>
					<td style="margin-left: 1100px;margin-top: 140px;">--</td>
					<td style="margin-left: 1210px;margin-top: 140px;">--</td>
				</tr>

				<tr>
					<td style="margin-top: 190px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 190px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 190px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 190px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 190px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 190px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 190px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 190px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 190px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 190px;">--</td>
					<td style="margin-left: 1100px;margin-top: 190px;">--</td>
					<td style="margin-left: 1210px;margin-top: 190px;">--</td>
				</tr>

				<tr>
					<td style="margin-top: 240px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 240px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 240px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 240px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 240px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 240px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 240px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 240px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 240px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 240px;">--</td>
					<td style="margin-left: 1100px;margin-top: 240px;">--</td>
					<td style="margin-left: 1210px;margin-top: 240px;">--</td>
				</tr>

				<tr>
					<td style="margin-top: 290px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 290px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 290px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 290px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 290px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 290px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 290px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 290px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 290px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 290px;">--</td>
					<td style="margin-left: 1100px;margin-top: 290px;">--</td>
					<td style="margin-left: 1210px;margin-top: 290px;">--</td>
				</tr>

				<tr>
					<td style="margin-top: 340px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 340px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 340px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 340px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 340px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 340px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 340px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 340px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 340px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 340px;">--</td>
					<td style="margin-left: 1100px;margin-top: 340px;">--</td>
					<td style="margin-left: 1210px;margin-top: 340px;">--</td>
				</tr>

				<tr>
					<td style="margin-top: 390px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 390px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 390px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 390px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 390px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 390px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 390px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 390px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 390px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 390px;">--</td>
					<td style="margin-left: 1100px;margin-top: 390px;">--</td>
					<td style="margin-left: 1210px;margin-top: 390px;">--</td>
				</tr>

				<tr>
					<td style="margin-top: 440px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 440px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 440px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 440px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 440px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 440px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 440px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 440px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 440px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 440px;">--</td>
					<td style="margin-left: 1100px;margin-top: 440px;">--</td>
					<td style="margin-left: 1210px;margin-top: 440px;">--</td>
				</tr>

				<tr>
					<td style="margin-top: 490px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 490px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 490px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 490px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 490px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 490px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 490px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 490px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 490px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 490px;">--</td>
					<td style="margin-left: 1100px;margin-top: 490px;">--</td>
					<td style="margin-left: 1210px;margin-top: 490px;">--</td>
				</tr>
				
				<tr>
					<td style="margin-top: 540px;">Uffizio<br>Reseller</td>
					<td style="margin-left: 100px;margin-top: 540px;">Uffizio<br style="margin-left: 100px;">Branch</td>
					<td style="margin-left: 180px;margin-top: 540px;">Uffizio Branch<br style="margin-left: 180px;">Vehicle</td>
					<td style="margin-left: 280px;margin-top: 540px;">Uffizio Branch<br style="margin-left: 280px;">Vehicle</td>
					<td style="margin-left: 410px;margin-top: 540px;">9786756453</td>
					<td style="margin-left: 530px;margin-top: 540px;">9786756453</td>
					<td style="margin-left: 630px;margin-top: 540px;">VT1100A-MobiGPS</td>
					<td style="margin-left: 760px;margin-top: 540px;">UTC+00:00</td>
					<td style="margin-left: 860px;margin-top: 540px;">25-01-2020</td>
					<td style="margin-left: 990px;margin-top: 540px;">--</td>
					<td style="margin-left: 1100px;margin-top: 540px;">--</td>
					<td style="margin-left: 1210px;margin-top: 540px;">--</td>
				</tr>

			</table>

			<div id="line"></div>

			<div id="last">
				
				<div id="back">
					<a href="#" style="color:white;"><i class="fa fa-arrow-left fa-2x" aria-hidden="true" style="color:white;margin-top: 6px;margin-left: 10px;" title="Back"></i></a>
				</div>

				<div id="reset">
					<a href="#" style="color:#234292;"><i class="fa fa-refresh fa-2x" aria-hidden="true" style="color:#234292;margin-top: 6px;margin-left: 10px;" title="Reset"></i></a>
				</div>

				<div id="xls">
					<a href="#"><img src="xls.jpg" title="Excel Download" style="height: 50px;width: 70px;"></a>
				</div>

				<form>
					<input type="text" name="val1" style="margin-left: 450px;position: absolute;margin-top: 295px;border: 1px solid grey;" />
		
					<div style="margin-left: 600px;position: absolute;margin-top: 295px;border: 1px solid grey;width: 140px;height: 24px;" 
					onclick="func()">
						<p style="position: absolute;margin-left: 10px;">All</p>

						<img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;margin-left: 120px;margin-top: -8px;">
						<img src="https://static.uffizio.com/4.8.33/images/arrow-down.gif" style="width: 12px;height: 11px;margin-left: 120px;margin-top:
						-33px;">

					</div>

					<div id="size">
						<ul style="list-style-type: none;">
							<li style="color:black;position: absolute;margin-left: -30px;">All</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Company</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Branch</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Employee</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Employee No</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">RFID Tag</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Designation</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">State</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Age[Year(s)]</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Driving Experience[Year(s)]</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">License to Drive</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Verification Password</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Has User</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Type</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Username</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Password</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Mobile Number</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Active</li><br>
						</ul>
					</div>
					<a href="#"><i class="fa fa-search" aria-hidden="true" style="margin-left: 748px;position: absolute;margin-top: 300px;"></i></a>
				</form>

				<div id="pages" onclick="show()">

					<i class="fa fa-bars" aria-hidden="true" style="margin-left: 4px;color:#234292;"></i>
					<p style="margin-left: 20px;margin-top: -20px;position: absolute;">20</p>
					<img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;margin-left: 40px;margin-top: -50px;">
					<img src="https://static.uffizio.com/4.8.33/images/arrow-down.gif" style="width: 12px;height: 11px;margin-left: 40px;margin-top: -75px;">

					<div id="showdiv">
						
						<ul style="list-style-type: none;">
							<li style="color:black;position: absolute;margin-left: -30px;">10</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">20</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">30</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">40</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">50</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">100</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">200</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">300</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">400</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">500</li><br>
							<li style="color:black;position: absolute;margin-left: -35px;">1000</li><br>
						</ul>

					</div>

				</div>
				<a href="#"><i class="fa fa-chevron-left" aria-hidden="true" style="position: absolute;margin-left: 1100px;margin-top: 300px;"></i></a>

				<div id="pages" style="margin-left: 1115px;" onclick="one()">

					<i class="fa fa-file-text" aria-hidden="true" style="margin-left: 4px;color:#234292;"></i>
					<p style="margin-left: 25px;margin-top: -20px;position: absolute;">1</p>
					<img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;margin-left: 40px;margin-top: -50px;">
					<img src="https://static.uffizio.com/4.8.33/images/arrow-down.gif" style="width: 12px;height: 11px;margin-left: 40px;margin-top: -75px;">

					<div id="showone">
						<ul style="list-style-type: none;">
							<li style="color:black;position: absolute;margin-left: -30px;">1</li><br>
						</ul>
					</div>

				</div>

				<a href="#"><i class="fa fa-chevron-right" aria-hidden="true" style="position: absolute;margin-left: 1180px;margin-top: 300px;"></i></a>

				<div id="content">
					<p>1-4 (4)</p>
				</div>

			</div>

		</div>
	</div>

</body>
</html>

<script>
	function func()
	{
		size.style.display="block";
	}

	function show()
	{
		showdiv.style.display="block";
	}

	function one()
	{
		showone.style.display="block";
	}
</script>