<!DOCTYPE html>

<html>
  
<head>
    
<meta charset="utf-8">
<title>Reception Avis</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">  
body {
  font-family: "Avenir Next";
}
li {
  list-style: none;
}
.header {
  background-color: navy;
  color: white;
  height: 60px;
     font-size: 29px;
    text-align:center; 
    padding-top:10px;
  }
  
.main table {
   width:50%;
   margin-left: 250px;
   margin-bottom: 900px;
 margin-top: 10px;
   border-collapse: collapse;


}

.main tr,td {
    height: 50px;
  border-bottom: 1px solid #ddd;
  
}
.main th {
background-color: red;
  color: white;
  
}
.msg{
  
  background-color: #e4e9ed;
    font-family: Arial, Helvetica, sans-serif;
}

.emt{
  background-color:#d1e0ed;
  color: black;

    font-family: Arial, Helvetica, sans-serif;

}
.date{
   background-color:#e3f2fc;
    font-family: Arial, Helvetica, sans-serif;
}
.pj{
   background-color:#f0f0f0;
  color: black;

    font-family: Arial, Helvetica, sans-serif;

}

.titre{background-color: #d7ecfa;}
.footer {
  text-align:center; 
  right: 0px;
  bottom:0px;
  color:#FFF;
  width: 100%;
    height: 50px;
  background-color: navy;
  color: white;
  font-size:22px;
}
  
  
</style>

 
 </head>
 
 <body >
<div class='header'>
Espace Professeurs
</div>
<h2 style='color:#064970;'><strong><center><u> <i>BOITE DE RECEPTION: </i></u></center></strong> </h2>

<div class='row'> 
 <div class='col'> 
  </div>
  <div class='col-md-2'>
 <button type='button' class='btn btn-outline-transparent' style='float: right; margin-bottom: 20px; ' data-toggle='modal' data-target='#exampleModalCenter'>
 <a href='./interface.php' style='color: blue'> <strong > Deconnexion  </strong> </a>               
</button>
</div>

</div>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

	<button type="button" class="btn btn-outline-secondary btn-lg"  data-toggle="modal" data-target="#exampleModalCenter"> <a href="./profileprof.php
" target="_parent">  BACK </a></button>


<div class="main">

<?php
 session_start();
 

$id=mysqli_connect("localhost","root","","DEPARTEMENT");

$cnx=$_SESSION['idcnx'];

$sql2="SELECT * from  Professeurs where  idcnx='$cnx'" ;

  
  $result =mysqli_query($id,$sql2);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$adresseElectronique=$row['adresseElectronique'];
  
$query=" SELECT * FROM Avis where destinataire !='Etudiants' ";
$result2 = mysqli_query($id,$query);


$i=0;

echo "<table>";
   echo "<th><center>Avis aux Professeurs:</center></th>";  

        
    while($row2= mysqli_fetch_row($result2))
    {
           echo "<tr>";

         echo "<td class='date'> "."<strong> Date avis: </strong>  $row2[8]"."</td>";
              echo "</tr>"; 
           echo "<tr>";
               
		echo "<td class='titre' align='center'> "."<strong> $row2[3] </strong>"."</td>";
      echo "</tr>"; 
       
      echo "<tr>";
         echo "<td class='emt'> "."<strong> Emetteur: </strong> $row2[4]"."</td>";
      echo "</tr>"; 
       
      echo "<tr>";
         echo "<td class='msg'> "." <strong> Message: </strong>  $row2[6] "."</td>";
            echo "</tr>"; 

	  echo "<tr>";
                $name[]= $row2[7];
         echo "<td class='pj'> "." <strong> Piece jointe: </strong> $row2[7]"."<br/>" ."<a href=\"fileavis.php?name2=$name[$i]\" >Download</a>"."</td>" ;
		
		$i++;
             
			 echo "</tr>"; 

		      echo "<tr>";       echo "</tr>";           
   
   }
	           echo "</table>";			  

?> 
 </div>


<div class="footer" style="position:fixed;">

     Faculté Polydisciplinaire de Taroudant - Hay El Mohammadi (Lastah) B.P : 271, 83 000 Taroudant<br>
     Tèl: 05 28 55 10 10 , Fax: 05 28 55 10 20  E-mail: FPTaroudant@univ-ibnzohr.ac.ma 
</div>
</body>
</html>