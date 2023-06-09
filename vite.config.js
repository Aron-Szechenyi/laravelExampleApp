import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/theme.min.css',
                'resources/css/bootstrap.css',
            ],
            refresh: true,
        }),
    ],
});
