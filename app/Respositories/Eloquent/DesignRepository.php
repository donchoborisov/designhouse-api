<?php
namespace App\Respositories\Eloquent;
use App\Respositories\Contracts\IDesign;
use App\Models\Design;

class DesignRepository implements IDesign
{
    public function all(){
        return Design::all();
    }
}