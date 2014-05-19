MantidWiki Setup Notes
=======================

####Contact Page Setup

To send mail the contact page needs to have some email server setting set. To do this navigate to mediawiki/skins/strapping/ and open Strapping.skin.php. Starting from line 871 there is a block of code which needs to have SMTP email settings input. Once these are input the contact page will be able to send email. 

*Note: If redeploying the mediawiki then the contact page needs to be recreated. This page works by identifying a page with the title 'Contact'. Delete any other pages that may have this name and create a blank page called Contact. When viewed with the mantid strapping skin enabled this will render the boostrap contact form.*

