<?php
/**
 * Created by IntelliJ IDEA.
 * User: kotn0
 * Date: 16.03.2017
 * Time: 22:50
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["jmeno"]) | empty($_POST["prijmeni"]) | empty($_POST["obec"]) | empty($_POST["psc"])){
        echo "povinnými údaji jsou u každého zaměstnance jméno, příjmení, obec, psc";
    }else{
        $line =[];
        foreach ($_POST as $key => $value)
            $line[] = $value;
        $handle = fopen("adresar.csv", "a");

        fputcsv($handle, $line, ";");
        fclose($handle);
        echo $line;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}