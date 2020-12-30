<?php
/// coding by tegar sxc
/// team securityxploitcrew and tkj blackhats

echo "
 ____   _    __     ____  _____  _____  __    ___ 
(  _ \ / )  /. |   (_  _)(  _  )(  _  )(  )  / __)
 ) _ </ _ \(_  _)    )(   )(_)(  )(_)(  )(__ \__ \
(____/\___/  (_)    (__) (_____)(_____)(____)(___/\n";
echo "          [1] Encode       [2]  Decode\n ";

echo "\n";
echo "number > ";
$pil = trim(fgets(STDIN));
if($pil == 1)
{
	echo "TEXT  : \33[32;1m";
	$enc = trim(fgets(STDIN));
	$krip = base64_encode($enc);
	echo "HASIL : \33[37;1m$krip\n";
}
else if($pil == 2)
{
	echo "TEXT  : \33[32;1m";
	$dec = trim(fgets(STDIN));
	$dekrip = base64_decode($dec);
	echo "HASIL : \33[37;1m$dekrip\n";
}
else
{
   echo "[ ! ] pilihan tidak ada \n";
}
?>
