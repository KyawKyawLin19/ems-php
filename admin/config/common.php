<?php

    // Print variables in readable format (does NOT stop script)
    if(!function_exists('dump')) {
        function dump(...$vars): void {
            echo '<pre style="background:#222;color:#0f0;padding:10px;border-radius:8px;">';
            foreach ($vars as $v) {
                var_dump($v);
            }
            echo '</pre>';
        }

    // Print variables and stop execution (like die(var_dump()))
    if (!function_exists('dd')) {
        function dd(...$vars): void {
            dump(...$vars);
            exit;
        }
    }

    if (!function_exists('escape')) {
        // Escape for HTML output
        function escape(?string $value): void {
            echo htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        }
    }

    if (!function_exists('escape_attr')) {
        // Escape for HTML attributes
        function escape_attr(?string $value): string {
            return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        }
    }

    if (!function_exists('escape_url')) {
        // Sanitize & escape URLs
        function escape_url(?string $url): string {
            $url = trim($url ?? '');
            if ($url === '') return '';
            $lower = strtolower($url);
            if (preg_match('#^(javascript:|data:|vbscript:)#', $lower)) {
                return ''; // block dangerous URLs
            }
            return htmlspecialchars($url, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        }
    }

    if (!function_exists('escape_js')) {
        // Escape for JavaScript string contexts
        function escape_js(?string $value): string {
            if ($value === null) return '';
            return substr(json_encode($value, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT), 1, -1);
        }
    }
}