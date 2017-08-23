<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>老脑课堂</title>
<link href="css/fgo.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/fgo.js"></script>
<!-- 手机端 -->
<link rel="stylesheet" href="css/m.fgo.css" media="(max-width:768px)" />
<!-- 平板端 -->

</head>

<body>
  <div class="mask">
    <div class="mask_login">
      <div class="mask_title"><span class="mtitle">登录</span><span class="msign">×</span></div>
      <form class="login_form" action="fgo_login.php" method="post">
        账号：<input type="text" id="text" placeholder="请输入你的账号" name="text" /><br/>
        密码：<input type="password" id="password" placeholder="请输入你的密码" name="password" /><br/>
        <button type="submit" id="submit">登 录</button>
      </form>
    </div>
  </div>
 
  <!--遮罩层登录界面--> 
  
  <div class="mask">
    <div class="mask_reg">
      <div class="mask_title"><span class="mtitle">注册</span><span class="msign">×</span></div>
      <form class="login_form" action="fgo_reg.php" method="post">
        账号：<input type="text" id="texts" placeholder="请输入你的账号" name="text" /><br/>
        <div id="notice1"></div>
        密码：<input type="password" id="passwords" placeholder="请输入你的密码" name="pass" /><br/>
        确认密码：<input type="password" id="repass" placeholder="请重复你的密码" name="repass" /><br/>
        <div id="notice2"></div>
        <button type="submit" id="submits">注 册</button>
      </form>
    </div>
  </div>
  
  <!--遮罩层注册界面-->
  
  <div class="header">
    <div class="logo"><img src="img/brain.jpg" width="180" height="100"/></div>
    <div class="login">
      <p class="cookies">
	      <?php if($_COOKIE['name'] != ''){
		         echo $_COOKIE['name'];
				 }
		  ?>
      </p>
    
      <ul>
        <li><a href="javascript:;">登录</a></li>
        <li><a href="javascript:;">注销</a></li>
        <li><a href="javascript:;">注册</a></li>
      </ul>
      </div><!--login 后台部分-->
  </div><!--header--><!--左logo、右登录信息-->
  
  <!--头部-->
  
  <div class="content">
    <div class="menu">
      <div class="item"><a href="#">前端开发</a>
        <div class="item_con">
          <div class="con_top">
            <div><h4>分类目录</h4></div>
            <div>
              <span class="con_nav">基础：</span>
              <a href="#1">HTML</a><span>/</span>
              <a href="#2">CSS</a><span>/</span>
              <a href="#3">Javascript</a><span>/</span>
              <a href="#4">jQuery</a>
            </div>
            <div>
              <span class="con_nav">进阶：</span>
              <a href="#1">HTML5</a><span>/</span>
              <a href="#2">CSS3</a><span>/</span>
              <a href="#3">Bootstrap</a><span>/</span>
              <a href="#4">Foundation</a><span>/</span>
              <a href="#5">Node.js</a><span>/</span>
              <a href="#6">AngularJS</a><span>/</span>
              <a href="#7">Sass/Less</a><span>/</span>
              <a href="#8">Vue.js</a>
            </div>
            <div>
              <span class="con_nav">其他：</span>
              <a href="#1">开发框架</a><span>/</span>
              <a href="#2">前端工具</a>
            </div>
          </div><!--con_top-->
          <div class="con_bottom">
            <div><h4>课程推荐</h4></div>
            <div>
              <p><a href="#1" style="color:#f00;"><span class="con_bottom_nav">样式</span>CSS深入理解position</a></p>
              <p><a href="#2"><span class="con_bottom_nav">特效</span>时光轴特效</a></p>
              <p><a href="#3"><span class="con_bottom_nav">综合</span>企业网站综合布局实战</a></p>
              <p><a href="#4"><span class="con_bottom_nav">特效</span>焦点轮播图特效</a></p>
              <p><a href="#5"><span class="con_bottom_nav">框架</span>基于Bootstrap的网页开发</a></p>
            </div>
          </div><!--con_bottom-->
        </div><!--item_con-->
      </div><!--item-->  
      
      <div class="item"><a href="#">后端开发</a>
        <div class="item_con">
          <div class="con_top">
            <div><h4>分类目录</h4></div>
            <div>
              <a href="#1">PHP</a><span>/</span>
              <a href="#2">Java</a><span>/</span>
              <a href="#3">Python</a><span>/</span>
              <a href="#4">C</a><span>/</span>
              <a href="#5">C++</a><span>/</span>
              <a href="#6">C#</a><span>/</span>
              <a href="#7">Go</a><span>/</span>
              <a href="#8">Ruby</a>
            </div>
          </div><!--con_top-->
          <div class="con_bottom">
            <div><h4>课程推荐</h4></div>
            <div>
              <p><a href="#1" style="color:#f00;"><span class="con_bottom_nav">分页</span>PHP与Ajax实现分页技术</a></p>
              <p><a href="#2"><span class="con_bottom_nav">二维码</span>Java生成二维码</a></p>
              <p><a href="#3"><span class="con_bottom_nav">指针</span>C语言指针与内存</a></p>
              <p><a href="#4"><span class="con_bottom_nav">进阶</span>PHP进阶篇</a></p>
            </div>
          </div><!--con_bottom-->
        </div><!--item_con-->
      </div>
      
      <div class="item"><a href="#">数据库</a>
        <div class="item_con">
          <div class="con_top">
            <div><h4>分类目录</h4></div>
            <div>
              <a href="#1">MySQL</a><span>/</span>
              <a href="#2">MongoDB</a><span>/</span>
              <a href="#3">Oracle</a><span>/</span>
              <a href="#4">SQL Server</a>
            </div>
          </div><!--con_top-->
          <div class="con_bottom">
            <div><h4>课程推荐</h4></div>
            <div>
              <p><a href="#1"><span class="con_bottom_nav">基础</span>MySQL增删改查</a></p>
              <p><a href="#2"><span class="con_bottom_nav">原理</span>数据库系统原理</a></p>
              <p><a href="#3"><span class="con_bottom_nav">高级</span>Oracle高级查询</a></p>
            </div>
          </div><!--con_bottom-->
        </div><!--item_con-->
      </div>
      
      <div class="item"><a href="#">云计算·大数据</a>
        <div class="item_con">
          <div class="con_top">
            <div><h4>分类目录</h4></div>
            <div>
              <a href="#1">云计算</a><span>/</span>
              <a href="#2">大数据</a>
            </div>
          </div><!--con_top-->
          <div class="con_bottom">
            <div><h4>课程推荐</h4></div>
            <div>
              <p><a href="#1"><span class="con_bottom_nav">实战</span>扛得住的MySQL数据库架构</a></p>
              <p><a href="#2"><span class="con_bottom_nav">基础</span>走近大数据</a></p>
              <p><a href="#3"><span class="con_bottom_nav">高级</span>云安全的架构设计与实践</a></p>
            </div>
          </div><!--con_bottom-->
        </div><!--item_con-->
      </div>
      
      <div class="item"><a href="#">运维·测试</a>
        <div class="item_con">
          <div class="con_top">
            <div><h4>分类目录</h4></div>
            <div>
              <a href="#">测试</a><span>/</span>
              <a href="#">Linux</a>
            </div>
          </div><!--con_top-->
          <div class="con_bottom">
            <div><h4>课程推荐</h4></div>
            <div>
              <p><a href="#1"><span class="con_bottom_nav">实战</span>Android自动化测试实战 工具 框架 脚本</a></p>
              <p><a href="#2"><span class="con_bottom_nav">课程</span>Android专项测试-Python篇 10年测试经验讲师</a></p>
              <p><a href="#3"><span class="con_bottom_nav">课程</span>PHP环境LAMP/LNMP安装与配置</a></p>
              <p><a href="#4"><span class="con_bottom_nav">课程</span>Linux智能DNS服务搭建之Bind服务</a></p>
              <p><a href="#5"><span class="con_bottom_nav">课程</span>shell编程之正则表达式</a></p>
            </div>
          </div><!--con_bottom-->
        </div><!--item_con-->
      </div>
      
      <div class="item"><a href="#">移动开发</a>
        <div class="item_con">
          <div class="con_top">
            <div><h4>分类目录</h4></div>
            <div>
              <a href="#1">Android</a><span>/</span>
              <a href="#2">iOS</a><span>/</span>
              <a href="#3">Unity 3D</a><span>/</span>
              <a href="#4">手游开发</a>
            </div>
          </div><!--con_top-->
          <div class="con_bottom">
            <div><h4>课程推荐</h4></div>
            <div>
              <p><a href="#1"><span class="con_bottom_nav">基础</span>Android基础-初识SQLite</a></p>
              <p><a href="#2"><span class="con_bottom_nav">课程</span>Android-Volley详解</a></p>
              <p><a href="#3"><span class="con_bottom_nav">课程</span>iOS基础语法与常用控件系列课程</a></p>
              <p><a href="#4"><span class="con_bottom_nav">课程</span>Android-Volley详解</a></p>
              <p><a href="#5"><span class="con_bottom_nav">课程</span>React Native开发跨平台GitHub App</a></p>
            </div>
          </div><!--con_bottom-->
        </div><!--item_con-->
      </div>
      
      <div class="item"><a href="#">设计</a>
        <div class="item_con">
          <div class="con_top">
            <div><h4>分类目录</h4></div>
            <div>
              <a href="#1">Photoshop</a><span>/</span>
              <a href="#2">CorelDRAW</a><span>/</span>
              <a href="#3">3DMAX</a><span>/</span>
              <a href="#4">AutoCAD</a><span>/</span>
              <a href="#5">After Effects</a><span>/</span>
              <a href="#6">Illustrator</a>
            </div>
          </div><!--con_top-->
          <div class="con_bottom">
            <div><h4>课程推荐</h4></div>
            <div>
              <p><a href="#1"><span class="con_bottom_nav">基础</span>PS从入门到精通</a></p>
              <p><a href="#2"><span class="con_bottom_nav">表情</span>表情包制作</a></p>
              <p><a href="#3"><span class="con_bottom_nav">课程</span>平面设计</a></p>
              <p><a href="#4"><span class="con_bottom_nav">课程</span>室内设计</a></p>
            </div>
          </div><!--con_bottom-->
        </div><!--item_con-->
      </div>
    </div><!--menu-->
 <!--1左部分-->   
 
 
    <div class="con_im">
      <a href="#1" >
        <div class="con_img"><img src="img/1.jpg" /></div>
      </a>
      <a href="#2">
        <div class="con_img"><img src="img/2.jpg" /></div>
      </a>
      <a href="#3">
        <div class="con_img"><img src="img/3.jpg" /></div>
      </a>
      <a href="#4">
        <div class="con_img"><img src="img/4.jpg" /></div>
      </a>
      <a href="#5">
        <div class="con_img"><img src="img/5.jpg" /></div>
      </a>
    </div>
    <div class="arrow arrow_left"><a href="javascript:;" class="arrow_prev"></a></div>
    <div class="arrow arrow_right"><a href="javascript:;" class="arrow_next"></a></div>
    <div class="dot">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div><!--content--><!--课程目录-->
  
 <!--1部分--> 
<div class="over"> 
 
 <div class="content_after">
   <a href="#1"><div class="after_1"><img src="img/web1.png" /></div><div class="after_2"><p>进入前端开发学习</p></div></a>
   <a href="#2"><div class="after_1"><img src="img/php1.png" /></div><div class="after_2"><p>进入PHP开发学习</p></div></a>
   <a href="#3"><div class="after_1"><img src="img/android1.png" /></div><div class="after_2"><p>进入安卓开发学习</p></div></a>
   <a href="#4"><div class="after_1"><img src="img/java1.png" /></div><div class="after_2"><p>进入Java开发学习</p></div></a>
   <a href="#5"><div class="after_1"><img src="img/ios1.png" /></div><div class="after_2"><p>进入ios开发学习</p></div></a>
   </ul>
 </div>
 
 <!---1后缀部分-->

 <div class="main">
   <div class="h3p">编程开发</div>
   <div class="img_1">
     <img src="img/main1.png" />
   </div>
   
   <div class="outimg">
     <div class="img_2">
       <img src="img/main2.jpg" />
     </div>
     <div class="img_p">数据图表高效制作<p class="img_pl">PPT研究院</p></div>
   </div><!--outimg-->
   
   <div class="outimg">
     <div class="img_2">
       <img src="img/main3.jpg" />
     </div>
     <div class="img_p">用Java学编程<p class="img_pl">鑫恺</p></div>
   </div><!--outimg-->
   
   <div class="outimg">
     <div class="img_2">
       <img src="img/main4.jpg" />
     </div>
     <div class="img_p">用Python做些事<p class="img_pl">黑板客</p></div>
   </div><!--outimg-->
   
   <div class="outimg">
     <div class="img_2">
       <img src="img/main5.jpg" />
     </div>
     <div class="img_p">微信小程序开发<p class="img_pl">小蚊子数据分析</p></div>
   </div><!--outimg-->
   
   <div class="outimg">
     <div class="img_2">
       <img src="img/main6.jpg" />
     </div>
     <div class="img_p">数据分析师简历<p class="img_pl">小蚊子数据分析</p></div>
   </div><!--outimg-->
   
   <div class="outimg">
     <div class="img_2">
       <img src="img/main7.png" />
     </div>
     <div class="img_p">零基础C++入门<p class="img_pl">老九学堂</p></div>
   </div><!--outimg-->
   
   <div class="outimg">
     <div class="img_2">
       <img src="img/main8.jpg" />
     </div>
     <div class="img_p">面向对象程序设计C++<p class="img_pl">鑫恺</p></div>
   </div><!--outimg-->
   
   <div class="outimg">
     <div class="img_2">
       <img src="img/main9.jpg" />
     </div>
     <div class="img_p">Meta分析简明教程<p class="img_pl">SCI刀笔吏</p></div>
   </div><!--outimg-->
     
 </div><!--main-->
 <!--2部分-->
 
 <div class="main_2">
   <div class="main_2_left">
     <div class="main_2_p">
       <h2>UI设计</h2>
       <p>打造会代码的全能设计师</p>
     </div>
     <img src="img/ui1.png" />
   </div><!--main_2_left-->
   
   <div class="main_2_right">
     <a class="right_con" href="#2"><img src="img/icon1.png" /><p>课程介绍</p></a>
     <a class="right_con" href="#2"><img src="img/icon2.png" /><p>课程大纲</p></a>
     <a class="right_con" href="#2"><img src="img/icon3.png" /><p>开班时间</p></a>
     <a class="right_con" href="#2"><img src="img/icon4.png" /><p>师资库</p></a>
     <a class="right_con" href="#2"><img src="img/icon5.png" /><p>就业薪资</p></a>
     <a class="right_con" href="#2"><img src="img/icon6.png" /><p>班级活动</p></a>
     <a class="right_con" href="#2"><img src="img/icon7.png" /><p>公开课</p></a>
     <a class="right_con" href="purchase.html"><img src="img/icon8.png" /><p>视频购买</p></a>
   </div><!--main_2_right-->
 </div><!--main_2-->
 <!--3部分-->
 
 <div class="acc">
   <ul>
     <li class="acc1">
       <a href="javascript:;">
         <div class="acc_txt">
           <p class="txt_title">Linux服务器运维</p>
           <p class="txt_content">Linux系统日常运维管理、基本使用和系统管理知识。全面讲解基本Linux 操作系统及各种软件服务的运维工作。</p>
         </div>
       </a>  
     </li>
     <li class="acc2">
       <a href="javascript:;">
         <div class="acc_txt">
           <p class="txt_title">APP开发</p>
           <p class="txt_content">智能终端设备应用软件开发,专注于手机应用软件开发与服务.</p>
         </div>
       </a>  
     </li>
     <li class="acc3">
       <a href="javascript:;">
         <div class="acc_txt">
           <p class="txt_title">PHP软件开发</p>
           <p class="txt_content">PHP是一种通用开源脚本语言。语法吸收了C语言、Java和Perl的特点，利于学习，使用广泛，主要适用于Web开发领域。</p>
         </div>
       </a>
     </li>
     <li class="acc4">
       <a href="javascript:;">
         <div class="acc_txt">
           <p class="txt_title">PHP电商项目</p>
           <p class="txt_content">电商网站集Web前端与后台开发于一体，开发一个电商网站既要兼顾Web页面的布局与美化，又要处理各种复杂工作。</p>
         </div>
       </a>
     </li>
     <li class="acc5">
       <a href="javascript:;">
         <div class="acc_txt">
           <p class="txt_title">HTML5网页标签</p>
           <p class="txt_content">HTML5的设计目的是为了在移动设备上支持多媒体。如video、audio和canvas 标记。</p>
         </div>
       </a>
     </li>
   </ul>
 </div>
 
 
 <!--手风琴部分-->
 
</div><!--over-->

<div class="footer">
  <div class="two_code">
    <div class="two_codes">
      <a href="#3" class="sina"></a>
      <a href="#3" class="weixin"></a>
      <a href="#3" class="tencent"></a>
      <a href="#3" class="QQ"></a>
    </div><!--two_codes-->
    <div class="footer_ul">
      <ul>
        <li><a href="#4">企业合作</a></li>
        <li><a href="#4">人才招聘</a></li>
        <li><a href="#4">联系我们</a></li>
        <li><a href="#4">讲师招募</a></li>
        <li><a href="#4">常见问题</a></li>
        <li><a href="#4">意见反馈</a></li>
        <li><a href="#4">友情链接</a></li>
        <li><a href="#4">关于我们</a></li>
        <li><a href="#4">学习资源</a></li>
      </ul>
    </div><!--footer_ul-->
   
  </div><!--two_code-->
  
  <div class="footer_hr"></div><!--footer_hr-->
  <div class="footer_ps">©&nbsp;&nbsp;2017&nbsp;&nbsp;www.laonao.course.com</div><!--footer_ps-->
</div><!--footer-->
<!--页脚部分-->

<div class="anchor">
  <ul>
    <li>快速入门</li>
    <li>编程开发</li>
    <li>UI设计</li>
    <li>高级视频</li>
  </ul>
  <div class="anchors"></div>
</div>

<!--锚点效果-->
</body>
</html>