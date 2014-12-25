<?php 

echo "<title>ByteRun Hash Decrypt</title>
      <center><img src='http://i39.tinypic.com/2wg6a2q.png'></img>
      <br>Just $_X='' Ex : Pz48P3BocA0KczVzcz

      </center>
      <body text=#FFA04b bgcolor=#111111 vlink=#62b1ae link=#FFA04b clink=white>";

if(isset($_POST['DecryptText']) && !empty($_POST['DecryptText'])){

	$var=htmlentities($_POST['DecryptText']);
	echo '<form method="post" action=?>
	        <center><textarea rows="20" cols="50" name="DecryptText">';
	echo decrypt($var);
	echo '</textarea>
	        <br><input type="submit"  value="Decrypt Hash"></center>
          </form>';	
	

}else{

	echo '<form method="post" action=?>
	        <center><textarea rows="20" cols="50" name="DecryptText">
	        </textarea>
	        <br><input type="submit"  value="Decrypt Hash"></center>
          </form>';	
}


function decrypt($data){
	$var =  base64_decode($data);
	$deco =  str_replace(array("<" ,">"),array("&lt;","&gt;"),strtr($var, "1234567aouie", "aouie1234567"));
	return $deco;
}

?>
