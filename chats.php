<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE <!DOCTYPE html>
<html lang="en">

<head>
    <title>chats</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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
    <?php require_once('inc/nav.php'); ?>
    <main>
        <h2 class="text-center">Hi</h2>
        <div class="container mt-4">
            <h2 class="text-center">chats</h2>
            <p class="text-center">Welcome to the chats!</p>
            <!-- <div class="flex-container col-12">
            <div class="flex-item col-3 bg-gradient">ss</div>
            <div class="flex-item col-9 bg-dark">ss</div>
        </div> -->

        </div>
    </main>
    <?php require_once('inc/footer.php'); ?>
</body>

</html>