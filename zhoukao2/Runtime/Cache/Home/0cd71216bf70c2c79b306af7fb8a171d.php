<?php if (!defined('THINK_PATH')) exit();?><center>
<form>
    <div id="div1">
    <table border="1">
        <tr>
            <td><input type="checkbox" name="run"/></td>
            <td>操作</td>
            <td>序列</td>
            <td>发布时间</td>
            <td>房源简介</td>
            <td>房源类型</td>
            <td>发布天数</td>
            <td>房源简介</td>
        </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td><input type="checkbox" name="box" value="<?php echo ($val["id"]); ?>"/></td>
           <!-- <td><a href="javascript:void(0)" onclick="del(<?php echo ($page); ?>,<?php echo ($val["id"]); ?>)">删除</a></td>-->
            <td><a href="/linux/zhoukao2/index.php/Home/Index/del/id/<?php echo ($val["id"]); ?>">删除</a></td>
            <td><?php echo ($val["id"]); ?></td>
            <td><?php echo ($val["n_time"]); ?></td>
            <td><?php echo ($val["n_self"]); ?></td>
            <td><?php echo ($val["n_type"]); ?></td>
            <td><?php echo ($val["n_day"]); ?></td>
            <td><?php echo ($val["n_self"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
      <!--  <a href="javascript:void(0)" onclick="dele()">批量删除</a>
        <a href="javascript:void(0)" onclick="page(1)">首页</a>
        <a href="javascript:void(0)" onclick="page(<?php echo ($page); ?>-1)">上一页</a>
        <a href="javascript:void(0)" onclick="page(<?php echo ($page); ?>+1)">下一页</a>
        <a href="javascript:void(0)" onclick="page(<?php echo ($page_sum); ?>)">尾页</a>
-->
    </div>
</form>
    <?php echo ($show); ?>
</center>
<!--
<script>
    function del(){
        var run=document.getElementsByName('run')[0].value;
        var box=document.getElementsByName('box')[0].value;
        var ajax=new XMLHttpRequest();
        ajax.open('get','/linux/zhoukao2/index.php/Home/Index/del/box='+id);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                document.getElementById('box').innerHTML=ajax.responseText;
            }
        }
    }
</script>-->
<!--
<script>
	function page(page)
	{
		var ajax=new XMLHttpRequest();
		ajax.open('get','/linux/zhoukao2/index.php/Home/Index/index/page/'+page);
		ajax.send();
		ajax.onreadystatechange=function()
		{
			if(ajax.readyState==4&&ajax.status==200)
			{
				document.getElementById('div1').innerHTML=ajax.responseText;
			}
		}
	}
	function del(page,id)
	{
		var ajax=new XMLHttpRequest();
		ajax.open('get','/linux/zhoukao2/index.php/Home/Index/index/page/'+page+'/id/'+id);
		ajax.send();
		ajax.onreadystatechange=function()
		{
			if(ajax.readyState==4&&ajax.status==200)
			{
				document.getElementById('div1').innerHTML=ajax.responseText;
			}
		}
	}
	function dele()
	{
		var box=document.getElementById('box');
		var str='';
		for(var i=0;i<box.length;i++)
		{
			if(box[i].checked==true)
			{
				var str=str+box[i].value+',';
			}
		}
		str=str.substr(0,str.length-1);
		var ajax=new XMLHttpRequest();
		ajax.open('get','/linux/zhoukao2/index.php/Home/Index/index/page/'+page+'/id/'+str);
		ajax.send();
		ajax.onreadystatechange=function()
		{
			if(ajax.readyState==4&&ajax.status==200)
			{
				document.getElementById('div1').innerHTML=ajax.responseText;
			}
		}
	}
</script>
-->