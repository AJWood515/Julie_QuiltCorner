<?php

include "DatabaseConnection.php";

$colorName="";
$product="";
$size=0;
$colorNumber=0;
$coneSize="";
$quantity=0;
$type="";

$colorNameErrMsg="";
$productErrMsg="";
$sizeErrMsg="";
$colorNumberErrMsg="";
$coneSizeErrMsg="";
$quantityErrMsg="";
$typeErrMsg="";
$validForm = false;

function validColorName(){
  global $colorName, $colorNameErrMsg, $validForm;
  if($colorName == ""){
    $colorNameErrMsg = "Name can't be empty";
    $validForm = false;
  }
  if(!preg_match ("/^[a-zA-Z\s]+$/",$colorName)){
    $colorNameErrMsg = "Name must only have letters and spaces.";
    $validForm = false;
  }
}
function validproduct(){
  global $product, $productErrMsg, $validForm;
  if($product == ""){
    $productErrMsg = "Product can't be empty";
    $validForm = false;
  }
  if(!preg_match ("/^[a-zA-Z\s]+$/",$product)){
    $colorNameErrMsg = "Name must only have letters and spaces.";
    $validForm = false;
  }
}
function validSize(){
  global $size, $sizeErrMsg, $validForm;
  if($size == ""){
    $sizeErrMsg = "Size can't be empty";
    $validForm = false;
  }
  if(is_nan($size)){
    $sizeErrMsg = "Size must conatin only numbers.";
    $validForm = false;
  }
}
function validColorNumber(){
  global $colorNumber, $colorNumberErrMsg, $validForm;
  if($colorNumber == ""){
    $colorNumberErrMsg = "Size can't be empty";
    $validForm = false;
  }
  if(is_nan($colorNumber)){
    $colorNumberErrMsg = "Color Numbers must conatin only numbers.";
    $validForm = false;
  }
}
function validConeSize(){
  global $coneSize, $coneSizeErrMsg, $validForm;
  if($coneSize == ""){
    $coneSizeErrMsg = "Cone size cant be empty.";
    $validForm = false;
  }
  if (is_nan($coneSize)){
    $coneSizeErrMsg = "Cone size must be a number.";
    $validForm = false;
  }
}
function validQuantity(){
  global $quantity, $quantityErrMsg, $validForm;
  if($quantity == ""){
    $quantityErrMsg = "Quantity cant be empty.";
    $validForm = false;
  }
  if (is_nan($quantity)){
    $quantityErrMsg = "Quantity must be a number.";
    $validForm = false;
  }
}
function validType(){
  global $type, $typeErrMsg, $validForm;
  if($type == ""){
    $typeNameErrMsg = "Name can't be empty";
    $validForm = false;
  }
  if(!preg_match ("/^[a-zA-Z\s]+$/",$type)){
    $typeErrMsg = "Name must only have letters and spaces.";
    $validForm = false;
  }
}
if( isset($_POST['submit'])){

  $colorName=$_POST['colorName'];
  $product=$_POST['product'];
  $size=$_POST['size'];
  $colorNumber=$_POST['colorNumber'];
  $coneSize=$_POST['coneSize'];
  $quantity=$_POST['quantity'];
  $type=$_POST['type'];
  $validForm= true;

  validColorName();
  validproduct();
  validSize();
  validColorNumber();
  validConeSize();
  validQuantity();
  validType();

  if($validForm){
    $sql = "INSERT INTO SuperiorThreads (Product_Name, Size, Color_Number, Color_Name, Cone_Size, Quantity, Picture, Type)
    VALUES ($product, $size, $colorNumber, $colorName, $coneSize, $quantity, $picture, $type)";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

  }

}

?>
<!Doctype html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" type="text/css" href="QuiltSass/CSS/SuperiorThreadsInsert.css">
</head>
<body>
  <header class = "jumbotron col-lg-12">
    <img src = "Pics/logo.png" >
    <b>Superior Threads</b>
  </header>

  <div class ="d-flex justify-content-center">
    <form method="post" class ="col-lg-8 " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class = "form-group row">
        <label for="colorName" class="col-sm-5 col-form-label d-flex justify-content-end">Color Name</label>
        <input type="text" class="form-control col-4" name = "colorName" id="colorName" placeholder="Color Name">
      </div>

      <div class = "form-group row">
        <label for="product" class="col-sm-5 col-form-label d-flex justify-content-end">Product</label>
        <input type="text" class="form-control col-4" name = "product" id="product" placeholder="Product">
      </div>

      <div class = "form-group row">
        <label for="size" class="col-sm-5 col-form-label d-flex justify-content-end">Size</label>
        <input type="number" class="form-control col-4" name = "size" id="size" placeholder="Size">
      </div>

      <div class = "form-group row">
        <label for="colorNumber" class="col-sm-5 col-form-label d-flex justify-content-end">Color Number</label>
        <input type="number" class="form-control col-4" name = "colorNumber" id="colorNumber" placeholder="Color Number">
      </div>

      <div class = "form-group row">
        <label for="coneSize" class="col-sm-5 col-form-label d-flex justify-content-end">Cone Size</label>
        <input type="text" class="form-control col-4" name = "coneSize" id="coneSize" placeholder="Cone Size">
      </div>

      <div class = "form-group row">
        <label for="quantity" class="col-sm-5 col-form-label d-flex justify-content-end">Quantity</label>
        <input type="number" class="form-control col-4" name = "quantity" id="quantity" placeholder="Quantity">
      </div>

      <div class = "form-group row">
        <label for="type" class="col-sm-5 col-form-label d-flex justify-content-end">Type</label>
        <input type="text" class="form-control col-4" name = "type" id="type" placeholder="Type">
      </div>

      <div class = "form-group row">
        <label for ="Picture" class="col-sm-5 col-form-label d-flex justify-content-end">Select image to upload:</label>
        <input type="file" class="form-control-file col-4" name="Picture" id="fileToUpload">
      </div>
      <div class="form-group row">
        <div class="col-12 d-flex justify-content-center">
          <button type="submit" value="Submit" class="btn btn-primary col-3">Submit</button>
          <button type="reset" value="Reset" class="btn btn-danger col-3 ">Reset</button>
        </div>
      </div>
    </form>
  </div>
</body>






</html>
