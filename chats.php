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

    #searchResults {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 1000;
        border: 1px solid #ccc;
        background: #fff;
        border-radius: 5px;
        display: none;
        max-height: 300px;
        overflow-y: auto;
    }

    .dropdown-item {
        padding: 10px;
        cursor: pointer;
    }

    .dropdown-item:hover {
        background-color: #f0f0f0;
    }
    </style>
</head>

<body>
    <?php require_once('inc/lognav.php'); ?>
    <main class="container row">
        <div class="col-3 bg-dark text-white">
            <ul class="list-group list-unstyled p-3">
                <li class="text-center m-1"> chamara</li>
                <li class="text-center m-1">chamara</li>
                <li class="text-center">chamara</li>
                <li class="text-center">chamara</li>
                <li class="text-center">chamara</li>
                <li class="text-center">chamara</li>
                <li class="text-center">chamara</li>
                <li class="text-center">chamara</li>
                <li class="text-center">chamara</li>
            </ul>
        </div>
        <div class="container mt-4 col-9">
            <h2 class="text-center">chats</h2>
            <p class="text-center">Welcome to the chats!</p>

        </div>
    </main>
    <?php require_once('inc/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            let query = $(this).val();

            if (query.length > 0) {
                $.ajax({
                    url: 'inc/search.php',
                    method: 'POST',
                    data: {
                        query: query
                    },
                    dataType: 'json',
                    success: function(data) {
                        let resultHtml = '';
                        if (data.length > 0) {
                            data.forEach(user => {
                                resultHtml += `
                                    <a href="user_profile.php?user_id=${user.user_id}" class="dropdown-item">
                                        <strong>${user.username}</strong> - ${user.email}
                                    </a>`;
                            });
                        } else {
                            resultHtml = '<p class="dropdown-item">No users found</p>';
                        }
                        $('#searchResults').html(resultHtml).show();
                    },
                    error: function() {
                        $('#searchResults').html(
                            '<p class="dropdown-item">Error fetching users</p>').show();
                    }
                });
            } else {
                $('#searchResults').hide();
            }
        });

        // Hide results when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('#searchForm').length) {
                $('#searchResults').hide();
            }
        });
    });
    </script>


</body>

</html>