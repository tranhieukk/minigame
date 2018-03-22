<html>
<?php
require_once('player.php'); 
Class Game{

	public $player ;
	function __construct(){
				
	}
	function getIP(){
		$player= new Player();
		return $player->getIPAdress();
	}

	function run(){
		$result  = array('a','b','c');
		return $result[rand(0,2)];
	}



}
$game = new Game();
$ip =$game->getIP();
$max=300;
echo "Xin chào: ".$ip."<br/>";
$a=$b=$c='a';


$string = file_get_contents("data.json");
$recore = json_decode($string, true);
$flag= true;
$soluot=$max;
$ketQua='';
foreach ($recore as $key ) {
	if($key["IP"] == $ip ){
		$soluot = $max - $key["lanquay"];
		if(	$soluot>0){
			echo "Số lượt còn lại: ".$soluot."</br>";
		}
		else{
			echo "Đã hết lượt quay! </br>";
		}
		$flag=false;			
		break;
	} 
		

}

	

if($flag){
	echo "Số lượt còn lại: ".$soluot."</br>";
}


if ( $soluot>0 && isset( $_GET['play']))
{
	
	 $a =$game->run();
	 $b =$game->run();
	 $c =$game->run();
	
	 if($a == $b && $a ==$c){
	 	$ketQua = "Chúc mừng bạn đã thắng!";
	 }

	 elseif ($a == $b || $a==$c|| $b = $c) {
	 	$ketQua = "Bạn được giải nhì";
	 }

 	if($flag){
		$recore[]  = array('IP' => $ip,'lanquay'=>1 ); 	
	}
	else
	{
		
		$i=0;
		foreach ($recore as $key ) {
		   if($key["IP"] ==$ip ){
		   $recore[$i]["lanquay"]++;
		   break;
		}
		$i++;
		} 

 }
		

	$fp = @fopen("data.json", "w+");
	fwrite($fp, json_encode($recore));
	 
}
$a ='img/'.$a.'.png';
$b ='img/'.$b.'.png';
$c ='img/'.$c.'.png';
?>
	
</html>