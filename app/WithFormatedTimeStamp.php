<?php

namespace App;

use Carbon\Carbon;

trait WithFormatedTimeStamp
{
  public function getCreatedAtFormatedAttribute(){
    return Carbon::parse($this->created_at)->format("d-M-Y h:i:s a");
  }
}
