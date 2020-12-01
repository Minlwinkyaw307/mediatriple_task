<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EmailReset
 *
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $token
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailReset whereUserId($value)
 * @mixin \Eloquent
 */
class EmailReset extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'token',
        'status',
    ];
}
