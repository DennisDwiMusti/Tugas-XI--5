<html>
<head>
	<title>Cek Angka pada String</title>
	<style>
		/* CSS untuk styling output */
		.output {
			font-size: 24px;
			color: #333;
		}
	</style>
</head>
<body>
	<h1>Cek Angka pada String</h1>
	<form action="" method="post">
		<input type="text" name="input_string" placeholder="Masukkan Angka">
		<button type="submit">Cek</button>
	</form>
	<div class="output">
		<?php
			if (isset($_POST['input_string'])) {
				$input_string = $_POST['input_string'];
				$angka = preg_match_all('/\d/', $input_string, $matches);
				if ($angka > 0) {
					echo "Teks mengandung angka: " . implode(',', $matches[0]);
				} else {
					echo "Teks tidak mengandung angka";
				}
			}
		?>
	</div>
</body>
</html>