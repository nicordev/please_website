<?php
$title = 'Please';

ob_start();
?>
<h1>Please</h1>
<ul>
    <li><a href="<?= ROUTE_CURRENT_WEEK ?>">What is the current week?</a></li>
</ul>
<?php
$content = ob_get_clean();

require __DIR__.'/../base.html.php';