<?php
include 'db.php';
session_start();
if(!isset($_SESSION['aid'])){
    echo"<script>window.location.href='../access/403.php'</script>";

}
else{
    $globalaname=$_SESSION['auname'];
    $globalaid=$_SESSION['aid'];
}
?>
