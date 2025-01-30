<!DOCTYPE html>
<html>
<head>
    <title>TrabbitOne Lab - activities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .menu-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }
        h2 {
            margin-bottom: 20px;
        }
        .menu-item {
            background: #00796b;
            color: white;
            border: none;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .menu-item:hover {
            background: #004d40;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <h2>Practice</h2>
        <button class="menu-item" onclick="navigate('xss/title.php')">Escape The Matrix - ( Filter Bypass + Reflected XSS )</button>
        <button class="menu-item" onclick="navigate('xss/input.php')">The Classic XSS - ( Reflected XSS)</button>
        <button class="menu-item" onclick="navigate('exercise3.php')">Exercise 3</button>
    </div>

    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
