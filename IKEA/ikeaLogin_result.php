<?php
session_start();
include "ikeaDB_infor.php";
$id =$_POST[user_id];
$pass =$_POST[user_pass];
$query = "select * from member where user_id='".$id."';";
$result = mysql_query($query, $conn);
$count = mysql_num_rows($result);
for ($i=0; $i < $count; $i++) {
   $re = mysql_fetch_row($result);
   if ($id == $re[3] && $pass == $re[4]){
     $_SESSION['userid'] = $id;
     echo "<meta charset='utf-8'>";
     echo "<script>alert('로그인이 되었습니다 ".$re[3]."');
     document.location.href='index.php';</script>"; break;
   }else if($id == $re[3] && $pass != $re[4]){
      echo "<meta charset='utf-8'>";
      echo "<script>alert('비밀번호가 잘못입력되었습니다.');
      document.location.href='ikea_login.php';</script>";
    }
 }if (($id != $re[3] && $pass != $re[4])) {
   echo "<meta charset='utf-8'>";
   echo "<script>alert('회원정보가 없습니다. 회원가입을 해주세요.');
   document.location.href='ikeaForm.html';</script>";
 }
?>
