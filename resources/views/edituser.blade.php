@extends('layouts.app')

@section('style')


@endsection
@section('content')



<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="row">

    <form method="post" action="{{ route('User.update', $User->id) }}" class="col-6">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $User->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $User->email }}"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" value="{{ $User->phone }}"/>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" value="{{ $User->password }}"/>
          </div>
          <div class="row container text-right">

          <a href="{{ route('administrator')}}"  class="btn container btn-dark col-3"> Retour</a>

          <button type="submit" class="btn btn-block container btn-success col-3">Modifier les infos User</button>

          </div>
        
      </form>

    </div>
      
  </div>
</div>


@endsection