<?php
$conn = mysqli_connect("localhost", "root", "", "tutor");
$id_user = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM user WHERE id_user = $id_user")[0];
// mysqli_query($conn,"DELETE FROM user WHERE id_user=$id_user");

// if (mysqli_affected_rows($id_user) > 0) {
// 	  	echo"<script>
// 	  			alert('Berhasil Dihapus');
// 	  		 </script>";
// 	  	header("location:register.php");
// 	  	}
// 	 else{
// 	 	echo"<script>
// 	  			alert('GAGAL Dihapus');
// 	  		 </script>";
// 	  	header("location:register.php");
// 	 } 	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
			<h1>EDIT</h1><br>
			<input type="text" name="nama" placeholder="Nama" value="<?=$result["nama"]; ?>"><br>
			<input type="text" name="usia" placeholder="Usia"><br>
			<input type="text" name="username" placeholder="Username"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="text" name="no_hp" placeholder="no_hp"><br>
			<input type="text" name="jenis_kelamin" placeholder="Jenis kelamin"><br><br>
			<input type="submit" name="submit" value="Selesai">
		</form>
</body>
</html>