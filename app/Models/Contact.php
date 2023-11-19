<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create($data)
 * @method static find($id)
 * @method static findOrFail($id)
 */
class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'contacts';
    protected $fillable = ['user_id', 'email', 'name', 'age', 'sex', 'birthday', 'phone'];

}
