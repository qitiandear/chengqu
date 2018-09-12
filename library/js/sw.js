var playerPrepare = false;


var swPlayer= null;
function getSWPlayer(){

	if(swPlayer== null){
		swPlayer= new SWPlayer();
		swPlayer.initPlayer();
	}
	return swPlayer;
}

function SWPlayer(){
	
	var mouseWheel = true;
	
	this.player= null;
	
	this.initPlayer= function(){
		
		
		var playBox= document.createElement("div");
		playBox.id= "playerBox";
		playBox.className= "playerBox";
		document.body.appendChild(playBox);
		
		var playerHTML= '<div class="playerMask"></div>';
		playerHTML+= '<div class="playerContent">';
		playerHTML+= '<div class="playerClose" onclick="getSWPlayer().stop()"></div>';
		playerHTML+= '<div class="player">';
		playerHTML+= '<applet code=net.sunniwell.media.player.x86.X86AppletPlayer	codebase="./" id="player" '+
					'archive="../../common/lib/flytv.jar,../../common/lib/httpclient-4.0.1.jar,../../common/lib/httpcore-4.0.1.jar,../../common/lib/commons-logging-1.1.1.jar,../../common/lib/log4j-1.2.14.jar"'+
					'width="100%" height="100%"><span style="color:white">妫€娴嬪埌娌℃湁瀹夎jre,璇�<a style="color:white;" href="../../common/bin/jre-6u29-windows-i586.exe">涓嬭浇</a>骞跺畨瑁�</span></applet>';
		playerHTML+= '</div></div>';
		
		playBox.innerHTML= playerHTML;
		
		this.player= document.getElementById("player");
		
		document.body.onmousewheel = function() { // 鏄惁绂佹婊氳疆
			return mouseWheel;
		};
		
	};
	
	
	this.play= function(url){
		var playerBox= document.getElementById("playerBox");
		playerBox.style.width= "100%";
		playerBox.style.height= "100%";
		this.player.style.width= "100%";
		this.player.style.height= "100%";
		
		
		
		mouseWheel = false;
		if(this.player){
			try {
				this.player.sw_stop();
				this.player.setSurl(url);
				this.player.sw_play();
			}catch (e) {
				alert("鎾斁鍣ㄥ紓甯�,璇锋鏌ユ槸鍚﹀畨瑁呬簡1.6.0_29浠ヤ笂鐗堟湰鐨刯re");
			}
		}
		
	};
	
	
	this.stop= function(){
		if(this.player){
			try {
				this.player.sw_stop();
				this.player.style.width= "1px";
				this.player.style.height= "1px";
			} catch (e) {
//				alert("鎾斁鍣ㄥ紓甯�,璇锋鏌ユ槸鍚﹀畨瑁呬簡1.6.0_29浠ヤ笂鐗堟湰鐨刯re");
			}
		}
		var playerBox= document.getElementById("playerBox");
		playerBox.style.width= "1px";
		playerBox.style.height= "1px";
		mouseWheel = true;
		closePlayLog();
	};
	
}

function swplay_prepare() {
	playerPrepare = true;
}
