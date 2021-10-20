<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Formation;

class AdminController extends Controller
{
    public function index()
    {
        
        $Users = User::all();
        $Formations = Formation::all();
        // return view('administrator' , compact('Users'));
        $message = "";
        return view('administrator' , compact('message', 'Users', 'Formations' ));

    }

    public function destroy($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        $message = "Membre supprimé avec succès";
        $Users = User::all();
        $Formations = Formation::all();

        return back()->with('deleted', 'Request record has been deleted');
        // return view('administrator' , compact('message', 'Users' ));
    }

    public function edit($id)
    {
        $User = User::findOrFail($id);
        return view('edituser', compact('User'));
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            // 'password' => 'required|max:255',
        ]);
        
        User::whereId($id)->update($updateData);
        User::whereId($id)->update(['password'=> Hash::make($request->password)]);

        $message = "Info modifiés avec succès";
        $Users = User::all();
        return view('administrator' , compact('message', 'Users', 'Formations' ));
    }

}
