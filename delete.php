

<?php
include('connection.php');
include('functions.php');
	
	if(isset($_POST["id_eveniment"]))  //se verifica id-ul din link
	{
		$IdEveniment = $_POST["id_eveniment"]; //aici se pune 
		
		$delete1 = "DELETE FROM `evenimente` WHERE id_eveniment= '$IdEveniment'";
		$result = mysqli_query($con,$delete1);
		
		 if ($result) 
            echo "Succes ati sters un eveniment!";
        else
            echo 'Eroare!';
            
	}

  if(isset($_POST["id_model"]))  //se verifica id-ul din link
	{
		$IdModel = $_POST["id_model"]; //aici se pune 
		
		$delete2 = "DELETE FROM `modele` WHERE id_model= '$IdModel'";
		$result = mysqli_query($con,$delete2);
		
		 if ($result) 
            echo "Succes ati sters un model!";
        else
            echo 'Eroare!';
            
	}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">
       
        <a href="add_user.php"><i class="Contact">Adaugare Fotomodel</a>
        <a href="updateb.php" >Updateaza</a>
        <a class="active" href="delete.php">Stergere eveniment sau Eliminare Fotomodel</a>
        <a href="simple.php">Detalii Modele și evenimente</a>
        <a href="simple2.php">Afisare organizatori</a>

    
</div>
<div id="box">
<form method="post">
			<p>
				<label>Stergere Eveniment: </label> 
				<input id="text" type="int" name="id_eveniment">
			</p>
      <input id="button" type="submit" value="Stergere Eveniment"><br><br>
      <form method="post">
			<p>
				<label>Stergere Fotomodel: </label> 
				<input id="text" type="int" name="id_model">
			</p>
			<input id="button" type="submit" value="Stergere Fotomodel"><br><br>
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
