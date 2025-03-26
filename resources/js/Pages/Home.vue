<template>
  <div>
    <h1>محتواهای سایت</h1>

    <h2>موسیقی‌ها</h2>
    <ul>
      <li v-for="music in musics" :key="music.id">
        {{ music.title }} - {{ music.artist }}
      </li>
    </ul>

    <h2>ویدیوها</h2>
    <ul>
      <li v-for="video in videos" :key="video.id">
        {{ video.title }} - {{ video.description }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    musics: Array,  // آرایه موسیقی‌ها
    videos: Array   // آرایه ویدیوها
  }
}
</script>
