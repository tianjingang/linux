<?php if (!defined('THINK_PATH')) exit();?><center>
    <table border="1">
            <tr>
                <td>id号</td>
                <td>商品名称</td>
                <td>商品描述</td>
                <td>商品所属地</td>
                <td>商品价格</td>
                <td>商品添加人</td>
                <td>商品状态</td>
                <td>操作</td>
            </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($val["u_id"]); ?></td>
                <td><?php echo ($val["g_name"]); ?></td>
                <td><?php echo ($val["g_self"]); ?></td>
                <td><?php echo ($val["g_source"]); ?></td>
                <td><?php echo ($val["g_price"]); ?></td>
                <td><?php echo ($val["g_username"]); ?></td>
                <td>
                    <?php if($val["g_statue"] == 0 ): ?>上架
                        <?php else: ?>下架<?php endif; ?>
                </td>
                <td>
                    <?php if($val["g_statue"] == 0): ?><a href="/linux/yuemo/index.php/Home/Index/update/id/<?php echo ($val["u_id"]); ?>">下架</a>
                        <?php else: ?>
                        <a href="/linux/yuemo/index.php/Home/Index/update1/id/<?php echo ($val["u_id"]); ?>">上架</a><?php endif; ?>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </form>
</center>