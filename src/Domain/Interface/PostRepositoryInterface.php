<?php

use App\Domain\Post;
use Doctrine\Common\Collections\Collection;

interface PostRepositoryInterface
{
    public function save(Post $post): void;
    public function findAll(): Collection;
    public function findOneById(int $id): ?Post;
}