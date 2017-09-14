<?php
$conn = mysql_connect('localhost','tid','tpass'); //mysql 연결
mysql_select_db('tdb',$conn);//사용할 db지정

$query="select * from login"; //tdb에 login이라는 table 전체를 select 한다라는 query문을 문자열로 저장
$result = mysql_query($query,$conn); //db로그인(connect)하고 위에 문자열로 저장한 query문 실행

 $count = mysql_num_rows($result); // result의 레코드 갯수
// for ($i=0; $i < $count; $i++) {
//   $re = mysql_fetch_row($result); //일반 2차원배열로 가져오기
//   // $re = mysql_fetch_array($result); 연관배열로 가져오기
//   // $re['id']; $re[u_id]; $re[u_pass];
//   echo $re[0]."<br/>";
//   echo $re[1]."<br/>";
//   echo $re[2]."<br/>";
// }
 ?>
