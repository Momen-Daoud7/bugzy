<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
    	'project_name',
    	"start_date",
    	'target_end_date',
    	'actual_end_date',
    	'created_by',
    	'modifed_by'
    ];

    public function creator()
    {
    	return $this->belongsTo('App\Models\User','created_by');
    }
    public function modifer()
    {
        return $this->belongsTo('App\Models\User','modifed_by');
    }
     
}
