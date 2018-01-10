<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

   protected $fillable = [
        'active', 'etc', 'etc'
    ];


    /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getFirstNameAttribute($value) // Example
    {
        return ucfirst($value);
    }

    public function getActiveAttribute($status)
    {
        if ( $this->valid_until < Carbon::now()->toDateString() ) {
            $this->active = false;
            $this->save();
            
            return false;
        }          

        return (bool) $status;
    }    
}