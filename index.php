<!DOCTYPE html> <html> <head> <title>Telegram Join Channel Btn Maker</title> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> </head> <body> <div class="container"> <div class="row justify-content-center"> <div class="col-4"> <h2>Telegram join Channel Btn Generator</h2> <br><br><br> <form method="GET" action="index.php" enctype="multipart/form-data">  <div class="form-group"> 	<label for="uname">Username:</label> 	<input type="text" class="form-control" id="uname" placeholder="UserName Without @" name="uname" required><p style="color:cyan;"onclick="func('w','400px')">Required*</p>  </div> <div class="checkbox"> 	<label><input type="checkbox" name="mem"> Show Members</label> </div><p onclick="show()">Show Customaisations👇</p> 
<div id="pocket" style="display:none;">

<div class="form-group"> 	<label for="c">color of background:</label> 	<input type="color" class="form-control" id="c" placeholder="color" name="c"  value="#0033FF" required> <p style="color:cyan;"onclick="func('c','#003FF')">Required*</p> </div>
<div class="form-group"> 	<label for="w">max width:</label> 	<input type="text" class="form-control" id="w" placeholder="width" name="w" value="400px"required> <p style="color:cyan;"onclick="func('w','400px')">Required*</p> </div>
<div class="form-group"> 	<label for="t">text on top:</label> 	<input type="text" class="form-control" id="t" placeholder="Text" name="t" value="Join Telegram Channel For More" required> <p style="color:cyan;"onclick="func('t','Join Telegram Channel For More')">Required*</p> </div>
</div>
 <div class="form-group"> 	<button type="submit" name="Submit" class="btn btn-success">Make</button> </div> </form>

<div class="btm">
     <p>Result Shown Here👇</p>
<?php  
$p = $_REQUEST['uname'];
$isd = $_REQUEST['mem'];
$c = $_REQUEST['c'];
$w = $_REQUEST['w'];
$t = $_REQUEST['t'];
if($p){
if($isd == "on"){
$king = "<center><script type='text/javascript'>(function() {var script=document.createElement('script');script.type='text/javascript';script.async =true;script.src='//telegram.im/widget-button/index.php?id=@".$p."';document.getElementsByTagName('head')[0].appendChild(script);})();</script><a href='tg://resolve?domain=".$p."' target='_blank' class='telegramim_button telegramim_shadow telegramim_pulse' style='font-size:18px;max-width:".$w.";background:".$c.";box-shadow:1px 1px 5px #00ff00;color:#ffffff;border-radius:20px;' title='Join Now'><i></i> ".$t."<small><span class='telegramim_count' data-for='@".$p."'>...</span> Members</small></a></center>";
}
if($isd == "off" || !$isd){
$king = "<center><script type='text/javascript'>(function() {var script=document.createElement('script');script.type='text/javascript';script.async =true;script.src='//telegram.im/widget-button/index.php?id=@".$p."';document.getElementsByTagName('head')[0].appendChild(script);})();</script><a href='tg://resolve?domain=".$p."' target='_blank' class='telegramim_button telegramim_shadow telegramim_pulse' style='font-size:18px;max-width:".$w.";background:".$c.";box-shadow:1px 1px 5px #00ff00;color:#ffffff;border-radius:20px;' title='Join Now'><i></i> ".$t."<small> Fast Join</small></a></center>";
}
echo "<r>".$king."</r>";

$tring = substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes(32))), 0, 32); // 32 characters, without /=+
// or


$kings = $tring.".txt";
$myfile = fopen("sessions/$kings", "w"); $text = "\n$king"; fwrite($myfile, $text); fclose($myfile);
}

?>
<h1>&</h1>
<a href="<?php echo "sessions/".$kings; ?>" onlick="" download="btn.html">Download Code</a>

<script>
     
     function show(){
          var p = document.getElementById("pocket");
          p.style.display = "block";
     }
function func(p,k){

var n = document.getElementById(p);
n.InnerHTML = ""+k+"";


}
     
     
</script>
</div>


 </div> </div> </div> </body> </html>
 
