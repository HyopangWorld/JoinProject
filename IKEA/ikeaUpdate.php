<?php
session_start();
?>
<meta charset='utf-8'>
<script type="text/javascript">
var id = "<?php echo $_SESSION['userid']; ?>";
  if(id ==''){
    alert('로그인이 필요합니다.');
    document.location.href='ikea_login.php';
  }
  //로그인/로그아웃
  var id = '<?php echo $_SESSION['userid']; ?>';
  function islogin(){
    if (id == '') {document.location.href='ikea_login.php';
    }else{alert('로그아웃');document.location.href='ikea_logout.php';}
  }
  //로그인/로그아웃버튼 자동변환
  window.onload = function (){
    var change = document.getElementById("login");
    if (id == ''){change.innerHTML = "로그인";
    }else{change.innerHTML = "로그아웃";}
  }
</script>
<meta charset="utf-8">
<link rel="stylesheet" href="index.css">
<style type="text/css">
  .hr{height: 80px; background-color: white;
    text-align: center; color: #003399; font-size: 25pt;}
  .table{font-size:15pt;}
</style>
<table style="width:1298px" align="center">
  <tr><td colspan="2" style="padding:8px;"></td></tr>

  <tr><td align="right"><input type="button" onclick="islogin();" value="로그인"></input>&nbsp|&nbsp<a class=login_bar href="ikeaForm.html">회원가입</a>&nbsp|&nbsp
    <a href="#" class=login_bar>장바구니</a>&nbsp|&nbsp<a href="#" class=login_bar>회원정보</a></td></tr>

<tr><td colspan="2" style="padding:8px;"></td></tr>

  <tr><td style="width:490px; float:left;"><div style="width:9%; float:left;"><a href="#"><img src="serch.png" style="width:40px;"></a></div>
    <div style="width:90%; float:right;"><input style="width:300px; height: 40px;" type="text" name="search" placeholder="검색어를 입력하세요"></div>
  <td style="width:740px; float:left;"><div  style="padding-left:30px;"><a href="index.php"><img class="title"src="ikeaLoge.png"/></a></div>
    <div style="font-family:Bradley Hand ITC; padding:30px; padding-left:0px; font-size:20pt;"><b>The Life Improvement Store</b></div>
  </td></tr>

  <tr><td class="menubar" colspan="2" align="center">
    <a class="menu"href="#">조리</a><a class="menu"href="#">식기</a><a href="#" class="menu">거실</a>
    <a class="menu"href="#">홈오피스</a><a class="menu"href="#">침실</a><a href="#" class="menu">텍스타일 / 러그</a>
    <a class="menu"href="#">욕실</a><a class="menu"href="#">주방</a><a href="#" class="menu">다이닝</a></td></tr>

<tr><td colspan="2" style="padding:5px;"></td></tr>

<?php
include "ikeaDB_infor.php";
$id = $_SESSION['userid'];
$query ="select * from member where user_id='$id';";
$result = mysql_query($query,$conn);
$row = mysql_fetch_row($result);
?>
   <form action="update_result.php?id=<?php echo $row[0] ?>" method="post">
    <table align="right" class="table" style="padding-right:550px;">
      <tr><td colspan="2"><br></td></tr>
      <tr><td colspan="2" class="hr">[회&nbsp원&nbsp정&nbsp보]</td></tr>
      <tr><td colspan="2"><br><br><br></td></tr>
      <tr><td style="background-color:#e6e6e6; color:#827f7f; font-size:11pt; padding:10px;">이름</td><td style="padding-left:20px;"><?php echo $row[1] ?></td></tr>
      <tr><td colspan="2"><br></td></tr>
      <tr><td style="background-color:#e6e6e6; color:#827f7f; font-size:11pt; padding:10px;">성별</td><td style="padding-left:20px;"><?php echo $row[2] ?></td></tr>
      <tr><td colspan="2"><br></td></tr>
      <tr><td style="background-color:#e6e6e6; color:#827f7f; font-size:11pt; padding:10px;">아이디</td><td style="padding-left:20px;"><?php echo $row[3] ?></td></tr>
      <tr><td colspan="2"><br></td></tr>
      <tr><td style="background-color:#e6e6e6; color:#827f7f; font-size:11pt; padding:10px;">이메일</td><td style="padding-left:20px;">
        <input type="text" style="width:100px;"name="emailF" value="<?php echo $row[5] ?>">&nbsp&nbsp@&nbsp&nbsp
      <input type="text" style="width:100px;"name="emailL" value="<?php echo $row[6] ?>"></td></tr>
      <tr><td colspan="2"><br></td></tr>
      <tr><td style="background-color:#e6e6e6; color:#827f7f; font-size:11pt; padding:10px;">전화번호</td><td style="padding-left:20px;">
        <input type="text" style="width:70px;"name="cellNumF" value="<?php echo $row[7] ?>">&nbsp&nbsp-&nbsp&nbsp
      <input type="text" style="width:70px;"name="cellNumM" value="<?php echo $row[8] ?>">&nbsp&nbsp-&nbsp&nbsp
    <input type="text" style="width:70px;"name="cellNumL" value="<?php echo $row[9] ?>"></td></tr>
      <tr><td colspan="2"><br></td></tr>
      <tr><td style="background-color:#e6e6e6; color:#827f7f; font-size:11pt; padding:10px;">취미</td>
        <td style="padding-left:20px;"> <input type="text" name="hoby" value="<?php echo $row[10] ?>"></td></tr>
      <tr><td colspan="2"><br><br></td></tr>
      <tr><td colspan="2" align="center">비밀번호를 입력하세요&nbsp&nbsp<input type="password" name="pass"></input></td></tr>
      <tr><td colspan="2"><br></td></tr>
      <tr><td colspan="2" align="center"><input type="submit" value="수정하기"></td></tr>
      <tr><td colspan="2"><br><br><br></td></tr>
    </table>
  </form>
  <div class="bottom">
    <hr>
    <p>&nbsp<b>회사소개</b>&nbsp&nbsp|&nbsp&nbsp<b>이용약관</b>&nbsp&nbsp|&nbsp&nbsp<b>이용안내</b>&nbsp&nbsp|&nbsp&nbsp<b>개인정보취급방침</b></p>
  </div>
  <div class="">
    <p>© Inter IKEA Systems B.V. 1999 - 2014 &nbsp|&nbsp 이용약관 &nbsp|&nbsp이용안내&nbsp|&nbsp개인정보취급방침&nbsp|&nbsp IKEA 고객지원센터 16070-4532</p>
  </div>
