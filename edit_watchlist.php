<?php

include 'includes/header.php';

?>

<div class="jumbotron">

<form action="charts.php" method="POST">

	<div class="form-group">
		<label for="tickers">Enter your tickers</label>
		<textarea class="form-control" rows="3" cols="20" name="tickers"></textarea>
	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn-lg btn-primary" name="submit">Show me the charts</button>
	</div>

</form>

</div>