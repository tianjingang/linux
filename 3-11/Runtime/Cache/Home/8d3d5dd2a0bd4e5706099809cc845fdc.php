<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="/linux/3-11/index.php/Home/Index/shows/" method="post" enctype="multipart/form-data">
    <table>
        <tr>
        <?php if(is_array($list)): $key = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($key % 2 );++$key;?><td width="250" height="200">
					<img src="/linux/3-11<?php echo ($val["co_img"]); ?>" alt="" width="200" height="150"> <br>
					<?php echo ($val["co_id"]); ?>. <a href="/linux/3-11/index.php/Home/Index/show/co_name/<?php echo ($val["co_name"]); ?>"><?php echo ($val["co_name"]); ?></a> <br>
					<?php echo ($val["co_brief"]); ?> <br>
					<?php echo ($val["is_complete"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["co_man"]); ?>人学习 <br>
					<a href="/linux/3-11/index.php/Home/Index/del/id/<?php echo ($val["co_id"]); ?>">删除</a> <a href="/linux/3-11/index.php/Home/Index/update_one/id/<?php echo ($val["co_id"]); ?>">修改</a> <a href="/linux/3-11/index.php/Home/Index/adds/id/<?php echo ($val["co_id"]); ?>">添加章节</a>
				</td>
			<?php if(($key+1)%4 == 1): ?></tr><?php endif; ?>
            <!-- <ul>
                <li><img src="/linux/3-11/<?php echo ($val["co_img"]); ?>" alt="" width="60" height="50" style=""/></li>
                <li><?php echo ($val["co_name"]); ?></li>
                <li><?php echo ($val["co_brief"]); ?></li>
                <li><?php echo ($val["is_complate"]); ?></li>
                <li><?php echo ($val["is_study"]); ?></li>
            </ul>--><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</form>
<?php echo ($page); ?>
    </center>