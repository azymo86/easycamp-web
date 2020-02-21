<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function contact ()
    {
      // REST APIs
      $source  = env('APP_URL').'/contact';
      $conten  = file_get_contents($source);
      $raw     = json_decode($conten, true);
      $data    = $raw['data'][0];

      return view ('general/contact', [
        'phone'      => $data['phone'],
        'email'      => $data['email'],
        'open_day'   => $data['open_day'],
        'close_day'  => $data['close_day'],
        'open_time'  => $data['open_time'],
        'close_time' => $data['close_time'],
        'gmail'      => $data['sosmed']['gmail'],
        'whatsapp'   => $data['sosmed']['whatsapp'],
        'instagram'  => $data['sosmed']['instagram'],
        'street'     => $data['address']['street'],
        'city'       => $data['address']['city'],
        'province'   => $data['address']['province'],
        'postcode'   => empty($data['address']['postcode']) ? $data['address']['postcode'] : '('.$data['address']['postcode'].')',
        'country'    => $data['address']['country'],
      ]);
    }

    public function inventory ()
    {
      // REST APIs
      $source = env('APP_URL').'/inventory';
      $conten = file_get_contents($source);
      $raw    = json_decode($conten, true);
      $datas  = $raw['data']['data'];
      $count  = count($datas);

      // for ($i=0; $i < $count; $i++) {
      //   $id[]         = $data[$i]['id'];
      //   $name[]       = $data[$i]['name'];
      //   $price[]      = $data[$i]['price'];
      //   $url_image[]  = $data[$i]['url_image'];
      // };
      // // dd($name);
      //
      // return view ('general/inventory', [
      //   'data'      => $data,
      //   'count'     => $count,
      //   'id'        => $id,
      //   'name'      => $name,
      //   'price'     => $price,
      //   'url_image' => $url_image
      // ]);

      return view('general/inventory', [
        'datas'  => $datas,
        'count' => $count
      ]);
    }

}
