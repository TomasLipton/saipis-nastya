<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/favicon.png">

    <title>История операций</title>

    <?php require_once __DIR__ . '/../parts/css.php' ?>
</head>
<body>
<header>
    <?php require_once __DIR__ . '/../parts/navbar.php' ?>
</header>
<main>
    <div class="container">
        <h1 class="text-center mb-4"><?php echo $calculation->company_name; ?></h1>
        <?php echo $calculation->data; ?>


    </div>
</main>

<?php require_once __DIR__ . '/../parts/footer.php' ?>

</body>
</html>