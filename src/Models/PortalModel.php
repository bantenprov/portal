<?php namespace Bantenprov\Portal\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The PortalModel class.
 *
 * @package Bantenprov\Portal
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PortalModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'portal';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
