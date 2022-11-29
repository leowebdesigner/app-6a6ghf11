<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovimentResource;
use App\Repositories\MovimentRepository;
use Illuminate\Http\Request;

class MovimentController extends Controller
{
    protected $repository;

    public function __construct(MovimentRepository $movimentRepository)
    {
        $this->repository = $movimentRepository;
    }

    public function index()
    {
        $moviments = $this->repository->getAllMoviments();
        return MovimentResource::collection($moviments);
    }
}
