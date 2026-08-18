<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

class Testimonial extends Model
{
    protected string $table = 'testimonials';
    protected array $fillable = ['name', 'profession', 'image', 'quote'];
}
