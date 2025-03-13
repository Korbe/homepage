<template>
  <nav v-bind="props">
    <ul
      class="flex rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10">
      <NavItem clasS="whitespace-nowrap" v-for="route in publicRoutes" :key="route.path" :href="route.path">
        {{ route.name }}
      </NavItem>
    </ul>
  </nav>
</template>

<script setup>
import publicRoutes from '@/routes';
import { defineProps } from 'vue'
import NavItem from './NavItem.vue'

const props = defineProps()
</script>