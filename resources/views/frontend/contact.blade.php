<!doctype html>
<html lang="en">
@include('frontend.layout.head')
<body>

<!--Navigation bar-->
@include('frontend.layout.navbar')
<!--end of Navigation bar-->

<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-end" >
        <li class="breadcrumb-item "><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true" style="font-size:28px;"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
    </ol>
</nav>

<div class="container-fluid contact">
    <div class="container contact-us">
        <div class="contact-heading">
            <h3>Contact Us</h3>
        </div>
        <form action="{{route('contact.store')}}" method="get" class="form-inline" enctype="multipart/form-data">
            @csrf
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    There were some problems with your input.<br><br>--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Subject:</label>
                <input type="text" class="form-control" name="subject" id="" aria-describedby="emailHelpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Phone No:</label>
                <input type="tel" class="form-control" name="phone" id="" aria-describedby="emailHelpId" placeholder="">
            </div>
            <div class="form-group textarea-group">
                <label for="">Message:</label>
                <textarea class="textarea-control" name="message" id="" cols="" rows="5"></textarea>
            </div>
            <div class="form-group submitbtn">
                <button type="submit" class="btn-sm form-control btn-submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="container-fluid contact-location">
        <div class="row justify-content-center">
            <h3>Location</h3>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91977.73768037962!2d85.5052466645256!3d27.646703980363334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb0f37fe04b91d%3A0x7f00c6cabd1881a4!2zMjfCsDM4JzI5LjEiTiA4NcKwMzAnMzYuMCJF!5e1!3m2!1sen!2snp!4v1666458324502!5m2!1sen!2snp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@include('frontend.layout.footer')

@include('frontend.layout.script')

</body>
</html>
