<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ujVarosNev"]) && isset($_POST["varosid"])) {
    include("../connect.php");
    $varosid = $_POST["varosid"];
    $ujVarosNev = $_POST["ujVarosNev"];
    $sql = "UPDATE varos SET varos_nev='$ujVarosNev' WHERE id=$varosid";
    $kapcsolat->query($sql);
    $kapcsolat->close();
}
