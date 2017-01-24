<!DOCTYPE html>
<html lang="ja">
<head>
　<meta charset="UTF-8">
  <title>
    <?php wp_title( '|', true, 'right'); ?>
    <?php bloginfo('name'); ?>
  </title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo content_url(); ?>/css/normalize.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"
  <?php wp_head(); ?>
</head>
<body>
    <div class="boxA">
        <div class="boxA-inner">
            <div class="box1">
                <div class="site">
                    <h1><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo-large.png" alt="<?php bloginfo('name'); ?>" width="250" height="33"></a></h1>
                </div>
            </div>
            <div class="box2">
                <button type="button" id="menubtn">
                    <i class="fa fa-bars"></i><span>Menu</span>
                </button>
                <nav class="menu" id="menu">
                    <ul>
                        <li><a href="#">トップ</a></li>
                        <li><a href="#">沿革</a></li>
                        <li><a href="http://wocker.dev/html5_css3_designbook/contents.html">事業紹介</a></li>
                        <li><a href="#">採用情報</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="box3">
        <dic class="top">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/header.jpg" alt="" class="topimg">
            <p class="catch">TimeSwitchはデータの蓄積と</br>分析の解析サービスを提供します</p>
    </div>
    <div class="box6">
        <div class="box6-1">
            <div class="gaiyou">
                <a href="#">
                    <i class="fa fa-database"></i>
                    <h1>データの分析・解析</h1>
                    <p>目的に応じて様々な角度からデータを分析・解析します</p>
                </a>
            </div>
        </div>
        <div class="box6-2">
            <div class="gaiyou">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <h1>データの分析・解析</h1>
                    <p>目的に応じて様々な角度からデータを分析・解析します</p>
                </a>
            </div>
        </div>
        <div class="box6-3">
            <div class="gaiyou">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <h1>データの分析・解析</h1>
                    <p>目的に応じて様々な角度からデータを分析・解析します</p>
                </a>
            </div>
        </div>
    </div>
    <div class="box4">
        <div class="box4-1">
            <div class="news">
                <h1>お知らせ</h1>
                <ul>
                    <li>
                        <a href="#"><time datetime="2016-1-20">12/20</time>
                            <div class="text">1/20 データセンターのメンテナンスを行います</div>
                        </a>
                    </li>
                    <li>
                        <a href="#"><time datetime="2016-1-21">12/21</time>
                            <div class="text">1/21 データセンターのメンテナンスを行います</div>
                        </a>
                    </li>
                    <li>
                        <a href="#"><time datetime="2016-1-22">12/22</time>
                            <div class="text">1/22 データセンターのメンテナンスを行います</div>
                        </a>
                    </li>
                    <li>
                        <a href="#"><time datetime="2016-1-22">12/22</time>
                            <div class="text">1/23 データセンターのメンテナンスを行います</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box4-2">
            <div class="follow">
                <p clas="follow-info">最新情報はこちらでも配信しています</p>
                <ul>
                    <li>
                        <a href="#" class="follow-tw">
                        <i class="fa fa-fw fa-twitter"></i>
                            Twitter
                        </a>
                    </li>
                    <li>
                        <a href="#" class="follow-fb">
                        <i class="fa fa-fw fa-facebook"></i>
                            Facebook
                        </a>
                    </li>
                    <li>
                        <a href="#" class="follow-gp">
                        <i class="fa fa-fw fa-google-plus"></i>
                            Google+
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="box5">
        <div class="box5-inner">
            <div class="copyright">
                <p>copyright &copy; TimeSwitch</p>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script>
        $(function() {
            $('#menubtn').click(function() {
                $('#menu').slideToggle();
            });
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
