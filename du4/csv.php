<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        table{
            display: block;
            max-width: 80%;
        }
    </style>
</head>
<body>

<?php
echo "<table class='sortable w3-table-all w3-hoverable' contenteditable>\n\n";
$f = fopen("adresar.csv", "r");
while (($line = fgetcsv($f,null,";")) !== false) {
    echo "<tr >";
    foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
}
fclose($f);
echo "\n</table>";
?>

<form action="action_page.php" method="post">
    Jméno:<br>
    <input type="text" name="jmeno" >
    <br>
    Příjmení:<br>
    <input type="text" name="prijmeni" >
    <br>
    Pohlaví:<br>
    <input type="text" name="pohlavi" >
    <br>
    Ulice:<br>
    <input type="text" name="ulice" >
    <br>
    Obec:<br>
    <input type="text" name="obec" >
    <br>
    PSČ:<br>
    <input type="text" name="psc" >
    <br>
    Telefon:<br>
    <input type="text" name="telefon" >
    <br>
    E-mail:<br>
    <input type="text" name="email" >
    <br>
    Pozice:<br>
    <input type="text" name="pozice" >
    <br>
    Nadřízený:<br>
    <input type="text" name="nadrizeni">
    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>




