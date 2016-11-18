<?php if (!defined('THINK_PATH')) exit();?><center>
    <table border="1">
            <tr>
                <td><input type="checkbox" name="run"/></td>
                <td>排序</td>
                <td>学生姓名</td>
                <td>学生班级</td>
                <td>原因</td>
                <td>申请人</td>
                <td>分数</td>
                <td>类型</td>
                <td>综合积分</td>
                <td>状态</td>
                <td>操作</td>
            </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
                <td><input type="checkbox" name="box"/></td>
                <td><?php echo ($val["u_id"]); ?></td>
                <td><?php echo ($val["m_username"]); ?></td>
                <td><?php echo ($val["m_class"]); ?></td>
                <td><?php echo ($val["m_why"]); ?></td>
                <td><?php echo ($val["m_user"]); ?></td>
                <td><?php echo ($val["m_score"]); ?></td>
                <td><?php echo ($val["m_type"]); ?></td>
                <td><?php echo ($val["m_sum"]); ?></td>
<!--
                <td><?php echo ($val["m_statue"]); ?></td>

-->
                <td>
                    <?php if($val["m_statue"] == 0 ): ?>保存<?php endif; ?>
                    <?php if($val["m_statue"] == 1 ): ?>通过<?php endif; ?>
                    <?php if($val["m_statue"] == 2): ?>拒绝<?php endif; ?>
                </td>
                <td>
                    <?php if($val["m_statue"] == 0): ?><a href="/linux/mouth4/index.php/Home/Index/update/id/<?php echo ($val["u_id"]); ?>">通过</a>
                        <a href="/linux/mouth4/index.php/Home/Index/update1/id/<?php echo ($val["u_id"]); ?>">拒绝</a>
                        <?php else: ?>修改成功<?php endif; ?>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </form>
</center>