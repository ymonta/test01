<?php
$__total = 71;
$_thisURI = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"];

function p($sc, $tp, $cp) {
	global $__cN;
	
	$cls = '';
	$src = '/message/images/' . sprintf('%03d', $__cN) . '/' . $sc;
	
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
<span class="phBlock2">
<a class="ph" href="$src" data-caption="$cp"><img src="$src"></a>
<em>$cp</em>
</span>
EOF;

	echo $res;
}

function p2($sc, $tp, $cp) {
	global $__cN;
	
	$cls = '';
	$src = '/message/images/' . sprintf('%03d', $__cN) . '/' . $sc;
	
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
<a class="ph" href="$src" data-caption="$cp"><img src="$src"></a>
<em>$cp</em>
</span>
EOF;

	echo $res;
}

function pFix(){
}
?>