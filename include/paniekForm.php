<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<div class="form-group">
		<label class="control-label col-sm-5" for="q1">Welk dier zou je nooit als huisdier willen hebben?</label>
  		<div class="col-sm-7">
			<input type="text" name="q1" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[0]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q2">Welk persoon is het belangrijkste in je leven?</label>
  		<div class="col-sm-7">
			<input type="text" name="q2" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[1]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q3">In welk land zou je graag willen wonen?</label>
  		<div class="col-sm-7">
			<input type="text" name="q3" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[2]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q4">Wat doe je als je je verveelt?</label>
  		<div class="col-sm-7">
			<input type="text" name="q4" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[3]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q5">Met welk speelgoed speelde je als kind het meest?</label>
  		<div class="col-sm-7">
			<input type="text" name="q5" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[4]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q6">Bij welke docent spijbel je het liefst?</label>
  		<div class="col-sm-7">
			<input type="text" name="q6" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[5]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q7">Als je €100.000,- had. Wat zou je dan kopen?</label>
  		<div class="col-sm-7">
			<input type="text" name="q7" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[6]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-5"  for="q8">Wat is je favoriete bezigheid</label>
  		<div class="col-sm-7">
			<input type="text" name="q8" class="form-control"> <span style="color: red;"> * <?php echo $errMsg[7]; ?></span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-7">
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
	</div>
</form>