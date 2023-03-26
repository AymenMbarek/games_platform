<!DOCTYPE html>
<html lang="en">
  <?php


session_start();
?> <h1> Username : <?php echo $_SESSION["username"]; ?> </h1> <?php

$userpoints=0;
?>
<h1> Base points : </h1>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content
        ="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
  
    <style>
        .container {
            width: 70%;
            margin: auto;
            text-align: center;
        }
  
        .dice {
            text-align: center;
            display: inline-block;
            margin: 10px;
        }
  
        body {
            background-color: #042f4b;
            margin: 0;
        }
  
        h1 {
            margin: 30px;
            font-family: "Lobster", cursive;
            text-shadow: 5px 0 #232931;
            font-size: 4.5rem;
            color: #4ecca3;
            text-align: center;
        }
  
        p {
            font-size: 2rem;
            color: #4ecca3;
            font-family: "Indie Flower", cursive;
        }
  
        img {
            width: 100%;
        }
  
        .bottom {
            padding-top: 30px;
        }
  
        .butn {
            background: #4ecca3;
            font-family: "Indie Flower", cursive;
            border-radius: 7px;
            color: #ffff;
            font-size: 30px;
            padding: 16px 25px 16px 25px;
            text-decoration: none;
        }
  
        .butn:hover {
            background: #232931;
            text-decoration: none;
        }
    </style>
</head>
  
<body>
    <div class="container">
        <h1>Let's Play</h1>
  
        <div class="dice">
            <p class="Player1">Player 1</p>
            <img class="img1" src="dice6.png">
        </div>
  
        <div class="dice">
            <p class="Player2">Player 2</p>
            <img class="img2" src="dice6.png">
        </div>
    </div>
  
    <div class="container bottom">
        <button type="button" class="butn"
            onClick="rollTheDice()">
            Roll the Dice
        </button>
    </div>
    <div class="container bottom">
        <button type="button" class="butn"
            onClick="editNames()">
            Edit Names
        </button>
    </div>
     <div class="container bottom">
        <button type="text" class="butn" id="points">
            
          Points 
        </button>
    </div>
  
    <script>
  
        // Player name
        var points = document.getElementById("points").innerHTML;
         document.write(points);

        var player1 = "Player 1";
        var player2 = "Player 2";
  
        // Function to change the player name
        function editNames() {
            player1 = prompt("Change Player1 name");
            player2 = prompt("Change player2 name");
  
            document.querySelector("p.Player1")
                            .innerHTML = player1;
                              
            document.querySelector("p.Player2")
                            .innerHTML = player2;
        }
  
        // Function to roll the dice
        function rollTheDice() {
            setTimeout(function () {
                var randomNumber1 = Math.floor(Math.random() * 6) + 1;
                var randomNumber2 = Math.floor(Math.random() * 6) + 1;
  
                document.querySelector(".img1").setAttribute("src",
                    "dice" + randomNumber1 + ".png");
  
                document.querySelector(".img2").setAttribute("src",
                    "dice" + randomNumber2 + ".png");
  
                if (randomNumber1 === randomNumber2) {
                    document.querySelector("h1").innerHTML = "Draw!";
                }
  
                else if (randomNumber1 < randomNumber2) {
                    document.querySelector("h1").innerHTML
                        = (player2 + " WINS!");
                        <?php $userpoints+=1;?>
                }
  
                else {
                    document.querySelector("h1").innerHTML
                        = (player1 + " WINS!");
                          <?php $userpoints+=1;?>
                }
              
            }, 2500);
           
        }
    </script>
      <?php echo '<SCRIPT language="Javascript">alert(\''.$userpoints.'\', \'Information !\');</SCRIPT>';  ?>

</body>
  
</html>