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

    
    <div style="padding-left: 2%;">
       
       
       
        <table class="table table-dark text-center">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">date</th>
                <th scope="col">time</th>
                <th scope="col">guest</th>
                <th scope="col">phone</th>
                <th scope="col">message</th>
                <th scope="col">operation</th>
              </tr>
            </thead>

              
                @foreach ($data as $user) 
                <tbody class="text-center">
                <tr>
                
                  <th>{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->date}}</td>
                  <td>{{$user->time}}</td>
                  <td>{{$user->guest}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->message}}</td>
                  <td><a class="btn btn-success" href="{{route('editrevers',$user->id)}}" >done</a></td>

                 
                @endforeach
            
               
              </tr>


            </tbody>
        </table>
    </div>









     @include('admin.adminjs')
    
</body>
</html>