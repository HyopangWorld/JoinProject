<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IKEA로그인</title>
    <script type="text/javascript">
  var id = "<?php echo $_SESSION['userid']; ?>";
  //로그인/로그아웃버튼 자동변환
  window.onload = function (){
    var change = document.getElementById("login");
    if (id == ''){change.innerHTML = "로그인";
    }else{change.innerHTML = "로그아웃";}
  }</script>
    <link rel="stylesheet" href="index.css">
    <style type="text/css">
    .menu{padding:45px;}
    .field{font-family: 나눔고딕; color: #625e5e; font-size: 11pt;width: 500px;
      border-width: thin;border-style: solid;border-color: #cdc7c7;
      padding: 25px; padding-top: 40px;padding-bottom: 40px;}
    .btn{border-width: thin; border-style: none;
      vertical-align: middle;background-color: #003399;
      width:100px; height:100px;font-size: 13pt;color: white; font-weight: bold; font-family: 고딕;}
     a:link { color: #625e5e; text-decoration: none;}
     a:visited { color: #625e5e; text-decoration: none;}
     a:hover { color: #625e5e; text-decoration: underline;}
     .txtBox{width:250px; height:55px;  padding-left: 10px;
       border-width:thin; border-style:solid; border-color:#d9d9d9;
       background-color:#f6f6f6;}
    </style>
  </head>

  <body>
    <table style="width:1298px" align="center">
      <tr><td colspan="2" style="padding:8px;"></td></tr>

      <tr><td align="right"><a class=login_bar href="ikea_login.php">로그인</a>&nbsp|&nbsp<a class=login_bar href="ikeaForm.html">회원가입</a>&nbsp|&nbsp
        <a href="#" class=login_bar>장바구니</a>&nbsp|&nbsp<a href="#" class=login_bar>회원정보</a></td></tr>

    <tr><td colspan="2" style="padding:8px;"></td></tr>

      <tr><td style="width:490px; float:left;"><div style="width:9%; float:left;"><a href="#"><img src="serch.png" style="width:40px;"></a></div>
        <div style="width:90%; float:right;"><input style="width:300px; height: 40px;" type="text" name="search" placeholder="검색어를 입력하세요"></div></td>
      <td style="width:740px; float:left;"><div  style="padding-left:30px;"><a href="index.php"><img class="title"src="ikeaLoge.png"/></a></div>
        <div style="font-family:Bradley Hand ITC; padding:30px; padding-left:0px; font-size:20pt;"><b>The Life Improvement Store</b></div>
      </td></tr>

      <tr><td class="menubar" colspan="2" align="center">
        <a class="menu"href="#">조리</a><a class="menu"href="#">식기</a><a href="#" class="menu">거실</a>
        <a class="menu"href="#">홈오피스</a><a class="menu"href="#">침실</a><a href="#" class="menu">텍스타일 / 러그</a>
        <a class="menu"href="#">욕실</a><a class="menu"href="#">주방</a><a href="#" class="menu">다이닝</a></td></tr>

    <tr><td colspan="2" style="padding:50px;"></td></tr>
  </table>
        <table class="field" align ="center">
          <form action="ikeaLogin_result.php" method="post">
          <tr><td style="width:90px; height:0px; padding-left:40px;"><input  class="txtBox" type="text" name="user_id" placeholder="아이디" ></input></td>
          <td rowspan="2" align="center"><input class="btn" type="submit" name="bt" value="로그인"></input></td>
        </tr><tr>
          <td style="width:90px; height:0px; padding-left:40px;"><input class="txtBox" type="password" name="user_pass" placeholder="비밀번호"></input></td>
        </tr><tr>
          <td colspan="2" style="padding-top:14px; padding-bottom:0px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="ikeaForm.html">회원가입</a>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="#">아이디</a>/<a href="#">비밀번호 찾기</a></td>
        </tr>
      </form></table>

   </body>
</html>
