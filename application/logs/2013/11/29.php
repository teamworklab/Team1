<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-29 11:18:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_chapter' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 11:18:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 11:19:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_chapter' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 11:19:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 11:19:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_chapter' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 11:19:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 11:19:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_chapter' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 11:19:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 11:21:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: conference ~ APPPATH/classes/Service/UserProfile.php [ 234 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:234
2013-11-29 11:21:00 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(234): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 234, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(57): Service_UserProfile->create_chapter('7', Array)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(115): Service_UserProfile->create('chapter', '7', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:234
2013-11-29 11:21:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: conference ~ APPPATH/classes/Service/UserProfile.php [ 234 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:234
2013-11-29 11:21:28 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(234): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 234, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(57): Service_UserProfile->create_chapter('7', Array)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(115): Service_UserProfile->create('chapter', '7', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:234
2013-11-29 11:23:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: book_chapter ~ APPPATH/classes/Service/UserProfile.php [ 102 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:102
2013-11-29 11:23:26 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(17): Service_UserProfile->update_chapter_info(Array)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(129): Service_UserProfile->update('chapter', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:102
2013-11-29 12:11:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_book' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 12:11:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 12:22:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: book ~ APPPATH/classes/Service/UserProfile.php [ 302 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:302
2013-11-29 12:22:39 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(302): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 302, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(69): Service_UserProfile->create_book('7', Array)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(115): Service_UserProfile->create('book', '7', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:302
2013-11-29 12:25:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: book ~ APPPATH/views/profile/user_publication.php [ 92 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_publication.php:92
2013-11-29 12:25:21 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_publication.php(92): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 92, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(49): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_publication()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_publication.php:92
2013-11-29 12:49:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_project' not found ~ APPPATH/classes/Service/UserProfile.php [ 379 ] in file:line
2013-11-29 12:49:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 12:57:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_project' not found ~ APPPATH/classes/Service/UserProfile.php [ 379 ] in file:line
2013-11-29 12:57:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 12:58:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_project' not found ~ APPPATH/classes/Service/UserProfile.php [ 379 ] in file:line
2013-11-29 12:58:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 12:59:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_project' not found ~ APPPATH/classes/Service/UserProfile.php [ 379 ] in file:line
2013-11-29 12:59:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 14:26:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_presentation' not found ~ APPPATH/classes/Service/UserProfile.php [ 386 ] in file:line
2013-11-29 14:26:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 14:26:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_project' not found ~ APPPATH/classes/Service/UserProfile.php [ 379 ] in file:line
2013-11-29 14:26:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 14:26:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_presentation' not found ~ APPPATH/classes/Service/UserProfile.php [ 386 ] in file:line
2013-11-29 14:26:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 14:26:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_project' not found ~ APPPATH/classes/Service/UserProfile.php [ 379 ] in file:line
2013-11-29 14:26:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 14:26:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_project' not found ~ APPPATH/classes/Service/UserProfile.php [ 379 ] in file:line
2013-11-29 14:26:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 14:26:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_presentation' not found ~ APPPATH/classes/Service/UserProfile.php [ 386 ] in file:line
2013-11-29 14:26:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 14:43:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The bookname property does not exist in the Model_book class ~ MODPATH/orm/classes/Kohana/ORM.php [ 686 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:24
2013-11-29 14:43:29 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(24): Kohana_ORM->get('bookname')
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(37): Service_book->get_book_list('7', false)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(428): Service_book->get_book_list_for_display('7')
#3 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(89): Service_UserProfile->render_edit_tab('7', 'book')
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:24
2013-11-29 14:43:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The bookname property does not exist in the Model_book class ~ MODPATH/orm/classes/Kohana/ORM.php [ 686 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:24
2013-11-29 14:43:46 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(24): Kohana_ORM->get('bookname')
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(37): Service_book->get_book_list('7', false)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(428): Service_book->get_book_list_for_display('7')
#3 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(89): Service_UserProfile->render_edit_tab('7', 'book')
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:24
2013-11-29 14:44:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_book' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 14:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 14:47:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The book_name property does not exist in the Model_book class ~ MODPATH/orm/classes/Kohana/ORM.php [ 686 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:22
2013-11-29 14:47:14 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(22): Kohana_ORM->get('book_name')
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(37): Service_book->get_book_list('7', false)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(428): Service_book->get_book_list_for_display('7')
#3 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(89): Service_UserProfile->render_edit_tab('7', 'book')
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:22
2013-11-29 14:47:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_book' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 14:47:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 14:48:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The book_name property does not exist in the Model_book class ~ MODPATH/orm/classes/Kohana/ORM.php [ 686 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:22
2013-11-29 14:48:54 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(22): Kohana_ORM->get('book_name')
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(37): Service_book->get_book_list('7', false)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(428): Service_book->get_book_list_for_display('7')
#3 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(89): Service_UserProfile->render_edit_tab('7', 'book')
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:22
2013-11-29 14:48:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The book_name property does not exist in the Model_book class ~ MODPATH/orm/classes/Kohana/ORM.php [ 686 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:22
2013-11-29 14:48:59 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(22): Kohana_ORM->get('book_name')
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php(37): Service_book->get_book_list('7', false)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(428): Service_book->get_book_list_for_display('7')
#3 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(89): Service_UserProfile->render_edit_tab('7', 'book')
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/book.php:22
2013-11-29 14:52:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: book ~ APPPATH/classes/Service/UserProfile.php [ 133 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:133
2013-11-29 14:52:15 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(133): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 133, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(21): Service_UserProfile->update_book_info(Array)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(129): Service_UserProfile->update('book', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:133
2013-11-29 14:52:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: book ~ APPPATH/classes/Service/UserProfile.php [ 133 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:133
2013-11-29 14:52:25 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(133): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 133, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(21): Service_UserProfile->update_book_info(Array)
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(129): Service_UserProfile->update('book', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:133
2013-11-29 15:30:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Dao/project.php [ 12 ] in file:line
2013-11-29 15:30:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 15:43:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_presentation' not found ~ APPPATH/classes/Service/UserProfile.php [ 455 ] in file:line
2013-11-29 15:43:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 15:43:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_presentation' not found ~ APPPATH/classes/Service/UserProfile.php [ 455 ] in file:line
2013-11-29 15:43:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 15:46:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_presentation' not found ~ APPPATH/classes/Service/UserProfile.php [ 455 ] in file:line
2013-11-29 15:46:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 15:46:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Service_presentation' not found ~ APPPATH/classes/Service/UserProfile.php [ 455 ] in file:line
2013-11-29 15:46:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 15:46:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/views/profile/user_project.php [ 5 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:5
2013-11-29 15:46:57 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:5
2013-11-29 15:48:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/views/profile/user_project.php [ 5 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:5
2013-11-29 15:48:42 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:5
2013-11-29 15:49:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/views/profile/user_project.php [ 2 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:2
2013-11-29 15:49:20 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:2
2013-11-29 15:49:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: project ~ APPPATH/views/profile/user_project.php [ 2 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:2
2013-11-29 15:49:30 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:2
2013-11-29 15:50:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projectdisplay ~ APPPATH/views/profile/user_project.php [ 2 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:2
2013-11-29 15:50:25 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:2
2013-11-29 15:52:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/views/profile/user_project.php [ 2 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:2
2013-11-29 15:52:18 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:2
2013-11-29 15:52:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/views/profile/user_project.php [ 5 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:5
2013-11-29 15:52:34 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:5
2013-11-29 15:52:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/views/profile/user_project.php [ 13 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:13
2013-11-29 15:52:52 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 13, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:13
2013-11-29 15:55:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/views/profile/user_project.php [ 3 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:3
2013-11-29 15:55:37 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 3, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:3
2013-11-29 15:59:07 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Service/UserProfile.php [ 450 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:450
2013-11-29 15:59:07 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(450): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 450, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(73): Service_UserProfile->render_view_tab('7', 'project')
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(56): Controller_Profile->render_tab('7', 'project')
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:450
2013-11-29 16:00:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: projects ~ APPPATH/classes/Service/UserProfile.php [ 450 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:450
2013-11-29 16:00:41 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(450): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 450, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(73): Service_UserProfile->render_view_tab('7', 'project')
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(56): Controller_Profile->render_tab('7', 'project')
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:450
2013-11-29 16:01:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: project_name ~ APPPATH/classes/Service/UserProfile.php [ 450 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:450
2013-11-29 16:01:05 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(450): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 450, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(73): Service_UserProfile->render_view_tab('7', 'project')
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(56): Controller_Profile->render_tab('7', 'project')
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:450
2013-11-29 16:04:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/classes/Service/UserProfile.php [ 457 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:04:51 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(457): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 457, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(73): Service_UserProfile->render_view_tab('7', 'project')
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(56): Controller_Profile->render_tab('7', 'project')
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:04:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/classes/Service/UserProfile.php [ 457 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:04:52 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(457): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 457, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(73): Service_UserProfile->render_view_tab('7', 'project')
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(56): Controller_Profile->render_tab('7', 'project')
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:04:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/classes/Service/UserProfile.php [ 457 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:04:53 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(457): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 457, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(73): Service_UserProfile->render_view_tab('7', 'project')
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(56): Controller_Profile->render_tab('7', 'project')
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:04:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/classes/Service/UserProfile.php [ 457 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:04:53 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(457): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 457, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(73): Service_UserProfile->render_view_tab('7', 'project')
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(56): Controller_Profile->render_tab('7', 'project')
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:04:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/classes/Service/UserProfile.php [ 457 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:04:53 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(457): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 457, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(73): Service_UserProfile->render_view_tab('7', 'project')
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(56): Controller_Profile->render_tab('7', 'project')
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:14:12 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Service/UserProfile.php [ 457 ] in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:14:12 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php(457): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 457, Array)
#1 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(73): Service_UserProfile->render_view_tab('7', 'project')
#2 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(56): Controller_Profile->render_tab('7', 'project')
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/99Scholars/application/classes/Service/UserProfile.php:457
2013-11-29 16:16:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/views/profile/user_project.php [ 4 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:4
2013-11-29 16:16:38 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(58): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_project()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_project.php:4
2013-11-29 16:20:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: presentationcount ~ APPPATH/views/profile/user_presentation.php [ 5 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_presentation.php:5
2013-11-29 16:20:35 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_presentation.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(67): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_presentation()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_presentation.php:5
2013-11-29 16:20:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: presentationcount ~ APPPATH/views/profile/user_presentation.php [ 5 ] in /opt/lampp/htdocs/99Scholars/application/views/profile/user_presentation.php:5
2013-11-29 16:20:38 --- DEBUG: #0 /opt/lampp/htdocs/99Scholars/application/views/profile/user_presentation.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/99Scholars/application/classes/Controller/Profile.php(67): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Controller.php(84): Controller_Profile->action_presentation()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#9 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/99Scholars/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/99Scholars/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/99Scholars/application/views/profile/user_presentation.php:5
2013-11-29 17:43:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_author' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 17:43:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 17:43:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_author' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 17:43:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 17:44:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '-', expecting '{' ~ APPPATH/classes/Model/co-author.php [ 3 ] in file:line
2013-11-29 17:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 17:44:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coauthor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 17:44:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 17:46:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coauthor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 17:46:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 17:46:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coauthor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 17:46:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 17:46:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coauthor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 17:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 17:46:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coauthor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 17:46:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 17:57:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coauthor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 17:57:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 17:58:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coauthor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 17:58:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:00:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coauthor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 18:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:02:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_author' not found ~ APPPATH/classes/Service/UserProfile.php [ 259 ] in file:line
2013-11-29 18:02:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:06:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_author' not found ~ APPPATH/classes/Service/UserProfile.php [ 259 ] in file:line
2013-11-29 18:06:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:09:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_author' not found ~ APPPATH/classes/Service/UserProfile.php [ 259 ] in file:line
2013-11-29 18:09:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:10:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_author' not found ~ APPPATH/classes/Service/UserProfile.php [ 259 ] in file:line
2013-11-29 18:10:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:11:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coauthor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 18:11:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:12:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_author' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 45 ] in file:line
2013-11-29 18:12:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:13:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_author' not found ~ APPPATH/classes/Service/UserProfile.php [ 259 ] in file:line
2013-11-29 18:13:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:31:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_author' not found ~ APPPATH/classes/Service/UserProfile.php [ 272 ] in file:line
2013-11-29 18:31:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:31:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_author' not found ~ APPPATH/classes/Service/UserProfile.php [ 272 ] in file:line
2013-11-29 18:31:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:47:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_author' not found ~ APPPATH/classes/Service/UserProfile.php [ 277 ] in file:line
2013-11-29 18:47:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-29 18:47:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_author' not found ~ APPPATH/classes/Service/UserProfile.php [ 277 ] in file:line
2013-11-29 18:47:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line