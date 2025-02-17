<?php require_once('inc/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
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
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name =  $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = sha1($password);

    // echo $user_name . "<br>".$email."<br>".$hashed_password;

    // $query = "INSERT INTO user (user_name, email, password) VALUES('{$user_name}', '{$hashed_password}')";
    $query = "select * from user where user_name = '{$user_name}' and password = '{$hashed_password}'";

    $result = mysqli_query($connection, $query);

    if ($result) {


        if ($row = mysqli_fetch_assoc($result)) {

            echo '<div
            class="alert alert-success"
            role="alert"
        >
            <h4 class="alert-heading">Success</h4>
            <p>login success</p>
            <hr />
        </div>';

            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['uname'] = $row['user_name'];

            header('Location: chats.php');
            exit();
        }

        // echo "1 record added"
    } else {
        echo ' <div
        class="alert alert-danger"
        role="alert"
    >
        <h4 class="alert-heading">Failed</h4>
        <p>Login Unsuccess</p>
        <hr />
    </div>';

        header('Location: signup.php');
        exit();

        // echo "Database query failed";
    }
} ?>

<body>
    <!-- Include navigation bar -->
    <?php require_once('inc/nav.php'); ?>

    <!-- Main content -->
    <main>
        <div class="container mt-4">
            <h2 class="text-center">Login</h2>
            <div class="form-group">
                <form action="login.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    <!-- <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required> -->
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                    <button type="reset" class="btn btn-secondary mt-3">Cancel</button>
                </form>
            </div>
    </main>

    <!-- Include footer -->
    <?php require_once('inc/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php mysqli_close($connection); ?>