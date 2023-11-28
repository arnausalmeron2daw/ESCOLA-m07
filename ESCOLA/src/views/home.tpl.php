<?php

include_once 'partials/header.tpl.php';
require  'src/conexion.php';

?>

<body>
<nav class="breadcrumb">
        <ol class="breadcrumb">
            <li>Home</li>           
        </ol>
    </nav>
    <h1><?= $title; ?></h1>
    <hr />

    <a href="?url=login">Login</a>
    <a href="?url=loginprof">LoginProf</a>
    <a href="?url=register">Register</a>
    <a href="?url=register2">RegisterProf</a>

    
    <?php include_once 'partials/footer.tpl.php' ?>
</body>

</html>
