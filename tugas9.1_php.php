<?php 

function cetak_fibo($banyak_bilangan){
	$angka_sebelumnya = 0;
	$angka_sekarang = 1;

	$hasil = $angka_sebelumnya." ".$angka_sekarang;

	for($i=0;$i<$banyak_bilangan-2;$i++){
		$bilangan_fibo = $angka_sekarang + $angka_sebelumnya;
		$hasil = $hasil." ".$bilangan_fibo;

		$angka_sebelumnya = $angka_sekarang;	
		$angka_sekarang = $bilangan_fibo;
	}
	return $hasil; 
}

echo cetak_fibo(22);

 ?>