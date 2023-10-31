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

    <div class="navbar">
        <a href="?command=homePage" class="nav-item">
            <img src="/assets/pokerchip.jpg" alt="chip">
            <div class="text-container">Home</div>
        </a>
        <a href="?command=alone" class="nav-item">
            <img src="/assets/pokerchip.jpg" alt="chip">
            <div class="text-container">Play Alone</div>
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
<!-- Game Choosers -->
    <h1 class="page-title">Game Info</h1>
    <div class="online-container">
            <div style="margin-right: 50px;">
                    <form class="d-flex" role="search" id="searchBar">
                        <input class="form-control me-2" type="search" placeholder="Buy in" aria-label="Search" 
                            pattern="^[1-9]\d*$" title="Please enter a positive whole number">
                        <div style="background-color: white; border-radius: 7px;">
                            <button class="btn btn-outline-success" type="submit">Submit</button>
                        </div>
                    </form>
                
                <h2 style="color:white">Choose a Game Mode</h2>
            
                <form>
                    <label style="color:white">
                        <input type="radio" name="gameMode" value="Pot Limit Omaha">
                        Pot Limit Omaha
                    </label>
            
                    <br>
            
                    <label style="color:white">
                        <input type="radio" name="gameMode" value="No Limit Texas Holdem">
                        No Limit Texas Holdem
                    </label>
            
                    <br>
            
                    <label style="color:white">
                        <input type="radio" name="gameMode" value="Limit Texas Holdem">
                        Limit Texas Holdem
                    </label>
            
                    <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <!-- Friends List -->
            <div>
                <h3 style="text-align: center;color: white;"> Friends </h3>
                <div class="friends-list">
                    <div class="friend-item">
                        <div class="add-friend">+</div>
                        <span class="friend-name">John Doe</span>
                        <!-- <span class="friend-status">Online</span> -->
                    </div>
                    <div class="friend-item">
                        <div class="add-friend">+</div>
                        <span class="friend-name">Jane Smith</span>
                        <!-- <span class="friend-status">Offline</span> -->
                    </div>
                    <div class="friend-item">
                        <div class="add-friend">+</div>
                        <span class="friend-name">Bob Johnson</span>
                        <!-- <span class="friend-status">Online</span> -->
                    </div>
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