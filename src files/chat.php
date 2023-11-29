<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Justin Kaplan and Mihir Sangameswar" content="Project">
    <meta name="Bootstrap + Less" content="Homework 3"> 
    <link rel="stylesheet" href="../styles/main.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"  crossorigin="anonymous"> 
    
    <script>

        var myName = <?php echo json_encode($_SESSION['name']); ?>;
    </script>
    <style>
    /* Additional styling for the texting interface */
    .messaging-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        height: 400px; /* Set a fixed height for the container */
        overflow-y: auto; /* Enable vertical scrolling */
        position: relative;
    }

    .message-input {
        width: 80%;
        padding: 8px;
        margin-right: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .send-button {
        padding: 8px 12px;
        border: none;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .conversation {
        max-height: calc(100% - 50px); /* Set max height, considering the height of the form */
        overflow-y: auto;
        margin-top: 20px;
    }

    .message {
        background-color: #f1f1f1;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    /* Styling for the fixed message form */
    #messageForm {
        position: sticky;
        bottom: 0;
        background-color: white; /* Add background color to prevent overlap with conversation container */
        padding: 10px;
        box-shadow: 0px -5px 5px rgba(0, 0, 0, 0.1); /* Add shadow for separation effect */
    }

    #messageForm input,
    #messageForm button {
        margin: 0;
    }

    .chatting-with {
        text-align: center;
        font-size: 24px;
        color: white;
        padding: 20px;
        margin-bottom: 20px;
    }
</style>




        <!-- <?php 
        echo $_SESSION['name'];
        echo $_SESSION['email'];
        print_r($_SESSION['checkDB']);
        ?> -->


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
    <div class="messaging-container">

    <div class="chatting-with">
        Chatting with <?php echo htmlspecialchars($_GET['friend']); ?>
    </div>

        <div class="conversation" id="conversation">
            <!-- Messages will be displayed here -->
        </div>

        <form id="messageForm">
            <input type="text" class="message-input" id="messageInput" placeholder="Type your message...">
            <button type="button" class="send-button" onclick="sendMessage()">Send</button>
            <button type="button" class="send-button" onclick="fetchConvos()">CHECK CONVOS</button>
        </form>
    </div>
    <?php

    $_SESSION['friendName'] = ($_GET['friend']);
    // echo $_SESSION['friendName'];
    // echo gettype($_SESSION['friendName']);
    // echo $_SESSION['friendEmail'];
    ?>

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
   
    <script>
        // JavaScript for the messaging interface
        const sendMessage = () => {
            let messageInput = document.getElementById("messageInput").value;
            if (messageInput.trim() !== "") {
                let messageObject = {
                    type: "text",
                    content: messageInput,
                    timestamp: new Date().toISOString()
                };

                console.log("Sending message:", messageObject);

                // Create a new function for the AJAX request to avoid recursion
                sendAjaxRequest(messageObject);

                let conversation = document.getElementById("conversation");
                let messageElement = document.createElement("div");
                messageElement.className = "message";
                messageElement.textContent = myName + ": " + messageInput;
                conversation.appendChild(messageElement);
                document.getElementById("messageInput").value = "";
            }
        };


        function sendAjaxRequest(messageObject) {
            // Instantiate the object and open the AJAX request to our backend
            var ajax = new XMLHttpRequest();
            ajax.open("POST", "?command=submitMsg", true);
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

            ajax.send(JSON.stringify(messageObject));
        }

        function fetchConvos() {
            // Instantiate the object and open the AJAX request to our backend
            var ajax = new XMLHttpRequest();
            ajax.open("GET", "?command=fetchConvos", true);
            // (Note: we're expecting JSON in return)
            ajax.responseType = "json";
            // Send the request
            ajax.send(null);

            // Event Listener for when the AJAX request loads
            ajax.addEventListener("load", function () {
                // display the question
                if (this.status == 200) {
                    var messages = this.response;
                    console.log(messages);

                    // Process the messages and update the conversation
                    updateConversation(messages);
                } else {
                    // Error message
                    console.log("Error fetching conversation");
                }
            });

            // Event Listener for when the AJAX request errors out
            ajax.addEventListener("error", function () {
                // Error message
                console.log("Error fetching conversation");
            });
        }

// Function to update the conversation with new messages
function updateConversation(messages) {
        var conversation = document.getElementById("conversation");

        // Check if there are messages
        if (messages && messages.length > 0) {
            // Iterate over the messages and append them to the conversation
            messages.forEach(function (message) {
                var messageContent = JSON.parse(message.msg).content; // Extract content from the JSON message
                var senderName = message.sendname;

                var messageElement = document.createElement("div");
                messageElement.className = "message";
                messageElement.textContent = `${senderName}: ${messageContent}`;
                conversation.appendChild(messageElement);
            });

            // Scroll to the bottom of the conversation
            conversation.scrollTop = conversation.scrollHeight;
        }
    }

// code to run this every x milliseconds
// setInterval(function () {
//         fetchConvos();
//     }, 3000);



    </script>

</body>
</html>