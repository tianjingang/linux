<?php if (!defined('THINK_PATH')) exit();?><center>
    <div id="div1">
        <input type="search" name="search1" value="<?php echo ($search1); ?>" placeholder="请输入姓名关键字"/>
        <input type="search" name="search2" value="<?php echo ($search2); ?>" placeholder="请输入性别关键字"/>
        <button onclick="search()">搜索</button>
        <!--<input type="search" name="search1" value="<?php echo ($search1); ?>" placeholder="请输入姓名关键字"/>
        <input type="search" name="search2" value="<?php echo ($search2); ?>" placeholder="请输入性别关键字"/>
        <button onclick="search()">搜索</button>-->
        <table border="1">
        <tr>
            <td><input type="checkbox" name="run" onclick="lian()"/></td>
            <td>序号</td>
            <td>姓名</td>
            <td>年龄</td>
            <td>性别</td>
            <td>爱好</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><tr>
            <td><input type="checkbox" name="box" value="<?php echo ($nav["id"]); ?>"/><?php echo ($nav["id"]); ?></td>
            <td><?php echo ($nav["id"]); ?></td>
            <td><?php echo ($nav["username"]); ?></td>
            <td><?php echo ($nav["age"]); ?></td>
            <td><?php echo ($nav["sex"]); ?></td>
            <td><?php echo ($nav["hobby"]); ?></td>
            <td><a href="/linux/3-30/index.php/Home/Index/delete/id/<?php echo ($nav["id"]); ?>">删除</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
        <button onclick="pi()">批量删除</button>
    <?php echo ($page); ?>
        </div>
</center>
<script>
    //多条件搜索
    function search(){
        //接值
        var search1=document.getElementsByName('search1')[0].value;
        var search2=document.getElementsByName('search2')[0].value;
        var ajax=new XMLHttpRequest();
        ajax.open('get',"/linux/3-30/index.php/Home/Index/index/search1/"+search1+'/search2/'+search2);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                document.getElementById('div1').innerHTML=ajax.responseText;
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
        var str = "";
        for(var i=0;i<box.length;i++){
            if(box[i].checked==true){
                str+=','+box[i].value;
            }
        }
        str1=str.substr(1);
        location.href="/linux/3-30/index.php/Home/Index/del_all/id/"+str1;
    }


</script>