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
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Home</div>
        </a>
        <a href="?command=alone" class="nav-item">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Play Online</div>
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
    <div style="text-align:center;">
        <div>
            <h1 style="color:white"> Choose a Computer Difficulty </h1>
        </div>

        <div style="display: flex; justify-content:center; align-items:center; height: 80vh;">
            <easy>
                <div class="poker-chip">
                    <img src="/projectAssets/chippy.png" alt="chip">
                </div>
                <h2 style="color:white">
                    Easy
                </h2>
            </easy>
            <medium>
                <div class="poker-chip">
                    <img src="/projectAssets/agent-chess.png" alt="chip">
                </div>
                <h2 style="color:white">
                    Medium
                </h2>
            </medium>
            <hard>
                <div class="poker-chip">
                    <img src="/projectAssets/skyweb.png" alt="chip">
                </div>
                <h2 style="color:white">
                    Hard
                </h2>
            </hard>
        </div>
    </div>

    <div class="modal fade" id="buyInModal" tabindex="-1" role="dialog" aria-labelledby="buyInModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="buyInModalLabel">Enter Buy-in Amount</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="buyInForm" onsubmit="submitForm(); return false;">
                    <!-- Use pattern attribute to accept positive whole numbers only -->
                    <input type="text" pattern="^[1-9]\d*$" placeholder="Enter Buy-in Amount" required id="buyInAmount" title="Enter a positive whole number">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function showBuyInForm(difficulty) {
                var buyInModal = new bootstrap.Modal(document.getElementById('buyInModal'));
                buyInModal.show();
                document.getElementById('buyInForm').setAttribute('data-difficulty', difficulty);
            }

            window.submitForm = function () {
                var buyInAmount = document.getElementById('buyInAmount').value;
                var difficulty = document.getElementById('buyInForm').getAttribute('data-difficulty');

                console.log('Buy-in Amount:', buyInAmount);
                console.log('Difficulty:', difficulty);
                window.location.href = '?command=startGame&difficulty=' + difficulty+'&buyIn=' + buyInAmount;

                var buyInModal = new bootstrap.Modal(document.getElementById('buyInModal'));
                buyInModal.hide();
            };
            document.querySelector('easy').addEventListener('click', function () {
                showBuyInForm('easy');
            });
            document.querySelector('medium').addEventListener('click', function () {
                showBuyInForm('medium');
            });
            document.querySelector('hard').addEventListener('click', function () {
                showBuyInForm('hard');
            });
        });
    </script>
</body>
</html>
