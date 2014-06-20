</section>
</section>
<section class="accueil slider-home">
	<?php foreach ($sliders as $key => $slider): ?>
		<div>
			<div class="container-slider-desc">
				<header>
					<h2><span><?php echo $slider['Slider']['slider_name']; ?></span></h2>
				</header>
				<article>
					<p>
						<?php echo $slider['Slider']['slider_desc']; ?>
					</p>
				</article>
			</div>
			<img alt="image" src="/files/images/sliders/<?php echo $slider['Slider']['slider_img']; ?>" />
		</div>
	<?php endforeach ?>
</section>
<section class="container">
	<section class="content">
		<section class="association-desc">
			<header>
				<h3>Qui sommes-nous ?</h3>
			</header>
			<article>
				<?php echo $param['Param']['param_about_ours']; ?>
			</article>
			<footer>
			</footer>
		</section>
		<section class="help-us-container">
			<a href="/help">
				<img alt="image" src="/files/images/param/<?php echo $param['Param']['param_home_link']; ?>" />
			</a>
		</section>

		<section class="coaching-desc">
			<header>
				<h3>Qu'est ce que le coaching</h3>
				<img alt="image" src="http://placehold.it/485x175/0eafff/ffffff.png" />
			</header>
			<article>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, pariatur, molestias, consequuntur quia illum nesciunt iure nostrum sapiente deleniti expedita esse ea eius eligendi libero voluptate non labore incidunt ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, nostrum, atque fugit repellat autem soluta eos deleniti voluptas itaque hic? Architecto, deleniti, non laborum magnam voluptatibus a nesciunt culpa similique.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iste officia odit numquam enim ratione amet. Blanditiis, facilis qui et. Ab, quaerat aperiam veritatis molestias repellat delectus porro temporibus molestiae!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quisquam, magnam, facilis, nisi est totam dolore ut nam expedita eveniet earum quas fugit necessitatibus!
			</article>
			<footer>
				<a href="#" class="plus">lire plus</a>
			</footer>
		</section>
		<section class="cell2">
			<section class="actus-container">
				<header>
					<h3>Notre actualité</h3>
				</header>
				<?php foreach ($news as $key => $new): ?>
					<section>
						<img alt="image" src="/files/images/news/<?php echo $new['News']['news_img']; ?>" />
						<article>
							<a href="/news/view/<?php echo $new['News']['news_id']; ?>"><?php echo $new['News']['news_title']; ?></a>
							<span class="news-date"><?php echo $new['News']['created']; ?></span>
							<p><?php echo $new['News']['news_summary']; ?></p>
						</article>
					</section>
				<?php endforeach ?>
				<footer>
				</footer>
			</section>
			<section class="action-desc">
				<header>
					<h3>Nos dernières actions</h3>
				</header>
				<article>
					<ul>
						<?php foreach ($actions as $key => $action): ?>
							<li><a href="/programs/view/<?php echo $action['Action']['program_id']; ?>"><?php echo $action['Action']['action_title']; ?></a></li>
						<?php endforeach ?>
					</ul>
				</article>
			</section>
		</section>
		<section class="slider-partners-container">
			<h3>Ils nous aident au quotidien</h3>
			<section class="slider-partners">
				<?php foreach ($partners as $key => $partner): ?>
					<div>
						<section>
							<img alt="image" src="/files/images/partners/<?php echo $partner['Partner']['partner_img']; ?>" />
							<p>
								<?php echo $partner['Partner']['partner_name']; ?>
							</p>
						</section>
					</div>
				<?php endforeach ?>
			</section>
		</section>
		<section class="socials-desc">
			<header>
				<h3>Nous suivre</h3>
			</header>
			<article>
				<ul>
					<?php foreach ($socials as $key => $social): ?>
						<li><a href="<?php echo $social['Social']['social_link'] ?>"><img src="/files/images/socials/<?php echo $social['Social']['social_img'] ?>" alt="image"></a></li>
					<?php endforeach ?>
				</ul>
			</article>
		</section>