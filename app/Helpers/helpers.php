<?php

use Spatie\QueryString\QueryString;

if (!function_exists('settings')) {
    function settings()
    {
        $settings = cache()->remember('settings', 24 * 60, function () {
            // return \app\Models\Ou::firstOrFail();
        });

        return $settings;
    }
}

if (!function_exists('format_currency')) {
    function format_currency($value, $format = true)
    {
        if (!$format) {
            return $value;
        }
        // $settings = settings();
        // $currency_code = ($settings) ? $settings->currency_code : '';
        $currency_code = 'Ksh';
        $formatted_value = $currency_code . ' ' . number_format((int) $value);
        return $formatted_value;
    }
}

if (!function_exists('format_currency')) {
    function format_currency($value, $format = true)
    {
        if (!$format) {
            return $value;
        }
        // $settings = settings();
        // $currency_code = ($settings) ? $settings->currency_code : '';
        $formatted_value = number_format((int) $value);
        return $formatted_value;
    }
}

if (!function_exists('make_reference_id')) {
    function make_reference_id($prefix, $number)
    {
        $padded_text = $prefix . '-' . str_pad($number, 5, 0, STR_PAD_LEFT);

        return $padded_text;
    }
}

function clearQueryString(string $name)
{
    $queryString = app(QueryString::class);

    return $queryString->clear($name);
}


function toggle(string $name, $toggleValue = null): QueryString
{
    $queryString = app(QueryString::class);

    return $queryString
        ->toggle($name, $toggleValue);
}