<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["megyeId"])) {
    include("../connect.php");

    $megyeId = $_POST["megyeId"];

    $sql = "SELECT id, varos_nev FROM varos WHERE megye_id = $megyeId";
    $result = $kapcsolat->query($sql);

    if ($result->num_rows > 0) {
        echo "<tr><th>Városok</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td><input data-varosid='" . $row["id"] . "' id='varos' data-nev='" . $row["varos_nev"] . "' class='ujVarosNev' size='15' type='text' value='" . $row["varos_nev"] . "'></td><td class='gombok'><button class='modositas'>Módosítás</button></td><td class='gombok'><button class='torles' data-varosid='" . $row["id"] . "'>Törlés</button></td><td class='gombok'><button class='megse'>Mégse</button></td></tr>";
        }
    } else {
        echo "<tr><td>Nincsenek városok ebben a megyében.</td></tr>";
    }

    $kapcsolat->close();
}
