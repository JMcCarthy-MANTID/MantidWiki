<?php
# Google Custom Search Engine Extension
# 
# Tag :
#   <GoogleCSE></GoogleCSE> or <GoogleCSE />
# Ex :
#   Add this tag to the wiki page you configed at your Google Custom Search control panel.
#
# Enjoy !

$wgExtensionFunctions[] = 'GoogleCSE';
$wgExtensionCredits['parserhook'][] = array(
					    'name' => 'Google Custom Search Engine',
					    'description' => 'Displays a Google Custom Search Engine input',
					    'author' => 'Liang Chen The BiGreat',
					    'url' => 'http://www.mediawiki.org/wiki/Extension:Google_Custom_Search_Engine');
 
function GoogleCSE() {
  global $wgParser; 
  $wgParser->setHook('GoogleCSE', 'renderGoogleCSE');
} 
 
# The callback function for converting the input text to HTML output
function renderGoogleCSE($input) {
  
/*   $output='<div id="cse" style="width:100%;"></div> */
/* <p><html> */
/* <script src="http://www.google.co.uk/jsapi" type="text/javascript"></script> */
/* <script type="text/javascript">  */
/*   google.load(\'search\', \'1\', {language:\'en\'}); */
/*   google.setOnLoadCallback(function() { */
/*     var customSearchOptions = {}; */
/*     customSearchOptions[\'adoptions\'] = {\'layout\': \'noTop\'}; */
/*     var customSearchControl = new google.search.CustomSearchControl( */
/*       \'008588072220186000118:m9mndufqi14\', customSearchOptions); */
/*     customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET); */
/*     var options = new google.search.DrawOptions(); */
/*     options.setAutoComplete(true); */
/*     customSearchControl.draw(\'cse\', options); */
/*     function parseParamsFromUrl() { */
/*       var params = {}; */
/*       var parts = window.location.search.substr(1).split(\'\x26\'); */
/*       for (var i = 0; i < parts.length; i++) { */
/*         var keyValuePair = parts[i].split(\'=\'); */
/*         var key = decodeURIComponent(keyValuePair[0]); */
/*         params[key] = keyValuePair[1]?decodeURIComponent(keyValuePair[1].replace(/\+/g, \' \')):keyValuePair[1]; */
/*       } */
/*       return params; */
/*     } */

/*     var urlParams = parseParamsFromUrl(); */
/*     var queryParamName = "q"; */
/*     if (urlParams[queryParamName]) { */
/*       customSearchControl.execute(urlParams[queryParamName]); */
/*     } */
/*   }, true); */
/* </script> */
/* <link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" /></script><div id="cse" style="width:100%;"></div> </html> */
/* </p>'; */

  $output='<script>(function() {var cx = \'008588072220186000118:m9mndufqi14\';var gcse = document.createElement(\'script\'); gcse.type = \'text/javascript\'; gcse.async = true;gcse.src = (document.location.protocol==\'https:\'?\'https:\':\'http:\') + \'//www.google.co.uk/cse/cse.js?cx=\' + cx; var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(gcse, s);})();</script><gcse:searchresults-only></gcse:searchresults-only>';

  return $output;
}