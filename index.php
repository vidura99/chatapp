<?php require_once('inc/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
    /* Flexbox to ensure footer stays at the bottom */
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }

    main {
        flex: 1;
        /* Pushes the footer to the bottom when content is short */
    }

    footer {
        background-color: #343a40;
        color: #ffffff;
        text-align: center;
        padding: 10px 0;
    }
    </style>
</head>

<body>
    <!-- Include navigation bar -->
    <?php require_once('inc/nav.php'); ?>

    <!-- Main content -->
    <main>
        <div class="container mt-4">
            <h2 class="text-center">Home</h2>
            <p class="text-center">Welcome to the homepage!</p>
        </div>
    </main>

    <!-- Include footer -->
    <?php require_once('inc/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php mysqli_close($connection); ?>