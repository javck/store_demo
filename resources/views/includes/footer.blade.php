<!-- Footer
		============================================= -->
		<footer id="footer" class="noborder nobg">

			<div class="container clearfix">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix"  style="padding: 60px 0 100px;">

					<div class="row">
						<div class="col-lg-6 col-md-6">

							<div class="row clearfix">
								{{ menu('footer','footer_menu') }}
							</div>

							<div class="clear"></div>

							<div class="line line-sm"></div>

							<div class="copy-link"><a href="mailto:{{ setting('site.service_mail') }}"><i class="icon-envelope2"></i>  {{ setting('site.service_mail') }}</a> <span class="middot"> | </span> <a href="tel:{{ setting('site.service_tel') }}"><i class="icon-headphones"></i> {{ setting('site.service_tel') }}</a> <span class="middot"></div>

						</div>

						<div class="col-lg-5 offset-lg-1">

							<div class="widget widget_links clearfix">
								<h4>Connect Socially</h4>

								<div class="bottommargin-sm clearfix">
									<a href="#" class="social-icon si-dark si-mini si-rounded si-facebook" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>

									<a href="#" class="social-icon si-dark si-mini si-rounded si-twitter" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>

									<a href="#" class="social-icon si-dark si-mini si-rounded si-instagram" title="Instagram">
										<i class="icon-instagram"></i>
										<i class="icon-instagram"></i>
									</a>

									<a href="#" class="social-icon si-dark si-mini si-rounded si-pinterest" title="Pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>

									<a href="#" class="social-icon si-dark si-mini si-rounded si-vimeo" title="Vimeo">
										<i class="icon-vimeo"></i>
										<i class="icon-vimeo"></i>
									</a>
								</div>
							</div>

							<div class="widget subscribe-widget notopmargin clearfix">
								<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
									<div class="input-group divcenter">
										<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
										<div class="input-group-append">
											<button class="button button-black t300 button-dark ls2 uppercase" type="submit">Subscribe</button>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

		</footer><!-- #footer end -->
