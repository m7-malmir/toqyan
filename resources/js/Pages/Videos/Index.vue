<script setup>
import { ref } from 'vue';

const videos = ref([
    { id: 1, title: "ویدیو اول" },
    { id: 2, title: "ویدیو دوم" }
]);
</script>

<template>
    <div>
        <h1>لیست ویدیو‌ها</h1>
        <ul>
            <li v-for="video in videos" :key="video.id">{{ video.title }}</li>
        </ul>
    </div>
</template>
