<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//panggil koneksi
include "Koneksi.php";
$id_saran = $_POST['$id_saran'];
$nama			=	$_POST['nama'];
$email			=	$_POST['email'];
$sarant		=   $_POST['sarant'];



if (!empty($nama) && !empty($email) && !empty($sarant))

{
	mysqli_query($con, "UPDATE saran set id_saran='$id_saran'");
	header ('location:indexadmin.php');
	
}
else
{
	header('location:edit.php');
}
?>
</body>
</html>