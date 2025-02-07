import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import basicSsl from '@vitejs/plugin-basic-ssl';
export default defineConfig({
    server: {
        host: '0.0.0.0',  // Make it accessible on all interfaces (external access)
        port: 8080,
        hmr: {
            host: 'localhost',  // WebSocket connection for hot reloading
            port: 8080,        // WebSocket server port
            protocol: 'wss',   // Use WebSocket Secure (WSS) instead of WebSocket (WS)
        },
        watch: {
            usePolling: true
        }
    },
    plugins: [
        laravel({
            input: ['/public/resources/css/app.scss', '/public/resources/js/app.js'],
            refresh: true,
        }),
        basicSsl(),
    ],
});
