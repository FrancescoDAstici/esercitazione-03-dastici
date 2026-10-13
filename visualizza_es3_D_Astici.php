<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo Auto</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table {
            border-collapse: collapse;
        }
        td {
            border: 2px solid #000000;
            padding: 6px 12px;
        }
        td:nth-child(1) {
            background-color: lightblue;
            font-weight: bold;
            text-align: left;
            vertical-align: top;
        }
    </style>
</head>
<body>

    <?php
    $marca = $_GET["marca"];
    $modello = $_GET["mod"];
    $stato = $_GET["stato"];
    $anno = $_GET["anno"];
    $cilindrata = $_GET["cc"];
    $cavalli = $_GET["cv"];
    $prezzo = $_GET["prz"];
    $targa = $_GET["targa"];
    $descrizione = $_GET["descrizione"];

    $accessori_testo = "";

    if ($_GET["o1"] != null) {
        $accessori_testo = $accessori_testo . " Aria Condizionata |";
    }
    if ($_GET["o2"] != null) {
        $accessori_testo = $accessori_testo . " Vernice Metallizzata |";
    }
    if ($_GET["o3"] != null) {
        $accessori_testo = $accessori_testo . " Tetto in Cristallo |";
    }
    if ($_GET["o4"] != null) {
        $accessori_testo = $accessori_testo . " Impianto Radio-CD |";
    }

    echo "<table>";
    
    echo "<tr>";
    echo "<td>Marca</td>";
    echo "<td>" . $marca . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Modello</td>";
    echo "<td>" . $modello . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Stato</td>";
    echo "<td>" . $stato . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Anno Costruzione</td>";
    echo "<td>" . $anno . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Cilindrata</td>";
    echo "<td>" . $cilindrata . "cc" . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Cavalli</td>";
    echo "<td>" . $cavalli . "CV" . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Prezzo</td>";
    echo "<td>" . $prezzo . "€" . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Targa</td>";
    echo "<td>" . $targa . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Accessori</td>";
    echo "<td>" . $accessori_testo . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Descrizione Aggiuntiva</td>";
    echo "<td>" . $descrizione . "</td>";
    echo "</tr>";
    
    echo "</table>";
    ?>

</body>
</html>