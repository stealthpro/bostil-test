<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseListRequest;
use App\Http\Resources\HouseResource;
use App\Models\House;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HouseController extends Controller
{

    /**
     * @param  \App\Http\Requests\HouseListRequest  $request
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(HouseListRequest $request): AnonymousResourceCollection
    {
        $apartments = House::paginate();

        return HouseResource::collection($apartments);
    }
}
