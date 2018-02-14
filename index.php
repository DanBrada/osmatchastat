<html>
    <head>
        <title>Osu Match stat</title>
        <link rel="stylesheet" href="/src/css/atvh.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body bgcolor="Green">
        <table bordercolor="navy" rules="all" width=250 height=125 cellspacing=125 bgcolor=white>
            <tr><td bgcolor=silver><img src=teamz/team1.png width=100 height=100></td><td bgcolor=silver><img src=teamz/team2.png width=100 height=100></td></tr>
            <tr><td><font style=bold> BAN 1 </font></td><td></td></tr>
            <tr><td><?php $b1 = fopen("./banz/ban1.txt", "r"); $prvni=fgets($b1); fclose($b1); echo "$prvni";?></td><td><?php $b2 = fopen("./banz/ban2.txt", "r"); $ban2=fgets($b2); fclose($b2); echo "$ban2";?></td></tr>
            <tr><td><font style=bold> BAN 2</font></td><td></td></tr>
            <tr><td><?php $b3 = fopen("./banz/ban3.txt", "r"); $ban3=fgets($b3); fclose($b3); echo "$ban3";?></td><td><?php $b4 = fopen("./banz/ban4.txt", "r"); $ban4=fgets($b4); fclose($b4); echo "$ban4";?></td></tr>
            <tr><td><font style=bold>Skore</font></td><td></td></tr>
            <tr><td><?php $s1 = fopen("./skore/s1.txt", "r"); $sk1=fgets($s1); fclose($b3); echo "$sk1";?></td><td><?php $s2 = fopen("./skore/s2.txt", "r"); $sk2=fgets($s2); fclose($sk2); echo "$sk2";?></td></tr>
        </table>
        <iframe src="https://player.twitch.tv/?channel=mineik2" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe><iframe src="https://www.twitch.tv/mineik2/chat?popout=" frameborder="0" scrolling="no" height="500" width="350"></iframe>
        <div id="myNav" class="overlay">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="overlay-content">
                <a href="admin.php">Admin</a>
                <a href="twitch.tv/mineik2">Stream</a>
            </div>

        </div>

        <button><span onclick="openNav()">open</span></button> 
        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script> 
    </body>
</html>