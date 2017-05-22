<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$fk = fsockopen('localhost',80,$error,$errstr,5);
$s = array(
	'GET /http/5.html HTTP/1.1',
	'host:localhost',
	'',
	''
	);

$str = implode("\n",$s);
fwrite($fk,$str);

while ($row = fread($fk,32)) {
	echo $row;
}

fclose($fk);
?>