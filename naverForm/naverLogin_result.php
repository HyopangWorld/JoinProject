<meta charset="utf-8">

<?php
include "naverDB_infor.php";

$query = "select * from login";
$result=mysql_query($query,$conn);

 $id =$_POST[user_id];
 $pass =$_POST[user_pass];

 for ($i=0; $i < $count; $i++) {
   $re = mysql_fetch_row($result);

   if ($id == $re[3] && $pass == $re[4]){
     echo "<script>alert('로그인이 되었습니다 ".$re[3]."');</script>"; break;
   }else if(($id != $re[3] && $pass == $re[4]) || ($id == $re[3] && $pass != $re[4])){
      echo "<script>alert('아이디 혹은 비밀번호가 잘못입력되었습니다.');
      document.location.href='naverLogin.html';</script>";
    }
 }if (($id != $re[3] && $pass != $re[4])) {
   echo "<script>alert('회원정보가 없습니다. 회원가입을 해주세요.');
   document.location.href='naverForm.html';</script>";
 }

 echo $id?> 로그인 완료<br/><br/>
 <a href="naverUpdate.php?abc=<?php echo $re[0]; ?>">회원정보변경</a>&nbsp|&nbsp
 <a href="naverDB_result.php">모든회원보기</a>&nbsp|&nbsp
 <a href="#">회원탈퇴</a></td></tr>
