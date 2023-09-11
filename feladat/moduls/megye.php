<?php
include("../connect.php");
$sql = "SELECT id, megye_nev FROM megye";
$result = $kapcsolat->query($sql);

echo "<option>Válassz megyét...</option>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["id"] . "'>" . $row["megye_nev"] . "</option>";
    }
} else {
    echo "Nincsenek megyék az adatbázisban.";
}

$kapcsolat->close();
