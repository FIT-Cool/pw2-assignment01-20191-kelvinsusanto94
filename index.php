<!DOCTYPE HTML>
<html>
<head>
    <title>Introduction</title>
    <meta charset="UTF-8">
    <meta lang="en">
    <meta name="author" content="Kelvin">
    <meta name="description" content="Web, PHP">
    <link rel="stylesheet" href="plugins/datatables.min.css">
    <link rel="stylesheet" href="Table.css">
    <script type="text/javascript" src="plugins/datatables.min.js"></script>
</head>

<body>
<div class="" page>
    <table id="myTable" class="display">
        <thead>
        <tr>
            <th>Heading 1</th>
            <th>Heading 2</th>
            <th>Heading 3</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Content 0-0</td>
            <td>Content 0-1</td>
            <td>Content 0-2</td>
        </tr>
        <tr>
            <td>Content 1-0</td>
            <td>Content 1-1</td>
            <td>Content 1-2</td>
        </tr>
        <tr>
            <td>Content 2-0</td>
            <td>Content 2-1</td>
            <td>Content 2-2</td>
        </tr>
        </tbody>
    </table>

    <input id="num1" type="number" placeholder="#1 Number" autofocus>
    <input id="num2" type="number" placeholder="#2 Number">
    <div id="result"></div>
    <button onlick="sumNumber()">Jumlah</button>

    <?php
    $angka1 = 25;
    $angka2 = 3.14;
    $isStudent = true;
    $text="";
    if ($angka1 >= 20){
        echo "Angka lebih besar dari 20";
    }
    ?>
</div>
<script>$(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
<script>

</script>
</body>

</html>
