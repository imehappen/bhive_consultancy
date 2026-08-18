<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

class Team extends Model
{
    protected string $table = 'team';
    protected array $fillable = ['name', 'designation', 'image', 'facebook', 'twitter', 'instagram', 'sort_order'];
}
