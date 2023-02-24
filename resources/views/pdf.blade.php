<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container mb-5">
        <div class="container d-flex justify-content-center mt-4">
            <h1 class="text-center">
                    Productos en Inventario
            </h1>
            <hr class="container">
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="col-ms-1">
            <label  for="">C 1 = Guitarras| C 2 = Bajos| C 3 = Baterias | C 4 = Pianos </label>
        </div>
        <div class="col-ms-6">
            <label for="">C 5 = Teclados| C 6 = Amplificadores | C 7 = Accesorios </label>
        </div>
    </div>

    <br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    {{-- <th scope="col">Foto</th> --}}
                    <th scope="col">Código</th>
                    <th scope="col">Estado</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $item)
                    <tr>
                        <td>{{ $item->nombre }}</td>
                        <td class="text-center">{{ $item->categoria }}</td>
                        <td class="text-center">{{ $item->codigo }}</td>
                        {{-- <td class="text-center"><img src="{{ $item->imagen }}" alt="" width="100px"></td> --}}
                        <td class="text-center"></td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</body>

</html>
