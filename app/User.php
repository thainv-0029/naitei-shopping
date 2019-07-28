<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    private function validator($req){
        return $req->validate([
            'username' => 'required|min:6|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm' => 'required|same:password',
            'address' => 'required',
            'district' => 'required',
            'city' => 'required',
        ]);
    }

    public function validatorLogin($req){
        return $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    }

    public function createUser($req){

        $this->validator($req);
        $this->name = $req->username;
        $this->email = $req->email;
        $this->password = Hash::make($req->password);
        $this->phone_number = $req->phone;
        $this->role = $req->role;
        $this->city = $req->city;
        $this->district = $req->district;
        $this->address = $req->address;
        $this->status = 1;
        $this->save();

        return "Create account success!";
    }

    public function hasRoleAdmin($user){
        if($user->role == 1){
            return true;
        }
        return false;
    }

    public function checkInfo(Request $req){
        $user = $this::where('name', $req->username)->first();
        if($user == NULL){
            return "1";
        }else{
            if(Hash::check($req->password,$user->password)){
                if($user->hasRoleAdmin($user)){
                    $req->session()->put('admin', $user->name);
                    return "0";
                }
                return "3";
            }
            else{
                return "2";
            }
        }
    }
}
