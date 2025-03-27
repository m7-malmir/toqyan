<script setup>
import { ref } from 'vue';

const musics = ref([
    { id: 1, title: "موزیک اول" },
    { id: 2, title: "موزیک دوم" }
]);
</script>

<template>
    <div>
        <h1>لیست موزیک‌ها</h1>
        <ul>
            <li v-for="music in musics" :key="music.id">{{ music.title }}</li>
        </ul>
    </div>
</template>
