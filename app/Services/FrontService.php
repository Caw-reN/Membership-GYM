<?php

namespace App\Services;

use App\Repositories\Contracts\CityRepositoryInterface;
use App\Repositories\Contracts\GymRepositoryInterface;
use App\Repositories\Contracts\SubscribePackageRepositoryInterface;

class FrontService
{
    Protected $gymRepository;
    Protected $cityRepository;
    Protected $subscribePackageRepository;


    // dependency injection
    public function __construct(
    CityRepositoryInterface $cityRepository, 
    GymRepositoryInterface $gymRepository, 
    SubscribePackageRepositoryInterface $subscribePackageRepository) {
        $this->gymRepository = $gymRepository;
        $this->cityRepository = $cityRepository;
        $this->subscribePackageRepository = $subscribePackageRepository;
    }

    public function getFrontPageData()
    {
        $cities = $this->cityRepository->getAllCities();
        $popularGyms = $this->gymRepository->getAllPopularGyms(10);
        $newGym = $this->gymRepository->getAllNewGyms();

        return compact('cities', 'popularGyms', 'newGym');
    }

    public function getSubscriptionsData()
    {
        $subscribePackage = $this->subscribePackageRepository->getAllSubscribePackages();
        return compact('subscribePackage');
    }
    
}