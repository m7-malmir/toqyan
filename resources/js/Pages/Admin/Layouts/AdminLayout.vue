<template>
  <div class="flex h-screen bg-gray-100 dark:bg-gray-900">
    <!-- سایدبار -->
    <Sidebar />

    <div class="flex flex-col flex-1">
      <!-- نوبار -->
      <Navbar />

      <main class="flex-1 p-6">
        <slot />
      </main>
    </div>
  </div>
</template>

<script setup>
import Sidebar from "../Components/Sidebar.vue";
import Navbar from "../Components/Navbar.vue";
</script>
