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
            <img src="../projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Home</div>
        </a>
        <a href="?command=calculator" class="nav-item">
            <img src="../projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Calculator</div>
        </a>
        <a href="?command=handhistories" class="nav-item">
            <img src="../projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Hand History</div>
        </a>
        <a href="?command=articles" class="nav-item">
            <img src="../projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Articles</div>
        </a> 
    </div>
<!-- Game Choosers -->
    <div class="online-container">
            <!-- Friends List -->
            <div>
                <h3 style="text-align: center; color: white;"> Friends </h3>
                <div class="friends-list">
                    <form method="post" action="?command=searchFriend" class="friend-form">
                        <label for="searchFriend">Add Friend:</label>
                        <input type="text" name="searchFriend" id="searchFriend" required>
                        <input type="submit" value="Search Friend">
                            <!-- Display error message here -->
                        <?php
                        if (isset($_SESSION['error_message'])) {
                            echo '<div class="error-message">' . $_SESSION['error_message'] . '</div>';
                            unset($_SESSION['error_message']); // Clear the error message after displaying it
                        }
                        ?>
                    </form>
                    <?php
                        // Check if friends data is set in the session
                        if (isset($_SESSION['friends'])) {
                            // Loop through each friend in the 2D array
                            foreach ($_SESSION['friends'] as $friend) {
                                $friendName = $friend['friendname'];
                                $friendEmail = $friend['friendemail'];
                    ?>
                                <div class="friend-item">
                                    <a href="?command=chat&friend=<?php echo urlencode($friendName); ?>">
                                        <div class="add-friend">+</div>
                                    </a>
                                    <span class="friend-name"><?php echo $friendName; ?></span>
                                    <!-- Displaying friend email is optional -->
                                    <!-- <span class="friend-email"><?php echo $friendEmail; ?></span> -->
                                </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>


    


    <footer class="main-footer" id="main-foot">
        <ul class="links">
            <li><img src="/projectAssets/twitter.png" alt="twitter"></li>
            <li><img src="/projectAssets/discord.png" alt="discord"></li>
            <li><img src="/projectAssets/instagram.png" alt="instagram"></li>
        </ul>
        <ul class="pfp-footer">
            <li style="list-style: none;"><img src="/projectAssets/pfp.jpg" alt="profile"></li>
        </ul>

        <small>Copyright Justin Kaplan and Mihir Sangameswar 2023</small>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   

</body>
</html>