



<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="utf-8">
    
</head>
<body>
    <form method="POST" action="">
    <table align="center">
    <caption>Calculatrice</caption>
    <tr>
    <td><input type="text" name="v1" size="8" placeholder="valeur1">
    </td>
    <td><input type="text" name="v2" size="8" placeholder="valeur2">
    </td>
    </tr>
    </table><br><br>
    <table width="10%" border=1 align="center" cellspacing="0">
    <caption>Operation</caption>
    <tr>
    <td><font size="15px"><input type="radio" name="op" values="1">+</font></td>
    <td><font size="15px"><input type="radio" name="op" values="2">-</font></td>
    <td><font size="15px"><input type="radio" name="op" values="3">*</font></td>
    <td><font size="15px"><input type="radio" name="op" values="4">/</font></td>
    </tr>
    </table>
    <p align="center"> <input type="submit" values="appliquer"></p>
    </form>
<?php
    switch($_POST['op'])
    {
        case '1':
                $R=$_POST['v1']+$_POST['v2'];
                echo $_POST['v1']. "+". $_POST['v2']. "=" .$R;
            break;
        case '2':
                $R=$_POST['v1']-$_POST['v2'];
                echo $_POST["v1"]. "-". $_POST["v2"]. "=" .$R;
            break;
        case '3':
                $R=$_POST['v1']*$_POST['v2'];
                echo $_POST['v1']. "x". $_POST['v2']. "=" .$R;
            break;
        case '4':
                $R=$_POST['v1']/$_POST['v2'];
                echo $_POST['v1']. "/". $_POST['v2']. "=" .$R;
            break;
        }
     
?>
</body>



</html>