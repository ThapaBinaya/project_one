<!doctype html>
<html lang="en">
@include('frontend.layout.head')
<body>

@include('frontend.layout.navbar')

<!--Breadcrumb-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-end">
        <li class="breadcrumb-item "><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true" style="font-size:28px;"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
</nav>

<div class="container-md about-us">
    <h1>हाम्रो बारेमा</h1>
    @if(isset($data['aboutUs']))
        <div class="row lekh justify-content-around">
            @foreach($data['aboutUs'] as $key => $content)
                <div class="col-lg-3 col-sm-5 lekh-item">
                    <div class="row">
                        <div class="col-12 about-item">
                            <h1>{!! $content->title !!}</h1>
{{--                            <img src="{{asset('frontend/img/c1.jpg')}}" alt="" width="100%">--}}
                        </div>
                        <div class="col-12 about-item">
                            <p>{!! $content->excerpt !!}</p>
                            <a name="" id="" class="btn" href="#" role="button">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

{{--<div class="container-md about-us">--}}
{{--    <h1>हाम्रो बारेमा</h1>--}}
{{--    @if(isset($data['aboutUs']))--}}
{{--        <div class="row justify-content-around">--}}
{{--            @foreach($data['aboutUs'] as $key => $content)--}}
{{--                <div class="col-md-5 col-9 about-item">--}}
{{--                    <img src="{{asset('frontend/img/c1.jpg')}}" alt="" width="100%">--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-10 about-item">--}}
{{--                    <p>{!! $content->excerpt !!}</p>--}}
{{--                    <a name="" id="" class="btn" href="#" role="button">Read more</a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}

@include('frontend.layout.footer')

@include('frontend.layout.script')

</body>
</html>
