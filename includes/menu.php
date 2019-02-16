<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="https://www.vatcalculator.co.za">VAT Calculator</a>
</div>

<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li <?php if ($page=='index.php' ) { ?>class="active"
            <?php } ?>><a href="index.php">Helpful VAT information</a></li>
        <li <?php if ($page=='add_vat.php' ) { ?>class="active"
            <?php } ?>><a href="add_vat.php">Add VAT <span class="label label-info">Calculator</a></li>
        <li <?php if ($page=='exclude_vat.php' ) { ?>class="active"
            <?php } ?>><a href="exclude_vat.php">Exclude VAT <span class="label label-info">Calculator</a></a></li>
        <li><a href="mailto:webmaster@vatcalculator.co.za">Any suggestions?</a></li>
    </ul>
</div>
