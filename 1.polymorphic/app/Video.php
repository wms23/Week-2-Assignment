<?php

namespace app;

use illuminate\database\eloquent\model;

class video extends model
{
    //
    public function comments()
    {
        return $this->morphmany(comment::class, 'comment_table');
    }
}
