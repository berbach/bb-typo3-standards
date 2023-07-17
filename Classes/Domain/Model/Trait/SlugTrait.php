<?php

declare(strict_types=1);

namespace Bb\Standards\Domain\Model\Trait;

trait SlugTrait
{

    /**
     * Slug
     *
     * @var string
     */
    protected string $slug;

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }
}