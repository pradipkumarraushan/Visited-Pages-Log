<!--------SAVING PAGE TRACKING DATA ---------------->
<?php
if (isset($_GET["page_url"]) && !empty($_GET["page_url"])) {
include('connection.php');
	$query = "
	INSERT INTO  page_track (page_url,page_open_datetime,ip,city,region,country,loc,org,postal) VALUES (?,?,?,?,?,?,?,?,?) ";
	$statement = $connect->prepare($query);
	$statement->execute([''.$_GET["page_url"].'',''.date("d-F-Y H:i:s A", STRTOTIME(date('h:i:sa'))).'',''.$_GET["ip"].'',''.$_GET["city"].'',''.$_GET["region"].'',''.$_GET["country"].'',''.$_GET["loc"].'',''.$_GET["org"].'',''.$_GET["postal"].'']);

}
?>