import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    server: {
      proxy: {
        '/app': 'http://localhost:8000', // درخواست‌ها به این آدرس هدایت میشه.
        '/videos': 'http://localhost:8000',
        '/musics': 'http://localhost:8000',
      },
    },
    plugins: [
      laravel({
        input: 'resources/js/app.js',
        refresh: true,
      }),
      vue(),
    ],
  });
  
