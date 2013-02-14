<html>
<head>
<title>Demo Sitemap</title>
<link href="../../stylesheets/foundation.css" rel="stylesheet" type="text/css">
<link href="../../stylesheets/custom.css" rel="stylesheet" type="text/css">
<style>
body {background-color:#fff !important;background:url();}
.role {padding:10px;border-bottom:1px dotted #ccc;}
table td {padding:10px 10px 10px 20px;border-left:1px solid #ddd;}
li {margin-left:20px;font-size:14px;}
h1 {line-height:16px;}
h4 {color:#000;}
</style>
</head>
<body>
<div style="padding:30px 50px;">
<h1>PPH Platform - Sitemap (1/2)</h1>
<p>Below are examples of various users (roles) that use our system. In the actual application, the user previleges will be based on set of permissions rather than  role. </p>
<table width="100%" border="0">
  <tr>
    <td width="25%" valign="top" style="border:none"><div class="role">
      <h2>1. PI Coordinator</h2>
        <p><img src="../../images/profiles/pi_coordinator.png" alt="coordinator" /></p>
        <p>Manages surveys and reminders for the organization. This person may have admin privilege.</p>
        <h4><strong>General</strong></h4>
        <ul>
          <li><a href="../engagement/coordinator.php">Survey Overview</a></li>
          <li>Notifications</li>
          </ul>
        <h4><strong>Population</strong></h4>
        <ul>
          <li><a href="../populations/manage_populations.php">Manage Population</a></li>
          <li><a href="../populations/define_population.php">Define Poulation</a></li>
        </ul>
        <h4><strong>Engagement</strong></h4>
        <ul>
          <li><a href="../surveys/survey.php">Survey Profile</a></li>
          <li>Reminder Profile</li>
          <li>Monitoring Profile        </li>
        </ul>
        <h4><strong>Library</strong></h4>
        <ul>
          <li><a href="../surveys/add_box.php">Add Box</a></li>
          <li>Predefined Surveys
            <ul>
              <li>Simple</li>
              <li>Medium</li>
              <li>Complex</li>
            </ul>
          </li>
          <li>Predefined Templates
            <ul>
              <li>Simple</li>
              <li>Medium</li>
              <li>Complex</li>
            </ul>
          </li>
          </ul>
        <h4><strong>Create a Survey</strong></h4>
        <ul>
          <li><a href="../surveys/create1.php">Create Survey 1</a></li>
          <li><a href="../surveys/create2.php">Create Survey 2</a></li>
          <li><a href="../surveys/create3.php">Create Survey 3</a></li>
          <li><a href="../surveys/create4.php">Create Survey 4</a></li>
          <li><a href="../surveys/create5.php">Create Survey 5</a></li>
        </ul>
        <h4><strong>Create a Reminder</strong></h4>
        <ul>
          <li>Create Reminder 1</li>
          <li>Create Reminder 2</li>
          <li>Create Reminder 3</li>
          <li>Create Reminder 4</li>
          <li>Create Reminder 5</li>
          </ul>
        <h4><strong>Monitoring</strong></h4>
        <ul>
          <li>Create 1</li>
          <li>Create 2</li>
        </ul>
        <h4><strong>Settings</strong></h4>
        <ul>
          <li><a href="../settings/inbox.php">Inbox</a></li>
          <li><a href="../settings/notifications.php">Notifications</a></li>
          <li><a href="../settings/my_account.php">My Account Settings</a></li>
          <li><a href="../settings/manage_users.php">Manage Users</a></li>
          <li><a href="../settings/add_new_user.php">Add New User</a></li>
          <li><a href="../settings/manage_roles.php">Manage Role </a></li>
          <li><a href="../settings/add_new_role.php">Add New Role</a></li>
          <li>Security</li>
        </ul>
        <h4>Other</h4>
        <ul>
          <li><a href="../patients/manage_patients.php">Manage Patients</a></li>
          <li><a href="../patients/add_patient.php">CRUD Patient</a>          </li>
        </ul>
        <p>&nbsp;</p>
  	</div>
      <div class="role">
        <h2>2. Patient Registrar</h2>
        <p><img src="../../images/profiles/patient_registrar.png" alt="registrar"></p>
        <p>Manages patient information </p>
        <h4><strong>Dash</strong></h4>
        <ul>
          <li>Overview</li>
          <li><a href="../patients/manage_patients.php">Manage Patients</a></li>
          <li><a href="../patients/add_patient.php">Add Patients</a></li>
          <li><a href="../patients/patient_summary.php">Patient Summary</a></li>
          <li>Patient Profile</li>
          </ul>
        <h4>Settings</h4>
        <ul>
          <li><a href="../settings/inbox.php">Inbox</a></li>
          <li><a href="../settings/notifications.php">Notifications</a></li>
          <li><a href="../settings/my_account.php">My Account Settings      </a></li>
        </ul>
      </div>
    </td>
    <td width="25%" valign="top"><div class="role">
<h2>3. Nurse/Medical Assistant</h2>
        <p><img src="../../images/profiles/nurse.png"></p>
        <p>Provides clinical follow-up with patients</p>
        <h4><strong>General</strong></h4>
        <ul>
          <li><a href="../engagement/nurse.php">Overview</a></li>
          <li><a href="../engagement/call_queue.php">Call Queue</a></li>
          <li><a href="../engagement/call_info.php">Call Info</a></li>
          <li>Notifications</li>
        </ul>
        <h4>Patient</h4>
        <ul>
          <li>Patient Summary</li>
          <li>Patient Profile</li>
        </ul>
        <h4>Settings</h4>
        <ul>
          <li><a href="../settings/inbox.php">Inbox</a></li>
          <li><a href="../settings/notifications.php">Notifications</a></li>
          <li><a href="../settings/my_account.php">My Account Settings </a></li>
        </ul>
        </div>
      <div class="role">
<h2>4. Phyician</h2>
          <p><img src="../../images/profiles/physician.png" alt="physician"></p>
          <p>The patient’s physician</p>
          <h4><strong>Patient Interaction</strong></h4>
          <ul>
            <li><a href="../engagement/physician.php">Overview</a></li>
            <li>View Surveys</li>
            <li>Survey Overview</li>
            <li>Patient Summary</li>
            <li>Patient Medical History</li>
          </ul>
          <h4><strong>Mobile</strong></h4>
          <ul>
            <li><a href="../../mobile/login.php">Login</a></li>
            <li><a href="../../mobile/physician.php">Dash</a></li>
            <li><a href="../../mobile/survey.php">Survey</a></li>
            <li>Survey Profile</li>
            <li>Patient Profile</li>
            <li>Patient Medical History</li>
            <li>Notification</li>
            <li>Message</li>
          </ul>
          <h4>Settings</h4>
          <ul>
            <li><a href="../settings/inbox.php">Inbox</a></li>
            <li><a href="../settings/notifications.php">Notifications</a></li>
            <li><a href="../settings/my_account.php">My Account Settings </a></li>
          </ul>
          <h4>Other</h4>
          <ul>
            <li><a href="../patients/manage_patients.php">Manage Patients</a>
              <ul>
                <li><a href="../patients/add_patient.php">CRUD Patient</a></li>
              </ul>
            </li>
            <li>Send Patient Message
              <ul>
                <li>Print/Reprint Requisition<br>
                </li>
                <li>Download Requisition as PDF<br>
                </li>
              </ul>
            </li>
            <li>Copy/Manage Reason Hierarchy<br>
            </li>
            <li>RU Office Info<br>
            </li>
            <li>RU Contact Info<br>
            </li>
            <li>Review Results<br>
              <ul>
                <li>Add Result Notes (text)</li>
                <li>Add Result Notes (audio/transcribed)</li>
                <li>Sign off on Results</li>
              </ul>
            </li>
            <li>Review Results as Patient</li>
            <li>Search for Requisition</li>
            <li>Search for Patient</li>
            <li>Manage Labs</li>
            <li>Manage Test Menus</li>
          </ul>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
    </td>
    <td width="25%" valign="top">
    	<div class="role">	
        <h2>5. Call Center Manager</h2>
        <h4><img src="../../images/profiles/pi_call_center_manager.png" alt="manager"></h4>
        <p>Leads patient contact team</p>
        <h4>General</h4>
        <ul>
          <li><a href="../engagement/callc_manager.php">Overview</a></li>
          <li><a href="../engagement/call_queue.php">Call Queue</a></li>
          <li><a href="../engagement/call_info.php">Call Info</a></li>
          <li>Change Survey Priority</li>
          </ul>
        <h4>Settings</h4>
        <ul>
          <li><a href="../settings/inbox.php">Inbox</a></li>
          <li><a href="../settings/notifications.php">Notifications</a></li>
          <li><a href="../settings/my_account.php">My Account Settings </a></li>
          <li>Manage Users</li>
        </ul>
    	</div>
      <div class="role">
        <h2>6. Call Center Agent</h2>
        <h4><img src="../../images/profiles/pi_call_center_agent.png" alt="agent"></h4>
        <p>Manages patient information</p>
        <h4>Dash</h4>
        <ul>
          <li>Overview</li>
          <li><a href="../engagement/call_queue.php">Call Queue</a></li>
          <li><a href="../engagement/call_info.php">Call Info</a></li>
          <li>Change Survey Priority</li>
        </ul>
        <h4>Settings</h4>
        <ul>
          <li><a href="../settings/inbox.php">Inbox</a></li>
          <li><a href="../settings/notifications.php">Notifications</a></li>
          <li><a href="../settings/my_account.php">My Account Settings </a></li>
        </ul>
      </div>
      <div class="role">
        <h2>7. Basic User</h2>
        <h4><img src="../../images/profiles/basic.png" alt="basic"></h4>
        <p>A lowest level user. A default role if no other permission was given.</p>
        <h4><strong>Dash</strong></h4>
        <ul>
          <li>Need a list</li>
          </ul>
        <h4>Settings</h4>
        <ul>
          <li><a href="../settings/inbox.php">Inbox</a></li>
          <li><a href="../settings/notifications.php">Notifications</a></li>
          <li><a href="../settings/my_account.php">My Account Settings </a></li>
        </ul>
      </div></td>
    <td valign="top"><div class="role">
      <h2>8. Admin</h2>
      <p><img src="../../images/profiles/admin.png" alt="admin"></p>
      <p>Top level adminstrator of the organization.</p>
      <ul>
        <li>Dashboard </li>
        <li>CRUD User Accounts (Doctors, Nurses, all non-patient accounts and manage patient login info)</li>
        <li>CRUD Labs</li>
        <li>CRUD Lab Test Menu</li>
        <li>CRUDCopy Reason</li>
        <li>Hierarchy (System and User-on behalf of user)</li>
        <li>Manage EMPI - Merge patients, search for mergable patients, etc</li>
        <li>CRUD Offices</li>
      </ul>
    </div>
      <div class="role">
      <h2>9. Shared</h2>
        <h4><strong>Login</strong></h4>
        <ul>
          <li><a href="../login/index.php">Login</a></li>
          <li>Forgot</li>
          <li>Contact</li>
        </ul>
        <h4><strong>Intro</strong></h4>
        <ul>
          <li><a href="../intro/welcome.php">Welcome</a></li>
          <li>Tour        </li>
        </ul>
        <h4><strong>Help</strong></h4>
        <ul>
          <li><a href="../help/index.php">Overview</a></li>
          <li><a href="../help/guide.php">Guide</a></li>
          <li><a href="../help/no_rights.php">No Rights</a></li>
          <li><a href="../help/faq.php">FAQ</a></li>
          <li>Contact</li>
        </ul>
        <h4>General Emails</h4>
        <ul>
          <li>Invite</li>
          <li>Welcome</li>
          </ul>
        <h4>Welcome Emails</h4>
        <ul>
          <li>Welcome</li>
          </ul>
        <h4>Reminder Emails</h4>
        <ul>
          <li>Need a  list</li>
        </ul>
        <h4>System Emails</h4>
        <ul>
          <li>Need a list</li>
        </ul>
        <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1>PPH Patient Portal - Sitemap (2/2)</h1>
<p>There will be a seperate portal for patients.</p>
<table width="100%" border="0">
  <tr>
    <td width="25%" valign="top" style="border:none"><div class="role">
      <h4><img src="../../images/profiles/patient.png" alt="patient"></h4>
      <p>The person whose health status we are caring for. Patient will access Patient Portal    </p>
    </div></td>
    <td width="25%" valign="top"><h4><strong>Dash</strong></h4>
      <ul>
        <li>Overview</li><li>View Results</li>
        <li>Message Doctor</li>
        <li>RU Account Info</li>
        <li>RU Contact Info/Preferences</li>
      </ul></td>
    <td width="25%" valign="top"><h4><strong>Survey</strong></h4>
      <ul>
        <li><a href="../../pdf/m_act_survey.pdf">HTML Survey</a></li>
        <li>Mobile Survey</li>
      </ul></td>
    <td valign="top"><h4><strong>Email</strong></h4>
      <ul>
        <li>HTML Survey</li>
        <li>Mobile Survey</li>
      </ul></td>
  </tr>
</table>
<p>&nbsp;</p>
<h3>&nbsp;</h3>
<p>&nbsp;</p>
</div>
</body>
</html>