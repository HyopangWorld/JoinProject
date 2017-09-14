<meta charset="utf-8">
<?php
include "ikeaDB_infor.php";

$id = $_GET[id];

$query ="select * from member where id = $id";
$result = mysql_query($query,$conn);
$row = mysql_fetch_row($result);

$pass = $_POST[pass];
$emailF = $_POST[emailF];
$emailL = $_POST[emailL];
$cellNumF = $_POST[cellNumF];
$cellNumM = $_POST[cellNumM];
$cellNumL = $_POST[cellNumL];
$hoby = $_POST[hoby];

if ($pass == $row[4]) {
  $query = "update member set emailF = '$emailF',emailL = '$emailL', cellNumF = '$cellNumF', cellNumM = '$cellNumM', cellNumL = '$cellNumL',
  hoby = '$hoby' where id=$id";
  mysql_query($query,$conn);
  echo "<script type='text/javascript'>
    alert('수정완료.');
    document.location.href='ikeaUpdate.php';</script>";
}else{
  echo "<script type='text/javascript'>
    alert('비밀번호가 다릅니다. 다시 입력하세요.');
    history.go(-1);</script>";
}?>
