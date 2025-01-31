import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0',   // Make it accessible on all interfaces (external access)
        port: 5173,         // Port for Vite server
        hmr: {
            host: 'localhost', // WebSocket connection for hot reloading
            port: 5173,        // WebSocket server port
        },
    },
    plugins: [
        laravel({
            input: ['public/resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
