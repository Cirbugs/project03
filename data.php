<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informacion - Data</title>
  <link rel="icon" href="img/cbtis.png">
  <style>
     table {
        border: solid 3px #7e7c7c;
        border-collapse: collapse;             
      }
      th, h2 {
        background-color: #BCB7B7;
      }
      td, th
       {
        border: solid 3px #000000;
        padding: 2px;
        text-align: center;
    }
    body{
      background-color: green;
    }
  </style>
</head>
<body>
    <br>
    <h1 align="center"><font size="7"color="#F6CEEC"><strong>Cristian David Torres Cortina</strong></font></h1> 
   
</body>
</html>

<?php 
$GGrupo= $_POST["grupo"];
$MMateria= $_POST["materia"];
$AAlumnos= $_POST["alumnos"];
$HHora= $_POST["hora"];
echo "<br>";
echo "<center>";
echo "<table>";
echo "<tr>";
echo "<th><h2><font size=6>&nbsp;&nbsp;&nbsp;&nbsp; Grupo &nbsp;&nbsp;&nbsp;&nbsp; </th></h2>";
echo "<th><h2><font size=6>&nbsp;&nbsp;&nbsp;&nbsp; Materia &nbsp;&nbsp;&nbsp;&nbsp; </th></h2>";
echo "<th><h2><font size=6>&nbsp;&nbsp;&nbsp;&nbsp; Alumnos &nbsp;&nbsp;&nbsp;&nbsp; </th></h2>";
echo "<th><h2><font size=6>&nbsp;&nbsp;&nbsp;&nbsp; Hora &nbsp;&nbsp;&nbsp;&nbsp; </th></h2></font>";
echo "</tr>"; 
echo "<tr>";
echo "<th><font size=5 color=#9A2EFE> <p> $GGrupo </th></p>";
echo "<th><font size=5 color=#9A2EFE> <p> $MMateria </th></p>";
echo "<th><font size=5 color=#9A2EFE> <p> $AAlumnos </th></p>";
echo "<th><font size=5 color=#9A2EFE> <p> $HHora </th></p> </font>";
echo "</tr>"; 
echo "</table>";
?>