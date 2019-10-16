<!------START PAGE TRACKING-----------
NOTE : JQuery Plugin is Required 
-->
<img src="" width="1" height="1" id="view" />
<?php
   $ipv4=$_SERVER['REMOTE_ADDR'];
/* VISIT https://ipinfo.io Website and create your free account and copy the token and paste below
               FREE ACCOUNT HAS LIMIT 50000/MONTH  LOG
 */
   //$info='http://ip-api.com/php/'.$ipv4 // SignUp not required for free version (45 requests / minute )
   $info='https://ipinfo.io/'.$ipv4.'?token=ENTER_YOUR_TOKEN';
   $details = json_decode(file_get_contents($info));
?>
<script type="text/javascript">
	$(document).ready(function(){
var URL    = $(location).attr("href");
var ip     = '<?php echo $details->ip;      ?>'; 
var city   = '<?php echo $details->city;    ?>';
var region = '<?php echo $details->region;  ?>';
var country= '<?php echo $details->country; ?>';
var loc    = '<?php echo $details->loc;     ?>';
var org    = '<?php echo $details->org;     ?>';
var postal = '<?php echo $details->postal;  ?>';
$("#view").attr("src","page_track.php?page_url="+URL+"&ip="+ip+"&city="+city+"&region="+region+"&country="+country+"&loc="+loc+"&org="+org+"&postal="+postal).hide();
}); 	
</script>
<!--------END PAGE TRACKING---------------->