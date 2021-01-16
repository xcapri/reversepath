<!DOCTYPE html>
<html>
<head>
	<title>Reverse Path | Beauty Of Darknet</title>
	<meta name="description" content="Menolak malas :v">
    <meta name="keyword" content="By https://github.com/xcapri/">
    <link href="https://fonts.googleapis.com/css?family=Iceberg" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<!-- <iframe width="0" height="0" src=" https://b.top4top.net/m_988r1fhg0.mp3" frameborder="0" allowfullscreen></iframe> -->
	<style type="text/css">
		
		html{
			background: white;
		}
		textarea:hover{
			border:2px solid #33a7ff;
			color: white;
			border-radius: 4px 4px;	
		}
		input:hover{
			border:2px solid #33a7ff;
			color: black;
			border-radius: 4px 4px;	
		}
		h1{
			font-family: Iceberg;
		}
		@media screen and (max-width: 780px){
			h1{
				width: auto;
				float: none;
			}
			.url{
				width: auto;
				float: none;
			}
			textarea{
				width: auto;
				float: none;
			}
			input{
				width: auto;
				float: none;
			}

		}
	
	</style>
<div style="width:100%; height: 100px; top:0px; margin-left: -6px; position: fixed; background:white; box-shadow:0px 5px #666666">
	<center>
			<h1><font color=#808079>Reverse Path </h1>
</center>
</div>
<div style="width:100%; height: 480px; border-bottom: 3px solid #eeeeee;" >
	<br><br><br><br><br><br>
<form action='' method='post'>
<center>
<input type='text' name='url' style="width: 55%; height:30px; border-radius: 4px 4px;" placeholder="/admin , /timthumb.php , /filemanager/dialog.php , /kcfinder/upload.php">
</center>
<br>
<center>
<textarea name='path' placeholder="if your website https content https://yoursite.com and if there is no https content example.com" style="width: 60%; color: white; height: 250px; border:2px solid #33a7ff; border-radius: 4px 4px; background: #444444;"></textarea>
</center>
<center><input type='submit' name='gas' value="reverse!" style="margin: 20px auto;">
</center>
</form>
</div>
<?php
//tool reverse path
//thanks IndoXploit
//by https://github.com/xcapri/

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

//eksekusi

if($_POST['gas']){
$url  = $_POST['url'];
$path = $_POST['path'];
$asw  = explode("\r\n", $path);

foreach($asw as $_path){
$full = "$_path$url";	
$ch = curl_init($full);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, true);  
	curl_setopt($ch, CURLOPT_NOBODY, true);
	curl_setopt($ch, CURLOPT_TIMEOUT,10);
	curl_setopt($ch, option, value);
	$exec = curl_exec($ch);
	$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
echo "

<style type='text/css'>
a{
color:white;
pading-top:50px;
text-decoration:none;
text-align:center;
}
table{
background:none;
color:white;
width:60%;
height:35px;

border: 1px solid white;	
}
td{
	border:none;
	color:#33a7ff;
	background:#333333;
}

.code{
pading:10px auto;
text-align:center;
width:30px;
background:#33a7ff;
border-radius:2px;
color:white;
}

html{
	background:white;
	}
</style>
<center>	
 <table width='550px' >
<tr>
<td style='width:85%;'>$full</td>
<td><center><div class='code'><b>$info<b></div></center></td>
<td><center><a href='//$full' target='_blank' i class='fa fa-external-link'></a></center></td>
<td><center><a href='$full' target='_blank' i class='fa fa-external-link-square'></a>
   </center></td>
</tr>
</table>
</center>";
}
}
?>
</body>
</html>
