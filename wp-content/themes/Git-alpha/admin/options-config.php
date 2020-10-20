<?php
/**
 * 主题选项配置文件
 */

$theme_options = array(
	'常规选项' => array(
			array(
			'name'  => '滚动内容来源',
			'desc'  => '选择一个内容调用显示在顶部的滚动',
			'id'    => 'git_gun_b',
			'type'  => 'radio',
			'options' => array(
				'git_gun_shuo' => '调用说说标题',
				'git_gun_tui' => '调用下方公告'
			),
			'std'   => 'git_gun_tui'
		),
		array(
			'name'  => '滚动公告栏',
			'desc'  => '最新消息显示在全站导航条下方，非常给力的推广位置',
			'id'    => 'git_tui',
			'type'  => 'textarea',
			'std'   => '<li>欢迎访问极客公园网站，WordPress信息，WordPress教程，推荐使用最新版火狐浏览器和Chrome浏览器访问本网站，欢迎加入极客公园<code><a target="_blank" href="https://gitcafe.net/go/qun"><i class="fa fa-qq"></i> QQ群</a></code></li><li>Git主题现已支持滚动公告栏功能，兼容其他浏览器，看到的就是咯，在后台最新消息那里用li标签添加即可。</li><li>最新版Git主题已支持说说碎语功能，可像添加文章一样直接添加说说，新建说说页面即可，最后重新保存固定连接，<a target="_blank" href="https://gitcafe.net/shuo.html">演示地址</a></li><li>百度口碑求点赞啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊<a target="_blank" href="http://koubei.baidu.com/s/gitcafe.net">http://koubei.baidu.com/s/gitcafe.net</a></li><li>如果您觉得本站非常有看点，那么赶紧使用Ctrl+D 收藏极客公园吧</li>'
		),
		array(
			'name'  => '友情链接页面',
			'desc'  => '只显示输入分类的链接，id之间用英文逗号隔开，建议只显示友情链接即可。',
			'id'    => 'git_linkpage_cat',
			'type'  => 'number'
		),
		array(
			'name'  => '列表Ajax下拉加载',
			'desc'  => '开启本选项之后网站会采用ajax方式下拉自动加载,默认只在传统blog列表页面生效,如果使用卡片式或者CMS,请关闭',
			'id'    => 'git_ajaxpager_b',
			'type'  => 'checkbox'
		),
		array(
			'title' => '热门排行',
			'type'  => 'title'
		),
		array(
			'name'  => '开启',
			'desc'  => '【注意，在开启3D幻灯片的时候是默认打开的，无法关闭】',
			'id'    => 'hot_list_check',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '排序根据',
			'desc'  => '选择一个参数作为排序的根据，可以选择评论数目，文章置顶，置顶文章最多10篇',
			'id'    => 'git_hot_b',
			'type'  => 'radio',
			'options' => array(
				'git_hot_comment' => '评论数目',
				'git_hot_zd' => '文章置顶'
			),
			'std'   => 'git_hot_comment'
		),
		array(
			'name'  => '排行名称',
			'desc'  => '这里是显示在网站首页热门排行那里',
			'id'    => 'hot_list_title',
			'type'  => 'text',
			'std'   => '本周热门'
		),
		array(
			'name'  => '用户登录信息',
			'desc'  => '开启',
			'id'    => 'git_sign_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '百度分享',
			'desc'  => '开启并且同时开启打赏功能，支持https',
			'id'    => 'git_bdshare_b',
			'type'  => 'checkbox'
		),
		array(
			'title' => '占位文本',
			'type'  => 'title'
		),
		array(
			'name'  => '搜索框',
			'desc'  => '占位文本',
			'id'    => 'git_search_placeholder',
			'type'  => 'text',
			'std'   => '输入内容并回车'
		),
		array(
			'name'  => '评论',
			'desc'  => '评论框占位文本',
			'id'    => 'git_comment_placeholder',
			'type'  => 'text',
			'std'   => '说点什么吧…'
		),
		array(
			'title' => '投稿设置',
			'type'  => 'title'
		),
		array(
			'name'  => '开启',
			'desc'  => '开启后，再后台新建一个页面，模板选择投稿',
			'id'    => 'git_tougao_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '投稿时间间隔',
			'desc'  => '秒，默认：240',
			'id'    => 'git_tougao_time',
			'type'  => 'number',
			'std'   => 240
		),
		array(
			'name'  => '投稿提醒邮箱',
			'desc'  => '这里的邮箱一般是站长的邮箱，默认是获取网站自带的邮箱，另外，SMTP服务必须保证正常使用',
			'id'    => 'git_tougao_mailto',
			'type'  => 'text',
			'std'   => get_bloginfo( 'admin_email' )
		),
		array(
			'name'  => '流量统计代码',
			'desc'  => '统计网站流量，推荐使用百度统计，国内比较优秀且速度快；还可使用Google统计、CNZZ等',
			'id'    => 'git_track',
			'type'  => 'textarea'
		),
		array(
			'name'  => '网站头部代码',
			'desc'  => '会自动出现在页面头部（head区域），可放置广告代码等自定义代码的全局代码块',
			'id'    => 'git_headcode',
			'type'  => 'textarea'
		),
		array(
			'name'  => '网站自定义样式CSS',
			'desc'  => '网站全局CSS代码，可以直接加入css代码，比如：.authorsocials i{font-size:16px;width:20px;height:18px}',
			'id'    => 'git_customcss',
			'type'  => 'textarea'
		),
		array(
			'name'  => '主题更新设置',
			'desc'  => '禁止主题更新【 选择后，您将无法收到本主题的更新推送，请慎重选择】',
			'id'    => 'git_updates_b',
			'type'  => 'checkbox'
		)
	),

	'SEO设置' => array(
		array(
			'name'  => '网站关键字',//选项显示的文字，选填
			'desc'  => '各关键字间用半角逗号','分割，数量在6个以内最佳。',//选项显示的一段描述文字，选填
			'id'    => 'git_keywords',//选项的id，必须是唯一，后面根据这个获取值，必填
			'type'  => 'text',//种类，这个是普通的文字输入，必填
			'std'   => ''//选项的默认值，选填
		),
		array(
			'name'  => '网站描述',
			'desc'  => '用简洁的文字描述本站点，字数建议在120个字以内。',
			'id'    => 'git_description',
			'type'  => 'text'
		),
		array(
			'name'  => 'title分隔符',
			'desc'  => '显示在浏览器标题栏的一个用来风格网站名字的',
			'id'    => 'git_delimiter',
			'type'  => 'text',
			'std'   => '|'
		),
		array(
			'name'  => '自动内链',
			'desc'  => '启用',
			'id'    => 'git_autolink_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '关键词出现数目',
			'desc'  => '文章中少于这个数字的关键词将不自动内链，默认是1，即全部链接',
			'id'    => 'git_autolink_1',
			'type'  => 'number',
			'std'   => 1
		),
		array(
			'name'  => '关键词链接次数',
			'desc'  => '文章中最多链接的次数，默认是6',
			'id'    => 'git_autolink_2',
			'type'  => 'number',
			'std'   => 6
		),
		array(
			'name'  => '图片自动添加alt以及title',
			'desc'  => '启用',
			'id'    => 'git_imgalt_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '外链自动GO跳转',
			'desc'  => '启用 【启用之后需要新建页面，模板选择Go跳转页面，别名为go】',
			'id'    => 'git_go',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '外链自动添加nofollow',
			'desc'  => '启用',
			'id'    => 'git_nofollow',
			'type'  => 'checkbox'
		),
		array(
			'name'  => 'Robot.txt优化',
			'desc'  => '启用 【开启本项之后，将只对搜索引擎开放首页，页面，文章页，其他一律屏蔽】',
			'id'    => 'git_robot_b',
			'type'  => 'checkbox'
		),
		array(
			'title' => '百度主动推送 <a href="http://zhanzhang.baidu.com/linksubmit/index" target="_blank">查看主动推送效果</a>',//标题文字
			'type'  => 'title'//title 是标签下的标题
		),
		array(
			'name'  => '主动推送接口地址，填写本项即开启推送',
			'desc'  => '在百度站长平台获取主动推送接口地址，比如：http://data.zz.baidu.com/urls?site=域名&token=一组字符, <a class="button-primary" rel="nofollow" href="http://zhanzhang.baidu.com/linksubmit/index" target="_blank">主动推送接口地址</a>',
			'id'    => 'git_sitemap_api',
			'type'  => 'text'
		)
	),

	'文章设置' => array(
		array(
			'title' => '列表文章属性',
			'type'  => 'title'
		),
		array(
			'name'  => '访客数',
			'desc'  => '不显示',
			'id'    => 'git_post_views_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '作者名',
			'desc'  => '不显示',
			'id'    => 'git_post_author_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '评论数',
			'desc'  => '不显示',
			'id'    => 'git_post_comment_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '发布时间',
			'desc'  => '不显示',
			'id'    => 'git_post_time_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '喜欢数',
			'desc'  => '不显示',
			'id'    => 'git_post_like_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '文章面包屑',
			'desc'  => '开启',
			'id'    => 'git_singleMenu_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '自动首行缩进',
			'desc'  => '开启 【开启后对文字内容自动首行缩进2格】',
			'id'    => 'git_suojin',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '自动中英文空格',
			'desc'  => '开启 【开启后对中英文会间隔开，但是会打乱部分关键词】',
			'id'    => 'git_auto_kg',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '文章按照更新日期排序',
			'desc'  => '开启 【开启按照最新更新排序，不开启则按照默认时间排序】',
			'id'    => 'git_orderbygx',
			'type'  => 'checkbox'
		),
		array(
			'title' => '垃圾评论屏蔽',
			'type'  => 'title'
		),
		array(
			'name'  => '过滤外语评论',
			'desc'  => '开启 【启用后，将屏蔽所有含有日文以及英语的评论，外贸站慎用】',
			'id'    => 'git_spam_lang',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '关键词，IP，邮箱屏蔽',
			'desc'  => '开启 【启用后，在WordPress-设置-讨论-黑名单中添加想要屏蔽的关键词，邮箱，网址，IP地址，每行一个】<a class="button-primary" target="_blank" href="https://img.alicdn.com/imgextra/i4/1597576229/TB2FnxnlpXXXXcDXXXXXXXXXXXX_!!1597576229.png">如图设置</a>',
			'id'    => 'git_spam_keywords',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '屏蔽含有链接的评论',
			'desc'  => '开启 【启用后，屏蔽内容或者评论昵称含有链接的评论，如果您的评论需要输入链接或者图片的话，请慎选！！！】',
			'id'    => 'git_spam_url',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '屏蔽长链接评论',
			'desc'  => '开启 【启用后，屏蔽含有过长网址(超过50个字符)的评论，当然如果你已经选择了上面的选项的话，就不用选择了】',
			'id'    => 'git_spam_long',
			'type'  => 'checkbox'
		),
		array(
			'title' => '评论设置属性',
			'type'  => 'title'
		),
		array(
			'name'  => '贴图',
			'desc'  => '不显示',
			'id'    => 'git_tietu',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '加粗',
			'desc'  => '不显示',
			'id'    => 'git_jiacu',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '删除线',
			'desc'  => '不显示',
			'id'    => 'git_shanchu',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '居中',
			'desc'  => '不显示',
			'id'    => 'git_juzhong',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '斜体',
			'desc'  => '不显示',
			'id'    => 'git_xieti',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '签到',
			'desc'  => '不显示',
			'id'    => 'git_qiandao',
			'type'  => 'checkbox'
		),
		array(
			'title' => '评论VIP设置',
			'type'  => 'title'
		),
		array(
			'name'  => '启用',
			'desc'  => ' 【启用之后，您需要在下面设置用户的评论数字区间】',
			'id'    => 'git_vip',
			'type'  => 'checkbox'
		),
		array(
			'name'  => 'VIP 1',
			'desc'  => '输入的数字减一就是VIP 1的所要求的评论数字区间，默认是5',
			'id'    => 'git_vip1',
			'type'  => 'number',
			'std'   => 5
		),
		array(
			'name'  => 'VIP 2',
			'desc'  => '输入的数字减去上面的数字就是VIP 2的所要求的评论数字区间,默认是10',
			'id'    => 'git_vip2',
			'type'  => 'number',
			'std'   => 10
		),
		array(
			'name'  => 'VIP 3',
			'desc'  => '输入的数字减去上面的数字就是VIP 3的所要求的评论数字区间，默认是20',
			'id'    => 'git_vip3',
			'type'  => 'number',
			'std'   => 20
		),
		array(
			'name'  => 'VIP 4',
			'desc'  => '输入的数字减去上面的数字就是VIP 4的所要求的评论数字区间，默认是40',
			'id'    => 'git_vip4',
			'type'  => 'number',
			'std'   => 30
		),
		array(
			'name'  => 'VIP 5',
			'desc'  => '输入的数字减去上面的数字就是VIP 5的所要求的评论数字区间，默认是70',
			'id'    => 'git_vip5',
			'type'  => 'number',
			'std'   => 40
		),
		array(
			'name'  => 'VIP 6',
			'desc'  => '输入的数字减去上面的数字就是VIP 6的所要求的评论数字区间，默认是110',
			'id'    => 'git_vip6',
			'type'  => 'number',
			'std'   => 50
		),
		array(
			'name'  => '文章摘要',
			'desc'  => '个字',
			'id'    => 'git_excerpt_length',
			'type'  => 'number',
			'std'   => 180
		),
		array(
			'name'  => '文章二维码',
			'desc'  => '启用',
			'id'    => 'git_qr_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '作者模块',
			'desc'  => '启用',
			'id'    => 'git_auther_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '文章目录索引',
			'desc'  => '启用  【开启之后，默认索引文章H2标题】',
			'id'    => 'git_article_list',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '相关文章显示条数',
			'desc'  => '条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 这是是显示文章下面的相关文章数目的',
			'id'    => 'git_related_count',
			'type'  => 'number',
			'std'   => 8
		),
		array(
			'name'  => '禁止站内文章Pingback',
			'desc'  => '开启&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 开启后，不会发送站内Pingback，建议开启',
			'id'    => 'git_pingback_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '禁止后台编辑时自动保存',
			'desc'  => '开启&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 开启后，后台编辑文章时候不会定时保存，有效缩减数据库存储量；但是，一般不建议开启，除非你的数据库容量很小',
			'id'    => 'git_autosave_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '文章版权声明',
			'desc'  => '此处输入的文字将出现在每篇文章最底部，你可以使用：{{title}}表示文章标题，{{link}}表示文章链接',
			'id'    => 'git_copyright_b',
			'type'  => 'textarea',
			'std'   => '极客公园 , 版权所有丨如未注明 , 均为原创丨本网站采用<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" rel="nofollow" target="_blank" title="BY-NC-SA授权协议">BY-NC-SA</a>协议进行授权 <br >转载请注明原文链接：<a href="{{link}}" target="_blank" title="{{title}}">{{title}}</a>'
		)
	),

	'样式设置' => array(
			array(
			'name'  => '透明导航栏',
			'desc'  => '开启   【开启后您的菜单导航栏就会变成半透明】',
			'id'    => 'git_tmnav_b',
			'type'  => 'checkbox'
		),
		array(
			'title' => '网站头部设置',
			'type'  => 'title'
		),
		array(
			'name'  => '图片头部背景',
			'desc'  => '开启【开启后您的头部背景将显示默认背景图，不开启则显示默认纯色背景】',
			'id'    => 'git_pichead_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '自定义头部背景',
			'desc'  => '请在这里输入您的图片路径',
			'id'    => 'git_customhead',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '图片头部logo',
			'desc'  => '开启【开启后您的头部背景将显示默认图片logo，不开启则显示默认文字logo】',
			'id'    => 'git_piclogo_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '自定义头部logo',
			'desc'  => '请在这里输入您的图片路径',
			'id'    => 'git_customlogo',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => 'logo居左',
			'desc'  => '开启【开启后您的logo将居左显示】',
			'id'    => 'git_piclogo_left',
			'type'  => 'checkbox'
		),
		array(
			'title' => '主题皮肤设置',
			'type'  => 'title'
		),
		array(
			'name'  => '网站配色',
			'desc'  => '选择一个色调作为您网站的主色调，如果这里的色彩还不够，您可以使用下面的自定义色彩',
			'id'    => 'git_skin_b',
			'type'  => 'radio',
			'options' => array(
				'git_red_b' => '幽红色',
				'git_blue_b' => '深蓝色',
				'git_black_b' => '暗黑色',
				'git_purple_b' => '亮紫色',
				'git_yellow_b' => '淡黄色',
				'git_light_b' => '轻蓝色',
				'git_green_b' => '鲜绿色',
				'git_custom_color' => '自定义'
			),
			'std'   => 'git_light_b'
		),
		array(
			'name'  => '颜色代码',
			'desc'  => '请在这里输入你选择的颜色代码，举例：#000000<a class="button-primary" rel="nofollow" href="https://colordrop.io/" target="_blank">获取颜色代码</a>',
			'id'    => 'git_color_nom',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => 'Hover颜色代码',
			'desc'  => '请在这里输入你选择的Hover颜色代码，一般这里的颜色和上面的一样，只是会略深而已',
			'id'    => 'git_color_hover',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '代码高亮主题',
			'desc'  => '选择一个色调作为您网站的主色调，如果这里的色彩还不够，您可以使用下面的自定义色彩',
			'id'    => 'git_prettify',
			'type'  => 'radio',
			'options' => array(
				'monokai' => '黑色主题',
				'tomorrow' => '暗色主题',
				'solarized' => '蓝色主题',
				'deepblue' => '深绿主题',
				'yusigreen' => '淡绿主题'
			),
			'std'   => 'yusigreen'
		),
		array(
			'name'  => '自定义登录页面背景',
			'desc'  => '登录页面使用必应每日美图作为背景图，填写此项将使用自定义图片背景，不使用必应美图背景',
			'id'    => 'git_loginbg',
			'type'  => 'text',
			'std'   => 'https://p.ssl.qhimg.com/t01552d259ec32fce5d.jpg'
		),
		array(
			'title' => '侧边跟随设置',
			'type'  => 'title'
		),
		array(
			'name'  => '侧边栏跟随',
			'desc'  => '开启 【开启后为下面的选项选择侧边栏序号，注意是从2开始数的】',
			'id'    => 'git_sideroll_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '第一个侧边栏：',
			'desc'  => '跟随',
			'id'    => 'git_sideroll_1',
			'type'  => 'number',
			'std'   => ''
		),
		array(
			'name'  => '第二个侧边栏：',
			'desc'  => '跟随',
			'id'    => 'git_sideroll_2',
			'type'  => 'number',
			'std'   => ''
		),
		array(
			'title' => '分类设置',
			'type'  => 'title'
		),
		array(
			'name'  => '是否开启CMS',
			'desc'  => '启用 【不启用的话，显示是博客模式】',
			'id'    => 'git_cms_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '网站是否开启卡片式',
			'desc'  => '启用 【不启用的话，显示是传统博客形式】',
			'id'    => 'git_card_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '选择分类展示形式',
			'desc'  => '选择一种风格作为分类页面的展示形式，有卡片式和列表式',
			'id'    => 'git_cat_style',
			'type'  => 'radio',
			'options' => array(
				'git_cat_card' => '卡片风格',
				'git_cat_list' => '列表风格'
			),
			'std'   => 'git_cat_card'
		),
		array(
			'name'  => '选择标签展示形式',
			'desc'  => '选择一种风格作为标签页面的展示形式，有卡片式和列表式',
			'id'    => 'git_tag_style',
			'type'  => 'radio',
			'options' => array(
				'git_tag_card' => '卡片风格',
				'git_tag_list' => '列表风格'
			),
			'std'   => 'git_tag_card'
		),
		array(
			'name'  => 'cms 分类文章数目',
			'desc'  => '默认4个,也可以8个',
			'id'    => 'git_cat_num',
			'type'  => 'number',
			'std'   => 4
		),
		array(
			'name'  => '分类ID',
			'desc'  => '显示在CMS首页的分类,举例：1,15,5,6,12,13,16,20',
			'id'    => 'git_cat_id',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'title' => '首页隐藏分类',
			'type'  => 'title'
		),
		array(
			'name'  => '屏蔽分类',
			'desc'  => '格式按照-3,-4,-5输入',
			'id'    => 'git_blockcat',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'title' => 'RSS隐藏分类',
			'type'  => 'title'
		),
		array(
			'name'  => '屏蔽分类',
			'desc'  => '格式按照-3,-4,-5输入',
			'id'    => 'git_blockcat_rss',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'title' => '搜索隐藏分类',
			'type'  => 'title'
		),
		array(
			'name'  => '屏蔽分类',
			'desc'  => '格式按照-3,-4,-5输入',
			'id'    => 'git_blockcat_search',
			'type'  => 'text',
			'std'   => ''
		)
	),

	'幻灯设置' => array(
    array(
        'title' => '幻灯片方案选择',
        'type'  => 'title'
    ),
	array(
		'name'  => '选择适合网站的幻灯片方案',
		'desc'  => '选择一种幻灯片风格作为首页大图，如果不需要可以禁用',
		'id'    => 'git_slide_style',
		'type'  => 'radio',
		'options' => array(
			'git_slide_3d' => '豪华版幻灯片',
			'git_slide_pt' => '简单版幻灯片',
			'git_slide_off' => '关闭幻灯片',
		),
		'std'   => 'git_slide_pt'
	),
    array(
        'title' => '幻灯片【豪华版】设置[716*297]',
        'type'  => 'title'
    ),
    array(
        'name'  => '移动端不显示',
        'desc'  => '开启',
        'id'    => 'git_mobilesticky_b',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '幻灯片显示数目',
        'desc'  => '个',
        'id'    => 'git_sticky_count',
        'type'  => 'number',
        'std'   => 4
    ),
    array(
        'title' => '幻灯片【简约版】设置[855*300]',
        'type'  => 'title'
    ),
    array(
        'name'  => '幻灯片一图片',
        'desc'  => '在这里输入您的幻灯片的图片路径',
        'id'    => 'git_slick1img_b',
        'type'  => 'text',
        'std'   => 'https://p.ssl.qhimg.com/t018a12da24a5687855.jpg'
    ),
    array(
        'name'  => '幻灯片一链接',
        'desc'  => '在这里输入您的幻灯片的引用链接',
        'id'    => 'git_slick1url_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片一标题',
        'desc'  => '在这里输入您的幻灯片的标题',
        'id'    => 'git_slick1title_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片二图片',
        'desc'  => '在这里输入您的幻灯片的图片路径',
        'id'    => 'git_slick2img_b',
        'type'  => 'text',
        'std'   => 'https://p.ssl.qhimg.com/t019de3d2e67ceef590.jpg'
    ),
    array(
        'name'  => '幻灯片二链接',
        'desc'  => '在这里输入您的幻灯片的引用链接',
        'id'    => 'git_slick2url_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片二标题',
        'desc'  => '在这里输入您的幻灯片的标题',
        'id'    => 'git_slick2title_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片三图片',
        'desc'  => '在这里输入您的幻灯片的图片路径',
        'id'    => 'git_slick3img_b',
        'type'  => 'text',
        'std'   => 'https://p.ssl.qhimg.com/t01511a88bc738bebe9.jpg'
    ),
    array(
        'name'  => '幻灯片三链接',
        'desc'  => '在这里输入您的幻灯片的引用链接',
        'id'    => 'git_slick3url_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片三标题',
        'desc'  => '在这里输入您的幻灯片的标题',
        'id'    => 'git_slick3title_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片四图片',
        'desc'  => '在这里输入您的幻灯片的图片路径',
        'id'    => 'git_slick4img_b',
        'type'  => 'text',
        'std'   => 'https://p.ssl.qhimg.com/t01e814d7303096185c.jpg'
    ),
    array(
        'name'  => '幻灯片四链接',
        'desc'  => '在这里输入您的幻灯片的引用链接',
        'id'    => 'git_slick4url_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片四标题',
        'desc'  => '在这里输入您的幻灯片的标题',
        'id'    => 'git_slick4title_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片五图片',
        'desc'  => '在这里输入您的幻灯片的图片路径',
        'id'    => 'git_slick5img_b',
        'type'  => 'text',
        'std'   => 'https://p.ssl.qhimg.com/t0173790ccd103bf12b.jpg'
    ),
    array(
        'name'  => '幻灯片五链接',
        'desc'  => '在这里输入您的幻灯片的引用链接',
        'id'    => 'git_slick5url_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片五标题',
        'desc'  => '在这里输入您的幻灯片的标题',
        'id'    => 'git_slick5title_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片六图片',
        'desc'  => '在这里输入您的幻灯片的图片路径',
        'id'    => 'git_slick6img_b',
        'type'  => 'text',
        'std'   => 'https://p.ssl.qhimg.com/t018514935a00cbeeb7.jpg'
    ),
    array(
        'name'  => '幻灯片六链接',
        'desc'  => '在这里输入您的幻灯片的引用链接',
        'id'    => 'git_slick6url_b',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '幻灯片六标题',
        'desc'  => '在这里输入您的幻灯片的标题',
        'id'    => 'git_slick6title_b',
        'type'  => 'text',
        'std'   => ''
		)
	),

	'社交设置' => array(
		array(
			'title' => '社交小图标，空置默认为不启用，建议别超过六个',
			'type'  => 'title'
		),
		array(
			'name'  => 'RSS订阅地址',
			'desc'  => '如果您想使用自定义的RSS地址，请在这里输入您期望的地址。',
			'id'    => 'git_rss',
			'type'  => 'text',
			'std'   => get_bloginfo('rss2_url')
		),
		array(
			'name'  => '新浪微博',
			'desc'  => '填写新浪微博个人主页链接',
			'id'    => 'git_weibo',
			'type'  => 'text',
			'std'   => 'https://gitcafe.net/go/weibo'
		),
		array(
			'name'  => '腾讯微信',
			'desc'  => '请输入您的微信号',
			'id'    => 'git_weixin',
			'type'  => 'text',
			'std'   => 'yunluoV587'
		),
		array(
			'name'  => '微信二维码',
			'desc'  => '请输入您的二维码图片路径',
			'id'    => 'git_weixin_qr',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '腾讯QQ',
			'desc'  => '直接输入QQ号即可',
			'id'    => 'git_qqContact',
			'type'  => 'text',
			'std'   => '865113728'
		),
		array(
			'name'  => 'Email',
			'desc'  => '请填写好您的邮我代码，<a class="button-primary" rel="nofollow" href="http://open.mail.qq.com/cgi-bin/qm_help_mailme?sid=,2,zh_CN&t=open_mailme" target="_blank">获取邮我组建代码</a>',
			'id'    => 'git_emailContact',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '支付宝',
			'desc'  => '',
			'id'    => 'git_pay',
			'type'  => 'text',
			'std'   => 'sp91@qq.com'
		),
		array(
			'name'  => '支付宝二维码',
			'desc'  => '请输入您的支付宝图片路径',
			'id'    => 'git_pay_qr',
			'type'  => 'text',
			'std'   => 'https://p.ssl.qhimg.com/t0162cc8398cbf7dea3.jpg'
		),
		array(
			'name'  => '自定义社交网络名字',
			'desc'  => '输入您的其他的社交网络名字，比如：github',
			'id'    => 'git_customicon_name',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '自定义社交网络链接',
			'desc'  => '输入您的其他的社交网络链接',
			'id'    => 'git_customicon_url',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '自定义社交网络图标',
			'desc'  => '输入您的其他的社交网络图标，使用awesome图标，格式类似于fa-github',
			'id'    => 'git_customicon_icon',
			'type'  => 'text',
			'std'   => ''
		)
	),
	'底部设置' => array(
		array(
			'name'  => '超级Footer',
			'desc'  => '启用【开启后，下面的设置才会有效】',
			'id'    => 'git_superfoot_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => 'Footer1标题',
			'desc'  => '在这里输入第一个footer的标题',
			'id'    => 'git_foottitle1',
			'type'  => 'text',
			'std'   => '版权声明'
		),
		array(
			'name'  => 'Footer1内容',
			'desc'  => '在这里输入第一个footer的内容',
			'id'    => 'git_footconent1',
			'type'  => 'textarea',
			'std'   => '本站的文章和资源来自互联网或者站长<br>的原创，按照 CC BY -NC -SA 3.0 CN<br>协议发布和共享，转载或引用本站文章<br>应遵循相同协议。如果有侵犯版权的资<br>源请尽快联系站长，我们会在24h内删<br>除有争议的资源。'
		),
		array(
			'name'  => 'Footer2标题',
			'desc'  => '在这里输入第二个footer的标题',
			'id'    => 'git_foottitle2',
			'type'  => 'text',
			'std'   => '网站驱动'
		),
		array(
			'name'  => 'Footer2内容',
			'desc'  => '在这里输入第二个footer的内容',
			'id'    => 'git_footconent2',
			'type'  => 'textarea',
			'std'   => '<ul><li><a href="https://gitcafe.net/goto/ad" title="云左" target="_blank">云左主机</a></li><li><a href="https://gitcafe.net/go/qiniu" title="七牛云" target="_blank">七牛云</a></li></ul>'
		),
		array(
			'name'  => 'Footer3标题',
			'desc'  => '在这里输入第三个footer的标题',
			'id'    => 'git_foottitle3',
			'type'  => 'text',
			'std'   => '友情链接'
		),
		array(
			'name'  => 'Footer3内容',
			'desc'  => '在这里输入第三个footer的内容',
			'id'    => 'git_footconent3',
			'type'  => 'textarea',
			'std'   => '<ul><li><a href="https://gitcafe.net/go/weibo" title="云落的新浪微博" target="_blank">云落的新浪微博</a></li>
	<li><a href="http://t.qq.com/sp865113728" title="云落的腾讯微博" target="_blank">云落的腾讯微博</a></li>
	<li><a href="http://git.oschina.net/yunluo/" title="云落的代码" target="_blank">云落的代码</a></li>
	<li><a href="https://gitcafe.net/go/baidu" title="云落的贴吧" target="_blank">云落的贴吧</a></li>
	<li><a href="https://gitcafe.net/" title="云落的网站" target="_blank">云落的网站</a></li></ul>'
		),
		array(
			'name'  => 'Footer4标题',
			'desc'  => '在这里输入第四个footer的标题',
			'id'    => 'git_foottitle4',
			'type'  => 'text',
			'std'   => '支持主题'
		),
		array(
			'name'  => 'Footer4内容',
			'desc'  => '在这里输入第四个footer的内容',
			'id'    => 'git_footconent4',
			'type'  => 'textarea',
			'std'   => '<img style="width:180px;height:180px;" src="https://p.ssl.qhimg.com/t0162cc8398cbf7dea3.jpg" alt="yunluo">'
		),
		array(
			'name'  => '网站footer公共代码',
			'desc'  => '在全站页面footer部分出现，可放置网站的版权信息等等',
			'id'    => 'git_footcode',
			'type'  => 'textarea',
			'std'   => 'Copyright © 2014-2015 <a href="/" title="极客公园">极客公园</a> | <a rel="nofollow" target="_blank" href="/about.html">关于网站</a> | <a rel="nofollow" target="_blank" href="/tags.html">标签汇总</a> | <a rel="nofollow" target="_blank" href="/archive.html">文章归档</a> | <a rel="nofollow" target="_blank" href="/links.html">友情链接</a> | <a href="/sitemap.html" target="_blank" title="站点地图（HTML版）">网站地图</a> | 由 <a rel="nofollow" target="_blank" href="https://gitcafe.net/goto/ad">云左</a> &amp; <a rel="nofollow" target="_blank" href="https://gitcafe.net/go/qiniu">七牛</a> &amp; <a href="/wp-admin">强力驱动</a>'
		),
		array(
			'name'  => '全站底部脚本代码',
			'desc'  => '可放置广告代码等自定义（css或js）的全局代码块',
			'id'    => 'git_footercode',
			'type'  => 'textarea',
			'std'   => ''
		)
	),
	'广告设置' => array(
		array(
			'name'  => '网站顶部右侧广告',
			'desc'  => '开启 【这里需要logo居左才可以生效】',
			'id'    => 'git_toubuads',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '广告：404页面广告',
			'desc'  => '开启',
			'id'    => 'git_404ad',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '广告：全站 - 导航下横幅',
			'desc'  => '显示在公告栏下',
			'id'    => 'git_adsite_01',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '广告：幻灯片下广告',
			'desc'  => '如果幻灯没开启，则不显示',
			'id'    => 'git_adindex_02',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '广告：文章页 - 页面标题下',
			'desc'  => '开启',
			'id'    => 'git_adpost_01',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '广告：文章页 - 相关文章下',
			'desc'  => '开启',
			'id'    => 'git_adpost_02',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '广告：文章页 - 网友评论下',
			'desc'  => '开启',
			'id'    => 'git_adpost_03',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '广告：下载单页上横幅',
			'desc'  => '开启',
			'id'    => 'git_downloadad1',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '广告：下载单页下横幅',
			'desc'  => '开启',
			'id'    => 'git_downloadad2',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '手机广告：全站正文列表最',
			'desc'  => '开启【手机广告只适合在手机中投放。例如百度联盟移动广告，PC端不会显示。下同】',
			'id'    => 'Mobiled_adindex_02',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '手机广告：文章页 - 页面标题下',
			'desc'  => '开启',
			'id'    => 'Mobiled_adpost_01',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'name'  => '手机广告：文章页 - 相关文章下',
			'desc'  => '开启',
			'id'    => 'Mobiled_adpost_02',
			'type'  => 'textarea',
			'std'   => ''
		)
	),
	'优化设置' => array(
		array(
			'name'  => '禁用REST API',
			'desc'  => '禁用  【禁用后，APP开发或者小程序开发会有影响】',
			'id'    => 'git_restapi_b',
			'type'  => 'checkbox'
		),
		array(
        'name'  => '链接去掉Categroy',
        'desc'  => '启用  【开启后，需要至设置——固定连接——重新保存一下，否则会发生404错误】',
        'id'    => 'git_categroy_b',
        'type'  => 'checkbox'
		),
		array(
        'name'  => '百度收录提示',
        'desc'  => '启用   【开启后，将会在文章标题下显示百度收录状态，需要curl扩展的支持，否则不生效】',
        'id'    => 'git_baidurecord_b',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '网站下雪特效',
        'desc'  => '启用    【开启后，将产生全站下雪特效，但是没事的时候也不要下雪】',
        'id'    => 'git_snow_b',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '网站禁止复制',
        'desc'  => '启用    【启用后访客无法使用右键复制】',
        'id'    => 'git_copy_b',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '复制弹窗提醒',
        'desc'  => '启用   【启用后，访客复制之后会弹出提示弹窗】',
        'id'    => 'git_copydialog_b',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '页面&站内搜索伪静态',
        'desc'  => '启用   【开启后，请前往固定连接重新保存一下，否则404】',
        'id'    => 'git_pagehtml_b',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '评论UA',
        'desc'  => '启用',
        'id'    => 'git_ua_b',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '取消静态资源的版本查询',
        'desc'  => '启用',
        'id'    => 'git_query',
        'type'  => 'checkbox'
    ),
    array(
        'title' => 'WordPress安全设置[小白慎用]',
        'type'  => 'title'
    ),
    array(
        'name'  => '加密WordPress后台',
        'desc'  => '启用 【启用之后，请填写下面的问题与答案，访问链接格式：http://yoursite/wp-login.php?问题=答案】',
        'id'    => 'git_admin',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '访问问题[绝对不准用中文]',
        'desc'  => '这里随便填写一个字符，比如：googlo',
        'id'    => 'git_admin_q',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '访问答案[绝对不准用中文]',
        'desc'  => '这里随便填写一个字符，比如：yunluo',
        'id'    => 'git_admin_a',
        'type'  => 'text',
        'std'   => ''
    ),
	array(
        'name'  => '后台登录错误报警',
        'desc'  => '启用 【启用之后，后台登录错误之后会自动邮件报警】',
        'id'    => 'git_login_tx',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '禁用HTML标签评论',
        'desc'  => '启用 【启用之后，评论框下方的一些按钮将不可用，谨慎考虑】',
        'id'    => 'git_html_comment',
        'type'  => 'checkbox'
    ),
    array(
        'title' => 'WordPress注册登录设置',
        'type'  => 'title'
    ),
    array(
        'name'  => '登录和注册安全验证',
        'desc'  => '启用 【启用之后，将在登录和注册页面添加数学题验证，若有更好的验证方法，可关闭】',
        'id'    => 'git_admin_captcha',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '限制每个IP的注册',
        'desc'  => '启用 【启用之后，主题会在网站根目录生成ips.txt文件，里面的ip就是保存的已注册用户的ip】',
        'id'    => 'git_regist_ips',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '每个IP允许注册的用户数',
        'desc'  => '请输入每个IP允许的注册数目，默认为1',
        'id'    => 'git_regist_ips_num',
        'type'  => 'number',
        'std'   => 1
    ),
    array(
        'name'  => '新用户注册站长邮件',
        'desc'  => '关闭  【该功能为有用户注册时给站长发邮件，鸡肋功能，建议关闭】',
        'id'    => 'git_user_notification_to_admin',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '自定义注册欢迎邮件',
        'desc'  => '开启  【本功能为用户注册后发一个体验较好的邮件，开启后同时关闭默认欢迎邮件】',
        'id'    => 'git_user_notification_to_user',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '开启用户注册成功重定向',
        'desc'  => '开启',
        'id'    => 'git_register_redirect_ok',
        'type'  => 'checkbox'
    ),
    array(
        'name'  => '注册成功后重定向',
        'desc'  => '选择一个重定向链接,如果选择自定义URL，请在下方填写好跳转链接',
        'id'    => 'git_redirect_choise',
        'type'  => 'radio',
        'options' => array(
            'git_redirect_home' => '网站首页',
            'git_redirect_author' => '前台个人中心',
            'git_redirect_profile' => '后台台个人中心',
            'git_redirect_customurl' => '自定义URL'
        ),
        'std'   => 'git_redirect_home'
    ),
    array(
        'name'  => '自定义注册重定向URL',
        'desc'  => '如果自定义跳转开启的话,这里一定要填写链接',
        'id'    => 'git_register_redirect_url',
        'type'  => 'text',
        'std'   => ''
		)
	),
	'支付设置' => array(
			array(
			'title' => '统一支付设置',
			'type'  => 'title'
		),
		array(
			'name'  => '金币和RMB兑换关系',
			'desc'  => '请输入兑换关系，比如1RMB=10金币，请慎重选择，一旦设置好后面不能修改的',
			'id'    => 'git_chongzhi_dh',
			'type'  => 'number',
			'std'   => 10
		),
		array(
			'name'  => '选择一个支付方式',
			'desc'  => '两种方案选择其中一种，必须选择一个哦',
			'id'    => 'git_pay_way',
			'type'  => 'radio',
			'options' => array(
				'git_payjs_ok' => '调用Payjs支付'
			),
			'std'   => 'git_payjs_ok'
		),
		array(
			'title' => 'PayJs支付设置&nbsp;&nbsp;&nbsp;<a href="https://payjs.cn/ref/ZVEMKD" target="_blank" >注册PayJs</a>&nbsp;&nbsp;&nbsp;【微信官方，微信正规渠道，强烈推荐】',
			'type'  => 'title'
		),
		array(
			'name'  => 'PayJs商户号',
			'desc'  => '',
			'id'    => 'git_payjs_id',
			'type'  => 'text',
			'std'   => 2333333333
		),
		array(
			'name'  => 'PayJs密钥',
			'desc'  => '',
			'id'    => 'git_payjs_secret',
			'type'  => 'text',
			'std'   => 444444444
		),
		array(
			'name'  => '支付宝支付',
			'desc'  => '启用 【本功能需要到Payjs后台申请使用支付宝支付，未申请或者申请未通过请勿开启，默认使用微信支付】',
			'id'    => 'git_payjs_alipay',
			'type'  => 'checkbox'
		)
	),
	'高级设置' => array(
			array(
				'name'  => '头像来源设置',
				'desc'  => '头像设置，云落强烈推荐选择随机头像，懒人选择',
				'id'    => 'git_avater',
				'type'  => 'radio',
				'options' => array(
					'git_avatar_rand' => '随机头像【速度最快但随机】',
					'git_avatar_qn' => '头像镜像【精确头像但速度略慢】'
				),
				'std'   => 'git_avatar_qn'
			),
			array(
				'name'  => 'jQuery来源设置',
				'desc'  => '选择一个适合自己的jQuery公共库来源',
				'id'    => 'git_jqcdn',
				'type'  => 'radio',
				'options' => array(
					'git_jqcdn_upai' => '远程jQuery库【底部加载，速度快，兼容差】',
					'git_jqcdn_bendi' => '本地jQuery库【头部加载，速度慢，兼容好】'
				),
				'std'   => 'git_jqcdn_upai'
			),
			array(
			'name'  => 'HTML代码压缩',
			'desc'  => '启用 【开启后，将压缩网页HTML代码，可读性会降低，但是性能略有提升】',
			'id'    => 'git_compress',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '图片懒加载',
			'desc'  => '启用 【开启后，网站图片将进行懒加载】',
			'id'    => 'git_lazyload',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '侧边栏缓存',
			'desc'  => '启用 【开启后，将会自动缓存小工具，如果想禁止缓存某个小工具，可以去小工具页面排除】',
			'id'    => 'git_sidebar_cache',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '开启前台弹窗登录',
			'desc'  => '如果启用UM插件,最好开启',
			'id'    => 'git_fancylogin',
			'type'  => 'checkbox'
		),
		array(
			'title' => '新浪微博同步设置',
			'type'  => 'title'
		),
		array(
			'name'  => '开启',
			'desc'  => '',
			'id'    => 'git_sinasync_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '新浪用户名',
			'desc'  => '最好输入您的微博的登陆邮箱',
			'id'    => 'git_wbuser_b',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '新浪密码',
			'desc'  => '请输入您的微博密码',
			'id'    => 'git_wbpasd_b',
			'type'  => 'password',
			'std'   => ''
		),
		array(
			'name'  => '新浪appkey',
			'desc'  => '请输入您的微博appkey，这个需要您自己去<a class="button-primary" target="_blank" href="http://open.weibo.com/webmaster/add" title="微博开放平台">微博开放平台</a>申请',
			'id'    => 'git_wbapky_b',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'title' => 'CDN镜像加速设置',
			'type'  => 'title'
		),
		array(
			'name'  => '开启',
			'desc'  => '',
			'id'    => 'git_qncdn_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => 'CDN加速域名',
			'desc'  => '输入本项目之前，必须开启本功能，输入您的七牛云自定义域名，必须带 <font color="#cc0000"><strong>http://</strong></font>  结尾不能带/  <a class="button-primary" target="_blank" href="https://gitcafe.net/go/qiniu" title="立刻注册七牛，免费使用免备案高速CDN">注册七牛</a>，并获取链接<a rel="nofollow" href="http://71bbs.people.com.cn/postImages/89/CF/7B/F5/1509845597173.jpg" target="_blank">如图</a>',
			'id'    => 'git_cdnurl_b',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => 'CDN镜像文件格式',
			'desc'  => '在输入框内添加准备镜像的文件格式，比如jpg，png，gif，mp3，mp4（使用|分隔）',
			'id'    => 'git_cdnurl_format',
			'type'  => 'text',
			'std'   => 'png|jpg|jpeg|gif|ico|html|7z|zip|rar|pdf|ppt|wmv|mp4|avi|mp3|txt'
		),
		array(
			'name'  => 'CDN镜像文件夹',
			'desc'  => '在输入框内添加准备镜像的文件夹，比如wp-content|wp-includes（使用|分隔）',
			'id'    => 'git_cdnurl_dir',
			'type'  => 'text',
			'std'   => 'wp-content|wp-includes'
		),
		array(
			'name'  => 'CDN自定义样式',
			'desc'  => '启用【使用七牛CDN可以不启用,其他CDN必须启用',
			'id'    => 'git_cdnurl_style',
			'type'  => 'checkbox'
		),
		array(
			'name'  => 'CDN水印',
			'desc'  => '启用【如果启用，请在七牛，又拍，OSS等CDN中设置自定义样式，名字为：<font color="#cc0000"><strong>water.jpg</strong></font>，分隔符为 ! 】',
			'id'    => 'git_cdn_water',
			'type'  => 'checkbox'
		),
		array(
			'name'  => 'CDN镜像后台化',
			'desc'  => '启用【一般可不启用，如果您启用CDN镜像之后并在FTP删除了本地文件，则必须开启】',
			'id'    => 'git_adminqn_b',
			'type'  => 'checkbox'
		),
		array(
			'title' => '微信登录设置',
			'type'  => 'title'
		),
		array(
			'name'  => '是否启用微信扫码登录',
			'desc'  => '启用 【开启后，新建微信登录页面即可，另外需要HTTPS】',
			'id'    => 'git_weauth_oauth',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '是否启用强制微信登录',
			'desc'  => '启用 【开启后，将禁用WordPress自带的登录，所有登录地址都跳转到微信的登录，如需临时使用自带登录，可以使用这个链接：你的域名/wp-login.php?loggedout=true】',
			'id'    => 'git_weauth_oauth_force',
			'type'  => 'checkbox'
		),
		array(
			'title' => '微信推送设置',
			'type'  => 'title'
		),
		array(
			'name'  => '评论微信推送提醒',
			'desc'  => '启用【开启后，如果网站有新的评论，可以给您的微信推送提醒，这个只是给网站管理员提醒，不涉及访客】',
			'id'    => 'git_Server',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '微信推送KEY',
			'desc'  => '请输入您的微信推送KEY',
			'id'    => 'git_Server_key',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '微信订阅号/公众号二维码',
			'desc'  => '请输入您的微信订阅号/公众号二维码图片链接，不要想得太多，只是给主题调用的。',
			'id'    => 'git_mp_qr',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '微信验证码',
			'desc'  => '请输入您的微信验证码，这里的必须要要和微信里面回复的保持一致。',
			'id'    => 'git_mp_code',
			'type'  => 'text',
			'std'   => '2233'
		),
		array(
			'name'  => '微信可见提示信息，可用html代码',
			'desc'  => '在本输入框内输入您的微信公众号描述信息，支持html代码，字数合适就行，不能太多',
			'id'    => 'git_mp_tips',
			'type'  => 'textarea',
			'std'   => '请关注极客公园官方微信公众号，关注并订阅<span style="color:#E96463;font-weight:bold;">云落极客公园</span>获取验证码。在微信里搜索<span style="color:#E96463;font-weight:bold;">云落极客公园</span>或者微信扫描二维码都可以关注极客公园官方微信公众号。'
		),
		array(
			'title' => 'HTML5 桌面推送',
			'type'  => 'title'
		),
		array(
			'name'  => 'HTML5推送标题【必选】',
			'desc'  => '显示在弹窗顶部',
			'id'    => 'git_notification_title',
			'type'  => 'text',
			'std'   => 'Hi，你好'
		),
		array(
			'name'  => 'HTML5推送间隔【必选】',
			'desc'  => '输入数字，当自动关闭或者用户关闭之后多久再次弹窗，默认10天',
			'id'    => 'git_notification_days',
			'type'  => 'number',
			'std'   => 10
		),
		array(
			'name'  => 'HTML5推送COOKIE【必选】',
			'desc'  => '修改COOKIE值可以强制向访客推送新的信息，无视时间间隔，不能使用中文，默认233',
			'id'    => 'git_notification_cookie',
			'type'  => 'text',
			'std'   => '233'
		),
		array(
			'name'  => 'HTML5推送图片【必选】',
			'desc'  => '填写一个正方形的图片，显示在推送信息左侧，默认为默认头像',
			'id'    => 'git_notification_icon',
			'type'  => 'text',
			'std'   => deel_avatar_default()
		),
		array(
			'name'  => 'HTML5推送链接【可选】',
			'desc'  => '当用户点击弹窗的时候说点击的链接，默认为极客公园',
			'id'    => 'git_notification_link',
			'type'  => 'text',
			'std'   => 'https://gitcafe.net'
		),
		array(
			'name'  => 'HTML5推送内容',
			'desc'  => '在这里输入推送主体内容，字数合适就行，不能太多【必选】',
			'id'    => 'git_notification_body',
			'type'  => 'textarea',
			'std'   => '极客公园，一个分享有趣的安卓APP和实用的WordPress技术以及Windows使用技巧的网站'
		),
		array(
			'title' => 'SMTP邮箱设置',
			'type'  => 'title'
		),
		array(
			'name'  => '发件人地址',
			'desc'  => '请输入您的邮箱地址',
			'id'    => 'git_maildizhi_b',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '发件人昵称',
			'desc'  => '请输入您的网站名称',
			'id'    => 'git_mailnichen_b',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => 'SMTP服务器地址',
			'desc'  => '请输入您的邮箱的SMTP服务器，查看<a class="button-primary" target="_blank" href="http://wenku.baidu.com/link?url=Xc_mRFw2K-dimKX845QalqLpZzly07mC4a_t_QjOSPov0uFx3MWTl3wgw4tOAyTbDlS7lT8TOAj8VOxDYU186wQLKPt1fKncz7k_jbP_RQi">查看常用SMTP地址</a>',
			'id'    => 'git_mailsmtp_b',
			'type'  => 'text',
			'std'   => 'smtp.qq.com'
		),
		array(
			'name'  => 'SSL安全连接',
			'desc'  => '启用【如果你布吉岛这个是什么东东，那么请不要启用】',
			'id'    => 'git_smtpssl_b',
			'type'  => 'checkbox'
		),
		array(
			'name'  => 'SMTP服务器端口',
			'desc'  => '请输入您的smtp端口，一般QQ邮箱25就可以了,如果选择了上面的SSL，推荐使用465端口',
			'id'    => 'git_mailport_b',
			'type'  => 'number',
			'std'   => 465
		),
		array(
			'name'  => '邮箱账号',
			'desc'  => '请输入您的邮箱地址，比如云落的sp91@qq.com',
			'id'    => 'git_mailuser_b',
			'type'  => 'text',
			'std'   => ''
		),
		array(
			'name'  => '邮箱密码',
			'desc'  => '请输入您的邮箱授权码',
			'id'    => 'git_mailpass_b',
			'type'  => 'password',
			'std'   => ''
		),
		array(
			'title' => '站内搜索设置',
			'type'  => 'title'
		),
		array(
			'name'  => '百度站内搜索',
			'desc'  => '开启 【开启百度站内搜索将关闭自带搜索】',
			'id'    => 'git_search_baidu',
			'type'  => 'checkbox'
		),
		array(
			'name'  => '百度站内搜索代码',
			'desc'  => '将从百度搜索获取的代码添加到本输入框',
			'id'    => 'git_search_code',
			'type'  => 'textarea',
			'std'   => ''
		),
		array(
			'title' => '下载设置',
			'type'  => 'title'
		),
		array(
			'name'  => '弹窗下载备注',
			'desc'  => '开启【主要填写一句对文件的普遍性备注，一般是下载方式，加密密码，解压方式等等】',
			'id'    => 'git_fancydlad',
			'type'  => 'text',
			'std'   => '本站文件全部采用7Z压缩，请使用7-Zip解压文件'
		),
		array(
			'name'  => '弹窗下载版权声明',
			'desc'  => '开启【就是那种本文件收集自网络，有问题联系站长那些装X的文字】',
			'id'    => 'git_fancydlcp',
			'type'  => 'textarea',
			'std'   => '本站所有软件和资料均为软件作者提供或网友推荐发布而来，仅供学习和研究使用，不得用于任何商业用途。如本站不慎侵犯你的版权请联系我，我将及时处理，并撤下相关内容！ '
		),
		array(
			'name'  => '下载面板下载声明',
			'desc'  => '这里的文字在下载面板中粗线，建议文字不要太多，防止错位',
			'id'    => 'git_dltable_b',
			'type'  => 'textarea',
			'std'   => '本站文件大多来自于网络，仅供学习和研究使用，不得用于商业用途，如有版权问题，请联系博猪！'
		),
		array(
			'name'  => '下载单页下载声明',
			'desc'  => '这里的文字在下载单页中粗线，采用<code>&lt;ol&gt;&lt;li&gt;文字&lt;/li&gt;&lt;/ol&gt;</code>的形式',
			'id'    => 'git_dlpage_dl',
			'type'  => 'textarea',
			'std'   => '<p>下载文件若出现其中一个渠道链接失效，可切换其其他渠道下载，若下载地址全部失效，请回复文章，博猪会第一时间更新！</p>
					<p>下载文件若为压缩包，亲留意文章中的解压密码，并尽量使用最新版压缩软件解压</p>
					<p>下载压缩包文件损坏，请切换其他渠道下载损坏部分</p>
					<p>以上如有疑问，请在文章中留言给博猪</p>'
		),
		array(
			'name'  => '下载单页免责声明',
			'desc'  => '这里的文字在下载单页中粗线，纯文字即可',
			'id'    => 'git_dlpage_mz',
			'type'  => 'textarea',
			'std'   => '本站大部分下载资源收集于网络，只做学习和交流使用，版权归原作者所有，若为付费内容，请在下载后24小时之内自觉删除，若作商业用途请购买正版，由于未及时购买和付费发生的侵权行为，与本站无关。本站发布的内容若侵犯到您的权益，请联系站长删除，我们将及时处理！'
		)
	)
);