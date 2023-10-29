<?php

class pokerController {

    private $input = [];

    private $db;

    private $errorMessage = "";

    /**
     * Constructor
     */
    public function __construct($input) {
        session_start();
        //$this->db = new Database();
        
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
            default:
                $this->showWelcome();
                break;
        }
    }

    function showWelcome(){
        include("/opt/src/Project/welcome.php");
    }

    public function showHomePage($message = "") {
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/home.php");
    }

    function login(){
        if(isset($_POST["username"])) {
            $_SESSION["name"] = $_POST["username"];
        }

        if(isset($_POST["email"])) {
            $_SESSION["email"] = $_POST["email"];
        }
        header("Location: ?command=homePage");
    }
    
    function showAlone(){
        include("/opt/src/Project/alone.php");
    }
    
    function showOnline(){
        include("/opt/src/Project/online.php");
    }

    function showArticles(){
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/articles.php");
    }

    function showHandHistories(){
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        include("/opt/src/Project/handhistories.php");
    }
}