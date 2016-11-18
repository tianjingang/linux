<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="/linux/zhoukao1/index.php/Home/Index/show/" method="post">
    <table border="1">
        <tr>
            <td>编号</td>
            <td>题目名称</td>
            <td>题库</td>
            <td>题目添加人</td>
            <td>题目添加时间</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($val["timu_id"]); ?></td>
            <td><a href="/linux/zhoukao1/index.php/Home/Index/answer/id/<?php echo ($val["timu_id"]); ?>"><?php echo ($val["timu_name"]); ?></a></td>
            <td><?php echo ($val["tiku_name"]); ?></td>
            <td><?php echo ($val["timu_man"]); ?></td>
            <td><?php echo ($val["timu_time"]); ?></td>
            <td><a href="/linux/zhoukao1/index.php/Home/Index/delete/timu_id/<?php echo ($val["timu_id"]); ?>">删除</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</form>
</center>