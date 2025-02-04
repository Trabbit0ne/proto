<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::[ Vuxa - Trabbit ]::.</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle, #1a1a1a, #0d0d0d);
            overflow: hidden;
        }

        .main-content {
            background: linear-gradient(145deg, #222, #111);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.8);
            text-align: center;
            width: 90%;
            max-width: 450px;
            animation: fadeInUp 0.6s ease-out;
            border: 2px solid rgba(243, 156, 18, 0.5);
        }

        @keyframes fadeInUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.8em;
            color: #f39c12;
            text-shadow: 0 0 15px rgba(243, 156, 18, 0.8);
        }

        .exercices {
            margin-top: 30px;
        }

        .btn {
            display: block;
            width: 100%;
            background: linear-gradient(90deg, #e74c3c, #c0392b);
            border: none;
            border-radius: 5px;
            color: white;
            padding: 15px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(231, 76, 60, 0.5);
        }

        .btn:hover {
            background: linear-gradient(90deg, #c0392b, #e74c3c);
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(231, 76, 60, 0.8);
        }
    </style>
</head>
<body>
    <div class="main-content">
        <header><h1>VUXA</h1></header>
        <div class="exercices">
            <button class="btn" onclick="location.href='http://trabbit.mywebcommunity.org/xss/title.php'">
                Escape The Matrix - ( Filter Bypass + Reflected XSS )
            </button>
            <button class="btn" onclick="location.href='http://trabbit.mywebcommunity.org/xss/input.php'">
                The Classic XSS - ( Reflected XSS )
            </button>
        </div>
    </div>
</body>
</html>
