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
        <section class="about main__forBg main__inner">
            <div class="about__inner l-base">
                <div class="about__ttlBlock main__ttlBlock">
                    <h1 class="about__ttl pageTtl--en">ABOUT</h1>
                    <nav class="about__nav">
                        <ul class="about__nav--lists">
                            <li class="about__nav--list"><a href="#vision">VISION</a></li>
                            <li class="about__nav--list"><a href="#mission">MISSION</a></li>
                            <li class="about__nav--list"><a href="#member">MEMBER</a></li>
                            <li class="about__nav--list list-last"><a href="#company">COMPANY</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            
            <div class="about__inner l-base" id="vision">
                <div class="about__vision">
                    <div class="about__ttlBox wow fadeInUp">
                        <div class="about__enTtl">VISION</div>
                        <div class="about__jpTtl">こころ<span>と</span>からだ<span>の</span><br>豊さ<span>を</span>。</div>
                    </div>
                    <div class="about__txtBox wow fadeInUp">
                        <p>限りある人生を充実させ、満足度を高めるためにできることは、人それぞれなのだと思います。</p>
                        <p>寝食を忘れ没頭できる仕事がある、心と体の健康が保たれる、自分の人生と肯定的に向き合える、愛する家族と食事を楽しむ、友だちとくだらない話で盛り上がる、大好きな酒やタバコを味わう、誰も発見したことがない何かに辿り着く、スタイルは十人十色でいい。</p>
                        <p>私たちは、誰かの人生の豊かさに寄与することで社会全体の満足度の総和を大きくします。</p>
                    </div>
                </div>
            </div>

            <div class="about__forBg">
                <div class="about__vision--pic">
                    <picture>
                        <source media="(min-width: 600px)" srcset="../img/about/scenery_pc.jpg">
                        <source media="(min-width: 321px)" srcset="../img/about/scenery_sp.jpg">
                        <img src="img/top/scenery_sp.jpg">
                    </picture>
                </div>
                <div class="about__inner l-base" id="mission">
                    <div class="about__mission">
                        <div class="about__ttlBox wow fadeInUp">
                            <div class="about__enTtl">MISSION</div>
                            <div class="about__jpTtl">人生<span>の</span>満足度<span>に</span><br>貢献する</div>
                        </div>
                        <div class="about__txtBox wow fadeInUp">
                            <p>日本で少子化・高齢化が問題視されてしばらく経ちます。長生きできる世の中に感謝しつつ、人生の選択肢が多様化したことや社会構造の変化にシステムが対応できていない現状があると考えています。</p>
                            <p>私たちは、テクノロジーの力によって、人が漠然と抱える不安を明らかにし、その解決方法となり得る選択肢を届けます。<br>結果として、より多くの人が、満足度高く生きられる社会をつくりたいと考えています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="member" id="member">
            <div class="member__inner l-base">
                <h1 class="member__ttl pageTtl--en">CORE MEMBER</h1>
            </div>
            <div class="member__container l-base">
                <div class="member__box member__box--fst">
                    <div class="member__port wow fadeInUp">
                        <figure class="member__pic"><img src="../img/about/mr_sonobe.jpg" alt="園部 敦史"></figure>
                        <div class="member__posiName">
                            <p class="member__position">代表取締役</p>
                            <p class="member__name">園部 敦史</p>
                        </div>
                    </div>
                    <div class="member__introduction onlyShowForSp wow fadeInUp">
                        <p>株式会社インテリジェンス（現パーソルキャリア株式会社）で営業として従事。その後、プライマル株式会社にて
通信会社と⾃然⾔語処理による機械翻訳DB開発事業を担当。デジタル・アドバタイジング・コンソーシアム株式
会社でマーケティングデータ活⽤⽀援、株式会社FiNC Technologiesでヘルスケアメディアの広告事業開発を経験。<br>2018年、株式会社saludを創業。現在、データ取得及び活⽤に関連する特許出願中<br>2012年、関⻄⼤学法学部法律学科卒業。専攻は政治哲学。</p>
                    </div>
                </div>
                <div class="member__box member__box--sec">
                    <div class="member__port wow fadeInUp">
                        <figure class="member__pic"><img src="../img/about/mr_nasukawa.jpg" alt="那須川 進⼀"></figure>
                        <div class="member__posiName">
                            <p class="member__position">取締役CAO</p>
                            <p class="member__name">那須川 進⼀</p>
                        </div>
                    </div>
                    <div class="member__introduction onlyShowForSp wow fadeInUp">
                        <p>あずさ監査法⼈で⽶国及び⽇本基準での会計監査業務に従事。その後、マーサージャパン株式会社でM&Aデュー
デリジェンスやSO公正価値評価、デジタル・アドバタイジング・コンソーシアム株式会社で広告アルゴリズム開
発、少額短期保険事業者の株式会社justInCaseの共同創業など経験。インターネット広告に関連する複数特許保
有。公認会計⼠。⽇本アクチュアリー正会員。データサイエンティスト。2019年、株式会社saludへ参画。<br>2005年、東京⼤学理学部数学科卒業。専攻は解析学。</p>
                    </div>
                </div>
                <div class="member__box member__box--thd onlyShowForPc wow fadeInUp">
                    <p>JOIN US</p>
                </div>
            </div>
        </section>

        <section class="company" id="company">
            <div class="company__inner l-base">
                <h1 class="company__ttl pageTtl--en">COMPANY</h1>
                <table class="company__table">
                    <tr>
                        <th>会社名</th>
                        <td>株式会社salud</td>
                    </tr>
                    <tr>
                        <th>代表取締役</th>
                        <td>園部 敦史</td>
                    </tr>
                    <tr>
                        <th>本社</th>
                        <td>東京都中央区日本橋小網町8番2号<br class="onlyShowForSp">BIZMARKS日本橋茅場町</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>2018年9月3日</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>1,000,000円</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>1. デジタルマーケティングに関するコンサルティング事業</br>
                            2. デジタルを活用したソリューション事業
                        </td>
                    </tr>
                </table>
                <div class="company__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.792709775195!2d139.77829981525892!3d35.68210578019413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018895a7d729cad%3A0xdb63d43d38810283!2zQklaTUFSS1Pml6XmnKzmqYvojIXloLTnlLo!5e0!3m2!1sja!2sjp!4v1600276895189!5m2!1sja!2sjp" width="1120" height="390" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>

        <section class="aboutLogo">
            <div class="aboutLogo__inner l-base">
                <div class="aboutLogo__box">
                    <p class="aboutLogo__img"><img src="../img/common/logo.svg" alt="salud"></p>
                    <div class="aboutLogo__expContainer">
                        <p class="aboutLogo__expContainer--txt">当社のブランドロゴは、日本の伝統製材技法である「契り」をモチーフにしています。<br>契りは、木工家具などで木材の割れの防止のために用いられ、木々同士を繋ぎ合せる役割を担います。様々な変化により社会の不安や亀裂が広がることのないよう、繋ぎ合わせる存在になりたいという想いを込めています。</p>
                        <figure class="aboutLogo__expContainer--pic"><img src="../img/about/logo_details.svg"></figure>
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
