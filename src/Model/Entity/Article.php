<?php
/**
 * Created by PhpStorm.
 * User: taekwon-oh
 * Date: 2018/05/11
 * Time: 10:58
 */
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity {
    protected $_accessible =
        [
            '*' => true,
            'id' => false,
            'slug' => false,
        ];
}
