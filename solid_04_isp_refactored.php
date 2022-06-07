<?php

interface Birds
{
    public function setLocation($lon, $lat);
    public function renderize();
}

interface Flyable extends Birds
{
    public function setAltitude($altitude);
}

class Parrot implements Flyable
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

    public function renderize()
    {
        //
    }
}