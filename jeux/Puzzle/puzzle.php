<?php


session_start();
if(!isset($_SESSION["username"])){
   require_once('header.php');
   
  }else
  {
    require_once('headerafterlog.php');
  }


?>


<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>




    <title>Puzzle Game</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/image-puzzle.css" rel="stylesheet" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/image-puzzle.js"></script>
</head>
<body>
    <div id="collage">
        <h2>Fleles Puzzle Game</h2>
        <hr />
        <div id="playPanel" style="padding:5px;display:none;">
            <h3 id="imgTitle"></h3> <hr />
            <div style="display:inline-block; margin:auto; width:95%; vertical-align:top;">
                <ul id="sortable" class="sortable"></ul>
                <div id="actualImageBox">
                    <div id="stepBox">
                        <div>Count:</div><div class="stepCount">0</div>
                    </div>
                    <div id="timeBox">
                        Time: <span id="timerPanel"></span> seconds
                    </div>
                    <img id="actualImage" />
                    <div>See the picture and solve the puzzle.</div>
                    <p id="levelPanel">
                        <input type="radio" name="level" id="easy" checked="checked" value="3" /> <label for="easy">Easy</label>
                        <input type="radio" name="level" id="medium" value="4" /> <label for="medium">Medium</label>
                        <input type="radio" name="level" id="hard" value="5" /> <label for="hard">Hard</label>
						<input type="radio" name="level" id="veryhard" value="6" /> <label for="veryhard">Very Hard</label>
                    </p>
                    <div>
                        <button id="btnRule" type="button" class="btn" onclick="rules();">Rules</button>
                        <button id="newPhoto" type="button" class="btn">Next Picture</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="gameOver" style="display:none;">
            <div style="background-color: #fc9e9e; padding: 5px 10px 20px 10px; text-align: center; ">
                <h2 style="text-align:center">Game over !!</h2>
                Congratulations!! <br /> You got the picture ready.
                <br />
                Time: <span class="stepCount">0</span> gear.
                <br />
                Time spent: <span class="timeCount">0</span> seconds<br />
                <div>
                    <button type="button" onclick="window.location.reload(true);">Play more</button>
                </div>
            </div>
        </div>

        <script>
            var images = [
                { src: 'img/bhutan.jpg', title: 'Tiger’s Nest Temple, Bhutan' },
                { src: 'img/vietnam.jpg', title: ' Vietnam' },
                { src: 'img/taj_mahal.jpg', title: 'Taj Mahal in Agra' },
                { src: 'img/china.jpg', title: 'Great Wall of China, China' },
                { src: 'img/kohila.jpg', title: 'Kohila mill' }
            ];

            $(function () {
                var gridSize = $('#levelPanel :radio:checked').val();
                imagePuzzle.startGame(images, gridSize);
                $('#newPhoto').click(function () {
                    var gridSize = $('#levelPanel :radio:checked').val();
                    imagePuzzle.startGame(images, gridSize);
                });

                $('#levelPanel :radio').change(function (e) {
                    var gridSize = $(this).val();
                    imagePuzzle.startGame(images, gridSize);
                });
            });
            function rules() {
                alert('Rearrange the pieces so that you get a sample image. \nThe steps taken are counted');
            }
        </script>
    </div>
    <script>
          window.addEventListener("load", reveal); 
           function reveal() {



        
        var val = document.getElementById("z").value;
        var result = parseInt(val) + parseInt(1);

        document.getElementById("z").value = result;
        //Set the value
        location.hash = '#' + result;
      </script>
</body>
</html>