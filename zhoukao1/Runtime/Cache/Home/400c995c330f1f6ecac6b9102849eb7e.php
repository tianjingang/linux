<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="/linux/zhoukao1/index.php/Home/Index/add/" method="post">
    <h3>题目管理</h3>
    <table border="1">
        <tr>
            <td>题目名称</td>
            <td><input type="text" name="timu_name"/></td>
        </tr>
        <tr>
            <td>题库名称</td>
            <td>
                <select name="tiku_name">
                    <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["tiku_id"]); ?>"><?php echo ($v["tiku_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>答案</td>
            <td><input type="text" name="timu_answer"/></td>
        </tr>
        <tr>
            <td>添加人</td>
            <td><input type="text" name="timu_man"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="添加"/></td>
            <td></td>
        </tr>
    </table>
</form>
    </center>