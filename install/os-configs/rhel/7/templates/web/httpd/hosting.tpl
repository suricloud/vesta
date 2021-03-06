<VirtualHost %ip%:%web_port%>

    ServerName %domain_idn%
    %alias_string%
    ServerAdmin %email%
    DocumentRoot %docroot%
    ScriptAlias /cgi-bin/ %home%/%user%/web/%domain%/cgi-bin/
    Alias /vstats/ %home%/%user%/web/%domain%/stats/
    Alias /error/ %home%/%user%/web/%domain%/document_errors/
    #SuexecUserGroup %user% %group%
    CustomLog /var/log/%web_system%/domains/%domain%.bytes bytes
    CustomLog /var/log/%web_system%/domains/%domain%.access.log combined
    ErrorLog /var/log/%web_system%/domains/%domain%.error.log
    <Directory %docroot%>
        AllowOverride All
        Options +Includes -Indexes +ExecCGI
        php_admin_value upload_max_filesize 10M
        php_admin_value max_execution_time 60
        php_admin_value post_max_size  8M
        php_admin_value memory_limit 256M
        php_admin_flag mysql.allow_persistent  off
        php_admin_flag safe_mode off
        php_admin_value sendmail_path "/usr/sbin/sendmail -t -i -f info@%domain_idn%"
        php_admin_value open_basedir %docroot%:%home%/%user%/tmp:/bin:/usr/bin:/usr/local/bin:/var/www/html:/tmp:/usr/share:/etc/phpMyAdmin:/etc/phpmyadmin:/var/lib/phpmyadmin:/etc/roundcubemail:/etc/roundcube:/var/lib/roundcube:/var/log/roundcubemail/
        php_admin_value upload_tmp_dir %home%/%user%/tmp
        php_admin_value session.save_path %home%/%user%/tmp
    </Directory>
    <Directory %home%/%user%/web/%domain%/stats>
        AllowOverride All
    </Directory>
    php_admin_value open_basedir %home%/%user%/web:%home%/%user%/tmp:/bin:/usr/bin:/usr/local/bin:/var/www/html:/tmp:/usr/share:/etc/phpMyAdmin:/etc/phpmyadmin:/etc/roundcubemail:/etc/roundcube:/var/lib/roundcube:/var/log/roundcubemail/
    <IfModule mod_ruid2.c>
        RMode config
        RUidGid %user% %group%
        RGroups apache
    </IfModule>
    <IfModule itk.c>
        AssignUserID %user% %group%
    </IfModule>

    IncludeOptional %home%/%user%/conf/web/%web_system%.%domain%.conf*

</VirtualHost>

