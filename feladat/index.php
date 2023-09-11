<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megyék</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Megye és Város</h1>

    <label>Válassz megyét:</label>
    <select id="megyeSelect">
    </select>
    <table id="varosTabla">
    </table>
    <br>
    <form id="varosForm">
        <label for="ujVaros">Új város megadása</label>
        <br>
        <input type="text" id="ujVaros" placeholder="Új város neve...">
        <br>
        <input class=button type="submit" value="Hozzáad">
    </form>
    <script src="./scripts/kivalaszt.js"></script>
</body>

</html>