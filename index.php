<?php include './layout/header_meta.php'; ?>
<?php  $_GLOBAL['is_admin'] = false; ?>
<body>
    <?php 
        $_Global['is_admin'] = true;
    ?>
    <?php include './login.php'; ?>
    <?php include './layout/footer.php'; ?>
</body>
</html>