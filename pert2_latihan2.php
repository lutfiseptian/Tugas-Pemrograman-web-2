<?php

	$brg1 = "apel";
	$brg2 = "jeruk";
	$brg3 = "mangga";
	$brg4 ="melon";

	// Harga Barang Per Unit

	$harga1 = 1000;
	$harga2 = 5000;
	$harga3 = 12000;
	$harga4 = 20000;

	// Jumlah Barang Yang Ada

	$jmlbrg1 = 2;
	$jmlbrg2 = 5;
	$jmlbrg3 = 1;
	$jmlbrg4 = 3;

	// Total Harga Per Barang

	$th1 = $jmlbrg1 * $harga1;
	$th2 = $jmlbrg2 * $harga2;
	$th3 = $jmlbrg3 * $harga3;
	$th4 = $jmlbrg4 * $harga4;

	// Menghitung Grand Total Nilai Semua Barang

	$tharga = $th1 + $th2 + $th3 + $th4;

	// Besaran Discount

	$diskon = 5;

	// Jumlah Total Discount Yang Diberikan

	$tdiskon = ($diskon * $tharga)/100;

	// Jumlah Yang Harus Dibayarkan

	$tdibayar = $tharga - $tdiskon;
	?>

	<html>
		<head>
			<title>Daftar Peralatan Yang Dibeli</title>
		</head>

			<style type="text/css">

				body{
					font-size:14pt;
				}

				table{
					background: lemonchiffon;
					font-size:20pt;
					font-style:italic;
					margin-top:10px;
				}

				tr{
					color:maroon;
				}
			</style>

			<body>
				<center>
					<font face="comic sans serif" size=5 color="blue">Contoh Perhitungan Dengan PHP</font>
						<table border="1" cellspacing="0" cellpadding="3">
							<tr>
								<td colspan="4" align="center" valign="middle" style="background:sandybrown">
									<b>Daftar Pemesanan Peralatan Kantor</b>
								</td>
							</tr>
							<tr>
								<td><b>Nama Peralatan</b></td>
								<td><b>Jumlah</b></td>
								<td><b>Harga Satuan</b></td>
								<td><b>Jumlah harga</b></td>
							</tr>
							<?php
								// Pengisian Table HTML
							?>
							<tr>
								<td align="left"><?php echo $brg1;?></td>
								<td align="left"><?php echo $jmlbrg1;?></td>
								<td align="left"><?php echo $harga1;?></td>
								<td align="left"><?php echo $th1;?></td>
							</tr>
							<tr>
								<td align="left"><?php echo $brg2;?></td>
								<td align="left"><?php echo $jmlbrg2;?></td>
								<td align="left"><?php echo $harga2;?></td>
								<td align="left"><?php echo $th2;?></td>
							</tr>
							<tr>
								<td align="left"><?php echo $brg3;?></td>
								<td align="left"><?php echo $jmlbrg3;?></td>
								<td align="left"><?php echo $harga3;?></td>
								<td align="left"><?php echo $th3;?></td>
							</tr>
							<tr>
								<td align="left"><?php echo $brg4;?></td>
								<td align="left"><?php echo $jmlbrg4;?></td>
								<td align="left"><?php echo $harga4;?></td>
								<td align="left"><?php echo $th4;?></td>
							</tr>
							<tr>
								<td colspan="3" align="right">Total Harga</td>
								<td align="right"><?php echo $tharga;?></td>
							</tr>
							<tr>
								<td colspan="3" align="right">Discount<?php echo "($diskon %)";?></td>
								<td align="right"> </td>
							</tr>
							<tr>
								<td colspan="3" align="right">Jumlah Yang Harus Dibayarkan</td>
								<td align="right"><?php echo $tdibayar;?></td>
							</tr>
						</table>
					</center>
				</body>
			</html>
