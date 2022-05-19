<?php
var_dump($_POST);
?>
<form action="" method=post>
    <table>
        <tr>
            <td>AdminName</td>
            <td><input type="text" name=inputUsername></td>
        </tr>
        <td>Password</td>
        <td><input type="password" name=inputPassword></td>
        </tr>
        <tr>
            <td colspan=2>
                <input type="submit" name='login' value="Login">
                <input type="Reset" value=Reset>
            </td>
        </tr>
    </table>
</form>