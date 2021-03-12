<html>
	<head>
		<title>Contoh Penggunaan IF</title>
	</head>
	<body>

		<style>

			#besarDiskon{
				margin-top: 20px;
			}

		</style>

		<?php

			if(isset($_POST['total_beli']))
			{
				$totalBeli = $_POST['total_beli'];
				$diskon = 0;
				if($totalBeli >= 200000)
				{
					$diskon = 0.1;
					$persentaseDiskon = 10;
					$nominalDiskon = $diskon * $totalBeli;
					$totalBayar = $totalBeli - $nominalDiskon;
				}
				else if($totalBeli >= 100000)
				{
					$diskon = 0.05;
					$persentaseDiskon = 5;
					$nominalDiskon = $diskon * $totalBeli;
					$totalBayar = $totalBeli - $nominalDiskon;
				}
				else
				{
					$diskon = 0.01;
					$persentaseDiskon = 1;
					$nominalDiskon = $diskon * $totalBeli;
					$totalBayar = $totalBeli - $nominalDiskon;
				}

			}

			?>

		<form action="" method="post">
			Total Harga Barang :
			<input type="text" name="total_beli"><br><br>
			<input type="submit" value="Tentukan Diskon!">

			<div id="besarDiskon">
				Total Awal Harga Barang = Rp. <?php echo @$totalBeli;?>
				<br>
				Besar Diskon = <?php echo @$diskon;?> / <?php echo @$persentaseDiskon;?> %
				<br>
				Nominal Potongan = Rp. <?php echo @$nominalDiskon;?>
				<br>
				Total Pembayaran = Rp. <?php echo @$totalBayar;?>
			</div>
		</form>
	</body>
</html>