<template>
    <AdminLayout>
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-bold text-gray-800 dark:text-white mb-4">مدیریت موسیقی</h1>
  
        <!-- فرم اضافه کردن موسیقی -->
        <form @submit.prevent="addMusic" class="space-y-4">
          <div>
            <label class="block text-gray-700 dark:text-gray-300">نام موسیقی</label>
            <input v-model="music.name" type="text" class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
          </div>
  
          <div>
            <label class="block text-gray-700 dark:text-gray-300">لینک فایل موسیقی</label>
            <input v-model="music.file_url" type="text" class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
          </div>
  
          <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg">
            افزودن موسیقی
          </button>
        </form>
      </div>
    </AdminLayout>
  </template>
  
  <script setup>
  import { ref } from "vue";
  import { useForm } from "@inertiajs/vue3";
  import AdminLayout from "../../Layouts/AdminLayout.vue";
  
  const music = ref({
    name: "",
    file_url: ""
  });
  
  const addMusic = () => {
    // ارسال درخواست به سرور
    useForm(music.value).post("/admin/musics");
  };
  </script>
  