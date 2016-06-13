<!doctype html>
<html>
<head>
    <title>Let there be Light | <?= (isset($pageTitle) ? $pageTitle : ''); ?></title>
    <meta name="description" content="Let there be Light | <?= (isset($pageTitle) ? $pageTitle : ''); ?>"/>
    <meta charset="utf-8"/>
    <link href='https://fonts.googleapis.com/css?family=Asap:400,700italic,700,400italic|Montserrat:400,700'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../../web/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="../../web/css/bootstrap.min.css.map"/>
    <link type="text/css" rel="stylesheet" href="../../web/css/desktop.css"/>
    <?php
    if ($currentPage == "mobile") {
        ?>
        <link type="text/css" rel="stylesheet" href="../../web/css/style.css"/>
        <link type="text/css" rel="stylesheet" href="../../web/css/move.css"/>
        <?php
    }
    ?>
    <meta name="viewport" content="width=device-width,height=device-height,minimum-scale=1,maximum-scale=1"/>
</head>
<body>
<?= (isset($content) ? $content : ''); ?>
</body>
<script src="https://stud.hosted.hr.nl/0910958/light/js/jQuery_v2.2.2.js" lang="javascript"></script>
<script src="../../web/js/bootstrap.min.js" lang="javascript"></script>
<script src="../../web/js/hue.js" lang="javascript"> </script>

<?php
if ($currentPage == "home") {
    ?>
    <script src="../../web/js/modernizr-2.5.3.min.js" lang="javascript"></script>

    <script lang="javascript">
        var currentURL = document.URL;
        if (Modernizr.touch && "<?php if ($currentPage == "home") {
                echo true;
            } ?>") {
            window.location.replace(currentURL + "mobile");
        }
    </script>

    <?php
}

if ($currentPage == "mobile") {
    ?>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="../../web/js/jquery.mobile-1.4.2.min.js"></script>
    <script src="../../web/js/mobile.js" lang="javascript"></script>
    <script src="../../web/js/facebook.js" lang="javascript"></script>
    <?php
}
?>



</html>
