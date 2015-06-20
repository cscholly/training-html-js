<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple calculator for adding VAT to an amount.">
    <meta name="author" content="">
    <title>South African VAT Calculator | Adding VAT</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/custom.css">

    <style>
        body {
            padding-top: 50px;
        }
        
        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
    </style>

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <?php include ( 'includes/menu.php'); ?>

            <!--.nav-collapse -->
        </div>
    </nav>

    <div id=wrap>
        <div class="container">

            <div class="page-header">
                <h1>Downloadable Files <small>Guides and documents supplied by SARS</small></h1>
            </div>
            <ul class="list-group">
                <li class="list-group-item">Guide - VAT Vendors information <em>(aimed at all registered VAT entities)</em>
                    <a href="downloads/LAPD-VAT-G02%20-%20VAT%20404%20Guide%20for%20Vendors%20-%20External%20Guide.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
                <li class="list-group-item">Guide - Using VAT eFiling
                    <a href="downloads/GEN-ELEC-04-G01%20-%20Guide%20for%20Value%20Added%20Tax%20via%20eFiling%20-%20External%20Guide.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
                <li class="list-group-item">Form - Application for Registration for Value Added Tax
                    <a href="downloads/VAT101%20-%20Application%20for%20Registration%20for%20Value%20Added%20Tax%20-%20External%20Form.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
            </ul>
            <div class="pull-right"><a href="http://www.sars.gov.za/Pages/Forms.aspx?pageid=C62;" class="btn btn-primary btn-sm" role="button" target="_blank">For more guides and forms visit SARS.org.za</a>
            </div>

            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- VAT - Leaderboard - Home -->
                    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-0590369945323371" data-ad-slot="4659918578"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
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
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557eccdd09b75a91" async="async"></script>

</body>

<!-- VAT calculation scripts -->
<script src="js/calculation.js"></script>

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

<!-- Google Analytics Start -->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-56802018-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- Google Analytics End -->

</html>