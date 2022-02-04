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
        <div class="logo-main">
            <a href="#"><img src="<?php echo G5_THEME_URL?>/images/logo.png" alt="스카이스캐너"></a>
        </div>
        <div class="etc">
            <a href="#" class="help">도움말</a>
            <button>한국어 대한민국 \ KRW</button>
            <button>로그인</button>
        </div>
    </div>
    <div class="header-ticket">

    </div>
</header>
