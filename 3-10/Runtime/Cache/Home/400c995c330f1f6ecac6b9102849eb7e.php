<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="/linux/3-10/index.php/Home/Index/add/" method="post">
    <table border="1">
        <tr>
            <td>商品名称</td>
            <td><input type="text" name="g_name"/></td>
        </tr>
        <tr>
            <td>货号</td>
            <td><input type="text" name="g_num"/></td>
        </tr>
        <tr>
            <td>价格</td>
            <td><input type="text" name="g_price"/></td>
        </tr>
        <tr>
            <td>单位</td>
            <td><input type="text" name="g_sum"/></td>
        </tr>
        <tr>
            <td>库存</td>
            <td><input type="text" name="g_count"/></td>
        </tr>
        <tr>
            <td>状态</td>
            <td>
                <select name="g_statue">
                    <option value="">请选择</option>
                    <option value="上架中">上架中</option>
                    <option value="已下架">已下架</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="提交"/></td>
            <td></td>
        </tr>
    </table>
</form>
    </center>