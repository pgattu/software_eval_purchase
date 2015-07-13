<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Software Eval and Purchase</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->
	<!--  the below stylesheet is the custom theme for bootstrap from bootswatch -->
	<link href="/js/flatly/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/offcanvas.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.min.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php require_once "menu.php"; ?>

    <div class="container">

      <div class="row">
          <h1>Business Intelligence Tools</h1>

		  <!-- Table -->
		  <div class="table-responsive">
			  <table class="table table-striped">
			    <tr class="success">
			    	<th>Name</th>
			    	<th>Overview</th>
			    	<th>Target Business Size</th>
			    	<th>Free/Open-source?</th>
			    	<th class="text-center">Compare?</th>
			    	<th class="text-center">RFI?</th>
			    	<th class="text-center">POC?</th>
			    	<th class="text-center">Quote?</th>
			    </tr>
			    <tr>
			    	<td><a href="#">Tableau</a></td>
			    	<td>A fast-growing leader in data visualizations</td>
			    	<td>Small<br>Medium<br>Large</td>
			    	<td>No</td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    </tr>
			    <tr>
			    	<td><a href="#">Qlikview</a></td>
			    	<td>Ideal for dashboard presentation, cannot provide pixel-level reporting.</td>
			    	<td>Small<br>Medium</td>
			    	<td>No</td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    </tr>
			    <tr>
			    	<td><a href="prod-microstrategy.php">MicroStrategy</a></td>
			    	<td>Perform analytics on variety of data. Leading mobile solution.</td>
			    	<td>Medium<br>Large</td>
			    	<td>No</td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    </tr>
			    <tr>
			    	<td><a href="#">Pentaho</a></td>
			    	<td>Open-source, comprehensive platform for business analytics.</td>
			    	<td>Small<br>Medium<br>Large</td>
			    	<td>Yes</td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    	<td class="text-center"><input type="checkbox"></td>
			    </tr>
			    <tr>
			    	<td>&nbsp;</td>
			    	<td>&nbsp;</td>
			    	<td>&nbsp;</td>
			    	<td>&nbsp;</td>
			    	<td><a href="compare.php"><button type="button" class="btn btn-info">Compare</button></a></td>
			    	<td><a href="rfi-request.php"><button type="button" class="btn btn-info">Request Info</button></a></td>
			    	<td><a href="poc-request.php"><button type="button" class="btn btn-info">Initiate POC</button></a></td>
			    	<td><a href="#quote-request.php"><button type="button" class="btn btn-info">Quote</button></a></td>
			    </tr>
			  </table>
		  </div>

		  <p class="text-center">
		  	<a href="consult-request.php?topic=Business Intelligence Tools">
		  		<button type="button" class="btn btn-lg btn-default">Talk to an Expert</button>
		  	</a>
		  </p>
	  </div>
      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <script src="/js/offcanvas.js"></script>

	<!-- The below script highlights the menu selection -->
	<script>
	$("#menu_research").addClass("active");
	</script>

  </body>
</html>
