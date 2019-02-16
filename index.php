<?php $page=basename($_SERVER[ 'SCRIPT_NAME']); ?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple calculator for adding 15% VAT to an amount.">
    <meta name="author" content="">
    <title>Updated for 15% VAT | South African VAT Calculator | Adding and Subtracting 15% VAT</title>
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
                <strong>Update: This website is now secured with SSL</strong>
            </div>
            <!-- News and Updates pop-up end -->
            <div class="page-header">
                <h1>Helpful information <small>What is South African VAT all about?</small></h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">VAT explained</h3>
                        </div>
                        <div class="panel-body">
                            <p>VAT is the acronym for Value-added Tax. In essence it is the indirect tax on the consumption of goods and services in the South African economy.</p>
                            <p>Revenue is raised for government by requiring certain businesses to register and to charge VAT on the taxable supplies of goods and services.</p>
                            <a href="http://www.sars.gov.za/TaxTypes/VAT/Pages/default.aspx" class="btn btn-primary btn-sm" role="button" target="_blank">Official SARS definition</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Who should register for VAT?</h3>
                        </div>
                        <div class="panel-body">
                            <p>Any person that does business, may register his or her entity for VAT. Person in this case is not only limited to companies, but can be individuals, partnerships, companies and many other.</p>
                            <p>If your turnover exceeds R1 million per consecutive 12 month period, it becomes mandatory to register.</p>
                            <a href="http://www.sars.gov.za/ClientSegments/Businesses/My-Bus-and-Tax/Pages/Register-and-Deregister-for-VAT.aspx" class="btn btn-primary btn-sm" role="button" target="_blank">More on registering for VAT</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default hidden-xs hidden-sm">
                <div class="panel-body text-center">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- VAT Responsive Ads -->
                    <ins class="adsbygoogle"
                       style="display:block"
                       data-ad-client="ca-pub-0590369945323371"
                       data-ad-slot="5384268363"
                       data-ad-format="auto"
                       data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <!-- Adsense Desktop End -->
            <!-- Adsense Mobi Start -->
            <div class="panel panel-default hidden-md hidden-lg">
                <div class="panel-body text-center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- VAT - Mobi -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-0590369945323371" data-ad-slot="9694476574" data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <!-- Adsense Mobi End -->

            <div class="page-header">
                <h1>Downloadable Files <small>Guides and documents supplied by SARS</small></h1>
            </div>
            <ul class="list-group">
                <li class="list-group-item">Pocket Guide on the VAT rate increase on 1 April 2018
                    <a href="downloads/LAPD-VAT-G13%20-%20Pocket%20Guide%20on%20the%20VAT%20rate%20increase%20on%201%20April%202018.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
                <li class="list-group-item">Guide - VAT Vendors information <em>(aimed at all registered VAT entities)</em>
                    <a href="downloads/LAPD-VAT-G02%20-%20VAT%20404%20Guide%20for%20Vendors%20-%20External%20Guide.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
                <li class="list-group-item">Guide - Using VAT eFiling
                    <a href="downloads/GEN-ELEC-04-G01%20-%20Guide%20for%20Value%20Added%20Tax%20via%20eFiling%20-%20External%20Guide.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
                <li class="list-group-item">Form - Application for Registration for Value Added Tax
                    <a href="downloads/VAT101%20-%20Value%20Added%20Tax%20Registration%20Application%20-%20External%20form.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
            </ul>
            <div class="pull-right">
                <a href="add_vat.php" class="btn btn-primary btn-sm" role="button">Adding VAT calculator</a>
                <a href="exclude_vat.php" class="btn btn-primary btn-sm" role="button">Excluding VAT calculator</a>
                <a href="https://www.payecalculator.co.za" class="btn btn-primary btn-sm" role="button">PAYE Calculator <span class="label label-info">Updated for 2019!</a></a>
                <a href="http://www.sars.gov.za/Pages/Forms.aspx?pageid=C62;" class="btn btn-primary btn-sm" role="button" target="_blank">For more guides and forms visit SARS.org.za</a>
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

<!-- VAT calculation scripts -->
<script src="js/calculation15.js"></script>

<!-- jQuery Cookie remember https://github.com/js-cookie/js-cookie-->
<script src="js/js.cookie-1.5.1.min.js"></script>
<script>
    // When document is ready replaces the need for onload
    jQuery(function($) {

        // Grab your button (based on your posted html)
        $('.close').click(function(e) {

            // Do not perform default action when button is clicked
            e.preventDefault();

            /* If you just want the cookie for a session don't provide an expires
             Set the path as root, so the cookie will be valid across the whole site */
            $.cookie('alert-box', 'closed', {
                path: '/'
            }, {
                expires: 7
            });

        });

    });
</script>

<script>
    jQuery(function($) {

        // Check if alert has been closed
        if ($.cookie('alert-box') === 'closed') {

            $('.alert').hide();

        }

    });
</script>

<!-- Initialize Popover -->
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>

</html>
