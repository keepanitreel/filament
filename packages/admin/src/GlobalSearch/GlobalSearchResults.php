<?php

namespace Filament\GlobalSearch;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;

class GlobalSearchResults
{
    protected Collection $categories;

    public function __construct()
    {
        $this->categories = Collection::make();
    }

    public static function make(): static
    {
        return new static();
    }

    public function category(string $name, array | Arrayable $results = []): static
    {
        $this->categories[$name] = $results;

        return $this;
    }

    public function getCategories(): Collection
    {
        return $this->categories;
    }
}
