<?php
// conts
define ("phi",3.14);

// sisi miring kerucut
$a = pow(5,2);
$b = pow(7.2,2);
$c = sqrt($a+$b);
echo 'Sisi miring kerucut ='.round($c,1)."m \n";

// volume tabung
$r = 7.2;
$t = 20;
$volume_tabung = phi*pow($r, 2)*$t;
echo 'volume tabung ='.round($volume_tabung,1)."m3\n";

// volume kerucut
$t = 5;
$volume_kerucut = (phi*pow($r,2)*$t)/3;
echo 'volume_kerucut ='.round($volume_kerucut,1)."m3\n";

// luas alas yang hilang
$alas_lingkaran = phi*pow($r,2)/100;
echo 'luas alas hilang ='.round($alas_lingkaran,1)."m3\n";

// total
$total_volume = $volume_tabung + $volume_kerucut - $alas_lingkaran;
echo 'total_volume ='.round($total_volume,1)."m3\n";
