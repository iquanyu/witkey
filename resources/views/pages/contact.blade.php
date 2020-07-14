@extends('layouts.app')
@section('title', '联系我们')

@section('content')	
	<!-- Inner Header -->
    <section class="section-padding bg-dark py-5 inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">联系我们</h1>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-white" href="{{route('index')}}">首页</a> / <span class="text-success">联系我们</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Inner Header -->
    <!-- Contact Us -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3 class="mt-1 mb-4">联系</h3>
                    <h6 class="text-dark"><i class="fa fa-map-marker fa-fw"></i> 地址 :</h6>
                    <p>中国黑龙江省黑河市嫩江</p>
                    <!-- <h6 class="text-dark"><i class="fa fa-mobile-phone fa-fw"></i> Phone :</h6>
                    <p>(+86) 13146148179</p> -->
                    <h6 class="text-dark"><i class="fa fa-phone fa-fw"></i> 手机 :</h6>
                    <p>(+86) 13146148179</p>
                    <h6 class="text-dark"><i class="fa fa-envelope-o fa-fw"></i> 邮箱 :</h6>
                    <p>wqy1032@163.com</p>
                    <h6 class="text-dark"><i class="fa fa-link fa-fw"></i> 网站 :</h6>
                    <p>quanyu.wang</p>
                    <div class="footer-social mb-4"><span>关注 : </span>
                        <a href="/"><i class="fa fa-qq fa-fw"></i></a>
                        <a href="/"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="/"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="/"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="/"><i class="fa fa-google fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="card">
                        <div class="card-body" style="min-height:320px;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us -->
    <!-- Contact Me -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 section-title text-left mb-4">
                    <h2>联系我们</h2>
                </div>
                <form class="col-lg-12 col-md-12" name="sentMessage">
                    <div class="row">
                        <div class="control-group form-group col-lg-4 col-md-4">
                            <div class="controls"><label>你的名字 <span class="text-danger">*</span></label><input type="text" class="form-control" required=""></div>
                        </div>
                        <div class="control-group form-group col-lg-4 col-md-4">
                            <div class="controls"><label>邮箱地址 <span class="text-danger">*</span></label><input type="email" class="form-control" required=""></div>
                        </div>
                        <div class="control-group form-group col-lg-4 col-md-4">
                            <div class="controls"><label>联系方式 <span class="text-danger">*</span></label><input type="email" class="form-control" required=""></div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls"><label>留言 <span class="text-danger">*</span></label><textarea rows="10" cols="100" class="form-control"></textarea></div>
                    </div><button type="submit" class="btn btn-success">发送留言</button></form>
            </div>
        </div>
    </section>
    <!-- End Contact Me -->
@stop