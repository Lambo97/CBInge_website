<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delations;


class DelationsController extends Controller
{
  /**
   * Display the délations au clergé.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      \Auth::user()->forum_check = Delations::orderBy('created_at', 'desc')->first()->id;
      $posts = Delations::orderBy('updated_at','desc')->paginate(10);
      return view('delations.clerge', compact('posts'));
  }

  public function add(Request $request)
  {
      $this->validate($request, [
          'message' => 'required',
          'photo' => ['image','nullable', 'max:1999']
      ]);

      // Handle File Upload
      if($request->hasFile('photo')){
          // Get filename with the extension
          $filenameWithExt = $request->file('photo')->getClientOriginalName();
          // Get just filename
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          // Get just ext
          $extension = $request->file('photo')->getClientOriginalExtension();
          // Filename to store
          $fileNameToStore= $filename.'_'.time().'.'.$extension;
          // Upload Image
          $path = $request->file('photo')->storeAs('storage/app/public/delations', $fileNameToStore);
      } else {
          $fileNameToStore = NULL;
      }


      // Create Post
      $post = new Delations;
      $post->id_auteur = auth()->user()->id;
      $post->message = $request->input('message');
      $post->photo = $fileNameToStore;
      $post->save();

      // Send notification
      //\OneSignal::sendNotificationToSegment(
        //  auth()->user()->surnom_forum." a envoyé un message !",
        //  $segment = "Comite",
        //  $url = "/forum"
      //);

      return redirect('/delations')->with('success', 'Délation envoyée');
  }

  public function balance(){
    return view('delations.delations');
  }

  /**
   * Return the image
   *
   * @param  url
   * @return \Illuminate\Http\Response
   */
  public function image($url)
  {
      return response()->file(storage_path('app/public/forum/' . $url));
  }
}
