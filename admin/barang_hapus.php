<?php
    session_start();
	include "koneksi_db/otentik.php";

	$sesi_user = $_SESSION["sesi_useradmin"];
	$sesi_pass = $_SESSION["sesi_passadmin"];
		
	if (! otentikasi($sesi_user, $sesi_pass))
	{
		?>
		<script type="text/javascript">
		window.location='index.php';
		</script>
		<?php
	}

	$kode = $_GET["id"];
	
	//Belum ada data sebelumnya
	$query = "Delete from barang where kodebarang = '$kode'";
	$hasil = mysqli_query($id_mysql, $query);
	?>
	<script type="text/javascript">
	alert("Data barang terhapus !");
	window.location='barang.php';
	</script>
