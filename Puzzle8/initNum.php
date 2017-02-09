<?php
//验证用户输入的宫格行列数，若合法（2<n<10），返回相应的乱序排序的数字
$num = $_POST["num"];
$pattern = "/^[3-9]*$/";
if (!preg_match($pattern,$num)){
	echo "dataIllegal";
	return;
}
$arr = range(0,pow($num,2)-1);
shuffle($arr);
echo json_encode($arr);
?>