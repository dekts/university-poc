<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="A project by the ViitorCloud Technologies Pvt Ltd. Digital certificates are registered on the blockchain, cryptographically signed, and tamper proof.">
        <meta name="author" content="Devat Karetha">
		<meta property="og:title" content="University Digital Certificates" />
		<meta property="og:url" content="http://certificates.viitorcloud.in/" />
		<meta property="og:image" content="http://certificates.viitorcloud.in/static/img/cert.png" />
		<meta property="og:description" content="A project by the ViitorCloud Technologies Pvt Ltd. Digital certificates are registered on the blockchain, cryptographically signed, and tamper proof." />
		<meta property="og:site_name" content="University Certificates" />
		
        {{-- <link rel="icon" href="static/img/favicon.png"> --}}

        <title>University Digital Certificates</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link href="/static/css/style.css" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link href="/static/css/keys.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">

            <div class="row hide-on-print">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <img src="/static/img/viitorcloud.png" class="img-responsive" alt="ViitorCloud Technologies Pvt Ltd" onerror="this.src='/static/img/viitorcloud.png'"/>

                    <h3 class="heading font-bold name">Create your Bitcoin address</h3>
                    <p class="description font-light">
                        Please turn off your wifi and continue. Once your Bitcoin keys have been generated, please print them out and save them. Then return to certificates-bootcamp.mit.edu
                        <br>
                        <button id="generatekeys" class="btn btn-default btn-margin">Click to Generate your Bitcoin address Keys</button><div id="to-load"></div>
                    </p>
                </div>
            </div>

            <div class="row">
                <div id="keys" class="col-md-6 col-sm-8 col-xs-12 show-later divToPrint">
                    <img id="logo" src="/static/img/viitorcloud.png" class="img-responsive" alt="ViitorCloud Technologies Pvt Ltd" width="20px"/>
                    <span class="heading font-bold"> DO NOT DISCARD</span>
                    <br>
                    <br>
                    <p class="description font-light key-text wallet-warning">The ViitorCloud Technologies does not contain a copy of this information. </p>
                    <p class="description key-text"> Bitcoin Public Address: </p>
                    <p class="description font-light key-text" id="pubKey"></p>
                    <p><center><div id="pubKeyQr" class="enable-clear"></div></center></p>
                    <p id="middle-section"></p>
                    <p class="description font-light key-text fold-text">Fold along line to hide private key.</p>
                    <p class="description key-text"> Private Key: </p>
                    <p class="description font-light key-text" id="privKey"></p>
                    <p><center><div id="privKeyQr" class="enable-clear"></div></center></p>
                </div>
            </div>

            <div class="row hide-on-print">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <button id="print-btn" class="btn btn-default btn-margin font-light show-later">Print</button>
                </div>
            </div>

            <div class="row hide-on-print">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <button 
                    id="copy-btn" 
                    class="btn btn-default btn-margin font-light show-later" 
                    data-clipboard-action="copy" 
                    data-clipboard-target="#pubKey"
                    data-placement="right"
                    title="Copied!">
                    Copy Public Address
                    </button>
                </div>
            </div>
                
            <div class="row hide-on-print">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <p class="description font-light">
                    <br>
                    <a id="return-link" class="show-later" href="/request"> Return to the certificate's request page >> </a>
                    </p>
                </div>
            </div>

            <div class="row hide-on-print font-light" id="footer-info">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <h6 id="footer-start">Contact: <span class="font-light"><a href="mailto:certificates@viitorcloud.com">certificates@viitorcloud.com</a></span></h6>
                    <h6 id="footer-start">Questions? <span class="font-light"><a href="/faq">Check out our FAQ page</a></span></h6>
                    <h6><span class="no-wrap">ViitorCloud Technologies Pvt Ltd</span></h6>
                </div>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="/static/js/dist/dotdotdot.js"></script>
        <script type="text/javascript" src="/static/js/dist/bitcoinjs.min.js"></script>
        <script type="text/javascript" src="/static/js/dist/qrcode.min.js"></script>
        <script type="text/javascript" src="/static/js/dist/clipboard.min.js"></script>
        <script type="text/javascript" src="/static/js/bitcoinkeys.js"></script>
        <script type="text/javascript" src="/static/js/print.js"></script>
    </body>
</html>
