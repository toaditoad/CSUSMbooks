<?php
function content($connection) {
	$offerid = '';
	$title = '';
	$author = '';
	$edition = '';
	$isbn = '';
	$category = '';
	$condition = '';
	$expDate = '';
	$notes = '';
	$price = '';
	$imagePath = '';
	if(isset($_SESSION['sellerid']) && isset($_SESSION['sellerfirstname'])) {
		$sellerId = $_SESSION['sellerid'];
		$sellerFirstname = $_SESSION['sellerfirstname'];
	}
	
	if(isset($_POST['submit'])) {
		if (isset($_POST['offerid'])) {
			$offerid = $_POST['offerid'];
		}
		else {
			$offerid = '';
		}
		$title = $_POST['title'];
		$author = $_POST['author'];
		$edition = $_POST['edition'];
		$isbn = $_POST['isbn'];
		$category = $_POST['category'];
		$condition = $_POST['condition'];
		$expDate = $_POST['expdate'];
		$notes = $_POST['notes'];
		$price = $_POST['price'];
		
		$isbn = str_replace("-", "", $isbn);
		
		$postDate = date("Y-m-d");
		if(empty($expDate)) {
			$exp = mktime(0,0,0,date("m"),date("d")+14,date("Y"));
			$expDate = date("Y-m-d", $exp);
		}
		
		require_once("lib/upload_file.php");
		
		if(empty($title) || empty($author) || empty($isbn) || empty($price) 
		|| !preg_match('/^.{2,}$/', $title) 
		|| !preg_match('/^.{2,}$/', $author) 
		|| !preg_match('/^[0-9]([-| ]?[0-9]){9,12}$/', $isbn) 
		|| !preg_match('/^[0-9]{1,4}\.[0-9]{2}$/', $price)) {
			echo "<h1>Post new book offer</h1>";
			echo "<p class=\"error\">Please check your input!</p>";
			require_once("postOfferForm.php");
		}
		else {
			if ($offerid != '') {
				$sqlstring = "UPDATE OFFER SET `Title`='$title', `Author`='$author', `Edition`='$edition', `ISBN`='$isbn', `ConditionId`=$condition, `CategoryId`=$category, `Price`='$price', `SellerId`=$sellerId, `PostDate`='$postDate', `ExpDate`='$expDate', `ImagePath`='$imagePath', `Notes`='$notes' WHERE `OfferId` = $offerid";
				$modify = true;
			}
			else {
				$sqlstring = "INSERT INTO OFFER (`Title`, `Author`, `Edition`, `ISBN`, `ConditionId`, `CategoryId`, `Price`, `SellerId`, `PostDate`, `ExpDate`, `ImagePath`, `Notes`) VALUES ('$title', '$author', '$edition', '$isbn', $condition, $category, '$price', $sellerId, '$postDate', '$expDate', '$imagePath', '$notes')";
				$modify = false;
			}
			
			if (!mysqli_query($connection,$sqlstring)) {
				  die('Error: ' . mysqli_error($connection));
			}
			else {
				if ($modify) {
					echo "<h1>Modify existing book offer</h1>";
					echo "<p>You succesfully modified an existing book offer.</p>";
				}
				else {
					echo "<h1>Post new book offer</h1>";
					echo "<p>You succesfully posted a new book offer.</p>";
					
				}				
			}
		}
	}
	
	else {
		if(isset($sellerId)) {
			?>
			<h1>Post new book offer</h1>
			<p><b><?= $sellerFirstname ?></b>, please fill in the following fields for posting a new book offer.</p>
			<?php 
			require_once("postOfferForm.php");
		}
		else {
			// toDo: redirect in order to login and going back to postOffer automatically
			?>
			<h1>Post new book offer</h1>
			<p>Please login first: <a href="login.php">Login</a></p>
			<?php
		}	
	}
}

include("layout.php");
?>