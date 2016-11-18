<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="/linux/3-11/index.php/Admin/Index/shows/" method="post" enctype="multipart/form-data">
    <table>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><!-- <tr>
            <td><img src="/linux/3-11/<?php echo ($val["co_img"]); ?>" alt="" width="60" height="50"/></td>
            <td><?php echo ($val["co_name"]); ?></td>
            <td><?php echo ($val["co_brief"]); ?></td>
            <td><?php echo ($val["is_complate"]); ?></td>
            <td><?php echo ($val["is_study"]); ?></td>
        </tr>-->
            <ul>
                <li><img src="/linux/3-11/<?php echo ($val["co_img"]); ?>" alt="" width="60" height="50"/></li>
                <li><?php echo ($val["co_name"]); ?></li>
                <li><?php echo ($val["co_brief"]); ?></li>
                <li><?php echo ($val["is_complate"]); ?></li>
                <li><?php echo ($val["is_study"]); ?></li>
            </ul><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</form>
<?php echo ($page); ?>
    </center>