<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Justin Kaplan and Mihir Sangameswar" content="Project">
    <meta name="Bootstrap + Less" content="Homework 3"> 
    <link rel="stylesheet" href="../styles/main.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"  crossorigin="anonymous"> 
    
    <title>Hand Histories</title>  
</head>

<body>
    <header>
        <div class="header-top" id="main-header">
            <div class="poker-header"><img src="../projectAssets/poker-logo.jpg" alt="poker logo"></div>
            <h1>Hand Histories for <?=$name?></h1>
            <div class="pfp"><img src="/projectAssets/pfp.jpg" alt="profile pic"></div>
        </div>
        <div class="choose-quote">Choose to view or select</div>
    </header>
    <section class="choose-section">
        <a href="?command=addhand">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="add-a-hand">Add a Hand</div>
        </a>
        <a href="?command=selecthand">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="select-a-hand">Select a Hand</div>
        </a>
    </section>
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