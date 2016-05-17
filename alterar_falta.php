<?php
$sql = "UPDATE tbl_atestado SET Data='".$_POST['Data_falta']."', Dias=".$_POST['Dias_Falta'].", Relato='".$_POST['relato_falta']."' WHERE tbl_Ficha_id_Ficha=".$_GET['id'];
mysqli_query($conn,$sql);
echo "<script>alert('Alteracao salva com sucesso!')</script>";
echo "<meta http-equiv='refresh' content='0; url=edit_ficha.php?id=".$_GET['id']."'>";
?>