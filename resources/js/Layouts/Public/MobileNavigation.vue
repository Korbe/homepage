<template>
  <Popover>
    <PopoverButton
      class="group flex items-center rounded-full bg-white/90 px-4 py-2 text-sm font-medium text-brand-headline ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 dark:hover:ring-white/20">
      Menu
      <ChevronDownIcon
        class="ml-3 h-auto w-2 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400" />
    </PopoverButton>
    <PopoverOverlay transition
      class="fixed inset-0 z-10 bg-zinc-800/40 backdrop-blur-xs duration-150 data-closed:opacity-0 data-enter:ease-out data-leave:ease-in dark:bg-black/80" />
    <PopoverPanel focus transition
      class="fixed inset-x-4 top-8 z-10 origin-top rounded-3xl bg-white p-8 ring-1 ring-zinc-900/5 duration-150 data-closed:scale-95 data-closed:opacity-0 data-enter:ease-out data-leave:ease-in dark:bg-zinc-900 dark:ring-zinc-800">
      <div class="flex flex-row-reverse items-center justify-between">
        <PopoverButton aria-label="Close menu" class="-m-1 p-1">
          <XMarkIcon class="h-6 w-6 text-zinc-500 dark:text-brand-text-dark" />
        </PopoverButton>
        <h2 class="text-sm font-medium text-brand-text dark:text-brand-text-dark">
          Navigation
        </h2>
      </div>
      <nav class="mt-6">
        <ul class="-my-2 divide-y divide-zinc-100 text-base text-brand-headline dark:divide-zinc-100/5 dark:text-zinc-300">
          <MobileNavItem v-for="route in publicRoutes" :key="route.path" :href="route.path">
            {{ route.name }}
          </MobileNavItem>
        </ul>
      </nav>
    </PopoverPanel>
  </Popover>
</template>

<script setup>
import publicRoutes from '@/routes';
import MobileNavItem from './MobileNavItem.vue'
import { Popover, PopoverButton, PopoverOverlay, PopoverPanel } from '@headlessui/vue'
import { XMarkIcon, ChevronDownIcon } from '@heroicons/vue/24/outline'
</script>