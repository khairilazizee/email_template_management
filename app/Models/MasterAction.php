<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAction extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email_templates_id'];

    public function emailTemplates()
    {
        return $this->belongsTo(EmailTemplate::class, 'email_templates_id');
    }
}
