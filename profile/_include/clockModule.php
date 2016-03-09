<script>
var __clockLoaded = 0;

$(function(){
	  var __oclock = new Array();
		__oclock["1"] = $('#oclock_1');
		__oclock["2"] = $('#oclock_2');
		__oclock["3"] = $('#oclock_3');
		__oclock["4"] = $('#oclock_4');
		__oclock["5"] = $('#oclock_5');
		__oclock["6"] = $('#oclock_6');
		__oclock["7"] = $('#oclock_7');
		__oclock["8"] = $('#oclock_8');
		__oclock["9"] = $('#oclock_9');
		__oclock["10"] = $('#oclock_10');
		__oclock["11"] = $('#oclock_11');
		__oclock["12"] = $('#oclock_12');
		__oclock["1"][0].load();
		__oclock["2"][0].load();
		__oclock["3"][0].load();
		__oclock["4"][0].load();
		__oclock["5"][0].load();
		__oclock["6"][0].load();
		__oclock["7"][0].load();
		__oclock["8"][0].load();
		__oclock["9"][0].load();
		__oclock["10"][0].load();
		__oclock["11"][0].load();
		__oclock["12"][0].load();
		
		__oclock["1"][0].volume = 0.2;
		__oclock["2"][0].volume = 0.2;
		__oclock["3"][0].volume = 0.2;
		__oclock["4"][0].volume = 0.2;
		__oclock["5"][0].volume = 0.2;
		__oclock["6"][0].volume = 0.2;
		__oclock["7"][0].volume = 0.2;
		__oclock["8"][0].volume = 0.2;
		__oclock["9"][0].volume = 0.2;
		__oclock["10"][0].volume = 0.2;
		__oclock["11"][0].volume = 0.2;
		__oclock["12"][0].volume = 0.2;
		
	
		
		var thisTime= new Date();
		var thisSec = thisTime.getSeconds();
		var setSec = 60500 - Number(thisSec * 1000);
		
		setClock();
	
		setTimeout(function(){
			setClockTimeFirst();
		},setSec);
		
		
		function setClockTimeFirst(){
			setClock();
			setInterval(function(){
				setClockTimeLoop();
			},60000);
		}


		function setClockTimeLoop(){
			setClock();
		}
		
		function setClock(){
			var nowTime= new Date();
			var nowH = nowTime.getHours();
			if(nowH >12){
				nowH = Number(nowH - 12);
			}
			var nowM = nowTime.getMinutes();
			
			var rotateH = nowH * 30;
			var rotateHandM = nowM * 0.5;
			rotateH = rotateH + rotateHandM;
			
			var rotateM = nowM * 6;
			
			$("#clockUnit_h").rotate(rotateH);
			$("#clockUnit_m").rotate(rotateM);
			
			
			if(nowM == 0){
				$('#mv_ani_cuckoo').attr({'src':'./images/just/' + nowH + '.gif'});
				__oclock[nowH][0].currentTime = 0;
				__oclock[nowH][0].play();
			}
			else if(nowM == 30){
				$('#mv_ani_cuckoo').attr({'src':'./images/just/1.gif'});
				__oclock["1"][0].currentTime = 0;
				__oclock["1"][0].play();
			}
		}
		
});
</script>
<audio id="oclock_1">
  <source src="/sound/oclock_1.m4a" type="audio/aac">
  <source src="/sound/oclock_1.mp3" type="audio/mp3">
  <source src="/sound/oclock_1.ogg" type="audio/ogg">
</audio>
<audio id="oclock_2">
  <source src="/sound/oclock_2.m4a" type="audio/aac">
  <source src="/sound/oclock_2.mp3" type="audio/mp3">
  <source src="/sound/oclock_2.ogg" type="audio/ogg">
</audio>
<audio id="oclock_3">
  <source src="/sound/oclock_3.m4a" type="audio/aac">
  <source src="/sound/oclock_3.mp3" type="audio/mp3">
  <source src="/sound/oclock_3.ogg" type="audio/ogg">
</audio>
<audio id="oclock_4">
  <source src="/sound/oclock_4.m4a" type="audio/aac">
  <source src="/sound/oclock_4.mp3" type="audio/mp3">
  <source src="/sound/oclock_4.ogg" type="audio/ogg">
</audio>
<audio id="oclock_5">
  <source src="/sound/oclock_5.m4a" type="audio/aac">
  <source src="/sound/oclock_5.mp3" type="audio/mp3">
  <source src="/sound/oclock_5.ogg" type="audio/ogg">
</audio>
<audio id="oclock_6">
  <source src="/sound/oclock_6.m4a" type="audio/aac">
  <source src="/sound/oclock_6.mp3" type="audio/mp3">
  <source src="/sound/oclock_6.ogg" type="audio/ogg">
</audio>
<audio id="oclock_7">
  <source src="/sound/oclock_7.m4a" type="audio/aac">
  <source src="/sound/oclock_7.mp3" type="audio/mp3">
  <source src="/sound/oclock_7.ogg" type="audio/ogg">
</audio>
<audio id="oclock_8">
  <source src="/sound/oclock_8.m4a" type="audio/aac">
  <source src="/sound/oclock_8.mp3" type="audio/mp3">
  <source src="/sound/oclock_8.ogg" type="audio/ogg">
</audio>
<audio id="oclock_9">
  <source src="/sound/oclock_9.m4a" type="audio/aac">
  <source src="/sound/oclock_9.mp3" type="audio/mp3">
  <source src="/sound/oclock_9.ogg" type="audio/ogg">
</audio>
<audio id="oclock_10">
  <source src="/sound/oclock_10.m4a" type="audio/aac">
  <source src="/sound/oclock_10.mp3" type="audio/mp3">
  <source src="/sound/oclock_10.ogg" type="audio/ogg">
</audio>
<audio id="oclock_11">
  <source src="/sound/oclock_11.m4a" type="audio/aac">
  <source src="/sound/oclock_11.mp3" type="audio/mp3">
  <source src="/sound/oclock_11.ogg" type="audio/ogg">
</audio>
<audio id="oclock_12">
  <source src="/sound/oclock_12.m4a" type="audio/aac">
  <source src="/sound/oclock_12.mp3" type="audio/mp3">
  <source src="/sound/oclock_12.ogg" type="audio/ogg">
</audio>
