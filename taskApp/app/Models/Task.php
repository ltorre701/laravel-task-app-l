<?php

namespace App\Models;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'task_name',
        'task_location',
        'time_complexity',
        'materials_required',
        'deadline',
        'priority',
        'category'
    ];

    public static function validationRules()
    {
        return [
            'task_name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z0-9\s\-_,]{0,255}$/'
            ],
            'time_complexity' => [
                'required',
                'integer',
                'min:1',
                'max:5'
            ],
            'materials_required' => [
                'nullable',
                'string',
                'regex:^[\w\s,.-]{0,1000}$/'
            ],
            'deadline' => [
                'nullable',
                'date',
                'after:today'
            ],
            'priority' => [
                'nullable',
                'integer',
                'min:1',
                'max:3'
            ],
            'category' => [
                'nullable',
                'string',
                'max:50',
                'regex:/^[a-zA-Z\s]{0-50}$/'
            ],
        ];
    }
}
