<?php    
function content() {
?>	
	<h1>Modify existing book offer</h1>
	<p>Please fill in the following fields for modifying an existing book offer.</p>
	
	<form action="#">
		<table id="inputfields">
			<caption>modify existing book offer</caption>
			<tbody>
				<tr>
					<td><label for="booktitle">Book title:</label></td>
					<td><input type="text" value="Programming the World Wide Web" name="booktitle" id="booktitle" data-validation-pattern="^.{2,}$" data-validation-message="Please enter a book title." /></td>
				</tr>
				<tr>
					<td><label for="author">Author:</label></td>
					<td><input type="text" value="Robert W. Sebesta" name="author" id="author" data-validation-pattern="^.{2,}$" data-validation-message="Please enter an author." /></td>
				</tr>
				<tr>
					<td><label for="edition">Edition:</label></td>
					<td><input type="text" value="7th" name="edition" id="edition" /></td>
				</tr>
				<tr>
					<td><label for="isbn">ISBN:</label></td>
					<td><input type="text" value="978-0132665810" name="isbn" id="isbn" data-validation-pattern="^[0-9]([-| ]?[0-9]){9,12}$" data-validation-message="Please enter an ISBN-10 or ISBN-13. Ex: 978-1-402-894-626" /></td>
				</tr>
				<tr>
					<td><label for="category">Category:</label></td>
					<td><select id="category">
						<option value="arts">Arts & Photography</option>
						<option selected="selected" value="business">Business & Investing</option>
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
						<option selected="selected" value="rarley-used">rarely used</option>
						<option value="bad">bad</option>
					</select></td>
				</tr>
				<tr>
					<td><label for="expdate">Expiration Date:</label></td>
					<td><input type="date" value="2013-03-30" name="expdate" id="expdate" /></td>
				</tr>
				<tr>
					<td><label for="note">Note:</label></td>
					<td><input type="text" value="This book was rarely used in CIS444 and is still in good condition." name="note" id="note" /></td>
				</tr>
				<tr>
					<td><label for="price">Price:</label></td>
					<td><input type="text" value="25.00" name="price" id="price" data-validation-pattern="^[0-9]{1,}\.[0-9]{2}$" data-validation-message="Please enter a price. Ex: 12.00" /></td>
				</tr>
				<tr>
					<td><label for="picture">Picture:</label></td>
					<td><input type="file" name="picture" id="picture" /></td>
				</tr>
			</tbody>
		</table>
		<div class="submitbar">
		<input type="submit" name="submit" id="submit" value="save modification" />
		</div>
	</form>
<?php
}

include("config.php");
include("layout.php");

?>