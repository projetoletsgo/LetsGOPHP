<!-- example: http://blog.codeply.com/2015/04/09/5-material-design-examples-using-materializecss/-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lets GO - @ViewBag.Title</title>
		<!--Import Google Icon Font-->
	
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="~/Scripts/materialize/css/materialize.css">

		<!-- Website css -->
		<link rel="stylesheet" href="~/Content/css/styles.css">

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

    <body>
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="~/Scripts/materialize/js/materialize.min.js"></script>
        <?php include '_header.php';?>
		<main>
        
			@RenderBody()
		</main>
        <?php include '_footer.php';?>
        <script>
			$(".button-collapse").sideNav();
			$('.modal-trigger').leanModal();
			$('#aside').pushpin({ top:110, bottom:500 });
		</script>
    </body>
  </html>

			