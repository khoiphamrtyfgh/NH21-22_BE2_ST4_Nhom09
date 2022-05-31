<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailCotroller extends Controller
{
  public function sendEmail(Request $request)
  {
    $data = [
      'title' => "HÓA ĐƠN MUA HÀNG",
      'email' => $request->email
    ];

    Mail::to($request->email, $data)->send(new TestMail($data));
    return redirect()->back();
  }
}
