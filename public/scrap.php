<?php
header("Content-type: text/plain");

if(isset($_GET['id'])){
	
	$url = "https://ustvgo.tv/{$_GET['id']}";

	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$headers = array(	
	   "Host: ustvgo.tv",
	   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0",
	   "Referer: https://ustvgo.tv/",
	   "Cookie: __cf_bm=0EbroPsk5WgtIPHHk09VpXHUpvbyWKFERcBED6AVzd4-1647564571-0-AaTu0qYjuVT4KzoaiTdY27hRz1ExlkrEcjXLtp/3lcZ21/dYItDSarAhGoMleNTm27nC/9xky8PqKOQmULL15+8K1BZisnmnyuSxTRALVnAb6jmbwke+0RVUBHqQ0r5Htg==",
	);

	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	//for debug only!
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	$resp = curl_exec($curl);
	curl_close($curl);
	



	preg_match('(atob\("(.*?)")', $resp, $file);
	if($file[1]==null){
		//header("Content-type: application/vnd.apple.mpegurl");
		//header("Location: https://ia601501.us.archive.org/26/items/bg_app/bg.mp4");
		echo "error";
	}
	else{
		$m3u8 = base64_decode($file[1]);
		header("Location: $m3u8");
	}
	
	
	exit();
}



if(isset($_GET['all'])){
	$datos = file_get_contents("https://ustvgo.tv/");
	echo "#EXTM3U".PHP_EOL;
//preg_match_all('(title="(.*?)".*?src="(.*?)"[\w\W]*?<li>([\w\W\s]+?)</div>)', $datos, $data, PREG_SET_ORDER);
preg_match_all('(href="(.*?)".*?>(.*?)<)', $datos, $data, PREG_SET_ORDER);
	
	
	
	foreach($data as $dato){
		$name = $dato[1];
		$img = $dato[2];
		$server = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
		preg_match_all('(href="(.*?)".*?>(.*?)<)', $dato[3], $enlaces, PREG_SET_ORDER);
		
		foreach($enlaces as $links){
			$link = $links[1];
			$det = $links[2];
			if(strpos($link, "ks5g")!==false){
				echo "#EXTINF:-1 tvg-logo=\"http:{$img}\" tvg-group=\"PhotoCall TV\",{$name}  {$det}\n{$server}?id={$link}".PHP_EOL;
			}
			else{
				
			}
			
			
		}
	}
	exit();
}








?>

