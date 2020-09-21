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
        <section class="contact main__forBg main__inner">
            <div class="contact__inner l-base">
                <div class="contact__ttlBlock main__ttlBlock">
                    <h1 class="contact__ttl pageTtl--en">CONTACT</h1>
                </div>
            </div>
        </section>
        <section class="contactForm">
            <div class="contactForm_inner l-base">
                <p class="contactForm__ttl mainTtl--jp">お問い合わせ</p>
                <p class="contactForm__subTtl">サービスのご相談やご利用について、こちらのフォームよりお問い合わせください。</p>
                <div class="contactForm__area">
                    <div class="contactForm__area--cell contactForm__name">
                        NAME
                    </div>
                    <div class="contactForm__area--cell contactForm__company">
                        COMPANY
                    </div>
                    <div class="contactForm__area--cell contactForm__mail">
                        E-MAIL
                    </div>
                    <div class="contactForm__area--cell contactForm__msg">
                        MESSAGE
                    </div>
                </div>

                <div class="viewDetails">
                    <a href="#">
                        <div class="viewDetails__inner">
                            <p class="viewDetails__ttl en">Send</p>
                            <p class="viewDetails__arrow arrowIcon"></p>
                        </div>
                    </a>
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
