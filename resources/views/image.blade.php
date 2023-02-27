<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
</head>

<body>
    @include('cdn')
    <div class="row justify-content-center">
        <div class="col-sm-6 mt-4 ">
            <div class="card p-4">
                <form action="/upload-image" method="post" >
                    @csrf
                    <div>
                        <label>Image</label>
                        <input type="file" name="profile" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>