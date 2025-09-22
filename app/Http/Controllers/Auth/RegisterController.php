<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user/register',[
            'title'=> 'GadaiStarTech | Register',
        ]);
    }
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
    protected $redirectTo = '/user/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest','admin']);
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
            'nik' => 'required|digits:16|numeric|unique:users,nik',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|numeric|digits_between:11,13',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'kpass' => 'required|same:password',
            'provinsi' => 'required|string|max:50',
            'kabupatenkota' => 'required|string|max:50',
            'alamat' => 'required|string|max:50',
            'fotoKtp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'swafotoKtp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
    	$data = $request->only('nik', 'nama', 'email', 'telepon', 'provinsi', 'kabupatenkota', 'alamat', 'password', 'foto_ktp', 'foto_swaktp');
        $validator = Validator::make($request->all(),[
        	'nik' => 'required|digits:16|numeric|unique:users,nik',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|numeric|digits_between:11,13',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'kpass' => 'required|same:password',
            'provinsi' => 'required|string|max:50',
            'kabupatenkota' => 'required|string|max:50',
            'alamat' => 'required|string|max:50',
            'fotoKtp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'swafotoKtp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    	
    	if ($validator->fails()) {
    		return redirect('/user/register')
                ->withErrors($validator)
                ->withInput();
		}
    
    	$foto_ktp = $request->file('fotoKtp');
        $swafoto_ktp = $request->file('swafotoKtp');
    	// Assuming there is no authenticated user ID (e.g., during registration)
		$uniqueId = Str::uuid()->toString();
        
    	// Check if the files are present before moving them
        if ($foto_ktp && $swafoto_ktp) {
            $foto_ktp_name = $uniqueId . time() . '.' . $foto_ktp->getClientOriginalExtension();
            $swafoto_ktp_name = $uniqueId . time() . '.' . $swafoto_ktp->getClientOriginalExtension();
    
            $foto_ktp->move('../public_html/assets/upload/ktp/', $foto_ktp_name);
            $swafoto_ktp->move('../public_html/assets/upload/swafoto/', $swafoto_ktp_name);
    
            User::create([
                'nik' => $data['nik'],
                'nama' => $data['nama'],
                'email' => $data['email'],
                'telepon' => $data['telepon'],
                'provinsi' => $data['provinsi'],
                'kabupatenkota' => $data['kabupatenkota'],
                'alamat' => $data['alamat'],
                'password' => Hash::make($data['password']),
                'foto_ktp' => $foto_ktp_name,
                'foto_swaktp' => $swafoto_ktp_name,
            ]);
        	return redirect()->route('user/login');
        }
    }
}