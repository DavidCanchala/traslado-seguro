<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap.min.css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Comunas</title>
</head>

<body>

    <div class="container">
      <div class="p-3 d-flex justify-content-center">
      <div class="card w-75">
        <div class="card-header">
        <h1 class="h1 text-center fw-light">Listado de Comunas</h1>
      </div>
      <div class="card-body">
         <a href="{{ route('comunas.create') }}" class="btn btn-primary mb-3">Add</a>
        <table class="table table table-bordered">
            <thead>
              <tr class="text-center" style="background-color: greenyellow">
                <th scope="col">Id</th>
                <th scope="col">Comuna</th>
                <th scope="col">municipio</th>
                <th scope="col">opciones</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($comunas as $comuna)
                    
                <tr>
                    <th class="text-center" scope="row">{{  $comuna->comu_codi }}</th>
                    <td class="text-center">{{ $comuna->comu_nomb }}</td>
                    <td class="text-center">{{ $comuna->muni_nomb }}</td>
                    <td class="text-center">

                      <a href="{{ route('comunas.edit',['comuna'=>$comuna->comu_codi]) }}" class="btn btn-warning">Edit</a>

                      <form method="POST" action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi]) }}" style="display: inline-block">
                      @method('delete')
                      @csrf
                      <input type="submit" class="btn btn-danger" value="delete">
                      </form>
                    </td>
                </tr>

                @endforeach

            </tbody>
          </table>
        </div>
        </div>
      </div>
  </div>

</body>
{{-- bootstrap.bundle.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- popper.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
{{-- bootstrap.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>