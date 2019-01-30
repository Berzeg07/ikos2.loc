			<div class="footer-wrap">
				<div class="footer">
				    <?php
					$args = array(
						'page_id' => '21'
						
					);
					?>
					<?php  $wp_query = new WP_Query($args); ?>
					<?php  while ( $wp_query->have_posts() ) { ?>
					<?php $wp_query->the_post(); ?>
					<div class="footer-copyright"><?php echo get_field('copyright');  ?></div>
					<div class="footer-social">
						<?php echo get_field('блок_соцсетей');  ?>
					</div>
					<?php }?>
					<?php wp_reset_query(); ?>
				</div>
				<div class="overlay"></div>
				<div class="reservation-modal">
					<form class="form-reserv" action="#" method="post">
						<div class="modal-close">
							<button class="close-modal" type="button">
								<svg>
									<use xlink:href="<?php echo get_template_directory_uri();?>/img/sprites.svg#close-modal"></use>
								</svg>
							</button>
						</div>

						<?php
						$args = array(
							'page_id' => '9'
						);
						?>
						<?php  $wp_query = new WP_Query($args); ?>
						<?php  while ( $wp_query->have_posts() ) { ?>
						<?php $wp_query->the_post(); ?>

						<div class="reservation-modal_title">
							<h3><?php echo get_field('заголовок'); ?></h3>
							<p><?php echo get_field('подзаголовок'); ?></p>
						</div>
						<div class="select-block">
							<div class="select-block_item">
								<div class="select-title"><?php echo get_field('дата'); ?></div>
								<select>
									<option value="1">01.01.2019</option>
									<option value="2">02.01.2019</option>
								</select>
							</div>
							<div class="select-block_item">
								<div class="select-title"><?php echo get_field('время'); ?></div>
								<select>
									<option value="1">20:00</option>
									<option value="2">21:00</option>
								</select>
							</div>
							<div class="select-block_item">
								<div class="select-title"><?php echo get_field('количество_мест'); ?></div>
								<select>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
							</div>
						</div>
						<div class="input-block">
							<label class="inp_first">
								<input type="text" placeholder="<?php echo get_field('поле_воода_1'); ?>" name="inp-1">
								<span class="error-text"><?php echo get_field('текст_ошибки'); ?></span>
							</label>
							<label class="inp_second">
								<input type="text" placeholder="<?php echo get_field('поле_ввода_2'); ?>" name="inp-2">
								<span class="error-text"><?php echo get_field('текст_ошибки'); ?></span>
							</label>
						</div>
						<div class="submit-btn">
							<button class="resevation-btn" type="submit"><?php echo get_field('кнопка'); ?></button>
						</div>
						
						<?php }?>
						<?php wp_reset_query(); ?>
					
					</form>
				</div>
				<div class="modal-thanks">
					<div class="modal-thanks_inner">
						<button class="close-modal" type="button">
							<svg>
								<use xlink:href="img/sprites.svg#close-modal"></use>
							</svg>
						</button>
						<p>
						<?php
							$args = array(
								'page_id' => '9'
							);
							?>
							<?php  $wp_query = new WP_Query($args); ?>
							<?php  while ( $wp_query->have_posts() ) { ?>
							<?php $wp_query->the_post(); ?>
							<?php echo get_field('текст_благодарности'); ?>	
							<?php }?>
							<?php wp_reset_query(); ?>
						</p>
					</div>
				</div>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
				</div>
				</div>
			</body>
		</html>
		<?php wp_footer(); ?>
	</body>
</html>
