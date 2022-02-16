<?php $count=0; ?>
@extends('home')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@section('gallery')


<div class="container-fluid">
    <div class="row " >
     
    @foreach($users as $users)
    <?php $count++ ?>
      <div class="col-12 col-md-6 col-lg-3  p-3" data-toggle="modal" data-target="#lightbox{{$count}}">
      
    <img src="{{ asset('storage/image/'.$users->image)}}" class="m-0 image_border show_image" data-target="#indicators" data-slide-to="0" alt="" /> 
    <center><h5 class="card-title mt-2">{{$users->title}}</h5></center>
 
      </div>
  

         <!-- Modal -->
         <div class="modal fade" id="lightbox{{$count}}" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content p-3 bg-dark">
            
          <div id="indicators" class="carousel slide" data-interval="false">
      <div class="carousel-inner">
        
        <div class="carousel-item active pb-3">


        <form action="/update/{{$users->id}}" method="post" enctype="multipart/form-data">
          <div class="mb-4 text-white">
            <h2 class=" text-center">Edit</h2>
            <hr>
          </div>
       <div class="mb-3">
       <input class="form-control form-control-lg" id="uploadIMGS" value="{{$users->image}}" type="file" name="images" />
          <img class="d-block w-100" id="previews" src="{{ asset('storage/image/'.$users->image)}}" alt="First slide">
           </div>
   <div class="mb-3 p-2">
   @csrf
     <label for="exampleInputEmail1" class="form-label"></label>
     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" maxlength="50" name="titles" placeholder="Title" value="{{$users->title}}">
   </div>
   <div class="mb-3 p-2">
     <label for="exampleInputPassword1" class="form-label"></label>
     <input type="text" class="form-control" id="exampleInputPassword1" name="descriptions" maxlength="200" placeholder="Description" value="{{$users->description}}">
   </div>
   <div class="p-2 ">
   
            <div class="">
            <button type="submit" class="btn bg_color text-white" id="update">Update</button>
            </div>
        </div>
   
 </form>
 <div class="pl-2 pr-2">
            <a href="/delete{{$users->id}}"><button class="btn bg_2color text-white" type="button">Delete</button></a>
</div>
        </div>
      </div>
    </div>
    
    </div>
      </div>
    </div>
      @endforeach
     
        </div>


      </div>

      <script>
  uploadIMGS.onchange=()=>{
    if(uploadIMGS.files[0]){
previews.src=URL.createObjectURL(uploadIMGS.files[0]);
}
}
</script>

@endsection
