<?php if (!defined('THINK_PATH')) exit();?>
<div id="div1">
    <form>
   <input type="search" name="search" value="<?php echo ($search); ?>"/>
    <select name="search1">
        <option value="">请选择</option>
        <option value="已下架">已下架</option>
        <option value="上架中">上架中</option>
    </select>
    <button onclick="search()">搜索</button>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>商品名称</td>
            <td>货号</td>
            <td>价格</td>
            <td>单位</td>
            <td>库存</td>
            <td>状态</td>
        </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td><input type="checkbox" name="box" /><?php echo ($val["id"]); ?></td>
            <td><?php echo ($val["g_name"]); ?></td>
            <td><?php echo ($val["g_num"]); ?></td>
            <td><?php echo ($val["g_price"]); ?></td>
            <td><?php echo ($val["g_sum"]); ?></td>
            <td><?php echo ($val["g_count"]); ?></td>
            <td><?php echo ($val["g_statue"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
        <button onclick="quan()">全选</button>
</form>
<?php echo ($show); ?>
    </div>
<script>
    //搜索
   function search(){
        var search=document.getElementsByName('search')[0].value;
        var search1=document.getElementsByName('search1')[0].value;
        var ajax=new XMLHttpRequest();
        ajax.open('get',"/linux/3-10/index.php/Home/Indexshow/search"+search+'/search1/'+search1);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                document.getElementById('div1').innerHTML=ajax.responseText;
            }
        }

    }
    //全选
    function quan(){
        var box=document.getElementsByName('box');
        for(var i=0;i<box.length;i++){
            box[i]=checked;

        }
    }
</script>