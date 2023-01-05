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
            <h1 class="text-center text-wight mt-5">chef update info</h1>
            <div class="text-center mb-5 text-dark">mohamed </div>
            <div class="card my-5">
    
              <form class="card-body cardbody-color p-lg-5" action="{{route('updatechef')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                  <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
                @foreach($data2 as $chef)
                <div class="hidden">
                  <input type="text" class="form-control"  name="id" aria-describedby="nk name"
                    value="{{$chef->id}}">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control"  name="name" aria-describedby="nk name"
                    value="{{$chef->name}}">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control"  name="image" value="{{$chef->image}}"
                    >
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control"  name="Specialization"  value="{{$chef-> specialization}}"
                    >
                  </div>
                  <div class="">
                    <button style=" padding:10px;background:teal;color:white; " type="submit"
                    >update</button>
                  </div> 
                  @endforeach               
              </form>
            </div>
          </div>
        </div>
      </div>
      @include('admin.adminjs')
    </body>
    </html>