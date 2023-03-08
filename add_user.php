<?php
session_start();
include('connection.php');
include('functions.php');

  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$nume = $_POST['nume'];
    $cnp = $_POST['CNP'];
		$pret = $_POST['pret'];	
    $adresa = $_POST['adresa'];
		$data_nastere = $_POST['data_nastere'];	
    

    $nume = mysqli_real_escape_string($con, $nume);
    $cnp = mysqli_real_escape_string($con, $cnp);
    $pret = mysqli_real_escape_string($con, $pret);
    $adresa = mysqli_real_escape_string($con, $adresa);
    $data_nastere = mysqli_real_escape_string($con, $data_nastere);

  

		if(!empty($nume) && !empty($cnp) && !empty($pret) && !empty($adresa) && !empty($data_nastere))
		{

      
      $query3 = "INSERT into modele (id_model,nume,CNP,pret, adresa, data_nastere) values (NULL,'$nume','$cnp','$pret','$adresa','$data_nastere')";
      $result3 = mysqli_query($con, $query3);

    
      if ($result3 === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: <br>" . mysqli_error($con);
      }

			die();
		}
    else
		{
			echo "Introdu ceva ok";
		}
	}


?>


<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">

    <a class="active" href="add_user.php"><i class="Contact">Adaugare Fotomodel</a>
        <a href="updateb.php" >Updateaza</a>
        <a href="delete.php">Stergere eveniment sau Eliminare Fotomodel</a>
        <a href="simple.php">Detalii Modele și evenimente</a>
        <a href="simple2.php">Afisare organizatori</a>

       
    
</div>
<div id="box">
	<h2>Introduceti datele pentru a adauga un fotomodel</h2> 
		
		<form method="post">
			<p>
				<label>Nume și Prenume: </label> 
				<input id="text" type="text" name="nume">
			</p>
      <p>
				<label>CNP: </label> 
				<input id="text" type="int" name="CNP">
			</p>
      <p>
				<label>Pret: </label> 
				<input id="text" type="int" name="pret">
			</p>
      <p>
				<label>Adresa: </label> 
				<input id="text" type="text" name="adresa">
			</p>

				<label>Data nasterii: </label> 
				<input id="text" type="text" name="data_nastere">
			</p>
			<input id="button" type="submit" value="Inscriere"><br><br>
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
