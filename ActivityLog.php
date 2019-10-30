<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{

    protected $table = "activity_log";

    protected $appends = ["created_at_date"];

    protected $fillable = ["user_id", "text", "ip_address", "created_at"];

    public function user(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function getCreatedAtDateAttribute(){

        $shamsi_date = shamsiDate($this->created_at);
        $time = explode(" ", $this->created_at)[1];
        return $shamsi_date[0]."/".$shamsi_date[1]."/".$shamsi_date[2]." - ".$time;
    }
}