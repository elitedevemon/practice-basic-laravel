<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurlLoginController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    $url = 'https://www.yahoobaba.net/user/login';

    //curl init
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_COOKIEFILE, public_path('cookie.txt'));

    $pageResponse = curl_exec($ch);

    if ($pageResponse === false) {
      echo 'Curl error: ' . curl_error($ch);
    }else{
      echo 'Protected page content: '. $pageResponse;
    }
    
  }
}