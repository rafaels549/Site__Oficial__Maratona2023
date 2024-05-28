<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       

        <title>{{ $title ?? 'Page Title' }}</title>
     
 
  <!-- Comando de responsividade do bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 

  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  @vite(['resources/saas/app.scss', 'resources/js/app.js'])

</head>
   
    <body>
    @include('components.header')
        {{ $slot }}
        <footer class="py-3 my-4 ">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Home</a></li>
              <li class="nav-item"><a href="{{route('programacao')}}" class="nav-link px-2 text-body-secondary">Programação</a></li>
              <li class="nav-item"><a href="{{ route('linguagens.programacao')}}" class="nav-link px-2 text-body-secondary">Linguagens de programação</a></li>
              <li class="nav-item"><a href="/contato_local" class="nav-link px-2 text-body-secondary">Contato e Local</a></li>
              <li class="nav-item"><a href="{{ route('sobrenos')}}" class="nav-link px-2 text-body-secondary">Sobre nós</a></li>
              <li class="nav-item"><a href="{{ route('colaboradores')}}" class="nav-link px-2 text-body-secondary">Colaboradores</a></li>
            </ul>
            <div class="d-flex justify-content-center align-items-center container-fluid">
              <div class="row">
        
                <div class="d-flex align-items-center justify-content-center col-md-12">
                  <p class=" text-body-secondary ">2023 - Universidade de Taubaté</p>
                  <img src="storage/imagens/unitau-logo-1.png" height="70" class="m-4">
                </div>
                <div class="col-md-6 imgf">
                  <img src="storage/imagens/footer_SBC.png" srcset="">
                  
                </div>
                <div class="col-md-6">
                    <img src="storage/imagens/footer_ICPC.png" height="90" alt="" srcset="">

                </div>
              </div>
            </div>
          </footer>
    </body>

    
</html>

