<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);
        $dUsers = DB::table('users')
            ->select('users.id as id_users', 'users.*', 'role.id as id_role', 'role.*')
            ->join('role','role.id','=', 'users.id_role')
            ->where('email', \Auth::user()->email)
            ->get();
        foreach ($roles as $role) { 
            $user = \Auth::user()->id_role;
            if( $dUsers[0]->nama_role == $role){
                return $next($request);
            }
        }
        return response()->json(['message' => 'tidak bisa mengakses, karena anda bukan bagian role ']);
    }
}
