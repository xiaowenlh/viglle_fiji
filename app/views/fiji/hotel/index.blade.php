@extends('fiji.layouts.default')

@section('content')
			<div class="content">
				<p class="content_title"><span style="font-size:30px;color:#0099ff;">特色</span><strong style="color:#333333;">酒店</strong></p>
				<div class="hotel_1">
					<div class="hotel_part1">
						<div class="hotel_part1_img1" style="background:url('{{{ URL::asset($hotels[0]->pic1_url) }}}/origin.jpg') no-repeat;"></div>
						<div class="hotel_part1_img2" style="background:url('{{{ URL::asset($hotels[0]->pic2_url) }}}/origin.jpg') no-repeat;"></div>
					</div>
					<div class="hotel_part2">
						<div class="hotel_part2_img1" style="background:url('{{{ URL::asset($hotels[0]->pic3_url) }}}/origin.jpg') no-repeat;">
							<div class="hotel_price_bg">
								<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[0]->price }}}</span></div>
							</div>
						</div>
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_top"></div>
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店A</div></div>
						</div>
					</div>
					<div class="hotel_part3"  style="background:url('{{{ URL::asset($hotels[0]->pic4_url) }}}/origin.jpg') no-repeat;">
						<div class="hotel_part3_top"></div>
						<div class="hotel_part3_text">{{{ $hotels[0]->content }}}</div>
					</div>
				</div>
				
				<div class="hotel_2">
					<div class="hotel_part2">
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店B</div></div>
							<div class="hote1_part2_word_top"></div>
						</div>
						<div class="hotel_part2_img1" style="margin:0px;background:url('{{{ URL::asset($hotels[1]->pic1_url) }}}/origin.jpg') no-repeat;">
							<div class="hotel_price_bg">
								<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[1]->price }}}</span></div>
							</div>
						</div>
					</div>
					<div class="hotel_part1">
						<div class="hotel_part1_img1" style="background:url('{{{ URL::asset($hotels[1]->pic2_url) }}}/origin.jpg') no-repeat;">
							<div class="hotel_text_bg">
								<div class="hotel_text_show">{{{ $hotels[1]->content }}}</div>
							</div>
						</div>
						<div class="hotel_part1_img2" style="background:url('{{{ URL::asset($hotels[1]->pic3_url) }}}/origin.jpg') no-repeat;"></div>
					</div>
					<div class="hotel_part3" style="background:url('{{{ URL::asset($hotels[1]->pic4_url) }}}/origin.jpg') no-repeat;">
						<!--div class="hotel_part3_top"></div>
						<div class="hotel_part3_text">田园大酒店是按四星级标准兴建的一家综合性酒店。酒店位于市中心，地处梅州市的繁华黄金地带，地理位置优越，交通便利。 。</div -->
					</div>
				</div>
				
				<div class="hotel_3">
					<div class="hotel_part3" style="margin-left:0px;background:url('{{{ URL::asset($hotels[2]->pic1_url) }}}/origin.jpg') no-repeat;">
						<div class="hotel_part3_top"></div>
						<div class="hotel_part3_text">{{{ $hotels[2]->content }}}</div>
					</div>
					<div class="hotel_part1" style="margin-left:10px;">
						<div class="hotel_part1_img1" style="background:url('{{{ URL::asset($hotels[2]->pic2_url) }}}/origin.jpg') no-repeat;"></div>
						<div class="hotel_part1_img2" style="background:url('{{{ URL::asset($hotels[2]->pic3_url) }}}/origin.jpg') no-repeat;"></div>
					</div>
					<div class="hotel_part2">
						<div class="hotel_part2_img1" style="background:url('{{{ URL::asset($hotels[2]->pic4_url) }}}/origin.jpg') no-repeat;">
							<div class="hotel_price_bg">
								<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[2]->price }}}</span></div>
							</div>
						</div>
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_top"></div>
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店C</div></div>
						</div>
					</div>
				</div>
				
				<div class="hotel_4">
					<div class="hotel_part2">
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店D</div></div>
							<div class="hote1_part2_word_top"></div>
						</div>
						<div class="hotel_part2_img1" style="margin:0px;background:url('{{{ URL::asset($hotels[3]->pic1_url) }}}/origin.jpg') no-repeat;">
							<div class="hotel_price_bg">
								<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[3]->price }}}</span></div>
							</div>
						</div>
					</div>
					<div class="hotel_part1">
						<div class="hotel_part1_img1" style="background:url('{{{ URL::asset($hotels[3]->pic2_url) }}}/origin.jpg') no-repeat;"></div>
						<div class="hotel_part1_img2" style="background:url('{{{ URL::asset($hotels[3]->pic3_url) }}}/origin.jpg') no-repeat;"></div>
					</div>
					<div class="hotel_part3" style="background:url('{{{ URL::asset($hotels[3]->pic4_url) }}}/origin.jpg') no-repeat;">
						<div class="hotel_part3_top"></div>
						<div class="hotel_part3_text">{{{ $hotels[3]->content }}}</div>
					</div>
				</div>
				<div class="hotel_5">
					<div class="hotel_part3" style="margin-left:0px;background:url('{{{ URL::asset($hotels[4]->pic1_url) }}}/origin.jpg') no-repeat;">
						<div class="hotel_part3_top"></div>
						<div class="hotel_part3_text">{{{ $hotels[4]->content }}}</div>
					</div>
					<div class="hotel_part1" style="margin-left:10px;">
						<div class="hotel_part1_img1" style="background:url('{{{ URL::asset($hotels[4]->pic2_url) }}}/origin.jpg') no-repeat;"></div>
						<div class="hotel_part1_img2" style="background:url('{{{ URL::asset($hotels[4]->pic3_url) }}}/origin.jpg') no-repeat;"></div>
					</div>
					<div class="hotel_part2">
						<div class="hotel_part2_img1" style="background:url('{{{ URL::asset($hotels[4]->pic4_url) }}}/origin.jpg') no-repeat;">
							<div class="hotel_price_bg">
								<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[4]->price }}}</span></div>
							</div>
						</div>
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_top"></div>
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店E</div></div>
						</div>
					</div>
				</div>
			</div>
@stop

