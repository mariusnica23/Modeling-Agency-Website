



<?php
include('connection.php');
include('functions.php');

if(isset($_POST["id_bilet"]) && isset($_POST["pret"]) && isset($_POST["nr_bilete"]))
{
    // preia datele din formular
    $IdBilete = $_POST['id_bilet'];
    $Pret = $_POST['pret'];
    $NrBilete= $_POST['nr_bilete'];
   
$update1="UPDATE bilete SET id_bilet='$IdBilete', pret='$Pret', nr_bilete='$NrBilete' WHERE bilete.id_bilet='$IdBilete'";
$result1 = mysqli_query($con,$update1);
if ($result1) {
echo "Schimbare cu succes!";
} else {
echo "Eroare";
}
}

if(isset($_POST["id_participare"]) && isset($_POST["id_model"]) && isset($_POST["id_eveniment"]) )
{
    $IdParticipare = $_POST['id_participare'];
    $IdModel = $_POST['id_model'];
    $IdEveniment= $_POST['id_eveniment'];
   
    $update2="UPDATE participari SET id_model='$IdModel', id_eveniment='$IdEveniment' WHERE participari.id_participare='$IdParticipare'";
    $result2 = mysqli_query($con,$update2);
    if ($result2) {
        echo "Schimbare cu ucces!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">
       
        <a href="add_user.php"><i class="Contact">Adaugare Fotomodel</a>
        <a class="active" href="updateb.php" >Updateaza</a>
        <a href="delete.php">Stergere eveniment sau Eliminare Fotomodel</a>
        <a href="simple.php">Detalii Modele și evenimente</a>
        <a href="simple2.php">Afisare organizatori</a>
        
       
    
</div>
<div id="box">
<form method="post">
			<p>
				<label>Schimbați numărul si prețul biletelor (se introduce id-ul): </label> 
				<input id="text" type="int" name="id_bilet">
			</p>
      <p>
				<label>Pret bilete nou: </label> 
				<input id="text" type="int" name="pret">
			</p>
      <p>
				<label>Numar bilete nou: </label> 
				<input id="text" type="int" name="nr_bilete">
			</p>

			<input id="button" type="submit" value="Schimba"><br><br>
      </form>
      <form method="post">
      <p>
				<label>Schimbați participările(se introduce id-ul): </label> 
				<input id="text" type="int" name="id_participare">
			</p>
      <p>
				<label>Id Model nou: </label> 
				<input id="text" type="int" name="id_model">
			</p>
      <p>
				<label>Id eveniment nou: </label> 
				<input id="text" type="int" name="id_eveniment">
			</p>
			<input id="button" type="submit" value="Schimba"><br><br>
		</form>
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

