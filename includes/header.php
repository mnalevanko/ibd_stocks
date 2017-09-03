<!DOCTYPE html>
<html>
	<head>
		<meta lang="en">
		<title>IBD Charts</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">IBD Charts</a>
				</div>
				
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="edit_watchlist.php">Edit watchlist</a></li>
					<li><a href="charts.php">Charts</a></li>				
					
					<form class="navbar-form navbar-left" method="POST" action="charts.php?symbol=single">
						<div class="form-group">
							<input type="text" class="form-control" name="tickers">						
						</div>
							<button type="submit" class="btn btn-primary">Quick chart</button>
						
					</form>

					
				</ul>
		</nav>
		
		<div class="container">
