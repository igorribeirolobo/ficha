<?php
require_once("connect.php");
$sql = "UPDATE tbl_adv SET Data_adv='".$_POST['data_adv']."', Relato='".$_POST['relato_adv']."', tbl_tipoadv_idl_tipoadv=".$_POST['adv']." WHERE tbl_Ficha_id_Ficha=".$_GET['id'];
mysqli_query($conn,$sql);
echo "<script>alert('Alteracao salva com sucesso!')</script>";
echo "<meta http-equiv='refresh' content='0; url=edit_ficha.php?id=".$_GET['id']."'>";
?>