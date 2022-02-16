<form action="/home" method="post" class="" enctype="multipart/form-data">
       <div class="mb-3">
       <div class="mb-4 text-white">
            <h2 class=" text-center">Upload</h2>
            <hr>
          </div>
       <input  name="userid" value="{{ Auth::user()->id }}" hidden/>
       <input class="form-control form-control-lg" id="uploadIMG" type="file" name="image" required/>
       <img src="{{ asset('/image/img-icon-18.jpg') }}" id="preview" alt="job image" title="job image" >
   </div>
   <div class="mb-3">
   @csrf
     <label for="exampleInputEmail1" class="form-label"></label>
     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" name="title">
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label"></label>
     <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description"></textarea>
   </div>
   <button type="submit" class="btn bg_color text-white">Submit</button>
 </form>

 <script>
  uploadIMG.onchange=()=>{
    if(uploadIMG.files[0]){
preview.src=URL.createObjectURL(uploadIMG.files[0]);
}
}


</script>