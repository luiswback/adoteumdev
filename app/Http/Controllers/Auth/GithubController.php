<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    const NAME = 'GITHUB';

    protected User $authUser;

    public function __invoke(): RedirectResponse
    {

        try {
            $user = Socialite::driver('github')->user();
            DB::transaction(function () use ($user) {
                $this->authUser = User::updateOrCreate([
                    'email' => $user->email,
                ], [
                    'github_user' => $user->token,
                    'name' => $user->name,
                    'password' => Hash::make(Str::random('10'))

                ]);
                Profile::updateOrCreate([
                    'user_id' => $this->authUser->id
                ], [
                    'provider' => self::NAME,
                    'auth_id' => $user->id,
                    'nickname' => $user->nickname,
                    'avatar' => $user->avatar,
                    'data' => json_encode($user->user)
                ]);
            }, 3);

            if (is_null($this->authUser->interest)) {
                return redirect()->route('INTERESSES');
            }

            if (is_null($this->authUser->preference)) {
                return redirect()->route('PREFERENCIAS');
            }

            return redirect()->route('LISTAGEM');


        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
        }
    }
}
