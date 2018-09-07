<?php 
include 'db.php';

		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			$msg = $_POST['msg'];

			$query = "INSERT INTO chat (name,msg) values ('$name','$msg')";

			$run = $con->query($query);

		}
		?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Jucus Chat</title>
	<link rel="stylesheet" href="mycss.css" media="all"/>
	<script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
	</script>
	</head>
	
<body onload="ajax();">

<div id="container">
		<div id="chat_box">
		<div id="chat"></div>
		</div>
		<form method="post" action="index.php">
		<input type="text" name="name" placeholder="neved"/>
		<textarea name="msg" placeholder="üzenet"></textarea>
		<input type="submit" name="submit" value="küldés"/>
		
		</form>


</div>

</body>
</html>