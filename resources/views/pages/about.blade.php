@extends('layouts.app')
@section('title', '关于我们')

@section('content')	
	<!-- Inner Header -->
    <section class="py-5 bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">关于我们</h1>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-white" href="{{route('index')}}">首页</a> / <span class="text-success">关于我们</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Inner Header -->
    <!-- About -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="pl-4 col-lg-5 col-md-5 pr-4">
                    <img class="rounded img-fluid" src="{{asset('images/about.jpg')}}" alt="Card image cap">
                </div>
                <div class="col-lg-6 col-md-6 pl-5 pr-5">
                    <h2 class="mb-5">全球领先的学习和教学市场
                    </h2>
                    <h5 class="mt-2">我们的愿景</h5>
                    <p>长期以来，读者在浏览页面布局时会被页面的可读内容分散注意力。使用Lorem Ipsum的意义在于它或多或少具有字母的正态分布，而不是
在这里使用"内容"</p>
                    <h5 class="mt-4">我们的目标</h5>
                    <p>当看它的布局时。使用Lorem Ipsum的意义在于它有或多或少的字母正态分布，而不是在这里使用"内容"</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->
    <!-- What We Provide -->
    <section class="py-5">
        <div class="section-title text-center mb-5">
            <h2>我们提供什么？</h2>
            <p></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success fa fa-address-book-o fa-fw fa-3x"></i></div>
                    <h5 class="mt-3 mb-3">改变生活</h5>
                    <p>有许多不同版本的洛勒姆Ipsum可供选择，但大多数已经遭受了某种形式的改变，注入幽默，或随机的话，看起来甚至没有一点可信。如果你要用洛勒姆·伊普苏姆的一段话.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success fa fa-check-circle-o fa-fw fa-3x"></i></div>
                    <h5 class="mb-3">我们的开始</h5>
                    <p>Lorem Ipsum只是印刷和排版行业的虚拟文本。Lorem Ipsum自15世纪以来一直是行业标准的虚拟文本，当时一个不知名的印刷工拿走了一个字型的厨房，然后把它拼凑成一本活字样书.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success fa fa-users fa-fw fa-3x"></i></div>
                    <h5 class="mt-3 mb-3">Our Marketplace</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                        using 'Content here,</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success fa fa-clock-o fa-fw fa-3x"></i></div>
                    <h5 class="mb-3">Our Instructors</h5>
                    <p>Contrary to popular belief,Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,making it over 2000 years old. Richard McClintock,a Latin professor at Hampden-Sydney College in Virginia,looked.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success fa fa-pie-chart fa-fw fa-3x"></i></div>
                    <h5 class="mt-3 mb-3">Jobs</h5>
                    <p>There are many variations of passages of Lorem Ipsum available,but the majority have suffered alteration in some form,by injected humour,or randomised words which don't look even slightly believable. If you are going to use a passage
                        of Lorem Ipsum</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success fa fa-info-circle fa-fw fa-3x"></i></div>
                    <h5 class="mt-3 mb-3">Help</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                        using 'Content here,</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End What We Provide -->
    <!-- Trusted Agents -->
    <section class="py-5 bg-white">
        <div class="section-title text-center mb-5">
            <h2>对我们的评价</h2>
            <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="agents-card text-center"><img class="img-fluid mb-4" src="{{asset('images/s1.png')}}" alt="">
                        <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                        <h6 class="mb-0 text-success">- Stave Martin</h6><small>Buying Agent</small></div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="agents-card text-center"><img class="img-fluid mb-4" src="{{asset('images/s2.png')}}" alt="">
                        <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                        <h6 class="mb-0 text-success">- Mark Smith</h6><small>Selling Agent</small></div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="agents-card text-center"><img class="img-fluid mb-4" src="{{asset('images/s3.png')}}" alt="">
                        <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                        <h6 class="mb-0 text-success">- Ryan Printz</h6><small>Real Estate Broker</small></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Trusted Agents -->
@stop