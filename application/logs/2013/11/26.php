<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-26 11:32:09 --- EMERGENCY: Database_Exception [ 1146 ]: Table '99scholars.conference' doesn't exist [ select count(*) as total from conference as c  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/99Scholars-master/modules/database/classes/Kohana/Database/Query.php:251
2013-11-26 11:32:09 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars-master/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /opt/lampp/htdocs/99Scholars-master/application/classes/Service/Conference.php(116): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/99Scholars-master/application/classes/Service/Conference.php(7): Service_Conference->list_by(NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#3 /opt/lampp/htdocs/99Scholars-master/application/classes/Controller/Home.php(14): Service_Conference->list_all(NULL)
#4 /opt/lampp/htdocs/99Scholars-master/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars-master/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/99Scholars-master/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars-master/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars-master/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars-master/modules/database/classes/Kohana/Database/Query.php:251
2013-11-26 11:34:01 --- EMERGENCY: Database_Exception [ 1146 ]: Table '99scholars.conference' doesn't exist [ select count(*) as total from conference as c  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/99Scholars/modules/database/classes/Kohana/Database/Query.php:251
2013-11-26 11:34:01 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/Conference.php(116): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/99Scholars/application/classes/Service/Conference.php(7): Service_Conference->list_by(NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#3 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Home.php(14): Service_Conference->list_all(NULL)
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars/modules/database/classes/Kohana/Database/Query.php:251
2013-11-26 11:34:16 --- EMERGENCY: Database_Exception [ 1146 ]: Table '99scholars.conference' doesn't exist [ select count(*) as total from conference as c  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/99Scholars/modules/database/classes/Kohana/Database/Query.php:251
2013-11-26 11:34:16 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/Conference.php(116): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/99Scholars/application/classes/Service/Conference.php(7): Service_Conference->list_by(NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#3 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Home.php(14): Service_Conference->list_all(NULL)
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars/modules/database/classes/Kohana/Database/Query.php:251
2013-11-26 11:34:53 --- EMERGENCY: Database_Exception [ 1146 ]: Table '99scholars.conference' doesn't exist [ select count(*) as total from conference as c  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/99Scholars/modules/database/classes/Kohana/Database/Query.php:251
2013-11-26 11:34:53 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/Conference.php(116): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/99Scholars/application/classes/Service/Conference.php(7): Service_Conference->list_by(NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#3 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Home.php(14): Service_Conference->list_all(NULL)
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars/modules/database/classes/Kohana/Database/Query.php:251
2013-11-26 18:34:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view profile/edit/edit_confproc could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php:137
2013-11-26 18:34:22 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(137): Kohana_View->set_filename('profile/edit/ed...')
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(30): Kohana_View->__construct('profile/edit/ed...', NULL)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(188): Kohana_View::factory('profile/edit/ed...')
#3 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(89): Service_UserProfile->render_edit_tab('7', 'confproc')
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php:137