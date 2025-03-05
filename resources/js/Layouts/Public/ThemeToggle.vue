<template>
    <button type="button" :aria-label="mounted ? `Switch to ${otherTheme} theme` : 'Toggle theme'"
        class="group rounded-full bg-white/90 px-3 py-2 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20"
        @click="toggleTheme">
        <SunIcon
            class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden [@media(prefers-color-scheme:dark)]:fill-teal-50 [@media(prefers-color-scheme:dark)]:stroke-teal-500 [@media(prefers-color-scheme:dark)]:group-hover:fill-teal-50 [@media(prefers-color-scheme:dark)]:group-hover:stroke-teal-600" />
        <MoonIcon
            class="hidden h-6 w-6 fill-zinc-700 stroke-zinc-500 transition dark:block [@media_not_(prefers-color-scheme:dark)]:fill-teal-400/10 [@media_not_(prefers-color-scheme:dark)]:stroke-teal-500 [@media(prefers-color-scheme:dark)]:group-hover:stroke-zinc-400" />
    </button>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { SunIcon, MoonIcon } from '@heroicons/vue/24/outline'

const mounted = ref(false)
const resolvedTheme = ref('dark') // Standardmäßig 'dark'

const otherTheme = resolvedTheme.value === 'dark' ? 'light' : 'dark'

onMounted(() => {
  mounted.value = true
  resolvedTheme.value = localStorage.getItem('theme') || 'dark';
  console.log("resolvedTheme", resolvedTheme.value);
})

// Funktion zum Umschalten des Themes
const toggleTheme = () => {
  console.log("resolvedTheme", resolvedTheme.value);
  console.log("toggle -", otherTheme);
  const newTheme = otherTheme
  resolvedTheme.value = newTheme
  localStorage.setItem('theme', newTheme)
  document.documentElement.classList.remove('dark', 'light')
  document.documentElement.classList.add(newTheme)
}
</script>