<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_users = DB::table('users')
                        ->select('users.*', 'users.id as id_users', 'role.*')
                        ->join('role', 'role.id', '=', 'users.id_role')
                        ->get();
        return view('layout.users.index', compact('data_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'dRole' => Role::all(),
        ];
        return view('layout.users.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'nohp' => 'required',
            'password' => 'required',
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file avatar
        ]);
    
        // Upload dan simpan file foto
        $foto = $request->file('foto');
        $namaFoto = time()."_".$foto->getClientOriginalName();
        $foto->move('assets/foto', $namaFoto);

        Users::create([
            'nama'  => $request->nama,
            'email'  => $request->email,
            'nohp'  => $request->nohp,
            'foto'  => $namaFoto,
            'password'  => bcrypt($request->password),
            'alamat'  => $request->alamat,
            'id_role'  => $request->role,

        ]);
        return redirect('/users')->with('success', 'User has been created.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_user = Users::find($id);
        return view('layout.users.show', compact('data_user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'dUsers'    => Users::find($id),
            'dRole'     => Role::all()
        ];

        return view('layout.users.edit', $data);
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
        // Validasi input dari request
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable',
        ]);

        // Temukan user yang akan diupdate
        $user = Users::find($id);
        
        $password = $request->password;
        if($password != null){
            $user->update([
                'password'  => bcrypt($password)
            ]);
        }

        $foto = $request->file('foto');
        if($foto != null){
            unlink('assets/foto/'.$user->foto);
            $namaFoto = time()."_".$foto->getClientOriginalName();
            $foto->move('assets/foto', $namaFoto);
            $user->update([
                'foto'  => $namaFoto
            ]);
        }

        $user->update([
            'nama'  => $request->nama,
            'email'  => $request->email,
            'nohp'  => $request->nohp,
            'alamat'  => $request->alamat,
            'id_role'  => $request->role,

        ]);
       
        return redirect('/users')->with('success', 'User has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Temukan user yang akan dihapus
        $data_users = Users::find($id);
        unlink('assest/foto/'.$data_user->foto);
        $data_users->delete();

        return redirect('/users')->with('success', 'User has been deleted.');
    }
}
