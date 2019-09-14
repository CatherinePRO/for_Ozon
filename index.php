<?php

require('Parse.php');

//Входная строка  
$str = 'Jun 6 11:31:43 radiusz4s1.noc.o3.ru Jun 6 11:31:43 radiusd[11213]: rlm_perl: [TYPE:AUTHCHECK][STATUS:isSerialRevoked][MAC:144F8A5DA74B][SERIAL:64000055535621C5423794F258000000005553][SOURCE:Wireless-802.11][NASID:hac1.z4.net.o3.ru][NASIP:10.25.192.252][RET:CONT]';

//$str = 'hgulih;ohjp hjbjh;, jipoj[op [] : nmij; [tot:kjnijpo]        nzlkpk;sw;l';		//заведомо невнятный набор значений
$arr = array();

$regex = new Regex();
if($arr = $regex->Parse($str)){
	$regex->Check($arr);
}
else echo 'error';
