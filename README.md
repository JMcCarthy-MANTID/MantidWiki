MantidWiki Setup Notes
=======================

This guide is written with the understand that you are starting with a fresh install of mediawiki and want to import and existing mediawiki database to the new mediawiki instance.

####Database setup
To being you need to have the dump file for your existing mediawiki. Import this dump file to the new database you wish to use. Take note of the table extension if there is one. For Mantid this is MP_. Once you have imported your schema follow the standard mediawiki setup guide skipping over the database setup steps:

http://www.mediawiki.org/wiki/Manual:Installing_MediaWiki

When running the install script you will be given fields to add the database connections details. Here specify the database you imported your dumpfile into. Also here you can add the mysql table prefix. The full set of fields can be seen here:

http://upload.wikimedia.org/wikipedia/commons/4/40/MediaWiki_Config_script.png


####Importing existing database to mediawiki
Having received a mysql dump file for the existing mantid wiki this needs to be imported to the mysql database you wish to use. If you are starting with a fresh install of mediawiki then you can input these database details when you are deploying and mediawiki will recognize the mediawiki schema already exists in the database and update this for use with the new install. If you are updating just the database then you can re-run the config script to basically redo the install process: http://www.mediawiki.org/wiki/Manual:Config_script

####Mantid Skin
The Mantid skin is a modified version of strapping. The modified version is in this repo. 
 

####Contact Page Setup

To send mail the contact page needs to have some email server setting set. To do this navigate to mediawiki/skins/strapping/ and open Strapping.skin.php. Starting from line 871 there is a block of code which needs to have SMTP email settings input. Once these are input the contact page will be able to send email. 

*Note: If redeploying the mediawiki then the contact page needs to be recreated. This page works by identifying a page with the title 'Contact'. Delete any other pages that may have this name and create a blank page called Contact. When viewed with the mantid strapping skin enabled this will render the boostrap contact form.*

####Extensions 

These are the extensions that are required for the mantid wiki:
* AllowAnchorTags (Version 1)	
* Google Custom Search Engine
* Math (Version 1.2.0)
* No Title (Version 0.2.0)
* SyntaxHighlight (Version 1.0.8.11)

