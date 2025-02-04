<?php

namespace App\Policies;

//use App\Models\Product;
use App\Models\User;
use App\Models\Resource;
use App\Models\Product;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
         // Allow all users to view posts
         return true;

         //return $user->role == 'Admin' || 'Employee || 'Customer';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Product $product): bool
    {
        return $user->hasPermission('read', $product->resource_name);
        //     ? Response::allow()
        //     : Response::deny('You do not have permission to view this resource.');

        // Allow all users to view posts
        // return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
            // return $user->hasPermission('create', $product->resource_name)
            // ? Response::allow()
            // : Response::deny('You do not have permission to create this resource.');

           return $user->hasRole('Admin') || $user->hasRole('Employee');          
           
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Product $product): bool
    {
        return $user->hasPermission('update', $product->resource_name);
            // ? Response::allow()
            // : Response::deny('You do not have permission to update this resource.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Product $product): bool
    {
        return $user->hasPermission('delete', $product->resource_name);
            // ? Response::allow()
            // : Response::deny('You do not have permission to delete this resource.');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Product $product): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Product $product): bool
    {
        //
    }
}
