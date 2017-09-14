<meta charset="utf-8">
  <?php
    include "ikeaDB_infor.php";

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

      $query = "insert into member values('','$name','$gender','$id','$pass', '$emailF', '$emailL','$cellNumF','$cellNumM','$cellNumL','$hovy')";
      mysql_query($query, $conn); // == mysql_query("insert into login values('','$id','$pass')", $conn);

      echo "<script> alert('입력완료'); document.location.href='ikea_login.php';</script>";
      mysql_close();
    }else{
      echo "<script> alert('입력하신 비밀번호가 다릅니다.');</script>";
    }
  ?>
