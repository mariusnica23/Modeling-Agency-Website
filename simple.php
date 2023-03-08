




<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">
       
        <a href="add_user.php"><i class="Contact">Adaugare Fotomodel</a>
        <a href="updateb.php" >Updateaza</a>
        <a href="delete.php">Stergere eveniment sau Eliminare Fotomodel</a>
        <a class="active" href="simple.php">Detalii Modele și evenimente</a>
        <a href="simple2.php">Afisare organizatori</a>
</div>
       
        <br>
			<br>
			<b>Afisati modelele care participa la:</b>
			<br>
			<br>
            <form method="post">
            <input id="text" type="text" name="nume_even">
            <input id="button" type="submit"><br><br>
			
			<?php
            include('connection.php');
            if (isset($_POST["nume_even"]))
                
            {
                $nume_eveniment= $_POST['nume_even'];

            
			$sql = "SELECT modele.id_model,nume,CNP,pret,adresa,data_nastere
				FROM modele
                JOIN participari
                ON participari.id_model = modele.id_model
                JOIN evenimente
                ON evenimente.id_eveniment = participari.id_eveniment
                WHERE evenimente.nume_even = '$nume_eveniment'
				ORDER BY modele.nume";
			$result = mysqli_query($con, $sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			} else {
                    echo "<table border='1'>
			<tr>

            <th>ID Model</th>
			<th>Nume </th>
			<th>CNP</th>
			<th>Pret</th>
            <th>Adresa</th>
            <th>Data nastere</th>

			
			
			</tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_model'] . "</td>";
                        echo "<td>" . $row['nume'] . "</td>";
                        echo "<td>" . $row['CNP'] . "</td>";
                        echo "<td>" . $row['pret'] . "</td>";
                        echo "<td>" . $row['adresa'] . "</td>";
                        echo "<td>" . $row['data_nastere'] . "</td>";

                        echo "</tr>";

                    }
                    echo "</table>";
                }
			
			}
		?>	
<br>

<b>Poate vreti sa vedeti si alte evenimente disponibile:</b>
<?php
include('connection.php');
$sql = "SELECT e.nume_even, e.data_eveniment, b.nr_bilete, b.pret, l.capacitate, l.adresa 
FROM evenimente e 
INNER JOIN bilete b ON (e.id_bilet=b.id_bilet) 
INNER JOIN locatii l ON (l.id_locatie=e.id_locatie)
ORDER BY e.id_eveniment";
$result2 = mysqli_query($con, $sql);

if (!$result2) {
    echo 'Tabelul nu exista';
} else {
    echo "<table border='1'>
<tr>
<th>Nume eveniment</th>
<th>Data eveniment</th>
<th>Numar bilete</th>
<th>Pret</th>
<th>Capacitate</th>
<th>Adresa</th>
</tr>";

    while($row = mysqli_fetch_array($result2)) {
        echo "<tr>";
        echo "<td>" . $row['nume_even'] . "</td>";
        echo "<td>" . $row['data_eveniment'] . "</td>";
        echo "<td>" . $row['nr_bilete'] . "</td>";
        echo "<td>" . $row['pret'] . "</td>";
        echo "<td>" . $row['capacitate'] . "</td>";
        echo "<td>" . $row['adresa'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
<br>
<b> Modelele sunt reprezentate de: </b>            
            <?php
            include('connection.php');
			$sql = "SELECT nume, CNP, adresa, data_nasterii, pret
				FROM manageri
				ORDER BY id_model";
			$result3 = mysqli_query($con, $sql);

			if ($result2 != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
                echo "<table  border='1'>
			<tr>
			<th>Nume</th>
			<th>CNP </th>
            <th>Adresa </th>
            <th>Data Nasterii </th>
            <th>Pret </th>
			
			
			</tr>";
			while($row = mysqli_fetch_array($result3))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['nume'] . "</td>";
			
			echo "<td>" . $row['CNP'] . "</td>";
            echo "<td>" . $row['adresa'] . "</td>";
            echo "<td>" . $row['data_nasterii'] . "</td>";
            echo "<td>" . $row['pret'] . "</td>";
			echo "</tr>";

			  }
			echo "</table>";
        }
			?>
			

				
			
		<!-- End Left Column -->
		
		
<br><br><br><br>
	<!-- End Page Content -->
	<!-- Begin Footer -->
	<div id="footer">
	</div>
	<!-- End Footer --></div>
   
<!-- End Container -->
<br><br><br>
</div>

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
