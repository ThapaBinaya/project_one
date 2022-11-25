<!doctype html>
<html lang="en">
@include('frontend.layout.head')
<body>

@include('frontend.layout.navbar')

<!--Breadcrumb-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-end">
        <li class="breadcrumb-item "><a href="index.html"><i class="fa fa-home" aria-hidden="true" style="font-size:28px;"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Blog</li>
    </ol>
</nav>

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
{{--    <div class="see-all">--}}
{{--        <a name="" id="" class="btn" href="#" role="button">See all...</a>--}}
{{--    </div>--}}
</div>

@include('frontend.layout.footer')

@include('frontend.layout.script')

</body>
</html>
