<?php get_header(); ?>

<div id="page">

    <!-- ヘッダーここから -->
    <header id="header">
        ヘッダー
    </header>
    <!-- ヘッダーここまで -->

    <main id="main">

        <!-- メインビジュアルここから -->
        <section id="mv">
            メインビジュアル
        </section>
        <!-- メインビジュアルここまで -->

        <!-- 活動内容ここから -->
        <section id="activity">
            <div class="container">
                <div class="row">
                    <div class="contents">
                        <div class="title">
                            <h2 style="margin:0;">Activity</h2>
                            <p>活動内容</p>
                        </div>
                        <div class="message">
                            <p>
                                天文同好会は星空を見るのが好きな人が集まるサークルです。月に数度、長野にある山小屋に星を見に行きます。普段はカメラ班、星座班、望遠鏡班に別れて活動したり全体で遊んだりしてます。天文に詳しい人もたくさんいますがそれ以上に、詳しくないが星を見たい人、仲間とわいわいしたい人もたくさんいるので気軽にsns等に連絡ください。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <img src="<?php echo get_theme_file_uri('src/activity.jpg'); ?>" alt="images">
                </div>
            </div>
            
        </section>
        <!-- 活動内容ここまで -->

        <!-- 歴史ここから -->
        <section id="history">
            <div class="container">
                <div class="row">
                    <div class="images">
                        <div><img src="<?php echo get_theme_file_uri('src/history-01.png'); ?>" alt="" /></div>
                        <div><img src="<?php echo get_theme_file_uri('src/history-02.png'); ?>" alt="" /></div>
                        <div><img src="<?php echo get_theme_file_uri('src/history-03.png'); ?>" alt="" /></div>
                    </div>
                </div>
                <div class="row">
                    <div class="contents">
                        <div class="title">
                            <h2 style="margin:0;">History</h2>
                            <p>歴史</p>
                        </div>
                        <div class="message">
                            <p>1960年に設立された歴史の長いサークルです。サークルが長野に山小屋を所有、また性能のいい望遠鏡を何本も受け継いできました。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 歴史ここまで -->

        <!-- 活動場所ここから -->
        <section id="place">
            活動場所
        </section>
        <!-- 活動場所ここまで -->

        <!-- お問い合わせここから -->
        <section id="contact">
            ここにコーディングお願いします。
        </section>
        <!-- お問い合わせここまで -->

    </main>

    <!-- フッターここから -->
    <footer id="footer">
        ここにコーディングお願いします。
    </footer>
    <!-- フッターここまで -->

</div>

<?php get_footer(); ?>