<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Recipecategory;

class Recipe extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $primaryKey = 'recip_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'recip_name',
        'recip_created_date',
        'recip_Image', 
        'recip_userId',  
        'recip_categoriesId', 
        'recip_statusId', 
        'recip_difficultId', 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            
        ];
    }

    /* Eloquent Table Relations */

    public function user()
    {
        return $this->belongsTo(User::class, 'recip_userId', 'user_id');
    } 

    public function ingredient(){

        return $this->hasMany(Ingredient::class, 'ingr_recipeId' , 'recip_id');
    }

    public function recipecategories()
    {
        return $this->belongsTo(Recipecategory::class, 'recip_categoriesId', 'recipCat_id');
    } 

    public function difficult()
    {
        return $this->belongsTo(Recipe::class, 'recip_difficultId', 'recipe_difficult_id');
    } 

}
