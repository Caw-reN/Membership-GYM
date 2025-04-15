<?php

namespace App\Repositories\Contracts;

Interface SubscribePackageRepositoryInterface
{
    public function getAllSubscribePackages(); 
    
    public function find($id);

    public function getPrice($subscribePackageId);


    
}