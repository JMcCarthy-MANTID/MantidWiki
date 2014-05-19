MantidWiki Setup Notes
=======================

####Importing existing database to mediawiki
Having received a mysql dump file for the existing mantid wiki this needs to be imported to mysql database you wish to use. If you are starting with a fresh install of mediawiki then you can input these database details when you are deploying and mediawiki will recognize the mediawiki schema already exists in the database and update this for use with the new install. If you are updating just the database then you can re-run the config script to basically redo the install process: http://www.mediawiki.org/wiki/Manual:Config_script

When importing from the odl. 

####Contact Page Setup

To send mail the contact page needs to have some email server setting set. To do this navigate to mediawiki/skins/strapping/ and open Strapping.skin.php. Starting from line 871 there is a block of code which needs to have SMTP email settings input. Once these are input the contact page will be able to send email. 

*Note: If redeploying the mediawiki then the contact page needs to be recreated. This page works by identifying a page with the title 'Contact'. Delete any other pages that may have this name and create a blank page called Contact. When viewed with the mantid strapping skin enabled this will render the boostrap contact form.*

