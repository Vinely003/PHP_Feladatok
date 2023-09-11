<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["varosid"])) {
    include("../connect.php");
    $varosid = $_POST["varosid"];
    $sql = "DELETE FROM varos WHERE id=$varosid";
    $result = $kapcsolat->query($sql);
    if ($result) {
        echo "sikeres";
    } else {
        echo "sikertelen";
    }
    $kapcsolat->close();
}
