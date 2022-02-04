<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<section>
    <article>
        <div class="ticketing">
            <div class="ticket-btns">
                <button id="ticket_airplane" class="selected"><i class="fa fa-plane" aria-hidden="true"></i> 항공권</button>
                <button id="ticket_hotel"><i class="fa fa-building" aria-hidden="true"></i> 호텔</button>
                <button id="ticket_rent"><i class="fa fa-car" aria-hidden="true"></i> 렌터카</button>
            </div>
        </div>
    </article>
</section>

<?php
include_once(G5_THEME_PATH.'/tail.php');