<!--
	Youtube Video to MP3 Converter 1.0.0 Rev. 0
	Author: Rawroot Edeli
	E-mail: rawroot@gmail.com
	Date: 08:15:2013:09:54:32
	File info: Custom error file.
-->

<!-- PHP Wrapper - 500 Server Error -->
<html><head><title>500 Server Error</title></head>
<body bgcolor=white>
<h1>500 Server Error</h1>

A misconfiguration on the server caused a hiccup.
Check the server logs, fix the problem, then try again.
<hr>

<?
  echo "URL: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."<br>\n";
  $fixer = "checksuexec ".escapeshellarg($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
  echo `$fixer`;
?>

</body></html>
