<?php
session_start();
session_unset();
session_destroy();
?>
<meta charset="utf-8">
<script type="text/javascript">
alert('로그아웃 되었습니다.');
history.go(-1);
</script>
