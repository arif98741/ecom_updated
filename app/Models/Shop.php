<?php

namespace App\Models;

use App\Notifications\ShopResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Shop extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /*
     *    $table->bigIncrements('id');
            $table->string('product_name');
            $table->integer('shop_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('color_id')->unsigned()->nullable();
            $table->string('model');
            $table->double('price', 10, 2);
            $table->double('sale_price', 10, 2);
            $table->string('fea_image1')->nullable();
            $table->string('fea_image2')->nullable();
            $table->string('fea_image3')->nullable();
            $table->string('fea_image4')->nullable();
            $table->string('fea_image5')->nullable();
            $table->string('fea_image6')->nullable();
            $table->string('fea_image7')->nullable();
            $table->longText('description');
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ShopResetPassword($token));
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
