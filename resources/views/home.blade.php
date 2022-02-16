<html>
    <head>
    <script src="https://kit.fontawesome.com/bb3047c55a.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/javascript.js') }}" ></script>
</head>
<body class="body_color">
@extends('layouts.app')

@section('content')

 
    
   </header>
   <!--Main Navigation-->
 
   <!--Main layout-->
   <main class="">
     <div class="container-fluid p-0">
       <!--Section: Content-->

       
       <section class="">
         <div class="my_nav">
         <h1 class="mb-3 bold pb-3 text-center pt-3" >User Panel</h1>
        </div>
         <div>
        <!-- <button class="btn" >
           Edit
         </button>
         <button type="button" class="btn btn-primary pt-2 pb-2" data-bs-toggle="modal" data-bs-target="#editModal">
            <i class="fas fa-plus"></i>
          </button>

          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
 
     @include('updateProfile')
       
       </div>
       
     </div>
   </div>
 </div>
</div>-->
         </div>
           @yield('gallery')
       </section>
</div>  
   
 
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog ">
   <div class="modal-content bg-dark pl-3 pr-3">
      
       <div class="modal-body">
       @include('picture')
       </div>
       </div>
     </div>
   </div>
 </div>
            </div>
    </div>
</div>
<footer class="bg-dark text-lg-start">
     
 
     <hr class="m-0" />
     <!-- Copyright -->
     <div class="text-center p-3 text-white" >
       © 2020 Copyright:
       <a class="text-dark"></a>
       <div class="text-center align-items-center">
       <a href="https://www.youtube.com/"  role="button"
         rel="nofollow" target="_blank">
         <button class="r-Btn youtube text-white m-1">
         <i class="fab fa-youtube"></i>
         </button>
         
       </a>
       <a href=""  role="button" rel="nofollow"
         target="_blank">
         <button class="r-Btn facebook text-white m-1">
         <i class="fab fa-facebook-f"></i>
         </button>
         
       </a>
       <a href=""  role="button" rel="nofollow"
         target="_blank">
         <button class="r-Btn facebook text-white m-1">
         <i class="fab fa-twitter"></i>
         </button>
         
       </a>
       <a href="" role="button" rel="nofollow"
         target="_blank">
         <button  class="r-Btn github text-white m-1">
         <i class="fab fa-github"></i>
         </button>
         
       </a>
     </div>
     </div>
   </footer>
   <!--Footer-->
@endsection

</body>
</html>

