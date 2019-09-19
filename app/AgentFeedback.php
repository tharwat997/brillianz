<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentFeedback extends Model
{
    protected $fillable = ['feedback_giver_id', 'agent_id', 'feedback'];
}
