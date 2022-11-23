<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .mainBox {
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 50%;
            margin: 0 auto;
            min-height: 400px;
            border: 1px solid black;
            margin-top: 150px;
            border-radius: 10px;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        }

        .imgBox img {
            width: 80%;
            height: 350px;
            margin: 20px 0 0 30px;
        }
        /* .errorMsg{
            width: 100%;
            height: 50px;
            background-color: ;
        } */
    </style>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="mainBox">
        <div class="imgBox">
            <img src="img/img-3.png" alt="">
        </div>
        <div class="p-5">
           
            @if(Session::has('fail'))
            <div class=" pt-1 bg-danger bg-opacity-25 border border-danger rounded">
                <p class="text-center mt-1 text-danger">{{Session::get('fail')}}</p>
            </div>
            @endif
            <h1 class="mb-4">Login</h1>
            <form action="{{route('loginUser')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <span style="color: red;"> @error('email'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    <span style="color: red;"> @error('password'){{$message}}@enderror</span>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <p class="mt-3">No account! <a href="{{url('/signup')}}">Create one</a></p>

        </div>

    </div>


</body>

</html>