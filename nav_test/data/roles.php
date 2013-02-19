<?php
    $roles = array(
        array(
            'id' => 0,
            'name' => 'Patient',
            'description' => 'The person whose health status we are caring for. Patient will access Patient Portal',
            'header' => array(),
        ),
        array(
            'id' => 1,
            'name' => 'PI Coordinator',
            'description' => 'Manages surveys and reminders for the organization. This person may have admin privilege.',
            'header' => array(
                'topnav' => array(
                    'left' => array(
                        array(), // 0 index
                        array(
                            'a_href' => '../../pi_coordinator/home/',
                            'a_text' => 'Home',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../../pi_coordinator/home/',
                                    'a_text' => 'Home',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => '../../pi_coordinator/laborders/',
                            'a_text' => 'Lab Orders',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../../pi_coordinator/laborders/',
                                    'a_text' => 'LO Home',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => '../../pi_coordinator/engagement/overview.php',
                            'a_text' => 'Patient Engagement',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../../pi_coordinator/engagement/overview.php',
                                    'a_text' => 'Overview',
                                ),
                                array (
                                    'a_href' => '../../pi_coordinator/engagement/population.php',
                                    'a_text' => 'Manage Population',
                                ),
                                array (
                                    'a_href' => '../../pi_coordinator/engagement/addnew.php',
                                    'a_text' => 'Add New +',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => '../../pi_coordinator/managepatients/',
                            'a_text' => 'Manage Patients',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../../pi_coordinator/managepatients/',
                                    'a_text' => 'MP Home',
                                ),
                            )
                        ),
                    ),
                    'right' => array(
                        'usermenu' => array(
                            'dept' => 'University Medical',
                            'name' => 'Rob',
                            'title' => 'PI Coordinator',
                        ),
                    ),
                ),
                'row' => '',
            ),
        ),
        array(
            'id' => 2,
            'name' => "Patient Registrar",
            'description' => "Manages patient information.",
            'header' => array(),
        ),
        array(
            'id' => 3,
            'name' => "Nurse/Medical Assistant",
            'description' => "Provides clinical follow-up with patients.",
            'header' => array(
                'topnav' => array(
                    'left' => array(
                        array(), // 0 index
                        array(
                            'a_href' => 'page1.php',
                            'a_text' => 'Home',
                            'subnav' => array(
                                array (),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '1',
                                    'a_text' => '1',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page2.php',
                            'a_text' => 'Lab Orders',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '2',
                                    'a_text' => '2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1a.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => '../../callc_manager/engagement/overview.php',
                            'a_text' => 'Patient Engagement',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../../nurse_ma/engagement/overview.php',
                                    'a_text' => 'Overview',
                                ),
                                array (
                                    'a_href' => '../populations/manage_populations.php',
                                    'a_text' => 'Manage Population',
                                ),
                                array (
                                    'a_href' => '../surveys/add_box.php',
                                    'a_text' => 'Add New +',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page4.php',
                            'a_text' => 'Manage Patients',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../patients/manage_patients.php',
                                    'a_text' => 'Tab1',
                                ),
                                array (
                                    'a_href' => '../patients/add_patient.php',
                                    'a_text' => 'Tab2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '../patients/patient_summary',
                                    'a_text' => 'Tab3',
                                ),
                            )
                        ),
                    ),
                    'right' => array(
                        'usermenu' => array(
                            'dept' => 'University Medical',
                            'name' => 'April',
                            'title' => 'Nurse/MA',
                        ),
                    ),
                ),
                'row' => '',
            ),
        ),
        array(
            'id' => 4,
            'name' => 'Physician',
            'description' => "The patient's physician.",
            'header' => array(
                'topnav' => array(
                    'left' => array(
                        array(), // 0 index
                        array(
                            'a_href' => 'page1.php',
                            'a_text' => 'Home',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '1',
                                    'a_text' => '1',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page2.php',
                            'a_text' => 'Lab Orders',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '2',
                                    'a_text' => '2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1a.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => '../../physician/engagement/overview.php',
                            'a_text' => 'Patient Engagement',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../../physician/engagement/overview.php',
                                    'a_text' => 'Overview',
                                ),
                                array (
                                    'a_href' => '../populations/manage_populations.php',
                                    'a_text' => 'Manage Population',
                                ),
                                array (
                                    'a_href' => '../surveys/add_box.php',
                                    'a_text' => 'Add New +',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page4.php',
                            'a_text' => 'Manage Patients',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../patients/manage_patients.php',
                                    'a_text' => 'Tab1',
                                ),
                                array (
                                    'a_href' => '../patients/add_patient.php',
                                    'a_text' => 'Tab2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '../patients/patient_summary',
                                    'a_text' => 'Tab3',
                                ),
                            )
                        ),
                    ),
                    'right' => array(
                        'usermenu' => array(
                            'dept' => 'University Medical',
                            'name' => 'Dr. Williams',
                            'title' => 'Physician',
                        ),
                    ),
                ),
                'row' => '',
            ),
        ),
        array(
            'id' => 5,
            'name' => "Call Center Manager" ,
            'description' => 'Leads patient contact team.',
            'header' => array(
                'topnav' => array(
                    'left' => array(
                        array(), // 0 index
                        array(
                            'a_href' => 'page1.php',
                            'a_text' => 'Home',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '1',
                                    'a_text' => '1',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page2.php',
                            'a_text' => 'Lab Orders',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '2',
                                    'a_text' => '2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1a.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => '../../callc_manager/engagement/overview.php',
                            'a_text' => 'Patient Engagement',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../../callc_manager/engagement/overview.php',
                                    'a_text' => 'Overview',
                                ),
                                array (
                                    'a_href' => '../populations/manage_populations.php',
                                    'a_text' => 'Manage Population',
                                ),
                                array (
                                    'a_href' => '../surveys/add_box.php',
                                    'a_text' => 'Add New +',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page4.php',
                            'a_text' => 'Manage Patients',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../patients/manage_patients.php',
                                    'a_text' => 'Tab1',
                                ),
                                array (
                                    'a_href' => '../patients/add_patient.php',
                                    'a_text' => 'Tab2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '../patients/patient_summary',
                                    'a_text' => 'Tab3',
                                ),
                            )
                        ),
                    ),
                    'right' => array(
                        'usermenu' => array(
                            'dept' => 'Respiratory Institute Call Center',
                            'name' => 'Jason',
                            'title' => 'Manager'
                        ),
                    ),
                ),
                'row' => '',
            ),
        ),
        array(
            'id' => 6,
            'name' => 'Call Center Agent',
            'description' => 'Manages patient information.',
            'header' => array(
                'topnav' => array(
                    'left' => array(
                        array(), // 0 index
                        array(
                            'a_href' => 'page1.php',
                            'a_text' => 'Home',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '1',
                                    'a_text' => '1',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page2.php',
                            'a_text' => 'Lab Orders',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '2',
                                    'a_text' => '2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1a.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page3.php',
                            'a_text' => 'Patient Engagement',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../engagement/coordinator.php',
                                    'a_text' => 'Overview',
                                ),
                                array (
                                    'a_href' => '../populations/manage_populations.php',
                                    'a_text' => 'Manage Population',
                                ),
                                array (
                                    'a_href' => '../surveys/add_box.php',
                                    'a_text' => 'Add New +',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page4.php',
                            'a_text' => 'Manage Patients',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../patients/manage_patients.php',
                                    'a_text' => 'Tab1',
                                ),
                                array (
                                    'a_href' => '../patients/add_patient.php',
                                    'a_text' => 'Tab2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '../patients/patient_summary',
                                    'a_text' => 'Tab3',
                                ),
                            )
                        ),
                    ),
                    'right' => array(
                        'usermenu' => array(
                            'dept' => 'TZAM',
                            'name' => 'Sam Zhang',
                            'title' => 'TBD',
                        ),
                    ),
                ),
                'row' => '',
            ),
        ),
        array(
            'id' => 7,
            'name' => 'Basic User',
            'description' => 'A lowest level user. A default role if no other permission was given.',
            'header' => array(
                'topnav' => array(
                    'left' => array(
                        array(), // 0 index
                        array(
                            'a_href' => 'page1.php',
                            'a_text' => 'Home',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '1',
                                    'a_text' => '1',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page2.php',
                            'a_text' => 'Lab Orders',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '2',
                                    'a_text' => '2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1a.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page3.php',
                            'a_text' => 'Patient Engagement',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../engagement/coordinator.php',
                                    'a_text' => 'Overview',
                                ),
                                array (
                                    'a_href' => '../populations/manage_populations.php',
                                    'a_text' => 'Manage Population',
                                ),
                                array (
                                    'a_href' => '../surveys/add_box.php',
                                    'a_text' => 'Add New +',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page4.php',
                            'a_text' => 'Manage Patients',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../patients/manage_patients.php',
                                    'a_text' => 'Tab1',
                                ),
                                array (
                                    'a_href' => '../patients/add_patient.php',
                                    'a_text' => 'Tab2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '../patients/patient_summary',
                                    'a_text' => 'Tab3',
                                ),
                            )
                        ),
                    ),
                    'right' => array(
                        'usermenu' => array(
                            'dept' => 'TZAM',
                            'name' => 'Sam Zhang',
                            'title' => 'TBD',
                        ),
                    ),
                ),
                'row' => '',
            ),
        ),
        array(
            'id' => 8,
            'name' => 'Admin',
            'description' => 'Top level adminstrator of the organization.',
            'header' => array(
                'topnav' => array(
                    'left' => array(
                        array(), // 0 index
                        array(
                            'a_href' => 'page1.php',
                            'a_text' => 'Home',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '1',
                                    'a_text' => '1',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page2.php',
                            'a_text' => 'Lab Orders',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '2',
                                    'a_text' => '2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1a.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page3.php',
                            'a_text' => 'Patient Engagement',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../engagement/coordinator.php',
                                    'a_text' => 'Overview',
                                ),
                                array (
                                    'a_href' => '../populations/manage_populations.php',
                                    'a_text' => 'Manage Population',
                                ),
                                array (
                                    'a_href' => '../surveys/add_box.php',
                                    'a_text' => 'Add New +',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                            ),
                        ),
                        array(
                            'a_href' => 'page4.php',
                            'a_text' => 'Manage Patients',
                            'subnav' => array(
                                array (), // 0 index
                                array (
                                    'a_href' => '../patients/manage_patients.php',
                                    'a_text' => 'Tab1',
                                ),
                                array (
                                    'a_href' => '../patients/add_patient.php',
                                    'a_text' => 'Tab2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page1.php',
                                    'a_text' => 'Test 1',
                                ),
                                array (
                                    'a_href' => '../jh_test/page2.php',
                                    'a_text' => 'Test 2',
                                ),
                                array (
                                    'a_href' => '../jh_test/page3.php',
                                    'a_text' => 'Test 3',
                                ),
                                array (
                                    'a_href' => '../jh_test/page4.php',
                                    'a_text' => 'Test 4',
                                ),
                                array (
                                    'a_href' => '../patients/patient_summary',
                                    'a_text' => 'Tab3',
                                ),
                            )
                        ),
                    ),
                    'right' => array(
                        'usermenu' => array(
                            'dept' => 'TZAM',
                            'name' => 'Sam Zhang',
                            'title' => 'TBD',
                        ),
                    ),
                ),
                'row' => '',
            ),
        ),
        array(
            'id' => 9,
            'name' => 'Shared',
            'description' => '',
            'header' => array(),
        ),

    );
?>