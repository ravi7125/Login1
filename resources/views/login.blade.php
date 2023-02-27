<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @include('cdn')
    <!-- <form action="data" method="POST">
       -->
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <div class="text-center">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                                style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">LOGIN</h4>
                                            @if(session::has('errer'))
                                            <p class="text-danger"{{session::get('error') }}</p> 
                                        @endif                                       
                                    
                                        @if(session::has('success'))
                                            <p class="text-success"{{session::get('success') }}</p> 
                                        @endif          
                                    
                                    <form action="{{route('login') }}" method="post">
                                    @csrf
                                    @method('post')
                                    
                                    </div>
                                        <form>
                                            <p>Please login to your account</p>
                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example11" name="email"
                                                    class="form-control" placeholder="Phone number or email address" />
                                                <label class="form-label" for="form2Example11">Username</label>
                                                @if ($errors->has('email'))
                                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                                @endif
                                            
                                            
                                            
                                            
                                            
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="password" id="form2Example22" name="password"
                                                    class="form-control" />
                                                <label class="form-label" for="form2Example22">Password</label>
                                                @if ($errors->has('password'))
                                                <p class="text-danger">{{ $errors->first('password') }}</p>
                                                @endif
                                            
                                            
                                            
                                            
                                            </div>
                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Log
                                                    in</button>
                                                <a class="text-muted" href="#!">Forgot password?</a>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">Don't have an account?</p>
                                                <button typ="button" class="btn btn-outline-danger"><a
                                                        href="signup">signup</a></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">We are more than just a company</h4>
                                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>