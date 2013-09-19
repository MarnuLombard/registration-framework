<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="author" content="" />
	<meta name="copyright" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title></title>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- CSS -->
	<!--[if (lt IE 9) & (!IEMobile)]>
		<link rel="stylesheet" href="css/no-mq.css" rel="stylesheet" />
	<![endif]-->

	<!--[if (gt IE 9) | (IEMobile)]><!-->
		<link rel="stylesheet" href="css/style.css" rel="stylesheet" />
	<!--<![endif]-->


	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png" />


</head>
<body>

	<noscript>
	</noscript>
<div class="grid-wrapper">

	<header class="section" role="banner">
		<nav class="nav" role="navigation">

		</nav>
	</header>


	<section class="main" role="main">

	<div id="content" class="center">
    <h1>Fancy Sliding Form with jQuery</h1>
      <div id="wrapper" class="overflow-wrapper">
        <div id="steps" class="form-container">
          <form id="formElem" name="formElem" class="regForm" action="" method="post">
            <fieldset class="step">
              <legend class="header--frame"><h2>Account</h2></legend>
              <p>
								<label for="cname">Name (required)</label>
								<input id="cname" name="name" minlength="2" type="text" required />
							<p>
								<label for="cemail">E-Mail (required)</label>
								<input id="cemail" placeholder="info@tympanus.net" type="email" name="email" required />
							</p>
							<p>
								<label for="curl">URL (optional)</label>
								<input id="curl" type="url" name="url" />
							</p>
							<p>
								<label for="ccomment">Your comment (required)</label>
								<textarea id="ccomment" name="comment" required></textarea>
							</p>
            </fieldset>
            <fieldset class="step">
                <legend class="header--frame"><h2>Personal Details</h2></legend>
                <p>
                    <label for="name">Full Name</label>
                    <input id="name" name="name" type="text" AUTOCOMPLETE=OFF />
                </p>
                <p>
                    <label for="country">Country</label>
                    <input id="country" name="country" type="text" AUTOCOMPLETE=OFF />
                </p>
                <p>
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" placeholder="e.g. +351215555555" type="tel" AUTOCOMPLETE=OFF />
                </p>
                <p>
                    <label for="website">Website</label>
                    <input id="website" name="website" placeholder="e.g. http://www.codrops.com" type="tel" AUTOCOMPLETE=OFF />
                </p>
            </fieldset>
            <fieldset class="step">
                <legend class="header--frame"><h2>Payment</h2></legend>
                <p>
	                <label for="cardtype">Card</label>
	                <select id="cardtype" name="cardtype">
	                    <option>Visa</option>
	                    <option>Mastercard</option>
	                    <option>American Express</option>
	                </select>
                </p>
                <p>
                    <label for="cardnumber">Card number</label>
                    <input id="cardnumber" name="cardnumber" type="text" AUTOCOMPLETE=OFF />
                </p>
                <p>
                    <label for="secure">Security code</label>
                    <input id="secure" name="secure" type="text" AUTOCOMPLETE=OFF />
                </p>
                <p>
                    <label for="namecard">Name on Card</label>
                    <input id="namecard" name="namecard" type="text" AUTOCOMPLETE=OFF />
                </p>
            </fieldset>
            <fieldset class="step">
                <legend class="header--frame"><h2>Settings</h2></legend>
                <p>
                    <label for="newsletter">Newsletter</label>
                    <select id="newsletter" name="newsletter">
                        <option value="Daily" selected>Daily</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Monthly">Monthly</option>
                        <option value="Never">Never</option>
                    </select>
                </p>
                <p>
                    <label for="updates">Updates</label>
                    <select id="updates" name="updates">
                        <option value="1" selected>Package 1</option>
                        <option value="2">Package 2</option>
                        <option value="0">Don't send updates</option>
                    </select>
                </p>
								<p>
                    <label for="tagname">Newsletter Tag</label>
                    <input id="tagname" name="tagname" type="text" AUTOCOMPLETE=OFF />
                </p>
              </fieldset>
							<fieldset class="step">
                <legend class="header--frame"><h2>Confirm</h2></legend>
								<p>
									Everything in the form was correctly filled
									if all the steps have a green checkmark icon.
									A red checkmark icon indicates that some field
									is missing or filled out with invalid data. In this
									last step the user can confirm the submission of
									the form.
								</p>
                <p class="submit">
                    <button id="registerButton" type="submit">Register</button>
                </p>
            </fieldset>
          </form>
        </div> <!-- // steps -->
        <div id="navigation" class="navigation__form" style="display:none;">
	        <ul class="nav--wrapper__form">
            <li class="nav--item selected">
                <a href="#">Account</a>
            </li>
            <li class="nav--item">
                <a href="#">Personal Details</a>
            </li>
            <li class="nav--item">
                <a href="#">Payment</a>
            </li>
            <li class="nav--item">
                <a href="#">Settings</a>
            </li>
						<li class="nav--item">
                <a href="#">Confirm</a>
            </li>
	        </ul>
        </div> <!-- // nav -->
      </div><!-- // wrapper -->
    </div><!-- //content -->

	</section><!-- //main -->


	<footer class="section" role="contentinfo">
	</footer><!-- //footer -->

</div><!-- //grid-wrapper -->


<!--//- Scripts -//-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')
	</script>

	<script src="js/script.min.js"></script>
	<script src="js/app.min.js"></script>

</body>
</html>