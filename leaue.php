<!--Expiremental page to put League of Legends level on users profile page using the Riot Games API -->
	
	<html>
	<form method="get">
	<input type="text" name="lolname">
</form>	
<?php

$lolname= $_GET['lolname'];
$ch = curl_init("http://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/".$lolname."?api_key=ca5e3de9-1ce3-4776-9853-59d6f86b680c");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);
echo $content;
?>

	<script type="text/javascript">
		var me='<?php echo $content; ?>';
		var obj = JSON.parse(me)
		document.write("<br>"+ obj.riotschmick.id);
		
		
	</script>
</html>
