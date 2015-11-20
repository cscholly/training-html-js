<?php $page=basename($_SERVER[ 'SCRIPT_NAME']); ?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple calculator for determining the original amount before VAT was included.">
    <meta name="author" content="">
    <title>Netherlands VAT Calculator | Excluding VAT</title>
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
   <!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56802018-2', 'auto');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <?php include ( 'includes/menu.php'); ?>
            <!--.nav-collapse -->
        </div>
    </nav>

    <div id=wrap>
        <div class="container">
            <div class="jumbotron" style="margin-top:30px">
                <h2>A basic calculator for excluding VAT | Netherlands</h2>
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
                                            <span class="input-group-addon">€</span>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="input">
                                        </div>
                                        <div style="margin-top:10px">
                                            <button type="submit" class="btn btn-default" onclick="exclVAT(); return false;">Remove VAT</button>
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
                                    <td>Amount including VAT</td>
                                    <td class="text-right"><span id=include_vat>0.00</span></td>
                                </tr>
                                <tr>
                                    <td>VAT portion (21%)</td>
                                    <td class="text-right"><span id=vat>0.00</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Amount excluding VAT</strong></td>
                                    <td class="text-right"><strong><span id=exclude_vat>0.00</span></strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- VAT - NL Leaderboard -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0590369945323371"
     data-ad-slot="6151717770"></ins>
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

<!-- Initialize Popover -->
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>

</html>