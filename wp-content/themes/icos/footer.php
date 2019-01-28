			<div class="footer-wrap">
				<div class="footer">
					<div class="footer-copyright">&copy; 2018 Ikos Olivia Restaurant</div>
					<div class="footer-social">
						<a class="footer-social_fb" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg">
						</a>
						<a class="footer-social_inst" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/inst.svg">
						</a>
					</div>
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
						<div class="reservation-modal_title">
							<h3>Galdiņa rezervēšana</h3>
							<p>In case of lack of availability, please contact us: +371 27 33 88 66</p>
						</div>
						<div class="select-block">
							<div class="select-block_item">
								<div class="select-title">Datums</div>
								<select>
									<option value="1">01.01.2019</option>
									<option value="2">02.01.2019</option>
								</select>
							</div>
							<div class="select-block_item">
								<div class="select-title">Laiks</div>
								<select>
									<option value="1">20:00</option>
									<option value="2">21:00</option>
								</select>
							</div>
							<div class="select-block_item">
								<div class="select-title">Viesu skaits</div>
								<select>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
							</div>
						</div>
						<div class="input-block">
							<label class="inp_first">
								<input type="text" placeholder="Jūsu vārds" name="inp-1">
							</label>
							<label class="inp_second">
								<input type="text" placeholder="Jūsu tālrunis" name="inp-2">
							</label>
						</div>
						<div class="submit-btn">
							<button class="resevation-btn" type="submit">Rezervēt</button>
						</div>
					</form>
				</div>
				<div class="modal-thanks">
					<div class="modal-thanks_inner">
						<button class="close-modal" type="button">
							<svg>
								<use xlink:href="img/sprites.svg#close-modal"></use>
							</svg>
						</button>
						<p>Nam iaculis, ante ac aliquet pellentesque,
							<br>libero nulla fermentum</p>
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
