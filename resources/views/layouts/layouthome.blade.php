<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Kinross 随笔记</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="{{ asset('home/i/favicon.png') }}">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" type="image/png" href="{{ asset('home/i/app-icon72x72@2x.png') }}">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="kinross博客"/>
  <link rel="apple-touch-icon-precomposed" href="{{ asset('home/i/app-icon72x72@2x.png') }}">
  <meta name="msapplication-TileImage" content="{{ asset('home/i/app-icon72x72@2x.png') }}">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link href="{{ asset('home/css/amazeui.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('home/css/app.css') }}">

</head>

<body id="blog">


<!-- nav start 导航开始-->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<!-- <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button> -->
    @section('nav')
    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li class="am-active"><a href="lw-index.html">首页</a></li>
      <li><a href="javascript:volid(0);">PHP</a></li>
      <li><a href="javascript:volid(0);">LARAVEL</a></li>      
      <li><a href="javascript:volid(0);">JAVASCRIPT</a></li>
      <li><a href="javascript:volid(0);">MYSQL</a></li>
      <li><a href="javascript:volid(0);">VUE</a></li>
      <li><a href="javascript:volid(0);">杂笔</a></li>
    </ul>
    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
      </div>
    </form>
    </div>
   @show
</nav>
<hr>
<!-- nav end 导航结束-->

<!-- banner start -->
<div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin">
    @section('banner')
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
    <ul class="am-slides">
      <li>
            <img src="{{asset('home/i/b1.jpg')}}">
            <div class="blog-slider-desc am-slider-desc ">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span class="blog-bor">2018/4/9</span>
                    <br><br><br><br><br><br><br>                
                </div>
            </div>
      </li>
      <li>
            <img src="{{ asset('home/i/b2.jpg') }}">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
      <li>
            <img src="{{ asset('home/i/b3.jpg') }}">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2018/4/9</span>                
                </div>
            </div>
      </li>
      <li>
            <img src="{{ asset('home/i/b2.jpg') }}">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2018/4/9</span>                
                </div>
            </div>
      </li>
    </ul>
    </div>
    @show
</div>
<!-- banner end -->



<!-- content start -->
<div class="am-g am-g-fixed blog-fixed">
    @yield('content')
</div>
<!-- content end -->


<!-- footer start-->
<footer class="blog-footer">
    @section('footer')
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>简介</h3>
            <p class="am-text-sm">这是一个个人做的简单的博客。
            <br> 博客/ 文章/ 资讯类/ 前端资源 <br> 支持响应式，多种布局，包括主页、文章页、媒体页、分类页等<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>
            使用 MIT 许可证发布，用户可以自由使用、复制、修改、合并、出版发行、散布、再授权及贩售及其副本。</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>社交账号</h3>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>                
                <a href=""><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon blog-icon"></span></a>
            </p>
            <h3>Credits</h3>
            <p>我们追求卓越，然时间、经验、能力有限。博客有很多不足的地方，希望大家包容、不吝赐教，给我们提意见、建议。感谢你们！</p>          
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
              <h1>我们站在巨人的肩膀上</h1>
             <h3>Heroes</h3>
            <p>
                <ul>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>Vue</li>
                    <li>jQuery</li>
                    <li>LESS</li>
                    <li>...</li>
                </ul>
            </p>
        </div>
    </div>    
    <div class="blog-text-center">Copyright© 2018. Kinross &nbsp; <span>粤ICP备18048135号</span></div>
        
    </div>
    @show
</footer>
<!-- footer end-->


<!--[if (gte IE 9)|!(IE)]><!-->
<!-- <script src="{{ URL::asset('/home/jquery.min.js') }}"></script> -->

<script src="{{ asset('home/js/jquery.min.js') }}"></script>

<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="{{ asset('home/js/amazeui.min.js') }}"></script>
</body>
</html>