<?php
require_once 'deler.php';

$siswa = new siswa('Nija', 'Beat', 'Vixion', 'CBR');

echo "type kawasaki.......... ".$organisasi->get_kawasaki(). "<br>";
echo "type honda..... ".$organisasi->get_honda(). "<br>";
echo "type yamaha.. ".$organisasi->get_yamaha()."<br>";
echo "type honda. ".$organisasi->get_honda();
?>