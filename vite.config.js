import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
            '~bootstrap': '/node_modules/bootstrap/',
            '~bootstrap-icons': '/node_modules/bootstrap-icons/',
            '~choices.js': '/node_modules/choices.js/',
            '~flatpickr': '/node_modules/flatpickr/',
        },
    },
});
