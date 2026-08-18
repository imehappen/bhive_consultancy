<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

class Project extends Model
{
    protected string $table = 'projects';
    protected array $fillable = ['title', 'category', 'description', 'image', 'sort_order'];
}
