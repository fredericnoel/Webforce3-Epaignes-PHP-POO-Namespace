<?php

/* On devrait le même au même niveau que les classes
 * ou les interfaces, les traits sont un pattern de classes
 * Je le mets ici pour que vous compreniez
 * */

trait DemoTrait
{
    /* On écrit une méthode toute simple
     * Cette méthode sera utilisable partout
     * */

    public function testTrait()
    {
        echo "J'adoooore ce que vous faisez";
    }
}

class Voiture
{
    use DemoTrait;
}

class Velo
{
    use DemoTrait;
}