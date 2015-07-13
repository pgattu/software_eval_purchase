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
      	  <h1>Consultation Details</h1>

      	  <!-- Consulation Summary -->
      	  <div class="row">
      	  	<div class="col-sm-2">Date/Time</div>
      	    <div class="col-sm-10">Jul 16, 2015 @ 10:00 am PST</div>
      	  </div>

      	  <div class="row">
      	  	<div class="col-sm-2">Expert</div>
      	    <div class="col-sm-10">Edwin Crown | ecrown@email.com | 310-555-1212</div>
      	  </div>

      	  <div class="row">
      	  	<div class="col-sm-2">Topic</div>
      	    <div class="col-sm-10">CRM Software - Salesforce.com</div>
      	  </div>

      	  <div class="row">
      	  	<div class="col-sm-2">Duration</div>
      	    <div class="col-sm-10">1 hr</div>
      	  </div>

      	  <br><br><br>

      	  <!-- Conversation History -->

      	  <div class="row">
      	  	<form class="form-horizontal">
				<div class="form-group">
					<label for="msg" class="col-sm-2 control-label">Make a Note</label>
					<div class="col-sm-6"><textarea class="form-control" id="msg"></textarea></div>
					<div class="col-sm-2">
						<label>
						<input type="radio" name="visibility" id="internal" value="internal" checked>
						Internal only
						</label>

						<label>
						<input type="radio" name="visibility" id="public" value="public">
						Internal and External
						</label>
					</div>
					<div class="col-sm-2"><button type="button" class="btn btn-lg btn-default">Post</button></div>
				</div>
			</form>
      	  </div>
      	  <br><br><br>

      	  <div class="row">
			<div class="well well-lg">
				<img class="img img-responsive pull-right" alt="You" src="/images/you.jpg" width="70">
				<div class="pull-right"><a href="#edit-post.php">Edit</a> | <a href="#delete-post.php">Delete</a></div>&nbsp;&nbsp;
				<em>You | Jul 18, 2015 @ 1:09 pm PST | Visibility: Internal and External</em><br><br>
				Edwin,<br><br>
				Thank you very much for all the information.  My company is concerned about storing customer data in the cloud.  Can Salesforce.com be setup to run from my company's data center?
			</div>
		  </div>
		  <br><br>

      	  <div class="row">
			<div class="well well-lg" style="background-color: #f2dede">
				<img class="img img-responsive pull-right" alt="You" src="/images/you.jpg" width="70">
				<div class="pull-right"><a href="#edit-post.php">Edit</a> | <a href="#delete-post.php">Delete</a></div>&nbsp;&nbsp;
				<em>You | Jul 17, 2015 @ 11:52 am PST | Visibility: Internal only</em><br><br>
				Reviewed the information sent by Edwin Crown.  Based on internal meetings, customer data security is a very high priority.  Hence a public cloud offering is not acceptable to our company.
			</div>
		  </div>
		  <br><br>

		  <div class="row">
			<div class="well well-lg">
				<img class="img img-responsive pull-right" alt="Edwin Crown" src="/images/expert-bill-gates.jpg" width="70">
				<em>Edwin Crown | Jul 16, 2015 @ 6:04 pm PST</em><br><br>
				Enjoyed our chat today.  I think you are on the right track.<br><br>
				This hyperlink explains a Salesforce.com strategy for a company like yours: <a href="http://www.salesforce.com/company/news-press/press-releases/2014/04/140402.jsp">http://www.salesforce.com/company/news-press/press-releases/2014/04/140402.jsp</a><br><br>
				And here's the Word document I mentioned: <a href="#">Salesforce Strategy.docx</a>
			</div>
		  </div>
		  <br><br>



      </div> <!--  end master row -->
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
