<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function getDashboard(){
		return view('dashboard');
	}

	public function postRegistration(Request $request)
	{
		$this->validate($request, [
			'first_name' => 'required|max:80',
			'email' => 'required|email|unique:users',
			'std_id' => 'required|min:8',
			'session' => 'required|min:7',
			'password' => 'required|min:6'
		]);

		$first_name = $request['first_name'];
		$last_name = $request['last_name'];
		$email = $request['email'];
		$std_id = $request['std_id'];
		$session = $request['session'];
		$password = bcrypt($request['password']);

		$user = new User();
		$user->first_name = $first_name;
		$user->last_name = $last_name;
		$user->email = $email;
		$user->std_id = $std_id;
		$user->session = $session;
		$user->password = $password;

		$user->save();

		Auth::login($user);

		return redirect()->route('dashboard');
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required'
		]);

		if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
			return redirect()->route('dashboard');
		}
		return redirect()->back();
	}
}