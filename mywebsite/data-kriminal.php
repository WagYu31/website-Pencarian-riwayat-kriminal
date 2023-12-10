<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Data Kriminal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>Sistem Informasi Data Kriminal</h1>
			<nav>
				<ul>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<section id="hero">
		<div class="container">
			<h2>Cek Informasi Data Kriminal</h2>
			<p>Silakan isi form dibawah ini untuk melihat informasi data kriminal Anda:</p>
			<form action="process-data-kriminal.php" method="POST">
				<div class="form-group">
					<label for="nik">NIK KTP:</label>
					<input type="text" id="nik" name="nik" required>
				</div>
				<div class="form-group">
					<label for="skck">SKCK:</label>
					<input type="text" id="skck" name="skck" required>
				</div>
				<div class="form-group">
					<label for="sim">SIM:</label>
					<input type="text" id="sim" name="sim" required>
				</div>
				<div class="form-group">
					<label for="bank">Data Rekening Bank:</label>
					<textarea id="bank" name="bank" required></textarea>
				</div>
				<input type="submit" value="Submit" class="btn">
			</form>
		</div>
	</section>
	
	<section id="result">
		<div class="container">
			<h2>Hasil Pencarian Informasi Data Kriminal</h2>
			<table>
				<thead>
					<tr>
						<th>NIK KTP</th>
						<th>SKCK</th>
						<th>SIM</th>
						<th>Data Rekening Bank</th>
						<th>Status Berlakunya</th>
						<th>Status Pidana</th>
					</tr>
				</thead>
				<tbody>
					<!-- Kode PHP untuk menampilkan hasil pencarian data kriminal -->
				</tbody>
			</table>
		</div>
	</section>
	
	<footer>
		<div class="container">
			<p>&copy; 2023 Sistem Informasi Data Kriminal. All rights reserved.</p>
		</div>
	</footer>
</body>
</html>