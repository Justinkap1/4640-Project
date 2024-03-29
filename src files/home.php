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
    <header>
        <div class="header-top" id="main-header">
            <div class="poker-header"><img src="../projectAssets/poker-logo.jpg" alt="poker logo"></div>
            <h1>Welcome to UVA Poker, <?=$name?>! Select an option to get started</h1>
            <div class="pfp">
                <a href="?command=profile">
                    <img src="/projectAssets/pfp.jpg" alt="profile pic">
                </a>
            </div>
        </div>
        <nav class="main-nav">
            <ul class="firstSection">
                <li>
                    <a href="?command=calculator">
                        <img src="/projectAssets/pokerchip.jpg" alt="chip">
                        <div class="text-container">Calculator</div>
                    </a>
                </li>
                <li>
                    <a href="?command=online">
                        <img src="/projectAssets/pokerchip.jpg" alt="chip">
                        <div class="text-container">Chat With Friends</div>
                    </a>
                </li>
            </ul>
            <ul class="secondSection">
                <li>
                    <a href="?command=handhistories">
                        <img src="/projectAssets/pokerchip.jpg" alt="chip">
                        <div class="text-container">Hand Histories</div>
                    </a>
                </li>
                <li>
                    <a href="?command=articles">
                        <img src="../projectAssets/pokerchip.jpg" alt="chip">
                        <div class="text-container">Articles</div>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
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