<?php
$lnk = mysql_connect('localhost', 'root', '') 
    or die ('Not connected : ' . mysql_error());
mysql_select_db('manager_db', $lnk)
    or die ('Can\'t use db : ' . mysql_error());
//support chinese
mysql_query("SET NAMES 'gbk'");

//$v1 = "����test1";
//mysql_query("INSERT INTO `manager_db`.`test` (id, v1, v2, v3, v4) 
//VALUES ('1', 'test', 'Peter', '$v1', '35')");

//$sql = "INSERT INTO `manager_db`.`dorms` (`id`, `���`, `type`, `����¥`, `��ס����`) VALUES (1, '101', '4', '����¥', '3');";
//if (mysql_query($sql)) {
//    echo "operater ok.";
//} else {
//    echo "Error database: " . mysql_error();
//}
//*
$id;
$num = 101;
$type;
$fooler;
$total;

$foolers = array("����¥" , "�ӻ�¥", "���¥", "����¥");
$types = array(4,6,8);
for ($id=1; $id<=500; $id++)
{   
    $num = $num+1;
    $type = rand(0,2);
    $fooler = rand(0,3);
    $total = rand(3,8);
    
    echo $id . "</br>".  $num . "</br>".  $types[$type] . "</br>".  $foolers[$fooler] . "</br>".  8 . "</br>". "</br>";

    $sql = "INSERT INTO `manager_db`.`dorms` (`id`, `���`, `type`, `����¥`, `��ס����`) VALUES ('$id', '$num', '$types[$type]', '$foolers[$fooler]', $total);";
    if (mysql_query($sql)) {
        echo "operater ok.";
    } else {
        echo "Error database: " . mysql_error() . "</br>";
    }
}//*/

?>