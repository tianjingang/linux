<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf-8"/>
<center>
    <div id="div1">
    <input type="search" name="search1" value="<?php echo ($search1); ?>"/>
    <input type="search" name="search2" value="<?php echo ($search2); ?>"/>
        <button onclick="page(1)">搜索</button>
    <table border="1">
        <tr>
            <td><input type="checkbox" name="run" onclick="lian()"/></td>
            <td>ID</td>
            <td>名称</td>
            <td>类型</td>
            <td>封面</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td><input type="checkbox" name="box" value="<?php echo ($val["id"]); ?>"/><?php echo ($val["id"]); ?></td>
            <td><?php echo ($val["id"]); ?></td>
            <td><?php echo ($val["f_name"]); ?></td>
            <td><?php echo ($val["t_type"]); ?></td>
            <td><img src="/linux/3-31<?php echo ($val["f_face"]); ?>" alt="" width="80" height="80"/></td>
            <td><a href="/linux/3-31/index.php/Home/Index/delete/id/<?php echo ($val["id"]); ?>">删除</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
        当前页:<?php echo ($page); ?> 共<?php echo ($count); ?>数据 共<?php echo ($pages); ?>页
        <a href="javascript:page(1)">首页</a>
        <a href="javascript:page(<?php echo ($last); ?>)">上一页</a>
        <a href="javascript:page(<?php echo ($next); ?>)">下一页</a>
        <a href="javascript:page(<?php echo ($pages); ?>)">尾页</a>
        <!--<?php echo ($page); ?>-->
    <button onclick="pi()">批删</button>
    </div>
</center>
<script>
    function page(page){
        var search1=document.getElementsByName('search1')[0].value
        var search2=document.getElementsByName('search2')[0].value
        var ajax = new XMLHttpRequest();
        ajax.open('get',"/linux/3-31/index.php/Home/Index/show?page="+page+'&search1='+search1+'&search2='+search2);
        ajax.send();
        ajax.onreadystatechange =function(){
            if(ajax.readyState == 4 && ajax.status == 200){
                document.getElementById('div1').innerHTML= ajax.responseText;
            }
        }
    }

   //联动
    function lian(){
        var run=document.getElementsByName('run')[0];
        var box=document.getElementsByName('box');
        for(var i=0;i<box.length;i++){
            if(run.checked==true){
                box[i].checked=true;

            }
            else{
                box[i].checked=false;
            }
        }
    }
    //批删
    function pi(){
        var box=document.getElementsByName('box');
        var str='';
        for(var i=0;i<box.length;i++){
            if(box[i].checked==true){
                str=str+','+box[i].value;
            }
        }
        str1=str.substr(1);
        location.href="/linux/3-31/index.php/Home/Index/del_more/id/"+str1;
    }
    /*//搜索
    function search(){
        var search1=document.getElementsByName('search1')[0].value;
        var search2=document.getElementsByName('search2')[0].value;
        var ajax=new XMLHttpRequest;
        ajax.open('get',"/linux/3-31/index.php/Home/Index/show/search1/"+search1+'/search2/'+search2);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                document.getElementById('div1').innerHTML=ajax.responseText;
            }
        }
    }*/
</script>