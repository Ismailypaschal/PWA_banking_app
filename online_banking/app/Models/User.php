<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'dob',
        'gender',
        'marital_status',
        'country',
        'address',
        'city',
        'postal_code',
        'status',
        'profile_photo',
        'password',
        'security_pin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function accounts()
    {
        return $this->hasOne(Account::class);
    }
    public function deposits()
    {
        return $this->hasManyThrough(Deposit::class, Account::class);
    }
    public function withdraws()
    {
        return $this->hasManyThrough(Withdraw::class, Account::class);
    }
    public function transactions()
    {
        return $this->hasManyThrough(Transaction::class, Account::class);
    }
    public function transfers()
    {
        return $this->hasManyThrough(Transfer::class, Account::class);
    }
    public function cards()
    {
        return $this->hasManyThrough(Card::class, Account::class);
    }
}
