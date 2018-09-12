//骞垮憡鎾斁鍦板潃锛�
//var adPath = localhref + "js/ad.mp4";

var flashPlayer= null;
function getFlashPlayer(configObj){

	if(flashPlayer== null){
		flashPlayer= new FlashPlayer(configObj);
		flashPlayer.initPlayer();
	}
	return flashPlayer;
}
function FlashPlayer(configObj) {
	var init = false;
	var fPlayer = null;
	var config= {
		flashplayer : 'common/plugins/player.swf',
		controlbar : 'bottom',
		width : ((configObj&&configObj.width)? configObj.width : 640),
		height : ((configObj&&configObj.height)? configObj.height : 480),
		//skin : 'common/plugins/newtubedark.zip',
		controlbar : 'bottom',
		repeat:'list',
		mute: false,
		volume: 100, 
		autostart:true,  
		autoplay:true, 
		events : {
			onReady : function() {
				$("#mediaspace").attr("class", "player");
				$("#mediaspace_wrapper").css({
					"position" : "absolute",
					"top" : "10px",
					"left" : "10px"
				});
			},onPlaylistItem:function(){
				//澶勭悊骞垮憡鎾斁鐜╀箣鍚庨€€鍑哄叏灞忕殑闂
				this.setFullscreen(this.getFullscreen());
			}
		}
	};
	console.log(config.width);
	console.log(config.height);
	this.initPlayer = function() {
		var me=this;
		if (init) {
			return;
		}
		var playHTML = '<div id="flashPlayerBox" class="playerBox">'
				+ '<div class="playerMask"></div>'
				+ '<div id="mediaspace" class="player">' + '</div>'
				+ '</div>';
		$("#playView").append(playHTML);

		$("#mediaspace").attr("class", "player");
		init = true;
	};

	this.stop = function() {
		if (fPlayer) {
			fPlayer.stop();
			$("#mediaspace").html("");
		}
		$("#flashPlayerBox").width("1px").height("1px");
		closePlayLog();
	};

	this.play = function(url) {
		
		var requestPath = window.location.href.toLowerCase();
		
		$("#mediaspace").html("");
		config.playlist= []; 
		$.each(adUrlArray, function(num, item){
			config.playlist.push( filterUrl(item) );
		});
		//url = encodeURI(url);
		config.playlist.push( filterUrl(url) );
		
		function filterUrl(url){
			var playObj= { };
			//url = encodeURI(url);
			if(url.toLowerCase().indexOf("rtmp")>= 0){
				var num= url.lastIndexOf("/");
				playObj.file= url.substring(num+1, url.length);
				playObj.streamer= url.substring(0, num+1);
				playObj.provider= "rtmp";
			}else if (url.toLowerCase().indexOf(".m3u8") >= 0) {
				playObj.file= url;
				if(getDeviceType()== "pc"){
					playObj.provider= "common/plugins/adaptiveProvider.swf";
				}
			}else if (url.toLowerCase().indexOf(".mp4") >= 0) {
				playObj.file= url;
				playObj.provider= "http";
			}else{
				playObj.file= url;
				playObj.image= "common/images/musicBd.jpg";
			}
			return playObj;
		}
		
		
		fPlayer= jwplayer('mediaspace').setup(config);  
		
		$("#mediaspace").attr("class", "player");
		$("#mediaspace_wrapper").css({
			"position" : "absolute",
			"top" : "10px",
			"left" : "10px"
		}); 
		
		$("#flashPlayerBox").width("100%").height("100%");   
		
		var requestPath = window.location.href.toLowerCase();

		// 妫€娴嬪鎴风pc鏈轰笂鎵€瀹夎鐨刦lash鐗堟湰鏄惁鏀寔鏈珯瑙嗛鎾斁锛�
		var playerVersion = swfobject.getFlashPlayerVersion();
		if (playerVersion!= null && playerVersion.major <10 && requestPath.indexOf("iphone")< 0 && requestPath.indexOf("ipad")< 0) {
			alert("娴忚鍣ㄨ繕鏈畨瑁匜lash鎾斁鍣ㄦ垨鐗堟湰杩囦綆锛岃瀹夎 10浠ヤ笂鐗堟湰鍚庡啀瑙傜湅绔欏唴瑙嗛");
		}

		return true;

	};

}
 