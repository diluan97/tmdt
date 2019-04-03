<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\BeautyLink;
use App\Helpers\SearchTrait;

class Contact extends Model
{
    use BeautyLink, SearchTrait;
    protected $table = 'contacs';

    public static $urlAdminEdit = 'admin_contact.edit';
    public static $urlAdminShow = 'admin_contact.show';
    public static $urlAdminDestroy = 'admin_contact.destroy';
    public static $urlAdminUpdate = 'admin_contact.update';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
