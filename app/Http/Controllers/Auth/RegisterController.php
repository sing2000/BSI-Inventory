<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Invshop;
use App\Models\InvOwner;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'system_name' => ['required', 'string', 'max:255'],
            'system_role' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],

            //inventory shop
            's_name' => ['required', 'string', 'max:255'],
            's_address' => ['required', 'string', 'max:255'],
            's_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            //owner 
            'o_name' => ['required', 'string', 'max:255'],
            'o_email' => ['required', 'string', 'email', 'max:255'],            'o_contact' => ['required', 'string', 'max:255'],
            'o_address' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $logoPath = null;
        if (isset($data['s_logo']) && $data['s_logo']->isValid()) {
            $logo = $data['s_logo'];
            $logoPath = $logo->store('public/logos');
        }
    
        $owner = InvOwner::create([
            'o_name' => $data['s_name'],
            'o_email' => $data['o_email'],
            'o_contact' => $data['o_contact'],
            'o_address' => $data['o_address'],
        ]);
        $invshop = Invshop::create([
            's_name' => $data['s_name'],
            's_address' => $data['s_address'],
            'o_id' => $owner->id, 
            's_logo' => $logoPath,
        ]);
        $user = User::create([
            'name' => $data['name'],
            'system_name' => $data['system_name'],
            'system_role' => $data['system_role'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            's_id' => $invshop->id, 
        ]);
        return $user;
    }
}
