<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth', ['only' => ['all', 'register']]);
    }

    public function all() {
        $users = User::all();

        if(sizeof($users) < 1) {
            return response()->json(['status' => 'fial', 'message' => 'No users found.']);
        } else {
            return response()->json(['status' => 'success', 'users' => $users], 200);
        }
    }

    public function register(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'role' => 'required'
        ]);
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'api_token' => Str::random(64),
            'role' => $request->role
        ]);

        return response()->json(['message' => 'Success', 'user' => $user], 200);
    }

}
