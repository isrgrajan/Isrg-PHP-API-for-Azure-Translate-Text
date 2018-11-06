<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Isrg PHP API for Azure Translate Text</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>body{padding:20px;}</style>
</head>
<body>

<h1>Isrg PHP API for Azure Translate Text</h1>
<hr />
<h3>Translating text with pre-defined language</h3>
<p><strong>This is a simple example of Azure Translate Text translation called using the function</strong> <code>isrg_auto_translate("text to translate")</code>.</p>
<pre>
<?php
include "bing-translate-api/lib-isrg.php";
echo isrg_auto_translate("hi this is isrg rajan");
?>
</pre>
<h3>Translating text with dynamic language</h3>
<p><strong>
    You can translate the text into the supported language using the function</strong> <code>isrg_translate($text, $language_to, $language_from)</code>
</p>
<pre>
<?php
echo isrg_translate("Hi, My name is Rajan","fr","en");
?>
</pre>
<footer>
    &copy; 2018 <a href="https://www.isrgrajan.com/">Isrg Rajan</a>
</footer>
</body>
</html>
