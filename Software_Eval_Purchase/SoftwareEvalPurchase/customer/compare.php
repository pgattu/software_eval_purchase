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
          <h1>Compare: Business Intelligence Tools</h1>

		  <!-- Table -->
		  <div class="table-responsive">
			  <table class="table table-striped">
			    <tr>
			    	<th>&nbsp;</th>
			    	<th class="success">Tableau</th>
			    	<th class="success">MicroStrategy</th>
			    	<th class="success">Pentaho</th>
			    </tr>
			    <tr>
			    	<th class="success">Capabilities</th>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    </tr>
			    <tr>
			    	<th class="success">High-Level Product Architecture</th>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    </tr>
			    <tr>
			    	<th class="success">Cluster Deployment</th>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    </tr>
			    <tr>
			    	<th class="success">Load Balancing</th>
			    	<td>Requires external hardware load balancer</td>
			    	<td>Built-in software load balancing</td>
			    	<td>Load balancing not available</td>
			    </tr>
			    <tr>
			    	<th class="success">Failover</th>
			    	<td>Yes</td>
			    	<td>Yes</td>
			    	<td>No</td>
			    </tr>
			    <tr>
			    	<th class="success">Operating Systems</th>
			    	<td>Linux, Windows</td>
			    	<td>Linux, Windows, Mac</td>
			    	<td>Linux</td>
			    </tr>
			    <tr>
			    	<th class="success">Plugins</th>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    </tr>
			    <tr>
			    	<th class="success">Licensing Model</th>
			    	<td>Named users</td>
			    	<td>CPU cores</td>
			    	<td>None</td>
			    </tr>
			    <tr>
			    	<th class="success">......</th>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    	<td>yada yada yada</td>
			    </tr>
			  </table>
		  </div>

		  <p class="text-center"><a href="consult-request.php"><button type="button" class="btn btn-lg btn-default">Talk to an Expert</button></a></p>
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
