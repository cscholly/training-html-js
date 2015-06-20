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
            <?php include ('includes/menu.php'); ?>

            <!--.nav-collapse -->
        </div>
    </nav>

    <div id=wrap>
        <div class="container">

            <!-- News and Updates pop-up start-->
            <div class="alert alert-info alert-dismissible fade in" role="alert" style="margin-top:30px" ;>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Updated -</strong> Now you can calculate excluding amounts. <a href="exclude_vat.html" class="alert-link">Try it now!</a>
            </div>
            <!-- News and Updates pop-up end -->

            <div class="jumbotron" style="margin-top:30px">
                <h2>A basic calculator for adding South African VAT</h2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Enter amount</h3>
                        </div>
                        <div class="panel-body">
                            <form id="calcForm">
                                <div id="calcbox">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <div class="input-group">
                                            <span class="input-group-addon">R</span>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="input">
                                        </div>
                                        <div style="margin-top:10px">
                                            <button type="submit" class="btn btn-default" onclick="addVAT(); return false;">Add VAT</button>
                                            <button type="submit" class="btn btn-default" onclick="resetCalc(); return false;">Clear</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="addResult" class="panel panel-default">
                        <div class="panel-body">
                            <table class="table" style="margin-bottom: 5px;">
                                <tr>
                                    <td>Amount excluding VAT</td>
                                    <td class="text-right"><span id=exclude_vat>0.00</span></td>
                                </tr>
                                <tr>
                                    <td>VAT portion (14%)</td>
                                    <td class="text-right"><span id=vat>0.00</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Amount including VAT</strong></td>
                                    <td class="text-right"><strong><span id=include_vat>0.00</span></strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
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
            <div class="page-header">
                <h1>Helpful information <small>What is South African VAT all about?</small></h1>
            </div>
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Preparing for VAT</h3>
                        </div>
                        <div class="panel-body">
                            <p>Once you or your trading entity is registered for VAT, you must adhere to certain duties and take responsibility for, including VAT on your products and services.</p>
                            <p>Charge for and collect VAT as well as maintaining records related to all transactions.</p>
                            <a href="http://www.sars.gov.za/TaxTypes/VAT/Pages/Getting-ready-for-VAT.aspx" class="btn btn-primary btn-sm" role="button" target="_blank">Getting ready for VAT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wrap end -->

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <?php include ('includes/footer.php'); ?>
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