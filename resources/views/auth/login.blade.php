<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authenication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 my-3">
                <h4>Login</h4>
                <hr>
                <form action="{{route('login-user')}}" method="POST">

                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif

                    @csrf

                    <div class="form-group my-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email"
                            value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group my-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password"
                            value="">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <button class="btn btn-block btn-primary  my-2" type="submit">Login</button>

                    <br>
                    <a href="registration">New User !! Register Here.</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
