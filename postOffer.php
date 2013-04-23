<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Get more for your old books!</title>
		<link rel="stylesheet" media="screen" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/styles.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
	</head>
	<body>

	<div id="border">
		<?php    
			require_once("header.php");
		?>	
		<div id="contentarea">
			<?php    
				require_once("searchbar.php");
			?>
			<div id="navigation">
				<h1>Categories</h1>
				
				<ul>
					<li><a href="#">Arts & Photography</a></li>
					<li><a href="#">Business & Investing</a></li>
					<li><a href="#">Computers & Technology</a></li>
					<li><a href="#">Education & Reference</a></li>
					<li><a href="#">Medical</a></li>
					<li><a href="#">Professional & Technical</a></li>
					<li><a href="#">Science & Math</a></li>
				</ul>

			</div>
			
			<div id="content">
				<h1>Post new book offer</h1>
				<p>Please fill in the following fields for posting a new book offer.</p>
				
				<form action="#">
					<table id="inputfields">
						<caption>post new book</caption>
						<tbody>
							<tr>
								<td><label for="booktitle">Book title:</label></td>
								<td><input type="text" name="booktitle" id="booktitle" data-validation-pattern="^.{2,}$" data-validation-message="Please enter a book title." /></td>
							</tr>
							<tr>
								<td><label for="author">Author:</label></td>
								<td><input type="text" name="author" id="author" data-validation-pattern="^.{2,}$" data-validation-message="Please enter an author." /></td>
							</tr>
							<tr>
								<td><label for="edition">Edition:</label></td>
								<td><input type="text" name="edition" id="edition" /></td>
							</tr>
							<tr>
								<td><label for="isbn">ISBN:</label></td>
								<td><input type="text" name="isbn" id="isbn" data-validation-pattern="^[0-9]([-| ]?[0-9]){9,12}$" data-validation-message="Please enter an ISBN-10 or ISBN-13. Ex: 978-1-402-894-626" /></td>
							</tr>
							<tr>
								<td><label for="category">Category:</label></td>
								<td><select id="category">
									<option value="arts">Arts & Photography</option>
									<option value="business">Business & Investing</option>
									<option value="computer">Computers & Technology</option>
									<option value="education">Education & Reference</option>
									<option value="medical">Medical</option>
									<option value="professional">Professional & Technical</option>
									<option value="science">Science & Math</option>
								</select></td>
							</tr>
							<tr>
								<td><label for="condition">Condition:</label></td>
								<td><select id="condition">
									<option value="good">good</option>
									<option value="bad">bad</option>
								</select></td>
							</tr>
							<tr>
								<td><label for="expdate">Expiration Date:</label></td>
								<td><input type="date" name="expdate" id="expdate" /></td>
							</tr>
							<tr>
								<td><label for="note">Note:</label></td>
								<td><input type="text" name="note" id="note" /></td>
							</tr>
							<tr>
								<td><label for="price">Price:</label></td>
								<td><input type="text" name="price" id="price" data-validation-pattern="^[0-9]{1,}\.[0-9]{2}$" data-validation-message="Please enter a price. Ex: 12.00" /></td>
							</tr>
							<tr>
								<td><label for="picture">Picture:</label></td>
								<td><input type="file" name="picture" id="picture" /></td>
							</tr>
						</tbody>
					</table>
					<div class="submitbar">
					<input type="submit" name="submit" id="submit" value="post new book offer" />
					</div>
				</form>
			</div>
		</div>
		<?php    
			require_once("footer.php");
		?>		
	</div>
	
	</body>
</html>