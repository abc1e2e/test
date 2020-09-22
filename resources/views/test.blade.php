<!doctype html>
<html>
    <head>
        <title>Đăng kí</title>
        <link rel="stylesheet" href="{{('asset/css/1.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <style>
            /* * {
    margin: 0;
    padding: 0;
    border: none;
    font-family: 'Open Sans', sans-serif;
}

body {
    overflow: hidden;
    background-color: #ededed;
}

.to {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: minmax(100px, auto);
}

.form {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 470px;
    width: 292px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
}

h2 {
    margin-top: 50px;
    margin-bottom: 30px;
}

i.fab.fa-app-store-ios {
    display: block;
    margin-bottom: 50px;
    font-size: 28px;
}

label {
    margin-left: -126px;
    display: block;
    font-weight: lighter;
}

input {
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
}

input[type="text"] {
    padding: 5px;
    width: 70%;
}

input#submit {
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom: 10px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}

input#submit:hover {
    background: linear-gradient(to right, #fc466b, #3f5efb);
} */
        </style>
    </head>
    <body>
        @if(Session::has('insert'))
        <div class="alert-success text-center" id="res_message">
            {{ Session::get('insert') }}
        </div>
    @endif
        <script>
        $(document).ready(function(){
            setTimeout(function() {
                $('#res_message').hide();
                },3000);
        });
        </script>
        <div class="to">
        <form class="form" action="{{route('insert')}}" method="POST">
        
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
           
                 @if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
                    
                <h2>Đăng ký user</h2>
              
                <label style="margin-left: -150px;">Họ và tên</label>
                <input type="text" name="hoten" required value="{{old('hoten')}}">
                 
                <label style="margin-left: -180px;">Email</label>
                <input type="email" name="email" required value="{{old('email')}}">
                <label>Số điện thoại</label>
                <input type="text" name="sdt" required value="{{old('sdt')}}">  
                <label style="margin-left: -180px;">Content</label>
                <input type="text" name="content" required value="{{old('hoten')}}">
                <label style="margin-left: -180px;">Image</label>
                <input type="file" name="image" required value="{{old('hoten')}}">     
                <input id="submit" type="submit" name="submit" value="Gửi">
            </form>                
        </div>
    </body>
</html>