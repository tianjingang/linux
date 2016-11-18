<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="/linux/3-11/index.php/Home/Login/check_login" method="post">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="pwd"/></td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input type="checkbox" name="day7" />七天免登录</td>
        </tr>
        <tr>
            <td><input type="submit" value="登录"/></td>
            <td></td>
        </tr>
    </table>
</form>
    </center>