<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Goo.gl Generator</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
</head>
<body>
  <div id="form-main">
	  <div id="form-div">
		<form class="form" id="form1" method="post">
			<header>
				<h1>Goo.gl Generator</h1>
			</header>
			<p class="text">
			  	<textarea name="url" class="feedback-input" id="url" placeholder="Each line, a new url.."></textarea>
		    	<label class="error" for="url" id="url_error">Please enter url list</label>
		    </p>
			<div class="submit">
		       <input type="submit" value="GENERATE" class="button" id="button-red"/>
		       <div class="ease"></div>
		    </div>
			<div id='results'><ul></ul></div>
	    </form>
	  </div>
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script type="text/javascript" src="scripts/init.js"></script>
</body>
</html>
