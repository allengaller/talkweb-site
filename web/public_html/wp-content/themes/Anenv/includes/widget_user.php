<?php
    global $user_ID, $user_identity, $user_email, $user_login;
    get_currentuserinfo();
    if (!$user_ID) {
?>
<form id="loginform" action="<?php echo get_settings('siteurl'); ?>/wp-login.php" method="post"><h3>用户登录</h3>
<p><label>用户名：<input class="login" type="text" name="log" id="log" value="" size="12" /></label></p>
<p><label>密　码：<input class="login" type="password" name="pwd" id="pwd" value="" size="12" /></label></p>
<p><input class="denglu" type="submit" name="submit" value="登陆" /> <label>记住我 <input id="comment_mail_notify" type="checkbox" name="rememberme" value="forever" /></label></p>
<p><input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/></p>
</form>
<?php } else { ?>
<h3>用户管理</h3>
<p>
<div class="v_avatar">
    <?php echo An_get_avatar($user_email, 64); ?>
</div>
<div class="v_li">
    <li><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php">撰写文章</a></li>
    <li><a href="<?php bloginfo('url') ?>/wp-admin/edit-comments.php">评论管理</a></li>
    <li><a href="<?php bloginfo('url') ?>/wp-admin/">控制面板</a></li>
    <li><a href="<?php bloginfo('url') ?>/wp-login.php?action=logout&amp;redirect_to=<?php echo urlencode($_SERVER['REQUEST_URI']) ?>">注销登陆</a></li>
</div>
</p>
<div class="clear"></div>
<?php } ?>