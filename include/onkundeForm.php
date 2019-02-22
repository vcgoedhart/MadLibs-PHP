<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<div class="form-group">
		<label class="control-label col-sm-5" for="q1">Wat zou je graag willen kunnen?</label>
  		<div class="col-sm-7">
			<input type="text" name="q1" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[0]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q2">Met welke persoon kun je goed opschieten?</label>
  		<div class="col-sm-7">
			<input type="text" name="q2" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[1]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q3">Wat is je favoriete getal?</label>
  		<div class="col-sm-7">
			<input type="text" name="q3" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[2]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q4">Wat heb je altijd bij je als je op vakantie gaat?</label>
  		<div class="col-sm-7">
			<input type="text" name="q4" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[3]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q5">Wat is je beste persoonlijke eigenschap?</label>
  		<div class="col-sm-7">
			<input type="text" name="q5" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[4]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q6">Wat is je slechste persoonlijke eigenschap?</label>
  		<div class="col-sm-7">
			<input type="text" name="q6" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[5]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q7">Wat is het ergste dat je kan overkomen?</label>
  		<div class="col-sm-7">
			<input type="text" name="q7" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[6]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-7">
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
	</div>
</form>