<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Loja</title>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5  pr-5 mb-5">

        <a href="#" class="navbar-brand">Loja</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('categoria') }}">Categoria</a>
                <a class="nav-link" href="{{ route('cadastrar') }}">Registro</a>

            </div>

        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>

    </nav>

    <div class="container">
        @if (isset($data))
            @foreach ($data as $produ)
                <div class="row">

                    <div class=" col-3 mb-3">
                        <div class="card">
                            <img src="{{ asset($produ->foto) }}" class="card-img-top">
                            <div class="card-title">{{$produ->nome}} = R$ {{$produ->valor}}</div>
                            <a href="#" class="btn btn-info">Item</a></a>
                                  
                        </div>

                    </div>



                </div>
                @endforeach
        @endif

    </div>

</body>

</html>
