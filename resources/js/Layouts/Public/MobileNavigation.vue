<template>
  <Popover class="pointer-events-auto md:hidden">
    <!-- Popover Button -->
    <PopoverButton
      class="group flex items-center rounded-full bg-white/90 px-4 py-2 text-sm font-medium text-zinc-800 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 dark:hover:ring-white/20">
      Menu
      <ChevronDownIcon
        class="ml-3 h-auto w-2 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400" />
    </PopoverButton>

    <!-- Popover Backdrop (Custom) -->
    <PopoverPanel focus transition
      class="fixed inset-0 z-50 bg-zinc-800/40 backdrop-blur-xs duration-150 data-[closed]:opacity-0 data-[enter]:ease-out data-[leave]:ease-in dark:bg-black/80" />

    <!-- Popover Panel -->
    <PopoverPanel focus transition
      class="fixed inset-x-4 top-8 z-50 origin-top rounded-3xl bg-white p-8 ring-1 ring-zinc-900/5 duration-150 data-[closed]:scale-95 data-[closed]:opacity-0 data-[enter]:ease-out data-[leave]:ease-in dark:bg-zinc-900 dark:ring-zinc-800">
      <div class="flex flex-row-reverse items-center justify-between">
        <!-- Close Button -->
        <PopoverButton aria-label="Close menu" class="-m-1 p-1">
          <XMarkIcon class="h-6 w-6 text-zinc-500 dark:text-zinc-400" />
        </PopoverButton>
        <h2 class="text-sm font-medium text-zinc-600 dark:text-zinc-400">
          Navigation
        </h2>
      </div>

      <nav class="mt-6">
        <ul class="divide-y divide-zinc-100 text-base text-zinc-800 dark:divide-zinc-100/5 dark:text-zinc-300">
          <Link href="/about">About</Link>
          <Link href="/articles">Articles</Link>
          <Link href="/projects">Projects</Link>
          <Link href="/speaking">Speaking</Link>
          <Link href="/uses">Uses</Link>
        </ul>
      </nav>
    </PopoverPanel>
  </Popover>
</template>

<script setup>
import {
  Popover,
  PopoverButton,
  PopoverPanel,
} from '@headlessui/vue'
import { ChevronDownIcon, XMarkIcon } from '@heroicons/vue/24/outline';
</script>