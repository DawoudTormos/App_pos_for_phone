








<?php include("includes/a_config.php");$CURRENT_PAGE = "Index";?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
    <link rel="stylesheet" href="./public/style.css">

</head>
<body>

<?php include("includes/design-top.php");?>
<?php// include("includes/navigation.php");?>




<br><br>

<form>
  <div class="form-group" style="display:flex; flex-direction:column; align-items: center;justify-content:center">
    <label class ="h4" for="exampleInputEmail1">Enter Barcode or id</label>
	<br>
    <input id="bar" type="number" class=" col-md-6 col-sm-9 col-10 form-control">
    <br>
	<button id="submit" class="btn btn-dark">Submit</button>
  </div>
 </form>


<br><br>





<div class="d-flex flex-direction-column justify-content-center align-items-center" id="main-content">
<table class="col-md-6 col-sm-9 col-10 ">
  <thead>
    <tr>
      <th>ID
      <th>Product Name
      <th>quantity
      <th>cost price
      <th>retail price

  </thead>
  <tbody id ="table">
  

   
  </tbody>
</table>
</div>

<script src="./public/jquery.min.js"></script>
	<script src="./public/script.js"></script>
<?php include("includes/footer.php");?>

</body>
</html>