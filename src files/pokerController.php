<?php

class pokerController {
    private $cardDict = array(
        "Ah" => "<img src='../projectAssets/ace_of_hearts.png' alt='Ace of Hearts' width='55' height='70'>",
        "Ad" => "<img src='../projectAssets/ace_of_diamonds.png' alt='Ace of Diamonds' width='55' height='70'>",
        "As" => "<img src='../projectAssets/ace_of_spades.png' alt='Ace of Spades' width='55' height='70'>",
        "Ac" => "<img src='../projectAssets/ace_of_clubs.png' alt='Ace of Clubs' width='55' height='70'>",
        "Kh" => "<img src='../projectAssets/king_of_hearts.png' alt='King of Hearts' width='55' height='70'>",
        "Kd" => "<img src='../projectAssets/king_of_diamonds.png' alt='King of Diamonds' width='55' height='70'>",
        "Ks" => "<img src='../projectAssets/king_of_spades.png' alt='King of Spades' width='55' height='70'>",
        "Kc" => "<img src='../projectAssets/king_of_clubs.png' alt='King of Clubs' width='55' height='70'>",
        "Qh" => "<img src='../projectAssets/queen_of_hearts.png' alt='Queen of Hearts' width='55' height='70'>",
        "Qd" => "<img src='../projectAssets/queen_of_diamonds.png' alt='Queen of Diamonds' width='55' height='70'>",
        "Qs" => "<img src='../projectAssets/queen_of_spades.png' alt='Queen of Spades' width='55' height='70'>",
        "Qc" => "<img src='../projectAssets/queen_of_clubs.png' alt='Queen of Clubs' width='55' height='70'>",
        "Jh" => "<img src='../projectAssets/jack_of_hearts.png' alt='Jack of Hearts' width='55' height='70'>",
        "Jd" => "<img src='../projectAssets/jack_of_diamonds.png' alt='Jack of Diamonds' width='55' height='70'>",
        "Js" => "<img src='../projectAssets/jack_of_spades.png' alt='Jack of Spades' width='55' height='70'>",
        "Jc" => "<img src='../projectAssets/jack_of_clubs.png' alt='Jack of Clubs' width='55' height='70'>",
        "Th" => "<img src='../projectAssets/10_of_hearts.png' alt='10 of Hearts' width='55' height='70'>",
        "Td" => "<img src='../projectAssets/10_of_diamonds.png' alt='10 of Diamonds' width='55' height='70'>",
        "Ts" => "<img src='../projectAssets/10_of_spades.png' alt='10 of Spades' width='55' height='70'>",
        "Tc" => "<img src='../projectAssets/10_of_clubs.png' alt='10 of Clubs' width='55' height='70'>",
        "9h" => "<img src='../projectAssets/9_of_hearts.png' alt='9 of Hearts' width='55' height='70'>",
        "9d" => "<img src='../projectAssets/9_of_diamonds.png' alt='9 of Diamonds' width='55' height='70'>",
        "9s" => "<img src='../projectAssets/9_of_spades.png' alt='9 of Spades' width='55' height='70'>",
        "9c" => "<img src='../projectAssets/9_of_clubs.png' alt='9 of Clubs' width='55' height='70'>",
        "8h" => "<img src='../projectAssets/8_of_hearts.png' alt='8 of Hearts' width='55' height='70'>",
        "8d" => "<img src='../projectAssets/8_of_diamonds.png' alt='8 of Diamonds' width='55' height='70'>",
        "8s" => "<img src='../projectAssets/8_of_spades.png' alt='8 of Spades' width='55' height='70'>",
        "8c" => "<img src='../projectAssets/8_of_clubs.png' alt='8 of Clubs' width='55' height='70'>",
        "7h" => "<img src='../projectAssets/7_of_hearts.png' alt='7 of Hearts' width='55' height='70'>",
        "7d" => "<img src='../projectAssets/7_of_diamonds.png' alt='7 of Diamonds' width='55' height='70'>",
        "7s" => "<img src='../projectAssets/7_of_spades.png' alt='7 of Spades' width='55' height='70'>",
        "7c" => "<img src='../projectAssets/7_of_clubs.png' alt='7 of Clubs' width='55' height='70'>",
        "6h" => "<img src='../projectAssets/6_of_hearts.png' alt='6 of Hearts' width='55' height='70'>",
        "6d" => "<img src='../projectAssets/6_of_diamonds.png' alt='6 of Diamonds' width='55' height='70'>",
        "6s" => "<img src='../projectAssets/6_of_spades.png' alt='6 of Spades' width='55' height='70'>",
        "6c" => "<img src='../projectAssets/6_of_clubs.png' alt='6 of Clubs' width='55' height='70'>",
        "5h" => "<img src='../projectAssets/5_of_hearts.png' alt='5 of Hearts' width='55' height='70'>",
        "5d" => "<img src='../projectAssets/5_of_diamonds.png' alt='5 of Diamonds' width='55' height='70'>",
        "5s" => "<img src='../projectAssets/5_of_spades.png' alt='5 of Spades' width='55' height='70'>",
        "5c" => "<img src='../projectAssets/5_of_clubs.png' alt='5 of Clubs' width='55' height='70'>",
        "4h" => "<img src='../projectAssets/4_of_hearts.png' alt='4 of Hearts' width='55' height='70'>",
        "4d" => "<img src='../projectAssets/4_of_diamonds.png' alt='4 of Diamonds' width='55' height='70'>",
        "4s" => "<img src='../projectAssets/4_of_spades.png' alt='4 of Spades' width='55' height='70'>",
        "4c" => "<img src='../projectAssets/4_of_clubs.png' alt='4 of Clubs' width='55' height='70'>",
        "3h" => "<img src='../projectAssets/3_of_hearts.png' alt='3 of Hearts' width='55' height='70'>",
        "3d" => "<img src='../projectAssets/3_of_diamonds.png' alt='3 of Diamonds' width='55' height='70'>",
        "3s" => "<img src='../projectAssets/3_of_spades.png' alt='3 of Spades' width='55' height='70'>",
        "3c" => "<img src='../projectAssets/3_of_clubs.png' alt='3 of Clubs' width='55' height='70'>",
        "2h" => "<img src='../projectAssets/2_of_hearts.png' alt='2 of Hearts' width='55' height='70'>",
        "2d" => "<img src='../projectAssets/2_of_diamonds.png' alt='2 of Diamonds' width='55' height='70'>",
        "2s" => "<img src='../projectAssets/2_of_spades.png' alt='2 of Spades' width='55' height='70'>",
        "2c" => "<img src='../projectAssets/2_of_clubs.png' alt='2 of Clubs' width='55' height='70'>"
    );

    private $input = [];

    private $db;

    private $errorMessage = "";

    /**
     * Constructor
     */
    public function __construct($input) {
        session_start();
        //$this->db = new Database();
       // $_SESSION['flopMessage'] = '';
       // $_SESSION['preflopMessage'] = '';
        
        $this->input = $input;
    }

    public function run() {
        // Get the command
        $command = "welcome";
        if (isset($this->input["command"]))
            $command = $this->input["command"];

        switch($command) {
            case "login":
                $this->login();
            case "homePage":
                $this->showHomePage();
                break;
            case "alone":
                $this->showAlone();
                break;
            case "online":
                $this->showOnline();
                break;
            case "articles":
                $this->showArticles();
                break;
            case "handhistories":
                $this->showHandHistories();
                break;
            case "addhand":
                $this->showAddHand();
                break;
            case "addpreflop":
                $this->addPreflop();
                break;
            case "addflop":
                $this->addFlop();
                break;
            case "selecthand":
                $this->showSelectHand();
                break;
            case "logout":
                $this->logout();
            default:
                $this->showWelcome();
                break;
        }
    }

    public function showWelcome(){
        include("/opt/src/Project/welcome.php");
    }

    public function showHomePage() {
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/home.php");
    }

    public function login(){
        if(isset($_POST["username"])) {
            $_SESSION["name"] = $_POST["username"];
        }

        if(isset($_POST["email"])) {
            $_SESSION["email"] = $_POST["email"];
        }
        header("Location: ?command=homePage");
    }
    
    public function showAlone(){
        include("/opt/src/Project/alone.php");
    }
    
    public function showOnline(){
        include("/opt/src/Project/online.php");
    }

    public function showArticles(){
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/articles.php");
    }

    public function showHandHistories(){
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/handhistories.php");
    }

    public function showAddHand(){
        $preflopMessage = $_SESSION['preflopMessage'];
        $flopMessage = $_SESSION['flopMessage'];
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/addHand.php");
    }

    public function showSelectHand(){
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/selectHand.php");
    }

    public function addPreflop(){
        if (($_POST['heroStack'] == "") || ($_POST['villainStack'] == "") || ($_POST['heroHand'] == "") || ($_POST['villainHand'] == "")){
            $_SESSION['preflopMessage'] = "Please fill out all forms!";
            $this->showAddHand($_SESSION['preflopMessage']);
        }
        else{
            $_SESSION['hero_stack'] = $_POST['heroStack'];
            $_SESSION['villain_stack'] = $_POST['villainStack'];
            $_SESSION['blinds'] = $_POST['blinds'];
    
            //split hero's hand into the two by the comma
            $_SESSION['heroHand'] = $_POST['heroHand'];
            $_SESSION['heroHandSplit'] = explode(",", $_SESSION['heroHand']);
            $_SESSION['heroFirstCard'] = $this->cardDict[$_SESSION['heroHandSplit'][0]];
            $_SESSION['heroSecondCard'] = $this->cardDict[$_SESSION['heroHandSplit'][1]];
    
            //same with villain hand
            $_SESSION['villainHand'] = $_POST['villainHand'];
            $_SESSION['villainHandSplit'] = explode(",", $_SESSION['villainHand']);
            $_SESSION['villainFirstCard'] = $this->cardDict[$_SESSION['villainHandSplit'][0]];
            $_SESSION['villainSecondCard'] = $this->cardDict[$_SESSION['villainHandSplit'][1]];
    
            //hero hand position
            $_SESSION['hPosition'] = $_POST['hPosition'];
    
            //villain hand position
            $_SESSION['vPosition'] = $_POST['vPosition'];
    
            //create message out of all information
            $_SESSION['preflopMessage'] = "
            <div class='stacks'>
                <span>Hero Stack: $_SESSION[hero_stack]</span> <br> 
                <span>Villain Stack: $_SESSION[villain_stack]</span> <br> 
                <span>Blinds: $_SESSION[blinds]</span>
            </div>
            <br>
            <div class='table'>
                <div class='$_SESSION[hPosition]'>
                    Hero Hand: <br>
                    $_SESSION[heroFirstCard]
                    $_SESSION[heroSecondCard] 
                    <br>
                    $_SESSION[hPosition]
                </div>
                <br>
                <div class='$_SESSION[vPosition]'>
                    Villain Hand: <br>
                    $_SESSION[villainFirstCard]
                    $_SESSION[villainSecondCard]
                    <br>
                    $_SESSION[vPosition]
                </div>
            </div>
            ";
            $this->showAddHand();
        }
    }

    public function addFlop(){
        $_SESSION['flopFirstAction'] = $_POST['flopAction'];
        $_SESSION['flopSecondAction'] = $_POST['flopAction2'];

        $_SESSION['flopMessage'] = "
        $_SESSION[flopFirstAction]
        <br>
        $_SESSION[flopSecondAction]
        ";
        $this->showAddHand();
    }

    public function logout(){
        session_destroy();

        session_start();
    }
}