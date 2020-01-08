<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function data($id)
    {
        $record=Vendor::Find($id);
        $data = [
            'id' => $record->id,
            'username' => $record->username,
            'password' => $record->password,
            'first_name' => $record->first_name,
            'last_name' => $record->last_name,
            'email' => $record->email,
            'phone_number' => $record->phone_number,
            'company_name' => $record->company_name,
            'profile_picture' => $record->profile_picture,
            'logo' => $record->logo,
            'address' => $record->address,
            'city' => $record->city,
            'state' => $record->state,
            'status' => $record->status,
            'remember_token' => $record->remember_token,
        ];
        return response()->json($data);
    }
}
