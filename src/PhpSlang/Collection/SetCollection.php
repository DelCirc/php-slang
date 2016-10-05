<?php

namespace PhpSlang\Collection;

use Closure;
use PhpSlang\Collection\Generic\AbstractCollection;
use PhpSlang\Collection\Generic\Collection;
use PhpSlang\Exception\NotYetImplementedException;

class SetCollection extends AbstractCollection
{
    public static function of(array $array) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function map(Closure $expression) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function flatMap(Closure $expression) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function flatten() : Collection
    {
        throw new NotYetImplementedException();
    }

    public function slice(int $startAt, int $count) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function every(int $whichOne, bool $keep = true) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function reversed() : Collection
    {
        throw new NotYetImplementedException();
    }

    public function sum()
    {
        throw new NotYetImplementedException();
    }

    public function partition(Closure $expression, SetCollection $predefinedGroups = null) : HashMapCollection
    {
        throw new NotYetImplementedException();
    }

    public function filter(Closure $expression) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function filterNot(Closure $expression) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function groups(int $groupsCount) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function fold($startWith, Closure $expression)
    {
        throw new NotYetImplementedException();
    }

    public function diff(Collection $compareTo) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function intersection(Collection $compareTo) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function merge(Collection $with) : Collection
    {
        throw new NotYetImplementedException();
    }

    final public function toArray() : array
    {
        throw new NotYetImplementedException();
    }

    public function toList() : ListCollection
    {
        throw new NotYetImplementedException();
    }

    public function toHashMap() : HashMapCollection
    {
        throw new NotYetImplementedException();
    }

    public function toSet() : SetCollection
    {
        throw new NotYetImplementedException();
    }

    public function sortBy(Closure $expression) : Collection
    {
        throw new NotYetImplementedException();
    }

    public function unique() : Collection
    {
        throw new NotYetImplementedException();
    }
}