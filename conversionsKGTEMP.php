    <form action="index.php" method="GET">
        <label for="fromTo">Choose conversion type:</label>
        <select name="fromTo" id="fromTo" value="Select conversion">
            <option value="KGG">From Kilograms to Grams</option>
            <option value="GKG">From Grams to Kilograms</option>
            <option value="CF">From Celsius to Fahrenheit</option>
            <option value="FC">From Fahrenheit to Celsius</option>
            <option value="KLM">From Kilometer/Hour to Meters/Second</option>
            <option value="MTR">From Meters to Knots</option>
        </select>
        <label for="from">Type value here: </label>
        <input name="from" id="from" value="" type="number">
        <button type="submit">CONVERT</button>
    </form>