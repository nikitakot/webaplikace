/**
* Created by IntelliJ IDEA.
* User: user
* Date: 2.3.2017
* Time: 17:02
*/
<HTML>
<BODY>
<form method="post" action="addguestbook.php">
    <div align="center"></div>
    <div align="center"></div>
    <div align="center" class="style1"></div>
    <div align="center"><span class="style1">Name:</span><br/>
        <input name="name" type="text" size="30" maxlength="40"  required/>
        <br/>
        <span class="style1"><br/>
  Email:</span><br/>
        <input type="email" name="email" size="30" maxlength="40"  required/>
        <br/>
        <span class="style1">Message:</span><br/>
        <textarea name="msg" cols="22" rows="6"  required></textarea>
        <br/>
        <br/>
        <input type="reset" value="Reset"/>
        &nbsp;
        <input type="submit" value="Send"/>
    </div>
    <div align="center">
        <p>&nbsp;</p>
        <?php
        $file = "guestbook.txt";
        if (fopen($file, "r")) {
            $fil = "guestbook.txt";
            $fo = fopen($fil, "r");
            $con = fread($fo, filesize($fil));
            fclose($fo);
            echo "$con";
        } else {
            echo "<h3>error<h3>";
        }
        ?></div>
</BODY>
</HTML>