<?php
//��֤�û�����Ĺ��������������Ϸ���2<n<10����������Ӧ���������������
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