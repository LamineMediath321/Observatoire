<div class="topbar">
  <div class="bienvenue">
    <h3>Bienvenue dans l'espace <span>Forum</span> </h3>
  </div>
  <div class="boutonInscrip">
   
    
    @auth
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn">
          {{ __('Déconnexion') }}
        </button>
      </form>
    @endauth
  </div>
</div>
