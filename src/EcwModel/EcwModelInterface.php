<?php

namespace Dantweb\Atomizer\EcwModel;

interface EcwModelInterface
{
    /**
     * Get all fields defined for the model
     *
     * @return array The fields array
     */
    public function getFields(): array;

    /**
     * Magic getter method
     *
     * @param string $name The field name to get
     * @return mixed The field value or null if not found
     */
    public function __get(string $name): mixed;

    /**
     * Magic setter method
     *
     * @param string $name The field name to set
     * @param mixed $value The value to set
     */
    public function __set(string $name, mixed $value): void;

    /**
     * Magic method to handle dynamic getters and setters
     *
     * @param string $name The method name
     * @param array $arguments The method arguments
     * @return mixed
     * @throws \BadMethodCallException When the method doesn't exist
     */
    public function __call(string $name, array $arguments);

    /**
     * Set a field value
     *
     * @param string $name The field name
     * @param mixed $value The value to set
     */
    public function set(string $name, mixed $value): void;

    /**
     * Magic method to check if a field is set
     *
     * @param string $name The field name
     * @return bool
     */
    public function __isset(string $name): bool;

    /**
     * Magic method to unset a field
     *
     * @param string $name The field name
     */
    public function __unset(string $name): void;

    /**
     * Convert the model to a JSON string
     *
     * @return string JSON representation of the model data
     */
    public function __toString(): string;

    /**
     * Convert the model to an array
     *
     * @return array The model data as an array
     */
    public function toArray(): array;

    /**
     * Get the model name
     *
     * @return string The model name
     */
    public function getModelName(): string;

    /**
     * Get a field value with optional default
     *
     * @param string $name The field name
     * @param mixed $default The default value if field not found
     * @return mixed The field value or default
     */
    public function get(string $name, mixed $default = null): mixed;

    /**
     * Check if a field exists in the model
     *
     * @param string $name The field name
     * @return bool True if the field exists
     */
    public function hasField(string $name): bool;

    /**
     * Set a field value using mapped field name
     *
     * @param string $name The mapped field name
     * @param mixed $value The value to set
     * @return bool True if successful
     */
    public function setMappedField(string $name, mixed $value): bool;

    /**
     * Get a field value using mapped field name
     *
     * @param string $name The mapped field name
     * @return mixed The field value
     */
    public function getMappedField(string $name): mixed;

    /**
     * Check if the model can have a mapped field
     *
     * @param string $name The mapped field name
     * @return bool True if the model can have this field
     */
    public function canHaveMappedField(string $name): bool;

    /**
     * Parse a field mapping from a name
     *
     * @param string $name The field name to parse
     * @return array An array with [className, fieldName]
     */
    public function getFieldMapping(string $name): array;

    /**
     * Returns the field name used as primary key
     *
     * @return string The primary key field name
     */
    public function getPrimaryKeyName(): string;
}