<!-- <?php
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit();
        }
        require_once('connection.php');
        $query = "SELECT * FROM user where username like '%" . $_POST['search'] . "%'";
        // $query = "SELECT * FROM user where username like '%" . $_POST['search'] . "%'";
        $result_set = mysqli_query($connection, $query);

        $temp_user_array = array();

        if ($result_set) {
            while ($row = mysqli_fetch_assoc($result_set)) {
                echo $row['username'] . "<br>";
                echo $row['email'] . "<br>";
                $temp_user_array[] = $row;
            }
        } else {
            echo "Database query failed";
        } ?>
<!DOCTYPE html>
<html lang="en">

<head> </head>

<body>
    <div class="container">
        <?php foreach ($temp_user_array as $user) { ?>
        <div>
            <p>Username: <?php echo $user['username']; ?></p>
            <p>Email: <?php echo $user['email']; ?></p>
        </div>
        <?php } ?>
    </div>
</body>

</html> --><?php
            session_start();
            if (!isset($_SESSION['user_id'])) {
                header("Location: ../login.php");
                exit();
            }
            require_once('connection.php');

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['query'])) {
                $search_query = $connection->real_escape_string($_POST['query']);

                // Query to search users
                $query = "SELECT user_id, username, email FROM user WHERE username LIKE '%$search_query%' OR email LIKE '%$search_query%' LIMIT 10";
                $result = $connection->query($query);

                $users = [];
                while ($row = $result->fetch_assoc()) {
                    $users[] = $row;
                }

                header('Content-Type: application/json');
                echo json_encode($users);
                exit();
            }
            ?>