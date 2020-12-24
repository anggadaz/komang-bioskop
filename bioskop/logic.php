<?php
$txt = "Run Winner";
$pjg= strlen($txt);

$tmp="";
$count=0;
foreach (range(1, $pjg) as $number) {
	if(count==2){
		break;
		if(str_word_count($txt)==1){//jumlah kata 1
			if(substr_count($txt, '')){//jika vokal krg dari 2
				if (preg_match('/[^AIUEOaiueo]/', "z")){//cek konsonan
					tmp+=$number;
					count++;
				}
			}else{
				if (preg_match('/[^AIUEOaiueo]/', "z")){//cek konsonan
					tmp+=$number;
					count++;
				}
			}
		}
		else if(str_word_count($txt)==2){//jumlah kata 2
			if(){//jika vokal krg dari 2
				if (preg_match('/[^AIUEOaiueo]/', "z")){//cek konsonan
					tmp+=$number;
					count++;
				}
			}else{
				if (preg_match('/[^AIUEOaiueo]/', "z")){//cek konsonan
					tmp+=$number;
					count++;
				}
			}
		}
		else if(str_word_count($txt)>2){//jumlah kata >2
			if(){//jika vokal krg dari 2
				if (preg_match('/[^AIUEOaiueo]/', "z")){//cek konsonan
					tmp+=$number;
					count++;
				}
			}else{
				if (preg_match('/[^AIUEOaiueo]/', "z")){//cek konsonan
					tmp+=$number;
					count++;
				}
			}
		}
		else {
			echo "bukan kata";
		}//bukan kata
		
	}
}



?>