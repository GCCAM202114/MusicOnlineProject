<?php 
    include 'Includes/header.php';
    if(!isset($_SESSION['loggedin'])){
        header('Location: login');
    }
     
?>
<h1>Admin dashboard</h1>
<?php include 'Includes/footer.php'; ?>

    