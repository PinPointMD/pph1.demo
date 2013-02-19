<?php
    $role_path='';
    switch($id_role)
    {
        case 1:
            $role_path = '../../pi_coordinator/engagement/';
            break;
        case 3:
            $role_path = '../../nurse_ma/engagement/';
            break;
        case 4:
            $role_path = '../../physician/engagement/';
            break;
        case 5:
            $role_path = '../../callc_manager/engagement/';
            break;
    }
?>
<div style="display:block; width:960px; margin: 0px auto;">
    <section class="summary" style="display:block; width:960px; background-color: #FFFFFF; float:left;">
            <?php
                switch($id_role)
                {
                    case 1:
                        include $role_path.'_recent_activities.php';
                        break;
                    case 3:
                        include $role_path.'_calls_progress_team.php';
                        break;
                    case 4:
                        include $role_path.'_overviews_priorities_patientmonitoring.php';
                        break;
                    case 5:
                        include $role_path.'_calls_progress_team.php';
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
                        include $role_path.'_columns_2.php';
                        break;
                    case 3:
                        include $role_path.'_priorities_status_surveys.php';
                        break;
                    case 4:
                        include $role_path.'_orderby_status_surveys.php';
                        break;
                    case 5:
                        include $role_path.'_priorities_client_status_surveys.php';
                        break;
                }
            ?>
        </section>
        <section class="columns1" style="display:block; width:320px; background-color: #333333; float:left">
            <?php
                switch($id_role)
                {
                    case 1:
                        include $role_path.'_notifications.php';
                        include $role_path.'_monthly_usage.php';
                        break;
                    case 3:
                        include $role_path.'_my_reminders.php';
                        break;
                    case 4:
                        include $role_path.'_my_notifications.php';
                        break;
                    case 5:
                        include $role_path.'_my_reminders.php';
                        break;
                }
            ?>
        </section>
    </section>
    <div style="clear:both;"></div>
</div>