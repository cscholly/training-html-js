<?php $page=basename($_SERVER[ 'SCRIPT_NAME']); ?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our Privacy Policy at VAT Calculator South Africa.">
    <meta name="author" content="">
    <title>South African VAT Calculator | Our Privacy Policy</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/custom.css">

    <?php include ( 'includes/header.php'); ?>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <?php include ( 'includes/menu.php'); ?>
            <!--.nav-collapse -->
        </div>
    </nav>

    <div id=wrap>
        <div class="container">
            <!-- News and Updates pop-up start-->
            <div class="alert alert-info alert-dismissible fade in" role="alert" style="margin-top:30px" ;>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Update: This website is now secure (SSL)</strong>
            </div>
            <!-- News and Updates pop-up end -->
            <div class="page-header">
                <h1>Helpful information <small>What is South African VAT all about?</small></h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <p>hello world</p>
                </div>
            </div>
        </div>
    </div>
    <!-- wrap end -->

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <?php include ( 'includes/footer.php'); ?>
        </div>
    </footer>
    <!-- footer end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>


</html>
