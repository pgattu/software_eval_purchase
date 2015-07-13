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

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>

          <h1>App Development</h1>
          <p>Select one of of the below sub-categories to view matching products.</p>

		    <div class="input-group">
		      <input type="text" class="form-control" placeholder="Search...">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button">Go!</button>
		      </span>
		    </div><!-- /input-group -->

		  <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h3>Relational DB</h3>
              <p>Oracle, Microsoft SQL Server, IBM DB2, etc.</p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h3>NoSQL Database</h3>
              <p>Cassandra, Couchbase, HBase, MongoDB, etc.</p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h3>Middleware</h3>
              <p>Oracle Fusion, IBM WebSphere, Redhat JBoss, etc.</p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h3>IDEs</h3>
              <p>Integrated Development Tools: JDeveloper, IntelliJ, Microsoft Visual Studio, etc.</p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h3>ETL</h3>
              <p>Extract, Transform and Load: Informatica, Warehouse Builder, etc.</p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h3>BI</h3>
              <p>Business Intelligence: Tableau, Qlikview, MicroStrategy, etc.</p>
              <p><a class="btn btn-default" href="prods-bi.php" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
 
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="research.php" class="list-group-item list-group-item-success">Software Category</a>
            <a href="#" class="list-group-item">Desktop Apps</a>
            <a href="subcat-bus-apps.php" class="list-group-item">Business Apps</a>
            <a href="subcat-app-dev.php" class="list-group-item active">App Development</a>
            <a href="#" class="list-group-item">Infrastructure Management</a>
            <a href="#" class="list-group-item">Hardware</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>

	  <div class="alert alert-danger">To Do: Add Advanced Search</div>

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
