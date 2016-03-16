Installation
============

## Requirements

The minimum requirement by this project template is that your Web server supports PHP 5.4.0.

## Installing using Composer. go to folder "core"
    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer
    composer global require "fxp/composer-asset-plugin:~1.1.1"
    composer update
    
## Preparing application
Apply database via Sypex Dumper 

    1.Open an URL http://domain.com/sxd/ in browser.
    2.Enter the username and password for your database.
    3.Acount admin/admin
