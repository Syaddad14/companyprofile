<?php

// app/Models/ClientComplaint.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientComplaint extends Model
{
    use HasFactory;

    protected $fillable = ['name_clients', 'client_no', 'complaint'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function tracking()
    {
        return $this->select('name_clients', 'complaint', 'client_id');
    }
}