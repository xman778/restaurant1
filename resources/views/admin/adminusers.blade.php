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

        <div class="container-lg">
       
       
       
        <table class="table table-dark text-center">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">operation</th>
              </tr>
            </thead>
              @if (Route::has('login'))
              
                @foreach ($users as $user) 
                <tbody class="text-center">
                <tr>
                
                  <th>{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  @if ($user->user_type !='0')
                    <td>NOT ALLOWED</td>
                   @else
                    <td><a href="{{route('delete',$user->id)}}" class="btn btn-danger">delete</a>
                  @endif
                 
                @endforeach
              @endif
               
              </tr>


            </tbody>
        </table>
    </div>
    
    @include('admin.adminjs')

  </body>
</html>