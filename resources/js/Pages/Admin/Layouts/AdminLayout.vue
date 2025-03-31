<template>
  <div class="flex h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white" dir="rtl">
    <!-- سایدبار -->
    <Sidebar />

    <div class="flex flex-col flex-1 overflow-hidden">
      <!-- نوبار -->
      <Navbar />

      <!-- محتوای اصلی -->
      <main class="flex-1 p-6 overflow-y-auto">
        <slot />
      </main>
    </div>
  </div>
</template>

<script setup>
import Sidebar from "../Components/Sidebar.vue";
import Navbar from "../Components/Navbar.vue";
</script>
