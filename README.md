# Traccar-Lite
Lite version of Traccar Server re-implemented in PHP (suitable for free hosting)

# Installation
1. Create MySQL database (or choose an existing one) at your site and import the SQL scripts from `db-new` subdirectory (in the specified order).
2. Put the scripts from `php` subdirectory on your site into any directory (let's name it `traccar`).
3. Copy sample file `config.php.SAMPLE` into `config.php` (within same directory), and adjust its content to specify DB connection details (DB name, user name and user password).

# Android Client settings
In the Android application you should specify the **Server URL** to point to the script `osmand.php` at your site (the path may look like `http://you.site.com/traccar/osmand.php`, secure connection over HTTPS should also work). 
