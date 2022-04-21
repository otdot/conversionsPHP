<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles.css" rel="stylesheet">
    <title>Conversions</title>
</head>
<body>
    <?php include "./header.php" ?>
    <?php include "./conversionsKGTEMP.php" ?>
    <?php
        if (isset($_GET["from"])) {
            $from = $_GET["from"];
        }else {
            $from = 0;
        };
        if (isset($_GET["fromTo"])) {
            $fromTo = $_GET["fromTo"];
        }else {
            $fromTo = "null";
        };
        switch ($fromTo) {
            case "KGG":
                echo "<p>Converted " . $_GET["from"] . " " . "Kilograms to Grams</p>" . "<br>" . "<p>" . $from * 1000 . "</p>";
                break;
            case "GKG":
                echo "<p>Converted " . $_GET["from"] . " " .  "Grams to Kilograms</p>" . "<br>" ."<p>" . $from / 1000 . "</p>";
                break;
            case "CF":
                echo "<p>Converted " . $_GET["from"] . " " .  " Celsius to Farenheit</p>" . "<br>" ."<p>" . (($from * 9 /5) + 32) . "</p>";
                break;
            case "FC":
                echo "<p>Converted " . $_GET["from"] . " " .  " Farenheit to Celsuis</p>" . "<br>" . "<p>" . (($from - 32) * 5 / 9)  . "</p>";
                break;
            case "KLM":
                echo "<p>Converted " . $_GET["from"] . " " .  " Kilometers to Meters</p>" . "<br>" . "<p>" . ($from  / 3.6)  . "</p>";
                break;
            case "MTR":
                echo "<p>Converted " . $_GET["from"] . " " .  " Meters to Knots</p>" . "<br>" . "<p>" . ($from / 1.852)  . "</p>";
                break;
            default:
                "<p> Convert something! </p>";
                break;
        }
    ?>
    <?php include "./footer.php" ?>
</body>
</html>