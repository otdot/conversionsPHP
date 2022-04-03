<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>conversions KG and TEMP</title>
</head>
<body>
    <form action="conversionsKGTEMP.php" method="GET">
        <select name="fromTo" id="fromTo" value="Select conversion">
            <option value="KGG">From Kilograms to Grams</option>
            <option value="GKG">From Grams to Kilograms</option>
            <option value="CF">From Celsius to Fahrenheit</option>
            <option value="FC">From Fahrenheit to Celsius</option>
        </select>
        <label for="from">From </label>
        <input name="from" if="from" type="number">
        <input type="submit">
    </form>

    <?php
        $from = $_GET["from"];
        switch ($_GET["fromTo"]) {
            case "KGG":
                echo "<p>" . $from * 1000 . "</p>";
                break;
            case "GKG":
                echo "<p>" . $from / 1000 . "</p>";
                break;
            case "CF":
                echo "<p>" . (($from * 9 /5) + 32) . "</p>";
                break;
            case "FC":
                echo "<p>" . (($from - 32) * 5 / 9)  . "</p>";
                break;
            default:
                "<p> could not make that conversion </p>";
                break;
        }
    ?>
</body>
</html>