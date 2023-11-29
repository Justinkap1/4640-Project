<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Justin Kaplan and Mihir Sangameswar" content="Project">
    <meta name="Bootstrap + Less" content="Homework 3"> 
    <link rel="stylesheet" href="../styles/main.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"  crossorigin="anonymous"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Bootstrap Starter HTML</title>  
</head>
<style>
        /* Add custom styles for labels */
        #myCardsLabel, #communityCardsLabel {
            font-size: 1.5rem; /* Adjust font size as needed */
            color: white;
        }
    </style>
<body>
    <!-- Nav Bar -->
    <div class="navbar">
        <a href="?command=homePage" class="nav-item">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Home</div>
        </a>
        <a href="?command=online" class="nav-item">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Chat</div>
        </a>
        <a href="?command=handhistories" class="nav-item">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Hand History</div>
        </a>
        <a href="?command=articles" class="nav-item">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Articles</div>
        </a> 
    </div>

    <!-- Computer Difficulty section -->

    <div class="container mt-5">
        <div class="row">
            <!-- Community Cards Form -->
            <div class="col-md-6">
                <form id="communityCardsForm">
                    <div class="mb-3">
                        <label for="communityCards" id="communityCardsLabel" class="form-label">Community Cards:</label>
                        <input type="text" class="form-control" id="communityCards" required>
                    </div>
                </form>
            </div>

            <!-- My Cards Form -->
            <div class="col-md-6">
                <form id="myCardsForm">
                    <div class="mb-3">
                        <label for="myCards" id="myCardsLabel" class="form-label">My Cards:</label>
                        <input type="text" class="form-control" id="myCards" required>
                    </div>
                </form>
            </div>
            <button type="button" class="btn btn-primary" onclick="fetchPokerOdds()">Fetch odds</button>
        </div>

        <!-- Table for Displaying Input -->
        <table class="table mt-3" id="textTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Your Cards</th>
                    <th scope="col">Community Cards</th>
                    <th scope="col">Probability of Winning</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows will be dynamically added here -->
            </tbody>
        </table>
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

<!-- Add this script inside the <script> tag in your HTML -->
<script>
    function validateCommunityCards(cards) {
        // Regular expression to match the pattern [A23456789TJQK][schd]
        var pattern = /^([A23456789TJQK][schd],){2}[A23456789TJQK][schd](,[A23456789TJQK][schd])?(,[A23456789TJQK][schd])?$/;
        return pattern.test(cards);
    }

    function validateMyCards(cards) {
        var pattern = /^[A23456789TJQK][schd],[A23456789TJQK][schd]$/;
        return pattern.test(cards);
    }

    function validateMyCards(cards) {
        var pattern = /^[A23456789TJQK][schd],[A23456789TJQK][schd]$/;
        return pattern.test(cards);
    }

    function checkDuplicates(str1, str2) {
        const array1 = str1.split(',');
        const array2 = str2.split(',');

        const mergedArray = array1.concat(array2);

        const uniqueCardsSet = new Set(mergedArray);

        if (uniqueCardsSet.size === mergedArray.length) {
            return true;
        } else {
            return false;
        }
    }

    function fetchPokerOdds() {
        var myTurn = '';
        var communityCards = document.getElementById('communityCards').value;
        var myCards = document.getElementById('myCards').value;

        // Validate the community cards input
        if (!validateCommunityCards(communityCards)) {
            alert('Invalid community cards input. Please enter a valid pattern. Should be at least 3 cards with capital suit, lowercase letter or number and no spaces and commas separating');
            return;
        }
        if (!validateMyCards(myCards)) {
            alert('Invalid community cards input. Please enter a valid pattern. Should be at least 2 cards with capital suit, lowercase letter or number and no spaces and commas separating.');
            return;
        }

        if (!checkDuplicates(myCards,communityCards)) {
            alert('No duplicates!');
            return;
        }

        var commaCount = (communityCards.match(/,/g) || []).length;

        if (commaCount === 2) {
            myTurn = 'flop';
            
            var communityCardsEncoded = communityCards.replace(/,/g, "%2C");
            var myCardsEncoded = myCards.replace(/,/g, "%2C");

            const settings = {
                async: true,
                crossDomain: true,
                url: `https://sf-api-on-demand-poker-odds-v1.p.rapidapi.com/${myTurn}?board=${communityCardsEncoded}&hole=${myCardsEncoded}`,
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': '61c4069754msh25bd1f69cf7d373p115fcbjsn7639a26ae3da',
                    'X-RapidAPI-Host': 'sf-api-on-demand-poker-odds-v1.p.rapidapi.com'
                }
            };

            $.ajax(settings).done(function (response) {
            // Extract probability from the response
            console.log(response)
            console.log(response.data)
            var probability = response.data.winning.average.probability;

            // Add community cards, my cards, and probability to the table
            addTextToTable(communityCards, myCards, probability);
        });
        } else if  (commaCount === 3) {
            myTurn = 'turn';
            var communityCardsEncoded = communityCards.replace(/,/g, "%2C");
            var myCards = document.getElementById('myCards').value;
            var myCardsEncoded = myCards.replace(/,/g, "%2C");

            const settings = {
                async: true,
                crossDomain: true,
                url: `https://sf-api-on-demand-poker-odds-v1.p.rapidapi.com/${myTurn}?board=${communityCardsEncoded}&hole=${myCardsEncoded}`,
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': '61c4069754msh25bd1f69cf7d373p115fcbjsn7639a26ae3da',
                    'X-RapidAPI-Host': 'sf-api-on-demand-poker-odds-v1.p.rapidapi.com'
                }
        };

            $.ajax(settings).done(function (response) {
                // Extract probability from the response
                console.log(response)
                console.log(response.data.winning.average.probability)
                var probability = response.data.winning.average.probability;

                // Add community cards, my cards, and probability to the table
                addTextToTable(communityCards, myCards, probability);
            });
        } else if (commaCount === 4) {
            myTurn = 'river';
            var communityCardsEncoded = communityCards.replace(/,/g, "%2C");
            var myCards = document.getElementById('myCards').value;
            var myCardsEncoded = myCards.replace(/,/g, "%2C");

            const settings = {
                async: true,
                crossDomain: true,
                url: `https://sf-api-on-demand-poker-odds-v1.p.rapidapi.com/${myTurn}?board=${communityCardsEncoded}&hole=${myCardsEncoded}`,
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': '61c4069754msh25bd1f69cf7d373p115fcbjsn7639a26ae3da',
                    'X-RapidAPI-Host': 'sf-api-on-demand-poker-odds-v1.p.rapidapi.com'
                }
            };

            $.ajax(settings).done(function (response) {
                // Extract probability from the response
                console.log(response)
                console.log(response.data)
                var probability = response.data.winning.probability;

                // Add community cards, my cards, and probability to the table
                addTextToTable(communityCards, myCards, probability);
            });
        }
    }

    function addTextToTable(communityCards, myCards, probability) {
        // Create a new row
        var row = document.createElement('tr');

        // Create cells for the row
        var cellIndex = document.createElement('td');
        cellIndex.textContent = document.getElementById('textTable').rows.length;

        var cellYourCards = document.createElement('td');
        cellYourCards.textContent = myCards;

        var cellCommunityCards = document.createElement('td');
        cellCommunityCards.textContent = communityCards;

        var cellProbability = document.createElement('td');
        cellProbability.textContent = probability;

        // Append cells to the row
        row.appendChild(cellIndex);
        row.appendChild(cellYourCards);
        row.appendChild(cellCommunityCards);
        row.appendChild(cellProbability);

        // Append the row to the table
        document.getElementById('textTable').getElementsByTagName('tbody')[0].appendChild(row);
    }
</script>

</body>
</html>
