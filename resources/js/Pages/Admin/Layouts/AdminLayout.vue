<template>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900">
    <AdminSidebar />
    
    <div class="flex flex-col flex-1">
      <AdminNavbar />
      
      <main class="p-6 overflow-y-auto">
        <slot />
      </main>
    </div>
  </div>
</template>

<script setup>
import AdminSidebar from '@/Components/Admin/Sidebar.vue'
import AdminNavbar from '@/Components/Admin/Navbar.vue'
</script>