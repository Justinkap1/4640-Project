<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Justin Kaplan and Mihir Sangameswar" content="Project">
    <meta name="Bootstrap + Less" content="Homework 3"> 
    <link rel="stylesheet" href="../styles/main.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"  crossorigin="anonymous"> 
    
    <title>Bootstrap Starter HTML</title>  
</head>


<body>
    <!-- Nav Bar -->
    <div class="navbar">
        <a href="?command=homePage" class="nav-item">
            <img src="/assets/pokerchip.jpg" alt="chip">
            <div class="text-container">Home</div>
        </a>
        <a href="?command=alone" class="nav-item">
            <img src="/assets/pokerchip.jpg" alt="chip">
            <div class="text-container">Play Online</div>
        </a>
        <a href="?command=handhistories" class="nav-item">
            <img src="/assets/pokerchip.jpg" alt="chip">
            <div class="text-container">Hand History</div>
        </a>
        <a href="?command=articles" class="nav-item">
            <img src="/assets/pokerchip.jpg" alt="chip">
            <div class="text-container">Articles</div>
        </a> 
    </div>

<!-- Computer Dificulty section -->
    <div style="text-align:center;">
        <div>
            <h1 style="color:white"> Choose a Computer Dificulty </h1>
        </div>

        <div style="display: flex; justify-content:center; align-items:center; height: 80vh;">
            <easy>
                <div class="poker-chip">
                    <img src="/assets/chippy.png" alt="chip">
                </div>
                <h2 style="color:white">
                    Easy
                </h2>
            </easy>
            <medium >
                <div class="poker-chip">
                    <img src="/assets/agent-chess.png" alt="chip">
                </div>
                <h2 style="color:white">
                    Medium
                </h2>
            </medium>
            <hard>
                <div class="poker-chip">
                    <img src="/assets/skyweb.png" alt="chip">
                </div>
                <h2 style="color:white">
                    Hard
                </h2>
            </hard>
        </div>
    </div>




    <footer class="main-footer" id="main-foot">
        <ul class="links">
            <li><img src="/assets/twitter.png" alt="twitter"></li>
            <li><img src="/assets/discord.png" alt="discord"></li>
            <li><img src="/assets/instagram.png" alt="instagram"></li>
        </ul>
        <ul class="pfp-footer">
            <li style="list-style: none;"><img src="/assets/pfp.jpg" alt="profile"></li>
        </ul>

        <small>Copyright Justin Kaplan and Mihir Sangameswar 2023</small>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>




</html>