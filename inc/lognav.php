<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid mg-5"> <a class="navbar-brand" href="#">Chat App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav bg-dark text-white ">
            <li class="nav-item ml-20"><a class=" nav-link text-white " href="index.php">Home</a></li>
            <li class="nav-item mp-5"><a class="nav-link text-white" href="about.php">About</a></li>
            <li class="nav-item mp-5"><a class="nav-link text-white" href="inc/logout.php">Logout </a></li>
        </ul>
    </div>
</nav> -->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Chat App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <!-- <li class="nav-item "><a class=" nav-link text-white " href="index.php">Home</a></li> -->
                <li class="nav-item "><a class="nav-link text-white" href="about.php">About</a></li>
                <li class="nav-item "><a class="nav-link text-white" href="inc/logout.php">Logout </a></li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <!-- 
            <form class="d-flex" role="search" method="post" action="search.php"></form>
            <input type="hidden" name="csrf_token" value=" < ?php echo $_SESSION['csrf_token']; ?>">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            <form class="d-flex" id="searchForm">
                <input class="form-control me-2" type="text" id="searchInput" placeholder="Search users..."
                    autocomplete="off">
                <div id="searchResults" class="dropdown-menu"></div>
            </form>
            <!-- check gtir -->
        </div>
    </div>
</nav>