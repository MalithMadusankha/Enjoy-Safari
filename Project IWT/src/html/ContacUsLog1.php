<?php include('inc/header.php'); ?>
	<br><br>
	<!-- Contact form -->
	<h1 style="margin-left: 5px; color: white">    Your Massage </h1> 
		<div class="formAll">
				<form class="fAll" action="/action_page.php" target="blank">
					<label style="color:white" class="fAll" for="fname">  Name : </label><br>
					<input class="formInput" type="text" id="fname" name="fname" placeholder="John"><br><br>
					<label style="color:white" class="fAll" for="pemail"> Email : </label><br>
					<input class="inputE" type="email" id="pemail" email="pemail" placeholder="john@gmail.com"><br><br>
					<label style="color:white" class="fAll" for="state"> Are you a foreigner ?</label><br>
					<select class="formInput inputE"  id="state" name="state">
						<option value="Yes"> Yes </option>
						<option value="No"> No </option>
					</select><br>
					<p class="fAll" style="color:white"> Type your Massage :</p>
					<textarea class="textArea" name="massage" rows="10" cols="30"> How can I help you </textarea> <br>
					
				<br>
				<input class="fSubmit button" type="submit" class = "button" onclick = "alert('Your Submit is Completed')" value="SUBMIT"> <br>
			</form>
		</div>
 	<!-- End Of Form-->			
<?php include('inc/footer.php'); ?>