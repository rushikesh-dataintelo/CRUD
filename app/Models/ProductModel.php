<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';  
    protected $primaryKey = 'id';   
    protected $allowedFields = ['name', 'description', 'price'];  

    protected $returnType     = 'array'; 
    protected $useTimestamps = true;  
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'description' => 'required|min_length[5]',
        'price' => 'required|decimal',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'The product name is required.',
            'min_length' => 'The product name must be at least 3 characters long.',
        ],
        'description' => [
            'required' => 'The description is required.',
            'min_length' => 'The description must be at least 5 characters long.',
        ],
        'price' => [
            'required' => 'The price is required.',
            'decimal' => 'The price must be a valid decimal number.',
        ],
    ];

    protected $skipValidation = false;
}