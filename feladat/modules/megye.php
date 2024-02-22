<?php
include("../connect.php");
$sql = "SELECT id, megye_nev FROM megye";
$result = $kapcsolat->query($sql);

if ($result->num_rows > 0) {
    echo "<option disabled selected>Válassz megyét...</option>";
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["id"] . "'>" . $row["megye_nev"] . "</option>";
    }
} else {
    echo "Nincsenek megyék az adatbázisban.";
}

$kapcsolat->close();
