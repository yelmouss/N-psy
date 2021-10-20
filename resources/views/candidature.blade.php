

@extends('layouts.app')


@section('style')


  @endsection
@section('content')


<div class="bg-dark">


<div class="card col-12 mt-1 text-light" style="background-image: url('{{ asset('hero-3.jpg') }}'); background-size: cover">
<div id="particles-js" style="position: absolute;width : 100%; z-index:0"></div>
        <div class="card-body row">


          <div class="col-6 text-center d-flex align-items-center justify-content-center border border-light">
            <div class="w-100">
              <h2 class="text-light text-bolder bg-light p-2 m-1">Psychologie <strong >générale</strong></h2>
              <p class="lead mb-5">UGS : CFRA-EN-LIGNE-PSYCHO-3 <br>
              <strong class="bg-blue p-1" >Certification</strong>  Les fondamentaux
              <hr class="bg-light">
              </p>
          <div class="text-left w-100">
          <p><i class="fas fa-laptop text-xl"></i> Formation 100% en ligne </p>
          <p> <i class="fas fa-certificate text-xl"></i>  Comptant pour le diplôme de Thérapeute </p>
          <p> <i class="fas fa-sliders-h text-xl"></i> Ouvert à tous, Aucun prérequis </p>
          <p><i class="fas fa-cog text-xl"></i> Manuel de cours à télécharger, Leçons en vidéo, excercices </p>
          <p><i class="fas fa-check-circle text-xl"></i>  Test final avec corrections personnalisées </p>
          <p> <i class="fas fa-vr-cardboard text-xl"></i>  Classe virtuelles de révision </p>
          <p> <i class="fas fa-comments text-xl"></i>  Groupe de discussion privé </p>
          <p> <i class="fas fa-exchange-alt text-xl"></i> Echanges avec cotre formateur </p>
          <p> <i class="fas fa-id-card text-xl"></i> Attestation de formation </p>
          <hr class="bg-light">
          </div>
            </div>
          </div>


          <div class="col-6 bg-light text-xs">
          <hr class="bg-pink">
          <h2 class="text-pink text-bolder text-center"> <i class="fas fa-user-graduate"></i> Formulaire de demande d'inscription</h2>
          <form>
            <div class="form-group">
              <label for="inputName">Nom complet</label>
              <input type="text" id="inputName" class="form-control col-4">
            </div>
            <div class="row form-group">
              <div class="col-6">
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" class="form-control">
              </div>
              <div class="col-6">
              <label for="inputTel">Numéro de telephone</label>
              <input type="number" id="inputTel" class="form-control">
              </div>
            </div>
            <hr class="bg-pink">
            <div class="form-group">
              <label for="inputSubject">Titre de votre demande</label>
              <input type="text" id="inputSubject" class="form-control col-6">
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group text-center">
              <input type="submit" class="btn bg-pink" value="Envoyez">
            </div>
            </form>

          </div>


       </div>
      </div>
    

</div>


      @endsection