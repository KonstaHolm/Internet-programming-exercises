<?php include "menu.php"; ?>
	<h2>Post</h2>
	<p>
		This is the Post.
		<form class="" action="show_post.php" method="post">
			<label for="en">Etunimi</label> <br>
			<input type="text" id="en" name="en" value="" placeholder="Etunimi" required> <br>
			<label for="sn">Sukunimi</label> <br>
			<input type="text" id="sn" name="sn" value="" placeholder="Sukunimi"> <br>
			<select class="" name="kieli">
				<option value="Suomi">Suomi</option>
				<option value="2">Ruotsi</option>
				<option value="Nor">Norja</option>
			</select>
			<br>
			<br>
			<textarea name="name" rows="8" cols="80"></textarea>
			<br>
			<input type="radio" name="gender" value="male"> Male <br>
			<input type="radio" name="gender" value="female"> Female <br>
			<input type="radio" name="gender" value="other"> Other <br>

			<br>
			<input type="checkbox" name="Vehicle1" value="Bike"> I have a bike <br>
			<input type="checkbox" name="Vehicle2" value="Car"> I have a car <br>
			<input type="checkbox" name="Vehicle3" value="Boat"> I have a boat <br>
			<input type="date" name="pvm" value="">
			<br>
			<label for="">Syntymävuosi</label><br>
			<input type="number" name="" value="" min="1900">
			<br>
			<input type="submit" name="" value="Save">
		</form>
	</p>
<?php include "footer.php"; ?>
