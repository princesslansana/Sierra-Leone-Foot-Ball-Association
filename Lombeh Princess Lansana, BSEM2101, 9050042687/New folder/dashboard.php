<?php
require_once "config.php";

// Fetch counts
$players = $conn->query("SELECT COUNT(*) FROM players")->fetchColumn();
$coaches = $conn->query("SELECT COUNT(*) FROM coaches")->fetchColumn();
$referees = $conn->query("SELECT COUNT(*) FROM referees")->fetchColumn();
$clubs = $conn->query("SELECT COUNT(*) FROM clubs")->fetchColumn();
$matches = $conn->query("SELECT COUNT(*) FROM matches")->fetchColumn();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sierra Leone Football Association Dashboard</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; }
        .container { width: 90%; margin: auto; }
        .card {
            width: 23%;
            background: white;
            padding: 20px;
            float: left;
            margin: 1%;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0px 0px 5px #aaa;
        }
        h2 { margin-bottom: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Sierra Leone Football Association Dashboard</h1>

    <div class="card">
        <h2>Players</h2>
        <h1><?= $players ?></h1>
    </div>

    <div class="card">
        <h2>Coaches</h2>
        <h1><?= $coaches ?></h1>
    </div>

    <div class="card">
        <h2>Referees</h2>
        <h1><?= $referees ?></h1>
    </div>

    <div class="card">
        <h2>Clubs</h2>
        <h1><?= $clubs ?></h1>
    </div>

    <div class="card">
        <h2>Matches</h2>
        <h1><?= $matches ?></h1>
    </div>

</div>

</body>
</html>
