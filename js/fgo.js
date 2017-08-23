$(function(){
	
	$(".login li:first a:first").click(function(){
	     $(".mask:first").css({"display":"block"});
		});  //点击登录按钮触发遮罩层
		
	$(".msign:first").click(function(){
		$(".mask:first").css({"display":"none"});
		});	
	
	/*---------------------登录界面----------------------------*/
	
	
	$(".login li:last a:last").click(function(){
		$(".mask:last").css({"display":"block"});
		});  //点击注册按钮触发第二个遮罩层
		
	$(".msign:last").click(function(){
		$(".mask:last").css({"display":"none"});
		});
	
	/*---------------------注册界面----------------------------*/
	
	$(".login li:eq(1) a").click(function(){
		location="logoff.php";
		});
	
	/*---------------------注销界面----------------------------*/
	
    $("#texts").blur(function(){
		var text = $("#texts").val();
	    if(text != ""){	
		  $.post("fgo_reg_user.php",{username:text},function(data){
			  if(data == 1){
				  $("#notice1").html("该用户已被注册。").css("color","red");
			      }else{
					  $("#notice1").html("可以注册。").css("color","#00FFEE");
					  }
		    	});
	    }else{ $("#notice1").html(""); }
		});
	
	/*----------------------Ajax（注册时判断用户名是否存在）------------------------------*/
	
	
	$("#repass").blur(function(){
		var password = $("#passwords").val();
		var repass = $("#repass").val();
		$.post("fgo_reg_pass.php",{password:password,repass:repass},function(data){
			if(data == 0){
				$("#notice2").html("密码不一致").css("color","red");
				}else{
					$("#notice2").html("");
					}
			})
		});
	
	/*----------------------Ajax（判断密码是否一致）-----------------------------------*/
	
	
	
	$(".item").mouseenter(function(){
		$(this).children(".item_con").show();
		});
	$(".item").mouseleave(function(){
		$(this).children(".item_con").hide();
		});	
	/*---------------------------①左-------------------------------*/	
	
	timer = null;   //设置定时器
	i = 0;	  //初始化变量 
	$(".con_im a").eq(0).show().siblings().hide();	  //网页加载后显示第一张图
	$(".dot li").eq(0).css({"background":"rgba(255,255,255,1)","border-color":"#999"});
	
	function imgTime(){
		$(".con_im a").eq(i).fadeIn(500).siblings().fadeOut(500);	
		$(".dot li").eq(i).css({"background":"rgba(255,255,255,1)","border-color":"#999"}).siblings().css({"background":"rgba(0,0,0,.3)","border-color":"#fff"});
		}
	
    function showTime(){
		timer = setInterval(function(){
			i++;
			if(i>4)i=0;
			imgTime();			  		
			},3000);
		}
	showTime();   //启动定时器（焦点轮播）
	
	$(".con_im").hover(function(){    //鼠标移进图清除定时器
		  clearInterval(timer);
		},function(){       //鼠标移出图继续开启定时器
			showTime();
			});
		
	$(".arrow").mouseenter(function(){   //鼠标进左右箭头清除定时器
		  clearInterval(timer);
		});		
		
	$(".dot li").mouseenter(function(){
		  clearInterval(timer); 
		});	
	
	$(".arrow_left").click(function(){  //点击左箭头翻滚图
		i--;
		if(i<0)i=4;
		$(".con_im a").stop(true,true);
		imgTime();
		});
	
	$(".arrow_right").click(function(){  //点击右箭头翻滚图
		i++;
		if(i>4)i=0;
		$(".con_im a").stop(true,true);
		imgTime();
		});
	
	$(".dot li").click(function(){	    //点击圆点翻滚图
		$(".con_im a").stop(true,true);
		i = $(this).index();  //获取index赋给i
		imgTime();
		});
	
	/*----------------------焦点轮播------------------------------*/
	
	$(".content_after a").mouseenter(function(){
		$(this).find(".after_1").stop().animate({"top":"-120px"},400);
		$(this).find(".after_2").stop().animate({"top":"-120px"},400);
	});
	$(".content_after a").mouseleave(function(){
		$(this).find(".after_1").stop().animate({"top":"0px"},400);
		$(this).find(".after_2").stop().animate({"top":"0px"},400);
	});
	
	/*----------------------向上滑动特效--------------------------*/
	
	
	$(".acc li").mouseover(function(){
		$(this).stop(true).animate({width:"380px"},400).siblings().stop(true).animate({width:"205px"},400);
		});
	$(".acc li").hover(function(){
		$(this).find(".txt_content").stop(true).slideToggle();
		},function(){
			$(this).find(".txt_content").stop(true).slideToggle();
			});
	
	/*------------------------手风琴特效----------------------------*/


     $(".anchor li:eq(0)").click(function(){
		 $("body").stop(true).animate({ scrollTop : 75 },400);
		 });
     $(".anchor li:eq(1)").click(function(){
		 $("body").stop(true).animate({ scrollTop : 670 },400);
		 });
	 $(".anchor li:eq(2)").click(function(){
		 $("body").stop(true).animate({ scrollTop : 1150 },400);
		 });
	 $(".anchor li:eq(3)").click(function(){
		 $("body").stop(true).animate({ scrollTop : 1500 },400);
		 });	 	 
     
	 $(".anchor").mouseenter(function(){
		 $(this).stop(true).animate({width:100},300);
		 });
     $(".anchor").mouseleave(function(){
		 $(this).stop(true).animate({width:38},300);
		 });
	
    /*------------------------锚点特效------------------------------*/
   
	});