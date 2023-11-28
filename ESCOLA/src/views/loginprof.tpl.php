<?php include_once 'partials/header.tpl.php';     ?>

<body>

    <nav class="breadcrumb">
        <ol class="breadcrumb">
            <li >Home</li>
            <li >LoginPROF</li>
        </ol>
    </nav>
    <h1><?= $title; ?></h1>
    <hr />
    <form action="?url=loginactionprof" method="POST">
        <input type="name" placeholder="Email please...." name="email" required>
        <input type="password" placeholder="Password please...." name="password" required>
        <button type="submit" value="enviar">Log in</button>
        <input type="checkbox" name="record"> Recordeu-me en aquest equip
    </form>

    <a href="?url=home">Atras</a>

    <?php include_once 'partials/footer.tpl.php' ?>
</body>

</html>