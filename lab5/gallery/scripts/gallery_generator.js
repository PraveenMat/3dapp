//Javascript Gallery Generator
// Create the XMLHttpRequest object for communiting with the web sever
var xmlHttp = new XMLHttpRequest ();
// Stores number of horizontalColumns gallery has, if too large it won't fit in browser window
var numberOfColumns = 4;
// Stores newly generated gallery HTML code
var htmlCode = "";
// Temporary stores server response while code is generated
var response;

// JavaScript Gallery Generator
$(document).ready(function() {
	// Set up a path variable to the PHP function that reads the image directory to find the thumbnail file names
	var send = "scripts/hook.php";
	// Open the connection to the web server
	xmlHttp.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp.send(null);
	// Check we get a valid server response
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			// Response handler code
			alert(xmlHttp.responseText);
            // Tokenise the repsonse
			response = xmlHttp.responseText.split("~");
            htmlCode += '<tr>'
			// Loop round the response array of tokens, which are the image names
			for (var i=0;i<response.length;i++) {
				// Handeler to build the HTML string
				// Use this to provide a link to the image
                htmlCode += '<td id="gallery_cell">';
                htmlCode += '<a href="' + 'images/' + response[i] +'">';
				htmlCode += '<img src="images/' + response[i] + '" id="img-thumbnail"/>';
				htmlCode += '</a>';			
				htmlCode += '</td>';
                if(((i+1)%numberOfColumns) == 0) {
                    htmlCode += '</tr><tr>';
                }
			}
			htmlCode += '</tr>'
			document.getElementById('gallery').innerHTML = htmlCode;
		}
	}
});