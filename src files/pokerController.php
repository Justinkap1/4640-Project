<?php
include "Database.php";
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


    private $positionDict = array(
        "utg" => 0,
        "utg1" => 1,
        "utg2" => 2,
        "mp" => 3,
        "mp1" => 4,
        "co" => 5,
        "d" => 6,
        "sb" => 7,
        "bb" => 8 
    );

    private $postFlopPositionDict = array(
        "sb" => 0,
        "bb" => 1,
        "utg" => 2,
        "utg1" => 3,
        "utg2" => 4,
        "mp" => 5,
        "mp1" => 6,
        "co" => 7,
        "d" => 8
    );

    private $input = [];

    private $db;

    private $errorMessage = "";

    /**
     * Constructor
     */
    public function __construct($input) {
        session_start();
        $this->db = new Database();
        
        $this->input = $input;
    }

    public function run() {
        // Get the command
        $command = "welcome";
        if (isset($this->input["command"]))
            $command = $this->input["command"];

        // if (isset($_GET["command"]))
        //     $command = $_GET["command"];

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
            case "preflop":
                $this->preFlop();
                break;
            case "selecthand":
                $this->showSelectHand();
                break;
            case "logout":
                $this->logout();
            case "addturn":
                $this->addTurn();
                break;
            case "addriver":
                $this->addRiver();
                break;
            case "profile":
                $this->editProfile();
                break;
            case "ohno":
                $this->ohno();
                break;
            case "updateUserInfo":
                $this->updateUserInfo();
                break;
            default:
                $this->showWelcome();
                break;
        }
    }

    public function showWelcome(){
        include("/opt/src/Project/welcome.php");
    }

    public function updateUserInfo() {
        
        $res = $this->db->query("UPDATE users SET name = $1 WHERE id = $2", $_POST["name"], $_SESSION['id']);
        $_SESSION['name'] = $_POST["name"];
        header("Location: ?command=homePage");
    }

    public function editProfile(){
        $this->grabID($_SESSION["email"]);
        include("/opt/src/Project/profile.php");
    }

    public function ohno() {
        include("/opt/src/Project/ohno.php");
    }

    public function showHomePage() {
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/home.php");
    }

    public function login(){
        if(isset($_POST["name"]) && !empty($_POST["name"]) &&
        isset($_POST["email"]) && !empty($_POST["email"]) &&
        isset($_POST["password"]) && !empty($_POST["password"])) {

            // Check if user is in database
            $res = $this->db->query("select * from users where email = $1;", $_POST["email"]);

            if (empty($res)) {
                // User was not there, so insert them

                $this->db->query("insert into users (name, email, password) values ($1, $2, $3);",
                $_POST["name"], $_POST["email"],
                password_hash($_POST["password"], PASSWORD_DEFAULT));

                $_SESSION["name"] = $_POST["name"];
                $_SESSION["email"] = $_POST["email"];
                

                // Send user to the appropriate page (question)
                header("Location: ?command=homePage");
                return;
            } else {
                // User was in the database, verify password
                if (password_verify($_POST["password"], $res[0]["password"])) {
                    // Password was correct
                    $_SESSION["name"] = $res[0]["name"];
                    $_SESSION["email"] = $res[0]["email"];
                    header("Location: ?command=question");
                    return;
                } else {
                    $this->errorMessage = "Incorrect password.";
                }
            }
        } else {
            $this->errorMessage = "Name, email, and password are required.";
        }

        $this->ohno();
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
        $preflopActionMessage = $_SESSION['preflopActionMessage'];

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
        if ($_POST['vPosition'] == $_POST['hPosition']){
            $_SESSION['preflopMessage'] = "Give each person a different position!";
            $this->showAddHand($_SESSION['preflopMessage']);
        }
        else{
            $_SESSION['hero_stack'] = $_POST['heroStack'];
            $_SESSION['villain_stack'] = $_POST['villainStack'];
            $_SESSION['blinds'] = $_POST['blinds'];

            $split_blinds = explode("/", $_SESSION['blinds']);
            $_SESSION['big_blind'] = $split_blinds[1];
    
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

            $displayOrder = "
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

            $_SESSION['hero_stack_bb'] = $_SESSION['hero_stack']/$_SESSION['big_blind'];
            $_SESSION['villain_stack_bb'] = $_SESSION['villain_stack']/$_SESSION['big_blind'];
    
            //create message out of all information
            $_SESSION['preflopMessage'] = "
            <div class='stacks'>
                <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                <span>Blinds: $_SESSION[blinds]</span>
            </div>
            <br>
            $displayOrder
            ";
            $this->showAddHand();
        }
    }

    public function addFlop(){
        $_SESSION['flopFirstAction'] = $_POST['flopAction'];
        $_SESSION['flopSecondAction'] = $_POST['flopAction2'];
        $_SESSION['flopThirdAction'] = $_POST['flopAction3'];
        $_SESSION['flopFourthAction'] = $_POST['flopAction4'];

        $_SESSION['flopMessage'] = "
        $_SESSION[flopFirstAction]
        <br>
        $_SESSION[flopSecondAction]
        ";
        $this->showAddHand();
    }

    public function preFlop(){
        $_SESSION['preflopFirstAction'] = $_POST['preflopAction'];
        $_SESSION['preflopSecondAction'] = $_POST['preflopAction2'];
        $_SESSION['preflopThirdAction'] = $_POST['preflopAction3'];
        $_SESSION['preflopFourthAction'] = $_POST['preflopAction4'];

        $_SESSION['preflopActionMessage'] = "
        <div class='preflopAction'>
            $_SESSION[preflopFirstAction]
            <br>
            $_SESSION[preflopSecondAction]
            <br>
            $_SESSION[preflopThirdAction]
            <br>
            $_SESSION[preflopFourthAction]
        </div>
        ";
        $this->showAddHand();
    }
    public function addTurn(){

    }
    public function addRiver(){

    }

    public function grabID($email) {
        $res = $this->db->query("SELECT id FROM users WHERE email = $1;", $email);
        $_SESSION['id'] = $res[0]['id'];
        echo $_SESSION['id'];
        echo $_SESSION['name'];
    }

    public function logout(){
        session_destroy();

        session_start();
    }
}