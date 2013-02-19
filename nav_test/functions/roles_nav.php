<?php
    /*
     * This script relies in part on data/roles.php
     * (in lieu of a relational database e.g. MySQL)
     * as well as three parameter variables per page
     *
     * Include this script after the following variables
     * are populated on those pages:
     *
     * $id_role (profiles from data/roles.php, per role id)
     * $id_tab (main navigation belonging to selected role)
     * $id_subtab (subnavigation belonging to selected navigation)
     */

    // Access and clean up array variables
    $role_name = $roles[$id_role]['name'];
    $role_header = $roles[$id_role]['header'];
    $role_topnav = $role_header['topnav'];
    $role_topleft = $role_topnav['left'];
    $role_topright = $role_topnav['right'];
    $role_user = $role_topright['usermenu'];

    // Simply access these user values once (no looping, etc.).
    // Ordinarily, these would be populated into session variables
    // from a database via login
    $user_name = $role_user['name'];
    $user_dept = $role_user['dept'];
    $user_title = $role_user['title'];

    $subnav = "";
    // loop through nav
    $count_left = count($role_topleft);
    for ($i=1; $i<$count_left; $i++)
    {
        // top variables
        $left_href = $role_topleft[$i]['a_href'];
        $left_text = $role_topleft[$i]['a_text'];
        $left_subnav = $role_topleft[$i]['subnav'];
        $lcus_lefttext = str_replace(' ','_',strtolower($left_text));
        $id_topnav = 'top_'.$lcus_lefttext;
        $id_subnav = 'pph_'.$lcus_lefttext;


        if ($i==$id_tab)
        {
            $classNavon = ' class="Navon"';
            $styleVisible = 'visibility=visible;';
        } else {
            $classNavon = '';
            $styleVisible = 'visibility=hidden;display:none;';
        }

        $topline_line = "<li><a id=\"{$id_topnav}\"{$classNavon} href=\"{$left_href}\">{$left_text}</a></li>";
        $nav_topline.=$topline_line;

        $subnav_dl = "<dl id=\"{$id_subnav}\" style=\"{$styleVisible}\" class=\"tabs\">";
        // loop through subnav
        $count_subnav = count($left_subnav);
        for ($j=1; $j<$count_subnav; $j++)
        {
            // subnav variables
            $subnav_href = $left_subnav[$j]['a_href'];
            $subnav_text = $left_subnav[$j]['a_text'];
            $id_subnav_dd = $id_subnav.'_'.$j;

            // style currently active subtab
            if ($j==$id_subtab) {
                $classActive = ' class="active"';
            } else {
                $classActive = '';
            }

            // add only those subnav tabs which are related to a given nav tab
            if ($i==$id_tab){
                $subnav_dd = "<dd id=\"{$id_subnav_dd}\"{$classActive}><a href=\"{$subnav_href}\">{$subnav_text}</a></dd>";
            }
            $subnav_dds .= $subnav_dd;
        }

        $subnav_dl .= "{$subnav_dds}</dl>";
            $subnav_dds = "";
        $subnav .= $subnav_dl;
        $subnav_dl = "";
    }
?>
