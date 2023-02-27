<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LARAVELPROJECT</title>
</head>

<body>
    @include('cdn')
    <div class="container mt-4">
        <h3>Please Register Here:</h3>
        <hr>
        <form action="" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">UserName</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('username')}}"
                        placeholder="enter name">

                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputcity">Enter Your City</label>
                    <input type="text" class="form-control" name="city" value="{{old('city')}}"
                        placeholder="enter city">
                        <span class="text-danger">
                        @error('city')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Enter Your Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}"
                    placeholder="enter email"> <span class="text-danger">@error('email'){{$message}}@enderror </span>
            </div>
            <div class="form-group">
                <label for="password">Enter Your Password</label>
                <input type="text" class="form-control" name="password" id="password" value="{{old('password')}}"
                    placeholder="enter password">
            </div>
    </div>
    </div>

    <!-- <div class="form-group">
      <div class="form-check">
       <input class="form-check-input" type="checkbox" id="gridCheck">
       <label class="form-check-label" for="gridCheck">
         Check me out
      </label>
    </div> -->
    </div>
    <center><button type="submit" value="submit" class="btn btn-primary">Sign in</button></center>
    </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>