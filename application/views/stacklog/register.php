<?php 
    if($type === 'fail') echo 'f';
    if($type === 'success') echo 's';
?>
<form action="/Stacklog/register/<?php echo $type?>" method="POST">
    <input name="u_name" />
    <input name="u_email" />
    <input type="submit" value="등록" />
</form>
