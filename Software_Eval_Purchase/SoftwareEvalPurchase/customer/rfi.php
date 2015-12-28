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
	  <div class="alert alert-danger">This page is incomplete</div>

      <div class="row">
      	  <h1>Requests for Information</h1>
          <p>View your active and past RFIs below.</p>
          <br>

		  <!-- Table -->

		  <!--  Active RFIs -->
          <h3>Active RFIs</h3>
		  <div class="table-responsive">
			  <table class="table table-striped">
			    <tr class="success">
			    	<th width="20%">Date/Time</th>
			    	<th width="20%">Expert</th>
			    	<th width="30%">Topic</th>
			    	<th width="10%">Duration</th>
			    	<th width="20%">Actions</th>
			    </tr>
			    <tr>
			    	<td>Jul 16, 2015<br>10:00 am PST</td>
			    	<td>Edwin Crown<br>ecrown@email.com<br>310-555-1212</td>
			    	<td>CRM Software - Salesforce.com</td>
			    	<td>1 hr</td>
			    	<td><a href="rfi-details.php?id=1">Details</a> | <a href="#rfi-cancel.php?id=1">Cancel</a></td>
			    </tr>
			    <tr>
			    	<td>Jul 18, 2015<br>11:30 am PST</td>
			    	<td>Maggie Crowley<br>mcrowley@email.com<br>650-555-1212</td>
			    	<td>Legacy Middleware replacement</td>
			    	<td>30 mins</td>
			    	<td><a href="rfi-details.php?id=2">Details</a> | <a href="#rfi-cancel.php?id=2">Cancel</a></td>
			    </tr>
			  </table>
		  </div>

		  <!--  Past RFIs -->
		  <h3>Past RFIs</h3>
		  <div class="table-responsive">
			  <table class="table table-striped">
			    <tr class="success">
			    	<th width="20%">Date/Time</th>
			    	<th width="20%">Expert</th>
			    	<th width="30%">Topic</th>
			    	<th width="10%">Duration</th>
			    	<th width="20%">Actions</th>
			    </tr>
			    <tr>
			    	<td>Jun 2, 2015<br>3:00 pm PST</td>
			    	<td>Edwin Crown<br>ecrown@email.com<br>310-555-1212</td>
			    	<td>CRM Software</td>
			    	<td>30 mins</td>
			    	<td><a href="rfi-details.php?id=3">Details</a></td>
			    </tr>

			    <tr>
			    	<td>May 5, 2015<br>2:30 pm PST</td>
			    	<td>Johnny Salgado<br>jsalgado@email.com<br>530-555-1212</td>
			    	<td>Master Data Management Software</td>
			    	<td>1 hr</td>
			    	<td><a href="rfi-details.php?id=4">Details</a></td>
			    </tr>

			    <tr>
			    	<td>Feb 26, 2015<br>9:00 am PST</td>
			    	<td>Chuck Solomon<br>csolomon@email.com<br>424-555-1212</td>
			    	<td>Discuss my company's ERP strategy</td>
			    	<td>1 hr</td>
			    	<td><a href="rfi-details.php?id=5">Details</a></td>
			    </tr>

			  </table>
		  </div>

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
	$("#menu_rfi").addClass("active");
	</script>

  </body>
</html>
