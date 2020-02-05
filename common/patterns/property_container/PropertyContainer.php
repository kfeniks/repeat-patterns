<?php

namespace common\patterns\property_container;

/**
 * Class PropertyContainer
 * Паттерн контейнера Свойств
 * фундаментальный шаблон проектирования, который служит
 * для обеспечения возможности уже построенного и развернутого приложения
 * Поэтому класс при необходимости в любой момент может быть расширен
 * дополнительными свойствами.
 * @package common\patterns\property_container
 */
class PropertyContainer implements iPropertyContainer
{
    private $propertyContainer = [];
    private static $description;

    /**
     * @inheritDoc
     */
    public function addDescription(string $description): bool
    {
        self::$description = $description;

        return null !== self::$description;
    }

    /**
     * @inheritDoc
     */
    public static function getDescription(): ?string
    {
        return self::$description;
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function addProperty($key, $value): bool
    {
        if(!array_key_exists($key, $this->propertyContainer))
        {
            $this->propertyContainer[$key] = $value;
            return true;
        }

        echo "Property Container has the key named: $key.";

        throw new \Exception("Property Container has the key named: $key.");
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function removeProperty($key): bool
    {
        if(array_key_exists($key, $this->propertyContainer))
        {
            unset($this->propertyContainer[$key]);
            return true;
        }

        throw new \Exception("Property Container do not has the key named: $key.");
    }

    /**
     * @inheritDoc
     */
    public function removeProperties(): bool
    {
        $this->propertyContainer = [];
        return true;
    }

    /**
     * @inheritDoc
     */
    public function getProperty($key)
    {
        return $this->propertyContainer[$key] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getPropertyKeys(): array
    {
        return array_keys($this->propertyContainer);
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function setProperty($key, $value): bool
    {
        if(!array_key_exists($key, $this->propertyContainer))
        {
            throw new \Exception("Property Container do not has the key named: $key.");
        }

        $this->propertyContainer[$key] = $value;

        return true;
    }
}