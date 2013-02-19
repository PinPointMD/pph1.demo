README file for nav_test

by Jeffrey Hartmann 2013.02.19

This documentation is subject to change.


A. DATA/ROLES.PHP

In lieu of a relational database such as MySQL, the data behind the navigation
comes from data/roles.php.

This file contains a series of arrays within arrays concerning a user's role as
well as the navigation structure associated with each role.

The roles are mostly numbered according to the numbering displayed on
views/demo/index.php:

0 = Patient
1 = PI Coordinator
2 = Patient Registrar
3 = Nurse / Medical Assistant
4 = Physician
5 = Call Center Manager
6 = Call Center Agent
7 = Basic User
8 = Admin
9 = Shared

Whereas, arrays by default begin their indexes with 0 instead of 1, many of
these arrays within arrays may begin with an empty array or other empty value in
their first index.

Thus, when the time comes for coders to assign a page a tab or subtab value,
they can match ids and tabs according to the sequence that they see without
worrying about "offsetting" too much (so that the first tab is matched with a 1
instead of a zero, the fifth tab is matched with a 5 instead of a 4, and so on).

Most of our attention is centered on these array areas:

roles/header/topnav/left = the main top navigation:

    a_href = hyperlink path per tab.

    a_text = the displayed text on the tab; this text is also lowercased,
    underscored and prefixed elsewhere in the code to generate related ids for
    certain dynamically rendered HTML elements.

    subnav = an array of subnavigation hrefs and texts, associated with each top
    tab.

roles/header/topnav/right/usermenu = basic user profile information, which,
like $id_role and its related information, otherwise would be retrieved per
login through a database, stored into session variables and displayed when
called:*

    dept = the user's location/department

    name = the user's name (more accurately, how the user may prefer to be
    addressed, either first name or salutation ("Dr.") plus last name

    title = the user's title (more likely but not always the role name)

    * A filename for the user's photo could be added here later.

After whatever may be required for a php page is coded first (e.g.
"session start"), the "data/roles.php" file should be immediately included on
whatever page requires this navigation structure.


B. PARAMETERS

On each page, after the "data/roles.php" file is included, the following 3
parameters are required to "id" the page and drive the navigation structure:

    $id_role    = the selected user role for this page, beginning with 0 (a rare
    exception for avoiding 0 indexes, in case the Patient role requires a
    special structure). The $id_role doubles as the index integer for the main
    roles array. As in the other arrays, the code would call the array index
    integers rather than the 'id'-named indexes.

    $id_tab     = the selected index of the top navigation (its "active" tab),
    beginning with 1

    $id_subtab  = the selected index of the sub navigation (its "active" tab),
    beginning with 1

Ideally a unique combination of these three parameters should "id" a page.


C. FUNCTIONS/ROLES_NAV.PHP

Not so much a PHP function as an included PHP script in general, this file
builds strings and other variable which would be called later into other parts
of the page, espcially other included files such as "includes/_header.php". So
variables would be created and populated here (akin to a Controller with or
without a Model), to be called by included headers, content, footers and other
partial files (akin to Views).

Among other things, this file:

    - limits whatever it calls to whatever belongs to the $id_role as
    populated on a given page.

    - dynamically adds the "Navon" class only for the specifically populated
    $id_tab.

    - dynamically adds the "active" class only for the specifically
    populated $id_subtab.

On each page, after the three key parameters are declared and populated, the
"functions/roles_nav.php" file should be immediately included.


D. PAGE EXAMPLE

For all the pages included in this directory, the ones named "overview.php"
provide the best representations of how a page might look once it is coded for
all of the "includes" it requires:

    <?php
        // "session start" stuff, etc.
        include '../../data/roles.php';
        $id_role = 5;
        $id_tab = 3;
        $id_subtab = 1;
        include '../../functions/roles_nav.php';
        include '../../includes/_head.php';
        include '../../includes/_header.php';
        include '../../content/_engagement_overview.php';
        include '../../includes/_footer.php';
    ?>

Upon implementation, your file-pathing ("../") may vary.


E. CONTENT and Related Files

The content directory is where files containing templated HTML (within 'body'
tags) and PHP code common to multiple situations are stored, to be included
between header and footer files on a page.

Many of these files may rely on the $id_role variable to recode some sections
and widgets of a page per the peculiarities of a role.

Some of these sections and widgets in turn may be stored in a role's directory.

One section of a content file could look like this:

        <section class="columns2"
            style="display:block; width:640px; background-color: #999999; float:left">
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

...wherein a subsection built to be twice as big as another section could be
further split into two 320-px columns by another included file -- e.g.
"_columns_2.php" -- which may in turn include other role-specific files and
widgets.

This functionality is best demonstrated in the following 4 URLs, as currently
coded, with "mock" sections swapped out per role:

    [domain]/nav_test/callc_manager/engagement/overview.php
    [domain]/nav_test/physician/engagement/overview.php
    [domain]/nav_test/nurse_ma/engagement/overview.php
    [domain]/nav_test/pi_coordinator/engagement/overview.php


F. UNFINISHED BUSINESS

- Besides databases, converting the arrays into an object-oriented structure
might be a manageable option.
-- class Role...;
--- either
---- class Physician extends Role...;
---- class PICoordinator extends Role...;
--- or
---- $objPhysician = new Role...;

- We may need an agreement re naming conventions.

- We may need an agreement re directory structure.