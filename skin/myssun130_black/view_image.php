<?php 
        $filename = urldecode($_GET['filename']);
?>
<html>
<head>
<title>:: 스크린 샷 ::</title>
<meta http-equiv=Content-Type content=text/html; charset=EUC-KR>
<META HTTP-EQUIV="imagetoolbar" CONTENT="no">
</head>

<script language="javascript">
function processKey()
{
        if( (event.ctrlKey == true && (event.keyCode == 78 || event.keyCode == 82)) ||
        (event.keyCode >= 112 && event.keyCode <= 123) || event.keyCode == 8)
            {
        event.keyCode = 0;
        event.cancelBubble = true;
        event.returnValue = false;
            }
}

document.onkeydown = processKey;
</script>

<script LANGUAGE=JavaScript>

var isNav4, isIE4;
var windowX, windowY;
var bLargeImage = 0;
var x,y;

if (parseInt(navigator.appVersion.charAt(0)) >= 4)
{
    isNav4 = (navigator.appName == "Netscape") ? 1 : 0;
    isIE4 = (navigator.appName.indexOf("Microsoft") != -1) ? 1 : 0;
}

function fitWindowSize()
{
    if (isNav4) {
        window.innerWidth = document.layers[0].document.images[0].width;
        window.innerHeight = document.layers[0].document.images[0].height;
    }
    if (isIE4) {
        window.resizeTo(500, 500);
        width = 500 - (document.body.clientWidth -  document.images[0].width);
        height = 500 - (document.body.clientHeight -  document.images[0].height)
        windowX = (window.screen.width-width)/2;
        windowY = (window.screen.height-height)/2;
        if(width>screen.width){
            width = screen.width;
            windowX = 0;
            bLargeImage = 1;
        }
        if(height>screen.height-50){
            height = screen.height-50;
            windowY = 0;
            bLargeImage = 1;
        }
        x = width/2;
        y = height/2;
        window.moveTo(windowX,windowY);
        window.resizeTo(width, height);
    }
}

function move()
{
    if(bLargeImage)
    window.scroll(window.event.clientX - 50,window.event.clientY -50);
}

</script>


<body onLoad="fitWindowSize()" onmousemove="move();" leftmargin=0 marginwidth=0 topmargin=0 marginheight=0 oncontextmenu="return false">
<A href=# onclick=window.close()><img src=../../<?=$filename?> border=0></a>
</body>
</html>