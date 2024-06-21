<html>
<?php
session_start();
if (isset($_SESSION['statuslogin'])){
}
else {
	$_SESSION['statuslogin'] = 1;
}
?>
<head>
<link rel="shortcut icon" href="logobnilogo.jpg" />
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
<link href="styles.css" rel="stylesheet" type="text/css">
  <title>Login Deviden</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<style type="text/css">
	.login{
	font-size:75%;
	font-family:Arial, Helvetica, sans-serif;
	position: relative;
	width:400px;
}

.login_side{
	height: 200px;
	width:110px;
	padding: 0 10px 0 10px;
	float: left;
	border: 4px solid #ccc;
	border-right:none;
	-webkit-border-top-left-radius: 20px;
	-webkit-border-bottom-left-radius: 20px;
	-moz-border-radius-topleft: 20px;
	-moz-border-radius-bottomleft: 20px;
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;

background: #029f69; /* Old browsers */
background: -moz-linear-gradient(top,  #029f69 0%, #04d890 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#029f69), color-stop(100%,#04d890)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #029f69 0%,#04d890 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #029f69 0%,#04d890 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #029f69 0%,#04d890 100%); /* IE10+ */
background: linear-gradient(top,  #029f69 0%,#04d890 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#029f69', endColorstr='#04d890',GradientType=0 ); /* IE6-9 */


}

.login_inside h2, .login_side a{
	color: #FFF;
}
.login_inside p{
	line-height:.5em;
}

.login_inside h2{
	font-size:2em;
}
.login_inside a{
	font-size:1.2em;
	text-decoration:none;
	border-bottom: double #029f69 1px;
}

form {
	float: right;
    width: 231px;
    height: 160px;
    padding: 20px 15px;
    border: 4px solid #ccc;
    border-left: 1px solid #ccc;
    color: #FFF;
    font-size:1.2em;
 
	/*** Rounded Corners ***/
	-webkit-border-top-right-radius: 20px;
	-webkit-border-bottom-right-radius: 20px;
	-moz-border-radius-topright: 20px;
	-moz-border-radius-bottomright: 20px;
	border-top-right-radius: 20px;
	border-bottom-right-radius: 20px;
 
/* Opera 11.10+ */
background: -o-linear-gradient(top, rgba(228,228,230,1), rgba(153,153,153,1));

/* Firefox 3.6+ */
background: -moz-linear-gradient(top, rgba(228,228,230,1), rgba(153,153,153,1));

/* Chrome 7+ & Safari 5.03+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(228,228,230,1)), color-stop(1, rgba(153,153,153,1)));

/* IE5.5 - IE7 */
filter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#FFE4E4E6,EndColorStr=#FF999999);

/* IE8 */
-ms-filter: "progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#FFE4E4E6,EndColorStr=#FF999999)"
 
}

input {
    width: 200px;
    background: #f8f8f8;
    padding: 6px;
    margin-bottom: 10px;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    border-bottom: 1px solid #ffffff;

    /*** Transition Selectors - What properties to animate and how long ***/
    -webkit-transition-property: -webkit-box-shadow, background;
    -webkit-transition-duration: 0.25s;

    -webkit-box-shadow: inset 0px 1px 3px 0px #444;
	-moz-box-shadow: inset 0px 1px 3px 0px #444;
	box-shadow: inset 0px 1px 3px 0px #444;

	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

.submit{
    width: 100px;
    float: left;
	position: relative;
    left: 102px;
	top: 10px;
    background: #04d890;
    padding: 4px;
    margin: 10px;
    border-top: 1px solid #029f69;
    border-left: 1px solid #029f69;
    border-right: 0px;
    border-bottom: 0px;
    cursor: pointer;
    color: #FFF;
    font-size:1.1em;

    /*** Transition Selectors - What properties to animate and how long ***/
    -webkit-transition-property: -webkit-box-shadow, background;
    -webkit-transition-duration: 0.25s;

    -webkit-box-shadow: 0px 1px 3px 0px #666;
	-moz-box-shadow: 0px 1px 3px 0px #666;
	box-shadow: 0px 1px 3px 0px #666;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.mytext{
    float: left;
	position: relative;
    left: 14px;
	color: #555;
}
</style>
<style>
p.small {
    line-height: 1%;
}

p.big {
    line-height: 200%;
}
</style>
<style type="text/css">
.myTableStyle
{
	position:fixed;
    height:50%;
    width:50%;
    top:25%;
    left:25%;
 
    /*Alternatively you could use: */
    /*
    position: fixed;
    bottom: 50%;
    right: 50%;
    */
 
 
}
</style>
</head>

<body>


<table align="center" class="myTableStyle" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: auto;" width="400px" border="0" cellspacing="0" cellpadding="0">
	<tr height="15px">
		<td align="center" style="padding-left: auto; margin-left: auto; margin-right: auto; text-align: center; font-size: 9; width=400px">
		<?php
		if ($_SESSION['statuslogin'] == 8) {
?>
		<div style="width: 100%;text-align:center"><font color="red" size="1">Username/password is not found. Try again</font></div>
<?php	
		}
		elseif ($_SESSION['statuslogin'] == 7) {
?>
		<div style="width: 100%;text-align:center"><font color="red" size="1">Session expired</font></div>
<?php
		}
		else {
		}
		$_SESSION['statuslogin'] = 0;
?>
		</td>
	</tr>
	<tr>
		<td align="center" style="padding-left: auto; margin-left: auto; margin-right: auto; text-align: center; font-size: 12; width=400px">
<DIV align="center">
		<div class="login">
	<div class="login_side">
		<div class="login_inside">
		<h2>LOGIN</h2>
			<img alt="File:Crystal Clear app Login Manager.png" src="./images/login48.png" width="48" height="48" data-file-width="48" data-file-height="128" /></a>
			<p>&nbsp;</p>
			<p><a href="#">create new account</a></p>
			<p><a href="#">forgot password</a></p>
			<p><a href="#">need help?</a></p>
	</div>
	</div>
		<form action="mainmenu.php" method="post" name="logForm" id="logForm" >
        	<label class="mytext">Login Name</label>
			<p class="small"><br></p>
            	<input type="text" name="username" />
        	<label class="mytext">Password</label>
			<p class="small"><br></p>
            	<input type="Password" name="passwd" />
            	<input type="submit" value="Submit" name="submit" class="submit" />
		</form>
</div>
</DIV>
		</td>
	</tr>
</body>

</html>
<?php
//echo $_SESSION['statuslogin'];
	$_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
    //$_SESSION['expire'] = $_SESSION['start'] + (2 * 60);
	//session_destroy();
?>