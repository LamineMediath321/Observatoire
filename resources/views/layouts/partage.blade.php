<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Partager avec moi</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="css/partagePage.css">
        <link rel="stylesheet" href="css/modal.css">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body >
        <div class="min-h-screen bg-gray-100">
            @include('layouts.partials.navig')
             <div class="container">
                @include('layouts.partials.topDashboard')
                <div class="main-side">
                    <div class="mainMedias">
                        <div class="les-medias">
                        <div class="group-medias">
                <h4>Images</h4>
                <div class="list-of-medias">
                @foreach ($photos as $photo)
                    
                    <div class="card oneCard" style="width: 210px;">
                        <img class="card-img-top" src="{{Storage::url($photo->src)}}" alt="Card image cap">
                        <div class="card-body">
                            <svg width="13" height="13" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_63_430)">
                                    <path d="M9.37817 8.59375C9.37817 9.21535 9.13124 9.81149 8.69171 10.251C8.25217 10.6906 7.65602 10.9375 7.03442 10.9375C6.41282 10.9375 5.81668 10.6906 5.37714 10.251C4.9376 9.81149 4.69067 9.21535 4.69067 8.59375C4.69067 7.97215 4.9376 7.37601 5.37714 6.93647C5.81668 6.49693 6.41282 6.25 7.03442 6.25C7.65602 6.25 8.25217 6.49693 8.69171 6.93647C9.13124 7.37601 9.37817 7.97215 9.37817 8.59375Z" fill="#FF9A62"/>
                                    <path d="M3.12817 1.5625C2.29937 1.5625 1.50452 1.89174 0.918465 2.47779C0.332414 3.06384 0.00317383 3.8587 0.00317383 4.6875V20.3125C0.00317383 21.1413 0.332414 21.9362 0.918465 22.5222C1.50452 23.1083 2.29937 23.4375 3.12817 23.4375H21.8782C22.707 23.4375 23.5018 23.1083 24.0879 22.5222C24.6739 21.9362 25.0032 21.1413 25.0032 20.3125V4.6875C25.0032 3.8587 24.6739 3.06384 24.0879 2.47779C23.5018 1.89174 22.707 1.5625 21.8782 1.5625H3.12817ZM21.8782 3.125C22.2926 3.125 22.69 3.28962 22.983 3.58265C23.2761 3.87567 23.4407 4.2731 23.4407 4.6875V14.8438L17.5391 11.8016C17.3926 11.7282 17.2267 11.7027 17.0649 11.7288C16.9031 11.7549 16.7536 11.8312 16.6375 11.9469L10.8407 17.7437L6.68442 14.975C6.53436 14.8751 6.35436 14.8302 6.17495 14.8478C5.99554 14.8655 5.82776 14.9446 5.70005 15.0719L1.56567 18.75V4.6875C1.56567 4.2731 1.73029 3.87567 2.02332 3.58265C2.31635 3.28962 2.71377 3.125 3.12817 3.125H21.8782Z" fill="#FF9A62"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_63_430">
                                        <rect width="25" height="25" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>    
                            <span class="card-text"> {{$photo->titre}} </span>
                            <a href="{{route('publier_by',['donnee'=> $photo])}}" id="share">
                                <svg width="13" height="13" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0.25C3.71969 0.25 0.25 3.71969 0.25 8C0.25 12.2803 3.71969 15.75 8 15.75C12.2803 15.75 15.75 12.2803 15.75 8C15.75 3.71969 12.2803 0.25 8 0.25ZM13 6.98438V7.20094C13 7.38437 12.8962 7.55219 12.7322 7.63406L12.2513 7.87469C12.1749 7.91291 12.0897 7.93024 12.0045 7.92492C11.9193 7.91959 11.837 7.8918 11.7659 7.84438L11.1969 7.465C11.1355 7.42411 11.0656 7.39777 10.9925 7.38797C10.9194 7.37816 10.845 7.38517 10.775 7.40844L10.6922 7.43594C10.3891 7.53687 10.2653 7.89813 10.4425 8.16406L10.8562 8.78469C10.9459 8.91937 11.0972 9.00031 11.2591 9.00031H11.5156C11.7831 9.00031 12 9.21719 12 9.48469V9.83906C12 9.94375 11.9659 10.0459 11.9031 10.1297L11.3175 10.9103C11.2731 10.9697 11.2428 11.0384 11.2291 11.1112L11.0947 11.8247C11.0753 11.9275 11.0231 12.0213 10.9459 12.0922C10.6498 12.3634 10.3875 12.6693 10.1647 13.0034L9.7575 13.6144C9.67831 13.7332 9.57101 13.8306 9.44514 13.898C9.31927 13.9653 9.17871 14.0006 9.03594 14.0006C8.7075 14.0006 8.40719 13.815 8.26031 13.5212C8.08911 13.1788 7.99998 12.8013 8 12.4184V11.4844C8 11.2169 7.78312 11 7.51562 11H6.70687C6.25406 11 5.82 10.82 5.49969 10.5C5.17962 10.1798 4.99977 9.74557 4.99969 9.29281V8.85344C4.99969 8.31625 5.25281 7.81031 5.6825 7.48781L6.54437 6.84125C6.83992 6.61963 7.19934 6.49978 7.56875 6.49969H7.59656C7.86156 6.49969 8.12312 6.56125 8.36 6.68L8.82 6.91C8.935 6.9675 9.06781 6.97688 9.18969 6.93625L10.6681 6.44344C10.8659 6.3775 10.9994 6.1925 10.9994 5.98406C10.9994 5.71656 10.7825 5.49969 10.515 5.49969H10.1997C10.0713 5.49969 9.94812 5.44875 9.85719 5.35781L9.64094 5.14156C9.59597 5.09657 9.54257 5.06089 9.4838 5.03654C9.42504 5.0122 9.36205 4.99968 9.29844 4.99969H6.48438C6.21688 4.99969 6 4.78281 6 4.51531V4.37781C6 4.15562 6.15125 3.96188 6.36688 3.90781L6.81844 3.795C6.93531 3.76562 7.03719 3.69406 7.10406 3.59375L7.35656 3.21531C7.44625 3.08063 7.5975 2.99969 7.75938 2.99969H8.51594C8.78344 2.99969 9.00031 2.78281 9.00031 2.51531V1.83719C11.4759 2.23844 13.4644 4.09437 14.0603 6.5H13.4844C13.2169 6.5 13 6.71688 13 6.98438Z" fill="#000000"/>
                                </svg>  
                            </a>
                            <a href="{{route('delete',['id'=> $photo->id])}} ">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 5H14C14 4.46957 13.7893 3.96086 13.4142 3.58579C13.0391 3.21071 12.5304 3 12 3C11.4696 3 10.9609 3.21071 10.5858 3.58579C10.2107 3.96086 10 4.46957 10 5ZM8.5 5C8.5 4.54037 8.59053 4.08525 8.76642 3.66061C8.94231 3.23597 9.20012 2.85013 9.52513 2.52513C9.85013 2.20012 10.236 1.94231 10.6606 1.76642C11.0852 1.59053 11.5404 1.5 12 1.5C12.4596 1.5 12.9148 1.59053 13.3394 1.76642C13.764 1.94231 14.1499 2.20012 14.4749 2.52513C14.7999 2.85013 15.0577 3.23597 15.2336 3.66061C15.4095 4.08525 15.5 4.54037 15.5 5H21.25C21.4489 5 21.6397 5.07902 21.7803 5.21967C21.921 5.36032 22 5.55109 22 5.75C22 5.94891 21.921 6.13968 21.7803 6.28033C21.6397 6.42098 21.4489 6.5 21.25 6.5H19.93L18.76 18.611C18.6702 19.539 18.238 20.4002 17.5477 21.0268C16.8573 21.6534 15.9583 22.0004 15.026 22H8.974C8.04186 22.0001 7.1431 21.653 6.45295 21.0265C5.7628 20.3999 5.33073 19.5388 5.241 18.611L4.07 6.5H2.75C2.55109 6.5 2.36032 6.42098 2.21967 6.28033C2.07902 6.13968 2 5.94891 2 5.75C2 5.55109 2.07902 5.36032 2.21967 5.21967C2.36032 5.07902 2.55109 5 2.75 5H8.5ZM10.5 9.75C10.5 9.55109 10.421 9.36032 10.2803 9.21967C10.1397 9.07902 9.94891 9 9.75 9C9.55109 9 9.36032 9.07902 9.21967 9.21967C9.07902 9.36032 9 9.55109 9 9.75V17.25C9 17.4489 9.07902 17.6397 9.21967 17.7803C9.36032 17.921 9.55109 18 9.75 18C9.94891 18 10.1397 17.921 10.2803 17.7803C10.421 17.6397 10.5 17.4489 10.5 17.25V9.75ZM14.25 9C14.0511 9 13.8603 9.07902 13.7197 9.21967C13.579 9.36032 13.5 9.55109 13.5 9.75V17.25C13.5 17.4489 13.579 17.6397 13.7197 17.7803C13.8603 17.921 14.0511 18 14.25 18C14.4489 18 14.6397 17.921 14.7803 17.7803C14.921 17.6397 15 17.4489 15 17.25V9.75C15 9.55109 14.921 9.36032 14.7803 9.21967C14.6397 9.07902 14.4489 9 14.25 9Z" fill="#F24E1E"/>
                                </svg> 
                            </a>
                            <a href="" id="share" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                <svg width="14" height="14" class="share" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 12L14 5V9C7 10 4 15 3 20C5.5 16.5 9 14.9 14 14.9V19L21 12Z" fill="#85B6FF"/>
                                </svg>

                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
              
            </div>
                    <!-- espace des vidéos -->
          @if ($videos)
                <div class="group-medias">
                <h4>Vidéos</h4>
                <div class="list-of-medias">
                    @foreach ($videos as $video)
                    <div class="card oneCard" style="width: 210px;">
                        <video controls>
                            <source src="{{Storage::url($video->src)}}" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <svg width="15" height="15" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.0001 5.33333H8.00008C5.05456 5.33333 2.66675 7.72114 2.66675 10.6667V21.3333C2.66675 24.2788 5.05456 26.6667 8.00008 26.6667H24.0001C26.9456 26.6667 29.3334 24.2788 29.3334 21.3333V10.6667C29.3334 7.72114 26.9456 5.33333 24.0001 5.33333Z" stroke="#FFD233" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.0002 16L13.3335 12V20L20.0002 16Z" stroke="#FFD233" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>   
                            <span class="card-text">{{$video->titre}} </span>
                            <a href="{{route('publier_by',['donnee'=> $video])}}" id="share">
                                <svg width="14" height="14" class="share" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 12L14 5V9C7 10 4 15 3 20C5.5 16.5 9 14.9 14 14.9V19L21 12Z" fill="#85B6FF"/>
                                </svg>  
                            </a>
                            <a href="{{route('delete',['id'=> $video->id])}} ">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 5H14C14 4.46957 13.7893 3.96086 13.4142 3.58579C13.0391 3.21071 12.5304 3 12 3C11.4696 3 10.9609 3.21071 10.5858 3.58579C10.2107 3.96086 10 4.46957 10 5ZM8.5 5C8.5 4.54037 8.59053 4.08525 8.76642 3.66061C8.94231 3.23597 9.20012 2.85013 9.52513 2.52513C9.85013 2.20012 10.236 1.94231 10.6606 1.76642C11.0852 1.59053 11.5404 1.5 12 1.5C12.4596 1.5 12.9148 1.59053 13.3394 1.76642C13.764 1.94231 14.1499 2.20012 14.4749 2.52513C14.7999 2.85013 15.0577 3.23597 15.2336 3.66061C15.4095 4.08525 15.5 4.54037 15.5 5H21.25C21.4489 5 21.6397 5.07902 21.7803 5.21967C21.921 5.36032 22 5.55109 22 5.75C22 5.94891 21.921 6.13968 21.7803 6.28033C21.6397 6.42098 21.4489 6.5 21.25 6.5H19.93L18.76 18.611C18.6702 19.539 18.238 20.4002 17.5477 21.0268C16.8573 21.6534 15.9583 22.0004 15.026 22H8.974C8.04186 22.0001 7.1431 21.653 6.45295 21.0265C5.7628 20.3999 5.33073 19.5388 5.241 18.611L4.07 6.5H2.75C2.55109 6.5 2.36032 6.42098 2.21967 6.28033C2.07902 6.13968 2 5.94891 2 5.75C2 5.55109 2.07902 5.36032 2.21967 5.21967C2.36032 5.07902 2.55109 5 2.75 5H8.5ZM10.5 9.75C10.5 9.55109 10.421 9.36032 10.2803 9.21967C10.1397 9.07902 9.94891 9 9.75 9C9.55109 9 9.36032 9.07902 9.21967 9.21967C9.07902 9.36032 9 9.55109 9 9.75V17.25C9 17.4489 9.07902 17.6397 9.21967 17.7803C9.36032 17.921 9.55109 18 9.75 18C9.94891 18 10.1397 17.921 10.2803 17.7803C10.421 17.6397 10.5 17.4489 10.5 17.25V9.75ZM14.25 9C14.0511 9 13.8603 9.07902 13.7197 9.21967C13.579 9.36032 13.5 9.55109 13.5 9.75V17.25C13.5 17.4489 13.579 17.6397 13.7197 17.7803C13.8603 17.921 14.0511 18 14.25 18C14.4489 18 14.6397 17.921 14.7803 17.7803C14.921 17.6397 15 17.4489 15 17.25V9.75C15 9.55109 14.921 9.36032 14.7803 9.21967C14.6397 9.07902 14.4489 9 14.25 9Z" fill="#F24E1E"/>
                                </svg> 
                            </a>
                            <a href="" id="share" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                <svg width="14" height="14" class="share" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 12L14 5V9C7 10 4 15 3 20C5.5 16.5 9 14.9 14 14.9V19L21 12Z" fill="#85B6FF"/>
                                </svg>

                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          @endif
              <!-- espace des documents -->
          @if ($documents)
              <div class="group-medias">
                <h4>Documents</h4>
                <div class="list-of-medias">
                    <div class="card oneCard" id="document" style="width: 210px;">
                                <!-- <iframe src="/Documents/Programme_annuel.pdf" frameborder="0"></iframe> -->
                        <embed src="/Documents/Programme_annuel.pdf" style="scrollbar-width: 10px; border-radius: 20px 20px 0 0;" type="">
                                <!-- <object data="/Documents/Programme_annuel.pdf" type="application/pdf">
                                </object> -->
                        <div class="card-body ">
                            <svg width="13" height="13" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.74992 14.0833H16.2499M9.74992 18.4167H12.9999M4.33325 4.33332V21.6667C4.33325 22.2413 4.56153 22.7924 4.96785 23.1987C5.37418 23.605 5.92528 23.8333 6.49992 23.8333H19.4999C20.0746 23.8333 20.6257 23.605 21.032 23.1987C21.4383 22.7924 21.6666 22.2413 21.6666 21.6667V9.03716C21.6666 8.74851 21.6088 8.46279 21.4968 8.19675C21.3849 7.93072 21.2208 7.68975 21.0144 7.48799L16.2044 2.78416C15.7996 2.38837 15.256 2.16673 14.6899 2.16666H6.49992C5.92528 2.16666 5.37418 2.39493 4.96785 2.80126C4.56153 3.20759 4.33325 3.75869 4.33325 4.33332V4.33332Z" stroke="#0FA958" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.1665 2.16666V6.49999C15.1665 7.07463 15.3948 7.62573 15.8011 8.03205C16.2074 8.43838 16.7585 8.66666 17.3332 8.66666H21.6665" stroke="#0FA958" stroke-width="2" stroke-linejoin="round"/>
                            </svg>                                        
                            <span class="card-text">titre document</span>
                            <button id="share">
                                <svg width="14" height="14" class="share" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 12L14 5V9C7 10 4 15 3 20C5.5 16.5 9 14.9 14 14.9V19L21 12Z" fill="#85B6FF"/>
                                </svg>  
                            </button>
                            <button>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 5H14C14 4.46957 13.7893 3.96086 13.4142 3.58579C13.0391 3.21071 12.5304 3 12 3C11.4696 3 10.9609 3.21071 10.5858 3.58579C10.2107 3.96086 10 4.46957 10 5ZM8.5 5C8.5 4.54037 8.59053 4.08525 8.76642 3.66061C8.94231 3.23597 9.20012 2.85013 9.52513 2.52513C9.85013 2.20012 10.236 1.94231 10.6606 1.76642C11.0852 1.59053 11.5404 1.5 12 1.5C12.4596 1.5 12.9148 1.59053 13.3394 1.76642C13.764 1.94231 14.1499 2.20012 14.4749 2.52513C14.7999 2.85013 15.0577 3.23597 15.2336 3.66061C15.4095 4.08525 15.5 4.54037 15.5 5H21.25C21.4489 5 21.6397 5.07902 21.7803 5.21967C21.921 5.36032 22 5.55109 22 5.75C22 5.94891 21.921 6.13968 21.7803 6.28033C21.6397 6.42098 21.4489 6.5 21.25 6.5H19.93L18.76 18.611C18.6702 19.539 18.238 20.4002 17.5477 21.0268C16.8573 21.6534 15.9583 22.0004 15.026 22H8.974C8.04186 22.0001 7.1431 21.653 6.45295 21.0265C5.7628 20.3999 5.33073 19.5388 5.241 18.611L4.07 6.5H2.75C2.55109 6.5 2.36032 6.42098 2.21967 6.28033C2.07902 6.13968 2 5.94891 2 5.75C2 5.55109 2.07902 5.36032 2.21967 5.21967C2.36032 5.07902 2.55109 5 2.75 5H8.5ZM10.5 9.75C10.5 9.55109 10.421 9.36032 10.2803 9.21967C10.1397 9.07902 9.94891 9 9.75 9C9.55109 9 9.36032 9.07902 9.21967 9.21967C9.07902 9.36032 9 9.55109 9 9.75V17.25C9 17.4489 9.07902 17.6397 9.21967 17.7803C9.36032 17.921 9.55109 18 9.75 18C9.94891 18 10.1397 17.921 10.2803 17.7803C10.421 17.6397 10.5 17.4489 10.5 17.25V9.75ZM14.25 9C14.0511 9 13.8603 9.07902 13.7197 9.21967C13.579 9.36032 13.5 9.55109 13.5 9.75V17.25C13.5 17.4489 13.579 17.6397 13.7197 17.7803C13.8603 17.921 14.0511 18 14.25 18C14.4489 18 14.6397 17.921 14.7803 17.7803C14.921 17.6397 15 17.4489 15 17.25V9.75C15 9.55109 14.921 9.36032 14.7803 9.21967C14.6397 9.07902 14.4489 9 14.25 9Z" fill="#F24E1E"/>
                                </svg> 
                            </button>
                           
                        </div>
                    </div>
                </div>
            </div>
          @endif
                        </div>
                    </div>
                    
                </div> 
        </div> 
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title" id="exampleModalLabel">Ajout Média</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- espace de poste utilisateur -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{route('stocker')}} " enctype="multipart/form-data">
                             @csrf
                            <div class="modal-body">
                                <div class="mt-4 d-flex">
                                    <input type="text" name="lieu" id="lieuLit" class="outpout" placeholder="Lieu sur le littoral"  required>   
                                </div>
                                <div class="mt-4 d-flex">
                                    <input type="text" name="titre" id="titre" class="outpout" placeholder="Titre"  required>   
                                </div>
                                <div class="mt-4 d-flex">
                                    <input type="text" name="description" id="desc" class="outpout" placeholder="Description"  required>   
                                </div>
                                <div class="medias d-flex">
                                    <div class="mt-4 d-flex">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22 16V4C22 2.9 21.1 2 20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16ZM11 12L13.03 14.71L16 11L20 16H8L11 12ZM2 6V20C2 21.1 2.9 22 4 22H18V20H4V6H2Z" fill="#0FA958"/>
                                        </svg>
                                        <input type="file" id="photo" name="photo"  hidden/>
                                        <label for="photo" class="ml-3">Photo</label>
                                    </div>
                                    <div class="mt-4 d-flex">
                                         <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.4134 6.66666H2.58671C2.2543 6.66666 1.93551 6.7987 1.70047 7.03375C1.46542 7.26879 1.33337 7.58759 1.33337 7.91999V20.08C1.33337 20.4124 1.46542 20.7312 1.70047 20.9662C1.93551 21.2013 2.2543 21.3333 2.58671 21.3333H21.4134C21.7458 21.3333 22.0646 21.2013 22.2996 20.9662C22.5347 20.7312 22.6667 20.4124 22.6667 20.08V7.91999C22.6667 7.58759 22.5347 7.26879 22.2996 7.03375C22.0646 6.7987 21.7458 6.66666 21.4134 6.66666ZM16.12 14.5533L9.60671 17.46C9.50529 17.5056 9.39408 17.5251 9.2832 17.5167C9.17232 17.5083 9.06529 17.4724 8.97186 17.4121C8.87844 17.3518 8.80158 17.2691 8.74828 17.1715C8.69498 17.0739 8.66694 16.9645 8.66671 16.8533V11.04C8.66694 10.9288 8.69498 10.8194 8.74828 10.7218C8.80158 10.6242 8.87844 10.5415 8.97186 10.4812C9.06529 10.4209 9.17232 10.385 9.2832 10.3766C9.39408 10.3682 9.50529 10.3877 9.60671 10.4333L16.12 13.3333C16.2383 13.3855 16.3389 13.4709 16.4095 13.5792C16.4801 13.6875 16.5177 13.814 16.5177 13.9433C16.5177 14.0726 16.4801 14.1991 16.4095 14.3074C16.3389 14.4157 16.2383 14.5012 16.12 14.5533Z" fill="#D27C2C"/>
                                            <path d="M20.0934 2.00001C20.0934 1.8232 20.0231 1.65363 19.8981 1.52861C19.7731 1.40358 19.6035 1.33334 19.4267 1.33334H4.76005C4.58324 1.33334 4.41367 1.40358 4.28865 1.52861C4.16362 1.65363 4.09338 1.8232 4.09338 2.00001V2.66668H20.0934V2.00001Z" fill="#D27C2C"/>
                                            <path d="M21.4134 4.66667C21.4134 4.48986 21.3431 4.32029 21.2181 4.19526C21.0931 4.07024 20.9235 4 20.7467 4H3.41337C3.23656 4 3.06699 4.07024 2.94197 4.19526C2.81694 4.32029 2.7467 4.48986 2.7467 4.66667V5.33333H21.4134V4.66667Z" fill="#D27C2C"/>
                                        </svg>   
                                        <input name="video" type="file" id="video"  hidden/>
                                        <label for="video" class="ml-3">Vidéo</label> 
                                    </div>
                                    <div class="mt-4 d-flex">
                                          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 13H15M9 17H12M4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8.342C20 8.07556 19.9467 7.81181 19.8433 7.56624C19.7399 7.32068 19.5885 7.09824 19.398 6.912L14.958 2.57C14.5844 2.20466 14.0826 2.00007 13.56 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V4Z" stroke="#FFD233" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20" stroke="#FFD233" stroke-width="2" stroke-linejoin="round"/>
                                            </svg>   
                                           <input name="documents" type="file" id="documents"  hidden/>
                                        <label for="documents" class="ml-3">Document</label> 
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title" id="exampleModalLabel">Ajout Média</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- espace de poste utilisateur -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{route('stocker')}} " enctype="multipart/form-data">
                             @csrf
                            <div class="modal-body">
                                <div class="mt-4 d-flex">
                                    <!-- <input type="text" name="lieu" id="lieuLit" class="outpout " placeholder="Lieu sur le littoral"  required> -->
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>   
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn">Partager</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>   
       
    </body>
</html>

