<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Architektur - Immobilien</title>
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
	<link href="_/css/bgu_ai.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home">

          <?php include "_/components/php/header.php"; ?>

   <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Kontaktformular</h4>
						<h5>Wir freuen uns über Ihre Nachricht</h5>
                        <p>
						Unser Team steht Ihnen für Ihre Anfrage gerne persönlich zur Verfügung. Alternativ können Sie das folgende Kontaktformular nutzen. Wir werden uns so bald wie möglich um Ihr Anliegen kümmern.
						</p>
                        
						<div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="E-Mail*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nachricht*"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-md">Absenden</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <address>

                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>

                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->


          <?php include "_/components/php/footer.php"; ?>
    <script src="_/js/bootstrap.min.js"></script>    
	<script src="_/js/main.min.js"></script>
	

</body>

</html>
