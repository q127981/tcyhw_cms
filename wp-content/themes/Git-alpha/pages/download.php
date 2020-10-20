<?php
/*
	template name: 下载模板页面
	description: template for Git theme
*/

?>
<?php
$pid = isset( $_GET['pid'] ) ? trim(htmlspecialchars($_GET['pid'], ENT_QUOTES)) : '';
if( !$pid ) { wp_die('下载页面不是直接打开的哦');}
$title = get_the_title($pid);
$theCode1 = get_post_meta( $pid, 'git_download_name', true );
$theCode2 = get_post_meta( $pid, 'git_download_size', true );
$theCode3 = get_post_meta( $pid, 'git_download_link', true );

if(empty($theCode1)){ $theCode1 = '不知名文件';}
if(empty($theCode2)){ $theCode2 = '未知大小';}
if( empty($theCode3) ) { wp_die('不填写文件下载链接是不可以的哦');}

get_header();
?>
<style type="text/css">#filelink a:hover{background:#4094EF none repeat scroll 0 0;color:#FFF!important;transition-duration:.3s;border-color:#FFF}#filelink a{margin:25px 15px 25px 0px;color:#4094EF!important;padding:5px 50px;font-family:微软雅黑,"Microsoft YaHei";font-size:19px;border:1px solid #4094EF;box-shadow:0 1px 3px rgba(0,0,0,.1)}</style>
<div class="pagewrapper clearfix">
		<header class="pageheader clearfix">
			<h1 class="pull-left">
				<a href="<?php the_permalink($pid) ?>"><?php echo $title; ?></a>
			</h1>
			<div class="pull-right"><!-- 百度分享 -->
	<?php deel_share() ?>
			</div>
		</header>
		<?php while (have_posts()) : the_post(); ?>
			<div class="article-content">
<!-- 文章上方 -->
<?php if( git_get_option('git_downloadad1') ) echo git_get_option('git_downloadad1'); ?>
            <h2>资源信息</h2>
			<div class="alert alert-success">
			<ul class="infos clearfix">
                <li>资源名称：<?php echo $theCode1; ?></li>
				<li>文件大小：<?php echo $theCode2; ?></li>
				<li>更新日期：<?php echo get_post($pid)->post_modified; ?></li>
				</ul>
			</div>
            <h2>下载地址</h2>
            <div id="filelink">
				<center>
				<?php
					if ($theCode3) {
    					$git_download_linkss = explode("\n", $theCode3);
    					foreach ($git_download_linkss as $git_download_links) {
        					$git_download_links = explode(",", $git_download_links);
        					echo '<a href="' . trim($git_download_links[0]) . '"target="_blank" rel="nofollow" data-original-title="' . esc_attr(trim($git_download_links[2])) . '" title="' . esc_attr(trim($git_download_links[2])) . '">' . trim($git_download_links[1]) . '</a>';
    						}
						}
				?>
				</center>
            </div>
			<div class="clearfix"></div>
            <h2>下载说明</h2>
			<div class="alert alert-info" role="alert">
            <?php if( git_get_option('git_dlpage_dl') ) echo git_get_option('git_dlpage_dl'); ?>
            </div>
            <h2>免责声明</h2>
			<div class="alert alert-warning" role="alert">
			<p><?php if( git_get_option('git_dlpage_mz') ) echo git_get_option('git_dlpage_mz'); ?></p>
			</div>
<!-- 下载页横幅 -->
<?php if( git_get_option('git_downloadad2') ) echo git_get_option('git_downloadad2'); ?>
			</div>
		<?php comments_template('', true); endwhile;  ?>
</div>
<?php get_footer(); ?>