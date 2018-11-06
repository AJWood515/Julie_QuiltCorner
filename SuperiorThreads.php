<?php
include "DatabaseConnection.php";
$query = "Select * from SuperiorThreads";


/*if ($stmt = $con->query($query)) {
    //$stmt->execute();
  //  $stmt->bind_result($ID, $Product_Name, $Size, $Color_Number, $Color_Name, $Cone_Size, $Quantity, $Picture, $Type);
  }
   $json =array();
    $count = 0;
    echo"<table>
    <tr>
      <th>ID</th>
      <th>Product Name</th>
      <th>Size</th>
      <th>Color Number</th>
      <th>Color Name</th>
      <th>Cone Size</th>
      <th>Quantity</th>
      <th>Picture</th>
      <th>Type</th>
    </tr>";
   while ($stmt->fetch()) {
      echo printf("%s, %s\n, %s\n, %s\n, %s\n, %s\n, %s\n, %s\n, %s\n",$ID, $Product_Name, $Size, $Color_Number, $Color_Name, $Cone_Size, $Quantity, $Picture, $Type);*/
    /*  while ($row = $stmt->fetch_assoc()){

        echo "<tr><td>".$row["ID"].
        "</td><td>".$row["Product_Name"]."</td>".
        "<td>".$row["Size"]."</td>".
        "<td>".$row["Color_Number"]."</td>".
        "<td>".$row["Color_Name"]."</td>".
        "<td>".$row["Cone_Size"]."</td>".
        "<td>".$row["Quantity"]."</td>".
        "<td><img src= ".$row["Picture"].' alt="dark grey" width="150px" height="150px"></td>'.
        "<td>".$row["Type"]."</td></tr>";

        echo '
        <p class = "result">
        <img src= '.$row["Picture"].' alt="dark grey" width="150px" height="150px">'.
        '<span class= "id">ID: '.$row["ID"].'</span>'.
        '<br/> Product: '.$row["Product_Name"].
        '<br/> Size: '.$row["Size"].
        '<br/> Color Number: '.$row["Color_Number"].
        '<br/> Color Name: '.$row["Color_Name"].
        '<br/> Cone Size: '.$row["Cone_Size"].
        '<br/> Quantity: '.$row["Quantity"].
        '<br/> Type: '.$row["Type"].'

        </p>
        ';
      }*/
  //  $stmt->close();


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
    <div class = "media col-lg-6">
    <img class="mr-3" src= '.$row["Picture"].' alt="dark grey" width="150px" height="150px">'.
      '<div class= "media-body">'.
      '<h5>'.$row["Color_Name"].'</h5>'.
        '<div class="row"><p class ="col">Product: '.$row["Product_Name"].
        '<br/> Size: '.$row["Size"].
        '<br/> Color Number: '.$row["Color_Number"].
        '<br/> Cone Size: '.$row["Cone_Size"].
        '</p><p class = "col"><strong>Quantity: '.$row["Quantity"].
        '</strong><br/> Type: '.$row["Type"].
        '<br/>ID: '.$row["ID"].'</p>
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
