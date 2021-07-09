<?php


namespace Kodeas\Publicise;

trait WithPublicise
{

    public function publicise($instance): Publicise
    {
        return new Publicise($instance);
    }
}
