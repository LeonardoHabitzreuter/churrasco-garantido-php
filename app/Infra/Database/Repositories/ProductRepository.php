<?php
declare(strict_types=1);

class ProductRepository extends Repository
{
  function get () {
    return Product::all();
  }
}