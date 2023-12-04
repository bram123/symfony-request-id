<?php
declare(strict_types=1);

namespace DR\SymfonyRequestId\Tests\Functional\App\Service;

use DR\SymfonyRequestId\RequestIdStorageInterface;

class TestRequestIdStorage implements RequestIdStorageInterface
{
    public int $setRequestIdCount = 0;
    public int $getRequestIdCount = 0;
    private ?string $requestId = null;

    public function getRequestId(): ?string
    {
        ++$this->getRequestIdCount;

        return $this->requestId;
    }

    public function setRequestId(?string $id): void
    {
        $this->requestId = $id;
        ++$this->setRequestIdCount;
    }
}