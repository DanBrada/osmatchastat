<html>
    <head>
        <title>Admin - Osu match stat</title>
        <link rel="stylesheet" type="text/css" href="/src/css/admin.css"
    </head>
    <body>
        <?php if($_GET["heslo"] != "enteryourpassword"): ?>
        <form>
            Zadej heslo: <input type="password" name="heslo">
            <input type="submit">
        </form>
        <? else: ?>
        <div id="vse">
            <h1><font size=36>Admin</font></h1><br>
            <form action="admin.php?heslo=123456" method=post>
                Ban 1 -<input type="text" name="ban1">
                <button>submit 
                    <?$b1=$_POST["ban1"];
                    $f1= fopen("./banz/ban1.txt","w");
                    fwrite ($f1 ,$_POST["ban1"]);
                    fclose($f1);?>
                </button>
                <br>
            <form action="admin.php?heslo=123456" method=post>
                Ban 2 -<input type="text" name="ban2">
                <button>submit 
                    <?$b2=$_POST["ban2"];
                    $f2= fopen("./banz/ban2.txt","w");
                    fwrite ($f2 ,$_POST["ban2"]);
                    fclose($f2);?>
                </button>
                <br>
                <form action="admin.php?heslo=123456" method=post>
                Ban 3 -<input type="text" name="ban3">
                <button>submit 
                    <?$b3=$_POST["ban3"];
                    $f3= fopen("./banz/ban3.txt","w");
                    fwrite ($f3 ,$_POST["ban3"]);
                    fclose($f3);?>
                </button>
                <br>
            <form action="admin.php?heslo=123456" method=post>
                Ban 4 -<input type="text" name="ban4">
                <button>submit 
                    <?$b4=$_POST["ban4"];
                    $f4= fopen("./banz/ban4.txt","w");
                    fwrite ($f4 ,$_POST["ban4"]);
                    fclose($f4);?>
                </button>
                <br>
            <form action="admin.php?heslo=123456" method=post>
                 Team 1 - <input type="text" name="t1">
                    <button> submit
                        <?  $t1=$_POST["t1"];
                            $f5=fopen("./teamz/team1.txt","w");
                            fwrite($f5,$t1);
                            fclose($f5);
                        ?>
                    </button>
        </div>
        <? endif ?>
    </body>
</html>
