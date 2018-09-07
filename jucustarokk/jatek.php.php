<?php
include_once "kapocs.php"

?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html" charset="utf-8"/>
    <title>Tarokk</title>
    <link rel="stylesheet" href="style/tarokk.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-theme.min.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/scriptek.js"></script>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));

        }
    </script>

</head>
<body>

<div id="wraper">
    <div id="Header">
        <h1>Trokkozni jó!</h1>
        <input type="button" value="új játék" id="startButton" onclick="kavaras()">

    </div>

    <div id="jatekter">


        <div class="user1Hand" >
            <div id="blockCards">
                <img src="img/kepek/hatlap.jpg" id="block01">
                <img src="img/kepek/hatlap.jpg" id="block02">
                <img src="img/kepek/hatlap.jpg" id="block03">
                <img src="img/kepek/hatlap.jpg" id="block04">
                <img src="img/kepek/hatlap.jpg" id="block05">
                <img src="img/kepek/hatlap.jpg" id="block06">
                <img src="img/kepek/hatlap.jpg" id="block07">
                <img src="img/kepek/hatlap.jpg" id="block08">
                <img src="img/kepek/hatlap.jpg" id="block09">
            </div>

            <div id="realCards" draggable="true" ondragstart="drag(event)" width="65" height="103">
                <img src="" id="user1Card01">
                <img src="" id="user1Card02">
                <img src="" id="user1Card03">
                <img src="" id="user1Card04">
                <img src="" id="user1Card05">
                <img src="" id="user1Card06">
                <img src="" id="user1Card07">
                <img src="" id="user1Card08">
                <img src="" id="user1Card09">
            </div>
            <div style="color: purple"><?php echo 'anya'?><br /><?php echo 'pontszám: '?>
                </div>

        </div>

        <div class="user2Hand">

            <div id="block2Cards">
                <img src="img/kepek/hatlap.jpg" id="block01">
                <img src="img/kepek/hatlap.jpg" id="block02">
                <img src="img/kepek/hatlap.jpg" id="block03">
                <img src="img/kepek/hatlap.jpg" id="block04">
                <img src="img/kepek/hatlap.jpg" id="block05">
                <img src="img/kepek/hatlap.jpg" id="block06">
                <img src="img/kepek/hatlap.jpg" id="block07">
                <img src="img/kepek/hatlap.jpg" id="block08">
                <img src="img/kepek/hatlap.jpg" id="block09">
            </div>

            <div id="real2Cards" draggable="true" ondragstart="drag(event)" width="65" height="103">
                <img src="" id="user2Card01">
                <img src="" id="user2Card02">
                <img src="" id="user2Card03">
                <img src="" id="user2Card04">
                <img src="" id="user2Card05">
                <img src="" id="user2Card06">
                <img src="" id="user2Card07">
                <img src="" id="user2Card08">
                <img src="" id="user2Card09">
            </div>
            <div style="color: purple"><?php echo 'viki'?><br /><?php echo 'pontszám: '?>
                </div>
        </div>

        <div id="drop" ondrop="drop(event)" ondragover="allowDrop(event)">

        </div>

        <div class="user3Hand" >

            <div id="block3Cards">
                <img src="img/kepek/hatlap.jpg" id="block01">
                <img src="img/kepek/hatlap.jpg" id="block02">
                <img src="img/kepek/hatlap.jpg" id="block03">
                <img src="img/kepek/hatlap.jpg" id="block04">
                <img src="img/kepek/hatlap.jpg" id="block05">
                <img src="img/kepek/hatlap.jpg" id="block06">
                <img src="img/kepek/hatlap.jpg" id="block07">
                <img src="img/kepek/hatlap.jpg" id="block08">
                <img src="img/kepek/hatlap.jpg" id="block09">
            </div>

            <div id="real3Cards" draggable="true" ondragstart="drag(event)" width="65" height="103">
                <img src="" id="user3Card01">
                <img src="" id="user3Card02">
                <img src="" id="user3Card03">
                <img src="" id="user3Card04">
                <img src="" id="user3Card05">
                <img src="" id="user3Card06">
                <img src="" id="user3Card07">
                <img src="" id="user3Card08">
                <img src="" id="user3Card09">
            </div>
            <div style="color: purple"><?php echo 'mama'?><br /><?php echo 'pontszám: '?>
                </div>
        </div>

               <div class="real4Cards" draggable="true" ondragstart="drag(event)" width="65" height="103">
                    <img src="" id="user4Card01">
                    <img src="" id="user4Card02">
                    <img src="" id="user4Card03">
                    <img src="" id="user4Card04">
                    <img src="" id="user4Card05">
                    <img src="" id="user4Card06">
                    <img src="" id="user4Card07">
                    <img src="" id="user4Card08">
                    <img src="" id="user4Card09">
                </div>
            <div style="color: purple"><?php echo 'lajcsi'?><br /><?php echo 'pontszám: '?>
                </div>
        </div>
</div>
</div>

</body>
</html>
