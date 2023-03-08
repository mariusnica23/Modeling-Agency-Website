




<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">
       
        <a href="add_user.php"><i class="Contact">Adaugare Fotomodel</a>
        <a href="updateb.php" >Updateaza</a>
        <a href="delete.php">Stergere eveniment sau Eliminare Fotomodel</a>
        <a href="simple.php">Detalii Modele și evenimente</a>
        <a class="active" href="simple2.php">Afisare organizatori</a>
        
</div>
       
        <br>
			<br>
			<b>Afisați organizatorii evenimentului:</b>
			<br>
			<br>
            <form method="post">
            <input id="text" type="text" name="nume_even">
            <input id="button" type="submit"><br><br>
			
			<?php
            include('connection.php');
            if (isset($_POST["nume_even"])) {
                $nume_eveniment = $_POST['nume_even'];
            
                $sql = "SELECT organizatori.nume, organizatori.CNP, organizatori.adresa, organizatori.data_nasterii
            FROM organizatori
            INNER JOIN evenimente ON evenimente.id_organizator = organizatori.id_organizator
            WHERE evenimente.nume_even = '$nume_eveniment'
            ORDER BY organizatori.nume";
                $result = mysqli_query($con, $sql);
            
                if (!$result) {
                    echo 'Tabelul nu exista';
                } else {
                    echo "<table border='1'>
                        <tr>
                        <th>Nume</th>
                        <th>CNP</th>
                        <th>Adresa</th>
                        <th>Data nastere</th>
                        </tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nume'] . "</td>";
                        echo "<td>" . $row['CNP'] . "</td>";
                        echo "<td>" . $row['adresa'] . "</td>";
                        echo "<td>" . $row['data_nasterii'] . "</td>";
                        echo "</tr>";
            
                    }
                    echo "</table>";
                }
            
            }
            ?>
<br>



</div>
<a href="login.php" class="previous">&laquo; Logout</a>
    </body>
    </html>
    <style>

.topnav {
  background-color: #FFFFFF;
  overflow: hidden;
}
.collapsible-menu ul {
  list-style-type: none;
  padding: 0;
}

.topnav a {
  float: left;
  color: #1F0EB3;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #1F0EB3;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #1F0EB3;
  color: black;
}
</style>
