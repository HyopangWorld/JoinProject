<meta charset="utf-8">
<title>NAVER회원정보</title>
<style type="text/css">
  .table{
  font-family: 나눔고딕; color: #625e5e; font-size: 12pt;
  border-style: solid; border-width: thin; border-color: white;
  padding: 0px;
  width: 900px; }
  .title{
    font-size: 17pt; font-weight: bold; color: white;
    background-color: #2bb600;
    padding: 5px; border:10px;}
  .inner{
    background-color: white;
    height: 50px; width: 200px; border:0px;}
    .line{
      border-color: #e0e0e0; border-width: thin; border-style: solid;
      padding:0px;}
</style>

<?php
  include "naverDB_infor.php";
 ?>
 <table align="center">
     <tr><td><br><br><br></tr></td>
     <tr><td><img style="width:260px;" src="../img/naverLogoWhite.jpg"></img></tr></td>
     <tr><td align="center" style="font-family:나눔고딕; font-size:20pt; color:#625e5e"><br><!--<b>[</b>회원정보<b>]</b>--><br><br></td></tr>
 </table>
 <table border="1px" align="center" class="table">
   <tr><td align="center" class="title">NUM</td>
     <td align="center" class="title">NAME</td>
     <td align="center" class="title">GENDER</td>
     <td align="center" class="title">ID</td>
     <td align="center" class="title">PASSWORD</td>
     <td align="center" class="title" style="width:800px;">EMAIL</td>
     <td align="center" class="title" style="width:600px;">PHONE</td>
     <td align="center" class="title">HOBBY</td>
   </tr>
   <?php
   for ($i=0; $i < $count; $i++) {
     $re = mysql_fetch_row($result);?>
   <tr align="center"><td  class="inner" style="width:10px;"><?php echo $re[0]; ?></td>
     <td class="inner"><?php echo $re[1]; ?></td>
     <td class="inner"><?php echo $re[2]; ?></td>
     <td class="inner"><?php echo $re[3]; ?></td>
     <td class="inner"><?php echo $re[4]; ?></td>
     <td class="inner"><?php echo $re[5]."@".$re[6]; ?></td>
     <td class="inner"><?php echo $re[7]."-".$re[8]."-".$re[9]; ?></td>
     <td class="inner"><?php echo $re[10]; ?></td></tr>
    <tr><td colspan="8" border="0px;" class="line"></td></tr>
     <?php } ?>
 </table>
