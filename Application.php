<?php
namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use SoftDeletes;
    protected $table = "l_application";

    protected $fillable = ["name", "givenname", "gender", "marital", "language", "birthdate", "citybirth", "workcity", "mobile", "address",
        "countrybirth", "cardnumber", "cardissued", "otherlanguages", "whatlanguages", "education", "workname", "worktype", "workphone",
        "educationfrom", "educationto", "educationname", "educationtype", "educationcity", "occupation", "workfrom", "workto", "phone", "email"];


}