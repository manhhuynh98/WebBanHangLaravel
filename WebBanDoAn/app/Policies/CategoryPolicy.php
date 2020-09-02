<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function before(User $user){
        $listIdRoleOfUser = DB::table('role_user')->where('user_id',Auth::user()->id)->get()->pluck('role_id');
        $listRoleOfUser = DB::table('roles')->whereIn('id', $listIdRoleOfUser)->get()->pluck('name');
        // dd($listRoleOfUser[0]  == 'user-view');
        if ($listRoleOfUser->contains('superadmin')) {
            return true;
        }
    }

    public function view(User $user){
        $listIdRoleOfUser = DB::table('role_user')->where('user_id',Auth::user()->id)->get()->pluck('role_id');
        $listRoleOfUser = DB::table('roles')->whereIn('id', $listIdRoleOfUser)->get()->pluck('name');
        return $listRoleOfUser->contains('category-view');
    }

    public function update(User $user){
        $listIdRoleOfUser = DB::table('role_user')->where('user_id',Auth::user()->id)->get()->pluck('role_id');
        $listRoleOfUser = DB::table('roles')->whereIn('id', $listIdRoleOfUser)->get()->pluck('name');
        return $listRoleOfUser->contains('category-update');
    }

    public function add(User $user){
        $listIdRoleOfUser = DB::table('role_user')->where('user_id',Auth::user()->id)->get()->pluck('role_id');
        $listRoleOfUser = DB::table('roles')->whereIn('id', $listIdRoleOfUser)->get()->pluck('name');
        return $listRoleOfUser->contains('category-update');
    }

    public function delete(User $user){
       $listIdRoleOfUser = DB::table('role_user')->where('user_id',Auth::user()->id)->get()->pluck('role_id');
        $listRoleOfUser = DB::table('roles')->whereIn('id', $listIdRoleOfUser)->get()->pluck('name');
        return $listRoleOfUser->contains('category-update');
    }
}
