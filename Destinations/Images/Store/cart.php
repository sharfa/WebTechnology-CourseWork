
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {//While adding products to the shopping cart, the following switch case will be executed
						// to store selected items information into the session
	case "add":
		if(!empty($_POST["quantity"])) {
			
			$productByCode = $db_handle->runQuery("SELECT * FROM items WHERE code='" . $_GET["code"] . "'");
			//associative arrays =>;use named keys that you assign to them
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				
				if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>



<HTML>
<HEAD>
<TITLE>Shopping Cart</TITLE>
<link href="cartstyle.css" type="text/css" rel="stylesheet" />
<link rel="StyleSheet" type="text/css" href="DestinationsNav.css"/>

<style>

header, footer {
    
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
</style>

</HEAD>
<BODY>

<body>


    
<div class="container">

<header>
<ul id="ul1">
  <li><a class="active" href="../Homepage/HomePage.html">Home</a></li>
  <li class="dropdown">
    <a href="../AboutUs/TravelGirl.html" class="dropbtn">About Us</a>
    <div class="dropdown-content">
      <a href="../AboutUs/CVDinithi.html">Dinithi Wickramaratne</a>
      <a href="../AboutUs/CV-Shehani.html">Shehani Perera</a>
      <a href="../AboutUs/CVAfra.html">Afra Raheem</a>
      <a href="../AboutUs/CV-Sharfa.html">Sharfa Nasser</a>
      <a href="../AboutUs/CV-Thamashi.html">Thamashi Kumarasinghe</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="#" class="dropbtn">Destinations</a>
    <div class="dropdown-content">
      <a href="../Destinations/France.html">France</a>
      <a href="../Destinations/England.html">England</a>
      <a href="../Destinations/Italy.html">Italy</a>
      <a href="../Destinations/Singapore.html">Singapore</a>
      <a href="../Destinations/Malaysia.html">Malaysia</a>
    </div>
  </li>


  <li class="dropdown">
    <a href="#" class="dropbtn">Our store</a>
    <div class="dropdown-content">
      <a href="products1.php">Souvenir</a>
      <a href="products2.php">Books</a>
      <a href="products3.php">Accessories</a>
    </div>
  </li>

  <li><a class="active" href="../ContactUs/ContactUsForm.html">Contact us</a></li>
</ul>

<h1 id = "heading">Capture the Moment</h1>
	
</header>

<article>


<div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a></div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Price</strong></th>
<th><strong>Action</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){//everytime the 'add to cart' button is clicked the details will be stored in an associative array
	//in the SESSION variable
		?>
				<tr>
				<td><strong><?php echo $item["name"]; ?></strong></td>
				<td><?php echo $item["code"]; ?></td>
				<td><?php echo $item["quantity"]; ?></td>
				<td align=right><?php echo "$".$item["price"]; ?></td>
				<td><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);//calculates the total price
		}
		?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
</tr>
</tbody>
</table>		
  <?php
}
?>
</div>

<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM items ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){//value of the current element is assigned to $value 
		//assign the current element's key to the $key variable on each iteration.
	?>
		<div class="product-item">
		<!--Displaying the items by retrieving data from the database-->
			<form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>" style="width:300px;height:500px;"></div>
			<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" />
			<input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
			}
	}
	?>
</div>
</BODY>
</HTML>
</article>

<footer>Copyright © Dinithi Wickramaratne</footer>

</div>

</body>
</html>