

@extends('layouts.app')


@section('style')


  @endsection
@section('content')


<div class="container-fluid">


<div class="card  bg-dark col-12 mt-1">
<div id="particles-js" style="position: absolute;width : 100%; z-index:0"></div>
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>Prenez contact avec <strong>Nous</strong></h2>
              <p class="lead mb-5">123 Testing Ave, Testtown, 9876 NA<br>
                Phone: +1 234 56789012
              </p>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label for="inputName">Nom complet</label>
              <input type="text" id="inputName" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputSubject">Objet de contact</label>
              <input type="text" id="inputSubject" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Envoyez">
            </div>
          </div>
        </div>
     
      </div>
    

</div>


      @endsection