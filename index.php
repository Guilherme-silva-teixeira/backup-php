<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <h1>Cauculadora de IMC:</h1><br>
        <label for="#">Digite a altura:</label><br>
        <input type="number" name="height" id="box01"><br>
        <label for="#">Digite o peso:</label><br>
        <input type="number" name="weight" id="box02"><br>
        <input type="submit" value="Caucular">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["height"]) && isset($_POST["weight"]))
        {
            $height = $_POST["height"];
            $weight = $_POST["weight"];
            $result00 = (float) $weight / ($height * $height);
            echo "Seu imc é de: ".$result00;
        }
    ?>
    <form action="#" method="post">
        <h1>Cauculadora de IAC:</h1><br>
        <label for="#">Digite a circunferência do quadril: </label><br>
        <input type="number" name="hip" id="box03"><br>
        <label for="#">Digite a altura: </label><br>
        <input type="number" name="height" id="box04"><br>
        <input type="submit" value="Caucular">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hip"]) && isset($_POST["height"]))
        {
            $hip = $_POST["hip"];
            $height = $_POST["height"];
            $result01 = (float) ($hip / ($height * sqrt($height))-18);
            echo "Seu IAC é de: ". $result01;
        }
    ?>
</body>
</html>
