<?php include './layout/header_meta.php'; ?>
<?php 
    $_GLOBAL['is_admin'] = false; 
    $_SESSION['test_session'] = "No need";
?>

<body>
    <div class="main-container">
        <?php 
            // $_Global['is_admin'] = false;
        ?>
        <?php include './login.php'; ?>
        <?php include './layout/footer.php'; ?>
    </div>
</body>
</html>