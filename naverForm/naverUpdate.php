<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NAVER회원가입</title>
    <link rel="stylesheet" type="text/css" href="naverStyle.css">
    <script type="text/javascript">
    function email_change(){
      var frm = document.user_input;
      var em = frm.email.value;
      frm.emailL.value = em;
    } </script>
  </head>
  <body align="center">
  <?php echo $_GET[abc] ?>
  <form name="user_input" method="post" action="naverLink.php">
    <table class="big" align=center>
      <tr><td><table><br><br></table></tr></td>
      <tr><td><table><img style="width:140px;" src="../img/naverlogo.jpg"></img></table></tr></td>
      <tr><td><table><br></table></tr></td>
      <tr><td><table><div style="font-family: 나눔고딕; font-size: 25pt;"><b>회원 정보 변경</b></div></table></tr></td>
      <tr><td><table><br><br></table></tr></td>

      <tr><td><table class="firstT">
        <tr><td><input type="text" name="user_name" placeholder=" 이름" style="width:100%;"></td>

        <tr class="under"><td><input type="password" name="user_pass" placeholder=" 비밀번호" style="width:100%;"></td>
          <td><img align="right"style="width:30px;" src="img/hold.jpg"></td></tr>

        <tr align="left" ><td style="width: 70%;"><input type="text" style="width: 30%;" name="emailF" placeholder=" 이메일 앞자리"><b style="font-size:13pt;">&nbsp@&nbsp</b>
        <input type="text" style="width: 30%;" name="emailL" placeholder="   이메일 뒷자리"></td>
          <td style="width: 30%;"><select name="email"style=" height:35px;" onchange="email_change()"><option value="">직접입력</option>
          <option value="naver.com">naver.com</option><option value="daum.net">daum.net</option><option value="naver.com">google.com</option></select></td>
        </tr>

        <tr><td><select name="cellNumF" style="width: 30%; height:35px;"><option value="010">010</option>
        <option value="012">012</option><option value="019">019</option></select>
        <input type="text" name="cellNumM" placeholder=" 휴대전화 앞번호" style="width:55%;"><b style="font-size:13pt;">-</b></td>
         <td><input type="text" name="cellNumL" placeholder=" 휴대전화 뒷번호" style="width: 100%;"></td></td></tr>

        <tr><td style="font-family:나눔고딕; width: 50%; color:#4b4747;">취미</td>
         <td><select style="width: 50%; height:35px;" name="hovy" ><option value="hovy">취미</option><option value="game">게임</option>
           <option value="movie">영화감상</option><option value="sleep">잠자기</option></select></td></tr>
      </table></td></tr>

      <tr><td><table class="forthT">
        <tr><td><table><br><br></table></tr></td>
        <tr><td colspan="2"><input type="submit" name="join" id="joinbtn" value="Ⅴ변경하기" ></td></tr>
        <tr><td><table><br><br></table></tr></td>
        <tr><td style="font-size: 9pt; color:black;">
          <a href="#">회원정보변경</a>&nbsp|&nbsp
          <a href="naverDB_result.php">모든회원보기</a>&nbsp|&nbsp
          <a href="#">회원탈퇴</a></td></tr>

        <tr><td style="font-size:7pt; color:black"><img src="../img/naverlogo.jpg" style="width:70px; padding-top:7px;"></img> &nbsp Copyright ⓒ <b>NAVER Corp.</b> All Rights Reserved</td></tr>
      </tr></td>

      <tr><td><table><br></table></td></tr></table>

    </table></form>
  </body>
</html>
