<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            // Get the search term from the URL
            $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

            // Display the search term in the title
            echo "Searched: $searchTerm";
        ?>
    </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e0f7fa;
            font-family: Arial, sans-serif;
        }

        .content {
            width: 100%;
            max-width: 800px;
            text-align: center;
        }

        .scenario-box {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-left: 5px solid #00796b;
            color: #004d40;
            max-height: 60vh; /* Ensuring content doesn't overflow */
            overflow-y: auto;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"] {
            border: 2px solid #00796b;
            border-radius: 5px;
            padding: 10px;
            width: 80%;
            font-size: 14px;
        }

        input[type="submit"] {
            background: #00796b;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #004d40;
        }

        .play-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #00796b;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .play-button:hover {
            background: #004d40;
        }
    </style>
</head>
<body>
    <button class="play-button" onclick="playAudio()">Play Audio</button>
    <div class="content">
        <div class="scenario-box">
            <p>John developed his own website and was proud of his creation. However, he had made a mistake that would come back to haunt him.<br>
            One day, John received an email containing a link to his website. The email claimed that he needed to log in because an attacker was trying to hack his website. John had a strange feeling and decided to investigate.<br><br>
            He soon discovered that a hacker had found a vulnerability on his website that was allowing them to display a fake phishing page to steal his credentials.<br><br>
            Find the vulnerability that the hacker used to perform his attack.</p>
        </div>
        <form action="title.php" method="get">
            <label for="search">Search:</label>
            <input type="text" name="search" id="search" />
            <input type="submit" value="Search" />
        </form>
    </div>
    <audio id="audio" src="https://www.google.com/speech-api/v2/synthesize?enc=mpeg&client=chromium&key=AIzaSyBOti4mM-6x9WDnZIjIeyEU21OpBXqWBgw&text=John%20developed%20his%20own%20website%20and%20was%20proud%20of%20his%20creation.%20However%2C%20he%20had%20made%20a%20mistake%20that%20would%20come%20back%20to%20haunt%20him.%0AOne%20day%2C%20John%20received%20an%20email%20containing%20a%20link%20to%20his%20website.%20The%20email%20claimed%20that%20he%20needed%20to%20log%20in%20because%20an%20attacker%20was%20trying%20to%20hack%20his%20website.%20John%20had%20a%20strange%20feeling%20and%20decided%20to%20investigate.%0A%0AHe%20soon%20discovered%20that%20a%20hacker%20had%20found%20a%20vulnerability%20on%20his%20website%20that%20was%20allowing%20them%20to%20display%20a%20fake%20phishing%20page%20to%20steal%20his%20credentials.%0A%0AFind%20the%20vulnerability%20that%20the%20hacker%20used%20to%20perform%20his%20attack.&lang=en-GB&name=rjs&speed=0.5&pitch=0.5"></audio>
    
    <script>
        function playAudio() {
            const audio = document.getElementById('audio');
            audio.play();
        }
    </script>
</body>
</html>
