<div class="topbar">
  <div class="bienvenue">
    <h3>Bienvenue dans l'espace <span>Forum</span> </h3>
  </div>
  <div class="boutonInscrip">
   
    <!-- @guest
        <a class="btn btn-primary" href="{{ route('register') }}" role="button">Inscription</a>
        <a class="btn btn-outline-primary" href="{{ route('login') }}" role="button">Connexion</a>
    @endguest -->
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
