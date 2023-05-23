<?php

namespace App\Services;

class AppService
{
    /**
     * Get a property value from a property.
     *
     * @param array $props
     * @param string $key
     * @param string $value
     * @param string $key_to_fetch
     * @return string
     */
    public static function get_prop(
        array $props,
        string $key,
        string $value,
        string $key_to_fetch = "Value"
    ): string {
        try {
            return collect($props)
                ->filter(fn ($prop) => $prop[$key] == $value)
                ->first()[$key_to_fetch];
        } catch (\Throwable $th) {
            return "Invalid property key or value: {$th->getMessage()}.";
        }
    }

    /**
     * Get property values from a property.
     *
     * @param array $props
     * @param string $key
     * @param string $value
     * @param string $key_to_fetch
     * @return array
     */
    public static function get_prop_values(
        array $props,
        string $key,
        string $value
    ): array {
        try {
            return collect($props)
                ->filter(fn ($prop) => $prop[$key] == $value)
                ->values()
                ->toArray();
        } catch (\Throwable $th) {
            return [
                "Value" => "Invalid property key or value: {$th->getMessage()}.",
            ];
        }
    }
}
