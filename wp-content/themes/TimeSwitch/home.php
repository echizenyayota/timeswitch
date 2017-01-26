<?php get_header(); ?>
  <div class="box3">
        <dic class="top">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/header.jpg" alt="<?php bloginfo('description'); ?>" class="topimg">
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
                    <h1>わかりやすく視覚化</h1>
                    <p>配信情報はわかりやすく視覚化し、活用できるようにします。</p>
                </a>
            </div>
        </div>
        <div class="box6-3">
            <div class="gaiyou">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <h1>24時間サポート</h1>
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
                        <a href="#"><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
                              <div class="text">データセンターのメンテナンスを行います</div>
                        </a>
                    </li>
                    <li>
                        <a href="#"><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>1"><?php echo get_the_date(); ?></time>
                            <div class="text">Android アプリのバージョンを1.2にアップしました</div>
                        </a>
                    </li>
                    <li>
                        <a href="#"><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
                            <div class="text">セミナー開催に伴うキャンペーンについて</div>
                        </a>
                    </li>
                    <li>
                        <a href="#"><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
                            <div class="text">グラフ数字の切替方法が分かりやすくなりました</div>
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
<?php get_footer(); ?>
