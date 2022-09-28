<?php

namespace fflnvb\admin\Traits;

use Carbon\Carbon;

trait PrettyDateTrait {

    /**
     * Always get the same date format for given timestamp column.
     *
     * @param String $timestamp
     * @return String
     */
    public function prettyDate($column) {
        if(array_key_exists($column, $this->attributes)) {
            if(!empty($this->$column)){
                $carbon = new Carbon($this->$column);
                return $carbon->format('d.m.Y H:i');
            }

        }
        return null;
    }

}
