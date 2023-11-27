<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Justin Kaplan and Mihir Sangameswar" content="Project">
    <meta name="Bootstrap + Less" content="Homework 3"> 
    <link rel="stylesheet" href="../styles/main.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"  crossorigin="anonymous"> 
    
    <title>Home</title>  
</head>

<body>

    <?php
        echo '<html><head><style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        </style></head><body>';



        echo '<table>';
        echo '<tr><th>Name</th><th>Email</th><th>Hand</th></tr>';

        foreach ($_SESSION['forSelectHand'] as $row) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>';
        print_r($row['hand']);


        echo '</td>';
        echo '</tr>';
        }

        echo '</table>';
        echo '</body></html>';
    ?>

        <li>
            <a href="?command=homePage">
                <div class="text-container">Home</div>
            </a>
        </li>

    <footer class="main-footer" id="main-foot">
        <ul class="links">
            <li><img src="/projectAssets/twitter.png" alt="twitter"></li>
            <li><img src="/projectAssets/discord.png" alt="discord"></li>
            <li><img src="/projectAssets/instagram.png" alt="instagram"></li>
        </ul>
        <small>Copyright Justin Kaplan and Mihir Sangameswar 2023</small>
        <form class="d-flex" role="search" id="searchBar">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>