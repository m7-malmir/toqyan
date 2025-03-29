<template>
  <header class="bg-white dark:bg-gray-800 shadow-sm sticky top-0 z-10">
    <div class="flex items-center justify-between px-6 py-3">
      <!-- جستجو -->
      <div class="relative w-64">
        <input
          type="text"
          placeholder="جستجو..."
          class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700"
        >
        <MagnifyingGlassIcon class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" />
      </div>

      <!-- بخش کاربر و اعلانات -->
      <div class="flex items-center space-x-4">
        <button class="p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 relative">
          <BellIcon class="h-6 w-6 text-gray-500 dark:text-gray-400" />
          <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
        </button>

        <div class="flex items-center space-x-2">
          <img 
            :src="$page.props.auth.user.avatar" 
            alt="User Avatar" 
            class="w-8 h-8 rounded-full object-cover"
          >
          <span class="text-sm font-medium text-gray-700 dark:text-gray-200">
            {{ $page.props.auth.user.name }}
          </span>
        </div>
      </div>
    </div>
  </header>
</template>

<script setup>
import { BellIcon, MagnifyingGlassIcon } from "@heroicons/vue/24/outline";
</script>
