	<?php
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		<div class="main-content col-lg-12">
			
				<div class="content col-xs-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
							<li class="breadcrumb-item"><a href="#">Các bài giảng pháp</a></li>
							<li class="breadcrumb-item active" aria-current="page">Các bài giảng pháp</li>
						</ol>
					</nav>
					<div class="left-content col-xs-8">
						<div class="block-wrapper detail-post-wrapper col-xs-12">
							<div class="header-post col-xs-12">
								<div class="name-post">
									Bài viết số 1
								</div>
								<div class="view-count">
									<i class="glyphicon glyphicon-eye-open"></i>
									<span>1234</span>
								</div>
							</div>
							<div class="block-news content-post col-xs-12">
								<div class="title-news">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
								</div>
								<div class="img-block-large col-xs-8">
									<img src="" alt="">
								</div>
								<div class="content-news col-xs-12">
								<?php the_content(); ?>
								</div>
							</div>
							<div class="footer-post social-block col-xs-12">
								<div class="share-block">
									<a href="" class="btn-like">Thích <span>32</span></a>
									<a href="" class="btn-share">Chia sẻ</a>
								</div>
								<div class="hastag-block">
									<span>#Lorem ipsum</span>
									<span>#dolor</span>
									<span>#consectetur</span>
									<span>#reprehenderit</span>
									<span>#voluptate</span>
									<span>velit esse</span>
								</div>
								<div class="conment-block">
									<div class="title-comnent">
										<span class="count-comment">0</span>
										bình luận
									</div>
									<div class="box-comment">
										<div class="img-block-small img-avartar-fb">
											<img src="" alt="">
										</div>
										<textarea class='textarea-comment'>

										</textarea>
									</div>
									
								</div>
							</div>
							

							
						</div>
						<div class="block-wrapper list-posts-wrapper col-xs-12">
							<div class="title-block-wrapper col-xs-12">
								<div class="title-block">Các bài viết khác</div>
							</div>
							<div class="list-news col-xs-12">
								<div class="news-item col-xs-4">
									<div class="img-post">
										<img src="" alt="">
									</div>
									<div class="title-news">Lorem ipsum dolor sit amet elit </div>
								</div>
								<div class="news-item col-xs-4">
									<div class="img-post">
										<img src="" alt="">
									</div>
									<div class="title-news">Lorem ipsum dolor sit amet elit</div>
								</div>
								<div class="news-item col-xs-4">
									<div class="img-post">
										<img src="" alt="">
									</div>
									<div class="title-news">Lorem ipsum dolor sit amet elit</div>
								</div>
							</div>
							<div class="list-link-news col-xs-12">
								<a href="" class="link-news-item"><span>>></span>Lorem ipsum dolor sit amet, consectetur </a>
								<a href="" class="link-news-item"><span>>></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </a>
								<a href="" class="link-news-item"><span>>></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </a>
								<a href="" class="link-news-item"><span>>></span>Lorem ipsum dolor sit amet, consectetur adipiscing </a>
								<a href="" class="link-news-item"><span>>></span>Lorem ipsum dolor sit amet,  </a>
							</div>
							
						</div>
						
						
					
						
					</div>


					<div class="right-content col-xs-4">
						<div class="search-box col-xs-12">
							<input type="text" name="search-box" placeholder="Tìm kiếm">
							<i class="icon-search glyphicon glyphicon-search"></i>
						</div>
						<div class="block-wrapper notification-block col-xs-12">
							<div class="title-block-wrapper col-xs-12">
								<div class="title-block">Thông báo</div>
							</div>

							<div class="news-item col-xs-12">
								<div class="img-block-right col-xs-7">
									<img src="" alt="">
								</div>
								<div class="title-news col-xs-12">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit
								</div>
							</div>
							<div class="social-share-wrapper col-xs-12">
								<div class="title-block col-xs-12">Follow us</div>
								<div class="list-social-btn col-xs-12">
									<div class="social-btn-item"><a href="#"></a></div>
									<div class="social-btn-item"><a href="#"></a></div>
									<div class="social-btn-item"><a href="#"></a></div>
									<div class="social-btn-item"><a href="#"></a></div>
								</div>
								
							</div>
						</div>
						<div class="block-wrapper video-block col-xs-12">
							<div class="title-block-wrapper col-xs-12">
								<div class="title-block">Video</div>
							</div>
							<div class="news-item col-xs-12">
								<div class="icon-player">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
								</div>
								<div class="title-news">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit
								</div>
								<div class="img-block-right col-xs-7">
									<div class="icon-player">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
									</div>
								</div>
							</div>
							<div class="news-item col-xs-12">
								<div class="icon-player">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
								</div>
								<div class="content-news">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
								</div>
							</div>
							<div class="news-item col-xs-12">
								<div class="icon-player">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
								</div>
								<div class="content-news">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
								</div>
							</div>
						</div>
						<div class="block-wrapper audio-block col-xs-12">
							<div class="title-block-wrapper col-xs-12">
								<div class="title-block">Audio</div>
							</div>
							<div class="audio-bar col-xs-12">
								<audio controls>
									<source src="<?php echo get_stylesheet_directory_uri() ?>/old-town-road.mp3" type="audio/mpeg">
								</audio>
							</div>
							<div class="news-item active col-xs-12">
								<div class="icon-volume">
									<i class="glyphicon glyphicon-volume-up"></i>
								</div>
								<div class="content-news">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
								</div>
							</div>
							<div class="news-item col-xs-12">
								<div class="icon-volume">
									<i class="glyphicon glyphicon-volume-up"></i>
								</div>
								<div class="content-news">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  
								</div>
							</div>
							<div class="news-item col-xs-12">
								<div class="icon-volume">
									<i class="glyphicon glyphicon-volume-up"></i>
								</div>
								<div class="content-news">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
								</div>
							</div>
							<div class="news-item col-xs-12">
								<div class="icon-volume">
									<i class="glyphicon glyphicon-volume-up"></i>
								</div>
								<div class="content-news">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
								</div>
							</div>
						</div>
						<div class="block-wrapper key-search-block col-xs-12">
							<div class="title-block-wrapper col-xs-12">
								<div class="title-block">Từ khóa tìm kiếm</div>
							</div>
							<div class="key-search-content">
								Quis <span class="key-search">autem</span> vel eum iure reprehenderit, qui <span class="key-search">in ea</span>in ea voluptate velit <span class="key-search">essein ea</span> , quam nihil <span class="key-search">molestiae</span> consequatur
							</div>
						</div>
						<div class="block-wrapper statitics-block col-xs-12">
							<div class="statitic-box col-xs-12">
								<table>
									<tr>
										<th colspan="2">Thống kê</th>
									</tr>
									<tr>
										<td class="keyt-row">Đang truy cập</td>
										<td class="index-row">6</td>
									</tr>
									<tr>
										<td class="keyt-row">Máy chủ tìm kiếm</td>
										<td class="index-row">1</td>
									</tr>
									<tr>
										<td class="keyt-row">Khách viếng thăm</td>
										<td class="index-row">7</td>
									</tr>
									<tr>
										<td class="keyt-row">Hôm nay</td>
										<td class="index-row">715</td>
									</tr>
									<tr>
										<td class="keyt-row">Tháng hiện tại</td>
										<td class="index-row"><?php echo number_format(12105) ;?></td>
									</tr>
									<tr>
										<td class="keyt-row">Tổng lượt truy cập</td>
										<td class="index-row"><?php echo number_format(1002645) ;?></td>
									</tr>
								</table>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
	endwhile; endif;
	get_footer();
	?>