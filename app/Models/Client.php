<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['image_clients','name_clients','desc_clients'];
    protected $table = 'clients';
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
