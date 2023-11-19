<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, mixed $email)
 * @method static create($data)
 * @method static find($id)
 * @method static findOrFail($id)
 */
class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
