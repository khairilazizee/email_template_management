<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['users_id', 'email_templates_id', 'title', 'subject', 'modified_header', 'modified_footer', 'modified_content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function emailTemplates()
    {
        return $this->belongsTo(EmailTemplate::class, 'email_templates_id');
    }
}
