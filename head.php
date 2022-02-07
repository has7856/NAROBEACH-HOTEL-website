<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->

<header>
    <div class="header-top">
        <ul>
            <li>홈</li>
            <?php if(!$is_member) {?>
                <li><a href="<?php echo G5_BBS_URL?>/login.php">로그인</a></li>
                <li>회원가입</li>
            <?php }else{?>
                <?php if($is_admin){ ?>
                <li><a href="<?php echo G5_ADMIN_URL?>">관리자</a></li>
                <?php }?>
                <li><a href="<?php echo G5_BBS_URL?>/logout.php">로그아웃</a></li>
                <li><a href="<?php echo G5_BBS_URL?>/member_confirm.php">정보수정</a></li>
            <?php }?>
                <li><a href="<?php echo G5_BBS_URL?>/content.php?co_id=sitemap">사이트맵</a></li>
        </ul>
    </div>
    <div class="header-main">
        <div class="logo">로고</div>
        <nav>
            <ul>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">ROOMS</a></li>
                <li><a href="#">FACILITY</a></li>
                <li><a href="#">RESERVATION</a></li>
                <li><a href="#">TOURIST</a></li>
                <li><a href="#">CUSTOMER</a></li>
            </ul>
        </nav>
    </div>
</header>
