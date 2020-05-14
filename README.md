## Create Database

CREATE DATABASE moodle DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

SET GLOBAL innodb_file_format = barracuda
SET GLOBAL innodb_large_prefix = 'on'

##Create Config.php

Change $CFG->prefix    = 'mdl_';	 	To $CFG->prefix    = 'mdl2_';
As original mdl2 install tables will be deleted.

## Install Moodle

Install moodle through localhost in browser just using any old details as these will be deleted.

## Sync with Live site

To update the database dump out the whole of the live database into a single  SQL file.
Using DataGrip go to File > Open and select your SQL dump file. Then right click the tab for the file to get the context menu, and select "Run” option. Select the local database.
Amend the config.php file to the default $CFG->prefix = 'mdl_'; So that it gets the new database tables.
Delete the old 'mdl2_’ tables.
Update private_html/moodledata folder from the server.

## New Changes 

git checkout -b horizontal_multi-MOODLE_38_STABLE

git add .

git commit -m '....'

##### Push changes to horizontal_multi-MOODLE_23_STABLE
git push origin horizontal_multi-MOODLE_23_STABLE


