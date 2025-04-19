<!DOCTYPE html>
<html>
<head>
    <title>Sub4Sub YouTube</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-box {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        .form-box h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        .form-box button {
            background: #28a745;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-box button:hover {
            background: #218838;
        }
        @media (max-width: 500px) {
            .form-box {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Submit Your YouTube Channel</h2>
            <form action="submit.php" method="post">
                <input type="text" name="channel" placeholder="Paste your YouTube Channel URL" required>
                <button type="submit">Submit & Get Channel</button>
            </form>
        </div>
    </div>
</body>
</html>
