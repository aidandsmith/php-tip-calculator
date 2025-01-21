<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipping Calculator | Results</title>
    <link rel="stylesheet" href="calc.css">
</head>
<body class="results">
    <div class="content-wrapper">
        <div class="page-header">
            <h1>Tipping Calculator</h1>
            <h2>Your current bill summary</h2>
        </div>
        <?php 
            $billAmount = ($_POST['billAmount']);
            $guestAmount = ($_POST['guests']);
            $tipPercentage = ($_POST['tipPercentage']);
            $splitTotal = 0;

            $totalTip = $billAmount * ($tipPercentage / 100);
            $splitTotal = ($totalTip + $billAmount) / $guestAmount;
        ?>
        <p>The total each person owes is <span>$<?php echo number_format($splitTotal, 2)?></span></p>
    </div>
</body>
</html>