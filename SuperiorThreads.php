<?php
include "DatabaseConnection.php";
$query = "Select * from SuperiorThreads";

?>
<!Doctype html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" type="text/css" href="QuiltSass/CSS/SuperiorThreadsDisplay.css">
</head>
<body>
  <header class = "jumbotron col-lg-12">
    <img src = "Pics/logo.png" >
    <b>Superior Threads</b></header>
  <?php
  if($stmt = $con->query($query)){
    while ($row = $stmt->fetch_assoc()){
    echo '
    <div class = "media col-6">
    <img class="mr-3" src= '.$row["Picture"].' alt="dark grey" width="125px" height="125px">'.
      '<div class= "media-body">'.
      '<h3><strong><em>'.$row["Color_Name"].'</em></strong></h3>'.
        '<div class="row"><p class ="col"><strong>Color Number: '.$row["Color_Number"].
        '</strong><br/> Size: '.$row["Size"].
        '<br/> Cone Size: '.$row["Cone_Size"].
        '</p><p class = "col"><strong>Quantity: '.$row["Quantity"].
        '</strong><br/> Type: '.$row["Type"].
        '<br/> Product: '.$row["Product_Name"].'</p>
        </div>
      </div>
    </div>
    <br/>';
  }
}
$stmt->close();
?>
</body>
</html>
