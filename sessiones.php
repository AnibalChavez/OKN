<?php
session_start();
if (isset($_SESSION['name'])){
?>
<?php
}
else{
    header ('location:index.php');
}
?>