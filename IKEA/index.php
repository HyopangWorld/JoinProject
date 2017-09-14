<?php
session_start();
?>
<meta charset="utf-8">
<title>IKEA</title>
<link rel="stylesheet" href="index.css">
<script type="text/javascript">
var id = "<?php echo $_SESSION['userid']; ?>";
//로그인/로그아웃버튼 자동변환
window.onload = function (){
  var change = document.getElementById("login");
  if (id == ''){change.innerHTML = "로그인";
  }else{change.innerHTML = "로그아웃";}
}

//메인 이미지 자동변환
var photos=new Array();
photos[0]="main_img1.jpg";
photos[1]="main_img2.jpg";
photos[2]="main_img3.jpg";
 var which=0;
setInterval(function() {
    if (which<photos.length-1){which++;
     document.images.photoslider.src=photos[which];}
    else {which = 0;
     document.images.photoslider.src=photos[which];}
  }, 3200);

//로그인/로그아웃
function islogin(){
  if (id == '') {document.location.href='ikea_login.php';
  }else{alert('로그아웃');document.location.href='ikea_logout.php';}
}
</script>
<table style="width:1298px" align="center">
  <tr><td colspan="2" style="padding:8px;"></td></tr>

  <tr><td><button type="button" name='bt' onclick="islogin();" value="로그인" id="login"></button>&nbsp|&nbsp<a class=login_bar href="ikeaForm.html">회원가입</a>&nbsp|&nbsp
    <a href="#" class=login_bar>장바구니</a>&nbsp|&nbsp<a href="ikeaUpdate.php" class=login_bar>회원정보</a></td></tr>

<tr><td colspan="2" style="padding:8px;"></td></tr>

  <tr><td style="width:490px; float:left;"><div style="width:9%; float:left;"><a href="#"><img src="serch.png" style="width:40px;"></a></div>
    <div style="width:90%; float:right;"><input style="width:300px; height: 40px;" type="text" name="search" placeholder="검색어를 입력하세요"></div>
  <td style="width:740px;"><div  style="padding-left:30px;"><a href="index.php"><img class="title"src="ikeaLoge.png"/></a></div>
    <div style="font-family:Bradley Hand ITC; padding:30px; padding-left:0px; font-size:20pt;"><b>The Life Improvement Store</b></div>
  </td></tr>

  <tr><td class="menubar" colspan="2" align="center">
    <a class="menu"href="#">조리</a><a class="menu"href="#">식기</a><a href="#" class="menu">거실</a>
    <a class="menu"href="#">홈오피스</a><a class="menu"href="#">침실</a><a href="#" class="menu">텍스타일 / 러그</a>
    <a class="menu"href="#">욕실</a><a class="menu"href="#">주방</a><a href="#" class="menu">다이닝</a></td></tr>

<tr><td colspan="2" style="padding:5px;"></td></tr>

  <tr><td colspan="2"class="main_img"align="center">
    <div style="width:700px; float:left;padding-left:120px;"><img style="width:1060px;" src="main_img1.jpg" name='photoslider'></div>
  </td></tr>
<tr><td colspan="2" style="padding:30px;"></td></tr>
  <tr><td colspan="2"><hr></td></tr>
  <tr><td colspan="2"><br><br></td></tr>
  <tr><td></td><td style="background-color: #595555; font-size:10pt; color:white; height:30px;">
    <p>© Inter IKEA Systems B.V. 1999 - 2014 &nbsp|&nbsp 웹사이트 이용약관 &nbsp|&nbspIKEA Korea 이용안내&nbsp|&nbspIKEA FAMILY개인정보취급방침&nbsp|&nbsp IKEA 고객지원센터 16070-4532</p></td>
    <td></td>
</tr>
</table>
  <br>
