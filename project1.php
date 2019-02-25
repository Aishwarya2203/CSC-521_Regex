<?php
header('Content-type:text/plain');
 $file=file_get_contents('cycle.c', true);

$re = '/\/\*[\S a-zA-z\'\n\']*?\*\//';
$str = $file;
$subst = '';
$result = preg_replace($re, $subst, $str);

$re1 = '/\/\/[A-z a-z]*/';
$str1 = $result;
$result1 = preg_replace($re1, $subst, $str1);

$re2 = '/\/\*[\S a-zA-z\'\n\']*?\*\//';
$str2 = $result1;
$result2 = preg_replace($re2, $subst, $str2);


$re3= '/\/\s*\w*\s*\w*\s*\*\//';
$str3 = $result2;
$subst1 = '---------------------------------->An invalid comment has been detected here-1   (/ Make cycles */)';
$result3 =  preg_replace($re3, $subst1, $str3);

$re4 = '/\/\*\s*\w*\s\w*\s*\w*\s\w*/';
$str4 = $result3;
$subst2 = '---------------------------------->An invalid comment has been detected here-2   (/* Creat the linked list )';
$result4 =preg_replace($re4, $subst2, $str4);


echo 'IN THE FOLLOWING OUTPUT ALL THE VALID COMMENTS HAVE BEEN REMOVED AND THE INVAILD COMMENTS HAVE BEEN GIVEN AN ERROR MESSAGE',$result4;
    ?>
