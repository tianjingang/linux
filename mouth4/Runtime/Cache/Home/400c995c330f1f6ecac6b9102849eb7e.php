<?php if (!defined('THINK_PATH')) exit();?><center>
    <form action="/linux/mouth4/index.php/Home/Index/up" method="post">
       <h1>积分修改</h1>
        <table>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="m_username"/></td>
            </tr>
            <tr>
                <td>类型</td>
                <td>
                    <input type="radio" name="m_type" value="加分"/>加分
                    <input type="radio" name="m_type" value="减分"/>减分
                </td>
            </tr>
            <tr>
                <td>原因</td>
                <td><input type="text" name="m_why"/></td>
            </tr>
            <tr>
                <td>分数</td>
                <td>
                    <select name="m_score">
                        <option value="0">0</option>
                        <option value="2">2</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>班级</td>
                <td><select name="m_class" >
                    <option value="软工学院">软工学院</option>
                    <option value="建筑学院">建筑学院</option>
                    <option value="云计算学院">云计算学院</option>
                    <option value="网工学院">网工学院</option>
                </select></td>
            </tr>
            <tr>
                <td>状态</td>
                <td>
                    <input type="radio" name="m_statue" value="0"/>保存
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="提交"/></td>
                <td></td>
            </tr>
        </table>
    </form>
</center>