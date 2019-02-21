<?php $page=basename($_SERVER[ 'SCRIPT_NAME']); ?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple calculator for determining the original amount before 15% VAT was included.">
    <meta name="author" content="">
    <title>South African VAT Calculator | Excluding 15% VAT</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/custom.css">

    <?php include ( 'includes/header.php'); ?>

    <?php include ( 'includes/menu.php'); ?>

    <div id=wrap>
        <div class="container">
            <div class="jumbotron col-md-12" style="margin-top:30px">
                <h2 text align=center >Calculator for excluding 15% South African VAT</h2>
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
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest rand)" id="input">
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
                                    <td>VAT portion (15%)</td>
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

<!-- Initialize Popover -->
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>

</html>
