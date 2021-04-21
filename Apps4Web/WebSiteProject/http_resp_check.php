<?php

	/**
	This is a modified version of code from "stuart at sixletterwords dot com", at 14-Sep-2005 04:52. This version tries to emulate get_headers() function at PHP4. I think it works fairly well, and is simple. It is not the best emulation available, but it works.

	Features:
	- supports (and requires) full URLs.
	- supports changing of default port in URL.
	- stops downloading from socket as soon as end-of-headers is detected.

	Limitations:
	- only gets the root URL (see line with "GET / HTTP/1.1").
	- don't support HTTPS (nor the default HTTPS port).
	*/

	if(!function_exists('get_headers'))
	{
		function get_headers($url,$format=0)
		{
			$url=parse_url($url);
			$end = "\r\n\r\n";
			$fp = fsockopen($url['host'], (empty($url['port'])?80:$url['port']), $errno, $errstr, 30);
			if ($fp)
			{
				$out  = "GET / HTTP/1.1\r\n";
				$out .= "Host: ".$url['host']."\r\n";
				$out .= "Connection: Close\r\n\r\n";
				$var  = '';
				fwrite($fp, $out);
				while (!feof($fp))
				{
					$var.=fgets($fp, 1280);
					if(strpos($var,$end))
						break;
				}
				fclose($fp);

				$var=preg_replace("/\r\n\r\n.*\$/",'',$var);
				$var=explode("\r\n",$var);
				if($format)
				{
					foreach($var as $i)
					{
						if(preg_match('/^([a-zA-Z -]+): +(.*)$/',$i,$parts))
							$v[$parts[1]]=$parts[2];
					}
					return $v;
				}
				else
					return $var;
			}
		}
	}
	
	$headers = get_headers($url, 1);
	if ($headers[0] == 'HTTP/1.1 200 OK') {
	//valid 
	}

	elseif ($headers[0] == 'HTTP/1.1 301 Moved Permanently') {
	//moved or redirect page
	}
	
	else {
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
		include("./firstPage.php");
	}
?>