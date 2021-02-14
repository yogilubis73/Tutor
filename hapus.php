<?php
$conn = mysqli_connect("localhost", "root", "", "tutor");
$id_user = $_GET['id'];
mysqli_query($conn,"DELETE FROM user WHERE id_user=$id_user");

if (mysqli_affected_rows($id_user) > 0) {
	  	echo"<script>
	  			alert('Berhasil Dihapus');
	  		 </script>";
	  	header("location:register.php");
	  	}
	 else{
	 	echo"<script>
	  			alert('GAGAL Dihapus');
	  		 </script>";
	  	header("location:register.php");
	 } 	

?>