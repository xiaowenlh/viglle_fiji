@extends('fiji.layouts.default')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{{ asset('css/travel.css') }}}" />
@stop


@section('content')

<div class="content">
				<div class="content_body">
					<div class="content_user_show">
							<ul class="content_user_ul">
								<li class="content_user_card1">玩转斐济岛</li>
								<li class="content_user_card2" style="margin-left:10px;">吃货走天下</li>
							</ul>
							<div class="content_user_card_bottom"></div>
					</div>
					<div class="raiders_msg">
						<ul class="raiders_content">
@foreach($travels as $travel)
							<li class="raiders_li1">
                            <img src="{{{ $travel->has_pic }}}" alt="">
                            </li>
							<li class="raiders_li2">
								<div style="width:580px;margin:20px;">
                                    <a href=" {{{ $travel->url() }}} ">    <p class="raiders_title">{{{ $travel->title }}}</p></a>
                                    <p><span class="raiders_user_name">{{{ $travel->author->username }}}</span><span class="raiders_user_time">发布于{{{ $travel->date() }}}</span></p>
									<p class="raiders_user_text">{{{ $travel->content }}}……</p>
								</div>
								<div class="raiders_user_good"></div>
								<p align=right><span class="good_count">{{{ $travel->mark }}}</span></p>
							</li>
@endforeach
							
						</ul>
					</div>
					<div>
						<ul class="show_page_1">
							<li  class="show_li_1">1</li>
							<li  class="show_li_2">2</li>
							<li class="show_page_next">下一页</li>
						</ul>
					</div>
				</div>
				<div class="content_bottom"></div>
			</div>


@stop
