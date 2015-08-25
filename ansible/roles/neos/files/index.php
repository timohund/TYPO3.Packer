<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>TYPO3 & NEOS box</title>

	<style type="text/css">
		html {
			font-family: sans-serif;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%
		}

		body {
			margin: 0;
		}

		article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
			display: block
		}

		audio, canvas, progress, video {
			display: inline-block;
			vertical-align: baseline
		}

		audio:not([controls]) {
			display: none;
			height: 0
		}

		[hidden], template {
			display: none
		}

		a {
			background: transparent
		}

		a:active, a:hover {
			outline: 0
		}

		abbr[title] {
			border-bottom: 1px dotted
		}

		b, strong {
			font-weight: bold
		}

		dfn {
			font-style: italic
		}

		h1 {
			font-size: 2em;
			margin: 0.67em 0
		}

		mark {
			background: #ff0;
			color: #000
		}

		small {
			font-size: 80%
		}

		sub, sup {
			font-size: 75%;
			line-height: 0;
			position: relative;
			vertical-align: baseline
		}

		sup {
			top: -0.5em
		}

		sub {
			bottom: -0.25em
		}

		img {
			border: 0
		}

		svg:not(:root) {
			overflow: hidden
		}

		figure {
			margin: 1em 40px
		}

		hr {
			-moz-box-sizing: content-box;
			-webkit-box-sizing: content-box;
			box-sizing: content-box;
			height: 0
		}

		pre {
			overflow: auto
		}

		code, kbd, pre, samp {
			font-family: monospace, monospace;
			font-size: 1em
		}

		button, input, optgroup, select, textarea {
			color: inherit;
			font: inherit;
			margin: 0
		}

		button {
			overflow: visible
		}

		button, select {
			text-transform: none
		}

		button, html input[type="button"], input[type="reset"], input[type="submit"] {
			-webkit-appearance: button;
			cursor: pointer
		}

		button[disabled], html input[disabled] {
			cursor: default
		}

		button::-moz-focus-inner, input::-moz-focus-inner {
			border: 0;
			padding: 0
		}

		input {
			line-height: normal
		}

		input[type="checkbox"], input[type="radio"] {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			padding: 0
		}

		input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
			height: auto
		}

		input[type="search"] {
			-webkit-appearance: textfield;
			-moz-box-sizing: content-box;
			-webkit-box-sizing: content-box;
			box-sizing: content-box
		}

		input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
			-webkit-appearance: none
		}

		fieldset {
			border: 1px solid #c0c0c0;
			margin: 0 2px;
			padding: 0.35em 0.625em 0.75em
		}

		legend {
			border: 0;
			padding: 0
		}

		textarea {
			overflow: auto
		}

		optgroup {
			font-weight: bold
		}

		table {
			border-collapse: collapse;
			border-spacing: 0
		}

		td, th {
			padding: 0
		}

		.button {
			position: relative;
			display: inline-block;
			overflow: hidden;
			padding: 0.625rem 1rem;
			border-radius: 0.25rem;
			background-color: #ed197a;
			background: -webkit-linear-gradient(335deg, #ed197a 50%, #d4136d 50%);
			background: linear-gradient(115deg, #ed197a 50%, #d4136d 50%);
			text-transform: uppercase;
			font-weight: 700;
			color: #f1f1f1
		}

		.button:hover {
			background: -webkit-linear-gradient(335deg, #db116e 50%, #bd1161 50%);
			background: linear-gradient(115deg, #db116e 50%, #bd1161 50%);
			color: #fff
		}

		.panel {
			position: relative;
			padding: 2.5rem;
			border: 0;
			margin-bottom: 2rem;
			-webkit-box-shadow: 0.0625rem 0.0625rem 0.1875rem 0 #ccc;
			box-shadow: 0.0625rem 0.0625rem 0.1875rem 0 #ccc;
			background: #fff;
			background: rgba(255, 255, 255, 0.75)
		}

		@media only screen and (min-width: 600px) {
			.panel {
				padding: 3.5rem 4.5rem 2rem 4.5rem
			}
		}

		.panel .panel-title {
			line-height: 1.6;
			margin: 0;
			font-family: Calibri, Arial, sans-serif;
			font-size: 1.5625rem;
			color: #141413
		}

		@media only screen and (min-width: 600px) {
			.panel .panel-title {
				font-size: 2.8125rem
			}
		}

		.panel .panel-text {
			line-height: 1.6;
			margin: 0 0 1.5rem 0;
			color: #626365
		}

		.social {
			text-align: center
		}

		.social-icon {
			position: relative;
			overflow: hidden;
			display: inline-block;
			width: 2rem;
			height: 2rem;
			border: 0.125rem solid #d2d2d2;
			border-radius: 100%;
			margin-right: 0.9375rem;
			text-indent: 100%;
			white-space: nowrap
		}

		.social-icon:last-child {
			margin-right: 0
		}

		.social-icon:before {
			content: "";
			position: absolute;
			top: 50%;
			left: 50%
		}

		.social-icon:hover {
			border-color: #ed197a
		}

		.social-icon.social-icon-linkedin:before {
			width: 0.9375rem;
			height: 0.9375rem;
			margin-top: -0.4375rem;
			margin-left: -0.4375rem;
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANxJREFUeNpi9PLyYgCB4uJivt7e3k8MJADGvXv3sgLpPUBsB8RrgAaEEquZCYi1oBpBIAToAlFSNN8E4stQ/gEgfkO0ZqAzfwBpYyDWAGIXIP8/sZpZoPRsKA2ytQTodBsgnQIVWwnEmkAcDsS8QHwJiOuBltyEaY6H0g9BmoFYBUnMHYglkCwEGeQItECFiQjXgTReAOIdQPwPKiYGxH7EaD4HxEZAZ3oC6alI4vLEaD6EFIgXkMSFidH8EYn9D4nNzMRAARg4zbB4ToTSX6D0ESQx5EBCFr8GEGAArpM15ct406kAAAAASUVORK5CYII=")
		}

		.social-icon.social-icon-linkedin:hover:before {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAN9JREFUeNpi+P//PwMIv5Ws4oOxicWMQE2sDAwMe4DYDojXCD1rDWUgEjABsRZUIwiEvJOqFiVF800gvgzlHwDiN8RqZgS5HWgbyOlKQHwH6Oy/xGpmgdKzoTTI1hKgYTZAOgUqthKINYE4HIh5gfgSENcDLbkJ0xwPpR+CNAOxCpKYOxBLIFkIMsgRaIEKExGuA2m8AMQ7gPgfVEwMiP2I0XwOiI2AzvQE0lORxOWJ0XwIqPE/lH0BSVyYGM0fkdj/kNjMTAwUgIHTDIvnRCj9BUofQRJDDiRk8WsAAQYATsldobynt4IAAAAASUVORK5CYII=")
		}

		.social-icon.social-icon-twitter:before {
			width: 0.875rem;
			height: 0.75rem;
			margin-top: -0.375rem;
			margin-left: -0.4375rem;
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAMCAYAAABSgIzaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQBJREFUeNpi9PLyYiguLmbs7e39z4AFAOW8gJQZED8A4mVAzATEfIx79+7lBjJWAHEEUPNXNE1dQKoUSeg2EH8H4iiQbnEg9gHiE0CFZkiahIFUCZoDVIFYAoj5QTYyAxl3gFgBKnkMiNcC8Tcgno7F9VlAl01ngdp4F0mjFRTjAi8ZoB4FMeQZiAenwBqB1v4F0oFAfI4ITceB6p/AbASBh0AsTYTGOhgDrBFoymcg5QzE24H4Fw5NE4Dq9qBoBAY9KC6FgPgNELNh0TQRPWpA0aEFpKug/uRCkvsNxLuBuBNo0yF0kxhBSQ5qKyhq1IBYBIjfg+IWqOE7Ls8CBBgAQ9BHBQQpyFsAAAAASUVORK5CYII=")
		}

		.social-icon.social-icon-twitter:hover:before {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAMCAYAAABSgIzaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQNJREFUeNpi/P//P8M7qWpGoWet/xmwAKCcF5AyA+IHQLwMiJmAmI/xrWQVN5CxAogjgJq/omnqAlKlSEK3gfg7EEeBdIsDsQ8QnwAqNEPSJAykStAcoArEEkDMzwIkHkKdoQPEJ4EajgHptUD8DYgZsbi+AeiyYyxQG+8CsQJUwgqKcYGXDFCPghjyDMSDU2CNQGv/AulAID5HhKbjQPVPYDYyQP0pTYTGOhgDrBFoymcg5QzE24H4Fw5NE4Dq9qBoBIYkKC6FgPgNELNh0TQRPWpACUALSFdB/cmFJPcbiHcDcSfQpkPoJjGCkhzUVlDUqAGxCBC/B+I7QA3fcXkWIMAA0etKNnWD0noAAAAASUVORK5CYII=")
		}

		.social-icon.social-icon-facebook:before {
			width: 0.625rem;
			height: 1.125rem;
			margin-top: -0.5625rem;
			margin-left: -0.3125rem;
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAALlJREFUeNpi9PLyYsAGiouL+YEUFxB/6e3t/cyIrhCowANIdQKxHpLwRBY0RcZAahMQs6LbwILGL0BTdAWI3wLxHXSFWkjsSUC35cM4TGgKmZHYl5AlmBhwg7/IHMa9e/dWAOkKKJ8XSfN3IP4FZeeB3MgBxPxYTOSEYhB4hs9qZHAPpHAGEBtC8S0kyXok8YcswCB4AWS8gAb4dySFj4ByF4jxNQOxwTNYFKInimdALABlf0GWAAgwANCXKe5w4ZcNAAAAAElFTkSuQmCC")
		}

		.social-icon.social-icon-facebook:hover:before {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAALdJREFUeNpi/P//PwM28E6qmh9IcQHxF6FnrZ8Z0RUCFXgAqU4g1kMSnsiCpsgYSG0CYlZ0G1jQ+AVoiq4A8VsgvoOuUAuJPQnotnwYhwlNITMS+xKyBBMDbvAXmcP4VrKqAkhXQPm8SJq/A/EvKDsP5EYOIObHYiInFIPAM3xWI4N7IIUzgNgQim8hSdYjiT9EiRlggF8AUvpQbiIweBYQ42sGYoNnsChETxTPgFgAyv6CLAEQYADB8Sx53KhCiAAAAABJRU5ErkJggg==")
		}

		* {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		*:before, *:after {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		html, body {
			height: 100%
		}

		body {
			padding: 0 0.9375rem;
			background: #f6f6f6;
			background: -webkit-linear-gradient(335deg, #f6f6f6 60%, #e8e7e4 60%);
			background: linear-gradient(115deg, #f6f6f6 60%, #e8e7e4 60%);
			background-attachment: fixed;
			font-family: Lato, Arial, sans-serif;
			font-size: 1rem;
			text-align: center
		}

		a {
			text-decoration: none
		}

		.container {
			position: relative;
			max-width: 46.875rem;
			margin: 0 auto
		}

		.logo {
			display: inline-block;
			margin: 3.125rem 0;
		}

		a:link.logo {
			background-color: transparent;
		}

		svg.typo3-logo {
			padding-right: 0.7rem;
		}

		ul {
			list-style-type: none;
			padding: 0;
			margin: 20px 0;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<a href="https://github.com/Tuurlijk/TYPO3.Packer"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/8b6b8ccc6da3aa5722903da7b58eb5ab1081adee/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_orange_ff7600.png"></a>

<div class="container">

	<a href="https://www.maxserv.com/" rel="nofollow" class="logo">
		<img src="data:image/png;base64,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" width="293" height="76">
	</a>

	<div class="panel">
		<p class="panel-title">
			<a href="http://typo3.org">
				<svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" class="typo3-logo" width="200" viewBox="0 0 200 56">
					<metadata>
						<rdf:RDF>
							<cc:Work rdf:about="">
								<dc:format>image/svg+xml</dc:format>
								<dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
								<dc:title/>
							</cc:Work>
						</rdf:RDF>
					</metadata>
					<g transform="matrix(0.54938434,0,0,0.54938434,112.89374,-148.54418)" fill-rule="nonzero">
						<path fill="#000" d="m140,370c-5.2,0-13-1.6-14-1.8v-7.8c2.6,0.53,9.1,1.6,14,1.6,5.4,0,8.9-4.6,8.9-13,0-9.7-1.6-15-9.1-15h-8.7v-7.8h7.6c8.6,0,9-8.8,9-13,0-8.4-2.7-12-8-12-4.7,0-10,1.2-13,1.8v-7.8c1.2-0.21,7.4-1.8,13-1.8,11,0,17,4.7,17,21,0,7.2-2.6,14-8.2,16,6.5,0.42,9.5,7.5,9.5,18,0,16-6.2,22-18,22m-49-68c-9.6,0-13,6.5-13,30,0,23,3.2,30,13,30,9.6,0,13-7.6,13-30,0-23-3.2-30-13-30m0,68c-18,0-22-13-22-39,0-25,4.7-37,22-37,18,0,22,12,22,37,0,26-4.7,39-22,39m-53-68c-5.8,0-10,0.64-10,0.64v31h10c5.9,0,10-3.9,10-16,0-11-2.6-16-10-16m-1.1,39-8.9,0,0,28-9.2,0,0-74s9.1-0.74,18-0.74c16,0,21,10,21,23,0,16-5.5,24-21,24m-48-6.5,0,35-9.6,0,0-35-19-40,10,0,14,30,14-30,9.7,0-19,40zm-50-32,0,66-9.2,0,0-66-16,0,0-8.1,42,0,0,8.1-16,0z"/>
						<path fill="#ff8700" d="m-130,340c-1.5,0.44-2.7,0.6-4.3,0.6-13,0-32-45-32-60,0-5.5,1.3-7.3,3.1-8.9-16,1.8-35,7.6-41,15-1.3,1.8-2.1,4.7-2.1,8.4,0,23,25,76,42,76,8.1,0,22-13,33-31"/>
						<path fill="#ff8700" d="m-140,270c16,0,32,2.6,32,12,0,19-12,41-18,41-11,0-24-30-24-45,0-6.8,2.6-8.1,9.4-8.1"/>
					</g>
				</svg>
			</a> Try
		</p>

		<p class="panel-text">
			Great Success!
		</p>

		<p class="panel-text">
			You have successfully installed TYPOTry.
		</p>

		<p class="panel-text">
			The following sites are available:
			<ul>
			<?php
			$sites = scandir('..');
			$exclude = array(
				'.',
				'..',
				'html',
				'local.typo3.org'
			);
			foreach ($sites as $site) {
				if (!in_array($site, $exclude)) {
					echo '<li><a href="http://' . $site . '">http://' . $site . '</a></li>';
				}
			}
			?>
			</ul>
		</p>

		<a class="button" href="https://github.com/Tuurlijk/TYPO3.Packer" target="github">Contribute!</a>
	</div>
	<div class="social">
		<a class="social-icon social-icon-linkedin" href="https://www.linkedin.com/company/maxserv-b.v.">LinkedIn</a>
		<a class="social-icon social-icon-twitter" href="https://twitter.com/MaxServ">Twitter</a>
		<a class="social-icon social-icon-facebook" href="https://www.facebook.com/MaxServ">Facebook</a>
	</div>

</div>
</body>
</html>
