<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="/linux/3-31/index.php/Home/Index/add/" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>名字</td>
            <td><input type="text" name="f_name"/></td>
        </tr>
        <tr>
            <td>类型</td>
            <td>
                <select name="t_id">
                    <?php if(is_array($ar)): $i = 0; $__LIST__ = $ar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["t_id"]); ?>"><?php echo ($val["t_type"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>

            </td>
        </tr>
        <tr>
            <td>封面</td>
            <td><input type="file" name="f_face"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="上传"/></td>
            <td></td>
        </tr>
    </table>
</form>
</center>