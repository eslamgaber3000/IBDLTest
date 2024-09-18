<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Concerns\IsFilamentUser;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;
    public function canAccessFilament(): bool
    {
        return in_array($this->role, [1, 2, 3]);
    }
    
       public function hasRole($role)
    {
        return $this->role === $role; 
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role_id',
        'email',
        'password',
        'birth_date',
        'position',
        'avatar',
        'gender',
        'lastName',
        'phone',
        'country',
        'city',
        'address'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    protected function gender(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ($value == 1) ? "Male" : "Female",
            set: fn (string $value) => ($value == 'Female') ? 0 : 1,
        );
    }
    
    protected function country(): Attribute
    {
        return Attribute::make(
            // get: fn (string $value) => Country::where('short_name',$value)->first()->id,
            set: fn (string $value) => is_numeric($value) ? Country::where('id',$value)->first()->short_name : $value,
        );
    }
    
    public function reviews()
    {
        return  $this->hasMany(review::class, 'user_id');
    }


    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
