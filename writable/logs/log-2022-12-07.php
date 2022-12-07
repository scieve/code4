<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2022-12-07 09:59:41 --> Class 'Config\Database' not found
#0 /var/www/html/code4/system/Debug/Toolbar.php(96): CodeIgniter\Debug\Toolbar\Collectors\Database->__construct()
#1 /var/www/html/code4/system/Config/Services.php(842): CodeIgniter\Debug\Toolbar->__construct()
#2 /var/www/html/code4/system/Config/BaseService.php(120): CodeIgniter\Config\Services::toolbar()
#3 /var/www/html/code4/system/Config/Services.php(834): CodeIgniter\Config\BaseService::getSharedInstance()
#4 /var/www/html/code4/system/Filters/DebugToolbar.php(75): CodeIgniter\Config\Services::toolbar()
#5 /var/www/html/code4/system/Filters/Filters.php(188): CodeIgniter\Filters\DebugToolbar->after()
#6 /var/www/html/code4/system/CodeIgniter.php(356): CodeIgniter\Filters\Filters->run()
#7 /var/www/html/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#8 /var/www/html/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2022-12-07 11:06:57 --> Class 'codeIgniter\Exceptions\PageNotFoundException' not found
#0 /var/www/html/code4/system/CodeIgniter.php(847): App\Controllers\Pages->mostrar()
#1 /var/www/html/code4/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /var/www/html/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /var/www/html/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
