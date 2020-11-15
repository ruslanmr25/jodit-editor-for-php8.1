<?php

namespace Do6po\LaravelJodit\Dto;

use Do6po\LaravelJodit\Entities\PathInfo;

final class UploadedFileDto
{
    private string $path;

    private function __construct()
    {
    }

    public static function byFilePath(string $path): self
    {
        $self = new self();

        $self->path = $path;

        return $self;
    }

    public function getName(): string
    {
        return PathInfo::byPath($this->path)->getBaseName();
    }

    public function isImage(): bool
    {
        return isImage($this->getExtension());
    }

    public function getExtension(): string
    {
        return PathInfo::byPath($this->getName())
            ->getExtension();
    }
}
