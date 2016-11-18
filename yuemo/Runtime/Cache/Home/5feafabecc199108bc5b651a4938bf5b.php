<?php if (!defined('THINK_PATH')) exit();?><center>
    <form action="/linux/yuemo/index.php/Home/Index/up" method="post">
        <table>
            <tr>
                <td>商品添加</td>
                <td><input type="text" name="g_name"></td>
            </tr>
            <tr>
                <td>商品状态</td>
                <!--<td><input type="radio" name="g_statue" value="上架">上架
                    <input type="radio" name="g_statue" value="下架">下架
                </td>-->
                <td><input type="radio" name="g_statue" value="0">上架
                    <input type="radio" name="g_statue" value="1">下架
                </td>
            </tr>
            <tr>
                <td>商品描述</td>
                <td><textarea name="g_self">
                </textarea></td>
            </tr>
            <tr>
                <td>商品所属地</td>
                <td><select name="g_source">
                    <option value="上海">上海</option>
                    <option value="北京">北京</option>
                    <option value="杭州">杭州</option>
                    <option value="重庆">重庆</option>
                    <option value="拉萨">拉萨</option>
                </select></td>
            </tr>
            <tr>
                <td>f价格</td>
                <td><select name="g_price">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="添加"></td>
                <td></td>
            </tr>
        </table>
    </form>
</center>