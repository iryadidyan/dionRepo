<?php
	define('INCLUDE_CHECK',1);
	require "register/functions.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrasi Hotspot SMK MA'ARIF NU TIRTO</title>

<link rel="stylesheet" type="text/css" href="register/demo.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="register/script.js"></script> -->
</head>
<body>

<div id="div-regForm">
<div class="form-title">Daftar kan Username</div>
<div class="form-sub-title">Untuk bisa menggunakan Akun hotspot</div>

<form id="regForm" action="act_reg.php" method="post" >
<table>
  <tbody>
		<tr>
			<td><label for="nis">Nomor Induk:</label></td>
			<td><div class="input-container"><input name="nis" id="nis" type="text" /></div></td>
		</tr>
  <tr>
    <td><label for="fname">Nama Depan:</label></td>
    <td><div class="input-container"><input name="fname" id="fname" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="lname">Nama Belakang:</label></td>
    <td><div class="input-container"><input name="lname" id="lname" type="text" /></div></td>
  </tr>
	<tr>
    <td><label for="jurusan">Jurusan:</label></td>
    <td>
    <div class="input-container">
    <select name="jurusan" id="jurusan">
    <option value="0">Select :</option>
    <option value="1">Administrasi Perkantoran</option>
    <option value="2">Akuntansi</option>
		<option value="3">Busana Butik</option>
		<option value="4">Teknik Kendaraan Ringan</option>
		<option value="5">Teknik Sepeda Motor</option>
		<option value="6">Teknik Komputer Jaringan</option>
    </select>
    </div>
    </td>
  </tr>
	<tr>
		<td><label for="lname">Username:</label></td>
		<td><div class="input-container"><input name="username" id="username" type="text" /></div></td>
	</tr>
  <tr>
    <td><label for="pass1">Password:</label></td>
    <td><div class="input-container"><input name="pass1" id="pass1" type="password" /></div></td>
  </tr>
	<tr>
		<td><label for="pass2">Re-Password:</label></td>
		<td><div class="input-container"><input name="pass2" id="pass2" type="password" /><span id='message'></span></div>
		</td>
	</tr>
  <tr>
    <td><label for="sex-select">I am:</label></td>
    <td>
    <div class="input-container">
    <select name="sex-select" id="sex-select">
    <option value="0">Select Sex:</option>
    <option value="1">Female</option>
    <option value="2">Male</option>
    </select>
    </div>
    </td>
  </tr>
  <tr>
    <td><label>Tanggal Lahir:</label></td>
    <td>
    <div class="input-container">
    <select id="month" name="month"><option value="0">Month:</option><?=generate_options(1,12,'callback_month')?></select>
    <select id="day" name="day"><option value="0">Day:</option><?=generate_options(1,31)?></select>
	  <select id="year" name="year"><option value="0">Year:</option><?=generate_options(date('Y'),1900)?></select>
    </div>
    </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input type="submit" id="submit" class="greenButton" value="Sign Up" /><img id="loading" onclick="register()" src="register/img/ajax-loader.gif" alt="working.." />
</td>
  </tr>


  </tbody>
</table>

</form>

<div id="error">
&nbsp;
</div>

</div>

<script type="text/javascript">
	$('#pass2').on('keyup', function () {
		if ($('#pass1').val() == $('#pass2').val()) {
				$('#pass2').css('color', 'green');
				$('#message').html('cocok').css('color', 'red');

		} else
				$('#pass2').css('color', 'red');
	});


</script>

</body>
</html>
