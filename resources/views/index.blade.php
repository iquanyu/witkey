@extends('layouts.app')
@section('title', '首页')

@section('content')
	<!-- Begin Page Content -->
    <section class="py-5 homepage-search-block position-relative">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-lg-7">
                    <div class="homepage-search-title">
                        <h1 class="mb-3 text-shadow text-gray-900 font-weight-bold">
                          为您的企业找到完美的自由职业者服务
                        </h1>
                        <h5 class="mb-5 text-shadow text-gray-800 font-weight-normal">
                          数以百万计的人用miver把他们的想法变成现实.
                        </h5>
                    </div>
                    <div class="homepage-search-form">
                        <form class="form-noborder">
                            <div class="form-row">
                                <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                                    <div class="location-dropdown">
                                        <i class="icofont-location-arrow"></i>
                                        <select class="custom-select form-control border-0 shadow-sm form-control-lg">
                                          <option> 所有服务 </option>
                                          <option> 页面设计 </option>
                                          <option> 网站开发 </option>
                                          <option> 健身休闲 </option>
                                          <option> 域名申请 </option>
                                          <option> 音乐视频 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12 form-group">
                                    <input type="text" placeholder="查询服务..." class="form-control border-0 form-control-lg shadow-sm">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 form-group">
                                    <button type="submit" class="btn btn-success btn-block btn-lg btn-gradient shadow-sm"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="popular">
                        <span class="text-body-2">热门搜索</span>
                        <ul>
                            <li><a href="{{route('index')}}" class="text-body-2">电商平台</a></li>
                            <li><a href="{{route('index')}}" class="text-body-2">网红包装</a></li>
                            <li><a href="{{route('index')}}" class="text-body-2">logo 设计</a></li>
                            <li><a href="{{route('index')}}" class="text-body-2">文案</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{asset('images/banner.svg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

	<!--       social -->
    <ul class="trusted-by bg-white border-bottom">
        <li><img src="{{asset('images/facebook.png')}}"></li>
        <li><img src="{{asset('images/google.png')}}"></li>
        <li><img src="{{asset('images/mit.png')}}"></li>
        <li><img src="{{asset('images/netflix.png')}}"></li>
        <li><img src="{{asset('images/paypal.png')}}"></li>
        <li><img src="{{asset('images/intuit.png')}}"></li>
        <li><img src="{{asset('images/facebook.png')}}"></li>
    </ul>
    <!--       social -->

	<!--       recent -->
    <!--       freelancer projects -->
    <div class="freelance-projects bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="freelancer">
                        <img src="{{asset('images/senatopcustudio.jpg')}}">
                        <div class="freelancer-footer">
                            <img src="{{asset('images/s7.png')}}">
                            <h5>Logo Design
                                <span>by <i>John</i></span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="freelancer">
                        <img src="{{asset('images/vnuggz.jpg')}}">
                        <div class="freelancer-footer">
                            <img src="{{asset('images/s8.png')}}">
                            <h5>Web &amp; Mobile Design
                                <span>by <i>John</i></span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="freelancer">
                        <img src="{{asset('images/digitalgeria.jpg')}}">
                        <div class="freelancer-footer">
                            <img src="{{asset('images/s1.png')}}">
                            <h5>Packaging Design
                                <span>by <i>John</i></span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="freelancer">
                        <img src="{{asset('images/artsi3d.jpg')}}">
                        <div class="freelancer-footer">
                            <img src="{{asset('images/s2.png')}}">
                            <h5>Brand Style Guides
                                <span>by <i>John</i></span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="freelancer">
                        <img src="{{asset('images/designerheather.jpg')}}">
                        <div class="freelancer-footer">
                            <img src="{{asset('images/s3.png')}}">
                            <h5>Illustration
                                <span>by <i>John</i></span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--       freelancer projects -->
    <!--       recent -->
    <section class="py-5">
        <div class="view_slider recommended">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Recently Viewed &amp; More</h3>
                        <div class="view recent-slider recommended-slider">
                            <div>
                                <a href="{{route('index')}}">
                                    <img class="img-fluid" src="{{asset('images/v1.png')}}">
                                </a>
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <span class="seller-image">
													<img class="img-fluid" src="{{asset('images/s1.png')}}" alt="">
												</span>
                                            <span class="seller-name">
													<a href="{{route('index')}}">Marcin Kowalski</a>
													<span class="level hint--top level-one-seller">
														Level 1 Seller
													</span>
                                            </span>
                                        </div>
                                        <h3>I will create professional audio ads or radio commercials for your project</h3>
                                        <div class="content-info">
                                            <div class="rating-wrapper">
                                                <span class="gig-rating text-body-2">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
															<path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
															</path>
														</svg>
														5.0
														<span>(7)</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                            <div class="price">
                                                <a href="{{route('index')}}">
														Starting At <span> $1,205</span>
													</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="{{route('index')}}">
                                    <img class="img-fluid" src="{{asset('images/v2.png')}}">
                                </a>
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <span class="seller-image">
													<img class="img-fluid" src="{{asset('images/s2.png')}}" alt="">
												</span>
                                            <span class="seller-name">
													<a href="{{route('index')}}">Marcin Kowalski</a>
													<span class="level hint--top level-one-seller">
														Level 1 Seller
													</span>
                                            </span>
                                        </div>
                                        <h3>I will create professional audio ads or radio commercials for your project</h3>
                                        <div class="content-info">
                                            <div class="rating-wrapper">
                                                <span class="gig-rating text-body-2">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
															<path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
															</path>
														</svg>
														5.0
														<span>(7)</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                            <div class="price">
                                                <a href="{{route('index')}}">
														Starting At <span> $1,205</span>
													</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="{{route('index')}}">
                                    <img class="img-fluid" src="{{asset('images/v3.png')}}">
                                </a>
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <span class="seller-image">
													<img class="img-fluid" src="{{asset('images/s3.png')}}" alt="">
												</span>
                                            <span class="seller-name">
													<a href="{{route('index')}}">Marcin Kowalski</a>
													<span class="level hint--top level-one-seller">
														Level 1 Seller
													</span>
                                            </span>
                                        </div>
                                        <h3>I will create professional audio ads or radio commercials for your project</h3>
                                        <div class="content-info">
                                            <div class="rating-wrapper">
                                                <span class="gig-rating text-body-2">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
															<path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
															</path>
														</svg>
														5.0
														<span>(7)</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                            <div class="price">
                                                <a href="{{route('index')}}">
														Starting At <span> $1,205</span>
													</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--       recent -->
	
	<!--       services-->
    <div class="services-wrapper bg-white py-5">
        <div class="container">
            <h2>Popular Professional Services</h2>
            <div class="row service-slider">
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-01.jpg')}}">
                        <h3><span>Build Your Brand</span> Logo Design</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-02.jpg')}}">
                        <h3><span>Customize your site</span> wordpress</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-03.jpg')}}">
                        <h3><span>share your message</span> voice over</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-04.jpg')}}">
                        <h3><span>engage your audience</span> whiteboard</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-05.jpg')}}">
                        <h3><span>reach more customers</span> social media</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-01.jpg')}}">
                        <h3><span>Build Your Brand</span> Logo Design</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-02.jpg')}}">
                        <h3><span>Customize your site</span> wordpress</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-03.jpg')}}">
                        <h3><span>share your message</span> voice over</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-04.jpg')}}">
                        <h3><span>engage your audience</span> whiteboard</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{asset('images/service-05.jpg')}}">
                        <h3><span>reach more customers</span> social media</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--       services-->
    <!--       testimonials -->
    <div class="testi-wrap pt-5">
        <div class="container">
            <div class="testimonial">
                <div class="video-modal">
                    <div class="picture-wrapper">
                        <img src="{{asset('images/1440-haerfest-2x.jpg')}}">
                    </div>
                </div>
                <div class="text-content">
                    <p>"Being a small but growing brand, we have to definitely do a lot more with less. And when you want to create a business bigger than yourself, you’re going to need help. And that’s what Miver does"
                    </p>
                    <span>Tim and Dan Joo, Co-founders</span>
                    <img alt="Company logo" src="{{asset('images/haerfest-logo.png')}}" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <!--       testimonials -->
    <!--       guides  -->
    <div class="guide-wrapper py-5">
        <div class="container">
            <h2>
                Miver Guides
                <a href="{{route('index')}}" class="float-right">See More guides&gt;</a>
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('index')}}" class="guide">
                        <img src="{{asset('images/guide-01.jpg')}}">
                        <div class="content">
                            <h6>Create a Website</h6>
                            <p>Building a stunning website from A to Z</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('index')}}" class="guide">
                        <img src="{{asset('images/guide-02.jpg')}}">
                        <div class="content">
                            <h6>Grow With Digital Marketing</h6>
                            <p>Promoting your business online</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('index')}}" class="guide">
                        <img src="{{asset('images/guide-03.jpg')}}">
                        <div class="content">
                            <h6>Build a Strong Brand</h6>
                            <p>Differentiating yourself from the competition</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--       guides  -->
    <!-- get started -->
    <div>
        <div class="get-started">
            <div class="content">
                <h2>Find Freelance Services For Your Business Today</h2>
                <p>We've got you covered for all your business needs</p><a href="{{route('index')}}" class="c-btn c-fill-color-btn">Get Started</a>
            </div>
        </div>
    </div>
    <!-- get started -->
@stop