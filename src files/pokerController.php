<?php

date_default_timezone_set('America/New_York');
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

    private $backCards = array(
        "BackCard1" => "<img src='../projectAssets/backCard.png' alt='Back of Car' width='55' height='70'>",
        "BackCard1" => "<img src='../projectAssets/backCard.png' alt='Back of Car' width='55' height='70'>"
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
    private $currentTime;

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
                $this->preFlopAction();
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
            case "addHH":
                $this->submitDB();
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
            case "searchFriend":
                $this->searchFriend();
                break;
            case "testAjax":
                $this->testAjax();
                break;
            case "chat":
                $this->chat();
                break;
            case "submitMsg":
                $this->submitMsg();
                break;
            case "fetchConvos":
                $this->fetchConvos();
                break;
            case "startGame":
                $this->setUpPoker();
                break;
            case "updateCount":
                $this->updateCount();
                break;
            default:
                $this->showWelcome();
                break;
        }
    }

    public function updateUserInfo() {
        
        $res = $this->db->query("UPDATE users SET name = $1 WHERE email = $2", $_POST["name"], $_SESSION['email']);

        // update in hands db
        $res = $this->db->query("select * from hands where email = $1;", $_SESSION["email"]);
        if(!empty($res)) {
            $res = $this->db->query("UPDATE hands SET name = $1 WHERE email = $2", $_POST["name"], $_SESSION['email']);
        }

        //update in friends db
        $res = $this->db->query("select * from friends where email = $1;", $_SESSION["email"]);
        if(!empty($res)) {
            $res = $this->db->query("UPDATE friends SET name = $1 WHERE email = $2", $_POST["name"], $_SESSION['email']);
        }

        $_SESSION['name'] = $_POST["name"];
        header("Location: ?command=homePage");
    }

    public function editProfile(){
        $this->grabID($_SESSION["email"]);
        // include("/students/jrk5ak/students/jrk5ak/Project/profile.php");
        include("/opt/src/Project/profile.php");
    }

    public function ohno() {
        // include("/students/jrk5ak/students/jrk5ak/Project/ohno.php");
        include("/opt/src/Project/ohno.php");
    }

    public function chat() {
        // include("/students/jrk5ak/students/jrk5ak/Project/chat.php");
        $_SESSION['friendName'] = ($_GET['friend']);
        $this->getEmail($_SESSION["friendName"]);
        include("/opt/src/Project/chat.php");
    }

    public function showWelcome(){
        $message .= "<p class='alert alert-danger'>".$_SESSION['errorMessage']."</p>";
        // include("/students/jrk5ak/students/jrk5ak/Project/welcome.php");
        include("/opt/src/Project/welcome.php");
    }

    public function showHomePage() {
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/home.php");
        // include("/students/jrk5ak/students/jrk5ak/Project/home.php");
        
    }

    public function grabID($email) {
        $res = $this->db->query("SELECT id FROM users WHERE email = $1;", $email);
        $_SESSION['id'] = $res[0]['id'];
        //echo $_SESSION['id'];
        //echo $_SESSION['name'];
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
                if (password_verify($_POST["password"], $res[0]["password"]) && $_POST["name"] === $res[0]["name"]) {
                    // Password was correct
                    $_SESSION["name"] = $res[0]["name"];
                    $_SESSION["email"] = $res[0]["email"];
                    header("Location: ?command=homePage");
                    return;
                } else {
                    $_SESSION['errorMessage'] = "Incorrect password.";
                    header("Location: ?command=welcome");
                }
            }
        } else {
            $_SESSION['errorMessage'] = "Name, email, and password are required.";
        }

        $this->ohno();
    }
    
    public function showAlone(){
        // include("/students/jrk5ak/students/jrk5ak/Project/alone.php");
        include("/opt/src/Project/alone.php");
    }
    
    public function showOnline(){
        // include("/students/jrk5ak/students/jrk5ak/Project/online.php");

        $_SESSION['friends']= $this->db->query("SELECT * FROM friends WHERE email = $1;",
        $_SESSION['email']);

        print_r($_SESSION['friends']);

        include("/opt/src/Project/online.php");
    }

    public function showArticles(){
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/articles.php");
        // include("/students/jrk5ak/students/jrk5ak/Project/articles.php");
    }

    public function showHandHistories(){
        // print_r($_SESSION['myJSON']);
        // print_r($_SESSION['preflopActionMessage']);
        // echo "hello world";
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/handhistories.php");
        // include("/students/jrk5ak/students/jrk5ak/Project/handhistories.php");
    }

    public function showAddHand(){
        if (isset($_SESSION['preflopMessage'])){
        $preflopMessage = $_SESSION['preflopMessage'];
        }
        else{
            $preflopMessage = "";
        }
        if (isset($_SESSION['flopMessage'])){
        $flopMessage = $_SESSION['flopMessage'];
        }
        else{
            $flopMessage = "";
        }
        if (isset($_SESSION['preflopActionMessage'])){
        $preflopActionMessage = $_SESSION['preflopActionMessage'];
        }
        else{
            $preflopActionMessage = "";
        }

        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        // include("/students/jrk5ak/students/jrk5ak/Project/addHand.php");
        include("/opt/src/Project/addHand.php");
    }

    public function showSelectHand(){
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        $this->getHands();
        // include("/students/jrk5ak/students/jrk5ak/Project/selectHand.php");
        include("/opt/src/Project/selectHand.php");
    }

    //Display stacks, blinds, and cards
    public function addPreflop(){
        if (($_POST['heroStack'] == "") || ($_POST['villainStack'] == "") || ($_POST['heroHand'] == "") || ($_POST['villainHand'] == "")){
            $_SESSION['preflopMessage'] = "Please fill out all forms!";
            $this->showAddHand();
        }
        else if ($_POST['vPosition'] == $_POST['hPosition']){
            $_SESSION['preflopMessage'] = "Give each person a different position!";
            $this->showAddHand();
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

            $_SESSION['hero_stack_bb'] = $_SESSION['hero_stack']/$_SESSION['big_blind'];
            $_SESSION['villain_stack_bb'] = $_SESSION['villain_stack']/$_SESSION['big_blind'];
    
            //create message out of all information
            $_SESSION['currentStacks'] = "
              <div class='stacks'>
                <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                <span>Blinds: $_SESSION[blinds]</span>
            </div>
            <br>
            ";
            $_SESSION['currentHands'] = "
            <div class='table'>
                <div class='first'>
                    Hero Hand: <br>
                    $_SESSION[heroFirstCard]
                    $_SESSION[heroSecondCard] 
                    <br>
                    $_SESSION[hPosition]
                </div>
                <br>
                <div class='second'>
                    Villain Hand: <br>
                    $_SESSION[villainFirstCard]
                    $_SESSION[villainSecondCard]
                    <br>
                    $_SESSION[vPosition]
                </div>
            </div>
            ";
            $_SESSION['preflopMessage'] = "
            $_SESSION[currentStacks]
            $_SESSION[currentHands]
            ";
            $this->showAddHand();
        }
    }

    //Displays the preflop action for up to 4 actions
    public function preFlopAction(){

        //set actions from selected checkboxes to variables
        $_SESSION['blinds'] = $_POST['blindss'];
        $preflopFirstAction = $_POST['preflopAction'];
        $preflopSecondAction = $_POST['preflopAction2'];
        $preflopThirdAction = $_POST['preflopAction3'];
        $preflopFourthAction = $_POST['preflopAction4'];

        //set amounts with those given actions
        $firstAmount = $_POST['betAmount'];
        $secondAmount = $_POST['betAmount2'];
        $thirdAmount = $_POST['betAmount3'];
        $fourthAmount = $_POST['betAmount4'];


        //error checking before everything so it does not have to be embedded into the massive if statement below
        if ($firstAmount !== "" && ($preflopFirstAction === 'fold' || $preflopFirstAction === 'call' || $preflopFirstAction === 'check')){
            $_SESSION['preflopActionMessage'] = "Make sure you are inputting numbers only when you bet or raise!";
            $this->showAddHand();
            exit();
        }
        if ($secondAmount !== "" && ($preflopSecondAction === 'fold' || $preflopSecondAction === 'call' || $preflopSecondAction === 'check')){
            $_SESSION['preflopActionMessage'] = "Make sure you are inputting numbers only when you bet or raise!";
            $this->showAddHand();
            exit();
        }
        if ($thirdAmount !== "" && ($preflopThirdAction === 'fold' || $preflopThirdAction === 'call' || $preflopThirdAction === 'check')){
            $_SESSION['preflopActionMessage'] = "Make sure you are inputting numbers only when you bet or raise!";
            $this->showAddHand();
            exit();
        }
        if ($fourthAmount !== "" && ($preflopFourthAction === 'fold' || $preflopFourthAction === 'call' || $preflopFourthAction === 'check')){
            $_SESSION['preflopActionMessage'] = "Make sure you are inputting numbers only when you bet or raise!";
            $this->showAddHand();
            exit();
        }
        if ($firstAmount === "" && ($preflopFirstAction === 'bet' || $preflopFirstAction === 'raise')){
            $_SESSION['preflopActionMessage'] = "Make sure you are inputting numbers when you bet or raise!";
            $this->showAddHand();
            exit();
        }
        if ($secondAmount === "" && ($preflopSecondAction === 'bet' || $preflopSecondAction === 'raise')){
            $_SESSION['preflopActionMessage'] = "Make sure you are inputting numbers when you bet or raise!";
            $this->showAddHand();
            exit();
        }
        if ($thirdAmount === "" && ($preflopThirdAction === 'bet' || $preflopThirdAction === 'raise')){
            $_SESSION['preflopActionMessage'] = "Make sure you are inputting numbers when you bet or raise!";
            $this->showAddHand();
            exit();
        }
        if ($fourthAmount === "" && ($preflopFourthAction === 'bet' || $preflopFourthAction === 'raise')){
            $_SESSION['preflopActionMessage'] = "Make sure you are inputting numbers when you bet or raise!";
            $this->showAddHand();
            exit();
        }

        //check if BB preflop
        if ($_SESSION['vPosition'] == "bb"){
            $vBB = true;
        }
        else{
            $vBB = false;
        }
        if ($_SESSION['hPosition'] == "bb"){
            $hBB = true;
        }
        else{
            $hBB = false;
        }

        //check positions for who goes first preflop
        if ($this->positionDict[$_SESSION['hPosition']] < $this->positionDict[$_SESSION['vPosition']]){
            $heroPreFirst = true;
        }
        else{
            $heroPreFirst = false;
        }

        //IF HERO IS FIRST
        if ($heroPreFirst === true){
            if ($firstAmount > $_SESSION['hero_stack'] || $secondAmount > $_SESSION['villain_stack'] || $thirdAmount > $_SESSION['hero_stack'] || $fourthAmount > $_SESSION['villain_stack']){
                $_SESSION['preflopActionMessage'] = "You cannot check bet/raise more than you have!";
                $this->showAddHand();
                exit();
            }
            //--First action CHECK lines established above--
            //all first action CHECK lines established
            if ($preflopFirstAction === "check"){
                $_SESSION['preflopActionMessage'] = "You cannot check preflop unless you are in the big blind!";
            }
            //First action FOLD lines established
            if ($preflopFirstAction === "fold"){
                $_SESSION['preflopActionMessage'] = "
                <div class='preflopAction'>
                Hero ($_SESSION[hPosition]): folds
                <br>
                Villain ($_SESSION[vPosition]): wins with $_SESSION[villainFirstCard] $_SESSION[villainSecondCard]
                </div>
                ";
            }
            //all first action CALL lines established
            if ($preflopFirstAction === 'call'){
                if ($preflopSecondAction === 'bet'){
                    $_SESSION['preflopActionMessage'] = "You can only raise, fold, or call preflop!";
                }
                if ($vBB && $preflopSecondAction === 'check'){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Hero ($_SESSION[hPosition]): calls $_SESSION[big_blind]
                    <br>
                    Villain ($_SESSION[vPosition]): checks BB
                    </div>
                    ";
                    $_SESSION['hero_stack'] -= $_SESSION['big_blind'];
                    $_SESSION['villain_stack'] -= $_SESSION['big_blind'];
                    $_SESSION['preflopMessage'] = "
                    <div class='stacks'>
                        <span>Hero Stack: $_SESSION[hero_stack] </span> <br> 
                        <span>Villain Stack: $_SESSION[villain_stack] </span> <br> 
                        <span>Blinds: $_SESSION[blinds]</span>
                    </div>
                    <br>
                    $_SESSION[currentHands]
                    ";
                }
                if ($vBB === false && $preflopSecondAction === 'check'){
                    $_SESSION['preflopActionMessage'] = "You can't check if you're not in the big blind!";
                }
                if ($vBB === false && $preflopSecondAction === 'call'){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Hero ($_SESSION[hPosition]): calls $_SESSION[big_blind]
                    <br>
                    Villain ($_SESSION[vPosition]): calls $_SESSION[big_blind]
                    </div>
                    ";
                    $_SESSION['hero_stack'] -= $_SESSION['big_blind'];
                    $_SESSION['villain_stack'] -= $_SESSION['big_blind'];
                    $_SESSION['preflopMessage'] = "
                    <div class='stacks'>
                        <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                        <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                        <span>Blinds: $_SESSION[blinds]</span>
                    </div>
                    <br>
                    $_SESSION[currentHands]
                    ";
                }
                if ($vBB === true && $preflopSecondAction === 'call'){
                    $_SESSION['preflopActionMessage'] = "You have to check in the big blind!";
                }
                if ($preflopSecondAction === 'fold'){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Hero ($_SESSION[hPosition]): calls $_SESSION[big_blind]
                    <br>
                    Villain ($_SESSION[vPosition]): folds
                    <br>
                    Hero ($_SESSION[hPosition]): wins with $_SESSION[heroFirstCard] $_SESSION[heroSecondCard]
                    </div>
                    ";
                }
                if ($preflopSecondAction === 'raise'){
                    if ($preflopThirdAction === 'fold'){
                        $_SESSION['preflopActionMessage'] = "
                        <div class='preflopAction'>
                        Hero ($_SESSION[hPosition]): calls $_SESSION[big_blind]
                        <br>
                        Villain ($_SESSION[vPosition]): raises to $secondAmount
                        <br>
                        Hero ($_SESSION[hPosition]): folds
                        <br>
                        Villain wins $_SESSION[big_blind]
                        </div>
                        ";
                    }
                    if ($preflopThirdAction === 'call'){
                        $_SESSION['preflopActionMessage'] = "
                        <div class='preflopAction'>
                        Hero ($_SESSION[hPosition]): calls
                        <br>
                        Villain ($_SESSION[vPosition]): raises to $secondAmount 
                        <br>
                        Hero ($_SESSION[hPosition]): calls $secondAmount
                        </div>
                        ";
                        $_SESSION['hero_stack'] -= $secondAmount;
                        $_SESSION['villain_stack'] -= $secondAmount;
                        $_SESSION['preflopMessage'] = "
                        <div class='stacks'>
                            <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                            <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                            <span>Blinds: $_SESSION[blinds]</span>
                        </div>
                        <br>
                        $_SESSION[currentHands]
                        ";
                    }
                    if ($preflopThirdAction === 'bet'){
                        $_SESSION['preflopActionMessage'] = "You can only raise or call preflop!";
                    }
                    if ($preflopThirdAction === 'check'){
                        $_SESSION['preflopActionMessage'] = "You can't check when someone raises you!";
                    }
                    if ($preflopThirdAction === 'raise'){
                        if ($preflopFourthAction === 'call'){
                            $_SESSION['preflopActionMessage'] = "
                            <div class='preflopAction'>
                            Hero ($_SESSION[hPosition]): calls
                            <br>
                            Villain ($_SESSION[vPosition]): raises to $secondAmount
                            <br>
                            Hero ($_SESSION[hPosition]): re-raises to  $thirdAmount
                            <br>
                            Villain ($_SESSION[vPosition]): calls $thirdAmount
                            </div>
                            ";
                            $_SESSION['hero_stack'] -= $thirdAmount;
                            $_SESSION['villain_stack'] -= $thirdAmount;
                            $_SESSION['preflopMessage'] = "
                            <div class='stacks'>
                                <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                                <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                                <span>Blinds: $_SESSION[blinds]</span>
                            </div>
                            <br>
                            $_SESSION[currentHands]
                            ";
                        }
                        if ($preflopFourthAction === "check"){
                            $_SESSION['preflopActionMessage'] = "You cannot check when they raised!";
                        }
                        if ($preflopFourthAction === "bet"){
                            $_SESSION['preflopActionMessage'] = "You cannot bet when they raised!";
                        }
                        if ($preflopFourthAction === "fold"){
                            $_SESSION['preflopActionMessage'] = "
                            <div class='preflopAction'>
                            Hero ($_SESSION[hPosition]): calls
                            <br>
                            Villain ($_SESSION[vPosition]): raises to $secondAmount
                            <br>
                            Hero ($_SESSION[hPosition]): re-raises to  $thirdAmount
                            <br>
                            Villain ($_SESSION[vPosition]): folds
                            <br>
                            Hero wins $secondAmount
                            </div>
                            ";
                        }
                        if ($preflopFourthAction === "raise"){
                            $_SESSION['preflopActionMessage'] = "We cannot support more than 4 actions at this moment";
                        }
                    }
                }
            }
            //All first action RAISE lines established
            if ($preflopFirstAction === "raise"){
                if ($preflopSecondAction === "call"){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Hero ($_SESSION[hPosition]): raises to $firstAmount
                    <br>
                    Villain ($_SESSION[vPosition]): calls $firstAmount
                    <br>
                    </div>
                    ";
                    $_SESSION['hero_stack'] -= $firstAmount;
                    $_SESSION['villain_stack'] -= $firstAmount;
                    $_SESSION['preflopMessage'] = "
                    <div class='stacks'>
                        <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                        <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                        <span>Blinds: $_SESSION[blinds]</span>
                    </div>
                    <br>
                    $_SESSION[currentHands]
                    ";
                }
                if ($preflopSecondAction === "fold"){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Hero ($_SESSION[hPosition]): raises to $firstAmount
                    <br>
                    Villain ($_SESSION[vPosition]): folds
                    <br>
                    Hero wins $_SESSION[big_blind]
                    </div>
                    ";
                }
                if ($preflopSecondAction === "bet"){
                    $_SESSION['preflopActionMessage'] = "You can't bet after someone raises!";
                }
                if ($preflopSecondAction === "check"){
                    $_SESSION['preflopActionMessage'] = "You can't check after someone raises!";
                }
                if ($preflopSecondAction === "raise"){
                    if ($preflopThirdAction === "call"){
                        $_SESSION['preflopActionMessage'] = "
                        <div class='preflopAction'>
                        Hero ($_SESSION[hPosition]): raises to $firstAmount
                        <br>
                        Villain ($_SESSION[vPosition]): re-raises to $secondAmount
                        <br>
                        Hero ($_SESSION[hPosition]): calls $secondAmount
                        </div>
                        ";
                        $_SESSION['hero_stack'] -= $secondAmount;
                        $_SESSION['villain_stack'] -= $secondAmount;
                        $_SESSION['preflopMessage'] = "
                        <div class='stacks'>
                            <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                            <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                            <span>Blinds: $_SESSION[blinds]</span>
                        </div>
                        <br>
                        $_SESSION[currentHands]
                        ";
                    }
                    if ($preflopThirdAction === "fold"){
                        $_SESSION['preflopActionMessage'] = "
                        <div class='preflopAction'>
                        Hero ($_SESSION[hPosition]): raises to $firstAmount
                        <br>
                        Villain ($_SESSION[vPosition]): re-raises to $secondAmount
                        <br>
                        Hero ($_SESSION[hPosition]): folds
                        <br>
                        Villain wins $firstAmount
                        </div>
                        ";
                    }
                    if ($preflopThirdAction === "bet"){
                        $_SESSION['preflopActionMessage'] = "You can't bet after someone raises!";
                    }
                    if ($preflopThirdAction === "check"){
                        $_SESSION['preflopActionMessage'] = "You can't check after someone raises!";
                    }
                    if ($preflopThirdAction === "raise"){
                        if ($preflopFourthAction === "call"){
                            $_SESSION['preflopActionMessage'] = "
                            <div class='preflopAction'>
                                Hero ($_SESSION[hPosition]): raises to $firstAmount
                                <br>
                                Villain ($_SESSION[vPosition]): re-raises to $secondAmount
                                <br>
                                Hero ($_SESSION[hPosition]): re-raises to $thirdAmount
                                <br>
                                Villain calls $thirdAmount
                            </div>
                            ";
                            $_SESSION['hero_stack'] -= $thirdAmount;
                            $_SESSION['villain_stack'] -= $thirdAmount;
                            $_SESSION['preflopMessage'] = "
                            <div class='stacks'>
                                <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                                <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                                <span>Blinds: $_SESSION[blinds]</span>
                            </div>
                            <br>
                            $_SESSION[currentHands]
                            ";
                        }
                        if ($preflopFourthAction === "fold"){
                            $_SESSION['preflopActionMessage'] = "
                            <div class='preflopAction'>
                                Hero ($_SESSION[hPosition]): raises to $firstAmount
                                <br>
                                Villain ($_SESSION[vPosition]): re-raises to $secondAmount
                                <br>
                                Hero ($_SESSION[hPosition]): re-raises to $thirdAmount
                                <br>
                                Villain folds
                                <br>
                                Hero wins $secondAmount
                            </div>
                            ";
                        }
                        if ($preflopFourthAction === "bet"){
                            $_SESSION['preflopActionMessage'] = "You can't bet after someone raises!";
                        }
                        if ($preflopFourthAction === "check"){
                            $_SESSION['preflopActionMessage'] = "You can't check after someone raises!";
                        }
                        if ($preflopFourthAction === "raise"){
                            $_SESSION['preflopActionMessage'] = "We can only support four actions at this moment";
                        }
                    }
                }
            }
        }

        //IF HERO IS NOT FIRST
        else if ($heroPreFirst === false){
            if ($firstAmount > $_SESSION['hero_stack'] || $secondAmount > $_SESSION['villain_stack'] || $thirdAmount > $_SESSION['hero_stack'] || $fourthAmount > $_SESSION['villain_stack']){
                $_SESSION['preflopActionMessage'] = "You cannot check bet/raise more than you have!";
                $this->showAddHand();
                exit();
            }
            //--First action CHECK lines established above--
            //all first action CHECK lines established
            if ($preflopFirstAction === "check"){
                $_SESSION['preflopActionMessage'] = "You cannot check preflop unless you are in the big blind!";
            }
            //First action FOLD lines established
            if ($preflopFirstAction === "fold"){
                $_SESSION['preflopActionMessage'] = "
                <div class='preflopAction'>
                Villain ($_SESSION[vPosition]): folds
                <br>
                Hero ($_SESSION[hSPosition]): wins with $_SESSION[heroFirstCard] $_SESSION[heroSecondCard]
                </div>
                ";
            }
            //all first action CALL lines established
            if ($preflopFirstAction === 'call'){
                if ($preflopSecondAction === 'bet'){
                    $_SESSION['preflopActionMessage'] = "You can only raise, fold, or call preflop!";
                }
                if ($hBB && $preflopSecondAction === 'check'){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Villain ($_SESSION[vPosition]): calls $_SESSION[big_blind]
                    <br>
                    Hero ($_SESSION[hPosition]): checks BB
                    </div>
                    ";
                    $_SESSION['hero_stack'] -= $_SESSION['big_blind'];
                    $_SESSION['villain_stack'] -= $_SESSION['big_blind'];
                    $_SESSION['preflopMessage'] = "
                    <div class='stacks'>
                        <span>Hero Stack: $_SESSION[hero_stack] </span> <br> 
                        <span>Villain Stack: $_SESSION[villain_stack] </span> <br> 
                        <span>Blinds: $_SESSION[blinds]</span>
                    </div>
                    <br>
                    $_SESSION[currentHands]
                    ";
                }
                if ($hBB === false && $preflopSecondAction === 'check'){
                    $_SESSION['preflopActionMessage'] = "You can't check if you're not in the big blind!";
                }
                if ($hBB === false && $preflopSecondAction === 'call'){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Villain ($_SESSION[vPosition]): calls $_SESSION[big_blind]
                    <br>
                    Hero ($_SESSION[hPosition]): calls $_SESSION[big_blind]
                    </div>
                    ";
                    $_SESSION['hero_stack'] -= $_SESSION['big_blind'];
                    $_SESSION['villain_stack'] -= $_SESSION['big_blind'];
                    $_SESSION['preflopMessage'] = "
                    <div class='stacks'>
                        <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                        <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                        <span>Blinds: $_SESSION[blinds]</span>
                    </div>
                    <br>
                    $_SESSION[currentHands]
                    ";
                }
                if ($hBB === true && $preflopSecondAction === 'call'){
                    $_SESSION['preflopActionMessage'] = "You have to check in the big blind!";
                }
                if ($preflopSecondAction === 'fold'){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Villain ($_SESSION[vPosition]): calls $_SESSION[big_blind]
                    <br>
                    Hero ($_SESSION[hPosition]): folds
                    <br>
                    Villain ($_SESSION[vPosition]): wins with $_SESSION[villainFirstCard] $_SESSION[villainSecondCard]
                    </div>
                    ";
                }
                if ($preflopSecondAction === 'raise'){
                    if ($preflopThirdAction === 'fold'){
                        $_SESSION['preflopActionMessage'] = "
                        <div class='preflopAction'>
                        Villain ($_SESSION[vPosition]): calls $_SESSION[big_blind]
                        <br>
                        Hero ($_SESSION[hPosition]): raises to $secondAmount
                        <br>
                        Villain ($_SESSION[vPosition]): folds
                        <br>
                        Hero wins $_SESSION[big_blind]
                        </div>
                        ";
                    }
                    if ($preflopThirdAction === 'call'){
                        $_SESSION['preflopActionMessage'] = "
                        <div class='preflopAction'>
                        Villain ($_SESSION[vPosition]): calls
                        <br>
                        Hero ($_SESSION[hPosition]): raises to $secondAmount 
                        <br>
                        Villain ($_SESSION[vPosition]): calls $secondAmount
                        </div>
                        ";
                        $_SESSION['hero_stack'] -= $secondAmount;
                        $_SESSION['villain_stack'] -= $secondAmount;
                        $_SESSION['preflopMessage'] = "
                        <div class='stacks'>
                            <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                            <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                            <span>Blinds: $_SESSION[blinds]</span>
                        </div>
                        <br>
                        $_SESSION[currentHands]
                        ";
                    }
                    if ($preflopThirdAction === 'bet'){
                        $_SESSION['preflopActionMessage'] = "You can only raise or call preflop!";
                    }
                    if ($preflopThirdAction === 'check'){
                        $_SESSION['preflopActionMessage'] = "You can't check when someone raises you!";
                    }
                    if ($preflopThirdAction === 'raise'){
                        if ($preflopFourthAction === 'call'){
                            $_SESSION['preflopActionMessage'] = "
                            <div class='preflopAction'>
                            Villain ($_SESSION[vPosition]): calls
                            <br>
                            Hero ($_SESSION[hPosition]): raises to $secondAmount
                            <br>
                            Villain ($_SESSION[vPosition]): re-raises to  $thirdAmount
                            <br>
                            Hero ($_SESSION[hPosition]): calls $thirdAmount
                            </div>
                            ";
                            $_SESSION['hero_stack'] -= $thirdAmount;
                            $_SESSION['villain_stack'] -= $thirdAmount;
                            $_SESSION['preflopMessage'] = "
                            <div class='stacks'>
                                <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                                <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                                <span>Blinds: $_SESSION[blinds]</span>
                            </div>
                            <br>
                            $_SESSION[currentHands]
                            ";
                        }
                        if ($preflopFourthAction === "check"){
                            $_SESSION['preflopActionMessage'] = "You cannot check when they raised!";
                        }
                        if ($preflopFourthAction === "bet"){
                            $_SESSION['preflopActionMessage'] = "You cannot bet when they raised!";
                        }
                        if ($preflopFourthAction === "fold"){
                            $_SESSION['preflopActionMessage'] = "
                            <div class='preflopAction'>
                            Villain ($_SESSION[vPosition]): calls
                            <br>
                            Hero ($_SESSION[hPosition]): raises to $secondAmount
                            <br>
                            Villain ($_SESSION[vPosition]): re-raises to  $thirdAmount
                            <br>
                            Hero ($_SESSION[hPosition]): folds
                            <br>
                            Villain wins $secondAmount
                            </div>
                            ";
                        }
                        if ($preflopFourthAction === "raise"){
                            $_SESSION['preflopActionMessage'] = "We cannot support more than 4 actions at this moment";
                        }
                    }
                }
            }
            //All first action RAISE lines established
            if ($preflopFirstAction === "raise"){
                if ($preflopSecondAction === "call"){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Villain ($_SESSION[vPosition]): raises to $firstAmount
                    <br>
                    Hero ($_SESSION[hPosition]): calls $firstAmount
                    <br>
                    </div>
                    ";
                }
                if ($preflopSecondAction === "fold"){
                    $_SESSION['preflopActionMessage'] = "
                    <div class='preflopAction'>
                    Villain ($_SESSION[vPosition]): raises to $firstAmount
                    <br>
                    Hero ($_SESSION[hPosition]): folds
                    <br>
                    Villain wins $_SESSION[big_blind]
                    </div>
                    ";
                }
                if ($preflopSecondAction === "bet"){
                    $_SESSION['preflopActionMessage'] = "You can't bet after someone raises!";
                }
                if ($preflopSecondAction === "check"){
                    $_SESSION['preflopActionMessage'] = "You can't check after someone raises!";
                }
                if ($preflopSecondAction === "raise"){
                    if ($preflopThirdAction === "call"){
                        $_SESSION['preflopActionMessage'] = "
                        <div class='preflopAction'>
                        Villain ($_SESSION[vPosition]): raises to $firstAmount
                        <br>
                        Hero ($_SESSION[hPosition]): re-raises to $secondAmount
                        <br>
                        Villain ($_SESSION[vPosition]): calls $secondAmount
                        </div>
                        ";
                        $_SESSION['hero_stack'] -= $secondAmount;
                        $_SESSION['villain_stack'] -= $secondAmount;
                        $_SESSION['preflopMessage'] = "
                        <div class='stacks'>
                            <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                            <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                            <span>Blinds: $_SESSION[blinds]</span>
                        </div>
                        <br>
                        $_SESSION[currentHands]
                        ";
                    }
                    if ($preflopThirdAction === "fold"){
                        $_SESSION['preflopActionMessage'] = "
                        <div class='preflopAction'>
                        Villain ($_SESSION[vPosition]): raises to $firstAmount
                        <br>
                        Hero ($_SESSION[hPosition]): re-raises to $secondAmount
                        <br>
                        Villain ($_SESSION[vPosition]): folds
                        <br>
                        Hero wins $firstAmount
                        </div>
                        ";
                    }
                    if ($preflopThirdAction === "bet"){
                        $_SESSION['preflopActionMessage'] = "You can't bet after someone raises!";
                    }
                    if ($preflopThirdAction === "check"){
                        $_SESSION['preflopActionMessage'] = "You can't check after someone raises!";
                    }
                    if ($preflopThirdAction === "raise"){
                        if ($preflopFourthAction === "call"){
                            $_SESSION['preflopActionMessage'] = "
                            <div class='preflopAction'>
                                Villain ($_SESSION[vPosition]): raises to $firstAmount
                                <br>
                                Hero ($_SESSION[hPosition]): re-raises to $secondAmount
                                <br>
                                Villain ($_SESSION[vPosition]): re-raises to $thirdAmount
                                <br>
                                Hero calls $thirdAmount
                            </div>
                            ";
                            $_SESSION['hero_stack'] -= $thirdAmount;
                            $_SESSION['villain_stack'] -= $thirdAmount;
                            $_SESSION['preflopMessage'] = "
                            <div class='stacks'>
                                <span>Hero Stack: $_SESSION[hero_stack] ($_SESSION[hero_stack_bb] bb) </span> <br> 
                                <span>Villain Stack: $_SESSION[villain_stack] ($_SESSION[villain_stack_bb] bb) </span> <br> 
                                <span>Blinds: $_SESSION[blinds]</span>
                            </div>
                            <br>
                            $_SESSION[currentHands]
                            ";
                        }
                        if ($preflopFourthAction === "fold"){
                            $_SESSION['preflopActionMessage'] = "
                            <div class='preflopAction'>
                                Villain ($_SESSION[vPosition]): raises to $firstAmount
                                <br>
                                Hero ($_SESSION[hPosition]): re-raises to $secondAmount
                                <br>
                                Villain ($_SESSION[vPosition]): re-raises to $thirdAmount
                                <br>
                                Hero folds
                                <br>
                                Villain wins $secondAmount
                            </div>
                            ";
                        }
                        if ($preflopFourthAction === "bet"){
                            $_SESSION['preflopActionMessage'] = "You can't bet after someone raises!";
                        }
                        if ($preflopFourthAction === "check"){
                            $_SESSION['preflopActionMessage'] = "You can't check after someone raises!";
                        }
                        if ($preflopFourthAction === "raise"){
                            $_SESSION['preflopActionMessage'] = "We can only support four actions at this moment";
                        }
                    }
                }
            }
        }

        $this->showAddHand();
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

    //yet to be implemented
    public function addTurn(){

    }
    public function addRiver(){

    }

    public function submitDB(){
        // $preflopActionMessageJSON = $_SESSION['preflopActionMessage'];
        $parts= explode("\n", $_SESSION['preflopActionMessage']);

        $outputArray = array();

        $data = array();

        foreach ($parts as $part) {
            $trimmedPart = trim($part);

            if (!empty($trimmedPart)) {
                $data[] = $trimmedPart;
            }
        }

        $jsonPreflopAction = json_encode($data);
        $_SESSION['myJSON'] = $jsonPreflopAction;
        // print_r($parts);
        // print_r($_SESSION['preflopActionMessage']);
        // print_r($jsonPreflopAction);



        // $jsonArray = [
        //     'textEntries' => $textArray
        // ];

        // //the current hand you submit is now in JSON format
        // $_SESSION['jsonData'] = json_encode($jsonArray, JSON_PRETTY_PRINT);
        // $this->$currentTime = date('Y-m-d H:i:s');

        //DB stuff goes here
        $this->db->query("insert into hands (name, email, hand) values ($1, $2, $3);",
        $_SESSION["name"], $_SESSION["email"],
        $_SESSION['myJSON']
        );

        header("Location: ?command=handhistories");
    }

    public function getHands() {
        $targetName = $_SESSION["email"];


        // Build and execute the SQL query
        $selectHandArray= $this->db->query("SELECT * FROM hands WHERE email = $1;",
        $targetName);

        $_SESSION['forSelectHand'] = $selectHandArray;
    }

    public function getEmail($name) {
        $res = $this->db->query("SELECT email FROM users WHERE name = $1;", $name);
        // $_SESSION['id'] = $res[0]['id'];
        // echo $_SESSION['id'];
        // echo $_SESSION['name'];
        $_SESSION['friendEmail'] = $res[0]['email'];
    }

    public function searchFriend() {
        if(isset($_POST['searchFriend']) && !empty($_POST['searchFriend'])) {
            if($_POST['searchFriend'] == $_SESSION['name']) {
                $this->errorMessage = "You cannot add yourself as a friend";
                return;
            }

            $res = $this->db->query("select * from users where name = $1;", $_POST["searchFriend"]);

            if (!empty($res)) {

                // TODO: DONT ADD DUPLICATE FRIENDS
                $friendName = trim($_POST['searchFriend']); 
                if($friendName !== "") {
                    $this->getEmail($_POST['searchFriend']);
                    $this->db->query("INSERT INTO FRIENDS (name, email, friendName, friendEmail) values ($1, $2, $3, $4);",
                    $_SESSION["name"], $_SESSION["email"],
                    $friendName, $_SESSION['friendEmail']
                    );
                    header("Location: ?command=online");
                }

                else {
                    //TODO : ADD THIS FUNCTIONALITY
                    $this->errorMessage = "Enter nonwhite spaces";
                    header("Location: ?command=online");
                }
            } 
            else {
                // TODO: ADD THIS FUNCTIONALITY
                $this->errorMessage = "Player doesn't exist.";
                header("Location: ?command=online");
            }
        }

    }

    public function getNews() {
        $mihirsKey="ccab0c64b2a04a2fb240828366a80f69";
    }

    public function testAjax() {
        include("/opt/src/Project/testAjax.php");
    }

    public function submitMsg() {

        $this->getEmail($_SESSION["friendName"]);
        $this->db->query("INSERT INTO msgs (sendname, sendemail, recieveName, recieveEmail, msg) values ($1, $2, $3, $4, $5);",
        $_SESSION["name"], $_SESSION["email"],
        $_SESSION["friendName"], $_SESSION["friendEmail"],
        file_get_contents('php://input')
        );
    }

    public function fetchConvos() {

        $res = $this->db->query("SELECT * FROM msgs WHERE sendName = $1 AND sendEmail = $2 OR recieveName = $1 AND recieveEmail = $2;", $_SESSION["name"], $_SESSION["email"]);
        if (!isset($res)) {
            die("No questions in the database");
        }
        $question = (($res));
        
        // Return JSON only
        header("Content-type: application/json");
        echo json_encode($question);
        
    }

    public function drawCards($numCards) {
        $cardDict = array_keys($this->cardDict);
        if (!isset($_SESSION['remainingCards'])) {
            $_SESSION['remainingCards'] = $cardDict;
        }
    
        $keys = array_keys($_SESSION['remainingCards']);
        shuffle($keys);
    
        $drawnCards = array();
        for ($i = 0; $i < $numCards; $i++) {
            if (!empty($_SESSION['remainingCards'])) {
                $drawnCards[$keys[$i]] = $_SESSION['remainingCards'][$keys[$i]];
                unset($_SESSION['remainingCards'][$keys[$i]]);
            } else {
                break;
            }
        }
        return $drawnCards;
    }

    public function drawAndAddToCards($numCards, $person) {
        // Call the drawCards function to get drawn cards
        $drawnCards = $this->drawCards($numCards);
    
        // Initialize $_SESSION['myCards'] if it doesn't exist
        if (!isset($_SESSION[$person])) {
            $_SESSION[$person] = array();
        }
    
        // Add the drawn cards to $_SESSION['myCards']
        $_SESSION[$person] = array_merge($_SESSION[$person], $drawnCards);

        return $drawnCards;
    }
    
    public function deleteAllHands() {
        $_SESSION['myCards'] = array();
        $_SESSION['botCards'] = array();
        $_SESSION['communityCards'] = array();
        $_SESSION['backCards'] = array();

    }

    public function setUpPoker() {
        $this->deleteAllHands();
        $this->drawAndAddToCards(2, 'myCards');
        $this->drawAndAddToCards(2, 'botCards');
        $this->drawAndAddToCards(5, 'communityCards');
        include("/opt/src/Project/pokerSetUp.php");
    }

    public function updateCount() {

            $data = json_decode(file_get_contents('php://input'), true);

            // echo "HELLO WORLD MIHIR WAS HERE";
            // echo $data;
        
            if (isset($data['count'])) {
                $_SESSION['count'] = $data['count'];
                echo json_encode(['success' => true]);
                exit;
            }
        
        echo json_encode(['success' => false, 'message' => 'Invalid request']); 
    }
    


    public function logout(){
        session_destroy();

        header("Location: ?command=welcome");
    }
}