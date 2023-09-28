<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class DownloadDto
{
    public function __construct(
        #[Assert\NotNull]
        public string $token
    )
    {
    }
}
