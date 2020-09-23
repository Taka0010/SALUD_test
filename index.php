<!doctype html>
<html>

<head>
	<meta charset="UTF-8">

	<title>
		<?= $title ?>
	</title>
	<meta name="description" content="<?= $description ?>">
	<?php $Path = "./"; include("inc/meta.php"); ?>
	<?php $Path = "./"; include("inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="./css/topStyle.css">
</head>

<body>
	<!-- ▼▼▼ 共通ヘッダーエリア ▼▼▼-->
	<div class="l-header">
		<?php $Path = "./"; include("inc/header.php"); ?>
	</div>
	<!-- ▲▲▲ 共通ヘッダーエリア ▲▲▲-->



	<!-- ▼▼▼ 各ページの記述エリア ▼▼▼-->
	<main class="main">
		<div class="main__forBg">
			<section class="mv">
				<div class="mv__ttl">
					<h1 class="mv__ttl--jp jp">デジタル<span>で、</span>加速する。</h1>
					<p class="mv__ttl--en en">DIGITAL × CONSULTING</p>
					<p class="mv__logo"><img src="img/common/logo.svg" alt="salud"></p>
				</div>
				<div class="mv__imgContainer">
					<p class="mv__simbol"><img src="img/top/mainSimbol.png"></p>
					<p class="mv__simbol--sub1"><img src="img/top/subSimbol_01.png"></p>
					<p class="mv__simbol--sub2 onlyShowForPc"><img src="img/top/subSimbol_02.png"></p>
				</div>
			</section>

			<section class="whoWeAre">
				<div class="whoWeAre__inner l-base">
					<div class="whoWeAre__container">
						<div class="whoWeAre__pcLayout">
							<div class="whoWeAre__pcLayout--inner wow fadeInUp">
								<div class="whoWeAre__ttlContainer">
									<h2 class="whoWeAre__ttl--en en">WHO WE ARE</h3>
										<h2 class="whoWeAre__ttl--jp jp">豊かさ<span>を</span>研究<span>する</span>会社</h2>
								</div>
								<div class="whoWeAre__exp jp">
									<p>「salud」はスペイン語で「乾杯」「健康」といった意味を持ちます。<br>コンサルティングやソリューションなど、当社が携わる事業を通じて一人でも多くの方々の心身の豊かさに貢献したい、という想いが込められています。
										IT革命以降、検索や消費、最近は仕事もデジタル化が進みました。今後AIにより予測コストが逓減されれば、より一層進化が加速することでしょう。<br>ただし、社会の効率化が進む一方で、自分自身と向き合い、多くの人が豊かさを手に入れているかと言えば、まだまだ改善の余地がありそうです。もちろん、その定義は曖昧で、正解はないと思います。だからこそ、研究し、仮説検証するためにも、行動が必要だと感じています。</p>
								</div>
								<div class="viewDetails">
									<a href="/about/">
										<div class="viewDetails__inner">
											<p class="viewDetails__ttl en">View details</p>
											<p class="viewDetails__arrow arrowIcon"></p>
										</div>
									</a>
								</div>
							</div>
						</div>
						<p class="whoWeAre__pic">
							<picture>
								<source media="(min-width: 600px)" srcset="img/top/scenery_pc.jpg">
								<source media="(min-width: 321px)" srcset="img/top/scenery_sp.jpg">
								<img src="img/top/scenery_sp.jpg">
							</picture>
						</p>
					</div>
				</div>
			</section>
		</div>


		<section class="news">
			<div class="news__inner l-base">
				<div class="blockTtl">
					<h3 class="blockTtl__ctg en">NEWS</h3>
					<div class="blockTtl__all">
						<a href="#">
							<p class="blockTtl__all--txt en">All list</p>
							<p class="blockTtl__all--icon"><img src="img/common/icon-grid.png"></p>
						</a>
					</div>
				</div>
				<ul class="news__items">
					<li class="news__item wow fadeInUp">
						<a href="#">
							<div class="news__item--left">
								<time class="news__item--date en">2020.09.28</time>
								<p class="news__item--txt jp">webサイトをリニューアルいたしました。</p>
							</div>
							<div class="news__item--right">
								<div class="news__item--icon arrowIcon"></div>
							</div>
						</a>
					</li>
					<li class="news__item wow fadeInUp" data-wow-delay=".3s">
					
							<div class="news__item--left">
								<time class="news__item--date en">2020.09.20</time>
								<p class="news__item--txt jp">特許を取得いたしました。</p>
							</div>
							<div class="news__item--right">
								<div class="news__item--icon arrowIcon"></div>
							</div>
					</li>
				</ul>
			</div>
		</section>
<!--

		<section class="blog">
			<div class="blog__inner l-base">
				<div class="blockTtl">
					<h3 class="blockTtl__ctg en">BLOG</h3>
					<div class="blockTtl__all">
						<a href="#">
							<p class="blockTtl__all--txt en">All list</p>
							<p class="blockTtl__all--icon"><img src="img/common/icon-grid.png"></p>
						</a>
					</div>
				</div>
				<ul class="blog__items">
					<li class="blog__item wow fadeInUp">
						<a href="#">
							<figure class="blog__item--img"><img src="img/top/blogPic_01.jpg"></figure>
							<div class="blog__item--txt">
								<div class="blog__item--upper">
									<time class="blog__item--date en">2020/08/20</time>
									<div class="blog__item--ctg en">Column</div>
								</div>
								<div class="blog__item--catch jp">人工太陽を作り出す？未来の新エネルギー「核融合」</div>
							</div>
						</a>
					</li>
					<li class="blog__item wow fadeInUp" data-wow-delay=".2s">
						<a href="#">
							<figure class="blog__item--img"><img src="img/top/blogPic_01.jpg"></figure>
							<div class="blog__item--txt">
								<div class="blog__item--upper">
									<time class="blog__item--date en">2020/08/20</time>
									<div class="blog__item--ctg en">Column</div>
								</div>
								<div class="blog__item--catch jp">人工太陽を作り出す？未来の新エネルギー「核融合」</div>
							</div>
						</a>
					</li>
					<li class="blog__item wow fadeInUp" data-wow-delay=".4s">
						<a href="#">
							<figure class="blog__item--img"><img src="img/top/blogPic_01.jpg"></figure>
							<div class="blog__item--txt">
								<div class="blog__item--upper">
									<time class="blog__item--date en">2020/08/20</time>
									<div class="blog__item--ctg en">Column</div>
								</div>
								<div class="blog__item--catch jp">人工太陽を作り出す？未来の新エネルギー「核融合」</div>
							</div>
						</a>
					</li>
				</ul>

				<div class="viewDetails">
					<a href="#">
						<div class="viewDetails__inner">
							<p class="viewDetails__ttl en">View details</p>
							<p class="viewDetails__arrow arrowIcon"></p>
						</div>
					</a>
				</div>
			</div>
		</section>
		
-->
		
	</main>
	<!-- ▲▲▲ 各ページの記述エリア ▲▲-->

	<!-- ▼▼▼ 共通コンバージョンボタン ▼▼▼-->
	<div class="l-btn">
		<?php $Path = "./"; include("inc/cvBtn.php"); ?>
	</div>
	<!-- ▲▲▲ 共通コンバージョンボタン ▲▲▲-->

	<!-- ▼▼▼ 共通フッターエリア ▼▼▼-->
	<div class="l-footer">
		<?php $Path = "./"; include("inc/footer.php"); ?>
	</div>
	<!-- ▲▲▲ 共通フッターエリア ▲▲▲-->
	<script src="js/topScript.js"></script>
	<?php $Path = "./"; include("inc/script.php"); ?>

</body>

</html>
