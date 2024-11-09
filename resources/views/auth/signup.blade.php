<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="padding-top: 100px;">
                @if (session('succes'))
                    <div class="alert alert-succes">
                        {{ session('succes') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                    {{ session('') }}
                    </div>
                @endif
            <form method="POST" action="{{ route('storeSignup') }}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                @csrf
                <button class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>