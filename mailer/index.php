<!DOCTYPE html>
<html>
<head>
	<title>xPrince Mailer</title>
	<link href="./favicon.png" rel="Shortcut Icon" type="image/x-icon">
	<style type="text/css">
	.logo{
	 font-size: 120px;
	  color: black;  /* if The image deleted */
	  background: url() no-repeat;
	  -webkit-background-clip: text;
	  -webkit-text-fill-color: transparent;
	  font-weight: 900;
	}
	.styled-select select {
	  background: transparent;
	  width: 268px;
	  padding: 5px;
	  font-size: 16px;
	  line-height: 1;
	  border: 0;
	  border-radius: 0;
	  height: 34px;
	  -webkit-appearance: none;

	  }

	input {
	       font-size: 120%;
	       color: #5a5854;
	       background-color: #f2f2f2;
	       border: 1px solid #bdbdbd;
	       padding: 5px 5px 5px 30px;
	       background-repeat: no-repeat;
	       background-position: 7px 5px ;
	       margin-bottom: 10px;
	}
	textarea {
	               font-size: 200%;
	        resize: none;
	}
	input:focus, input:hover {
	       background-color: #ffffff;
	       border: 1px solid #b1e1e4;
	}
	#sendnow {
	   width: 7em;  height: 2em;
	}
	.textbox {
	       background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABClpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wUmlnaHRzPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvcmlnaHRzLyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wUmlnaHRzOk1hcmtlZD0iVHJ1ZSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzI3NTdDRTExNUFCMTFFMUE5NURCRkMwMEFDNjhEQUMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzI3NTdDRTIxNUFCMTFFMUE5NURCRkMwMEFDNjhEQUMiPiA8ZGM6cmlnaHRzPiA8cmRmOkFsdD4gPHJkZjpsaSB4bWw6bGFuZz0ieC1kZWZhdWx0Ij5DcmVhdGl2ZSBDb21tb25zIEF0dHJpYnV0aW9uIE5vbi1Db21tZXJjaWFsIE5vIERlcml2YXRpdmVzPC9yZGY6bGk+IDwvcmRmOkFsdD4gPC9kYzpyaWdodHM+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjcyNzU3Q0RGMTVBQjExRTFBOTVEQkZDMDBBQzY4REFDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjcyNzU3Q0UwMTVBQjExRTFBOTVEQkZDMDBBQzY4REFDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+SoKR9AAAAH5JREFUeNpi/P//PwMlgImBQsDS39/fAKTrydTfyESBZhCoR/bCAig9AYgZceAFaGpRwiARKlEAxPOx2AYSS4CqSYSHAZoimEQCGh+rZmwGYDOEAZdmXAZgMwSrZnwGMKBpSMSZDghEUyLtUyIS+z+5eaGRAgc0Mg54bgQIMAAD7RsCMDpK7QAAAABJRU5ErkJggg==);
	}
	.sname {
	       background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAABkCAYAAACPQLC2AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAI0SURBVHja7JdBbuowEIb/VAgsW6ER6p53A3qEvBPUR8jbsOYGjxuUNRt6BLhBeoP0BrCPRIAFgoiZt3GQ6YshfSxeF7ZkKRpnPs+MPdZMwMy4ZzzgzvH/AS0AmE6nF8Knp6dHAHMAsRGlAHSe5xv7v+FwWG8BEc2JKCYimBkT0dxpwefBzHGNOG4cA2aunVEU9ZsC0hpAWhTFqilAM3NaxcAAdeMYbLfbDYCfYRj2d7vdqtE9kFI+SilflVKslFpLKc/KUsq+UmqtlGIp5avLhQmAkfE3AjC21sbMHJm8GUkpZxcAIcQLESXWuYOIEiHEQAgxcKy9nGPAzInDxeyK+wmARQXQ/5AG+mwBEd2XTPc8Kg9Xbt6tmdoAzcxvzFw0UCzMvxoAAv8meoAHeIAHeIAHeMD361g+dys1ncvElHSRERdGNsnzfNNyKfd6vT4RZZZiNaoyWPd6vdjpgimkIrvAAvAGQDNzxszPzDyqtSCKokFd27Ner3+ZdZimbORquuK6Eq/b7Q7Muq6qelfTFTnKvywMw8JedwHSKydnB7VwAZKG12D+VwyklDNmToyP2Y2Sd3xhgRBiRkSJ1e7Gjp2XQRDo/X6/OgM6nc7MMr1SXpqzzwA8V4E8HA6Li36h3W7XKQOAPh6PH+Z7UZsLrVbrd43ZRRAEk7IsP24mk3XjzjsHQaDLsnxvlI3mQixts0+n03vj98AcyQ9zLCMiWnzlPfAdiwd4gAd4gAd4wHcD/BkA5WXlFML1+oMAAAAASUVORK5CYII=);
	}
	.ssub {
	       background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjYxRDEzQTBCMzI0MzExRTFBNDYzRkQ4Qzc3RDdBOTg5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjYxRDEzQTBDMzI0MzExRTFBNDYzRkQ4Qzc3RDdBOTg5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjFEMTNBMDkzMjQzMTFFMUE0NjNGRDhDNzdEN0E5ODkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjFEMTNBMEEzMjQzMTFFMUE0NjNGRDhDNzdEN0E5ODkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz52VTCHAAABFUlEQVR42uxV0Q2DIBBV4z8bdAM26AZ1Ap3AToAT6AR1Ap2gbuAGzKD/TkCP5NmQRpQaSH96yQsJHO/k7t0ZK6WikJZEgS14gHSeZxX6BQuhwerL3pw6ACMIQkuQHsgluDQnM2ugN3rgrK33ha3INdbqBHn1wWFVUU7ghMKxLgt8Oe46yVQ7lrgoD/JdwDf/tg+ueK4mGDfOR5zV8D3VaBwFy6CM1VrsCfjYG81BclrPHVZp7HcoLN8LshdgNMg50pDh7In+uSCIsKUpnqZJWfQ8EB4gOlLRnXBzVVFvpIA5yJTBV241aeLSLI622aRmiho8k3uYRcM6LlLksEWzMA/DjqP4+oNLW5G9Wfz/J/88wEuAAQA9yExzBAEQqwAAAABJRU5ErkJggg==);
	}
	.smsg {
	       background-color: #f2f2f2;
	       border:1px solid #bdbdbd;
	       border-left: 13px solid #bdbdbd;
	}
	.smail {
	       background: #f2f2f2;
	       border:1px solid #bdbdbd;
	       border-left: 13px solid #bdbdbd;       
	}
	.bott {
	       background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAASFBMVEX///8QexDr9Os5kjnZ6tmq0Kr1+fVsrmyjzKMsiywXfxeFvIVImkgfgx9XoldcpVyKvoqeyp6BuoGXxpe217a+275xsHFiqGI7spxeAAAAtElEQVQokXWS2RaFIAhFoZwVte70/396JSuzlbzo2kc4iALUED4QIgUv4BoiIqVsTE6E8SItzhpVt8pYtxx8Ra3aKaVx3c+j7+qCxy1HOA230I59olV3QdlYEtB0ULKBQQGeugSJ+Cop5CGkG5+nsqYAlBm8ZcchE2wWH4fyyotJFaYZi9I4C7UUK9/GudRuzkrjbH60W5TGud3zgtPv5NsFhyMZD3E49vFDjZ92/Bng4fv8ATAUBveCXQjfAAAAAElFTkSuQmCC);
	}
	.tag{
	  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAVFBMVEX///+AgICEhISJiYmBgYHDw8Pj4+OlpaWSkpLT09Ourq75+fn29vby8vLu7u7IyMiQkJDa2tqXl5e2trbFxcW8vLyfn5/W1tbo6OiysrLOzs7d3d2YIs/EAAABIElEQVQokX1SSZLEIAyLbXYc1iadhv//c0h6rdl04GBVScLysryh1PILpEEANPLb2BE8QO5jbBEw6SpluxUSaF9zguRsWA+oy4b0ZFBQDH63ssXMrDbEh74w3auakkmUtOVd492HqK3KJRevNsaL674nOnPCNvwtueAnlqC3NWg4UhtorEjv3jodOWi0fBHmtO4+kvSHqQ5Bi8ZWTHsFYnCjvvQEcBKVB4KaBE4i2aXTi8hiElNqilL0uQh001hI7ofUaZ6p8io3Z33QlNcK5h5XsS7dez4C74pzOePOD0rOeotDWdnHGNkhPVZSrn44U0qi+RRD4J5LNHZl1VuTPZrZCb7WLky93tc+9YHehaBAcxZVNcG7qL+r/ecYfp7PF85PEABE2ykqAAAAAElFTkSuQmCC);

	}
	h1 {
	       background-color: #F6F6F6;
	}
	div {
	       margin: 50 100 20 100;
	       background-color: #F6F6F6;
	}
	body{
	 background-image: url(http://i.imgur.com/qHwsoUP.jpg);
	 background-repeat: no-repeat;
	 background-position: top center;
	 background-size: fixed;
	         -webkit-background-size: cover;
	       -moz-background-size: cover;
	       background-size: cover;
	font-family: 'Oswald', sans-serif;
	}
	</style>
</head>
<body>
	<form action="" enctype="multipart/form-data" id="form1" method="post" name="form1">
		<input name="veio" type="hidden" value="sim">
		<div align='center'></br></br></br></br>
			<div align='center'>
				<input class='textbox' name='de' placeholder='Your Email' size='20' type='text' value='customer@care.com'> <input class='sname' name='nome' placeholder='Your Name' type='text' value='Support'> &nbsp;&nbsp;&nbsp;&nbsp; <font size="3"><input class='tag' name="rpemail" placeholder="Email Tag" size="10" style="font-size: 120%;color: #5a5854;background-color: #f2f2f2;border: 1px solid #bdbdbd;padding: 5px 5px 5px 30px;background-repeat: no-repeat;background-position: 7px 5px ;margin-bottom: 10px;" type="text" value="%email%"><br>
				<input class='ssub' name="ssubject" placeholder='Subject' size='50' type='text' value='[Important] : Activate Your Account =?UTF-8?Q?=E2=9C=94_?='></font>
			</div><font size="3"></font>
			<div align='center'>
				<font size="3">
				<textarea class='smsg' cols='40' name="bodys" placeholder='Put Your Letter Here !! Happy Send =D' rows='10'></textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<textarea class='smail' cols='20' name='emails' placeholder='Put Your Maillist Here !!' rows='10'></textarea><br>
				<br>
				<input class='bott' id='sendnow' type='submit' value="Send"><br><br><br></font>
			</div>
		</div>
	</form></br><?php $testa = $_POST['veio']; if($testa != "") { $recemail = $_POST['recemail']; $message = $_POST['bodys']; $subject = $_POST['ssubject']; $nome = $_POST['nome']; $from = $_POST['de']; $from_mail = $nome.'<'.$from.'>'; $to = $_POST['emails']; $email = explode("\n", $to); $message = stripslashes($message); $i = 0; $count = 1; while($email[$i]) { $driv3r = $email[$i]; $message = stripslashes($message); $msgx = str_replace("$recemail", $driv3r, $message); $ok = "ok"; $headers = "MIME-Version: 1.0\n"; $headers .= "Content-Type: text/html; charset=UTF-8\n"; $headers .= 'From: ' . $from_mail . "\r\n"; if(mail($email[$i], $subject, $msgx, $headers)) echo "<font color=DarkCyan>Number: $count <b>".$email[$i]."</b> <font color=DarkCyan>Sent Successfully....! :) </font><br><hr>"; else echo "<font color=red>Number: $count <b>".$email[$i]."</b> <font color=red>send failure ! :( </font><br><hr>"; $i++; $count++; } $count--; if($ok == "ok") echo ""; } 
	?>
</body>
</html>