<?php

namespace App\Http\Controllers;

use App\Helpers\Output;
use App\Http\Requests\ChangeEmailConfirmRequest;
use App\Http\Requests\ChangeEmailRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Jobs\EmailConfirmJob;
use App\Jobs\ForgotPasswordMailJob;
use App\Models\EmailReset;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['user_id'] = $user->id;
            $success['email'] = $user->email;
            $success['name'] = $user->name;
            return response()->json($success, 200);
        } else {
            return response()->json('Email veya şifre yanlış.', 401);
        }
    }

    public function register(RegisterRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        if ($user->save()) {
            return response()->json('Kullanıcı başarıyla eklendi.', 200);
        } else {
            return response()->json('Kullanıcı kaydı sırasında bir sorun oluştu.', 400);
        }
    }

    public function selfUser()
    {
        $user = Auth::user();
        $success['user_id'] = $user->id;
        $success['email'] = $user->email;
        $success['name'] = $user->name;
        $success['addresses'] = $user->addresses->toArray();

        return Output::success($success);
    }
}
