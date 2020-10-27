<?php get_header(); ?>
<!--banner start-->
<div class="banner">
	<figure class="bannerbg hasbg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/banner.png" alt="データで未来を変えにいく" /></figure>
	<div class="bannercon">
		<h3>データ分析で事業成長を</h3>
	</div>
</div>
<!--banner end-->
<!--index_main start-->
<main class="index_main">
	<section class="index_mainone" id="team">
		<div class="common_tit">
			<h3>team</h3>
			<em>チーム</em>
			<hr />
		</div>
		<div class="index_mainonecon">
			<dl>
				<dt>
					<figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_mainonepic1.jpg" alt="園部 敦史" /></figure>
				</dt>
				<dd>
					<p>最高経営責任者(CEO)</p>
					<h6>園部 敦史</h6>
					<ul>
						<li><a href="https://www.facebook.com/atsushi.sonobe" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/facebook.png" alt="facebook" /></a></li>
						<li><a href="https://note.mu/sonobeatsushi" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/icon1.png" alt="" /></a></li>
					<!--<li><a href="https://twitter.com/snbats" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/twitter.png" alt="twitter" /></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/ins.png" alt="instagram" /></a></li> -->
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_mainonepic2.jpg" alt="那須川 進一" /></figure>
				</dt>
				<dd>
					<p>最高分析責任者(CAO)<br /> 兼最高財務責任者(CFO)	</p>
					<h6>那須川 進一</h6>
					<ul>
						<li><a href="https://www.facebook.com/shinichi.nasukawa" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/facebook.png" alt="facebook" /></a></li>
						<li><a href="https://nasu-shin-accounting.themedia.jp/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/icon2.png" alt="" /></a></li>
						<!--<li><a href="javascript:void(0);"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/twitter.png" alt="twitter" /></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/ins.png" alt="instagram" /></a></li> -->
					</ul>
				</dd>
			</dl>
		</div>
	</section>
	<section class="index_maintwo" id="message">
		<div class="common_tit">
			<h3>message</h3>
			<em>メッセージ</em>
			<hr />
		</div>
		<dl class="index_maintwocon wrapper">
			<dt>
				<figure class="hasbg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_maintwopic1.png" alt="" /></figure>
			</dt>
			<dd>
				<p>「近年、人口減少・少子化・高齢化などを背景に、労働生産性について議論がなされていますが、最も価値を産むべき現役世代の生産性について、もっと目を向けるべきだと弊社は考えています。</p>
				<p>それは「働き方改革」というキーワードで「仕事の生産性」だけを語るのではなく、育児や介護、余暇に至るまで、人生を味わい尽くすための生産性（満足度）をいかに上げていくか、という視点こそが重要になると思っています。</p>
				<p>若い世代が、もっと大胆に、未来に向かって挑戦することを応援していますし、弊社自身も挑戦する当事者でありたいと思います。	
インターネット革命で検索コストが劇的に下がったことで、世の中がとても便利になったように、今まさに、AI革命で予測コストが劇的に下がっていく時代に、私たちは生きています。	</p>
				<p>大量なデータを整えたり、繋げたり、予測する作業は機械に任せて自動化し、データから何かを読み解いたり、未来に思いを馳せることに時間やお金を投資できるようなお手伝いをしていきたいと考えています。 」</p>
			</dd>
		</dl>
	</section>
	<section class="index_mainthree" id="news">
		<div class="index_mainthreecon wrapper">
			<div class="index_mainthreeconl">
				<div class="common_tit">
					<h3>NEWS</h3>
					<em>おしらせ</em>
					<hr />
				</div>
			</div>
			<ul class="index_mainthreeconr">
				<?php
					query_posts('order=desc&cat=1&showposts=2');
					while (have_posts()):the_post();
				?>
				<li>
					<div>
						<p><?php the_time('Y'); ?></p>
						<h6><?php the_time('j'); ?></h6>
						<p><?php echo date('M',get_the_time('U'));?>.</p>
					</div>
					<a href="javascript:void(0);">
<!-- 						<h6><?php the_title(); ?></h6> -->
						<p><?php echo wp_trim_words(get_the_content(),66); ?></p>
					</a>
				</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>
	</section>
	<section class="index_mainfour" id="service">
		<div class="common_tit">
			<h3>service</h3>
			<em>サービス</em>
			<hr />
		</div>
		<div class="index_mainfourcon wrapper">
			<ul>
				<li>
					<a href="javascript:void(0);">
						<dl>
							<dt>
								<figure class="hasbg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_mainfourpic1.jpg" alt="ANALYSIS" /></figure>
							</dt>
							<dd>
								<h6>ANALYSIS</h6>
								<hr />
								<p>貴社が保有するデータを分析して、事業成長のドライバーを発見します。</p>
							</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<dl>
							<dt>
								<figure class="hasbg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_mainfourpic2.jpg" alt="MODELING" /></figure>
							</dt>
							<dd>
								<h6>MODELING</h6>
								<hr />
								<p>データ分析から説明変数を設定し、あらゆるものを予測するお手伝いをします。</p>
							</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<dl>
							<dt>
								<figure class="hasbg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_mainfourpic3.jpg" alt="STRATEGY" /></figure>
							</dt>
							<dd>
								<h6>STRATEGY</h6>
								<hr />
								<p>分析したデータをもとに、事業戦略および新規事業を立案します。</p>
							</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<dl>
							<dt>
								<figure class="hasbg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_mainfourpic4.jpg" alt="OPERATION" /></figure>
							</dt>
							<dd>
								<h6>OPERATION</h6>
								<hr />
								<p>MAや広告運用など、データをもとに実行する施策運用のお手伝いをします。</p>
							</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<dl>
							<dt>
								<figure class="hasbg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_mainfourpic5.jpg" alt="TRAINING" /></figure>
							</dt>
							<dd>
								<h6>TRAINING</h6>
								<hr />
								<p>社内にデータ人材を育成するサポートをします。</p>
							</dd>
						</dl>
					</a>
				</li>
			</ul>			
		</div>
	</section>
	<section class="index_mainfive" id="aboutUs">
		<div class="common_tit">
			<h3>About us</h3>
			<em>会社概要</em>
			<hr />
		</div>
		<div class="index_mainfivecon">
			<figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_mainfivepic1.jpg" alt="会社概要" /></figure>
			<div class="index_mainfiveconD">
				<div>
					<dl>
						<dt>会社名</dt>
						<dd>株式会社salud</dd>
					</dl>
					<dl>
						<dt>設立</dt>
						<dd>平成30年9月3日</dd>
					</dl>
					<dl>
						<dt>代表取締役</dt>
						<dd>園部敦史</dd>
					</dl>
					<dl>
						<dt>主要取引先</dt>
						<dd>株式会社日本経済社<br />LINE株式会社</dd>
					</dl>
				</div>
				<div>
					<dl>
						<dt>所在地</dt>
						<dd>東京都千代田区神田須田町1-14-1<br />ヒューリック神田須田町ビル301</dd>
					</dl>
					<dl>
						<dt>電話</dt>
						<dd><a href="tel:0368598338">03-6859-8338</a></dd>
					</dl>
					<dl>
						<dt>FAX</dt>
						<dd>03-6859-8231</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="index_mainfivemap wrapper">
			<div class="googlemap"></div>
		</div>
	</section>
	<section class="index_mainsix" id="recruitInfo">
		<dl>
			<dd>
				<h6>採用情報</h6>
				<h3>Recruit info</h3>
				<div class="more">
					<a href="javascript:void(0);">read more</a>
				</div>
			</dd>
			<dt>
				<figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/index_mainsixpic1.png" alt="" /></figure>
			</dt>
		</dl>
	</section>
	<section class="index_mainseven" id="contact">
		<div class="common_tit">
			<h3>contact</h3>
			<em>お問い合わせ</em>
			<hr />
		</div>
		<div class="index_mainsevencon">
			<?php echo do_shortcode('[contact-form-7 id="8" title="contact"]') ?>
		</div>
	</section>
</main>
<!--index_main end-->
<?php get_footer(); ?>