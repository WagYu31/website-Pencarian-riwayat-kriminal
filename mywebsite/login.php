<!DOCTYPE html>
<html>
<head>
	<title>Login - Sistem Informasi Data Kriminal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>Sistem Informasi Data Kriminal</h1>
		</div>
	</header>
	
	<section id="login">
		<div class="container">
			<form action="process-login.php" method="POST">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" id="username" name="username" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label```
					<input type="password" id="password" name="password" required>
				</div>
				<input type="submit" value="Login" class="btn">
			</form>
		</div>
	</section>
	
	<footer>
		<div class="container">
			<p>&copy; 2023 Sistem Informasi Data Kriminal. All rights reserved.</p>
		</div>
	</footer>
</body>
</html>