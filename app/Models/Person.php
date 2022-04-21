<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const SEX_RADIO = [
        'male'   => 'Male',
        'female' => 'female',
        'other'  => 'Other',
    ];

    public $table = 'people';

    protected $dates = [
        'birth_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'birth_date',
        'sex',
        'project_id',
        'projects_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function personSamples()
    {
        return $this->hasMany(Sample::class, 'person_id', 'id');
    }

    public function getBirthDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function projects()
    {
        return $this->belongsTo(Project::class, 'projects_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
