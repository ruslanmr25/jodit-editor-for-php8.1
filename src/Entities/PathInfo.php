<?php

namespace Do6po\LaravelJodit\Entities;

final class PathInfo
{

    private string $path;

    private function __construct()
    {
    }

    public static function byPath(string $path)
    {
        $self = new self();

        $self->path = $path;

        return $self;
    }

    public function getBaseName(): string
    {
        return pathinfo($this->path, PATHINFO_BASENAME);
    }

    public function getFileName(): string
    {
        return pathinfo($this->path, PATHINFO_FILENAME);
    }

    public function getExtension(): string
    {
        return pathinfo($this->path, PATHINFO_EXTENSION);
    }

}
