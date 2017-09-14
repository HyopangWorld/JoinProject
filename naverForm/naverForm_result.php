<meta charset="utf-8">
  <?php
    $conn = mysql_connect('localhost','tid','tpass');
    mysql_select_db('tdb',$conn);

    $name = $_POST[user_name];
    $gender = $_POST[gender];
    $id = $_POST[user_id];
    $pass = $_POST[user_pass];
    $repass = $_POST[user_repass];
    $emailF = $_POST[emailF];
    $emailL = $_POST[emailL];
    $cellNumF = $_POST[cellNumF];
    $cellNumM = $_POST[cellNumM];
    $cellNumL = $_POST[cellNumL];
    $hovy = $_POST[hovy];

    if ($repass == $pass) {

      $query = "insert into login values('','$name','$gender','$id','$pass', '$emailF', '$emailL','$cellNumF','$cellNumM','$cellNumL','$hovy')";
      mysql_query($query, $conn); // == mysql_query("insert into login values('','$id','$pass')", $conn);

      echo "<script> alert('입력완료'); document.location.href='naverForm.html';</script>";
      mysql_close();
    }else{
      echo "<script> alert('입력하신 비밀번호가 다릅니다.');</script>";
    }
  ?>
