<template>
  <aside class="w-64 bg-white dark:bg-gray-800 h-screen p-5 shadow-md">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-5">مدیریت</h2>
    <nav>
      <ul class="space-y-3">
          <li>
            <Link href="/admin/dashboard" class="block py-2 px-4 rounded-lg text-black dark:text-white font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition">
              داشبورد
            </Link>
          </li>
          <li>
            <Link href="/admin/musics" class="block py-2 px-4 rounded-lg text-black dark:text-white font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition">
              مدیریت موسیقی
            </Link>
          </li>
          <li>
            <Link href="/admin/videos" class="block py-2 px-4 rounded-lg text-black dark:text-white font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition">
              مدیریت ویدیوها
            </Link>
          </li>
      </ul>

    </nav>
  </aside>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
