<?
## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

$wgAllowExternalImages = true;

# End of automatically generated settings.
# Add more configuration options below.


## Strapping set as the default skin
require_once( "$IP/skins/strapping/strapping.php" );
$wgDefaultSkin = "strapping";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

#Collection settings
$wgCollectionMWServeURL = "http://otak.nd.rl.ac.uk:8899/";
$wgCollectionPODPartners = false;

$wgCollectionFormats = array(
     'rl' => 'PDF',
     'odf' => 'ODT',
     'docbook' => 'DocBook'
);

$wgGroupPermissions['user']['collectionsaveasuserpage'] = true;
$wgGroupPermissions['autoconfirmed']['collectionsaveascommunitypage'] = true;

# End of automatically generated settings.
# Add more configuration options below.
require_once("$IP/extensions/Collection/Collection.php");
require_once("$IP/extensions/AllowAnchorTags/AllowAnchorTags.php");
require_once("$IP/extensions/NoTitle/NoTitle.php");
require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");
require_once("$IP/extensions/ConfirmAccount/ConfirmAccount.php");
require_once("$IP/extensions/PHPMailer/PHPMailerAutoload.php");
require_once("$IP/extensions/GoogleCustomSearch/google-cse.php");
require_once("$IP/extensions/Math/Math.php");

// End of HTML Tags //