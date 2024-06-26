<!DOCTYPE html>
<!-- Ticket #11289, IE bug fix: always pad the error page with enough characters such that it is greater than 512 bytes, even after gzip compression abcdefghijklmnopqrstuvwxyz1234567890aabbccddeeffgghhiijjkkllmmnnooppqqrrssttuuvvwwxxyyzz11223344556677889900abacbcbdcdcededfefegfgfhghgihihjijikjkjlklkmlmlnmnmononpopoqpqprqrqsrsrtstsubcbcdcdedefefgfabcadefbghicjkldmnoepqrfstugvwxhyz1i234j567k890laabmbccnddeoeffpgghqhiirjjksklltmmnunoovppqwqrrxsstytuuzvvw0wxx1yyz2z113223434455666777889890091abc2def3ghi4jkl5mno6pqr7stu8vwx9yz11aab2bcc3dd4ee5ff6gg7hh8ii9j0jk1kl2lmm3nnoo4p5pq6qrr7ss8tt9uuvv0wwx1x2yyzz13aba4cbcb5dcdc6dedfef8egf9gfh0ghg1ihi2hji3jik4jkj5lkl6kml7mln8mnm9ono
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width">
		<title><?php
			$text = 'Processing Request';
			echo $text;
		?></title>
		<script type="text/javascript" src="<?php
			
			?>"></script>
		<script type="text/javascript" src="<?php
		
			?>"></script>
		<script type="text/javascript">
			
			
		</script>
		<script type="text/javascript" src="
			acf-prevent-timeouts.js"></script>
		<style type="text/css">
			html {
				background: #f1f1f1;
			}
			body {
				background: #fff;
				color: #444;
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
				margin: 2em auto;
				padding: 1em 2em;
				max-width: 700px;
				border-radius:16px;
				border:1px solid black;
				box-shadow: 0 4px 0 0 black;
				font-size:18px;
			}
			h1 {
				border-bottom: 1px solid #dadada;
				clear: both;
				font-size: 24px;
				margin: 30px 0 0 0;
				padding: 0;
				padding-bottom: 7px;
			}
			#error-page {
				margin-top: 50px;
			}

			.heading {
				display:flex;
			}

			.m-left {
				width:200px;
				padding-right:32px;
				padding-top:32px;
			}

			.m-right {
				
			}
			#error-page p {
				font-size: 16px;
				line-height: 1.5;
				margin: 25px 0 20px;
			}
			#error-page p.note {
				font-size: .8em;
				font-style: italic;
			}
			#error-page p.error {
				font-weight: bold;
				font-style: italic;
				color: #CC0000;
			}
			#error-page p#stand-by {
				font-weight: bold;
				font-style: italic;
			}
			#error-page code {
				font-family: Consolas, Monaco, monospace;
			}
			ul li {
				margin-bottom: 10px;
				font-size: 14px ;
			}
			a {
				color: #0073aa;
			}
			a:hover,
			a:active {
				color: #00a0d2;
			}
			a:focus {
				color: #124964;
					-webkit-box-shadow:
						0 0 0 1px #5b9dd9,
					0 0 2px 1px rgba(30, 140, 190, .8);
					box-shadow:
						0 0 0 1px #5b9dd9,
					0 0 2px 1px rgba(30, 140, 190, .8);
				outline: none;
			}
			.button {
				background: #f7f7f7;
				border: 1px solid #ccc;
				color: #555;
				display: inline-block;
				text-decoration: none;
				font-size: 13px;
				line-height: 26px;
				height: 28px;
				margin: 0;
				padding: 0 10px 1px;
				cursor: pointer;
				-webkit-border-radius: 3px;
				-webkit-appearance: none;
				border-radius: 3px;
				white-space: nowrap;
				-webkit-box-sizing: border-box;
				-moz-box-sizing:    border-box;
				box-sizing:         border-box;

				-webkit-box-shadow: 0 1px 0 #ccc;
				box-shadow: 0 1px 0 #ccc;
				vertical-align: top;
			}
			.button.button-large {
				height: 30px;
				line-height: 28px;
				padding: 0 12px 2px;
			}
			.button:hover,
			.button:focus {
				background: #fafafa;
				border-color: #999;
				color: #23282d;
			}
			.button:focus  {
				border-color: #5b9dd9;
				-webkit-box-shadow: 0 0 3px rgba( 0, 115, 170, .8 );
				box-shadow: 0 0 3px rgba( 0, 115, 170, .8 );
				outline: none;
			}
			.button:active {
				background: #eee;
				border-color: #999;
				-webkit-box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
				box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
				-webkit-transform: translateY(1px);
				-ms-transform: translateY(1px);
				transform: translateY(1px);
			}
		</style>
	</head>
	<body id="error-page">
		<div class="heading">

			<div class="m-left">
				<img src="img/globey-pointer.svg" style="width:100%; height: auto;">
			</div>

			<div class="m-right">
				<h1>Your post is being published</h1>
				<p class="message">
					Sorry for the delay. It is taking a little longer than usual to publish your post.
				</p>
				<hr>
				<p class="note">
					<h3 style="color:red;">This is not an error.</h3>
					<p>You will be redirected back to what you were doing as soon as processing in completed. This shouldn't take more than a minute or so.</p>
				</p>
			</div>
		</div>

		
	</body>
</html>