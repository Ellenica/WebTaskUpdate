<!doctype html>
<html>
<head> 
<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<title></title>
</head>

<body>
<div id="Holder">
<div id="Header">
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
	  <div id="ytplayer"></div>

	<br>
	<iframe width="355" height=200" src="https://www.youtube.com/embed/Q5763pPchvw" 
	frameborder="0" allowfullscreen></iframe>

	</div>
    <div id="ContentRight">
      <form action="insertData.php" method="post">
        <table width=500 border="0" align="center" id="table">
          <tbody>
            <tr bgcolor="#CCB6D5">
              <td width=auto><p>
                <label for="firstName" id="label" style="color: #FFFFFF">First name:                </label>
                <br>
				<input name="firstName" type="text" class="text" id="firstName">                
                </p>
                <p>
                  <label for="lastName" id="label" style="color: #FFFFFF">Last name:</label>              
                  <br>
				  <input name="lastName" type="text" class="text" id="lastName">
              </p>               
				<p>
                  <label for="username" id="label" style="color: #FFFFFF">Username:</label>              
                  <br>
				  <input name="username" type="text" class="text" id="username">
              </p>   
			  <p>
                  <label for="email" id="label" style="color: #FFFFFF">E-mail:</label>              
                  <br>
				  <input name="email" type="email" class="text" id="email">
				  
              </p>  
				<p>
                  <label for="password" id="label" style="color: #FFFFFF">Password:</label>              
                  <br>
				  <input name="password" type="password" class="text" id="password">
              </p> 
			  <p>
                  <label for="confirmPassword" id="label" style="color: #FFFFFF">Confirm password:</label>              
                  <br>
				  <input name="confirmPassword" type="password" class="text" id="password">
              </p> 
			  <p>&nbsp;</p></td>
            </tr>
            <tr bgcolor="#CCB6D5">
              <td><input type="submit" id="RegisterButton" value="Register" style="color: #815493"></td>
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


</body>
</html>