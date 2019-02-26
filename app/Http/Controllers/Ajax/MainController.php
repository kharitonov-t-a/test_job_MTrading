<?php
namespace App\Http\Controllers\Ajax;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
class MainController extends Controller
{
    public function send(Request $request)
    {
        // валидация формы
        $validation = Validator::make($request->all(), [
            'tags'  => 'required|max:255|regex:/^[a-zA-Z0-9\,]+$/',
        ]);
        $errors = $validation->errors();
        
        if ($validation->fails())
        {
            return view('errorcarousel', compact('errors'));
        }

	    $url = "https://api.flickr.com/services/feeds/photos_public.gne?tags=" . $request->input('tags') . "&tagmode=all&format=php_serial";
		$rsp = file_get_contents($url);
		$rsp_obj = unserialize($rsp);
        
        return view('carousel', compact('rsp_obj'));
    }
} 