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
          <h1>MicroStrategy <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></h1>
		  <p><a href="rfi-request.php"><button type="button" class="btn btn-default">Request Info from Vendor</button></a> | <a href="consult-request.php?topic=Business Intelligence Tool - MicroStrategy"><button type="button" class="btn btn-default">Talk to an Expert</button></a></p>

          <hr>
		  <h3 id="about">About the Company</h3>
		  <p>MicroStrategy Incorporated is a provider of enterprise-ready analytics, mobile, and security software platforms. The MicroStrategy Analytics Platform provides organizations to analyze vast amounts of data and distribute actionable business insight throughout an enterprise through two offerings: MicroStrategy Analytics Platform and MicroStrategy Analytics Desktop. The Company’s MicroStrategy Analytics Platform delivers reports and dashboards, and provides users to conduct ad hoc analysis and share insights anywhere, anytime, through mobile devices or the Web. The MicroStrategy Analytics Platform is integrated with MicroStrategy Analytics Desktop, a standalone desktop tool that provides business users to analyze and understand their data. The Company’s services consists of various services lines, including MicroStrategy technology services, MicroStrategy professional services and MicroStrategy education services.</p>
		  <p><a href="http://www.microstrategy.com">http://www.microstrategy.com</a></p>

          <hr>
		  <h3 id="product-components">Product Suite and Components</h3>
		  <p>Explain the MicroStrategy product suite and its various components</p>
		  <p>MicroStrategy 10 enables analytics of all data - whether stored in relational database, NoSQL database, Hadoop datastore, or file system.</p>

          <hr>
		  <h3 id="architecture">High-level Product Architecture</h3>
		  <p>High-level architecture of the product.  Include a picture if available.</p>
		  <p><img src="http://innovacons.com/wp/wp-content/uploads/2013/04/mstr-architecture-4-e1365324288126.png" alt="microstrategy product architecture" class="img-responsive"></p>

          <hr>
		  <h3 id="scalability">Scalability</h3>
		  <p>MicroStrategy is highly scalable using commodity hardware that is clustered as a workgroup within MicroStrategy Admin Console.  A single server with dual-core CPU and 4 GB RAM can support up to 50 concurrent users.</p>

		  <hr>
		  <h3 id="mobile">Mobile</h3>
		  <p>MicroStrategy Mobile platform provides rich visualizations for tablet and phone users.  Android, iOS and Blackberry are supported.</p>

          <hr>
		  <h3 id="plugins">Plugins</h3>
		  <p>Information about plugins available for this product.</p>

          <hr>
		  <h3 id="skillsets">Skillset Required</h3>
		  <p>Helps IT teams determine whether Java, .NET, or other team skills are necessary to work with this product.</p>

          <hr>
		  <h3 id="licensing">Licensing Model</h3>
		  <p>MicroStrategy software is licensed by CPU cores of the server.</p>

          <hr>
		  <h3 id="reviews">Customer Reviews</h3>
		  <p><strong><em>Andy from Boston: Awesome product!</em></strong><br>
		  <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><br>
		  Our users love it.  Implementation was smooth.
		  </p>

		  <p><strong><em>Jennifer from San Francisco: Too many problems</em></strong><br>
		  <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><br>
		  So many problems implementing it.  After two years of tinkering, we are still unsatisfied with this product.
		  </p>

        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-success active">MicroStrategy</a>
            <a href="#about" class="list-group-item">About the Company</a>
            <a href="#product-components" class="list-group-item">Product Suite and Components</a>
            <a href="#architecture" class="list-group-item">High-level Product Architecture</a>
            <a href="#scalability" class="list-group-item">Scalability</a>
            <a href="#mobile" class="list-group-item">Mobile</a>
            <a href="#plugins" class="list-group-item">Plugins</a>
            <a href="#skillsets" class="list-group-item">Skillsets Required</a>
            <a href="#licensing" class="list-group-item">Licensing Model</a>
            <a href="#reviews" class="list-group-item">Customer Reviews</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

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
