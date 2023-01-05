<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>mohamed Admin</title>
    <base href="/public">
    @include('admin.admincss')
    <x-app-layout>

    </x-app-layout>
    
  </head>
  <body>
    
    @include('admin.adminsidebar')

      
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h1 class="text-center text-wight mt-5">update food details</h1>
            <div class="text-center mb-5 text-dark">mohamed </div>
            <div class="card my-5">
    
              <form class="card-body cardbody-color p-lg-5" action="{{route('food.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                  <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
                @foreach($food as $data)
                <div class="mb-3">
                  <input type="text" class="form-control" value="{{$data->title}}"  name="title" aria-describedby="food title"
                    >
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control" value="<img src='/public/{{$data->image}}'>"  name="image" aria-describedby="food image"
                   required >
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" value="{{$data->price}}"  name="price" aria-describedby="food price"
                    >
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" value="{{$data->description}}"  name="description" aria-describedby="food description"
                     >
                  </div>
                  @endforeach
                  <div class="">
                    <button style=" padding:10px;background:teal;color:white; " type="submit"
                    >update</button>
                  </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      
       
    
    @include('admin.adminjs')

  </body>
</html>