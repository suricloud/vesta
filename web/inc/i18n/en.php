<?php
/**
 * Vesta CP language file
 * Translated by ZonD80 (zond80@gmail.com)
 */

if (!defined('LANGUAGE')) die('Direct access not allowed');

$LANG = array(
    'Hour'=>'Hour',
    'Min'=>'Min',
    'pb'=>'pb',
    'tb'=>'tb',
    'gb'=>'gb',
    'mb'=>'mb',
    'Error'=>'Error',
    'minute'=>'minute',
    'hour'=>'hour',
    'day'=>'day',
    'days'=>'days',
    'hours'=>'hours',
    'minutes'=>'minutes',
    'month'=>'month',
    'day of week'=>'day of week',
    'cmd'=>'cmd',
    'Error: field "%s" can not be blank.'=>'Error: Field "%s" can not be blank.',
    _('Error: vesta did not return any output.')=>'Error: Vesta did not return any output',
    'OK: cron job has been created successfully.'=>'Success: Cron Job has been created',
    'database'=>'database',
    'username'=>'username',
    'password'=>'password',
    'type'=>'type',
    'charset'=>'charset',
    'edit'=>'edit',
    'DATABASE_CREATED_OK'=>'Success: Database <a href="/edit/db/?database=%s"><b>%s</b></a> has been created.',
    'domain'=>'domain',
    'ip'=>'IP',
    'DOMAIN_CREATED_OK'=>'Success: Domain <a href="/list/dns/?domain=%s"><b>%s</b></a> has been created.',
    'RECORD_CREATED_OK'=>'Success: Record <b>%s.%s</b> has been created.',
    'ip address'=>'IP-address',
    'netmask'=>'netmask',
    'Netmask'=>'Netmask',
    'interface'=>'interface',
    'Interface'=>'Interface',
    'assigned user'=>'assigned user',
    'IP_CREATED_OK'=>'"Success: IP address <a href="/edit/ip/?ip=%s"><b>%s</b></a> has been created.',
    'DOMAIN_MAIL_CREATED_OK'=>'Success: Mail for domain <a href="/list/mail/?domain=%s"><b>%s</b></a> has been created.',
    'account'=>'account',
    'Account'=>'Account',
    'MAIL_ACCOUNT_CREATED_OK'=>'Success: Mail account <a href="/edit/mail/?account=%s&domain=%s"><b>%s@%s</b></a> has been created.',
    'package'=>'package',
    'template'=>'template',
    'shell'=>'SSH',
    'web domains'=>'web domains',
    'Web Domains'=>'Web Domains',
    'Web Aliases'=>'Web Aliases',
    'per domain'=>'per domain',
    'DNS domains'=>'DNS domains',
    'DNS records count'=>'DNS records count',
    'DNS Support'=>'DNS Support',
    'Mail Support'=>'Mail Support',
    'web aliases'=>'web aliases',
    'dns records'=>'DNS records',
    'mail domains'=>'mail domains',
    'mail accounts'=>'mail accounts',
    'Mail Domains'=>'Mail Domains',
    'Mail Accounts'=>'Mail Accounts',
    'accounts'=>'accounts',
    'databases'=>'databases',
    'Databases'=>'Databases',
    'cron jobs'=>'cron jobs',
    'Cron Jobs'=>'Cron Jobs',
    'Backups'=>'Backups',
    'backups'=>'backups',
    'quota'=>'disk quota',
    'bandwidth'=>'bandwidth',
    'Bandwidth'=>'Bandwidth',
    'ns1'=>'ns1',
    'ns2'=>'ns2',
    'PACKAGE_CREATED_OK'=>'Success: Package <a href="/edit/package/?package=%s"><b>%s</b></a> has been created.',
    'user'=>'user',
    'email'=>'email',
    'Email'=>'Email',
    'first name'=>'first name',
    'last name'=>'last name',
    'Please enter valid email address.'=>'Please enter valid email address.',
    'Welcome to Vesta Control Panel'=>'Welcome to Vesta Control Panel',
    'MAIL_FROM'=>'Vesta Control Panel <noreply@%s>',
    'GREETINGS_GORDON_FREEMAN'=>"Hello, %s %s,\n",
    'GREETINGS'=>"Hello,\n",
    'ACCOUNT_READY'=>"You account has been created and ready for use.\n\nhttps://%s/login/\nUsername: %s\nPassword: %s\n\n--\nVesta Control Panel\n",
    'ACCOUNT_CREATED_OK'=>'Success: User <a href="/edit/user/?user=%s"><b>%s</b></a> has been created.',
    'ssl certificate'=>'SSL certificate',
    'ssl key'=>'SSL key',
    'SSL Support'=>'SSL Support',
    'SSL Home Directory'=>'SSL Home Directory',
    'SSL Certificate'=>'SSL Certificate',
    'SSL Key'=>'SSL Key',
    'SSL Certificate Authority / Intermediate'=>'SSL Certificate Authority / Intermediate',
    'stats user password'=>'stats user password',
    'stats username'=>'stats username',
    'stats password'=>'stats password',
    'ftp user password'=>'FTP user password',
    'ftp user'=>'FTP user',
    'FTP login credentials'=>'FTP login credentials',
    'FTP_ACCOUNT_READY'=>"Your FTP account has been created and ready for use.\n\nHostname: %s\nUsername: %s_%s\nPassword: %s\n\n--\nVesta Control Panel\n",
    'HOSTING_DOMAIN_CREATED_OK'=>'Success: Web domain <a href="/edit/web/?domain=%s"><b>%s</b></a> has been created.',
    'OK: changes has been saved.'=>'Success: Changes have been saved.',
    'FTP login credentials'=>'FTP login credentials',
    '505'=>'505 &mdash; oops, internal error. Call an Ambulance!',
    'An internal error occurred'=>'An internal error occurred',
    'GO_BACK_LINK'=>'Try to go back to <a href="/">main page</a> or go to <a href="javascript:history.go(-1)">previous page</a>',
    'ERROR: Invalid username or password'=>'Error: Invalid username or password',
    'ERROR: Invalid username or code'=>'Error: Invalid username or reset code',
    'MAIL_RESET_SUBJECT'=>'Password Reset at %s',
    'PASSWORD_RESET_REQUEST'=>"You recently requested a password reset.\nTo coutinue to reset your password, visit this link:\nhttps://%s/reset/?action=confirm&user=%s&code=%s\n\nAlternatively, you can visit this link: https://%s/reset/?action=code&user=%s and enter the following reset code:\n%s\n\nIf you did not request password reset, please ignore this message and take out apologies.\n\n--\nVesta Control Panel\n",
    'ERROR: Passwords not match'=>'Error: Passwords did not match',
    'Adding Cron Job'=>'Adding Cron Job',
    'Minute'=>'Minute',
    'Day'=>'Day',
    'Month'=>'Month',
    'Day of week'=>'Day of week',
    'Command'=>'Command',
    'Add'=>'Add',
    'Back'=>'Back',
    'Adding database'=>'Adding database',
    'DB_PREFIX_WILL_BE_ADDED'=>'Prefix %s will be automatically added to Database and User name',
    'FTP_PREFIX_WILL_BE_ADDED'=>'Prefix %s will be automatically added to User name',
    'Database'=>'Database',
    'Username'=>'Username',
    'Password'=>'Password',
    'generate'=>'generate',
    'Type'=>'Type',
    'Charset'=>'Charset',
    'Adding DNS Domain'=>'Adding DNS Domain',
    'Domain'=>'Domain',
    'IP-Address'=>'IP-Address',
    'Advanced options'=>'Advanced options',
    'Template'=>'Template',
    'Expiration date'=>'Expiration date',
    'Expire'=>'Expire',
    'YYYY-MM-DD'=>'YYYY-MM-DD',
    'Name servers'=>'Name servers',
    'Name Servers'=>'Name Servers',
    'Powered by Vesta Control Panel'=>'Powered by Vesta Control Panel',
    'Vesta Control Panel'=>'Vesta Control Panel',
    'Translation by ZonD80'=>'Translation by ZonD80',
    'Forgot Password?'=>'Forgot Password?',
    'Log in'=>'Log in',
    'Log out'=>'Log out',
    "RESET_NOTICE"=>"Please enter you username to continue.",
    'Submit'=>'Submit',
    'RESET_CODE_SENT'=>'Password reset code has been sent to your email address<br/>Please enter the code into field located below',
    'Confirm'=>'Confirm',
    'New Password'=>'New Password',
    'Confirm Password'=>'Confirm Password',
    'Reset'=>'Reset',
    'Statistics'=>'Statistics',
    'History Log'=>'History Log',
    'Vesta logo'=>'Vesta logo',
    'USER'=>'USER',
    'logout'=>'logout',
    'users'=>'users',
    'Users'=>'Users',
    'suspended'=>'suspended',
    'WEB'=>'WEB',
    'domains'=>'domains',
    'aliases'=>'aliases',
    'Aliases'=>'Aliases',
    'DNS'=>'DNS',
    'records'=>'records',
    'Records'=>'Records',
    'MAIL'=>'MAIL',
    'DB'=>'DB',
    'CRON'=>'CRON',
    'BACKUP'=>'BACKUP',
    'Packages'=>'Packages',
    'IP Addresses'=>'IP Addresses',
    'RRD Graphics'=>'RRD Graphics',
    'jobs'=>'jobs',
    'Reset Code'=>'Reset Code',
    'disk'=>'disk',
    'Disk'=>'Disk',
    'traffic'=>'traffic',
    'Database Credentials'=>'Database Credentials',
    'DATABASE_READY'=>"Hello, %s %s,\nYour %s database has been created successfully.\n\nDatabase: %s_%s\nUser: %s_%s\nPassword: %s\n\n",
    'Send credentials to'=>'Send credentials to',
    'Adding DNS Record'=>'Adding DNS Record',
    'Record'=>'Record',
    'IP or Value'=>'IP-address or Valie',
    'Priority'=>'Priority',
    'optional'=>'optional',
    'Adding IP Address'=>'Adding IP Address',
    'Shared'=>'Shared',
    'Assigned user'=>'Assigned user',
    'Assigned domain'=>'Assigned domain',
    'Adding Mail Domain'=>'Creatin Mail Domain',
    'AntiSpam Support'=>'AntiSpam Support',
    'AntiVirus Support'=>'AntiVirus Support',
    'DKIM Support'=>'DKIM Support',
    'Adding Mail Account'=>'Adding Mail Account',
    'Advanced options'=>'Advanced options',
    'Quota'=>'Quota',
    'in megabytes'=>'in megabytes',
    'use local-part'=>'use local-part',
    'Forward to'=>'Forward to',
    'one or more email addresses'=>'one or more email addresses',
    'Adding Package'=>'Adding Package',
    'Package Name'=>'Package Name',
    'Package'=>'Package',
    'Default Template'=>'Default Template',
    'SSH Access'=>'SSH Access',
    'Adding User'=>'Adding User',
    'First Name'=>'First Name',
    'Last Name'=>'Last Name',
    'SEND_CREDENTIALS_NOTICE'=>'Send fresh credentials to user by email?',
    'Adding Domain for hosting'=>'Adding Domain for hosting',
    'Apache template'=>'Apache template',
    'Nginx Support'=>'Nginx Support',
    'Nginx Extentions'=>'Nginx Extentions',
    'Nginx Template'=>'Nginx Template',
    'Statistics Authorization'=>'Statistics Authorization',
    'Additional FTP Account'=>'Additional FTP Account',
    'Editing Cron Job'=>'Editing Cron Job',
    'Save'=>'Save',
    'Editing Database'=>'Editing Database',
    'Editing DNS Domain'=>'Editing DNS Domain',
    'Editing DNS Record'=>'Editing DNS Record',
    'Editing IP Address'=>'Editing IP Address',
    'Editing Mail Domain'=>'Editing Mail Domain',
    'Catchall email'=>'Catchall email',
    'Editing Mail Account'=>'Editing Mail Account',
    'Autoreply'=>'Autoreply',
    'Message'=>'Message',
    'Editing Package'=>'Editing Package',
    'Editing User'=>'Editing User',
    'Default Name Servers'=>'Default Name Servers',
    'Editing Domain'=>'Editing Domain',
    'Create Backup'=>'Create Backup',
    'apply to selected'=>'apply to selected',
    'toggle all'=>'toggle all',
    'delete'=>'delete',
    'active'=>'active',
    'download'=>'download',
    'Owner'=>'Owner',
    'restore'=>'restore',
    'restart'=>'restart',
    'CPU'=>'CPU',
    'Memory'=>'Memory',
    'stop'=>'stop',
    'Run Time'=>'Run Time',
    'BACKUP_DELETE_CONFIRMATION'=>'Are you sure to delete <b>%s</b> backup?',
    'Backup Size'=>'Backup Size',
    'SYS'=>'SYS',
    'one archive'=>'one archive',
    '%s archives'=>'%s archives',
    'Add Cron Job'=>'Add Cron Job',
    'add account'=>'add account',
    'open webmail'=>'open webmail',
    'suspend'=>'suspend',
    'unsuspend'=>'unsuspend',
    'CRON_ACTION_CONFIRMATION'=>'Are you sure to <b>%s</b> cron job?',
    'Confirmation'=>'Confirmation',
    'one cron job'=>'one cron job',
    '%s cron jobs'=>'%s cron jobs',
    'Add Database'=>'Add Database',
    'open %s'=>'open %s',
    'DATABASE_ACTION_CONFIRMATION'=>'Are you sure to <b>%s</b> database <b>%s</b>?',
    'one database'=>'ne database',
    '%s databases'=>'%s databases',
    'Add DNS Domain'=>'Add DNS Domain',
    'Search'=>'Search',
    'LIST_DOMAIN_RECORDS'=>'Show %s records',
    'add record'=>'add record',
    'DOMAIN_ACTION_CONFIRMATION'=>'Are you sure to <b>%s</b> domain <b>%s?</b>',
    'one domain'=>'one domain',
    '%s domains'=>'%s domains',
    'Add DNS Record'=>'Add DNS Record',
    'Listing'=>'Listing',
    'list'=>'list',
    'RECORD_ACTION_CONFIRMATION'=>'Are you sure to <b>%s</b> record <b>%s</b>?',
    'one DNS record'=>'one DNS record',
    '%s DNS records'=>'%s DNS records',
    'Add IP'=>'Add IP',
    'IP_DELETE_CONFIRMATION'=>'Are you sure to delere IP-address <b>%s</b>?',
    'Status'=>'Status',
    'one IP address'=>'one IP address',
    '%s IP addresses'=>'%s IP addresses',
    'one log record'=>'one log record',
    '%s log records'=>'%s log records',
    'Add Mail Domain'=>'Add Mail Domain',
    'MAIL_ACTION_CONFIRMATION'=>'Are you sure to <b>%s</b> mail for domain <b>%s</b>?',
    'one domain with email'=>'one domain with email',
    '%s domains with email'=>'%s domains with email',
    'Add Mail Account'=>'Add Mail Account',
    'MAIL_ACCOUNT_ACTION_CONFIRMATION'=>'Are you sure to <b>%s</b> mail account <b>%s</b>?',
    'one mail account'=>'one mail account',
    '%s mail accounts'=>'%s mail accounts',
    'Add Package'=>'Add Package',
    'PACKAGE_DELETE_CONFIRMATION'=>'Are you sure to delete package <b>%s</b>?',
    'one package'=>'one package',
    '%s packages'=>'%s packages',
    'Daily'=>'Daily',
    'Weekly'=>'Weekly',
    'Monthly'=>'Monthly',
    'Yearly'=>'Yearly',
    'Search Results'=>'Search Results',
    'login as'=>'login as',
    'ARE_YOU_FUCKING_SURE'=>'Are you sure to <b>%s</b> <b>%s</b>?',
    'Object'=>'Object',
    'one object'=>'one object',
    '%s objects'=>'%s objects',
    'Overall Statistics'=>'Overall Statistics',
    'show per user'=>'show per user',
    'Hosting'=>'Hosting',
    'Mail'=>'Mail',
    'User Directories'=>'Папки User Directories',
    'Web SSL Domains'=>'Web SSL Domains',
    'one month'=>'one month',
    '%s months'=>'%s months',
    'Add User'=>'Add User',
    'Add Domain'=>'Add Domain',
    'rebuild'=>'rebuild',
    'rebuild web'=>'rebuild web',
    'rebuild DNS'=>'rebuild DNS',
    'rebuild mail'=>'rebuild mail',
    'rebuild db'=>'rebuild db',
    'rebuild cron'=>'rebuild cron',
    'update counters'=>'update counters',
    'LOGGED_IN_AS'=>'Logged in as %s',
    'USER_ACTION_CONFIRMATION'=>'Are you sure to <b>%s</b> user <b>%s</b>?',
    'one account'=>'one account',
    '%s accounts'=>'%s accounts',
    'Add Domain for hosting'=>'Add Domain for hosting',
    'open webstats'=>'open webstats',
    'Error Log'=>'Error Log',
    'CGI Support'=>'CGI Support',
    'Statistics Auth'=>'Statistics Auth',
    'running'=>'running',
    'SERVICE_ACTION_FAILED'=>'Error: Oparaion "%s" for service "%s" has been failed',
    'Memory Usage'=>'Memory Usage',
    'Bandwidth Usage'=>'Bandwidth Usage',
);

/*error_reporting(E_ALL);
ini_set('display_errors',true);*/