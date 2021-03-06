<?  function template_top($title = 'Prosper202 Self Hosted Apps') { global $navigation; global $version;  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>

<title><? echo $title; ?></title>
<meta name="description" content="description" />
<meta name="keywords" content="keywords"/>
<meta name="copyright" content="Prosper202, Inc" />
<meta name="author" content="Prosper202, Inc" />
<meta name="MSSmartTagsPreventParsing" content="TRUE"/>

<meta name="robots" content="noindex, nofollow" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no"/>
  
<link rel="shortcut icon" href="/202-img/favicon.gif" type="image/ico"/> 
<link href="/202-css/account.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/tracking202/js/prototype.js"></script>
		
<? switch ($navigation[1]) { 
	
	case "tracking202": 
	case "stats202":
	case "alerts202": 
	case "offers202":
		?><link href="/202-css/tracking202.css" rel="stylesheet" type="text/css"/>
		<link href="/202-css/reporting.css" rel="stylesheet" type="text/css"/>
		<link href="/202-css/scal.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="/tracking202/js/tracking202scripts.js"></script>  
		<script type="text/javascript" src="/tracking202/js/call_prefs.js"></script>  
		<script type="text/javascript" src="/tracking202/js/scriptaculous/scriptaculous.js"></script>
		<script type="text/javascript" src="/tracking202/js/scal.js"></script>
		<script type="text/javascript" src="/stats202/js/stats202.js"></script>
		<link href="/202-css/offers202.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="/offers202/js/offers202.js"></script>
		<link href="/202-css/offers202.css" rel="stylesheet" type="text/css"/><?
		break;
case "202-account":
	?><script type="text/javascript" src="/202-js/account.js"></script><?php 
	break;
} ?>

<? // MODIFICATION Start: "Meta Refresh to Tracking202 Page"

if (($navigation[1] == '202-account') and (($navigation[2] != 'account.php') and ($navigation[2] != 'administration.php')) ) {

// Set $refreshtime to the # of seconds to wait until redirecting
//
// Set $tab_page to the page to be redirected to: (Default is 2-Overview page)
//   1-"Setup" page
//
//   2a-"Overview >> Campaign Overview" page
//   2b-"Overview >> Daily Overview" page
//   2c-"Overview >> Hourly Overview" page
//
//   3a-"Analyze >> Keywords" page
//   3b-"Analyze >> Text Ads" page
//   3c-"Analyze >> Referers" page
//   3d-"Analyze >> IPs" page
//   3e-"Analyze >> Landing Pages" page
//   *3f-"Analyze >> Keywords LP CTR" page
//   *3g-"Analyze >> Text Ads LP CTR" page
//
//   4-"Visitors" page
//   5-"Spy" page
//   6-"Update" page
//
// *NOTE: 3f, 3g are used if you installed the LP CTR script.


$refreshtime = "0";
$tab_page = "2a";

switch ($tab_page) {
    case "1":
        $tab_page_url = "/tracking202/setup";
        break;
    case "2a":
        $tab_page_url = "/tracking202/overview";
        break;
    case "2b":
        $tab_page_url = "/tracking202/overview/daily.php";
        break;
    case "2c":
        $tab_page_url = "/tracking202/overview/hourly.php";
        break;
    case "3a":
        $tab_page_url = "/tracking202/analyze/keywords.php";
        break;
    case "3b":
        $tab_page_url = "/tracking202/analyze/text_ads.php";
        break;
    case "3c":
        $tab_page_url = "/tracking202/analyze/referers.php";
        break;
    case "3d":
        $tab_page_url = "/tracking202/analyze/ips.php";
        break;
    case "3e":
        $tab_page_url = "/tracking202/analyze/landing_pages.php";
        break;
    case "3f":
        $tab_page_url = "/tracking202/analyze/keywords_lpctr.php";
        break;
    case "3g":
        $tab_page_url = "/tracking202/analyze/text_ads_lpctr.php";
        break;
    case "4":
        $tab_page_url = "/tracking202/visitors";
        break;
    case "5":
        $tab_page_url = "/tracking202/spy";
        break;
    case "6":
        $tab_page_url = "/tracking202/update";
        break;
    default:
    	$tab_page_url = "/tracking202/";
}

?>
<meta http-equiv="refresh" content="<?php echo $refreshtime;?>;url=<?php echo $tab_page_url;?>" />
<? } // MODIFICATION End: "Meta Refresh to Tracking202 Page" ?>


</head>
<body>


<div class="body">


	<div class="body-content">
	
	<table class="header" cellspacing="0" cellpadding="0">
		<tr>
			<td class="shrink-width">
				<a href="/">
          <img src="/202-img/prosper202.png">
        </a>
			</td>
			<td>
				
				<div class="skyline">
		
					<div style="float: left; ">
						<a href="/tracking202/" <? if ($navigation[1] == 'tracking202') { echo 'class="bold";'; } ?>>Tracking202</a>  
						&middot;
						<a href="/stats202/" <? if ($navigation[1] == 'stats202') { echo 'class="bold";'; } ?>>Stats202</a>  
						&middot;
						<a href="/offers202/" <? if ($navigation[1] == 'offers202') { echo 'class="bold";'; } ?>>Offers202</a>  
						&middot; 
						<a href="/alerts202/" <? if ($navigation[1] == 'alerts202') { echo 'class="bold";'; } ?>>Alerts202</a>   
						<?php /* &middot; 
						<a href="/202-resources/" <? if ($navigation[1] == '202-resources') { echo 'class="bold";'; } ?>>Resources<span id="new_offers"></span></a>
						<script type="text/javascript"> new Ajax.Updater('new_offers', '/202-account/ajax/new-offers.php'); </script>*/ ?> 
					</div>
					
					<a href="/202-account/" <? if (($navigation[1] == '202-account') AND !$navigation[2]) { echo 'class="bold";'; } ?>>Home</a>  
					&middot;
					<a href="/202-account/account.php" <? if ($navigation[2] == 'account.php') { echo 'class="bold";'; } ?>>My Account</a>  
					&middot; 
					<a href="/202-account/administration.php" <? if ($navigation[2] == 'administration.php') { echo 'class="bold";'; } ?>>Administration</a>  
					&middot; 
					<a href="/202-account/help.php" <? if ($navigation[2] == 'help.php') { echo 'class="bold";'; } ?>>Help</a>  
					&middot;
					<a href="/202-account/signout.php">Sign Out</a>  
				</div>
				
				<div id=update_needed></div>
				<script type="text/javascript"> new Ajax.Updater('update_needed', '/202-account/ajax/update-needed.php'); </script>
			</td>
		</tr>
	</table>
	
	<div class="content"><? 
		
		if ($navigation[1] == 'tracking202') {  include_once($_SERVER['DOCUMENT_ROOT'] . '/tracking202/_config/top.php'); }
		
	} function template_bottom() { global $version;?></div>
	
	<div style="clear: both;"></div>
	<div class="footer">
		Thank you for marketing with <a href="http://prosper202.com">Prosper202</a>
		&middot; 
		<a href="/202-account/help.php">Help</a>
		&middot; 
		<a href="http://prosper202.com/apps/docs/">Documentation</a>
		&middot; 
		<a href="http://prosper202.com/apps/donate/">Donate</a>
		&middot; 
		<a href="http://prosper202.com/forum/">Forum</a>
		&middot; 
		
		<? if ($_SESSION['update_needed'] == true) { ?>
		 	<strong>Your Prosper202 <? echo $version; ?> is out of date. <a href="http://prosper202.com/apps/download/">Please update</a>.</strong>
		 <? } else { ?>
		 	Your Prosper202 <? echo $version; ?> is up to date.
		 <? } ?>
		 
		 <!--<p style="margin-top: 10px;">Like our software? &nbsp; You'll love the <a href="http://revolution.tracking202.com" style="padding: 0px;">Revolution202 Partner Network</a>!</p>-->
		 
		 
	<table style="margin: 20px auto 0px; text-align: left;" cellspacing="0" cellpadding="0">
		<tr valign="top">
			<td><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="/202-img/BYNCSA.png" /></a></td>
			<td style="line-height: 1.5em; padding-left: 10px; ">This work (Prosper202 and Tracking202) is licensed under a<br/> <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-Noncommercial-Share Alike 3.0 Unported License</a>.</td>
		</tr>
	</table>
		
	</div>



</div>

<!-- this is the prosper202 support widget -->
<script type="text/javascript" charset="utf-8">
	var is_ssl = ("https:" == document.location.protocol);
	var asset_url = is_ssl ? "https://s3.amazonaws.com/s3.tracking202.com/feedback/widget.js" : "http://cdn.tracking202.com/feedback/widget.js";
	document.write(unescape("%3Cscript src='" + asset_url + "' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>


<? } ?>
