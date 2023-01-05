<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>mohamed Admin</title>

    @include('admin.admincss')
    <x-app-layout>

    </x-app-layout>
    
  </head>
  <body>
    @include('admin.adminsidebar')

    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h1 class="text-center text-wight mt-5">chef Home</h1>
            <div class="text-center mb-5 text-dark">mohamed </div>
            <div class="card my-5">
    
              <form class="card-body cardbody-color p-lg-5" action="{{route('chef')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                  <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
    
                <div class="mb-3">
                  <input type="text" class="form-control"  name="name" aria-describedby="nk name"
                    placeholder="name">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control"  name="image" aria-describedby="chef image"
                    >
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control"  name="Specialization" aria-describedby="chef 
                    Specialization"
                      placeholder="Specialization">
                  </div>
                  <div class="">
                    <button style=" padding:10px;background:teal;color:white; " type="submit"
                    >add</button>
                  </div>                
              </form>
            </div>
          </div>
        </div>
      </div>
      {{-- ------------------------------------------------ --}}
      <div class="container-lg">
        <table class="table table-dark text-center">
            <thead>
              <tr>
                <th scope="col">title</th>
                <th scope="col">image</th>
                <th scope="col">Specialization</th>
                <th scope="col">operation</th>
              </tr>
            </thead>   
              @foreach ($chef as $food)                  
                <tbody class="text-center">
                <tr>                
                  <th>{{$food->name}}</th>
                  <td><img  src="/chefimage/{{$food->image}}" ></td>
                  <td>{{$food-> specialization}}</td>
                  <td><a href="{{route('deletechef',$food->id)}}" class="btn btn-danger">delete</a><a href="{{route('editchef',$food->id)}}" class="btn btn-primary">edit</a></td>
              </tr>
             @endforeach 
            </tbody>
        </table>
    </div>       
    @include('admin.adminjs')
</body>
</html>