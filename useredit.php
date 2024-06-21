<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>

	<div id='content'>
		<div id='basic-modal'>
			<h3></h3>
			<!--input type='button' name='basic' value='Demo' class='basic'/> or <a href='#' class='basic'>Demo</a-->
		</div>
		
		<!-- modal content -->
		<div id="basic-modal-content">
			<form method="post" class="signin" name="adduser" id="adduser" action="userupdate.php">
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="500px">
					<tr height="40px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#9999DD" size="4">Data User Baru</FONT>
						</td>
					</tr>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;" width="120px">
							<FONT face="arial" color="#7777EE" size="2">Nama</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="320px">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textbox" id="nama" name="nama" type="text" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;" width="120px">
							<FONT face="arial" color="#7777EE" size="2">Username</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="320px">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textbox" id="username" name="username" value="" type="text" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#7777EE" size="2">Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textbox" id="passwd" name="passwd" value="" type="password" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#7777EE" size="2">Retype Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textbox" id="passwd1" name="passwd1" value="" type="password" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;" width="120px">
							<FONT face="arial" color="#7777EE" size="2">Level</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="320px">
							<div class="side-by-side clearfix">
								<select id="levelid" name="levelid" data-placeholder="Level Access" style="width:100px;">
									<option value=""></option>
<?php
									for ($i=1;$i<=3;$i++) {
?>
									<option value="<?php print $i;?>"><?php print $i . " - " . $leveli[$i];?></option>
<?php
									}
?>
								</select> 
							</div>
						</td>
					</tr>
					</form>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
							<!--button input type="submit">Tambahkan</button-->
							<!--a class="button orange medium" onclick="addktp(this.form);return false;">Tambahkan</a-->
							<input type="hidden" id="userid" name="userid" value="<?php print $userid;?>">
							<a class="button orange medium" onclick="return adduseri();">Update</a>
						</td>
					</tr>
			</table>
          </form>
		</div>

		<!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>
	</div>
	<div id='footer'>
	</div>
</div>

</body>

</html>