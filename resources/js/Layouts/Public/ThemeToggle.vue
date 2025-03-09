<template>
  <button type="button" 
      :aria-label="mounted ? `Switch to ${resolvedTheme === 'dark' ? 'light' : 'dark'} theme` : 'Toggle theme'"
      class="group rounded-full bg-white/90 px-3 py-2 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20"
      @click="toggleTheme">
      
      <SunIcon v-if="resolvedTheme === 'light'"
          class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700" />
      
      <MoonIcon v-else
          class="h-6 w-6 fill-zinc-700 stroke-zinc-500 transition group-hover:stroke-zinc-400" />
  </button>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { SunIcon, MoonIcon } from '@heroicons/vue/24/outline'

const mounted = ref(false)
const resolvedTheme = ref('dark') // Default to dark mode

onMounted(() => {
  mounted.value = true
  const savedTheme = localStorage.getItem('theme') || 'dark' // Default to 'dark'
  resolvedTheme.value = savedTheme
  document.documentElement.classList.toggle('dark', savedTheme === 'dark')
})

// Function to toggle the theme
const toggleTheme = () => {
  const newTheme = resolvedTheme.value === 'dark' ? 'light' : 'dark'
  resolvedTheme.value = newTheme
  localStorage.setItem('theme', newTheme)
  document.documentElement.classList.toggle('dark', newTheme === 'dark')
}
</script>
