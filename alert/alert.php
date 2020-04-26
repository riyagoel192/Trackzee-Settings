<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="alert_style.css">
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
			<p style="margin-left: 8px;color:white;font-size: 18px;padding: 8px;">Alert

			<a href="#" style="color:white;"><i class="fa fa-filter" aria-hidden="true" style="margin-left: 1100px;position: absolute;" title="Filter"></i></a>

			<a href="#" style="color:white;"><i class="fa fa-sliders" aria-hidden="true" style="margin-left: 1130px;position: absolute;" title="Settings"></i></a>

			<a href="#" style="color: white;"><i class="fa fa-question" aria-hidden="true" style="margin-left: 1160px;position: absolute;" title="Help"></i></a>

			</p>
		</div>

		<div id="fortable">
			
			<table>
				
				<tr>
					<th style="margin-left: 40px;">Company
						<img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;">
					</th>

					<hr style="height: 170px;margin-left: 140px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 200px;">Branch
						<img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;">
					</th>
					<hr style="height: 170px;margin-left: 285px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 360px;">Name
						<img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;">
					</th>
					<hr style="height: 170px;margin-left: 460px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 510px;">Alert Type
						<img src="https://static.uffizio.com/4.8.33/images/arrow-up.gif" style="width: 12px;height: 11px;">
					</th>
					<hr style="height: 170px;margin-left: 620px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 680px;">Reason</th>
					<hr style="height: 170px;margin-left: 800px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 840px;">Sms</th>
					<hr style="height: 170px;margin-left: 800px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 960px;">Email</th>
					<hr style="height: 170px;margin-left: 910px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 1050px;">Notification</th>
					<hr style="height: 170px;margin-left: 1020px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<th style="margin-left: 1170px;">Buzzer</th>
					<hr style="height: 170px;margin-left: 1130px;border-left: 1px solid grey;position: absolute;margin-top: -1px;">

					<!-- <th style="margin-left: 1140px;">Payment Status</th>
					<hr style="height: 290px;margin-left: 108px;border-left: 1px solid grey;position: absolute;margin-top: -1px;"> -->
				</tr>

				<tr>
					<td style="margin-left: 30px;">Your Company</td>
					<td style="margin-left: 200px;">All</td>
					<td style="margin-left: 320px;">Air Condition</td>
					<td style="margin-left: 490px;">Air Condition</td>
					<td style="margin-left: 700px;">--</td>
					<td style="margin-left: 850px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 960px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 1060px;">
						<img src="https://static.uffizio.com/4.8.33/images/hook_green.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 1180px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
				</tr>

				<tr>
					<td style="margin-left: 30px;margin-top: 70px;">Your Company</td>
					<td style="margin-left: 200px;margin-top: 70px;">All</td>
					<td style="margin-left: 320px;margin-top: 70px;">Air Condition</td>
					<td style="margin-left: 490px;margin-top: 70px;">Air Condition</td>
					<td style="margin-left: 700px;margin-top: 70px;">--</td>
					<td style="margin-left: 850px;margin-top: 70px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 960px;margin-top: 70px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 1060px;margin-top: 70px;">
						<img src="https://static.uffizio.com/4.8.33/images/hook_green.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 1180px;margin-top: 70px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
				</tr>

				<tr>
					<td style="margin-left: 30px;margin-top: 105px;">Your Company</td>
					<td style="margin-left: 200px;margin-top: 105px;">All</td>
					<td style="margin-left: 320px;margin-top: 105px;">Air Condition</td>
					<td style="margin-left: 490px;margin-top: 105px;">Air Condition</td>
					<td style="margin-left: 700px;margin-top: 105px;">--</td>
					<td style="margin-left: 850px;margin-top: 105px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 960px;margin-top: 105px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 1060px;margin-top: 105px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 1180px;margin-top: 105px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
				</tr>

				<tr>
					<td style="margin-left: 30px;margin-top: 140px;">Your Company</td>
					<td style="margin-left: 200px;margin-top: 140px;">All</td>
					<td style="margin-left: 320px;margin-top: 140px;">Air Condition</td>
					<td style="margin-left: 490px;margin-top: 140px;">Air Condition</td>
					<td style="margin-left: 700px;margin-top: 140px;">--</td>
					<td style="margin-left: 850px;margin-top: 140px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 960px;margin-top: 140px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 1060px;margin-top: 140px;">
						<img src="https://static.uffizio.com/4.8.33/images/hook_green.gif" style="height: 15px;width: 15px;">
					</td>
					<td style="margin-left: 1180px;margin-top: 140px;">
						<img src="https://static.uffizio.com/4.8.33/images/bs_delete.gif" style="height: 15px;width: 15px;">
					</td>
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
					<input type="text" name="val1" style="margin-left: 450px;position: absolute;margin-top: 147px;border: 1px solid grey;" />
		
					<div style="margin-left: 600px;position: absolute;margin-top: 147px;border: 1px solid grey;width: 140px;height: 24px;" 
					onclick="func()">
						<p style="position: absolute;margin-left: 10px;">All</p>
					</div>

					<div id="size">
						<ul style="list-style-type: none;">
							<li style="color:black;position: absolute;margin-left: -30px;">All</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Company</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Branch</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Name</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Alert Type</li><br>
							<li style="color:black;position: absolute;margin-left: -30px;">Reason</li><br>
						</ul>
					</div>
					<a href=""><i class="fa fa-search" aria-hidden="true" style="margin-left: 748px;position: absolute;margin-top: 149px;"></i></a>
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
				<a href="#"><i class="fa fa-chevron-left" aria-hidden="true" style="position: absolute;margin-left: 1100px;margin-top: 150px;"></i></a>

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

				<a href="#"><i class="fa fa-chevron-right" aria-hidden="true" style="position: absolute;margin-left: 1180px;margin-top: 150px;"></i></a>

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