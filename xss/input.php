<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 50px;
        }
        h1 {
            color: #333;
        }
        form {
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        input[type="text"] {
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        p {
            font-size: 18px;
            color: #333;
        }
    </style>
    <script>
        function getName() {
            const params = new URLSearchParams(window.location.search);
            return params.get("name") || "";
        }
    </script>
</head>
<body>
    <h1>Welcome to the website!</h1>
    <p>Enter your name:</p>
    <form>
        <input type="text" name="name" />
        <input type="submit" value="Submit" />
    </form>
    <p>Hello, <script>document.write(getName());</script>!</p>

    <div class="scenario-box">
        <p>After submitting a simple form, the greeting message seemed a little odd. Something unexpected happened when the page loaded. Can you figure out what went wrong and where the problem might be?</p>
    </div>
</body>
</html>
