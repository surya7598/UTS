<html>
<head>
<title>Input</title>
</head>

<body>
<center>Data Pemantaun Covid19</center>
<br>
<form action="" method="post">
<table border="1" align="center">
<tr>
    <td>Wilayah</td>
    <td>:</td>
    <td><input type="text" name="wilayah"/></td>
</tr>
<tr>
    <td>Jumlah Positif</td>
    <td>:</td>
    <td><input type="text" name="positif"/></td>
</tr>
<tr>
    <td>Jumlah Dirawat</td>
    <td>:</td>
    <td><input type="text" name="dirawat"/></td>
</tr>
<tr>
    <td>Jumlah Sembuh</td>
    <td>:</td>
    <td><input type="text" name="sembuh"/></td>
</tr>
<tr>
    <td>Jumlah Meninggal</td>
    <td>:</td>
    <td><input type="text" name="meninggal"/></td>
</tr>
<tr>
    <td>Nama Operator</td>
    <td>:</td>
    <td><input type="text" name="operator"/></td>
</tr>
<tr>
    <td>NIM Mahasiswa</td>
    <td>:</td>
    <td><input type="text" name="nimmahasiswa"/></td>
</tr>
<tr>
     <td colspan="3" align="center"><input type="submit" name="kirim"   value="Kirim" /><input type="reset" name="batal" value="batal" /></td>
</tr><br>
</form>
<?php
$wil  = $_POST ["wilayah"];
$pos  = $_POST ["positif"];
$rawat = $_POST ["dirawat"];
$sem   = $_POST ["sembuh"];
$ninggal   = $_POST ["meninggal"];
$op   = $_POST ["operator"];
$nim  = $_POST ["nimmahasiswa"];
$tgl = date('d-m-Y h:i:sa');
?>
<center>Data Pemantaun Covid-19 wilayah <?php echo "$wil" ?></center>
<center>Per Tanggal <?php echo "$tgl" ?></center>
<center><?php echo "$op" ?>/<?php echo "$nim" ?></center><br>
<table border="1" align="center">
<tr>
<td>Positif</td>
<td>Dirawat</td>
<td>Sembuh</td>
<td>Meninggal</td>
</tr>
<tr>
<td><?php echo "$pos" ?></td>
<td><?php echo "$rawat" ?></td>
<td><?php echo "$sem" ?></td>
<td><?php echo "$ninggal" ?></td>
</tr>
</table>
</body>
</html>