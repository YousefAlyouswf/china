<?php
include_once '../db.inc.php';
?>
<?php 
$query="DELETE FROM login WHERE id=". $_GET['id'];
$result= mysqli_query($connect, $query);

?>
<?php 
mysqli_close($connect);
echo '<h2 style="text-align:center; margin-top: 20vw;">Successful deleting</h2>';
echo "<meta http-equiv='refresh' content='0;url=adduser.php'>";
?>