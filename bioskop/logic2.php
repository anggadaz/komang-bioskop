<?php
//$string = "This is some text with some more text and even more text.";
$string = "ai";
$jmhVokal=preg_match_all('/[aeiou]/i',$string,$matches);
$jmhKon=preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i',$string,$matches);
$jmhKata=str_word_count($string);
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$kons = array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","y","z","B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","W","X","Y","Z");
$delVol = str_replace($vowels, "", $string);
$delKon = str_replace($kons, "", $string);
$pjg= strlen($string);
$arr = explode(' ',trim($string));
$inc=5;

$tmp="";
echo "apel ".$jmhKon."<br>";
if($jmhKata==1){//1 kata
	if($pjg<=2){//kurang dari =2 huruf
		$tmp=$string;
		echo "hasil ".$tmp."<br>";
	}else {
		echo "else"."<br>";
		if($jmhKon==2){//konsonan 2
			$tmp=$delVol;
			echo "hasil0 ".$tmp."<br>";
		}else if($jmhKon>2){
			$tmp=substr($delVol, 0,1).substr($delVol, -1);//ambil kons awal n akhir
			echo "hasil1 ".$tmp."<br>";
		}else if($jmhKon==1){
			$tmp=$delVol.substr($delKon,0,1);
			echo "hasil2 ".$tmp."<br>";
		}else{//hanya ada vokal
			$tmp=substr($delKon,0,2);
			echo "hasil3 ".$tmp."<br>";
		}
	}
	
}else if($jmhKata==2){//2 kata
	$jmhKon1=preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i',$arr[0],$matches);
	$jmhKon2=preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i',$arr[1],$matches);
	$delVol1=str_replace($vowels, "", $arr[0]);
	$delVol2=str_replace($vowels, "", $arr[1]);
	if(strlen($arr[0])==1 && strlen($arr[1])==1){//1 huruf
		$tmp=$arr[0].$arr[1];
		echo "hasil4 ".$tmp."<br>";
	}else if($jmhKon1==1 && $jmhKon2==1){//1 konsonan tiap kata
		$tmp=$delVol1.$delVol2;
		echo "hasil5 ".$tmp."<br>";
	}else if($jmhKon1>=1 && $jmhKon2<1){//1 konsonan kata 1st
		$tmp=substr($delVol1,0,1).substr($arr[1],0,1);
		echo "hasil6 ".$tmp."<br>";
	}else if($jmhKon1<1 && $jmhKon2>=1){//1 konsonan kata 2nd
		$tmp=substr($arr[0],0,1).substr($delVol2,0,1);
		echo "hasil6 ".$tmp."<br>";
	}else{
		$tmp=substr($delVol1,0,1).substr($delVol2,0,1);
		echo "hasil6 ".$tmp."<br>";
	}

}else if($jmhKata>2){//>2 kata
	$size=sizeof($arr)-1;
	$arrLast=$arr[$size];
	$jmhKon1=preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i',$arr[0],$matches);
	$jmhKon2=preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i',$arrLast,$matches);
	$delVol1=str_replace($vowels, "", $arr[0]);
	$delVol2=str_replace($vowels, "", $arrLast);
	if(strlen($arr[0])==1 && strlen($arrLast)==1){//1 huruf
		$tmp=$arr[0].$arrLast;
		echo "hasil7 ".$tmp."<br>";
	}else if($jmhKon1==1 && $jmhKon2==1){//1 konsonan tiap kata
		$tmp=$delVol1.$delVol2;
		echo "hasil8 ".$tmp."<br>";
	}else if($jmhKon1>=1 && $jmhKon2<1){//1 konsonan kata 1st
		$tmp=substr($delVol1,0,1).substr($arrLast,0,1);
		echo "hasil9 ".$tmp."<br>";
	}else if($jmhKon1<1 && $jmhKon2>=1){//1 konsonan kata last
		$tmp=substr($arr[0],0,1).substr($delVol2,0,1);
		echo "hasil10 ".$tmp."<br>";
	}else{
		$tmp=substr($delVol1,0,1).substr($delVol2,0,1);
		echo "hasil11 ".$tmp."<br>";
	}
	
}else{//bukan kata
	echo "error bukan kata";
}

echo "<br>";
$inc=$inc+1;
$kodeBarang =sprintf("%03s", $inc);
$tmp=$tmp.$kodeBarang;
echo "hasil akhir ".$tmp."<br>";
echo $string;

?>