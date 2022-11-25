<!doctype html>
<html lang="en">
@include('frontend.layout.head')
<body>

<!--Navigation bar-->
@include('frontend.layout.navbar')

<!--Breadcrumb-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-end">
        <li class="breadcrumb-item "><a href="index.html"><i class="fa fa-home" aria-hidden="true" style="font-size:28px;"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>

<!--Carousel-->
@include('frontend.layout.carousel')

<!-- -----हाम्रो बारेमा----- -->
<div class="container-md about-us">
    <h1>हाम्रो बारेमा</h1>
    @if(isset($data['about']))
    <div class="row justify-content-around">
        @foreach($data['about'] as $key => $content)
        <div class="col-md-5 col-9 about-item">
            <img src="{{asset('frontend/img/c1.jpg')}}" alt="" width="100%">
        </div>
        <div class="col-md-6 col-10 about-item">
            <p>{!! $content->excerpt !!}</p>
            <a name="" id="" class="btn" href="#" role="button">Read more</a>
        </div>
        @endforeach
    </div>
    @endif
</div><hr>

<!-- -----samachar----- -->
{{--<div class="container-fluid samachar">--}}
{{--    <h1>समाचार</h1>--}}
{{--    <div class="row justify-content-around">--}}
{{--        <div class="col-xl-4 col-lg-5 col-10 samachar-item samachar-main desc-col">--}}
{{--            <img class="img-responsive" src="{{asset('frontend/img/samachar1.jpg')}}" alt="" width="100%" height="300">--}}
{{--            <h2><a href="#">Why we fail to take care of ourselves</a></h2>--}}
{{--            <p class="desc"><a href="#">Just being physically healthy does not necessarily mean we are taking proper care of ourselves. <a class="read-more" href="#">  Read More...</a></a></p>--}}
{{--        </div>--}}
{{--        <div class="col-xl-8 col-lg-7 col-11 align-self-center">--}}
{{--            <div class="row justify-content-around small-news">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row samachar-item">--}}
{{--                        <div class="col-4">--}}
{{--                            <img src="img/c1.jpg" alt="" width="100%" height="80px">--}}
{{--                        </div>--}}
{{--                        <div class="col-8 align-self-center">--}}
{{--                            <h5><a href="#">this is the Headline....</a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row samachar-item">--}}
{{--                        <div class="col-4">--}}
{{--                            <img src="img/c1.jpg" alt="" width="100%" height="80px">--}}
{{--                        </div>--}}
{{--                        <div class="col-8 align-self-center">--}}
{{--                            <h5><a href="#">this is the Headline....</a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row samachar-item">--}}
{{--                        <div class="col-4">--}}
{{--                            <img src="{{asset('frontend/img/c1.jpg')}}" alt="" width="100%" height="80px">--}}
{{--                        </div>--}}
{{--                        <div class="col-8 align-self-center">--}}
{{--                            <h5><a href="#">this is the Headline....</a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row samachar-item">--}}
{{--                        <div class="col-4">--}}
{{--                            <img src="{{asset('frontend/img/c1.jpg')}}" alt="" width="100%" height="80px">--}}
{{--                        </div>--}}
{{--                        <div class="col-8 align-self-center">--}}
{{--                            <h5><a href="#">this is the Headline....</a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row samachar-item">--}}
{{--                        <div class="col-4">--}}
{{--                            <img src="{{asset('frontend/img/c1.jpg')}}" alt="" width="100%" height="80px">--}}
{{--                        </div>--}}
{{--                        <div class="col-8 align-self-center">--}}
{{--                            <h5><a href="#">this is the Headline....</a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row samachar-item">--}}
{{--                        <div class="col-4">--}}
{{--                            <img src="{{asset('frontend/img/c1.jpg')}}" alt="" width="100%" height="80px">--}}
{{--                        </div>--}}
{{--                        <div class="col-8 align-self-center">--}}
{{--                            <h5><a href="#">this is the Headline....</a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row samachar-item">--}}
{{--                        <div class="col-4">--}}
{{--                            <img src="{{asset('frontend/img/c1.jpg')}}" alt="" width="100%" height="80px">--}}
{{--                        </div>--}}
{{--                        <div class="col-8 align-self-center">--}}
{{--                            <h5><a href="#">this is the Headline....</a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row samachar-item">--}}
{{--                        <div class="col-4">--}}
{{--                            <img src="{{asset('frontend/img/c1.jpg')}}" alt="" width="100%" height="80px">--}}
{{--                        </div>--}}
{{--                        <div class="col-8 align-self-center">--}}
{{--                            <h5><a href="#">this is the Headline....</a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div><hr>--}}

<!-- -----lekh----- -->
<div class="container-fluid lekh">
    <h1>लेख</h1>
    @if(isset($data['blog']))
    <div class="row justify-content-center">
        @foreach($data['blog'] as $key => $content)
        <div class="col-lg-3 col-sm-5 lekh-item">
            <div class="row">
                <div class="col-5">
                    <img src="{{asset('images/blog/'.$content->image)}}" alt="" width="100%">
                </div>
                <div class="col-7">
                    <h3>{!! $content->title !!}</h3>
                    <p>{!! $content->author !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 desc-col">
                    <p class="desc"><a href="#">{!! $content->desc !!}<a class="read-more" href="#">  Read More...</a></a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
    <div class="see-all">
        <a name="" id="" class="btn" href="{{url('front/blog')}}" role="button">See all...</a>
    </div>
</div><hr>

<!-- -----Sahetya----- -->
<div class="container-fluid sahetya">
    <h1>साहित्य</h1>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-5 sahetya-item">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('frontend/img/c3.jpg')}}" alt="" width="100%" height="200px">
                </div>
            </div>
            <div class="row">
                <div class="col-12 desc-col">
                    <p class="desc"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id adipisci voluptate ratione harum et delectus dicta veritatis in natus aperiam. Cumque cum possimus facilis sint, earum asperiores quod ipsum quia!<a class="read-more" href="#">  Read More...</a></a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-5 sahetya-item">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('frontend/img/c3.jpg')}}" alt="" width="100%" height="200px">
                </div>
            </div>
            <div class="row">
                <div class="col-12 desc-col">
                    <p class="desc"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id adipisci voluptate ratione harum et delectus dicta veritatis in natus aperiam. Cumque cum possimus facilis sint, earum asperiores quod ipsum quia!<a class="read-more" href="#">  Read More...</a></a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-5 sahetya-item">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('frontend/img/c3.jpg')}}" alt="" width="100%" height="200px">
                </div>
            </div>
            <div class="row">
                <div class="col-12 desc-col">
                    <p class="desc"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id adipisci voluptate ratione harum et delectus dicta veritatis in natus aperiam. Cumque cum possimus facilis sint, earum asperiores quod ipsum quia!<a class="read-more" href="#">  Read More...</a></a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-5 sahetya-item">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('frontend/img/c3.jpg')}}" alt="" width="100%" height="200px">
                </div>
            </div>
            <div class="row">
                <div class="col-12 desc-col">
                    <p class="desc"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id adipisci voluptate ratione harum et delectus dicta veritatis in natus aperiam. Cumque cum possimus facilis sint, earum asperiores quod ipsum quia!<a class="read-more" href="#">  Read More...</a></a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-5 sahetya-item">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('frontend/img/c3.jpg')}}" alt="" width="100%" height="200px">
                </div>
            </div>
            <div class="row">
                <div class="col-12 desc-col">
                    <p class="desc"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id adipisci voluptate ratione harum et delectus dicta veritatis in natus aperiam. Cumque cum possimus facilis sint, earum asperiores quod ipsum quia!<a class="read-more" href="#">  Read More...</a></a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-5 sahetya-item">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('frontend/img/c3.jpg')}}" alt="" width="100%" height="200px">
                </div>
            </div>
            <div class="row">
                <div class="col-12 desc-col">
                    <p class="desc"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id adipisci voluptate ratione harum et delectus dicta veritatis in natus aperiam. Cumque cum possimus facilis sint, earum asperiores quod ipsum quia!<a class="read-more" href="#">  Read More...</a></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="see-all">
        <a name="" id="" class="btn" href="#" role="button">See all...</a>
    </div>
</div>
<hr>

<!-- -----Social----- -->
@include('frontend.layout.social')
<hr>

<!-- -----footer----- -->
@include('frontend.layout.footer')

<!-- -----script----- -->
@include('frontend.layout.script')

</body>
</html>
