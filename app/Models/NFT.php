<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NFT extends Model
{
    use CrudTrait;
    use HasFactory;

    public static function getBaseRoute(): string {
        return 'storage/nfts/';
    }

    protected $table = 'nfts';

    protected $fillable = [
        'title',
        'img',
        'description',
        'owner_id'
    ];
    function owner() {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function setImgAttribute($value)
    {
        $imgPath = Storage::disk('public')->putFile('nfts', $value);
        $this->attributes['img'] = basename($imgPath);
    }

    public function truncateDescription(int $maxLength = 64): ?string
    {
        return !empty($this->description) && strlen($this->description) > $maxLength ? (Str::limit($this->description, $maxLength) . ' ...') : $this->description;
    }
}
