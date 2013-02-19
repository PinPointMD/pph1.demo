<?php
    include 'data/roles.php';
    $id_role = 1;
    $id_tab = 1;
    $id_subtab = 0;
    include 'functions/roles_navigation2.php';
    include 'includes/head.php';
    include 'includes/header.php';
?>
<div style="width:480px; display:block; margin: 0px auto;">
<h2>Content</h2>
<ul>
    <li>Role #<?php echo $id_role; ?></li>
    <li>Selected Navigation Tab #<?php echo $id_tab; ?></li>
    <li>(Include a PHP file of content, within which if/then logic may pertain per Role #.)</li>
</ul>
</div>
<?php
    include 'includes/footer.php';
?>