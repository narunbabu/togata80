<?php
namespace App\Models\HouseDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hd_house_usefulness extends Model
{
    use HasFactory;
    protected $fillable = ["id","name","label"];
}