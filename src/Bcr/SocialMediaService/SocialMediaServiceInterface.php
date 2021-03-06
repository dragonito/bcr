<?php

namespace App\Bcr\SocialMediaService;

use App\Bcr\Feed\ListItem;

interface SocialMediaServiceInterface
{
    /**
     * @return ListItem[]
     */
    public function getList(): array;
}
