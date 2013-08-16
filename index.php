<!DOCTYPE html>
<!--
	Youtube Video to MP3 Converter 1.0.0 Rev. 0
	Author: Rawroot Edeli
	E-mail: rawroot@gmail.com
	Date: 08:15:2013:10:02:32
	File info: Index file.
-->
<HTML LANG=\"en-US\">
<HEAD>
<TITLE>Youtube Video to MP3 Converter</TITLE>
<META NAME="description" CONTENT="Youtube Video to MP3 Converter">
<META NAME="keywords" CONTENT="Free, HTML to PDF Converter, Free HTML to PDF Converter">
<META NAME="author" CONTENT="Rawroot Edeli">
<META CHARSET="UTF-8">
<LINK REL="shortcut icon" HREF="favicon.ico" TYPE="image/x-icon" />
<LINK REL="stylesheet" TYPE="text/css" HREF="assets/css/main.css" />
<script>
function promptConversion(){
alert("Your file will be uploaded and converted to (.mp3) format after clicking OK! Remember to be patient, this process may take a few minutes depending on the size of the file.");
}
</script>
</HEAD>
<BODY>
<DIV ID="wrapper">
  <DIV ID="header">
    <DIV ID="top">
      <DIV CLASS="padding">
	    <TABLE CLASS="contentpaneopen">
	      <TR>
            <TD VALIGN="top" COLSPAN="2">
			  <h2>Youtube Video to MP3 Converter</h2>
<h5>Convert FLV, MP4, 3GP, AVI to MP3 Format</h5>
            </TD>
          </TR>
        </TABLE>
	  </DIV>
    </DIV>
  </DIV>
</DIV>
<DIV ALIGN="center">
<form action="yt2mp3.php" method="post" enctype="multipart/form-data">
<label for="file">File to convert:</label>
<input type="file" name="file" id="file"><br />
<label for="bitrate">Bitrate:</label>
<select name="bitrate">
	<option value="64">64Kbps</option>
	<option value="128">128Kbsp</option>
	<option value="192">192Kbsp</option>
	<option value="320">320Kbps</option>
</select>
<input type="submit" onclick="promptConversion()" name="submit" value="Convert">
</form>
</DIV>
<DIV ID="footer">
  <DIV ID="the-footer">
    <CENTER><A HREF="http://jbe1.jetdomain.net/">Youtube Video to MP3 Converter - Powered by: JBE Networks</A></CENTER><BR /></A>
  </DIV>
</DIV>
</BODY>
</HTML>
