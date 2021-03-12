<html>
	<head>
		<title>Kalkulator Sederhana</title>
	</head>

	<style>

		#wrapper{
			background: blue;
			width: 100%;
			text-align: center;
		}

		#wrapperText{
			background: red;
			margin-left:-200px;
			margin-bottom: 10px;
		}

		label{
			margin-left:135px;
			font-size:20px;
			font-style: italic;
			font-weight: bold;
			color:blue;
		}

		#result{
			background:wheat;
			font-size:20px;
			font-style: italic;
			font-weight: bold;
			color:blue;
			margin-left:-120px;
		}

		#creator{
			background:sandybrown;
			font-size:20px;
			font-style: italic;
			font-weight: bold;
			color:blue;
		}

	</style>

	<body>

	<?php

	if(isset($_POST['nilai1']) && ($_POST['nilai2']) && ($_POST['operator']))
	{
		$nilaiSatu = $_POST['nilai1'];
		$nilaiDua = $_POST['nilai2'];
		if($_POST['operator'] == "+")
		{
			$hasil = $nilaiSatu + $nilaiDua;
		}
		else if($_POST['operator'] == "-")
		{
			$hasil = $nilaiSatu - $nilaiDua;
		}
		else if($_POST['operator'] == "*")
		{
			$hasil = $nilaiSatu * $nilaiDua;
		}
		else if($_POST['operator'] == "/")
		{
			$hasil = $nilaiSatu / $nilaiDua;
		}
		else
		{
			echo "Jenis Operator Tidak Diketahui, Silahkan Ulangi Dengan Benar, Terimakasih!";
		}
	}
	else
	{
		echo " ";
	}

	?>

		<div id="wrapper">
			<form action="" method="post">
				<div id="wrapperText">
					<label id="firstValue">Nilai I</label>
					<label id="secondValue">Nilai II</label>
				</div>
				<div id="wrapperField">
					<input type="text" name="nilai1">
					<select id="tombolOperator" name="operator">
						<option>+</option>
						<option>-</option>
						<option>*</option>
						<option>/</option>
					</select>
					<input type="text" name="nilai2">
					<input type="submit" value="SUBMIT"></input>
					<br/>
					<br/>
				</div>
				<div id="result">
						Hasil = <?php echo @$hasil;?>
				</div>
				<div id="creator">
						Lutfi Seprian- 171011401149 - Pemrograman Web 2
				</div>
			</form>
		</div>
	</body>
</html>