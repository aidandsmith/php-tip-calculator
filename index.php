<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipping Calculator</title>
    <link rel="stylesheet" href="calc.css">
</head>
<body>
    <div class="page-header">
        <h1>Tipping Calculator</h1>
        <h2>Please enter your bill details</h2>
    </div>
    <form method="POST" action="results.php">
        <label for="billAmount">Bill Total</label>
        <input type="number" name="billAmount" placeholder="Enter bill amount">
        <label for="guests">Number of Guests</label>
        <input type="number" name="guests" placeholder="Enter total guests">
        <label for="tipPercentage">Tip Percentage</label>
        <input type="number" name="tipPercentage" placeholder="Enter tip percentage" min="15" value="15">
        <input type="submit" value="Split the Bill!">
    </form>
</body>
</html>