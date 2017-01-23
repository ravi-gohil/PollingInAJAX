function getvote(int) 
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("poll").innerHTML = this.responseText;
		}
	}
	xmlhttp.open("GET", "poll.php?vote="+int, true);
	xmlhttp.send();
}