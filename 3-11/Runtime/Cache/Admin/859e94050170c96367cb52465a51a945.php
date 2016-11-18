<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="/linux/3-11/index.php/Admin/Index/add/" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>课程名称</td>
            <td><input type="text" name="co_name"/></td>
        </tr>
        <tr>
            <td>图片</td>
            <td><input type="file" name="co_img"/></td>
        </tr>
        <tr>
            <td>课程参加人数</td>
            <td><input type="text" name="co_man"/></td>
        </tr>
        <tr>
            <td>课程简介</td>
            <td><textarea name="co_brief" rows="5" cols="30"></textarea></td>
        </tr>
        <tr>
            <td>是否更新完毕</td>
            <td><input type="radio" name="is_complate" value="是"/>是
                <input type="radio" name="is_complate" value="否"/>否
            </td>
        </tr>
        <tr>
            <td>是否学习</td>
            <td><input type="radio" name="is_study" value="是"/>是
                <input type="radio" name="is_study" value="否"/>否
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="提交"/></td>
            <td></td>
        </tr>
    </table>
</form>
    </center>