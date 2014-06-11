<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="content-type" http-equiv="content-type" value="text/html; utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <style>
        body {
            max-width: 50em;
            margin: 0 auto;
            color: #111;
            background-color: #EEE;
            font-family: Montserrat, Helvetica, Arial, sans-serif;
            font-weight: 400;
        }
        pre, code {
            font-family: 'Droid Sans Mono', Monaco, Courier New, monospace;
            font-size: 11px;
        }
        h1 {
            font-size: 45px;
        }
        h1 code {
            font-size: 40px;
        }
        h2 {
            font-weight: bold;
        }
        h2 code {
            font-size: 22px;
        }
        h3 {
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
        blockquote{
            margin:1em 0;
            border-left:5px solid #ddd;
            padding-left:.6em;
            color:#555;
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
