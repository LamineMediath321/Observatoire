<header class="py-3 mb-3 border-bottom">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">

      <div class="d-flex align-items-center">
        <form class="w-100 me-3 mr-3" role="search">
          <input type="search" class="form-control around" placeholder="Rechercher..." aria-label="Search">
        </form>

        <div class="flex-shrink-0">
          <a href="{{route('register')}}" class="btn btn-info text-white">
            Inscription
          </a>
           <a href="{{route('login')}}" class="btn btn-outline-info" >
            connexion
          </a>
          
        </div>
      </div>
    </div>
  </header>