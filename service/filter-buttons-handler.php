<?php
/*
This php code change (dog and cat navigation) buttons color and filters the sql query(all rows or just dogs or just cats)
*/
$dogVisible=$catVisible="active";

if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["dogVisible"])) {
    if($_GET["dogVisible"]=="active") $dogVisible="deactive"; else $dogVisible="active";
}
if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["catVisible"])) {
    if($_GET["catVisible"]=="active") $catVisible="deactive"; else $catVisible="active";
}
?>