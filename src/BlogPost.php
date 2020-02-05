<?php

namespace src;

use common\patterns\property_container\PropertyContainer;

class BlogPost extends PropertyContainer
{
    private $title;
    private $categoryID;

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setCategory(int $id): void
    {
        $this->categoryID = $id;
    }

}