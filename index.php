<?php
	$DIR=md5(rand(0,100000000000));
function recurse_copy($home,$DIR) {
	$dir = opendir($home);
	@mkdir($DIR, 0777);
	while(false !== ( $file = readdir($dir)) ) {
		if (( $file != '.' ) && ( $file != '..' )) {
			if ( is_dir($home . '/' . $file) ) {
				recurse_copy($home . '/' . $file,$DIR . '/' . $file);
			}	else {
				copy($home . '/' . $file,$DIR . '/' . $file);
			}
		}
	}
	closedir($dir);
}

$home="main";
recurse_copy( $home, $DIR );
$file = fopen("newsite.txt","w");
fwrite($file, $DIR);
$comps->headerX("$DIR");



?>