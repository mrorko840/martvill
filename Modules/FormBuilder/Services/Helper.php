<?php

namespace Modules\FormBuilder\Services;

use Throwable;

class Helper
{
    /**
     * Get the roles to use from the configured roles provider
     *
     * @return array
     */
    public static function getConfiguredRoles(): array
    {
        if (empty(config('formbuilder.roles_provider'))) return [];

        try {
            $provider = config('formbuilder.roles_provider');
            return (new $provider)();
        } catch (Throwable $e) {
            info($e);

            return [];
        }
    }

    /**
     * Add random string to the url to help bust the cache in development
     *
     * @return string
     */
    public static function bustCache(): string
    {
        if (!config('app.debug')) return '';

        return '?b=' . static::randomString();
    }

    /**
     * Generate and return a random characters string which is 4 characters more than the length specified
     *
     * @param   integer $length  Length of the string to be generated, Default: 8 characters long.
     * @param   string $seedings the characters to use for the random string seeding
     * @return  string
     */
    public static function randomString($length = 4, $seedings = null): string
    {
        $seedings = $seedings ?? '123456789ABCDEFGHJKLMOPQRSTUVWXYZabcdefghifklmnop';

        return substr(time(), -4) . substr(str_shuffle($seedings), $length);
    }

    /**
     * Return a generic error message
     *
     * @return string
     */
    public static function wtf(): string
    {
        return __('There was an error when processing your request.');
    }
}
