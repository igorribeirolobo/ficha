<?php
require_once("connect.php");
$sql = "UPDATE tbl_elogio SET Data_Elogio='".$_POST['data_positivo']."', Relato='".$_POST['relato_positivo']."' WHERE tbl_Ficha_id_Ficha = ".$_GET['id'];
mysqli_query($conn,$sql);
echo "<script>alert('Alteracao salva com sucesso!')</script>";
echo "<meta http-equiv='refresh' content='0; url=edit_ficha.php?id=".$_GET['id']."'>";
?>