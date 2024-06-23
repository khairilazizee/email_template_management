<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAction extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email_templates_id', 'users_id', 'master_action_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function emailTemplates()
    {
        return $this->belongsTo(EmailTemplate::class, 'email_templates_id');
    }

    public function masterAction()
    {
        return $this->belongsTo(MasterAction::class, 'master_action_id');
    }
}
