<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"E:\www\ming\public/../application/admin\view\index\index.html";i:1528776145;s:44:"E:\www\ming\application\admin\view\page.html";i:1528825955;}*/ ?>
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
                    

<body class="childrenBody">
	<div class="panel_box row">
		<div class="panel col">
			<a href="">
				<div class="panel_icon">
					<i class="layui-icon" data-icon="&#xe63a;">&#xe63a;</i>
				</div>
				<div class="panel_word newMessage">
					<span></span>
					<cite>新消息</cite>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="<?php echo url('Admin/index/lists'); ?>">
				<div class="panel_icon" style="background-color:#FF5722;">
					<i class="iconfont icon-dongtaifensishu" data-icon="icon-dongtaifensishu"></i>
				</div>
				<div class="panel_word userAll">
					<span></span>
					<cite>新增人数</cite>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="page/user/allUsers.html">
				<div class="panel_icon" style="background-color:#009688;">
					<i class="layui-icon" data-icon="&#xe613;">&#xe613;</i>
				</div>
				<div class="panel_word userAll">
					<span></span>
					<cite>用户总数</cite>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="page/img/images.html">
				<div class="panel_icon" style="background-color:#5FB878;">
					<i class="layui-icon" data-icon="&#xe64a;">&#xe64a;</i>
				</div>
				<div class="panel_word imgAll">
					<span></span>
					<cite>图片总数</cite>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="page/news/newsList.html">
				<div class="panel_icon" style="background-color:#F7B824;">
					<i class="iconfont icon-wenben" data-icon="icon-wenben"></i>
				</div>
				<div class="panel_word waitNews">
					<span></span>
					<cite>待审核文章</cite>
				</div>
			</a>
		</div>
		<div class="panel col max_panel">
			<a href="javascript:;" data-url="page/news/newsList.html">
				<div class="panel_icon" style="background-color:#2F4056;">
					<i class="iconfont icon-text" data-icon="icon-text"></i>
				</div>
				<div class="panel_word allNews">
					<span></span>
					<em>文章总数</em>
					<cite>文章列表</cite>
				</div>
			</a>
		</div>
	</div>
	<blockquote class="layui-elem-quote">
		<p>本模板基于Layui实现，支持除LayIM外所有的Layui组件。<a href="http://layim.layui.com/" target="_blank" class="layui-btn layui-btn-mini">前往获取LayIM授权</a>　　<span style="color:#1E9FFF;">郑重提示：网站所有数据均为静态数据，无数据库，除打开的窗口和部分小改动外所有操作刷新后无效，关闭窗口或清除缓存后，所有操作无效，请知悉</span></p>
		<p style="margin-top:5px;">开发文档地址：<a class="layui-btn layui-btn-mini" target="_blank" href="http://www.layui.com/doc">点此跳转</a> <a class="layui-btn layui-btn-mini layui-btn-danger" target="_blank" href="http://fly.layui.com/case/u/3198216">我要点赞</a>　　技术交流QQ群：<a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=8b7dd3ea73528c1e46c5d4e522426d60deed355caefdf481c1eacdd1b7b73bfd"><img border="0" src="/static/page/pub.idqqimg.com/wpa/images/group.png" alt="layui后台管理模版" title="layui后台管理模版"></a>（添加时请注明来自本框架） <span style="color:#f00;"> 注：本框架未引入任何第三方组件（天气信息除外），单纯的layui+js实现的各种功能【本框架仅作为学习交流使用，如需用作商业用途，请联系作者授权，谢谢】</span></p>
	</blockquote>
	<div class="row">
		<div class="sysNotice col">
			<blockquote class="layui-elem-quote title">更新日志</blockquote>
			<div class="layui-elem-quote layui-quote-nm">
				<h3># 1.0.9_rls （发行版） - 2017-03-01</h3>
				<p>* checkbox复选框原始风格支持不显示文字（之前会默认显示：勾选）</p>
				<p>* 进度条超出100%情况下的自动处理</p>
				<p>* 修复Tab选项卡在出现下拉按钮时，点击最后的几个选项卡未能正常切换的bug</p>
				<p>* 修复select组件搜索选择时会先显示之前的值再替换新的值的不良体验</p>
				<p>* 修复默认进度条0%时，文本出现太过于左侧的问题</p>
				<br />
				<p># 1.0.9</p>
				<p>* 新增“折叠面板”页面元素及相关事件监听</p>
				<p>* select组件增加搜索匹配功能，通过参数 lay-search 开启</p>
				<p>* checkbox组件增加原始风格样式，通过设置 lay-skin="primary" 开启（跟系统自带的类似样貌）</p>
				<p>* 升级 layer弹层组件到 3.0.2 （ layer3.0.2更新日志 ）</p>
				<p>* 表单元素增加属性 lay-ignore ,设置后，将不会对该标签进行美化渲染，即保留系统风格</p>
				<p>* 开关增加两种状态的自定义文本，通过参数 lay-text="ON|OFF" 开启</p>
				<p>* 修复Tab选项卡嵌套的Tab没有对应的内容结构时，切换到了父级内容的bug</p>
				<p>* 修复Tab选项卡容器中使用下拉框时，被溢出隐藏的问题</p>
				<p>* 修复Tab选项卡溢满情况下，点击展开按钮，再在外部添加一个选项卡出现异常的bug</p>
				<p>* Tab选项卡部分UI细节优化</p>
				<p>* Tab选项卡的tabAdd增加id参数，用于在删除和切换时，以id作为匹配媒介</p>
			</div>
		</div>
		<div class="sysNotice col">
			<blockquote class="layui-elem-quote title">系统基本参数</blockquote>
			<table class="layui-table">
				<colgroup>
					<col width="150">
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>当前版本</td>
						<td class="version"></td>
					</tr>
					<tr>
						<td>开发作者</td>
						<td class="author"></td>
					</tr>
					<tr>
						<td>网站首页</td>
						<td class="homePage"></td>
					</tr>
					<tr>
						<td>服务器环境</td>
						<td class="server"></td>
					</tr>
					<tr>
						<td>数据库版本</td>
						<td class="dataBase"></td>
					</tr>
					<tr>
						<td>最大上传限制</td>
						<td class="maxUpload"></td>
					</tr>
					<tr>
						<td>当前用户权限</td>
						<td class="userRights"></td>
					</tr>
				</tbody>
			</table>
			<blockquote class="layui-elem-quote title">最新文章<i class="iconfont icon-new1"></i></blockquote>
			<table class="layui-table" lay-skin="line">
				<colgroup>
					<col>
					<col width="110">
				</colgroup>
				<tbody class="hot_news"></tbody>
			</table> 
		</div>
	</div>

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
