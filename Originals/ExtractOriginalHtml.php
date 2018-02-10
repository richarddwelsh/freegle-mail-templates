<?php

define('IZNIK_BASE', '../../iznik-server/');

require_once(IZNIK_BASE . 'mailtemplates/welcome/withpassword.php');
file_put_contents('./welcome_withpassword.html', welcome_password('www.ilovefreegle.org', 'https://www.ilovefreegle.org/images/user_logo.png', 'rdwelsh@gmail.com', 'pa55w0rd'));

require_once(IZNIK_BASE . 'mailtemplates/welcome/forgotpassword.php');
file_put_contents('./welcome_forgotpassword.html', forgot_password('www.ilovefreegle.org', 'https://www.ilovefreegle.org/images/user_logo.png', 'rdwelsh@gmail.com', 'https://someLink.com/12345'));

require_once(IZNIK_BASE . 'mailtemplates/welcome/group.php');
file_put_contents('./welcome_group.html', welcome_group('www.ilovefreegle.org', 'https://www.ilovefreegle.org/images/user_logo.png', 'rdwelsh@gmail.com', 'Group-Name', 'This is a welcome-to-group message.'));
