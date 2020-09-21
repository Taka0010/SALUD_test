<!doctype html>
<html>

<head>
    <meta charset="UTF-8">

    <title>
        <?= $title ?>
    </title>
    <meta name="description" content="<?= $description ?>">
    <?php $Path = "../"; include("../inc/meta.php"); ?>
    <?php $Path = "../"; include("../inc/head.php"); ?>
</head>

<body>
    <!-- ▼▼▼ 共通ヘッダーエリア ▼▼▼-->
    <div class="l-header">  
        <?php $Path = "../"; include("../inc/header.php"); ?>
    </div>
    <!-- ▲▲▲ 共通ヘッダーエリア ▲▲▲-->



    <!-- ▼▼▼ 各ページの記述エリア ▼▼▼-->
    <main class="main">
        <section class="service main__forBg main__inner">
            <div class="service__inner l-base">
                <div class="service__ttlBlock main__ttlBlock wow fadeInLeft">
                    <h1 class="service__ttl pageTtl--en">SERVICE</h1>
                    <h2 class="service__ttl mainTtl--jp">デジタルマーケティングの<br class="onlyShowForSp">知見を生かした<br class="onlyShowForBigPc">ビジネス開発支援を</h2>
                </div>
                
                <div class="service__exp">
                    <div class="service__exp--txt wow fadeInLeft">
                        <p>近年、人口減少・少子化・高齢化などを背景に、労働生産性について議論がなされていますが、最も価値を産むべき現役世代の生産性について、もっと目を向けるべきだと弊社は考えています。</p>
                        <p>それは「働き方改革」というキーワードで「仕事の生産性」だけを語るのではなく、育児や介護、余暇に至るまで、人生を味わい尽くすための生産性（満足度）をいかに上げていくか、という視点こそが重要になると思っています。</p>
                        <p>若い世代が、もっと大胆に、未来に向かって挑戦することを応援していますし、弊社自身も挑戦する当事者でありたいと思います。 インターネット革命で検索コストが劇的に下がったことで、世の中がとても便利になったように、今まさに、AI革命で予測コストが劇的に下がっていく時代に、私たちは生きています。<br>大量なデータを整えたり、繋げたり、予測する作業は機械に任せて自動化し、データから何かを読み解いたり、未来に思いを馳せることに時間やお金を投資できるようなお手伝いをしていきたいと考えています。</p>
                    </div>
                    <div class="service__exp--img">
                        <img src="../img/service/circles.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        
        <section class="servicePoints">
            <div class="servicePoints__inner l-base">
                <div class="servicePoints__container servicePoints__fst wow fadeInLeft" data-wow-delay=".2s">
                    <p class="servicePoints__num">01</p>
                    <div class="servicePoints__box">
                        <h3 class="servicePoints__ttl">コンサルティング</h3>
                        <div class="servicePoints__exp">
                            <p class="servicePoints__txt">当社はデジタルマーケティング専門会社の出身者により設立されました。<br>業界の知見を生かし、経営に必要なシンプルなKPI設計や計画策定から、顧客分析や広告/CRM、DB設計開発、BI構築、各種ツール連携など実行まで、一気通貫でサポートしています。</p>
                            <ul class="servicePoints__lists">
                                <li class="servicePoints__list">CDP/CRM/SFAの構築及び運用</li>
                                <li class="servicePoints__list">機械学習モデル構築</li>
                                <li class="servicePoints__list">広告運用</li>
                                <li class="servicePoints__list">システム開発</li>
                                <li class="servicePoints__list">ECサイト運営代行(パートナー：<a href="#"><span>amamall</span><img src="../img/service/external-link-alt-solid.svg"></a>)</li>
                                <li class="servicePoints__list">クリエイティブ制作(パートナー：<a href="#"><span>ARUTEGA</span><img src="../img/service/external-link-alt-solid.svg"></a>)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="servicePoints__container servicePoints__sec wow fadeInLeft" data-wow-delay=".2s">
                    <p class="servicePoints__num">02</p>
                    <div class="servicePoints__box">
                        <h3 class="servicePoints__ttl">ソリューション</h3>
                        <div class="servicePoints__exp">
                            <p class="servicePoints__txt">世の中の不便や不都合を解決するため、デジタルベースのソリューションを企画・開発しています。<br>データ取得デバイスの開発やAIを自ら開発する場合もあれば、隠れたシンプルなアイデアを既存技術で数週間で立ち上げることもあります。</p>
                            <div class="servicePoints__lists">
                                <dl>
                                    <dt>ヘルスケア領域</dt>
                                    <dd>疾患管理SaaS</dd>
                                    <dt>その他</dt>
                                    <dd>予約管理システム</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="servicePoints__container servicePoints__trd wow fadeInLeft" data-wow-delay=".2s">
                    <p class="servicePoints__num">03</p>
                    <div class="servicePoints__box">
                        <h3 class="servicePoints__ttl">R&D</h3>
                        <div class="servicePoints__exp">
                            <p class="servicePoints__txt">当社はデジタル・トランスフォーメーションの潮流に乗りながら、事業を創出し、推進する会社です。そのためには、学際的な研究開発が欠かせず、高専・大学や研究機関、行政とも連携しながら、生活者の課題を解決する研究及び技術開発に貢献します。</p>
                            <ul class="servicePoints__lists">
                                <li class="servicePoints__list">一般財団法人 人生100年社会デザイン財団(賛助会員) ※10月に財団設立</li>
                                <li class="servicePoints__list">特定非営利活動法人Learning for All（協賛）</li>
                                <li class="servicePoints__list">IoT自転車による移動データ追跡システム<br>[特願2019-109523「自転車情報提供システム]</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ▲▲▲ 各ページの記述エリア ▲▲▲-->



    <!-- ▼▼▼ 共通コンバージョンボタン ▼▼▼-->
    <div class="l-btn l-base">
        <?php $Path = "../"; include("../inc/cvBtn.php"); ?>
    </div>
    <!-- ▲▲▲ 共通コンバージョンボタン ▲▲▲-->

    <!-- ▼▼▼ 共通フッターエリア ▼▼▼-->
    <div class="l-footer">
        <?php $Path = "../"; include("../inc/footer.php"); ?>
    </div>
    <!-- ▲▲▲ 共通フッターエリア ▲▲▲-->
    <?php $Path = "../"; include("../inc/script.php"); ?>
    
</body>

</html>
