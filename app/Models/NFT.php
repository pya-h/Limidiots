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
        $imgPath = Storage::disk('uploads')->putFile('nfts', $value);
        $this->attributes['img'] = basename($imgPath);
    }

    public function truncateDescription(int $maxLength = 16): ?string
    {
        return !empty($this->description) && strlen($this->description) > $maxLength ? (Str::limit($this->description, $maxLength) . ' ...') : $this->description;
    }
}
