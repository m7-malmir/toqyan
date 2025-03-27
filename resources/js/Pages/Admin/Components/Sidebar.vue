<template>
  <aside class="w-64 bg-white dark:bg-gray-800 shadow-lg fixed h-full transition-all duration-300">
    <div class="p-4 border-b border-gray-200 dark:border-gray-700">
      <h1 class="text-xl font-bold text-indigo-600 dark:text-indigo-300">
        {{ appName }}
      </h1>
    </div>

    <nav class="p-4">
      <ul class="space-y-2">
        <li v-for="item in navItems" :key="item.name">
          <InertiaLink
            :href="route(item.route)"
            class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="route().current(item.route) ? 'bg-indigo-50 text-indigo-600 dark:bg-gray-700' : 'text-gray-700 dark:text-gray-300'"
          >
            <component :is="item.icon" class="w-5 h-5" />
            <span class="mr-2">{{ item.name }}</span>
            <span v-if="item.badge" class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded-full">
              {{ item.badge }}
            </span>
          </InertiaLink>
        </li>
      </ul>
    </nav>

    <!-- حالت تاریک/روشن -->
    <div class="absolute bottom-0 w-full p-4">
      <button @click="toggleDarkMode" class="flex items-center justify-center w-full p-2 rounded-lg bg-gray-100 dark:bg-gray-700">
        <MoonIcon v-if="darkMode" class="w-5 h-5 text-yellow-400" />
        <SunIcon v-else class="w-5 h-5 text-gray-600" />
      </button>
    </div>
  </aside>
</template>

<script setup>
import { ref } from 'vue'
import { InertiaLink } from '@inertiajs/inertia-vue3'
import {
  HomeIcon,
  UsersIcon,
  ChartBarIcon,
  CogIcon,
  MoonIcon,
  SunIcon
} from '@heroicons/vue/outline'

const props = defineProps({
  appName: String
})

const darkMode = ref(false)
const toggleDarkMode = () => (darkMode.value = !darkMode.value)

const navItems = [
  { name: 'داشبورد', route: 'admin.dashboard', icon: HomeIcon },
  { name: 'کاربران', route: 'admin.users', icon: UsersIcon, badge: 'جدید' },
  { name: 'آمارها', route: 'admin.analytics', icon: ChartBarIcon },
  { name: 'تنظیمات', route: 'admin.settings', icon: CogIcon }
]
</script>