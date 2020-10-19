<?php
/**
 * @subpackage Documentation\API
 * @author     G.F
 * @ctime:     18/10/20 23:15
 */


namespace App;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'author_id'
    ];

}
