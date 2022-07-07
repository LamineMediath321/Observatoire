@extends('layouts.base')


@section('content')
    <!-- Page Content  -->
        
    <script src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <div class="main-side">
            <!-- Contenu posts -->
            <div class="mainPosts">
                <!-- espace de poste utilisateur -->

                <x-espacePost></x-espacePost>
                <!-- user post -->
                @if ($publiques)
                    @foreach ($publiques as $public)
                 <div class="user-post">
                    <div class="user">
                        <div class="photo">
                            <svg width="30" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.25 9.75C11.25 13.4715 14.2785 16.5 18 16.5C21.7215 16.5 24.75 13.4715 24.75 9.75C24.75 6.0285 21.7215 3 18 3C14.2785 3 11.25 6.0285 11.25 9.75ZM30 31.5H31.5V30C31.5 24.2115 26.7885 19.5 21 19.5H15C9.21 19.5 4.5 24.2115 4.5 30V31.5H30Z" fill="white"/>
                            </svg>        
                        </div>
                        <div class="details-user">
                            <div class="name-user"><span id="prenom">{{$public->user->nom}} </span> <span class="nom ml-1">{{$public->user->prenom}}</span></div>
                            <div class="porte-post d-flex ml-1">
                                <svg width="11.5" height="11.5" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.50004 1.78125C7.94421 1.78125 6.45211 2.3993 5.35197 3.49943C4.25184 4.59957 3.63379 6.09167 3.63379 7.6475V7.6475V8.075C3.87129 11.2892 6.53921 13.874 9.50004 17.2188C12.5915 13.7275 15.3663 11.0833 15.3663 7.6475C15.3663 6.09167 14.7482 4.59957 13.6481 3.49943C12.548 2.3993 11.0559 1.78125 9.50004 1.78125ZM9.50004 4.82917C10.0584 4.82917 10.6042 4.99479 11.0684 5.30509C11.5326 5.61538 11.8944 6.05639 12.1079 6.57233C12.3214 7.08827 12.377 7.65594 12.2678 8.20352C12.1586 8.7511 11.8894 9.25397 11.4943 9.64852C11.0992 10.0431 10.5959 10.3116 10.0482 10.42C9.50048 10.5285 8.93289 10.472 8.41725 10.2578C7.90161 10.0436 7.4611 9.6812 7.15146 9.21656C6.84182 8.75191 6.67696 8.20586 6.67775 7.6475C6.6788 6.89967 6.97661 6.18282 7.50578 5.6544C8.03494 5.12597 8.75221 4.82917 9.50004 4.82917Z" stroke="#8A8A8A" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="text-porte ml-1"> {{$public->lieu}} </span>
                            </div>
                        </div>
                    </div>
                    <div class="post">
                        <p class="desc-post">
                            {{$public->description}}

                        </p>
                        <div class="medias">
                            @if ($public->type=='photo')
                                <!-- Pour photo -->
                                <div class="media-post">
                                    <img src="{{Storage::url($public->src)}}" alt="">
                                </div>
                            @else
                                 <!-- Pour vidéo -->
                                <div class="media-post">
                                    <video controls>
                                        <source src="{{Storage::url($public->src)}}" type="video/mp4">
                                    </video>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                    @endforeach
                @else
                    <p>Pas de donnees</p>
                @endif
               
            </div>
            @include('layouts.partials.sidebar')
        </div>

@endsection
		