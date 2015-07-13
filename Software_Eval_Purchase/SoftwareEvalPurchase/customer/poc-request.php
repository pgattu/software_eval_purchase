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
          <h1>Initiate POC</h1>

		  <p>Complete the below form and we will contact vendors on your behalf to request trial software and license keys.  You will receive an email notification once everything is ready.</p>
		  <p>The products you have chosen for your POC are:</p>
		  <ul>
		  	<li>Tableau</li>
		  	<li>MicroStrategy</li>
		  	<li>QlikView</li>
		  </ul>

		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="name" class="col-sm-2 control-label">Name</label>
		    <div class="col-sm-10"><input type="text" class="form-control" id="name" placeholder="Name"></div>
		  </div>

		  <div class="form-group">
		    <label for="company" class="col-sm-2 control-label">Company</label>
		    <div class="col-sm-10"><input type="text" class="form-control" id="company" placeholder="Company"></div>
		  </div>

		  <div class="form-group">
		    <label for="address" class="col-sm-2 control-label">Address</label>
		    <div class="col-sm-10"><input type="text" class="form-control" id="address" placeholder="Address"></div>
		  </div>

		  <div class="form-group">
		    <label for="phone" class="col-sm-2 control-label">Phone</label>
		    <div class="col-sm-10"><input type="tel" class="form-control" id="phone" placeholder="Phone"></div>
		  </div>

		  <div class="form-group">
		    <label for="email" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10"><input type="email" class="form-control" id="email" placeholder="Email"></div>
		  </div>

		  <div class="form-group">
		    <label for="start-date" class="col-sm-2 control-label">Eval. Start Date</label>
		    <div class="col-sm-10"><input type="datetime" class="form-control" id="start-date" placeholder="Eval. Start Date"></div>
		  </div>

		  <div class="form-group">
		    <label for="end-date" class="col-sm-2 control-label">Eval. End Date</label>
		    <div class="col-sm-10"><input type="datetime" class="form-control" id="end-date" placeholder="Eval. End Date"></div>
		  </div>

		  <div class="form-group">
		    <label for="note" class="col-sm-2 control-label">Note to Vendors</label>
		    <div class="col-sm-10"><textarea class="form-control" id="note" placeholder="Note to Vendors"></textarea></div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <a href="poc-notify-vendors.php"><button type="button" class="btn btn-lg btn-default">Notify Vendors</button></a>
		    </div>
		  </div>
  		</form>

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
	$("#menu_poc").addClass("active");
	</script>

  </body>
</html>
