<?php

namespace App\Policies;

use App\User;
use App\Flight;
use Illuminate\Auth\Access\HandlesAuthorization;

class FlightPolicy
{
    use HandlesAuthorization;

    public function index(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the flight.
     *
     * @param  \App\User  $user
     * @param  \App\Flight  $flight
     * @return mixed
     */
    public function view(User $user, Flight $flight)
    {
        //
    }

    /**
     * Determine whether the user can create flights.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->roles()->first() == 'ROLE_AVIO';
    }

    /**
     * Determine whether the user can update the flight.
     *
     * @param  \App\User  $user
     * @param  \App\Flight  $flight
     * @return mixed
     */
    public function update(User $user, Flight $flight)
    {
        //
    }

    /**
     * Determine whether the user can delete the flight.
     *
     * @param  \App\User  $user
     * @param  \App\Flight  $flight
     * @return mixed
     */
    public function delete(User $user, Flight $flight)
    {
        //
    }

    /**
     * Determine whether the user can restore the flight.
     *
     * @param  \App\User  $user
     * @param  \App\Flight  $flight
     * @return mixed
     */
    public function restore(User $user, Flight $flight)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the flight.
     *
     * @param  \App\User  $user
     * @param  \App\Flight  $flight
     * @return mixed
     */
    public function forceDelete(User $user, Flight $flight)
    {
        //
    }
}
