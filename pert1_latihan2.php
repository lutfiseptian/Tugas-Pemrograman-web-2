<?php

	$A = 123;
	function Test()
	{
		global $A;
		echo "Nilai A Dalam Fungsi = $A<br>";
	}
		Test();
		echo "Nilai A Luar Fungsi = $A";

		?>