

@extends('layouts.app')


@section('style')


  @endsection
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="addformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle formation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<div class="container-fluid">
<h1>Administration</h1>

                    @if($message)
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                    @endif

                    @if(Session::has('deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('deleted')}}
                    </div>
                    @endif

<div class="row border border-dark">
<div class="card col-lg-6 col-sm-12   bg-dark p-1">
  
<table class="table table-bordered table-hover text-xs bg-light ">
 
 <caption class="text-center">List of users   -    
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
 Ajouter un nouvel utilisateur
</button> 
</caption>

 <thead class="bg-dark">
 <tr>
     <th scope="col" colspan="6" class="text-center bg-warning">Table des utilisateurs</th>    
   </tr>
   <tr>
     <th scope="col">Id Client</th>
     <th scope="col">Name</th>
     <th scope="col">Phone</th>
     <th scope="col">Email</th>
     <th scope="col">Profile</th>
     <th scope="col">Action</th>
   </tr>
 </thead>
 <tbody>

@foreach ($Users as $User) 

<tr>
     <th scope="row"> {{$User->id }}</th>
     <td> {{$User->name }}</td>
     <td> {{$User->phone }}</td>
     <td> {{$User->email }}</td>
     <td> {{$User->profile }}</td>
     <td class="d-block" >
     <a href="{{ route('User.edit', $User->id)}}" class="btn   btn-sm"><i class="far fa-edit text-success"></i> </a>
     
       
      <form action="{{ route('User.destroy', $User->id)}}" method="post">
       @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
      </form>    

    </td>


   </tr>
@endforeach 
  
  
 </tbody>
</table>

</div>




<div class="card col-lg-6 col-sm-12  bg-dark p-1">  
<table class="table table-bordered table-hover text-xs bg-light "> 
 <caption class="text-center">List of parcours   -    
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addformation">
 Ajouter une nouvelle formation
</button> 
</caption>

 <thead class="bg-dark">
 <tr>
     <th scope="col" colspan="6" class="text-center bg-info">Table des formations</th>    
   </tr>
   <tr>
     <th scope="col">id formation</th>
     <th scope="col">Titre</th>
     <th scope="col">Descrition</th>
     <!-- <th scope="col">Email</th>
     <th scope="col">Profile</th>-->
     <th scope="col">Action</th> 
   </tr>
 </thead>
 <tbody>

@foreach ($Formations as $Formation) 

<tr>
     <td > {{$Formation->id }}</td>
     <td> {{$Formation->title }}</td>
     <!-- <td> {{$User->phone }}</td>
     <td> {{$User->email }}</td> -->
     <td> {{$Formation->description }}</td>
     <td class="d-block" >
     <a href="{{ route('User.edit', $Formation->id)}}" class="btn   btn-sm"><i class="far fa-edit text-success"></i> </a>
     
       
      <form action="{{ route('User.destroy', $Formation->id)}}" method="post">
       @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
      </form>    

    </td>


   </tr>
@endforeach 
  
  
 </tbody>
</table>

</div>


<!-- @foreach ($Users as $User) 

<div class="bg-dark"> {{$User->name }}
</div>

@endforeach -->

</div>

<hr>

<div class="row border border-dark">
<h2>Gestionnaire des formations</h2>
</div>




</div>




      @endsection


      @section('scripts')
      <script>
        $(document).ready(function () {
          $('.table').dataTable( {
            "scrollY": "300px",
            // "scrollCollapse": true,
            "paging": false,
            "info":false
          } );
        });
        </script>
      @endsection