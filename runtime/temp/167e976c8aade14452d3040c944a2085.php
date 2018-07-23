<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"E:\www\ming\public/../application/admin\view\index\news.html";i:1528827745;s:44:"E:\www\ming\application\admin\view\page.html";i:1528825955;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="/static/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/static/css/font_eolqem241z66flxr.css" media="all" />
	<link rel="stylesheet" href="/static/css/main.css" media="all" />
    <script type="text/javascript" src="/static/layui/layui.js"></script>
	<script type="text/javascript" src="/static/js/nav.js"></script>
	<script type="text/javascript" src="/static/js/leftNav.js"></script>
	<script type="text/javascript" src="/static/js/index.js"></script>
    <script type="text/javascript" src="/static/js/bodyTab.js"></script>   
     <script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>
    
    
</head>
<body class="main_body">
	<div class="layui-layout layui-layout-admin">
		<!-- 顶部 -->
		<div class="layui-header header">
			<div class="layui-main">
				<a href="#" class="logo">layui后台管理</a>
				<!-- 搜索 -->
				<div class="layui-form component">
			        <select name="modules" lay-verify="required" lay-search="">
						<option value="">直接选择或搜索选择</option>
						<option value="1">layer</option>
						<option value="2">form</option>
						<option value="3">layim</option>
						<option value="4">element</option>
						<option value="5">laytpl</option>
						<option value="6">upload</option>
						<option value="7">laydate</option>
						<option value="8">laypage</option>
						<option value="9">flow</option>
						<option value="10">util</option>
						<option value="11">code</option>
						<option value="12">tree</option>
						<option value="13">layedit</option>
						<option value="14">nav</option>
						<option value="15">tab</option>
						<option value="16">table</option>
						<option value="17">select</option>
						<option value="18">checkbox</option>
						<option value="19">switch</option>
						<option value="20">radio</option>
			        </select>
			        <i class="layui-icon">&#xe615;</i>
			    </div>
			    <!-- 天气信息 -->
			    <div class="weather" pc>
			    	<div id="tp-weather-widget"></div>
					<script>(function(T,h,i,n,k,P,a,g,e){g=function(){P=h.createElement(i);a=h.getElementsByTagName(i)[0];P.src=k;P.charset="utf-8";P.async=1;a.parentNode.insertBefore(P,a)};T["ThinkPageWeatherWidgetObject"]=n;T[n]||(T[n]=function(){(T[n].q=T[n].q||[]).push(arguments)});T[n].l=+new Date();if(T.attachEvent){T.attachEvent("onload",g)}else{T.addEventListener("load",g,false)}}(window,document,"script","tpwidget","//widget.seniverse.com/widget/chameleon.js"))</script>
					<script>tpwidget("init", {
					    "flavor": "slim",
					    "location": "WX4FBXXFKE4F",
					    "geolocation": "disabled",
					    "language": "zh-chs",
					    "unit": "c",
					    "theme": "chameleon",
					    "container": "tp-weather-widget",
					    "bubble": "disabled",
					    "alarmType": "badge",
					    "color": "#FFFFFF",
					    "uid": "U9EC08A15F",
					    "hash": "14dff75e7253d3a8b9727522759f3455"
					});
					tpwidget("show");</script>
			    </div>
			    <!-- 顶部右侧菜单 -->
                   
			    <ul class="layui-nav top_menu">
                
			    	<li class="layui-nav-item showNotice" id="showNotice" pc>
						<a href="javascript:;"><i class="iconfont icon-gonggao"></i><cite>系统公告</cite></a>
					</li>
			    	<li class="layui-nav-item" mobile>
			    		<a href="javascript:;" data-url="page/user/changePwd.html"><i class="iconfont icon-shezhi1" data-icon="icon-shezhi1"></i><cite>设置</cite></a>
			    	</li>
			    	<li class="layui-nav-item" mobile>
			    		<a href="javascript:;"><i class="iconfont icon-loginout"></i> 退出</a>
			    	</li>
					<li class="layui-nav-item lockcms" pc>
						<a href="javascript:;"><i class="iconfont icon-lock1"></i><cite>锁屏</cite></a>
					</li>
					<li class="layui-nav-item" pc>
						<a href="javascript:;">
							<img src="/static/images/face.jpg" class="layui-circle" width="35" height="35">
							<cite></cite>
						</a>
						<dl class="layui-nav-child">
							<dd><a href="javascript:;" data-url="page/user/userInfo.html"><i class="iconfont icon-zhanghu" data-icon="icon-zhanghu"></i><cite>个人资料</cite></a></dd>
							<dd><a href="javascript:;" data-url="page/user/changePwd.html"><i class="iconfont icon-shezhi1" data-icon="icon-shezhi1"></i><cite>修改密码</cite></a></dd>
							<dd><a href="javascript:;"><i class="iconfont icon-loginout"></i><cite>退出</cite></a></dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
		<!-- 左侧导航 -->
		<div class="layui-side layui-bg-black">
			<div class="user-photo">
				<a class="img" title="我的头像" ><img src="/static/images/face.jpg"></a>
				<p>你好！<span class="userName">请叫我马哥</span>, 欢迎登录</p>
			</div>
			<div class="navBar layui-side-scroll"></div>
		</div>
		<!-- 右侧内容 -->
		<div class="layui-body layui-form">
			<div class="layui-tab marg0" lay-filter="bodyTab">
				<ul class="layui-tab-title top_tab">
					<li class="layui-this" lay-id=""><a href="javascript:;"> <i class="iconfont icon-computer" ></i> <cite>后台首页</cite></a></li>
                    <li class="layui-this" lay-id=""><a href="<?php echo url('admin/index/lists'); ?>"><i class="iconfont icon-computer"></i> <cite>文章列表</cite></a></li>
                    <li class="layui-this" lay-id=""><a href="<?php echo url('admin/index/news'); ?>"><i class="iconfont icon-computer"></i> <cite>友情链接</cite></a></li>
                    <li class="layui-this" lay-id=""><a href="<?php echo url('admin/index/newsadd'); ?>"><i class="iconfont icon-computer"></i> <cite>404页面</cite></a></li>
                    <li class="layui-this" lay-id=""><a href="<?php echo url('admin/index/lists'); ?>"><i class="iconfont icon-computer"></i> <cite>系统基本资料</cite></a></li>
				</ul>
				<div class="layui-tab-content clildFrame">
					<div class="layui-tab-item layui-show">
                    
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>文章列表--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="__STARTC__/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="__STARTC__/css/font_eolqem241z66flxr.css" media="all" />
	<link rel="stylesheet" href="__STARTC__/css/news.css" media="all" />
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
   
		<div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div>
        
		<div class="layui-inline">
			<a class="layui-btn layui-btn-normal newsAdd_btn">添加文章</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn recommend" style="background-color:#5FB878">推荐文章</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn audit_btn">审核文章</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div>
		<div class="layui-inline">
			<div class="layui-form-mid layui-word-aux">本页面刷新后除新添加的文章外所有操作无效，关闭页面所有数据重置</div>
		</div>
	</blockquote>
	<div class="layui-form news_list">
    <form action="" method="get">
	  	<table width="1041" height="47" class="layui-table">
		    <colgroup>
				<col width="50">
				<col>
				<col width="9%">
				<col width="9%">
				<col width="9%">
				<col width="9%">
				<col width="9%">
				<col width="15%">
		    </colgroup>
		    <thead width="1087" height="100%" border="0">
				<tr>
					<th width="14%" style="text-align:left;">文章标题</th>
					<th width="14%">发布人</th>
					<th width="14%">审核状态</th>
					<th width="14%">浏览权限</th>
					<th width="14%">是否展示</th>
					<th width="14%">发布时间</th>
					<th width="14%">操作</th>
				</tr> 
		    </thead>
		    <tbody class="news_content"></tbody>
		</table>
       <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
    
	  	<table width="1087" height="100%" border="1">
	  	  <tr>
	  	 
	  	   <a href="<?php echo url('admin/index/news'); ?>,'id'=><?php echo $user['id']; ?>"> <td width="14%"><?php echo $user['id']; ?></td></a>
	  	    <td width="14%"><?php echo $user['address']; ?></td>
	  	    <td width="14%"><?php echo $user['email']; ?></td>
	  	    <td width="14%"></td>
             <td width="14%"><?php echo $user['cname']; ?></td>
              
              <td width="14%"><a href="<?php echo url('newsedit',['id'=>$user['id']]); ?>">修改文章</a></td>
              <td width="14%"><a href="<?php echo url('del',['id'=>$user['id']]); ?>">删除文章</a></td>
  	      </tr>
	  	
  	  </table>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      </form>
   
	  	<p>&nbsp;</p>
	</div>
	<div id="page"></div>
	<script type="text/javascript" src="__STARTC__/layui/layui.js"></script>
	<script type="text/javascript" src="__STARTC__/js/newsList.js"></script>
</body>
</html>

					</div>
				</div>
			</div>
		</div>
		<!-- 底部 -->
		<div class="layui-footer footer">
		
		</div>
	</div>

	<!-- 锁屏 -->
	<div class="admin-header-lock" id="lock-box" style="display: none;">
		<div class="admin-header-lock-img"><img src="/static/images/face.jpg"/></div>
		<div class="admin-header-lock-name" id="lockUserName">请叫我马哥</div>
		<div class="input_btn">
			<input type="password" class="admin-header-lock-input layui-input" placeholder="请输入密码解锁.." name="lockPwd" id="lockPwd" />
			<button class="layui-btn" id="unlock">解锁</button>
		</div>
		<p>请输入“123456”，否则不会解锁成功哦！！！</p>
	</div>
	<!-- 移动导航 -->
	<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
	<div class="site-mobile-shade"></div>

	
</body>
