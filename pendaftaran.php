<html>
	<head>
		<title>Pendaftaran</title>
	</head>
	<body>
		<p>Selamat Datang Di Halaman Pendaftaran | SMK luqman Al Hakim Kudus</p>
		<hr>
		<form action="proses_pendaftaran.php" method="POST">
			<fieldset>
				<legend>Pendaftaran</legend>
					<table>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" placeholder="Masukkan Nama..." required></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><input type="email" name="email" placeholder="Masukkan Email..." required></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td><input type="date" name="tanggal_lahir" placeholder="Masukkan Tgl Lahir..." required></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><textarea name="alamat" placeholder="Masukkan Alamat..." required></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" value="Daftar"></td>
						</tr>
					</table>
				</legend>
			</fieldset>
		</form>
		<div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
	</body>
</html>
