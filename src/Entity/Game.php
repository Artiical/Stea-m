<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\Column(type: 'float')]
    private $price;

    #[ORM\Column(type: 'string', length: 500, nullable: true)]
    private $image;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $platform;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $genre;

    #[ORM\Column(type: 'text', nullable: true)]
    private $longDescription;

    #[ORM\Column(type: 'json', nullable: true)]
    private $screenshots = [];

    #[ORM\Column(type: 'string', length: 500, nullable: true)]
    private $trailerUrl;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $developer;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $publisher;

    #[ORM\Column(type: 'date', nullable: true)]
    private $releaseDate;

    #[ORM\Column(type: 'json', nullable: true)]
    private $systemRequirements = [];

    #[ORM\Column(type: 'float', nullable: true)]
    private $averageRating;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getTitle(): ?string
    {
        return $this->title;
    }
    
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    
    public function getPrice(): ?float
    {
        return $this->price;
    }
    
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;
        return $this;
    }

    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    public function setLongDescription(?string $longDescription): self
    {
        $this->longDescription = $longDescription;
        return $this;
    }

    public function getScreenshots(): ?array
    {
        return $this->screenshots;
    }

    public function setScreenshots(?array $screenshots): self
    {
        $this->screenshots = $screenshots;
        return $this;
    }

    public function getTrailerUrl(): ?string
    {
        return $this->trailerUrl;
    }

    public function setTrailerUrl(?string $trailerUrl): self
    {
        $this->trailerUrl = $trailerUrl;
        return $this;
    }

    public function getDeveloper(): ?string
    {
        return $this->developer;
    }

    public function setDeveloper(?string $developer): self
    {
        $this->developer = $developer;
        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    public function getSystemRequirements(): ?array
    {
        return $this->systemRequirements;
    }

    public function setSystemRequirements(?array $systemRequirements): self
    {
        $this->systemRequirements = $systemRequirements;
        return $this;
    }

    public function getAverageRating(): ?float
    {
        return $this->averageRating;
    }

    public function setAverageRating(?float $averageRating): self
    {
        $this->averageRating = $averageRating;
        return $this;
    }
}
