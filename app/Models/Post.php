<?php



namespace App;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Post extends Model

{

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'content'

    ];
/**

 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo

 */

public function subject()

{

    return $this->belongsTo(Subject::class);

} 
public function user()

{

    return $this->belongsTo(Subject::class);

} 
} 