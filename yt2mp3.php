<?php

/*
	Youtube Video to MP3 Converter 1.0.0 Rev. 0
	Author: Rawroot Edeli
	E-mail: rawroot@gmail.com
	Date: 08:15:2013:09:54:32
	File info: yt2mp4 file.
*/

require_once 'config.php';

$temp = explode(".", $_FILES["file"]["name"]);
$brate = $_POST["bitrate"];
$extension = end($temp);
$file2convert = "$uploadDirectory" . $_FILES["file"]["name"];
$file2convert2 = substr($file2convert, 0, -3) . "mp3";
$file2convert2_name = substr($_FILES["file"]["name"], 0, -3) . "mp3";
$file2convert_format = substr($_FILES["file"]["name"], -3, 3);
$file2convert_format2 = "mp3";

if (file_exists("uploads/" . $_FILES["file"]["name"])){

	echo $_FILES["file"]["name"] . " already exists. ";
	
}
else{

	move_uploaded_file($_FILES["file"]["tmp_name"],
	"con/" . $_FILES["file"]["name"]);
	echo "Finished Successfully!<br />";
	echo "Uploaded file: " . $_FILES["file"]["name"] . "<br />"; 
	echo "Converted to: $file2convert2_name<br />";
	echo "Conversion type: " . $file2convert_format . " to " . $file2convert_format2 . "<br />";
	echo "Bitrate: $brate<br />";
	echo "<br />";
	
}

echo shell_exec("/usr/local/bin/ffmpeg -y -i '$file2convert' -ab '$brate'k -vn '$file2convert2' </dev/null >/dev/null 2>/usr/home/jbe1/logs/ffmpeg.log");

echo "<br />You can <a href=\"$siteUrl$short_uploadDirectory$file2convert2_name\">download</a> your song by right clicking on the download link<br />and selecting (save as) make sure to save it as a(.mp3). <br />You may also stream it by simply clicking the download link. Enjoy!.<br />";

echo "<br /><a href=\"index.php\">Convert another?</a>";

?>