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
          <h1>Consult an Expert</h1>

		  <p>Have a question about IT strategy, technologies or products?  Talk to one of our experts to answer your questions.</p>
		  <p>The cost of consulting one of our experts is <strong>$250 per hour</strong>.</p>

		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="about" class="col-sm-2 control-label">What is this about?</label>
		    <div class="col-sm-10"><textarea class="form-control" id="about" placeholder="What is this about?"><?php echo (isset($_GET['topic']))?$_GET['topic']:'';?></textarea></div>
		  </div>

		  <div class="form-group">
		    <label for="name" class="col-sm-2 control-label">Name</label>
		    <div class="col-sm-10"><input type="text" class="form-control" id="name" placeholder="Name"></div>
		  </div>

		  <div class="form-group">
		    <label for="company" class="col-sm-2 control-label">Company</label>
		    <div class="col-sm-10"><input type="text" class="form-control" id="company" placeholder="Company"></div>
		  </div>

		  <div class="form-group">
		    <label for="email" class="col-sm-2 control-label">Email address</label>
		    <div class="col-sm-10"><input type="email" class="form-control" id="email" placeholder="Email"></div>
		  </div>

		  <div class="form-group">
		    <label for="phone" class="col-sm-2 control-label">Phone</label>
		    <div class="col-sm-10"><input type="tel" class="form-control" id="phone" placeholder="Phone"></div>
		  </div>

		  <div class="form-group">
		    <label for="appt-date" class="col-sm-2 control-label">Appointment Date/Time</label>
		    <div class="col-sm-10"><input type="datetime" class="form-control" id="appt-date" placeholder="Preferred Appointment Time"></div>
		  </div>

		  <div class="form-group">
		    <label for="note" class="col-sm-2 control-label">Note to Expert</label>
		    <div class="col-sm-10"><textarea class="form-control" id="note" placeholder="Note to Expert"></textarea></div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <a href="#schedule"><button type="button" class="btn btn-lg btn-primary">Schedule Appointment</button></a>
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
	$("#menu_consult").addClass("active");
	</script>

  </body>
</html>
