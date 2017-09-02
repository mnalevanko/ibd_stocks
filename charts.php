<?php

include 'includes/header.php';

?>

<?php

$msg = '';

if (isset($_POST['submit'])) {
	
	$tickers = $_POST['tickers'];
	// var_dump($tickers);

	if (strlen($tickers) > 0) {
		
		$tickers_arr = explode(" ", $tickers);
		$_SESSION['tickers_arr'] = $tickers_arr;
		// echo 'Co obsahuje SESSION?';
		// var_dump($_SESSION['tickers_arr']);
		$index = 0;
		
	} else {
		$msg = 'An error occured. Please try edit your watchlist once again.';
	}

}

?>


<div class="container text-center">

	<?php
	
		if(empty($_POST['tickers'])) {
			
			header('Location: edit_watchlist.php');
		}
	
	?>
	
	<p id="tickers" class="hidden"><?php echo $_POST['tickers']; ?></p>

	<h1 class="hidden" id="symbol">YY</h1>

	<button id="daily" type="button" class="btn btn-default">Daily</button>
	<button id="weekly" type="button" class="btn btn-primary active">Weekly</button>


	<div id="graf">
		<!-- <iframe id="iframe" frameborder="0" style="width:960px; height:400px;" src="http://research.investors.com/ibdchartswp.aspx?cht=pvc&type=weekly&symbol=YELP"></iframe> -->
	</div>

	<button type="button" style="width:150px;" id="previous"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
	<button type="button" style="width:150px;" id="next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
			
</div>

<script>

var tickers = document.getElementById("tickers").innerHTML.split(" ");
var index = 0;
var arr_length = tickers.length; 
var active = "weekly";
var current_ticker = tickers[index];
var url1 = 'http://research.investors.com/ibdchartswp.aspx?cht=pvc&type=';
var url2 = '&symbol=';
var iframe_html = url1 + active + url2 + current_ticker.toUpperCase();

document.getElementById("graf").innerHTML = '<iframe id="iframe" frameborder="0" style="width:960px; height:400px;" src=' + iframe_html + '></iframe>';

document.getElementById("daily").onclick = function() {
	
	if (active === "weekly") {
		document.getElementById("daily").classList.add("active");
		document.getElementById("daily").classList.add("btn-primary");
		document.getElementById("weekly").classList.remove("btn-primary");
		document.getElementById("weekly").classList.remove("active");
		document.getElementById("weekly").classList.add("btn-default");
		
		active = "daily";
		
		url = url1 + active + url2 + current_ticker.toUpperCase();
		document.getElementById("iframe").src = url;
	};
	
}

document.getElementById("weekly").onclick = function() {
	if (active === "daily") {
		document.getElementById("weekly").classList.add("active");
		document.getElementById("weekly").classList.add("btn-primary");
		document.getElementById("daily").classList.remove("btn-primary");
		document.getElementById("daily").classList.remove("active");
		document.getElementById("daily").classList.add("btn-default");
		
		active = "weekly";
		
		url = url1 + active + url2 + current_ticker.toUpperCase();
		document.getElementById("iframe").src = url;
	};
}
	

document.getElementById("previous").onclick = function() {
	
	if (index > 0) {
		index -= 1;
		current_ticker = tickers[index];
		iframe_html = url1 + active + url2 + current_ticker.toUpperCase();
		document.getElementById("graf").innerHTML = '<iframe id="iframe" frameborder="0" style="width:960px; height:400px;" src=' + iframe_html + '></iframe>';
	};
}

document.getElementById("next").onclick = function() {
	
	if (index +1 < arr_length) {
		index += 1;
		current_ticker = tickers[index];
		iframe_html = url1 + active + url2 + current_ticker.toUpperCase();
		document.getElementById("graf").innerHTML = '<iframe id="iframe" frameborder="0" style="width:960px; height:400px;" src=' + iframe_html + '></iframe>';
	};
}
	
</script>