<?php
if (!function_exists('is_active')) {
    function is_active($segments, $strict = false)
    {
        $CI = &get_instance();
        if (is_array($segments)) {
            foreach ($segments as $index => $segment) {
                if ($strict && $CI->uri->segment($index + 1) !== $segment) {
                    return false;
                }
                if (!$strict && $CI->uri->segment($index + 1) == $segment) {
                    return true;
                }
            }
        } elseif ($CI->uri->segment(1) == $segments) {
            return true;
        }
        return false;
    }
}