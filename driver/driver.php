<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="drive.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
			<p style="margin-left: 8px;color:white;font-size: 18px;padding: 8px;">Driver Overview

			<a href="#" style="color:white;"><i class="fa fa-filter" aria-hidden="true" style="margin-left: 1030px;position: absolute;" title="Filter"></i></a>

			<a href="#" style="color:white;"><i class="fa fa-sliders" aria-hidden="true" style="margin-left: 1060px;position: absolute;" title="Settings"></i></a>

			<a href="#" style="color: white;"><i class="fa fa-question" aria-hidden="true" style="margin-left: 1090px;position: absolute;" title="Help"></i></a>

			</p>
		</div>

		<div id="fortable">
			
			<table>
				
				<tr>
					<th>Company
						<img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;">
					</th>

					<hr style="height: 220px;margin-left: 108px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 120px;">Branch
						<!-- <img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;"> -->
					</th>
					<hr style="height: 220px;margin-left: 180px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 200px;">Employee</th>
					<hr style="height: 220px;margin-left: 270px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 280px;">Employee No</th>
					<hr style="height: 220px;margin-left: 370px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 400px;">RFID Tag</th>
					<hr style="height: 220px;margin-left: 480px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 500px;">Designation</th>
					<hr style="height: 220px;margin-left: 580px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 620px;">State</th>
					<hr style="height: 220px;margin-left: 690px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 720px;margin-top: 8px;">Age
						<p style="margin-left: -10px;position: absolute;">[Year(s)]</p>
					</th>
					<hr style="height: 220px;margin-left: 770px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 785px;margin-top: 6px;">Driving
						<p style="margin-left: -10px;position: absolute;margin-top: -6px;">Experience</p><br>
						<p style="margin-left: -6px;position: absolute;margin-top: 8px;">[Year(s)]</p>
					</th>
					<hr style="height: 220px;margin-left: 845px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 860px;margin-top: 6px;">License To
						<p style="margin-left:10px;position: absolute;">Drive</p>
					</th>
					<hr style="height: 220px;margin-left: 930px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 940px;margin-top: 6px;">Has
						<p style="margin-left:0px;position: absolute;">User</p>
					</th>
					<hr style="height: 220px;margin-left: 970px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 990px;">Type</th>
					<hr style="height: 220px;margin-left: 1040px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 1055px;margin-top: 6px;">User
						<p style="margin-left:-2px;position: absolute;">Name</p>
					</th>
					<hr style="height: 220px;margin-left: 1100px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 1103px;">Password</th>
					<hr style="height: 220px;margin-left: 1165px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 1175px;margin-top: 6px;">Mobile
						<p style="margin-left:-2px;position: absolute;">Number</p>
					</th>
					<hr style="height: 220px;margin-left: 1220px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 1227px;margin-top: 6px;">Act
						<p style="margin-left:-2px;position: absolute;">ive</p>
					</th>
					<hr style="height: 220px;margin-left: 1250px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">
				</tr>

				<tr>
					<td>Your Company</td>
					<td style="margin-left: 114px;">Your<br style="margin-left: 114px;">Company</td>
					<td style="margin-left: 185px;">Rahul Sharma</td>
					<td style="margin-left: 280px;">123456</td>
					<td style="margin-left: 420px;">--</td>
					<td style="margin-left: 510px;">Driver</td>
					<td style="margin-left: 600px;">Karnataka</td>
					<td style="margin-left: 730px;">--</td>
					<td style="margin-left: 830px;">0</td>
					<td style="margin-left: 850px;">HMV (HGV)</td>
					<td style="margin-left: 940px;">Yes</td>
					<td style="margin-left: 975px;">password</td>
					<td style="margin-left: 1045px;">rahulshar</td>
					<td style="margin-left: 1110px;">123456</td>
					<td style="margin-left: 1235px;"><a href="#" style="color:green;"><i class="fa fa-user" aria-hidden="true"></i></a></td>
				</tr>

				<tr>
					<td style="margin-top: 100px;">Your Company</td>
					<td style="margin-left: 114px;margin-top: 100px;">Your<br style="margin-left: 114px;">Company</td>
					<td style="margin-left: 185px;margin-top: 100px;">Rahul Sharma</td>
					<td style="margin-left: 280px;margin-top: 100px;">123456</td>
					<td style="margin-left: 420px;margin-top: 100px;">--</td>
					<td style="margin-left: 510px;margin-top: 100px;">Driver</td>
					<td style="margin-left: 600px;margin-top: 100px;">Karnataka</td>
					<td style="margin-left: 730px;margin-top: 100px;">--</td>
					<td style="margin-left: 830px;margin-top: 100px;">0</td>
					<td style="margin-left: 850px;margin-top: 100px;">HMV (HGV)</td>
					<td style="margin-left: 940px;margin-top: 100px;">Yes</td>
					<td style="margin-left: 975px;margin-top: 100px;">password</td>
					<td style="margin-left: 1045px;margin-top: 100px;">rahulshar</td>
					<td style="margin-left: 1110px;margin-top: 100px;">123456</td>
					<td style="margin-left: 1235px;margin-top: 100px;"><a href="#" style="color:green;"><i class="fa fa-user" aria-hidden="true"></i></a></td>
				</tr>

				<tr>
					<td style="margin-top: 140px;">Your Company</td>
					<td style="margin-left: 114px;margin-top: 140px;">Your<br style="margin-left: 114px;">Company</td>
					<td style="margin-left: 185px;margin-top: 140px;">Rahul Sharma</td>
					<td style="margin-left: 280px;margin-top: 140px;">123456</td>
					<td style="margin-left: 420px;margin-top: 140px;">--</td>
					<td style="margin-left: 510px;margin-top: 140px;">Driver</td>
					<td style="margin-left: 600px;margin-top: 140px;">Karnataka</td>
					<td style="margin-left: 730px;margin-top: 140px;">--</td>
					<td style="margin-left: 830px;margin-top: 140px;">0</td>
					<td style="margin-left: 850px;margin-top: 140px;">HMV (HGV)</td>
					<td style="margin-left: 940px;margin-top: 140px;">Yes</td>
					<td style="margin-left: 975px;margin-top: 140px;">password</td>
					<td style="margin-left: 1045px;margin-top: 140px;">rahulshar</td>
					<td style="margin-left: 1110px;margin-top: 140px;">123456</td>
					<td style="margin-left: 1235px;margin-top: 140px;"><a href="#" style="color:green;"><i class="fa fa-user" aria-hidden="true"></i></a></td>
				</tr>

				<tr>
					<td style="margin-top: 180px;">Your Company</td>
					<td style="margin-left: 114px;margin-top: 180px;">Your<br style="margin-left: 114px;">Company</td>
					<td style="margin-left: 185px;margin-top: 180px;">Rahul Sharma</td>
					<td style="margin-left: 280px;margin-top: 180px;">123456</td>
					<td style="margin-left: 420px;margin-top: 180px;">--</td>
					<td style="margin-left: 510px;margin-top: 180px;">Driver</td>
					<td style="margin-left: 600px;margin-top: 180px;">Karnataka</td>
					<td style="margin-left: 730px;margin-top: 180px;">--</td>
					<td style="margin-left: 830px;margin-top: 180px;">0</td>
					<td style="margin-left: 850px;margin-top: 180px;">HMV (HGV)</td>
					<td style="margin-left: 940px;margin-top: 180px;">Yes</td>
					<td style="margin-left: 975px;margin-top: 180px;">password</td>
					<td style="margin-left: 1045px;margin-top: 180px;">rahulshar</td>
					<td style="margin-left: 1110px;margin-top: 180px;">123456</td>
					<td style="margin-left: 1235px;margin-top: 180px;"><a href="#" style="color:green;"><i class="fa fa-user" aria-hidden="true"></i></a></td>
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
					<input type="text" name="val1" style="margin-left: 450px;position: absolute;margin-top: 100px;border: 1px solid grey;" />
		
					<div style="margin-left: 600px;position: absolute;margin-top: 100px;border: 1px solid grey;width: 140px;height: 24px;" 
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
					<a href="#"><i class="fa fa-search" aria-hidden="true" style="margin-left: 748px;position: absolute;margin-top: 105px;"></i></a>
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
				<a href="#"><i class="fa fa-chevron-left" aria-hidden="true" style="position: absolute;margin-left: 1100px;margin-top: 105px;"></i></a>

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

				<a href="#"><i class="fa fa-chevron-right" aria-hidden="true" style="position: absolute;margin-left: 1180px;margin-top: 105px;"></i></a>

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