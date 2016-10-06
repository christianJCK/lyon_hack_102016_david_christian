<?php

    function getConnection() {
        $user = "root";
        $password = "suline1982d";
        $host = "localhost";
        $db = "sucksandlove";

        $mysqli = new mysqli($host, $user, $password, $db);
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL : (" . $mysqli->connect_errno . ")" .$mysqli->error;
            die();
        }
        return $mysqli;
    }
    function execSql($mysqli, $sql) {
        if (!$result = $mysqli->query($sql)){
            echo "failed to run query : (" .$mysqli->errno . ") " . $mysqli->error;
            die();
        }
        return $result;
    }