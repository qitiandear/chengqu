if(typeof deconcept=="undefined"){var deconcept=new Object();}if(typeof deconcept.util=="undefined"){deconcept.util=new Object();}if(typeof deconcept.SWFObjectUtil=="undefined"){deconcept.SWFObjectUtil=new Object();}deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a){if(!document.getElementById){return;}this.DETECT_KEY=_a?_a:"detectflash";this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);this.params=new Object();this.variables=new Object();this.attributes=new Array();if(_1){this.setAttribute("swf",_1);}if(id){this.setAttribute("id",id);}if(w){this.setAttribute("width",w);}if(h){this.setAttribute("height",h);}if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();if(!window.opera&&document.all&&this.installedVer.major>7){deconcept.SWFObject.doPrepUnload=true;}if(c){this.addParam("bgcolor",c);}var q=_7?_7:"high";this.addParam("quality",q);this.setAttribute("useExpressInstall",false);this.setAttribute("doExpressInstall",false);var _c=(_8)?_8:window.location;this.setAttribute("xiRedirectUrl",_c);this.setAttribute("redirectUrl","");if(_9){this.setAttribute("redirectUrl",_9);}};deconcept.SWFObject.prototype={useExpressInstall:function(_d){this.xiSWFPath=!_d?"expressinstall.swf":_d;this.setAttribute("useExpressInstall",true);},setAttribute:function(_e,_f){this.attributes[_e]=_f;},getAttribute:function(_10){return this.attributes[_10];},addParam:function(_11,_12){this.params[_11]=_12;},getParams:function(){return this.params;},addVariable:function(_13,_14){this.variables[_13]=_14;},getVariable:function(_15){return this.variables[_15];},getVariables:function(){return this.variables;},getVariablePairs:function(){var _16=new Array();var key;var _18=this.getVariables();for(key in _18){_16[_16.length]=key+"="+_18[key];}return _16;},getSWFHTML:function(){var _19="";if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","PlugIn");this.setAttribute("swf",this.xiSWFPath);}_19="<embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\"";_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";var _1a=this.getParams();for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}var _1c=this.getVariablePairs().join("&");if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");this.setAttribute("swf",this.xiSWFPath);}_19="<object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\">";_19+="<param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";var _1d=this.getParams();for(var key in _1d){_19+="<param name=\""+key+"\" value=\""+_1d[key]+"\" />";}var _1f=this.getVariablePairs().join("&");if(_1f.length>0){_19+="<param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="</object>";}return _19;},write:function(_20){if(this.getAttribute("useExpressInstall")){var _21=new deconcept.PlayerVersion([6,0,65]);if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){this.setAttribute("doExpressInstall",true);this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));document.title=document.title.slice(0,47)+" - Flash Player Installation";this.addVariable("MMdoctitle",document.title);}}if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){var n=(typeof _20=="string")?document.getElementById(_20):_20;n.innerHTML=this.getSWFHTML();return true;}else{if(this.getAttribute("redirectUrl")!=""){document.location.replace(this.getAttribute("redirectUrl"));}}return false;}};deconcept.SWFObjectUtil.getPlayerVersion=function(){var _23=new deconcept.PlayerVersion([0,0,0]);if(navigator.plugins&&navigator.mimeTypes.length){var x=navigator.plugins["Shockwave Flash"];if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}}else{if(navigator.userAgent&&navigator.userAgent.indexOf("Windows CE")>=0){var axo=1;var _26=3;while(axo){try{_26++;axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+_26);_23=new deconcept.PlayerVersion([_26,0,0]);}catch(e){axo=null;}}}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}catch(e){if(_23.major==6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}catch(e){}}if(axo!=null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}}return _23;};deconcept.PlayerVersion=function(_29){this.major=_29[0]!=null?parseInt(_29[0]):0;this.minor=_29[1]!=null?parseInt(_29[1]):0;this.rev=_29[2]!=null?parseInt(_29[2]):0;};deconcept.PlayerVersion.prototype.versionIsValid=function(fv){if(this.major<fv.major){return false;}if(this.major>fv.major){return true;}if(this.minor<fv.minor){return false;}if(this.minor>fv.minor){return true;}if(this.rev<fv.rev){return false;}return true;};deconcept.util={getRequestParameter:function(_2b){var q=document.location.search||document.location.hash;if(_2b==null){return q;}if(q){var _2d=q.substring(1).split("&");for(var i=0;i<_2d.length;i++){if(_2d[i].substring(0,_2d[i].indexOf("="))==_2b){return _2d[i].substring((_2d[i].indexOf("=")+1));}}}return "";}};deconcept.SWFObjectUtil.cleanupSWFs=function(){var _2f=document.getElementsByTagName("OBJECT");for(var i=_2f.length-1;i>=0;i--){_2f[i].style.display="none";for(var x in _2f[i]){if(typeof _2f[i][x]=="function"){_2f[i][x]=function(){};}}}};if(deconcept.SWFObject.doPrepUnload){if(!deconcept.unloadSet){deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};__flash_savedUnloadHandler=function(){};window.attachEvent("onunload",deconcept.SWFObjectUtil.cleanupSWFs);};window.attachEvent("onbeforeunload",deconcept.SWFObjectUtil.prepUnload);deconcept.unloadSet=true;}}if(!document.getElementById&&document.all){document.getElementById=function(id){return document.all[id];};}var getQueryParamValue=deconcept.util.getRequestParameter;var FlashObject=deconcept.SWFObject;var SWFObject=deconcept.SWFObject;

var flashplayerwidth,flashplayerheight;
var curItem = null;
var eles;
var firstinit = true;
var playerEle = null;
var contid;
var fw,fh;
var videocont = null, videotitle=null, videodate1=null, videodate2 = null;

/*
var setplayer = function( divid, w, h ){
	var ele = document.getElementById(divid);
	flashplayerwidth = w;
	flashplayerheight = h;
	if( ele ){
		ele.innerHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="' + w +'" height="' + h + '" id="ieflashplayer">\
	<param name="movie" value="psvplayer.swf" />\
	<param name="quality" value="high" />\
	<param name="allowFullScreen" value="true" />\
	<param name="allowScriptAccess" value="always" />\
	<embed src="psvplayer.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="' + w + '" height="' + h + '" id="nonieflashplayer"></embed>\
</object>';
	}
};
*/


var setplayer = function( divid, w, h ) {
    if( firstinit ){
        contid = divid;
        fw = w;
        fh = h;
    }
    
    var ignoredParams = {src: 1, bgcolor: 1};
	var params = String('src="psvplayer.swf" menu="true" quality="high" bgcolor="#869ca7" ').split(" ");
    var swf = new SWFObject("psvplayer.swf", 'xxx', fw, fh, "9.0.18.60", "#869ca7");
    swf.addParam("align", "middle");
    swf.addParam("allowFullScreen", "true");

  //in case of break
  logo_url = logo_url || '';
  record_page_url = record_page_url || '';
  
  if( logo_url ){
    swf.addVariable( "logo_url", logo_url );
  }
  if( record_page_url ){
    swf.addVariable( 'record_page', record_page_url );
  }
  
  for(var i = 0; i < params.length; i++){
  		var paramName = params[i].split('=')[0];
    	var paramValue = params[i].split('"')[1];
          
      if(ignoredParams[paramName] != 1 && paramName != ""){
      	swf.addParam(paramName, paramValue);
       }
   }
            
 	 swf.write(divid);
};




var isIe = !!window.attachEvent;
var isPlayerLoaded = false;
//var playerId = isIe ? 'ieflashplayer' : 'nonieflashplayer';
var playerId = 'xxx';
var playerEle;


var whenFlashOk = function(){
    playerEle = document.getElementById(playerId);
	
    isPlayerLoaded = true;
	
    if( firstinit ){
        addFuncToAs();
        firstinit = false;
    }
   
	playerEle.loadAndPlayVideo(videourl);
};

var whenAutoStartPlay = function(){
    if( !autoplay ){
        playerEle.pauseVideo();
    }
};

var onClickKeyFrame = function(e){
	if( isPlayerLoaded ){
		e = e || event;
		var src = e.target || e.srcElement;
        if( src.nodeName === 'SPAN' || src.nodeName === 'IMG'){
            src = src.parentNode;
        }
		
		if( !hasClass(src,'content-in-part1-listitem-cur') ){
            var url = src.getAttribute('url');
            var title = src.getAttribute('titl');
            var cont = src.getAttribute('cont');
            var detailurl = src.getAttribute('detailurl');
            var date = src.getAttribute('date');

            if( !url )
                return;

		    replaceClass( src, 'content-in-part1-listitem', 'content-in-part1-listitem-cur' );
			if( curItem ){
				replaceClass( curItem, 'content-in-part1-listitem-cur', 'content-in-part1-listitem' );
			}
			curItem = src;

            videourl = eval( url );
            autoplay = true;
   
            setplayer( contid, fw, fh );

            if( title ){
                videotitle = videotitle || document.getElementById('video-title');
                if( detailurl )
                    videotitle.innerHTML = '<a href="' + detailurl + '">' + title + '</a>';
                else 
                    videotitle.innerHTML = title;
            }

            if( cont ){
                videocont = videocont || document.getElementById('video-cont');
                if( detailurl )
                    videocont.innerHTML = cont + '<a href="' + detailurl + '">' + '[璇︾粏]' + '</a>';
                else 
                    videocont.innerHTML = cont;
            }

            if( date ){
                videodate1 = videodate1 || document.getElementById('video-date-1');
                videodate2 = videodate2 || document.getElementById('video-date-2');

                videodate1.innerHTML = videodate2.innerHTML = date;
            }
		}
		
	}
};

// flash will call this when cur video come to it's end.
var next_js = function(){
    if( continueplay ){
        var n;
        if( curItem ) {
            n = indexOf(eles, curItem) + 1;
            if( n < 0 ) 
                return;

            n = eles[n];
            if( !n )
                return;

            //replaceClass( curItem, 'content-in-part1-listitem-cur', 'content-in-part1-listitem' );
            //replaceClass( n, 'content-in-part1-listitem', 'content-in-part1-listitem-cur' );
            //curItem = n;
        }
        // otherwise let's choose the first item to play
        else {
            n = eles[0];
            //replaceClass( curItem, 'content-in-part1-listitem', 'content-in-part1-listitem-cur' );
        }
        onClickKeyFrame( { target : n } );
    }
};

if(!document.getElementsByClassName){
	document.getElementsByClassName = function(cn){
		var rx = new RegExp("\\b" + cn + "\\b"),allT = document.getElementsByTagName("*"),allCN = [],i = 0,a;
		while (a = allT[i++]){
			if (a.className && a.className.indexOf(cn)+1){
				if(a.className===cn){allCN[allCN.length] = a;continue;}
				rx.test(a.className)?(allCN[allCN.length] = a):0;
			}
		}
		return allCN;
	}
}

var addEvent = function(ele, evt, func ){
	if( !ele || !func || !evt ) return;
	
	if( ele.attachEvent ){
		ele.attachEvent( 'on' + evt, func ); 
	}
	else if( ele.addEventListener ){
		ele.addEventListener( evt, func, false );
	}
};

var addFuncToAs = function(){
	eles = document.getElementsByClassName('video-frame-list-item');
	if( eles && eles.length > 0 ){
		for( var i = 0; i < eles.length; i++ ){
			addEvent( eles[i], 'click', onClickKeyFrame );
			if( hasClass( eles[i], 'content-in-part1-listitem-cur' ) ){
				curItem = eles[i];
			}
		}
	}
};


var replaceClass = function( ele, o, n ){
	if( ele && o && n ){
		if( !ele.className || ele.className.indexOf(o) == -1 ){
			if( !ele.className ){
				ele.className = '';
			}
			
			if( ele.className.indexOf(n) >= 0 ){
				return;
			}
			
			ele.className += ' ' + n;
		}
		
		else {
			ele.className = ele.className.replace(o,n);
		}
	}
};

var hasClass = function( ele, cn ){
	if( ele && cn && ele.className ){
		if( ele.className.indexOf(cn) >= 0 ){
			return true;
		}
	}
	
	return false;
};

//for array
var indexOf = function(array, value , startIndex){
    var ret = -1,
    length = array.length;
	
    if(typeof(startIndex) != "number"){
        startIndex = 0;
    } 
    else if(startIndex < 0){
        startIndex = length + startIndex;
        if(startIndex < 0) 
            startIndex = 0;
    }

    while(startIndex < length){
        if(array[startIndex] === value){
            ret = startIndex;
            break;
        }

        startIndex ++ ;
    }

    return ret;
};


/*
var checkPlayerLoaded = function( autoplay ){
	if( !isPlayerLoaded ){
			if( !playerEle ){
				playerEle = document.getElementById(playerId);
				if( !playerEle ) {
					setTimeout( checkPlayerLoaded, 500 );
					return;
				}
			}
			
			if( playerEle.isPlayerLoaded() ){
				isPlayerLoaded = true;
				if( autoplay ){
					playerEle.loadAndPlayVideo(videourl);
				}
			}
			else {
				setTimeout( checkPlayerLoaded, 500 );
			}
	}
};
*/