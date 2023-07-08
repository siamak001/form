<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>فرم ذخیره اطلاعات</title>
</head>
<body>

<div class="container">
    <div class="main">
        <div class="div-right">
            <img src="{{asset('asset/image/back2.jpg')}}" alt="">
        </div>
        <div class="div-left">
            <h1>فرم ثبت رزومه</h1>
            <form action="{{url('form-store')}}" method="POST">
                @csrf
                <label>نام و نام خانوادگی</label>
                <input type="text" placeholder="نام را در این قسمت وارد کنید" name="name" value="{{old('name')}}">
                @error('name')
                <div class="danger">
                    <?php $massage = "نام و نام خانوادگی را وارد کنید."   ?>
                    {{$massage}}

                </div>
                @enderror
                <label>ایمیل شما</label>
                <input type="email" placeholder="ایمیل را در این قسمت وارد کنید" name="email" value="{{old('email')}}">
                @error('email')
                <div class="danger">
                        <?php $massage2 = "ایمیل را وارد کنید."   ?>
                    {{$massage2}}

                </div>
                @enderror
                <label>شماره تماس</label>
                <input type="text" placeholder="شماره تماس را در این قسمت وارد کنید" name="phone" value="{{old('phone')}}">
                @error('phone')
                <div class="danger">
                        <?php $massage3 = "شماره تماس را صحیح وارد کنید."   ?>
                    {{$massage3}}

                </div>
                @enderror
                <label>تخصص شما</label>
                <input type="text" placeholder="تخصص خود را در این قسمت وارد کنید" name="skill" value="{{old('skill')}}">
                @error('skill')
                <div class="danger">
                        <?php $massage4 = "تخصص را وارد کنید."   ?>
                    {{$massage4}}

                </div>
                @enderror
                <label>خلاصه رزومه شما</label>
                <textarea name="resume"></textarea>
                @error('resume')
                <div class="danger">
                        <?php $massage5 = "رزومه را وارد کنید."   ?>
                    {{$massage5}}

                </div>
                @enderror
                <button type="submit">ثبت اطلاعات</button>
            </form>
            @if(Session::has('success'))
            <div class="success">
                {{Session::get('success')}}
            </div>
            @endif
        </div>
    </div>
</div>

</body>
</html>
