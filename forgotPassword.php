<!doctype html>
<html>
<head> 
<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
<script src="Chart.js"></script>
<meta charset="utf-8">
<title></title>
</head>

<body>
<div id="Holder">
<div id="Header">
  <p>&nbsp;</p>
  <p></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="NavBar">
	<nav>
    	<ul>
        	<li><a href="index.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="forgotPassword.php">Forgot password</a></li>
        </ul>
    </nav>
</div>
<div id="Content">
	<div id="PageHeading">
	  <h1>Sign up!</h1></div>
	<div id="ContentLeft">
	  <p>Welcome</p>
	  <h6>to the system!</h6>
	</div>
    <div id="ContentRight">
      <form action="send.php" method="post">
        <table width="506" border="0" align="center" id="table">
          <tbody>
            <tr bgcolor="#CCB6D5">
              <td width=auto><p>
                <label for="email" id="label" style="color: #FFFFFF">Enter your e-mail:                </label>
                <input name="email" type="email" class="text" id="email">                
                </p>
                              <p>&nbsp;</p></td>
            </tr>
            <tr bgcolor="#CCB6D5">
              <td><input type="submit" id="RegisterButton" value="Remind password!" style="color: #815493"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
</div>
<div id="Footer">
<div id="Stats" style="height: 50px; width: 1004px;  background-color:#E6C3E6; text-

							align: center; color:#FFFFFF; border-radius: 11px 11px 0px 0px"
							>
								<span style="font-size:18px;font-weight:bold;display:block"> Website statistics</span> </div>
							  <div id="chartContainer" style="height: 265px; width: 999px; border-color:#E6C3E6; 

							border-style: solid; border-radius: 0px 0px 11px 11px;"><canvas id="myChart" 
							width="970px" height="265px"></div>
							<script type="text/javascript">
							var ctx = document.getElementById("myChart").getContext("2d");
							var data = {
								labels: ["", "", "", "", "", "", "","","","","","","", ""],
								datasets: [
									{
										label: "My First dataset",
										fillColor: "rgba(151,187,205,0.2)",
										strokeColor: "rgba(151,187,205,1)",
										pointColor: "rgba(151,187,205,1)",
										pointStrokeColor: "#fff",
										pointHighlightFill: "#fff",
										pointHighlightStroke: "rgba(151,187,205,1)",
										data: [24, 37, 68, 56, 67, 45, 56, 42, 59, 72, 60, 81, 79, 98]
									}
									
								]
							};
							var myLineChart = new Chart(ctx).Line(data);
							</script>
			</div>
</div>
</div>



</body>
</html>
