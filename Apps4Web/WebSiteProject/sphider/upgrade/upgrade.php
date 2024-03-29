<?php

set_time_limit (0);
$settings_dir = "../settings";
include "$settings_dir/database.php";

$result = mysqli_query("SHOW TABLES");

if (!$result) {
	echo "DB Error, could not list tables\n";
	die();
}

$old = 0;
while ($row = mysqli_fetch_row($result)) {
	if ($row[0] == $mysqli_table_prefix."link_keyword") {
		$old = 1;
		break;
	}
}

if ($old == 0) {
	echo "The database seems to have been upgraded.\n";
	die();
}
$error = 0;
for ($i=0;$i<=15; $i++) {
	$char = dechex($i);
	mysqli_query("create table `".$mysqli_table_prefix."link_keyword$char` (
		link_id int not null,
		keyword_id int not null,
		weight int(3),
		domain int(4),
		key linkid(link_id),
		key keyid(keyword_id))");

	if (mysqli_errno() > 0) {
		print "Error: ";
		print mysqli_error();
		print "<br>\n";
		$error += mysqli_errno();
	}
}

mysqli_query("create table `".$mysqli_table_prefix."domains` (
	domain_id int auto_increment primary key not null,	
	domain varchar(255))");

if (mysqli_errno() > 0) {
	print "Error: ";
	print mysqli_error();
	print "<br>\n";
	$error += mysqli_errno();
}


mysqli_query("alter table `".$mysqli_table_prefix."links` add key md5key(md5sum(16))");
if (mysqli_errno() > 0) {
	print "Error: ";
	print mysqli_error();
	print "<br>\n";
	$error += mysqli_errno();
}

mysqli_query("alter table `".$mysqli_table_prefix."query_log` add key querykey(query)");

if (mysqli_errno() > 0) {
	print "Error: ";
	print mysqli_error();
	print "<br>\n";
	$error += mysqli_errno();
}

if ($error >0) {
	print "<b>Creating tables failed. Consult the above error messages.</b>";
	die();
} 


$query = "select link_id, keyword_id, weight from ".$mysqli_table_prefix."link_keyword";
$result = mysqli_query($query);
echo mysqli_error();
while ($row=mysqli_fetch_array($result)) {
	$link=$row['link_id'];
	$word_id=$row['keyword_id'];
	$weight=$row['weight'];

	$query = "select keyword from ".$mysqli_table_prefix."keywords where keyword_id = $word_id";


	$result2 = mysqli_query($query);
	if ($row2=mysqli_fetch_array($result2)) {
		$word = $row2['keyword'];
		$wordmd5 = substr(md5($word), 0, 1);
		$query = "insert into ".$mysqli_table_prefix."link_keyword$wordmd5 (link_id, keyword_id, weight) values($link, $word_id, $weight)";
		mysqli_query($query);
		echo mysqli_error();
	}

}


$query = "select link_id, url from ".$mysqli_table_prefix."links";
$result = mysqli_query($query);
echo mysqli_error();

$found_domains = array();
while ($row=mysqli_fetch_array($result)) {
	$link_id=$row['link_id'];
	$url=$row['url'];
	$parsed = parse_url($url);
	$domain = $parsed['host'];
	
	if ($found_domains[$domain]!="") {
		$domain_id = $found_domains[$domain];
	} else {
		$query = "insert into ".$mysqli_table_prefix."domains (domain) values('$domain')"; 
		mysqli_query($query);
		echo mysqli_error();
		$domain_id = mysqli_insert_id();
		$found_domains[$domain] = $domain_id;
	}
	

	for ($i=0;$i<=15; $i++) {
		$char = dechex($i);
		mysqli_query("update ".$mysqli_table_prefix."link_keyword$char set domain='$domain_id' where link_id = $link_id");
		echo mysqli_error();
	}
}

mysqli_query("drop table link_keyword");
print "Database upgraded.";
?>
