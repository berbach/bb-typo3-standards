<?php

declare(strict_types=1);

namespace Bb\Standards\Domain\Model\Trait;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;

trait SocialMediaTrait
{

    /**
     * OG title
     *
     * @var string
     */
    protected string $ogTitle;
    /**
     * OG description
     *
     * @var string
     */
    protected string $ogDescription;
    /**
     * OG image
     *
     * @var FileReference|null
     */
    protected ?FileReference $ogImage;
    /**
     * Twitter title
     *
     * @var string
     */
    protected string $twitterTitle;
    /**
     * Twitter description
     *
     * @var string
     */
    protected string $twitterDescription;
    /**
     * Twitter image
     *
     * @var FileReference|null
     */
    protected ?FileReference $twitterImage;
    /**
     * Twitter Card
     *
     * @var string
     */
    protected string $twitterCard;

    /**
     * @return string
     */
    public function getOgTitle(): string
    {
        return $this->ogTitle;
    }

    /**
     * @param string $ogTitle
     */
    public function setOgTitle(string $ogTitle): void
    {
        $this->ogTitle = $ogTitle;
    }

    /**
     * @return string
     */
    public function getOgDescription(): string
    {
        return $this->ogDescription;
    }

    /**
     * @param string $ogDescription
     */
    public function setOgDescription(string $ogDescription): void
    {
        $this->ogDescription = $ogDescription;
    }

    /**
     * @return FileReference
     */
    public function getOgImage(): FileReference
    {
        return $this->ogImage;
    }

    /**
     * @param FileReference $ogImage
     */
    public function setOgImage(FileReference $ogImage): void
    {
        $this->ogImage = $ogImage;
    }

    /**
     * @return string
     */
    public function getTwitterTitle(): string
    {
        return $this->twitterTitle;
    }

    /**
     * @param string $twitterTitle
     */
    public function setTwitterTitle(string $twitterTitle): void
    {
        $this->twitterTitle = $twitterTitle;
    }

    /**
     * @return string
     */
    public function getTwitterDescription(): string
    {
        return $this->twitterDescription;
    }

    /**
     * @param string $twitterDescription
     */
    public function setTwitterDescription(string $twitterDescription): void
    {
        $this->twitterDescription = $twitterDescription;
    }

    /**
     * @return FileReference|null
     */
    public function getTwitterImage(): ?FileReference
    {
        return $this->twitterImage;
    }

    /**
     * @param FileReference $twitterImage
     */
    public function setTwitterImage(FileReference $twitterImage): void
    {
        $this->twitterImage = $twitterImage;
    }

    /**
     * @return string
     */
    public function getTwitterCard(): string
    {
        return $this->twitterCard;
    }

    /**
     * @param string $twitterCard
     */
    public function setTwitterCard(string $twitterCard): void
    {
        $this->twitterCard = $twitterCard;
    }
}