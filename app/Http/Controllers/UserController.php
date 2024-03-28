<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('pages.user.akun', [
            'title' => 'Anime Indo - Edit Akun',
            'active' => 'edit-akun',
            'user' => $user // mengirimkan variable user ke view akun
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        // return view('edit', compact('user'));
        return view('edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name', $user->name);

        if ($request->hasFile('avatar')) {
            // Upload and update avatar
            $file = $request->file('avatar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/avatars', $fileName); // Menyimpan file ke folder 'storage/avatars'
            $user->avatar = $fileName;
        }
        
        if ($request->hasFile('banner')) {
            // Upload and update banner
            $file = $request->file('banner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/banners', $fileName); // Menyimpan file ke folder 'storage/banners'
            $user->banner = $fileName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteBanner($id)
    {
        $user = User::find($id);

        // Hapus file banner jika ada
        if (!empty($user->banner)) {
            Storage::delete('public/banners/' . $user->banner);
            $user->banner = null; // Kosongkan nama file banner di database
        }

        $user->save();

        return redirect()->back()->with('success', 'Banner berhasil direset!');
    }

    public function deleteAvatar($id)
    {
        $user = User::find($id);

        // Hapus file avatar jika ada
        if (!empty($user->avatar)) {
            Storage::delete('public/avatars/' . $user->avatar);
            $user->avatar = null; // Kosongkan nama file banner di database
        }

        $user->save();

        return redirect()->back()->with('success', 'Avatar berhasil direset!');
    }
}
