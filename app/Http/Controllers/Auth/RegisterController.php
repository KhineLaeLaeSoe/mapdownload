<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
    protected $redirectTo = '/home';

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
            'date_of_birth' => ['required', 'date', 'before_or_equal:today'], // Example date validation
            'gender' => ['required', 'string', Rule::in(['male', 'female', 'other'])],
            'phone_number' => ['required', 'string', 'max:20', 'unique:users,phone_number'], // max and unique for phone
            'city' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:500'],
            'customer_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'], // For photo upload
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
        
    $customerPhotoPath = null;
    //  dd(request()->all());
    // dd($data);
    if (isset($data['customer_photo']) && $data['customer_photo'] instanceof \Illuminate\Http\UploadedFile) {
        $file = $data['customer_photo'];
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/customer_photos', $fileName); // Store in storage/app/public/customer_photos
        $customerPhotoPath = 'customer_photos/' . $fileName; // Path to store in DB
    }
         $user_data_to_save=[
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'phone_number' => $data['phone_number'],
            'city' => $data['city'],
            'address' => $data['address'],
            'customer_photo' => $customerPhotoPath, // Save the photo path
             // 'email_verified_at' => now(),
        ];
         return User::create($user_data_to_save);
    }

}