<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Justin Kaplan and Mihir Sangameswar" content="Project">
    <meta name="Bootstrap + Less" content="Homework 3"> 
    <link rel="stylesheet" href="../styles/main.css"> 
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
    body button{
        position: fixed;
        top: 10px;
        right: 10px;
    }
    .container{
        margin-left: 0px;
        display: flex;
        gap: 1.5rem;
    }

    .preflop, .flop{
        max-width: 200px;
        margin: 0;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label, input, select {
        margin-bottom: 5px;
    }

    input[type="submit"] {
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

    .preflop-info {
        margin-top: 20px;
    }
    .utg{
        width: 10%;
        margin: auto;
    }
    .utg1{
        width: 15%;
        margin: auto;
        text-align: left;
    }
    .utg2{
        width: 20%;
        margin: auto;
        text-align: left;
    }
    .mp{
        width: 15%;
        margin: auto;
        text-align: left;
    }
    .mp1{
        width: 10%;
        margin: auto;
    }
</style>
<body>
    <h1 class="add-hand">Add a Hand</h1>
    <button>
        <a href="?command=logout">Log out</a>
    </button>
    <div class="container">
        <section class="preflop">
            <h1>Preflop</h1>
            <form action="?command=addpreflop" method="post">
                <label for="blinds">Blinds</label>
                <select name="blinds" id="blinds">
                    <option value="1/2">1/2</option>
                    <option value="2/5">2/5</option>
                    <option value="5/10">5/10</option>
                    <option value="10/20">10/20</option>
                </select>
                <label for="hPosition">Hero Position</label>
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
                <label for="vPosition">Villain Position</label>
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
                <br>
                <label for="stack-size-hero">Hero Starting Stack</label>
                <input type="text" name="heroStack" pattern="[0-9]+" title="Enter hero stack size">
                <br>
                <label for="stack-size-villain">Villain Starting Stack</label>
                <input type="text" name="villainStack">
                <br>
                <label for="hero-hand">Enter Hero Hand:</label>
                <input type="text" name="heroHand" pattern="[A23456789TJQK][schd],[A23456789TJQK][schd]" title="enter your hand in the form Kd,Ts (King of Diamonds, Ten of spades)">
                <br>
                <label for="villain-hand">Enter Villain Hand:</label>
                <input type="text" name="villainHand" pattern="[A23456789TJQK][schd],[A23456789TJQK][schd]" title="enter your hand in the form Kd,Ts (King of Diamonds, Ten of spades)">
                <br>
                <input type="submit" value="Update">
            </form>
            </section>
            <!-- PRE FLOP ACTION -->
            <section class="flop">
                <h1>Pre Flop</h1>
                <form action="?command=preflop" method="post">
                <label for="preflopAction">First Action</label>
                <select name="preflopAction" id="preflopAction">
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <label for="preflopAction2">Second Action</label>
                <select name="preflopAction2" id="preflopAction2">
                    <option value="check2">Check</option>
                    <option value="bet2">Bet</option>
                    <option value="raise2">Raise</option>
                    <option value="fold2">Fold</option>
                </select>
                <label for="preflopAction3">Third Action</label>
                <select name="preflopAction3" id="preflopAction3">
                    <option value="check3">Check</option>
                    <option value="bet3">Bet</option>
                    <option value="raise3">Raise</option>
                    <option value="fold3">Fold</option>
                </select>
                <label for="preflopAction4">Fourth Action</label>
                <select name="preflopAction4" id="preflopAction4">
                    <option value="check4">Check</option>
                    <option value="bet4">Bet</option>
                    <option value="raise4">Raise</option>
                    <option value="fold4">Fold</option>
                </select>
                <input type="submit" value="Update">
                </form>
            </section>
            <!-- FLOP ACTION -->
            <section class="flop">
                <h1>Flop</h1>
                <form action="?command=addflop" method="post">
                <label for="flopAction">First Action</label>
                <select name="flopAction" id="flopAction">
                    <option value="check">Check</option>
                    <option value="bet">Bet</option>
                    <option value="raise">Raise</option>
                    <option value="fold">Fold</option>
                </select>
                <label for="flopAction2">Second Action</label>
                <select name="flopAction2" id="flopAction2">
                    <option value="check2">Check</option>
                    <option value="bet2">Bet</option>
                    <option value="raise2">Raise</option>
                    <option value="fold2">Fold</option>
                </select>
                <label for="flopAction3">Third Action</label>
                <select name="flopAction3" id="flopAction3">
                    <option value="check3">Check</option>
                    <option value="bet3">Bet</option>
                    <option value="raise3">Raise</option>
                    <option value="fold3">Fold</option>
                </select>
                <label for="flopAction4">Fourth Action</label>
                <select name="flopAction4" id="flopAction4">
                    <option value="check4">Check</option>
                    <option value="bet4">Bet</option>
                    <option value="raise4">Raise</option>
                    <option value="fold4">Fold</option>
                </select>
                <input type="submit" value="Update">
                </form>
            </section>
    </div>
    <br>
    <section>
        <?=$preflopMessage?>
        <?=$flopMessage?>
    </section>
</body>