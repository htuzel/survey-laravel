<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function sort() {

        $results = array(
            "activist" => $this->activist,
            "alt" => $this->alt,
            "demystifier" => $this->demystifier,
            "motivator" => $this->motivator,
            "professional" => $this->professional,
            "professor" => $this->professor,
            "spirit_guide" => $this->spirit_guide,
            "taste_maker" => $this->taste_maker,
            "teacher" => $this->teacher,
            "techie" => $this->techie,
            "trendsetter" => $this->trendsetter,
            "watchdog" => $this->watchdog,
        );

        $results = collect($results)->sort()->reverse();
        return $results;

    }
}
