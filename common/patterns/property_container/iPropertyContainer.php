<?php

namespace common\patterns\property_container;

interface iPropertyContainer
{
    /**
     * @param string $description
     * @return bool
     */
    public function addDescription(string $description): bool;

    /**
     * @return string|null
     */
    public static function getDescription(): ?string;
    /**
     * @param string|int $key
     * @param mixed $value
     * @return bool
     */
    public function addProperty($key, $value): bool;

    /**
     * @param string|int $key
     * @param mixed $value
     * @return bool
     */
    public function setProperty($key, $value): bool;

    /**
     * @param string|int $key
     * @return bool
     */
    public function removeProperty($key): bool;

    /**
     * @return bool
     */
    public function removeProperties(): bool;

    /**
     * @param string|int $key
     * @return mixed
     */
    public function getProperty($key);

    /**
     * @return array
     */
    public function getPropertyKeys(): array;

}