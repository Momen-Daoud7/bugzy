<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    protected $fillable  = [
    	'bug_name',
    	'bug_summary',
    	'bug_description',
    	'opened_by',
    	'related_project',
    	'assigned_to',
    	'status',
    	'priority',
    	'traget_resolution_date',
    	'actual_resoultion_date',
    	'resolution_summary',
    	'modifed_by'
    ];

    public function user()
    {
        return belongsTo('App\Models\User');
    }
    public function projects()
    {
        return belongsTo('App\Models\project');
    }
}
