<?php


namespace App\Services\v1\impl;

use App\Models\Banners\Banner;
use App\Services\v1\BannerService;
class BannerServiceImpl implements BannerService
{
    public function findAll()
    {
        return Banner::all();
    }

    public function findAllPaginated($pageSize = 10, $page = 0)
    {
        return Banner::limit($pageSize)->offset($page * $pageSize)->get();
    }

    public function findAllById($id)
    {
        return Banner::where('id', $id)->get();
    }

    public function findAllByLocation($location_id)
    {
        return Banner::where('location_id', $location_id)->get();
    }
}
