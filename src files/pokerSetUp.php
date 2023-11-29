<?php
    // Assuming $_SESSION['myCards'] is an array of card values
    $myCards = $_SESSION['myCards'];
    $botCards = $_SESSION['botCards'];
    $communityCards = $_SESSION['communityCards'];
    // $_SESSION['count'] = 0;
?>

<!-- store all cards -->
<script>
    var botCards = <?php echo json_encode($botCards); ?>;
    var myCards = <?php echo json_encode($myCards); ?>;
    var communityCards = <?php echo json_encode($communityCards); ?>;

    var backCards = <?php echo json_encode(array(
        "backCard1" => "../projectAssets/backOfCard.png",
        "backCard2" => "../projectAssets/backOfCard.png",
    )); ?>;
    var masterCardDict = <?php echo json_encode(array(
        "Ah" => "../projectAssets/ace_of_hearts.png",
        "Ad" => "../projectAssets/ace_of_diamonds.png",
        "As" => "../projectAssets/ace_of_spades.png",
        "Ac" => "../projectAssets/ace_of_clubs.png",
        "Kh" => "../projectAssets/king_of_hearts.png",
        "Kd" => "../projectAssets/king_of_diamonds.png",
        "Ks" => "../projectAssets/king_of_spades.png",
        "Kc" => "../projectAssets/king_of_clubs.png",
        "Qh" => "../projectAssets/queen_of_hearts.png",
        "Qd" => "../projectAssets/queen_of_diamonds.png",
        "Qs" => "../projectAssets/queen_of_spades.png",
        "Qc" => "../projectAssets/queen_of_clubs.png",
        "Jh" => "../projectAssets/jack_of_hearts.png",
        "Jd" => "../projectAssets/jack_of_diamonds.png",
        "Js" => "../projectAssets/jack_of_spades.png",
        "Jc" => "../projectAssets/jack_of_clubs.png",
        "Th" => "../projectAssets/10_of_hearts.png",
        "Td" => "../projectAssets/10_of_diamonds.png",
        "Ts" => "../projectAssets/10_of_spades.png",
        "Tc" => "../projectAssets/10_of_clubs.png",
        "9h" => "../projectAssets/9_of_hearts.png",
        "9d" => "../projectAssets/9_of_diamonds.png",
        "9s" => "../projectAssets/9_of_spades.png",
        "9c" => "../projectAssets/9_of_clubs.png",
        "8h" => "../projectAssets/8_of_hearts.png",
        "8d" => "../projectAssets/8_of_diamonds.png",
        "8s" => "../projectAssets/8_of_spades.png",
        "8c" => "../projectAssets/8_of_clubs.png",
        "7h" => "../projectAssets/7_of_hearts.png",
        "7d" => "../projectAssets/7_of_diamonds.png",
        "7s" => "../projectAssets/7_of_spades.png",
        "7c" => "../projectAssets/7_of_clubs.png",
        "6h" => "../projectAssets/6_of_hearts.png",
        "6d" => "../projectAssets/6_of_diamonds.png",
        "6s" => "../projectAssets/6_of_spades.png",
        "6c" => "../projectAssets/6_of_clubs.png",
        "5h" => "../projectAssets/5_of_hearts.png",
        "5d" => "../projectAssets/5_of_diamonds.png",
        "5s" => "../projectAssets/5_of_spades.png",
        "5c" => "../projectAssets/5_of_clubs.png",
        "4h" => "../projectAssets/4_of_hearts.png",
        "4d" => "../projectAssets/4_of_diamonds.png",
        "4s" => "../projectAssets/4_of_spades.png",
        "4c" => "../projectAssets/4_of_clubs.png",
        "3h" => "../projectAssets/3_of_hearts.png",
        "3d" => "../projectAssets/3_of_diamonds.png",
        "3s" => "../projectAssets/3_of_spades.png",
        "3c" => "../projectAssets/3_of_clubs.png",
        "2h" => "../projectAssets/2_of_hearts.png",
        "2d" => "../projectAssets/2_of_diamonds.png",
        "2s" => "../projectAssets/2_of_spades.png",
        "2c" => "../projectAssets/2_of_clubs.png"
    )); ?>;
</script>

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
        <a href="?command=alone" class="nav-item">
            <img src="../projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Play Alone</div>
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

    <!-- Only doing check or fold, I am not doing more than that -->
    <!-- Poker Action Form -->
    <div class="container mt-4">
        <h1>Poker Game</h1>
        <form id="pokerActionForm">

            <!-- Check button -->
            <button type="button" class="btn btn-success" onclick="nextPart()">Check</button>

            <!-- Fold button -->
            <button type="button" class="btn btn-danger"onclick="confirmFold()" >Fold</button>
        </form>

        <div id="myCardsContainer" class="card-container">
            <!-- Your cards will be displayed here -->
        </div>
        <div id="botCardsContainer" class="card-container">
            <!-- Bot's cards will be displayed here -->
        </div>
        <div id="communityCardsContainer" class="card-container">
            <!-- Community cards will be displayed here -->
        </div>

        <form id="newGameForm" style="display: none;">
            <label for="newGame">Do you want to start a new game or go home?</label>
            <button type="button" class="btn btn-primary" onclick="startNewGame()">New Game</button>
            <button type="button" class="btn btn-secondary" onclick="goHome()">Go Home</button>
        </form>


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

    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
    var count = <?php echo $_SESSION['count'] ?? 0; ?>;

    function displayCommunityCards(cards, containerId) {
        var container = document.getElementById(containerId);

        // Clear the container first
        container.innerHTML = "";

        // Map card values to images and append to the container
        var cardsToDisplay;
        if (count === 1) {
            cardsToDisplay = cards.slice(0, 3);
        } else if (count === 2) {
            cardsToDisplay = cards.slice(0, 4);
        } else if (count === 3) {
            cardsToDisplay = cards.slice(0, 5);
        } else if (count === 0) {
            cardsToDisplay = cards.slice(0, 0)
        } else {
            cardsToDisplay = cards; // Default: display all cards
        }

        cardsToDisplay.forEach(function (card) {
            var img = document.createElement("img");
            img.src = masterCardDict[card];
            img.alt = card;
            img.width = 55;
            img.height = 70;
            container.appendChild(img);
        });
    }

    //TODO: ADD THIS FUNCTIONALITY
    function displayBotCards(cards, containerId) {
        var container = document.getElementById(containerId);

        // Clear the container first
        container.innerHTML = "";

        if (count === 5) {
            cards = botCards;
        }
        else {
            cards = backCards;
        }

        // Map card values to images and append to the container
        cards.forEach(function (card) {
            var img = document.createElement("img");
            img.src = masterCardDict[card];
            img.alt = card;
            img.width = 55;
            img.height = 70;
            container.appendChild(img);
        });
    }


    function displayCards(cards, containerId) {
        var container = document.getElementById(containerId);

        // Clear the container first
        container.innerHTML = "";

        // Map card values to images and append to the container
        cards.forEach(function (card) {
            var img = document.createElement("img");
            img.src = masterCardDict[card];
            img.alt = card;
            img.width = 55;
            img.height = 70;
            container.appendChild(img);
        });
    }

    // Call the displayCards function for myCards, botCards, and communityCards
    displayCards(myCards, "myCardsContainer");
    displayCards(botCards, "botCardsContainer");
    displayCommunityCards(communityCards, "communityCardsContainer");

    function getPokerOdds() {
        return 30;
    }

    function currentDifficulty() {
        const currentUrl = window.location.href;

        // Use the URLSearchParams API to parse the URL
        const urlParams = new URLSearchParams(currentUrl);

        // Get the value of the 'difficulty' parameter
        const difficulty = urlParams.get("difficulty");
        return difficulty;
    }

    function nextPart() {
        botOdds = getPokerOdds();
        var difficulty = currentDifficulty();

        if (difficulty == "easy") {
            console.log("70%");
        } else if (difficulty == "medium") {
            console.log("50%");
        } else if (difficulty == "easy") {
            console.log("30%");
        }
        count += 1;
        updateCount(count);

        //this reloads the whole page. change this so it goes faster in the future
        displayCommunityCards(communityCards, "communityCardsContainer");

    }

    function updateCount(count) {
            // Instantiate the object and open the AJAX request to our backend
            var ajax = new XMLHttpRequest();
            ajax.open("POST", "?command=updateCount", true);
            ajax.setRequestHeader("Content-Type", "application/json"); // Set the content type

            ajax.onreadystatechange = function () {
                if (ajax.readyState === 4) {
                    if (ajax.status === 200) {
                        console.log("Message submitted successfully");
                    } else {
                        console.error("Error submitting message:", ajax.status, ajax.statusText);
                    }
                }
            };
            var data = JSON.stringify({ count: count });

            ajax.send(data);
            console.log(count)
        }


        function confirmFold() {
        var isConfirmed = window.confirm("Are you sure you want to fold?"); // Show a confirmation dialog

        if (isConfirmed) {
            // Display the new game or go home form
            updateCount(5);
            displayCommunityCards(communityCards, "communityCardsContainer");
            document.getElementById("newGameForm").style.display = "block";
        }
    }

        function startNewGame() {
        // Add logic to start a new game here
        alert("Starting a new game!"); // You can replace this with your actual logic
        }

        function goHome() {
        // Add logic to go home here
        alert("Going home!"); // You can replace this with your actual logic
        window.location.href = '?command=homePage';
        }


</script>



</body>
</html>
