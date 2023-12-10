<?php
	session_start();
	
	$nik = $_POST['nik'];
	$skck = $_POST['skck'];
	$sim = $_POST['sim'];
	$bank = $_POST['bank'];
	
	// Menghubungkan website dengan database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sistem_informasi_kriminal";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Proses pencarian data kriminal
	$sql = "SELECT * FROM data_kriminal WHERE nik='$nik' AND skck='$skck' AND sim='$sim' AND bank='$bank'";
	$result = mysqli_query($conn, $sql);
	
	// Tampilkan hasil pencarian data kriminal pada halaman "data-kriminal.php"
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row["nik"] . "</td>";
			echo "<td>" . $row["skck"] . "</td>";
			echo "<td>" . $row["sim"] . "</td>";
			echo "<td>" . $row["bank"] . "</td>";
			echo "<td>" . $row["status_berlaku"] . "</td>";
			echo "<td>" . $row["status_pidana"] . "</td>";
			echo "</tr>";
		}
	} else {
		echo "<tr><td colspan='6'>Data kriminal tidak ditemukan.</td></tr>";
	}
	
	mysqli_close($conn);
?>