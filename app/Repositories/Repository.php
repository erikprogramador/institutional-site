<?php
declare(strict_types=1);

namespace App\Repositories;

class Repository
{
    protected $entityManager;
    protected $entityName;

    public function __construct($entityManager, $entityName)
    {
        $this->entityManager = $entityManager;
        $this->entityName = $entityName;
    }

    public function findAll()
    {
        return $this->entityManager->getRepository($this->entityName)->findBy([]);
    }
}
