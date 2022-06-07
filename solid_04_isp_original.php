<?php

interface Birds
{
    public function setLocation($lon, $lat);
    public function setAltitude($altitude);
    public function renderize();

}

class Parrot implements Birds
{
    public function setLocation($lon, $lat)
    {
        //
    }

    public function setAltitude($altitude)
    {
        //
    }

    public function renderize()
    {
        //
    }
}

class Penguin implements Birds
{
    public function setLocation($lon, $lat)
    {
        //
    }

    public function setAltitude($altitude)
    {
        //
    }

    public function renderize()
    {
        //
    }
}