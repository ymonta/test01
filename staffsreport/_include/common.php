<?php
$__total = 86;
$_thisURI = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"];

function p($sc, $tp, $cp) {
	global $__cN;
	
	$cls = '';
	$src = '/staffsreport/images/' . sprintf('%03d', $__cN) . '/' . $sc;
	
	if($tp == 'l'){
		$cls = 'typeL';
	}
	elseif ($tp == 'r'){
		$cls = 'typeR';
	}
	else {
		$cls = 'typeC';
	}
	
$res = <<< EOF
<span class="phBlock $cls">
<span class="ph"><img src="$src"></span>
<em>$cp</em>
</span>
EOF;

	echo $res;
}

function pFix(){
}
?>