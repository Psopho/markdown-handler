<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="content-type" http-equiv="content-type" value="text/html; utf-8"/>
    <style>
    	* {
		font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
	}
	body {
		max-width: 50em;
		margin: 0 auto;
		color: #111;
	}
	pre, code {
		font-family: Monaco, Courier New, monospace;
		font-size: 11px;
	}
	h1 {
		font-size: 45px;
		font-weight: 100;
		letter-spacing: -1px;
		margin-bottom: -5px;
	}
	h1 code {
		font-size: 40px;
	}
	h2 {
		color: rgb(43,105,145);
		font-weight: bold;
		margin-bottom: -5px;
	}
	h2 code {
		font-size: 22px;
	}
	h3 {
		margin-bottom: -5px;
	}
	h3 code {
		font-size: 16px;
	}
	a {
		color: blue;
		text-decoration: none;
	}
	a:visited {
		color: navy;
	}
	a:hover {
		text-decoration: underline;
	}
	pre {
		border-width: 1px;
		border-color: #777;
		border-style: solid;
		padding: 0.5em;
		background-color: #111;
		overflow: auto;
		color: #CCC;
	}
	p, li {
		font-size: 13px;
		line-height: 18px;
	}
    </style>
  </head>
  <body>
<?php

require('markdown.php');

$legalExtensions = array('md', 'markdown');

$file = realpath($_SERVER['PATH_TRANSLATED']);
if($file &&
   in_array(strtolower(substr($file, strrpos($file, '.') + 1)),
	    $legalExtensions)) {
  echo Markdown(file_get_contents($file));
}
else {
  echo "<p>Bad filename given</p>";
}
?>
  </body>
</html>
