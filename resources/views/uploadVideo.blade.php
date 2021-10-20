

@extends('layouts.app')


@section('style')
<link href="{{asset('lightGallery-master/dist/css/lightgallery.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('lightGallery-master/PPV/style.css')}}">

  @endsection
@section('content')


<div class="container-fluid">

<h3>Upload a video</h3>
<hr>

@if(Session::has('photo_added'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('photo_added')}}
                    </div>
                    @endif
<form method="POST" action="{{ route('videos.uploadVideo') }}" enctype="multipart/form-data" >
{{ csrf_field() }}
<div >
<label>Title</label>
<input type="text" name="title" placeholder="Enter Title">
</div>
<label>Course Number</label>
<input type="number" name="idCours" >


<label>Order</label>
<input type="number" name="order" >

<div >
<label>Choose Video</label>
<input type="file"  name="video">
</div>
<hr>
<button type="submit" >Submit</button>
</form>

</div>


                            <!-- @foreach ($Videos as $Video)

                              {{ $Video->video }}    
                              
                              <div id="video-player"> 
                              <video width="100%" controls> 
                                      <source src=" {{asset($Video->video)}}" type="video/mp4"> 
                                        Your browser does not support the video tag. 
                                  </video> 
                                </div> 

                            @endforeach -->




      @endsection


      
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#lightgallery').lightGallery();
    });
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="{{asset('lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('lightGallery-master/lib/jquery.mousewheel.min.js')}}"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js'></script>
<script src='https://cdn.jsdelivr.net/g/lightgallery,lg-autoplay,lg-fullscreen,lg-hash,lg-video,lg-zoom'></script>
<script src='https://f.vimeocdn.com/js/froogaloop2.min.js'></script>

@endsection