<template>
  <div v-if="notifications.length" class="absolute top-12 right-5 bg-white shadow-lg rounded-lg p-4 w-80">
    <ul>
      <li v-for="notification in notifications" :key="notification.id" class="py-2 border-b last:border-b-0">
        {{ notification.message }}
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from "vue";

const notifications = ref([
  { id: 1, message: "یک کاربر جدید ثبت نام کرد." },
  { id: 2, message: "موزیک جدیدی آپلود شد." },
]);
</script>
