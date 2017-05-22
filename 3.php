<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

echo move_uploaded_file($_FILES['intro']['tmp_name'],'./'.$_FILES['intro']['name'])?1:0;

?>