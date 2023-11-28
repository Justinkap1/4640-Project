<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Justin Kaplan and Mihir Sangameswar" content="Project">
    <meta name="Bootstrap + Less" content="Homework 3"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"  crossorigin="anonymous"> 
    
    <title>Add a Hand</title>  
</head>
<style>
    body .add-hand{
        text-align: center;
        color: darkblue;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    .logout{
        position: fixed;
        top: 10px;
        right: 10px;
    }
    .container{
        display: flex;
        justify-content: center;
        gap: 1.5rem;
    }

    .gameStart-info, .preflop, .flop, .turn, .river{
        position: relative;
        max-width: 23%;
        height: 650px;
        margin: 0;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .flop select, .preflop select, input[type="text"]{
        max-width: 70px;
    }
    select{
        max-width: 80px;
    }
    form {
        display: flex;
        flex-direction: column;
    }

    label, input, select {
        margin-bottom: 5px;
    }
    input[type="submit"] {
        position: absolute;
        bottom: 0;
        width: 90%;
        background-color: #4CAF50;
        color: white;
        padding: 8px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .same-line{
        display: flex;
        gap: 5px;
    }
    .preflop-info {
        margin-top: 20px;
    }
    .game-info .stacks{
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 2rem;
    }
    .game-info .stacks span{
        border: 1px solid black;
        border-radius: 5%;
        padding: 10px;
        background-color: lightgray;
    }
    .table{
        display: flex;
        justify-content: center;
        gap: 5rem;
    }
    .table-image{
        display: flex;
        justify-content: space-between;
        width: 60%;
        height: 500px;
        margin: auto;
        background-image: url('projectAssets/table-display.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        position: relative;
    }
    .preflopAction{
        font-weight: bold; 
    }
    .table-text-container{
        display: flex;
    }
    .submit-db{
        position: fixed;
        bottom: 5px;
    }
</style>
<body>
    <h1 class="add-hand">Add a Hand</h1>
    <button class='logout'>
        <a href="?command=logout">Log out</a>
    </button>
    <div class="container">
        <section class="gameStart-info">
            <h1>Game Info</h1>
            <form action="?command=addpreflop" method="post">
                <label for="blinds">Blinds</label>
                <select name="blinds" id="blinds">
                    <option value="1/2">1/2</option>
                    <option value="2/5">2/5</option>
                    <option value="5/10">5/10</option>
                    <option value="10/20">10/20</option>
                </select>
                <label for="hPosition">H Position</label>
                <select name="hPosition" id="hPosition">
                    <option value="utg">UTG</option>
                    <option value="utg1">UTG+1</option>
                    <option value="utg2">UTG+2</option>
                    <option value="mp">MP</option>
                    <option value="mp1">MP+1</option>
                    <option value="co">CO</option>
                    <option value="d">Dealer</option>
                    <option value="sb">SB</option>
                    <option value="bb">BB</option>
                </select>
                <label for="vPosition">V Position</label>
                <select name="vPosition" id="vPosition">
                    <option value="utg">UTG</option>
                    <option value="utg1">UTG+1</option>
                    <option value="utg2">UTG+2</option>
                    <option value="mp">MP</option>
                    <option value="mp1">MP+1</option>
                    <option value="co">CO</option>
                    <option value="d">Dealer</option>
                    <option value="sb">SB</option>
                    <option value="bb">BB</option>
                </select>
                <label for="stack-size-hero">H Stack</label>
                <input type="text" name="heroStack" pattern="[0-9]+" title="Enter hero stack size">
                <label for="stack-size-villain">V Stack</label>
                <input type="text" name="villainStack">
                <label for="hero-hand">Hero Hand:</label>
                <input type="text" name="heroHand" pattern="[A23456789TJQK][schd],[A23456789TJQK][schd]" title="enter your hand in the form Kd,Ts (King of Diamonds, Ten of spades)">
                <label for="villain-hand">Villain Hand:</label>
                <input type="text" name="villainHand" pattern="[A23456789TJQK][schd],[A23456789TJQK][schd]" title="enter your hand in the form Kd,Ts (King of Diamonds, Ten of spades)">
                <input type="submit" value="Update">
            </form>
            </section>
            <!-- PRE FLOP ACTION -->
            <section class="preflop">
                <h1>Pre Flop</h1>
                <form action="?command=preflop" method="post">
                <div class='same-line'>
                    <label for="preflopAction">Action: </label>
                    <select name="preflopAction" id="preflopAction">
                        <option value="call">Call</option>
                        <option value="check">Check</option>
                        <option value="bet">Bet</option>
                        <option value="raise">Raise</option>
                        <option value="fold">Fold</option>
                    </select>
                    <p>Amount: </p>
                    <input type="text" name="betAmount">
                </div>
                <div class='same-line'>
                <label for="preflopAction2">Action: </label>
                <select name="preflopAction2" id="preflopAction2">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmount2">
                </div>
                <div class='same-line'>
                <label for="preflopAction3">Action: </label>
                <select name="preflopAction3" id="preflopAction3">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmount3">
                </div>
                <div class='same-line'>
                <label for="preflopAction4">Action: </label>
                <select name="preflopAction4" id="preflopAction4">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmount4">
                </div>
                <input type="submit" value="Update">
                <input type="hidden" value="<?php echo $_SESSION['blinds']; ?>" name="blindss">
                </form>
            </section>
            <!-- FLOP ACTION -->
            <section class="flop">
                <h1>Flop</h1>
                <form action="?command=addflop" method="post">
                <label for="flop-cards">Enter 3 Flop Cards:</label>
                <input type="text" name="flopCards" pattern="[A23456789TJQK][schd],[A23456789TJQK][schd],[A23456789TJQK][schd]" title="enter the cards in the form Kd,Ts (King of Diamonds, Ten of spades)">
                <br>
                <div class='same-line'>
                <label for="flopAction">Action: </label>
                <select name="flopAction" id="flopAction">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountFlop">
                </div>
                <div class='same-line'>
                <label for="flopAction2">Action: </label>
                <select name="flopAction2" id="flopAction2">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountFlop2">
                </div>
                <div class='same-line'>
                <label for="flopAction3">Action: </label>
                <select name="flopAction3" id="flopAction3">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountFlop3">
                </div>
                <div class='same-line'>
                <label for="flopAction4">Action: </label>
                <select name="flopAction4" id="flopAction4">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountFlop4">
                </div>
                <input type="submit" value="Update">
                </form>
            </section>
            <!-- TURN ACTION -->
            <section class="turn">
                <h1>Turn</h1>
                <form action="?command=addturn" method="post">
                <label for="turn-card">Enter Turn Card:</label>
                <input type="text" name="turnCard" pattern="[A23456789TJQK][schd]" title="enter the cards in the form Kd,Ts (King of Diamonds, Ten of spades)">
                <br>
                <div class='same-line'>
                <label for="turnAction">Action: </label>
                <select name="turnAction" id="turnAction">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountTurn">
                </div>
                <div class='same-line'>
                <label for="turnAction2">Action: </label>
                <select name="turnAction2" id="turnAction2">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountTurn2">
                </div>
                <div class='same-line'>
                <label for="turnAction3">Action: </label>
                <select name="turnAction3" id="turnAction3">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountTurn3">
                </div>
                <div class='same-line'>
                <label for="turnAction4">Action: </label>
                <select name="turnAction4" id="turnAction4">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountTurn4">
                </div>
                <input type="submit" value="Update">
                </form>
            </section>
            <!--RIVER ACTION -->
            <section class="river">
                <h1>River</h1>
                <form action="?command=addriver" method="post">
                <label for="river-card">Enter River Card:</label>
                <input type="text" name="riverCard" pattern="[A23456789TJQK][schd]" title="enter the cards in the form Kd,Ts (King of Diamonds, Ten of spades)">
                <br>
                <div class='same-line'>
                <label for="riverAction">Action: </label>
                <select name="riverAction" id="riverAction">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountRiver">
                </div>
                <div class='same-line'>
                <label for="riverAction2">Action: </label>
                <select name="riverAction2" id="riverAction2">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountRiver2">
                </div>
                <div class='same-line'>
                <label for="riverAction3">Action: </label>
                <select name="riverAction3" id="riverAction3">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountRiver3">
                </div>
                <div class='same-line'>
                <label for="riverAction4">Action: </label>
                <select name="riverAction4" id="riverAction4">
                    <option value="call">Call</option>
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <p>Amount: </p>
                <input type="text" name="betAmountRiver4">
                </div>
                <input type="submit" value="Update">
                </form>
            </section>
    </div>
    <br>
    <section class="game-info">
        <?=$preflopMessage?>
    </section>
    <div class='table-text-container'>
    <section class='console'>
        <?=$preflopActionMessage?>
    </section>
    <section class="table-image">
    </section>
    </div>
    <button class="submit-db">
        <a href="?command=addHH">Submit to DB</a>
    </button>
</body>