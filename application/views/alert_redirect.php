<?php
    // * script 레벨에서 alert -> redirect. 만들어서 써보자.
?>
<script type="text/javascript">
    alert("<?php echo $msg ?>");
    document.location.href="<?php echo $url?>";
</script>
