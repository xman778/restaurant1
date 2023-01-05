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
            <h1 class="text-center text-wight mt-5">Food Home</h1>
            <div class="text-center mb-5 text-dark">mohamed </div>
            <div class="card my-5">
    
              <form class="card-body cardbody-color p-lg-5" action="{{route('food.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                  <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
    
                <div class="mb-3">
                  <input type="text" class="form-control"  name="title" aria-describedby="food title"
                    placeholder="title">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control"  name="image" aria-describedby="food image"
                    >
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control"  name="price" aria-describedby="food price"
                      placeholder="price">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control"  name="description" aria-describedby="food description"
                      placeholder="description">
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
      
      <div class="container-lg">
       
       
       
        <table class="table table-dark text-center">
            <thead>
              <tr>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col">image</th>
                <th scope="col">description</th>
                <th scope="col">operation</th>
              </tr>
            </thead>
   
              @foreach ($data as $food)
                  


                <tbody class="text-center">
                <tr>
                
                  <th>{{$food->title}}</th>
                  <td>{{$food->price}}</td>
                  <td><img  src="/foodimage/{{$food->image}}" ></td>
                  <td>{{$food->description}}</td>
                  <td><a href="{{route('food.delete',$food->id)}}" class="btn btn-danger">delete</a><a href="{{route('food.edit',$food->id)}}" class="btn btn-primary">edit</a></td>
              </tr>

             @endforeach 
            </tbody>
        </table>
    </div>
       
    
    @include('admin.adminjs')

  </body>
</html>