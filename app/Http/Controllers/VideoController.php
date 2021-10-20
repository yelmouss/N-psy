<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// use App\Video;
use App\Models\Video;
use Storage;

class VideoController extends Controller
{

    public function AddVideo()
    {
        $Videos = Video::all();
        return view('uploadVideo', compact('Videos')); 


    }
    public function StoreVideo(Request $request)
    {
        $Videos = Video::all();
        compact('Videos');
              $this->validate($request, [
                 'title' => 'required|string|max:255',
                 'video' => 'required|file|mimetypes:video/mp4,video/quicktime,video/x-msvideo',
                 'idCours' => 'required',
                 'order' => 'required',
           ]);
           $video = new Video;
           $video->title = $request->title;
           $video->idCours = $request->idCours;
           $video->order = $request->order;
           if ($request->hasFile('video'))
           {
             $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
            $video->video = $path;
           }
           $video->save();   
           return back()->with('photo_added', 'Video record has been inserted');         

    }

//     public function uploadVideo(Request $request)
//    {
//       $this->validate($request, [
//          'title' => 'required|string|max:255',
//          'video' => 'required|file|mimetypes:video/mp4',
//    ]);
//    $video = new Video;
//    $video->title = $request->title;
//    if ($request->hasFile('video'))
//    {
//      $path = $request->file('video')->store('videos', ['disk' =>      'my_files']);
//     $video->video = $path;
//    }
//    $video->save();   
//   }
}
