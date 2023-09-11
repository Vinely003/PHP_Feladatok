<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["megyeId"]) && isset($_POST["ujVaros"])) {
    include("../connect.php");

    $megyeId = $_POST["megyeId"];
    $ujVaros = $_POST["ujVaros"];

    if (trim($_POST["ujVaros"])) {
        $sql = "INSERT INTO varos (megye_id, varos_nev) VALUES ($megyeId, '$ujVaros')";
        if ($kapcsolat->query($sql) === TRUE) {
            $sql = "SELECT id, varos_nev FROM varos WHERE megye_id = $megyeId";
            $result = $kapcsolat->query($sql);

            if ($result->num_rows > 0) {
                echo "<tr><th>Városok</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td><input data-varosid='" . $row["id"] . "' id='varos' class='ujVarosNev' size='15' type='text' value='" . $row["varos_nev"] . "'></td><td class='gombok'><button class='modositas'>Módosítás</button></td><td class='gombok'><button class='torles' data-varosid='" . $row["id"] . "'>Törlés</button></td><td class='gombok'><button class='megse'>Mégse</button></td></tr>";
                }
            } else {
                echo "<tr><td>Nincsenek városok ebben a megyében.</td></tr>";
            }
        } else {
            echo "Hiba történt: " . $kapcsolat->error;
        }
    } else {
        echo "Nem lehet üres a mező";
    }

    $kapcsolat->close();
}
