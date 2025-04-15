<?php

namespace App\Repositories\Contracts;

Interface GymRepositoryInterface
{
    public function getAllPopularGyms($limit); 

    public function getAllNewGyms(); 

    public function find($id);

    public function getPrice($gymId);

}