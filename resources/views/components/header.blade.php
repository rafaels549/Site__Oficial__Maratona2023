<nav class="navbar fixed-top menu">
    <div class="container-fluid justify-content-start">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <div class="linha"></div>
        <div class="linha"></div>
        <div class="linha"></div>
      </button>
      <img src="{{asset('storage/imagens/logo-unitau.png')}}" height ="90" width="68" class="m-3"/>
      <img src="{{asset('storage/imagens/maratona-logo.jpg')}}" height="90" srcset="">
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-body menu2">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

            <li class="nav-item"> 
              <a class="nav-link" href="/inscricao">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                  <path fill="#15457A"
                  d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75l1.83-1.83z" />
                </svg>  Inscrição</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/programacao"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                  <path fill="#15457A"
                  d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z" />
                </svg>  Programação</a>
              </li>

                <li class="nav-item" >
                  <a class="nav-link linguagens" href="{{ route('linguagens.programacao')}}"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                      <path fill="#15457A"
                      d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z" />
                    </svg>  Linguagens de Programação</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/contato_local">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="#15457A"
                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2z" />
                      </svg>  Contato e local</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('sobrenos') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                          <path fill="#15457A" fill-rule="evenodd"
                          d="M16.67 13.13C18.04 14.06 19 15.32 19 17v3h4v-3c0-2.18-3.57-3.47-6.33-3.87z" />
                          <circle cx="9" cy="8" r="4" fill="#15457A" fill-rule="evenodd" />
                          <path fill="#15457A" fill-rule="evenodd"
                          d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4c-.47 0-.91.1-1.33.24a5.98 5.98 0 0 1 0 7.52c.42.14.86.24 1.33.24zm-6 1c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z" />
                        </svg>  Sobre nós </a>
                      </li>

                      <li class="nav-item" style="padding:0px">
                      <a class="nav-link" href="{{ route('colaboradores') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="50 -960 960 960" width="48" fill="#15457A" ><path d="M480-720q-33 0-56.5-23.5T400-800q0-33 23.5-56.5T480-880q33 0 56.5 23.5T560-800q0 33-23.5 56.5T480-720ZM360-80v-520q-60-5-122-15t-118-25l20-80q78 21 166 30.5t174 9.5q86 0 174-9.5T820-720l20 80q-56 15-118 25t-122 15v520h-80v-240h-80v240h-80Z"/></svg>Colaboradores </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
            <!-- fim menu -->
          </header>