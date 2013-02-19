<?php
    include 'data/roles.php';
    $id_role = 1;
    $id_tab = 1;
    $id_subtab = 0;
    include 'functions/roles_navigation2.php';
    include 'includes/head.php';
    include 'includes/header.php';
?>
<h2>Content</h2>
<ul>
    <li>Role #</li>
    <li>Selected Navigation Tab #</li>
    <li>(Include a PHP file of content, within which if/then logic may pertain per Role #.)</li>
</ul>
<?php
    include 'includes/footer.php';
?>