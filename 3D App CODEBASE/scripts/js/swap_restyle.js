// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});
	}

	function selectModel() {

		$('#navCoke').click(function(){
			$('#coke').show();
			$('#sprite').hide();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});

		$('#navSprite').click(function(){
			$('#coke').hide();
			$('#sprite').show();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide();  	  	  
		});

		$('#navPepper').click(function(){
			$('#coke').hide();
			$('#sprite').hide();
			$('#pepper').show();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').show(); 	   
		});
	}

});

function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            // Coca-Cola Theme 1
            document.getElementById('bodyColor').style.backgroundColor = '#8B0000';  // Dark Red
            document.getElementById('headerColor').style.backgroundColor = '#E60000'; // Bright Red
            document.getElementById('footerColor').style.backgroundColor = '#E60000'; // Bright Red
            break;
        case 2:
            // Coca-Cola Theme 2
            document.getElementById('bodyColor').style.backgroundColor = '#E60000';  // Bright Red
            document.getElementById('headerColor').style.backgroundColor = '#8B0000'; // Dark Red
            document.getElementById('footerColor').style.backgroundColor = '#8B0000'; // Dark Red
            break;
        case 3:
            // Sprite Theme 1
            document.getElementById('bodyColor').style.backgroundColor = '#006400';  // Dark Green
            document.getElementById('headerColor').style.backgroundColor = '#008CB2'; // Light Blue
            document.getElementById('footerColor').style.backgroundColor = '#008CB2'; // Light Blue
            break;
        case 4:
            // Sprite Theme 2
            document.getElementById('bodyColor').style.backgroundColor = '#008CB2';  // Light Blue
            document.getElementById('headerColor').style.backgroundColor = '#006400'; // Dark Green
            document.getElementById('footerColor').style.backgroundColor = '#006400'; // Dark Green
            break;
        case 5:
            // Dr. Pepper Theme 1
            document.getElementById('bodyColor').style.backgroundColor = '#800000';  // Maroon
            document.getElementById('headerColor').style.backgroundColor = '#7B4141'; // Dark Red
            document.getElementById('footerColor').style.backgroundColor = '#7B4141'; // Dark Red
            break;
        case 6:
            // Dr. Pepper Theme 2
            counter = 0;
            document.getElementById('bodyColor').style.backgroundColor = '#7B4141';  // Dark Red
            document.getElementById('headerColor').style.backgroundColor = '#800000'; // Maroon
            document.getElementById('footerColor').style.backgroundColor = '#800000'; // Maroon
            break;
    }
}


function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#1A1A1A';   
document.getElementById('headerColor').style.backgroundColor = '#B22222';  
document.getElementById('footerColor').style.backgroundColor = '#B22222';  

}


  
