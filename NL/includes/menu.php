<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://www.vatcalculator.nl">BTW Calculator</a>
</div>

<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li <?php if ($page=='index.php' ) { ?>class="active"
            <?php } ?>><a href="index.php">Voeg BTW <span class="label label-info">Calculator</a></li>
        <li <?php if ($page=='exclude_vat.php' ) { ?>class="active"
            <?php } ?>><a href="exclude_vat.php">Verwijder BTW <span class="label label-info">Calculator</a></a></li>
        <li><a href="mailto:webmaster@vatcalculator.nl">Suggesties?</a></li>
    </ul>
</div>