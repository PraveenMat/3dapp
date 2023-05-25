//adapted from example code 'benskitchen.com'

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('coke_model__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('sprite_model__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('pepper_model__RotationTimer').setAttribute('enabled', spinning.toString());
}



function stopRotation()
{
	spinning = false;
	document.getElementById('coke_model__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('sprite_model__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('pepper_model__RotationTimer').setAttribute('enabled', spinning.toString());
	
}



function animateModel()
{
    if(document.getElementById('coke_model__RotationTimer').getAttribute('enabled') != 'true')
        document.getElementById('coke_model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('coke_model__RotationTimer').setAttribute('enabled', 'false');

    if(document.getElementById('sprite_model__RotationTimer').getAttribute('enabled') != 'true')
        document.getElementById('sprite_model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('sprite_model__RotationTimer').setAttribute('enabled', 'false');

    if(document.getElementById('pepper_model__RotationTimer').getAttribute('enabled') != 'true')
        document.getElementById('pepper_model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('pepper_model__RotationTimer').setAttribute('enabled', 'false');
}

function wireframe()
{
	var e = document.getElementById('coke_model');
    e.runtime.togglePoints(true);

	var f = document.getElementById('sprite_model');
    f.runtime.togglePoints(true);
    
	var g = document.getElementById('pepper_model');
    g.runtime.togglePoints(true);
    
}

var headlightOn = true;
var spotlightOn = true;
var toplightOn = true;

function headlight()
{
	headlightOn = !headlightOn;
	document.getElementById('coke_model__headlight').setAttribute('headlight', headlightOn.toString());
	document.getElementById('sprite_model__headlight').setAttribute('headlight', headlightOn.toString());
	document.getElementById('pepper_model__headlight').setAttribute('headlight', headlightOn.toString());
}

function spotlight()
{
	spotlightOn = !spotlightOn;
	document.getElementById('coke_model__spotlight').setAttribute('on', spotlightOn.toString());
	document.getElementById('sprite_model__spotlight').setAttribute('on', spotlightOn.toString());
	document.getElementById('pepper_model__spotlight').setAttribute('on', spotlightOn.toString());
}

function toplight()
{
	toplightOn = !toplightOn;
	document.getElementById('coke_model__toplight').setAttribute('on', toplightOn.toString());
	document.getElementById('sprite_model__toplight').setAttribute('on', toplightOn.toString());
	document.getElementById('pepper_model__toplight').setAttribute('on', toplightOn.toString());
}

function cameraFront()
{
	document.getElementById('coke_model__CameraFront').setAttribute('bind', 'true');
	document.getElementById('sprite_model__CameraFront').setAttribute('bind', 'true');
	document.getElementById('pepper_model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('coke_model__CameraBack').setAttribute('bind', 'true');
	document.getElementById('sprite_model__CameraBack').setAttribute('bind', 'true');
	document.getElementById('pepper_model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('coke_model__CameraLeft').setAttribute('bind', 'true');
	document.getElementById('sprite_model__CameraLeft').setAttribute('bind', 'true');
	document.getElementById('pepper_model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('coke_model__CameraRight').setAttribute('bind', 'true');
	document.getElementById('sprite_model__CameraRight').setAttribute('bind', 'true');
	document.getElementById('pepper_model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('coke_model__CameraTop').setAttribute('bind', 'true');
	document.getElementById('sprite_model__CameraTop').setAttribute('bind', 'true');
	document.getElementById('pepper_model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('coke_model__CameraBottom').setAttribute('bind', 'true');
	document.getElementById('sprite_model__CameraBottom').setAttribute('bind', 'true');
	document.getElementById('pepper_model__CameraBottom').setAttribute('bind', 'true');
}


function addClickSound1() {
    var sound = document.getElementById("mySound1");
    sound.play();
}

function addClickSound2() {
    var sound = document.getElementById("mySound2");
    sound.play();
}

function addClickSound3() {
    var sound = document.getElementById("mySound3");
    sound.play();
}


  


  