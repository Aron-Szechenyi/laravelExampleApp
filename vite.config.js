import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/theme.css', "resources/js/bootstrap.bundle.js,","aos.cjs.js","aos.esm.js","aos.js","bootstrap.esm.js","bootstrap.js"],
            refresh: true,
        }),
    ],
});
