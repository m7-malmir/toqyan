<template>
  <Transition name="fade">
    <div v-if="show" class="fixed top-4 right-4 z-50">
      <div 
        class="p-4 rounded-lg shadow-lg border-l-4 flex items-center"
        :class="{
          'bg-green-50 border-green-500': type === 'success',
          'bg-red-50 border-red-500': type === 'error',
          'bg-blue-50 border-blue-500': type === 'info'
        }"
      >
        <CheckCircleIcon v-if="type === 'success'" class="h-6 w-6 text-green-500" />
        <XCircleIcon v-else-if="type === 'error'" class="h-6 w-6 text-red-500" />
        <InformationCircleIcon v-else class="h-6 w-6 text-blue-500" />

        <div class="mr-3">
          <p class="font-medium">{{ title }}</p>
          <p class="text-sm text-gray-600">{{ message }}</p>
        </div>

        <button @click="show = false" class="text-gray-400 hover:text-gray-500">
          <XMarkIcon class="h-5 w-5" />
        </button>
      </div>
    </div>
  </Transition>
</template>

<script setup>
import { ref } from 'vue'
import {
  CheckCircleIcon,
  XCircleIcon,
  InformationCircleIcon,
  XMarkIcon
} from '@heroicons/vue/24/outline'

const props = defineProps({
  type: { type: String, default: 'info' },
  title: String,
  message: String,
  duration: { type: Number, default: 5000 }
})

const show = ref(true)

if (props.duration > 0) {
  setTimeout(() => (show.value = false), props.duration)
}
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s, transform 0.3s;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
  transform: translateX(20px);
}
</style>