<head>
<title>Save</title>
</head><br><br>
<style type="text/css">
#center{width:400px; height:250px; margin-left:340px; margin-right:10px ; background-color:rgb(0,204,204); border-radius:20px 20px 20px 20px; opacity:0.9; border:groove rgb(255,255,255)}
#foto{width:200px; height:250px; margin-right:390px; float:right; margin-top:-295px; background-color:rgb(0,204,204); border-radius:20px 20px 20px 20px; opacity:0.9; border:groove rgb(255,255,255)}
</style>
<h2 align="center" style="color:rgb(255,255,255)">~~~Biodata Berhasil Disimpan~~~</h3><br>
<body background="bc.png">
<h4 align="center" style="color:rgb(255,255,255)">Selamat datang <?php echo $_POST["name"]?></h4><br>
<div id="center"><br>
<table align="center" style="color:rgb(255,255,255)">
<tr><td> 
Nama</td> <td>:</td><td> <?php echo $_POST["name"]?><br></td></tr>
<tr><td> Nim</td> <td>:</td><td> <?php echo $_POST["nim"]?><br></td></tr>
<tr><td> Gender</td> <td>:</td><td> <?php echo $_POST["jenkel"]?><br></td></tr>
<tr><td> Tempat</td> <td>:</td><td> <?php echo $_POST["tmp"]?><br></td></tr>
<tr><td> Tanggal Lahir</td> <td>:</td><td> <?php echo $_POST["tgl"]?> <?php echo $_POST["bln"]?> <?php echo $_POST["thn"]?><br></td></tr>
<tr><td> Alamat</td> <td>:</td><td> <?php echo $_POST["alamat"]?>	<br></td></tr>
<tr><td> No. Telp/Hp</td>	<td>:</td><td> <?php echo $_POST["hp"]?><br></td></tr>
<tr><td> E-mail</td> <td>:</td><td><?php echo $_POST["email"]?><br></td></tr>
<tr><td> Blog</td> <td>:</td><td><?php echo $_POST["blog"]?><br></td></tr>
</table>
</div><br><br>
<div id="foto">
<?php
$fileName = $_FILES['picture']['name'];
$fileSize = $_FILES['picture']['size'];
$fileError = $_FILES['picture']['error'];
if($fileSize > 0 || $fileError == 0){
$move = move_uploaded_file($_FILES['picture']['tmp_name'], $fileName);
if($move){
echo "<h3></h3>";?>
<center><img src="<?php echo $fileName?>" width="135px" height="215px" align="middle" style="border-radius:20px 20px 20px 20px"></center>
<?php
} else{
echo "<h3>Failed! </h3>";
}
} else {
echo "Failed to Upload : ".$fileError;
}
?>
</div>
<form action="index.html" target="_parent">
<p align="center"><INPUT TYPE="submit" VALUE="Kembali ke Halaman Awal"></p>
</form>
</body>
</html>
