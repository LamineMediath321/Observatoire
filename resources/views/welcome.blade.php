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
                <!-- <form method="POST" class="card-user-connected">
                    @csrf
                    <div class="user">
                        <div class="photo">
                            <svg width="30" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.25 9.75C11.25 13.4715 14.2785 16.5 18 16.5C21.7215 16.5 24.75 13.4715 24.75 9.75C24.75 6.0285 21.7215 3 18 3C14.2785 3 11.25 6.0285 11.25 9.75ZM30 31.5H31.5V30C31.5 24.2115 26.7885 19.5 21 19.5H15C9.21 19.5 4.5 24.2115 4.5 30V31.5H30Z" fill="white"/>
                            </svg>        
                        </div>
                        <div class="details-user">
                            <div class="name-user"><span id="prenom">Mame Awa Bousso </span> <span id="nom" class="nom ml-1">Diouf</span></div>
                            <div class="porte-post d-flex ml-1">
                                <svg width="11.5" height="11.5" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.50004 1.78125C7.94421 1.78125 6.45211 2.3993 5.35197 3.49943C4.25184 4.59957 3.63379 6.09167 3.63379 7.6475V7.6475V8.075C3.87129 11.2892 6.53921 13.874 9.50004 17.2188C12.5915 13.7275 15.3663 11.0833 15.3663 7.6475C15.3663 6.09167 14.7482 4.59957 13.6481 3.49943C12.548 2.3993 11.0559 1.78125 9.50004 1.78125ZM9.50004 4.82917C10.0584 4.82917 10.6042 4.99479 11.0684 5.30509C11.5326 5.61538 11.8944 6.05639 12.1079 6.57233C12.3214 7.08827 12.377 7.65594 12.2678 8.20352C12.1586 8.7511 11.8894 9.25397 11.4943 9.64852C11.0992 10.0431 10.5959 10.3116 10.0482 10.42C9.50048 10.5285 8.93289 10.472 8.41725 10.2578C7.90161 10.0436 7.4611 9.6812 7.15146 9.21656C6.84182 8.75191 6.67696 8.20586 6.67775 7.6475C6.6788 6.89967 6.97661 6.18282 7.50578 5.6544C8.03494 5.12597 8.75221 4.82917 9.50004 4.82917Z" stroke="#8A8A8A" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <input type="text" id="lieu"  placeholder="Lieu"/>
                           
                            </div>
                        </div>
                        
                    </div>
                    <div class="qd9">
                        <input type="text-area" id="description" class="queDire" placeholder="Qu’est ce qu'il y a de nouveau aujourd’hui ?">
                        <div class="medias d-flex">
                            <div class="photo d-flex">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 16V4C22 2.9 21.1 2 20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16ZM11 12L13.03 14.71L16 11L20 16H8L11 12ZM2 6V20C2 21.1 2.9 22 4 22H18V20H4V6H2Z" fill="#0FA958"/>
                                </svg>
                                <input type="file" id="photo"  hidden/>
                                <label for="photo" class="ml-3">Photo</label>
                            </div>
                            <div class="media">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.4134 6.66666H2.58671C2.2543 6.66666 1.93551 6.7987 1.70047 7.03375C1.46542 7.26879 1.33337 7.58759 1.33337 7.91999V20.08C1.33337 20.4124 1.46542 20.7312 1.70047 20.9662C1.93551 21.2013 2.2543 21.3333 2.58671 21.3333H21.4134C21.7458 21.3333 22.0646 21.2013 22.2996 20.9662C22.5347 20.7312 22.6667 20.4124 22.6667 20.08V7.91999C22.6667 7.58759 22.5347 7.26879 22.2996 7.03375C22.0646 6.7987 21.7458 6.66666 21.4134 6.66666ZM16.12 14.5533L9.60671 17.46C9.50529 17.5056 9.39408 17.5251 9.2832 17.5167C9.17232 17.5083 9.06529 17.4724 8.97186 17.4121C8.87844 17.3518 8.80158 17.2691 8.74828 17.1715C8.69498 17.0739 8.66694 16.9645 8.66671 16.8533V11.04C8.66694 10.9288 8.69498 10.8194 8.74828 10.7218C8.80158 10.6242 8.87844 10.5415 8.97186 10.4812C9.06529 10.4209 9.17232 10.385 9.2832 10.3766C9.39408 10.3682 9.50529 10.3877 9.60671 10.4333L16.12 13.3333C16.2383 13.3855 16.3389 13.4709 16.4095 13.5792C16.4801 13.6875 16.5177 13.814 16.5177 13.9433C16.5177 14.0726 16.4801 14.1991 16.4095 14.3074C16.3389 14.4157 16.2383 14.5012 16.12 14.5533Z" fill="#D27C2C"/>
                                    <path d="M20.0934 2.00001C20.0934 1.8232 20.0231 1.65363 19.8981 1.52861C19.7731 1.40358 19.6035 1.33334 19.4267 1.33334H4.76005C4.58324 1.33334 4.41367 1.40358 4.28865 1.52861C4.16362 1.65363 4.09338 1.8232 4.09338 2.00001V2.66668H20.0934V2.00001Z" fill="#D27C2C"/>
                                    <path d="M21.4134 4.66667C21.4134 4.48986 21.3431 4.32029 21.2181 4.19526C21.0931 4.07024 20.9235 4 20.7467 4H3.41337C3.23656 4 3.06699 4.07024 2.94197 4.19526C2.81694 4.32029 2.7467 4.48986 2.7467 4.66667V5.33333H21.4134V4.66667Z" fill="#D27C2C"/>
                                </svg>   
                                <input type="file" id="video"  hidden/>
                                <label for="video" class="ml-3">Vidéo</label> 
                            </div>
                            <div class="media">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 13H15M9 17H12M4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8.342C20 8.07556 19.9467 7.81181 19.8433 7.56624C19.7399 7.32068 19.5885 7.09824 19.398 6.912L14.958 2.57C14.5844 2.20466 14.0826 2.00007 13.56 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V4Z" stroke="#FFD233" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20" stroke="#FFD233" stroke-width="2" stroke-linejoin="round"/>
                                </svg>   
                                <input type="file" id="file"  hidden/>
                                <label for="file" class="ml-3">Document</label> 
                            </div>
                            <div class="publier">
                                <input type="submit" id="publier" value="Publier">
                            </div>
                        </div>
                    </div>
                </form> -->
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
                            <!-- Pour photo -->
                            <div class="media-post">
                                <img src="{{Storage::url($public->src)}}" alt="">

                            </div>
                            
                            <!-- Pour vidéo -->
                            <!-- <div class="media-post">
                                <video controls>
                                    <source src="#" type="video/mp4">
                                </video>
                            </div> -->
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
		