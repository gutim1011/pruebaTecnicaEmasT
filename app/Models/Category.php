<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Collection;


class Category extends Model

{

use HasFactory;


/**

* PRODUCT ATTRIBUTES

* $this->attributes['id'] - int - contains the  primary key (id)

* $this->attributes['description'] - string - contains the description

* $this->attributes['name'] - string - contains the name


*/


protected $fillable = ['description', 'name'];


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

return $this->attributes['description'];

}


public function setName(string $desc): void

{

$this->attributes['description'] = $desc;

}

public function products(): HasMany

{

return $this->hasMany(Product::class);

}


public function getProducts(): Collection

{

return $this->products;

}


public function setProducts(Collection $products): void

{

$this->products = $products;

}

}
