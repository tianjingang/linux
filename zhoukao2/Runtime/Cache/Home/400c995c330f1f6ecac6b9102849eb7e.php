<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="/linux/zhoukao2/index.php/Home/Index/add/" method="post">
    <table border="1">
        <tr>
            <td>发布时间</td>
            <td><input type="text" name="n_time"/></td>
        </tr>
        <tr>
            <td>房源简介</td>
            <td><textarea name="n_self" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>房源类型</td>
            <td><input type="text" name="n_type"/></td>
        </tr>
        <tr>
            <td>发布天数</td>
            <td><input type="text" name="n_day"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="提交"/></td>
            <td></td>
        </tr>
    </table>
</form>
</center>