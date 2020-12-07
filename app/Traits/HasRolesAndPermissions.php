<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;

trait HasRolesAndPermissions{
    
    /**
     * @return mixed
     */
    public function roles(){

        return $this->belongsToMany(Role::class, 'roles_permissions');
    }

     /**
     * @return mixed
     */
    public function permissions(){

        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }
}