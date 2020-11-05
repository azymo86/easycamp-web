<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function contact ()
    {
      // REST APIs
      // $source  = env('APP_URL').'/easycamp/contact';
      $source  = 'https://private-6361a2-easycampweb.apiary-mock.com/easycamp/contact';
      $conten  = file_get_contents($source);
      $raw     = json_decode($conten, true);
      $data    = $raw['data'][0];
      $sosmed  = $data['sosmed'];
      $address = $data['address'];

      return view ('general/contact', [
        'phone'      => $data['phone'],
        'email'      => $data['email'],
        'open_day'   => $data['open_day'],
        'close_day'  => $data['close_day'],
        'open_time'  => $data['open_time'],
        'close_time' => $data['close_time'],
        'gmail'      => $sosmed['gmail'],
        'whatsapp'   => $sosmed['whatsapp'],
        'instagram'  => $sosmed['instagram'],
        'street'     => $address['street'],
        'city'       => $address['city'],
        'province'   => $address['province'],
        'postcode'   => empty($address['postcode']) ? $address['postcode'] : '('.$address['postcode'].')',
        'country'    => $address['country'],
      ]);
    }

    public function inventory ()
    {
      // REST APIs
      $source = env('APP_URL').'/easycamp/inventory';
      $conten = file_get_contents($source);
      $raw    = json_decode($conten, true);
      $datas  = $raw['data']['data'];
      $count  = count($datas);

      return view('general/inventory', [
        'datas'  => $datas,
        'count' => $count
      ]);
    }

}
