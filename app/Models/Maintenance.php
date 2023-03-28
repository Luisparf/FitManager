<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
        'machine',
        'local',
        'company',
        'dateMaintenance',
    ];

    public function scopeOrderByMachine($query)
    {
        $query->orderBy('machine')->orderBy('machine');
    }

    public function scopeWhereRole($query, $role)
    {
        switch ($role) {
            case 'user':
                return $query->where('owner', false);
            case 'owner':
                return $query->where('owner', true);
        }
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('machine', 'like', '%' . $search . '%')
                    ->orWhere('local', 'like', '%' . $search . '%')
                    ->orWhere('company', 'like', '%' . $search . '%');
            });
        })->when($filters['role'] ?? null, function ($query, $role) {
            $query->whereRole($role);
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        });
    }
}
