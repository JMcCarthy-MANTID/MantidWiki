MantidWiki Setup Notes
=======================

This guide is written with the understand that you are starting with a fresh install of mediawiki and want to import and existing mediawiki database to the new mediawiki instance.

####Database setup
To being you need to have the dump file for your existing mediawiki. Import this dump file to the new database you wish to use. Take note of the table extension if there is one. For Mantid this is MP_. Once you have imported your schema follow the standard mediawiki setup guide skipping over the database setup steps:

http://www.mediawiki.org/wiki/Manual:Installing_MediaWiki

When running the install script you will be given fields to add the database connections details. Here specify the database you imported your dumpfile into. Also here you can add the mysql table prefix. The full set of fields can be seen here:

http://upload.wikimedia.org/wikipedia/commons/4/40/MediaWiki_Config_script.png

Once you have completed this setup you will be able to download the LocalSettings.php for your mediawiki and enter the mediawiki. 

####Extensions
At this point you have a mirror of your previous mediawiki instance on a newer version of mediawiki. The next step is to install the extensions that we use for Mantid. The extensions are:

* AllowAnchorTags (Version 1)	
* Google Custom Search Engine
* Math (Version 1.2.0)
* No Title (Version 0.2.0)
* SyntaxHighlight (Version 1.0.8.11)
* Collection (Version 1.7.1)
* ConfirmAccount

The confirm account and Google Custom Search Engine need extra settings to work. The settings for ConfirmAccount can be found in this repo. The Google Custom Search settings are also found in this repo. 

####Mantid Skin
The mediawiki now the correct extensions and the database content but requires the strapping skin to be installed. To give the extra functionality that Mantid requires we have modified strapping for the Mantid Project. This modified version of strapping is also found in this repo. Download this and install it as a standard skin. To install place the strapping folder in the skins folder of the mediawiki directory. Then modify the LocalSettings.php to use this new skin:

```php
## Strapping set as the default skin
require_once( "$IP/skins/strapping/strapping.php" );
$wgDefaultSkin = "strapping";
```

A few changes are now needed to setup the Mantid database to make use of the new skin. First edit the homepage of the wiki to use the code included in this repo under HomePage. This will then use bootstrap to render an attractive home page. 

Secondly create a blank page called 'Contact' and save it. This will be intrepreted by the new skin and will render a bootstrap contact form. 

Finally update the side bar links which in the new wiki define the top links. Do this by visting the special page: index.php/MediaWiki:Sidebar and replacing the content within for the code found in this repo under Toplinks. 


####Contact Page Setup

To send mail the contact page needs to have some email server setting set. To do this navigate to mediawiki/skins/strapping/ and open Strapping.skin.php. Starting from line 871 there is a block of code which needs to have SMTP email settings input. Once these are input the contact page will be able to send email. 

####Summary
Your wiki should now be setup to use the extensions and mantid strapping skin required. 
