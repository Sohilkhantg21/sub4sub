<?php
$file = 'users.json';
$users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body {
            margin: 0;
            background: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
            padding: 30px;
            max-width: 800px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            background: #fff;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        a {
            color: #007bff;
        }
        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
                width: 100%;
            }
            th {
                display: none;
            }
            td {
                padding: 10px;
                border: none;
                border-bottom: 1px solid #ddd;
            }
            td::before {
                content: attr(data-label);
                font-weight: bold;
                display: block;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Admin Panel - User Submissions</h2>
    <?php if (count($users) === 0): ?>
        <p>No users yet.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Channel</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                foreach (array_reverse($users) as $user):
                ?>
                    <tr>
                        <td data-label="#"><?= $count++ ?></td>
                        <td data-label="Channel"><a href="<?= $user['channel'] ?>" target="_blank"><?= $user['channel'] ?></a></td>
                        <td data-label="Time"><?= $user['time'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
</body>
</html>
