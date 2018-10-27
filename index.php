<?php 
echo("<script>console.log('awa');</script>");
session_start();

?>

<?php 
if(isset($_SESSION['username']))
{
	echo "Welcome ".$_SESSION['username'];
    echo "Welcome ".$_SESSION['id'];
    if($_SESSION['role']==1){
        header("Location: http://localhost/site/adminpanel.php");
        exit;
    }else{
        header("Location: http://localhost/site/home.php");
        exit;
    }
    

?>
<a href="logout.php">Logout</a>
<?php
}
else
{
	header("Location: http://localhost/site/login.php");
    exit;
}
?>
