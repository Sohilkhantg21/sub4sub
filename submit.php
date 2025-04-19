<?php
date_default_timezone_set('Asia/Kolkata');
$channel = trim($_POST['channel']);

if (!filter_var($channel, FILTER_VALIDATE_URL) || strpos($channel, 'youtube.com') === false) {
    die("Invalid YouTube channel URL.");
}

$file = 'users.json';
$users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

$users[] = [
    'channel' => $channel,
    'time' => date("Y-m-d H:i:s")
];

file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

$otherUsers = array_filter($users, fn($u) => $u['channel'] !== $channel);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Submitted</title>
    <style>
        body {
            background: #f2f2f2;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        a {
            color: #007bff;
        }
        .button {
            margin-top: 20px;
            display: inline-block;
            background: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
        }
        .button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Thanks for submitting!</h2>
        <?php if (count($otherUsers) > 0):
            $randomUser = $otherUsers[array_rand($otherUsers)]; ?>
            <p>Subscribe to this user:</p>
            <p><a href="<?= $randomUser['channel'] ?>" target="_blank"><?= $randomUser['channel'] ?></a></p>
        <?php else: ?>
            <p>No other users available yet. Please wait!</p>
        <?php endif; ?>
        <a class="button" href="index.php">Submit Another</a>
    </div>
</div>
</body>
</html>
