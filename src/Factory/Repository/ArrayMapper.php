<?php declare(strict_types=1);

namespace Kiboko\Plugin\FastMap\Factory\Repository;

use Kiboko\Contract\Configurator;
use Kiboko\Plugin\FastMap;

final class ArrayMapper implements Configurator\RepositoryInterface
{
    use RepositoryTrait;

    public function __construct(private FastMap\Builder\ArrayMapperBuilder $builder)
    {
        $this->files = [];
        $this->packages = [];
    }

    public function getBuilder(): FastMap\Builder\ArrayMapperBuilder
    {
        return $this->builder;
    }
}
