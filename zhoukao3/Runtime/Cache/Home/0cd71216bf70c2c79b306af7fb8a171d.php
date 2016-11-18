<?php if (!defined('THINK_PATH')) exit();?>
<center>
    <div id="div1">
        <!-- <input type="search" name="search1" value="<?php echo ($search1); ?>"/>
        <input type="search" name="search2" value="<?php echo ($search2); ?>"/>
        <button onclick="search()">搜索</button>-->
        <input type="search" name="search1" value="<?php echo ($search1); ?>" placeholder="请输入文章标题关键字"/>
             <input type="search" name="search2" value="<?php echo ($search2); ?>" placeholder="请输入文章来源关键字"/>
             <button onclick="search()">搜索</button>
         <table border="1">
         <tr>
             <td>文章ID</td>
             <td>文章标题</td>
             <td>文章来源</td>
             <td>时间</td>
             <td>操作</td>
         </tr>
     <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
             <td><?php echo ($val["id"]); ?></td>
             <td><?php echo ($val["title"]); ?></td>
             <td><?php echo ($val["source"]); ?></td>
             <td><?php echo ($val["time"]); ?></td>
             <td>
                 <a href="/linux/zhoukao3/index.php/Home/Index/del/id/<?php echo ($val["id"]); ?>">删除</a>
                 <a href="#">编辑</a>
                 </a>
             </td>
         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
     </table>
     <?php echo ($show); ?>
         </div>
 </center>
 <script>
    /* function search(){
     var searech1=document.getElementsByName('search1')[0].value;
     var searech2=document.getElementsByName('search2')[0].value;
     var ajax=new XMLHttpRequest();
     ajax.open('get',"/linux/zhoukao3/index.php/Home/Index/show/search1/"+search1+'/search2/'+search2);
     ajax.send();
     ajax.onreadystatechange=function(){
     if(ajax.readyState==4&&ajax.status==200){
     document.getElementById('div1').innerHTML=ajax.responseText;
     }
     }
     }*/

     function search(){
         var search1 = document.getElementsByName('search1')[0].value;
         var search2 = document.getElementsByName('search2')[0].value;
         var ajax = new XMLHttpRequest();
         ajax.open('get',"/linux/zhoukao3/index.php/Home/Index/show/search1/"+search1+'/search2/'+search2);
         ajax.send();
         ajax.onreadystatechange = function () {
             if(ajax.readyState == 4&& ajax.status == 200){
                 document.getElementById('div1').innerHTML = ajax.responseText;
             }
         }
     }
 </script>