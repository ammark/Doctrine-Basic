<?php
/**
 * Created by PhpStorm.
 * User: ammarkalim
 * Date: 2016-07-25
 * Time: 7:04 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM|Entity
 * @ORM|Table(name="genus")
 */
class Genus
{

    private $id;

    private $name;
}