<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Damilola Ogunmoye [dami@ogunmoye.com]">
	<title>Logo Generator</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 	<link href='https://fonts.googleapis.com/css?family=Cabin|Archivo+Narrow|Play|Pacifico|Roboto+Condensed|Montserrat|Noto+Sans|Lobster|Fjalla+One|Josefin+Sans|Signika|Ubuntu+Condensed|Maven+Pro|Exo+2|Karla|Exo|Dancing+Script|Righteous|Chewy|Courgette' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.4.1/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.4.1/css/themes/default.min.css"/>
	<link rel="stylesheet" href="../public/css/app.css">
</head>
<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Logo Generator <i class="fa fa-paper-plane"></i></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li <?php echo ($_SERVER['REQUEST_URI'] == '/') ? ' class="active"': '';  ?> ><a href="/">Home</a></li>
                  <li <?php echo ($_SERVER['REQUEST_URI'] == '/docs.php') ? ' class="active"': '';  ?> ><a href="./docs.php">Docs</a></li>
                  <li <?php echo ($_SERVER['REQUEST_URI'] == '/contact.php') ? ' class="active"': '';  ?> ><a href="./contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          
