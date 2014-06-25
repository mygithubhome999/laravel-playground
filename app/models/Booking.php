<?php

class Booking extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ab4s_booking';

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get an array of booking images path
     * @return array
     */
    public function getImages()
    {

        $img_paths = array();
        $img_dir = public_path() . '/data/users/' . $this->id_user . '/booking-storage/' . $this->uuid;

        if (File::isDirectory($img_dir)) {
            $paths = File::allFiles($img_dir);

            /* @TODO: detect & filter only image files */

            // strip public folder path
            foreach ($paths as $p) {
                $img_paths[] = str_replace(public_path(), '', $p);
            }

        } else {
            $img_paths[] = URL::asset('static/img/no-booking-img.jpg');
        }

        return $img_paths;
    }

}
