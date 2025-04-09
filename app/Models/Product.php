<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    /**

    * PRODUCT ATTRIBUTES

    * $this->attributes['id'] - int - contains the product primary key (id)

    * $this->attributes['description'] - string - contains the  description

    * $this->attributes['name'] - string - contains the  name

    * $this->attributes['price'] - int - contains the price

    * $this->attributes['stock'] - int - contains the stock

    * $this->category - Category - contains the associated Category

    */


protected $fillable = ['description', 'category_id','stock','name', 'price'];


    public function getId(): int

    {

        return $this->attributes['id'];

    }


    public function setId(int $id): void

    {

        $this->attributes['id'] = $id;

    }


    public function getDescription(): string

    {

        return $this->attributes['description'];

    }


    public function setDescription(string $desc): void

    {

        $this->attributes['description'] = $desc;

    }

    public function getName(): string

    {

        return $this->attributes['name'];

    }


    public function setName(string $desc): void

    {

        $this->attributes['name'] = $desc;

    }

    public function getCategoryId(): int

    {

        return $this->attributes['category_id'];

    }


    public function setCategoryId(int $pId): void

    {

        $this->attributes['category_id'] = $pId;

    }


    public function category(): BelongsTo

    {

        return $this->belongsTo(Category::class);

    }


    public function getCategory(): Category

    {

        return $this->category;

    }


    public function setCategory($product): void

    {

        $this->category = $category;

    }


}
