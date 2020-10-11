<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index() {
        return view('account.settings.index');
    }

    public function update(UpdateSettings $request) {
        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->input('name');

        if($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }


        $user->save();

        return back()->with([
            'status' => [
                'type' => 'success',
                'content' => 'Zmiany zostały zapisane.',
            ]
        ]);
    }
}
