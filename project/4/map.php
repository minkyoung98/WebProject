<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/bootstrap-4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome-free-5.1.0-web/css/all.css">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="../index.css" rel="stylesheet">
    <link href="../index2.css" rel="stylesheet">
    <title>그린가구</title>

<style>
#map{
    width : 80%;
    height : 400px;
    margin : 0 auto;
}
#shop_info{
    text-align: center;
    margin-top: 2em;
    margin-bottom: 2em;
}
#busStop{
    margin-left: 120px;
    margin-top: 30px;  
}
span{
    margin-left: 100px;
}
   
</style>
</head>
<body>

<?php include '../header.inc.php'; ?>
<?php include '../nav.inc.php'; ?>
<section id="section">
<aside id="aside">
    <div style="height: 40px;"></div>
    <div id="picNav"></div>
    <nav id="sideNav" class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="/project/1/ideology.php" id="navCompany">‧ 회사소개</a>
                <div class="dropdown-menu" id="dropCompany">
                    <a class="dropdown-item" href="/project/1/ideology.php">‧ 경영이념</a>
                    <a class="dropdown-item" href="/project/1/vision.php">‧ 경영비젼</a>
                    <a class="dropdown-item" href="/project/1/history.php">‧ 연혁</a>
                    <a class="dropdown-item" href="/project/1/plan.php">‧ 사업계획</a>
                    <a class="dropdown-item" href="/project/1/strategy.php">‧ 그린만의 전략</a>
                    <a class="dropdown-item" href="/project/1/news.php">‧ 그린소식</a>
                </div> 
            </li><!-- /회사소개 -->
            <li class="nav-item dropdown">
                <a class="nav-link" href="/project/2/operation.php" id="navInvest">‧ 투자정보</a>
                <div class="dropdown-menu" id="dropInvest">
                    <a class="dropdown-item" href="/project/2/operation.php">‧ 경영정보</a>
                    <a class="dropdown-item" href="/project/2/finance.php">‧ 재무정보</a>
                </div>
            </li><!-- /투자정보 -->
            <li class="nav-item dropdown">
            <a class="nav-link" href="/project/3/furniture.php" id="navOrder">‧ 가구주문</a>
                <div class="dropdown-menu" id="dropOrder">
                    <a class="dropdown-item" href="/project/3/furniture.php">‧ 그린의 가구</a>
                    <a class="dropdown-item" href="/project/3/production_process.php">‧ 제작과정</a>
                    <a class="dropdown-item" href="/project/3/delivery.php">‧ 배송과정</a>
                    <a class="dropdown-item" href="/project/3/editor.order_inquiry.php">‧ 주문문의</a>
                    <a class="dropdown-item" href="/project/3/editor.customer_consultation.php">‧ 고객상담</a>
                    <a class="dropdown-item" href="/project/3/editor.a_s.php">‧ A/S 접수</a>
                    <a class="dropdown-item" href="/project/3/serviceCenter.php">‧ 서비스센터</a>
                </div>
            </li><!-- /가구주문 -->
            <li class="nav-item dropdown">
                <a class="nav-link" href="/project/4/editor.notice.php" id="navCommunity">‧ 커뮤니티</a>
                <div class="dropdown-menu" href="/project/4/editor.notice.php" id="dropCommunity">
                    <a class="dropdown-item" href="/project/4/editor.notice.php">‧ 공지사항</a>
                    <a class="dropdown-item" href="/project/4/editor.customer_reviews.php">‧ 고객후기</a>
                    <a class="dropdown-item" href="/project/4/payment.php">‧ 개인결제창</a>
                    <a class="dropdown-item" href="/project/4/map.php">‧ 찾아오시는 길</a>
                </div>
            </li><!-- /커뮤니티 -->
        </ul>
    </nav>
    <div id="familySite">
        <div>~&nbsp;&nbsp;family site&nbsp;&nbsp;~</div>
        <div><a href="">‧ 그린몰</a></div>
        <div><a href="">‧ 그린서비스센터</a></div>
    </div>
</aside>
<main id="main" class="pl-5 pt-4 pr-5 border-left">
    <h3 class="pb-3 mb-4 font-italic border-bottom">Community</h3>
    <div class="blog-post">
        <div class="location">
            <p><a href="/project/index.php">메인화면</a> &gt; <a href="#">커뮤니티</a > &gt; <a href="#">찾아오시는길</a></p>
        </div>
        <h2 class="blog-post-title pb-2">찾아오시는 길</h2>
        <br>
    </div><!-- /.blog-post -->
    <div id="shop_info">
        <h2>Shop Info.</h2><br>
        TEL : 031-673-6781<br>
        FAX : 031-673-6786<br><br>
        ADDRESS : 경기도 안성시 대덕면 신창리 70-13
    </div>
    <hr>
    <div id="map"></div>
    <hr>
    <div id="busStop">
        <h4>버스정류장</h4><br>
        <div>명당1리 (34097) : 195m   <span><img src="bus.jpg">22-1|60|60-3|7-4</span></div>
        <div>명당1리 (34098) : 219m   <span><img src="bus.jpg">22-1|60|60-3|7-4</span></div>
    </div>
</main>
</section><!-- /section -->
<?php include '../footer.inc.php'; ?>
<a href="#logo"><div class="floating"></div></a>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/bootstrap-4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=cec0b7ac7a97afee6916efc4da2c4bd0"></script>
<script src="../index.js"></script>
<script src="../index2.js"></script>
<script>
    $(document).ready(function() {
        $('#basicNav #navCommunity').addClass('clicked');
        $('#sideNav #dropCommunity').show();
        $('#sideNav #dropCommunity > a:nth-child(4)').css({
            'font-weight': 'bold',
            color: 'salmon'
        });
    });
    $('#sideNav #navCommunity').hover(function() {
        $('#sideNav #dropCommunity').show();        
    }, function() {
        $('#sideNav #dropCommunity').show();
    });
</script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapCenter = new daum.maps.LatLng(37.049634, 127.201022), // 지도의 중심 좌표
    mapOption = {
        center: mapCenter, // 지도의 중심 좌표
        level: 3 // 지도의 확대 레벨
    };

// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
var map = new daum.maps.Map(mapContainer, mapOption);

// 지도에 올릴 마커를 생성합니다.
var mMarker = new daum.maps.Marker({
    position: mapCenter, // 지도의 중심좌표에 올립니다.
    map: map // 생성하면서 지도에 올립니다.
});

// 지도에 올릴 장소명 인포윈도우 입니다.
var mLabel = new daum.maps.InfoWindow({
    position: daum.maps.LatLng(37.049784, 127.203195), // 지도의 중심좌표에 올립니다.
    content: '그린가구' // 인포윈도우 내부에 들어갈 컨텐츠 입니다.
});

var infowindow = new daum.maps.InfoWindow({
    map: map,
    position: new daum.maps.LatLng(37.049759,127.203223),
    content: '명당1리 (34097)'
});

var infowindow = new daum.maps.InfoWindow({
    map: map,
    position: new daum.maps.LatLng(37.049646,127.203493),
    content: '명당1리 (34098)'
});
mLabel.open(map, mMarker); // 지도에 올리면서, 두번째 인자로 들어간 마커 위에 올라가도록 설정합니다.

</script>
</body>
</html>