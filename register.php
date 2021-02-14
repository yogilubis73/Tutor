<?php
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect("localhost", "root", "", "tutor");

$result = mysqli_query($conn,"SELECT * FROM user");
 
if (isset($_POST['submit']))
{
	$nama           = $_POST['nama'];
	$usia           = $_POST['usia'];
	$username       = $_POST['username'];
	$password 		= $_POST['password'];
	$no_hp          = $_POST['no_hp'];
	$jenis_kelamin 	= $_POST['jenis_kelamin'];
// query SQL untuk insert data
 	$query="INSERT INTO user VALUES('', '$nama', '$usia', '$username', '$password', '$no_hp', '$jenis_kelamin')";
 	mysqli_query($conn, $query);

//cek berhasil tambah / tidak
	 if (mysqli_affected_rows($conn) > 0) {
	  	echo"<script>
	  			alert('Berhasil Ditambahkan');
	  		 </script>";
	  	header("location:register.php");
	  	}
	 else{
	 	echo"<script>
	  			alert('GAGAL Ditambahkan');
	  		 </script>";
	  	header("location:register.php");
	 } 	
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
	<body>
		<form action="" method="post">
			<h1>REGISTER</h1><br>
			<input type="text" name="nama" placeholder="Nama"><br>
			<input type="text" name="usia" placeholder="Usia"><br>
			<input type="text" name="username" placeholder="Username"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="text" name="no_hp" placeholder="no_hp"><br>
			<input type="text" name="jenis_kelamin" placeholder="Jenis kelamin"><br><br>
			<input type="submit" name="submit" value="Selesai">
		</form>

		<table border="1" width="100%">
			<tr>
				<th>ID</th>
				<th>nama</th>
				<th>usia</th>
				<th>username</th>
				<th>password</th>
				<th>no hp</th>
				<th>jenis kelamin</th>
				<th>Aksi</th>
			</tr>
			<?php while ($row=mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?= $row["id_user"] ?></td>
				<td><?= $row["nama"] ?></td>
				<td><?= $row["usia"] ?></td>
				<td><?= $row["username"] ?></td>
				<td><?= $row["password"] ?></td>
				<td><?= $row["no_hp"] ?></td>
				<td><?= $row["jenis_kelamin"] ?></td>
				<td><a href="hapus.php?id=<?= $row['id_user']?>">Hapus</a> || <a href="Edit.php?id=<?= $row['id_user']?>">Edit</a></td>
			</tr>
			<?php endwhile; ?>
		</table>
	</body>	
</html>