keosu
=====
Keosu is an open source CMS for mobile app.

Requirement
===
- PHP (Min 5.4)
- Apache (Min 2.2)
- Mysql

There is a lot of documentation on the web that explains how to do it.

You can donwload Wamp, Mamp or Xamp to do it easilly.
Check that date.timezone is set in your php.ini file.
For example:

    date.timezone = "Europe/Paris"

Tips you can use php -info command to locate your php.ini

Installation
===
With packaged version (easy way)
=
Go to release page (<a href="https://github.com/vleborgne/keosu/releases">here</a>) and download the last ralease zip file.<br/>
Unzip it in your apache webdir<br/>
Move to your web/install/check.php with your navigator (ie http://localhost/keosu/web/install/check.php)<br /> 

Note : Don't create your database manually before executing the script


From sources (nerd only) Run control table as administrator
=
Clone project in your apache webspace
Download composer.phar
<pre>
<code>
    curl -s https://getcomposer.org/installer | php
</code>
</pre>
or for windows users

<pre>
<code>
    php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"
</code>
</pre>

run
<pre>
<code>
    php composer.phar update
    php app/console assetic:dump
</code>
</pre>

Test it
==
Move to your web/app.php with your navigator (ie http://localhost/keosu/web/app.php)<br /> 
Login : admin<br /> 
Password: YouChooseIt<br /> 


Note
===
A packaged version without command line is comming soon
