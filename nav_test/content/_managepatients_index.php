<?php
    $role_path='';
    switch($id_role)
    {
        case 1:
            $role_path = '../../pi_coordinator/managepatients/';
            break;
    }
?>
<div style="display:block; width:960px; margin: 0px auto;">
    <section class="summary" style="display:block; width:960px; background-color: #FFFFFF; float:left;">
            <?php
                switch($id_role)
                {
                    case 1:
                        include $role_path.'_index_top.php';
                        break;
                }
            ?>
    </section>
    <div style="clear:both;"></div>
    <section class="columns" style="display:block; width:960px; background-color: #FFFFFF; float:left; margin: 0px; padding: 0px">
        <section class="columns2" style="display:block; width:640px; background-color: #999999; float:left">
            <?php
                switch($id_role)
                {
                    case 1:
                        include $role_path.'_index_left.php';
                        break;
                }
            ?>
        </section>
        <section class="columns1" style="display:block; width:320px; background-color: #333333; float:left">
            <?php
                switch($id_role)
                {
                    case 1:
                        include $role_path.'_index_right.php';
                        break;
                }
            ?>
        </section>
    </section>
    <div style="clear:both;"></div>
</div>