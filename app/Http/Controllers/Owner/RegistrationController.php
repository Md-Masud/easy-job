<?php


namespace App\Http\Controllers\Owner;

use App\frontend\Owner;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showRegisterForm()
    {

        return view('frontend.owner.page.ownerRegistation');
    }

    public function processRegister(Request $request)
    {


        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ];
        try {
            Owner::create($data);
            $this->setSuccessMessage('Insert Successfull');
            return redirect()->route('admin.index');
        } catch (Exception $e) {
            $this->setSuccessMessage($e->getMessage());
        }

    }
}
