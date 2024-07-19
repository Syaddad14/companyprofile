<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    // Define the table if it's not the plural of the model name
    protected $table = 'complaints';

    // Define the fillable fields
    protected $fillable = ['description', 'status', 'response', 'client_id'];

    // Define the relationship with the Client model
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
