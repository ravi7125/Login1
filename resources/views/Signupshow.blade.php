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
    <br><br>

    @csrf
    <div class="alert alert-success" align ="center">
    @if(session()->has('message'))
    <button type="button" class="close" data- dismisss="alert">x</button>

    {{session()->get('message')}}
  @endif  
  </div>
    <table class="table table-hover table-green">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">city</th>
                <th scope="col">password</th>
                <th scope="col">Email</th>
                <td>button</td>
                <td>button</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($data as $dha)
                <td> {{$dha['id']}}</td>
                <td> {{$dha['name']}}</td>
                <td> {{$dha['city']}}</td>
                <td> {{$dha['password']}}</td>
                <td> {{$dha['email']}}</td>
                <td> <a href={{'delete/'.$dha['id']}}>delete</a></td>

                <td> <a href={{'update/'.$dha['id']}}>update</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>