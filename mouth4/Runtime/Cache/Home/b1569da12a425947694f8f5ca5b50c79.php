<?php if (!defined('THINK_PATH')) exit();?><center>
    <form action="<?php echo U('Login/login_check');?>" method="post">
        <table border="1">
            <tr>
                <td>管理员名</td>
                <td><input type="text" name="username"/></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="pwd"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="登录"/></td>
                <td></td>
            </tr>
        </table>
    </form>
</center>