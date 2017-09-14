<meta charset="utf-8" />
<script type="text/javascript">
  function parent(id){
    alert(id);
    window.opener.id= id;
    self.close();
  }
</script>
<?php
  $idch = $_POST['user_id'];
  $id = 'adsf';

  if ($idch == $id) {
    echo "사용 불가합니다.";
  }else{
    echo "사용가능한 아이디입니다.";
?>  <input type="button" value="사용하기" onclick="parent('<?php echo $idch; ?>')">
<?php
  }
?>
