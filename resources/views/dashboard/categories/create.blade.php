<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/>app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>CATEGORIES</title>
</head>
<body class="fondo1">
    <!-- dashboar/post/create.blade.php -->
    <h1 class="center">Ingreso de Create</h1><br>
    <h2 class="center">Andrew Roan Castro Diaz 201908011</h2>
    <br><br>
    <img src="images/1.png" alt="">
        <form action="{{route('categories.store')}}" method="post""> 
            <!-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        A simple danger alert—check it out! 
                        {{$error}}
                    </div>  
                @endforeach
            @endif -->
            
            <div>
                
                <div class="center">
                    @csrf
                    @if(session('status'))
                        <div class="alert alert-success" >
                            {{session('status')}}
                        </div>
                    @endif

                    <label for="" >Titulo</label>
                    <input class="margenleft" type="text" name="title">
                        @error('title')
                                <small class="text-danger">{{ $message }}</small>
                        @enderror

            
                    <label for="" class="margenleft">Url Corta</label>
                    <input class="margenleft1" type="text" name="slug">
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    
                <center>
                    <button  class="margenbutton1" type="">Enviar  </button>
                    
                </center>
                <!-- <div class="margen">
                    <label for="">Contenido</label>
                    <textarea class="margenleft2" name="content" id="" cols="20" rows="1"></textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    <br>
                </div> -->

                <!-- <div class="margen">
                    <label for="">Descripcion</label>
                    <textarea class="margenleft3" name="description" id="" cols="20" rows="1"></textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    <br>
                </div> -->

                
            </div>
            
        </form>

<!--     <div> BOTONES  
        <button type="button" class="btn btn-success">Editar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
    </div> -->

    <!--     <div class="col-md-12">
                <div >
                    <div >
                        Listado de Titulo
                    </div>

                    <table class="table table-striped task-table">
                        <thead>
                            <th>Titulo</th>
                            <th>URL Corta</th>
                            <th>Contenido</th>
                            <th>Descripcion</th>

                        </thead>
                        
                    </table>
                  
                </div>
    </div> -->
    



    <footer class="center">
        <p>Hecho por Andrew Castro</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>
</html>