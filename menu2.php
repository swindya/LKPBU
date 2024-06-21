
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen 2</title>

<link href="stylemenuhoriz.css" rel="stylesheet" />
<link rel="stylesheet" href="../docsupport/style.css">
<link rel="stylesheet" href="../docsupport/prism.css">
<link rel="stylesheet" href="chosen.css">
<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>


</head>
<body>
<nav>
	<ul>
		<li><a href="#">Impor Data</a></li>
		<li><a href="#">Input Pembayaran Transfer Awal</a></li>
		<li><a href="#">Retur</a></li>
		<li><a href="#">Input Pembayaran Retur</a></li>
		<li><a href="#">Laporan</a></li>
		<li><a href="#">Rekening Koran iCons</a></li>
		<li><a href="#">Laporan VS Rek Koran</a></li>
	</ul>
</nav>
<form action="demo_form.asp">
	<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 40px; height: 200px;" width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td colspan="4" style="padding-left: 30px; text-align: left; font-size: 12; height: 60px"><h1>PT Telkom</h1></td>
          </tr>
          <tr> 
            <td colspan="4" style="padding-left: 30px; text-align: left; font-size: 12; height: 20px"></td>
          </tr>
          <tr> 
            <td width="15%" style="padding-left: 20px; text-align: left; font-size: 12;">&nbsp&nbsp&nbsp Tahun Buku Dividen</td>
			<td width="2%" style="padding-left: auto; text-align: left; font-size: 12;">:
            <td width="13%" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<select name="tahun" data-placeholder="Tahun buku dividen" style="width:90px;" class="chosen-select-deselect" tabindex="12">
						<option value=""></option>
						<option>2013</option>
						<option>2014</option>
						<option>2015</option>
					</select> 
				</div>
			</td>
			<td width="70%" style="padding-left: auto; text-align: left; font-size: 12;">Pilih Tahun Buku</td>
		  </tr>
          <tr> 
            <td width="15%" style="padding-left: 20px; text-align: left; font-size: 12;">&nbsp&nbsp&nbsp Nomor Rekening</td>
			<td width="2%" style="padding-left: auto; text-align: left; font-size: 12;">:
            <td width="13%" style="padding-left: auto; text-align: left; font-size: 12;">
			    <!--div id="container"-->
					<!--div id="content"-->					    
						<!--div class="side-by-side clearfix"-->
							<div class="side-by-side clearfix">
								<select name="norrek" data-placeholder="Nomor Rek" style="width:150px;" class="chosen-select-deselect" tabindex="12">
									<option value=""></option>
									<option>004532290</option>
									<option>two</option>
									<option>three</option>
								</select> 
							</div>
						<!--/div-->
					<!--/div-->
				<!--/div-->
			</td>
			<td width="70%" style="padding-left: auto; text-align: left; font-size: 12;"></td>
		  </tr>
          <tr> 
            <td colspan="4" style="padding-left: auto; text-align: left; font-size: 12; height: 20px">
                <!--input name="remember" type="checkbox" id="remember" value="1">
                Remember Me</div></td-->
          </tr>
          <tr> 
            <td width="15%" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="2%" style="padding-left: auto; text-align: left; font-size: 12;">
			<td width="13%" style="padding-left: auto; text-align: left; font-size: 12;">
               &nbsp&nbsp&nbsp&nbsp<input type="checkbox" name="jenisbayar" value="tunai"> Tunai &nbsp&nbsp&nbsp&nbsp
				<input type="checkbox" name="jenisbayar" value="transfer" checked> Transfer<br>			
              </td>
			<td width="70%"></td>

          </tr>
    </table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
</form>

</body>
</html>