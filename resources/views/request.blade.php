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
        
        <link href="/static/css/request.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <img src="/static/img/viitorcloud.png" class="img-responsive" alt="ViitorCloud Technologies Pvt Ltd" onerror="this.src='/static/img/viitorcloud.png'"/>

                    <h3 class="heading font-bold name" id="prompt-header">ViitorCloud Alumnus,</h3>

                    <div class="col-md-12 col-sm-12 col-xs-12 no-padding-col">
                        <p class="description font-light"> 
                            By making it through the ViitorCloud Technologies, you join an elite community of entrepreneurs around the world. We hope that the ViitorCloud Technologies was just one stop of your entrepreneurial journey along your way to bigger and better things. To prove that your membership in this community, we are offering anyone who has gone through the ViitorCloud Technologies a digital certificate.
                        </p>
                        <h5>How Do Digital Certificates Work?</h5>
                        <p class="description font-light"> 
                            The ViitorCloud Technologies Digital Certificates are created using the Bitcoin blockchain. In order to issue you a certificate, <b><a href="/bitcoinkeys">you need to have a Bitcoin address</a></b>. If you have a pre-existing identity, we recommend that you <b><a href="/bitcoinkeys">make a new Bitcoin Address</a></b> to hold your ViitorCloud Technologies Digital Certificate.
                        </p>
                        <p class="description font-light">
                            <b>Please note:</b> If you have a pre-existing Bitcoin address, it is recommended that you make a new Bitcoin address to hold your Digital Certificate.
                        </p>
                    
                        <div class="col-md-12 col-sm-12 col-xs-12 no-padding-col">
                            <form method="POST" id="bitcoin-form">
                                <span class="first-group">
                                    
                                    <div class="radio">
                                        <label class="radio-label">
                                            <input type="radio" class="radio-input" name="identity" id="identity" value="yes">
                                            <span class="font-light lbl padding-8">Yes, I have a Bitcoin address</span>
                                        </label>
                                    </div>
                                
                                    <div class="radio">
                                        <label class="radio-label">
                                            <input type="radio" class="radio-input" name="identity" id="identity" value="no">
                                            <span class="font-light lbl padding-8">No, I don&#39;t have a Bitcoin address</span>
                                        </label>
                                    </div>
                            
                                </span>
                            
                                <div class="col-md-12 col-sm-12 col-xs-12 no-padding-col">
                                    <button type="button" class="btn btn-default btn-margin font-light" id="next-btn-1">Next</button>
                                </div>
                            </form>
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding-col">
                                <a href="/bitcoinkeys" target="_blank">
                                    <button type="button" class="btn btn-default btn-margin font-light btn-margin show-later" id="generate-keys-btn" style="background-color:royalblue;">Click to Create your Bitcoin address</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <span id="reg-info" class="show-later">
                    
                        <div class="col-md-12 col-sm-12 col-xs-12 no-padding-col">

                            <form method="POST" id="reg-form">
                                <div class="input-group input-group-lg first-group">
                                    <input class="form-control" id="pubkey" name="pubkey" placeholder="Bitcoin Public Address" type="text" value="">
                                </div>

                                <div class="input-group input-group-lg first-group">
                                    <input class="form-control" id="first_name" name="first_name" placeholder="First Name" type="text" value="">
                                </div>

                                <div class="input-group input-group-lg first-group">
                                    <input class="form-control" id="last_name" name="last_name" placeholder="Last Name" type="text" value="">
                                </div>
                    
                                <div class="input-group input-group-lg first-group last-input">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="">
                                </div>

                                <p class="font-light form-text">Please use the email we have used to corresponded with you if possible.</p>
                                <br/>
                                <div class="input-group input-group-lg first-group last-input">
                                    <input class="form-control" id="linkedin" name="linkedin" placeholder="linkedIn URL" type="url" value="">
                                </div>

                                <p class="font-light form-text">Please use the full linkedIn URL.</p>
                                <br/>
                                <p class="lead form-text">In which class did you graduate from?</p>
                                <span class="first-group">
                        
                                    <div class="radio">
                                        <label class="radio-label">
                                            <input type="radio" class="radio-input" name="graduating_class" id="graduating_class" value="1">
                                            <span class="font-light lbl padding-8">Class 1, IN 2014</span>
                                        </label>
                                    </div>
                    
                                    <div class="radio">
                                        <label class="radio-label">
                                            <input type="radio" class="radio-input" name="graduating_class" id="graduating_class" value="2">
                                            <span class="font-light lbl padding-8">Class 2, IN 2015</span>
                                        </label>
                                    </div>
                                
                                    <div class="radio">
                                        <label class="radio-label">
                                            <input type="radio" class="radio-input" name="graduating_class" id="graduating_class" value="3">
                                            <span class="font-light lbl padding-8">Class 3, IN 2016</span>
                                        </label>
                                    </div>
                                
                                    <div class="radio">
                                        <label class="radio-label">
                                            <input type="radio" class="radio-input" name="graduating_class" id="graduating_class" value="4">
                                            <span class="font-light lbl padding-8">Class 4, IN 2017</span>
                                        </label>
                                    </div>
                                
                                    <div class="radio">
                                        <label class="radio-label">
                                            <input type="radio" class="radio-input" name="graduating_class" id="graduating_class" value="5">
                                            <span class="font-light lbl padding-8">Class 5, IN 2018</span>
                                        </label>
                                    </div>
                                
                                    <div class="radio">
                                        <label class="radio-label">
                                            <input type="radio" class="radio-input" name="graduating_class" id="graduating_class" value="6">
                                            <span class="font-light lbl padding-8">Class 6, IN 2019</span>
                                        </label>
                                    </div>
                                
                                </span>
                    
                                <div class="input-group input-group-lg first-group last-input btn-margin" id="comments-input">
                                    <input class="form-control" id="comments" name="comments" placeholder="Comments" type="text" value="">
                                </div>
                    
                                <button type="button" class="btn btn-default btn-margin font-light" id="next-btn">Next</button>

                                <span id="shipping-info" class="show-later">
                                    <h3 class="heading font-bold">Home Address</h3>
                                    <p class="description font-light"> We will use this address to help verify your attendence.</p>
                                    <div class="input-group input-group-lg"><input class="form-control" id="address" name="address" placeholder="Address" type="text" value=""></div>
                                    
                            

                                    <div class="input-group input-group-lg"><input class="form-control" id="city" name="city" placeholder="City" type="text" value=""></div>
                                    
                            

                                    <div class="input-group input-group-lg"><input class="form-control" id="state" name="state" placeholder="State/Province/Region" type="text" value=""></div>
                                    
                            

                                    <div class="input-group input-group-lg"><input class="form-control" id="zipcode" name="zipcode" placeholder="ZIP/Postal Code" type="text" value=""></div>
                                    
                            

                                    <div class="input-group input-group-lg last-input"><input class="form-control" id="country" name="country" placeholder="Country" type="text" value=""></div>
                                    
                            

                                    <button type="submit" class="btn btn-default btn-margin font-light" id="submit-btn">Submit</button>
                                </span>
                            </form> 
                        </div>
                    
                    </span>

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
        <script type="text/javascript" src="/static/js/register.js"></script>
    </body>
</html>
