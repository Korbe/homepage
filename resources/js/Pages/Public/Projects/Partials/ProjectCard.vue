<template>
    <!-- List item as a container for the project -->
    <li class="group relative flex flex-col items-start">

        <!-- Logo container with styling for rounded shape and shadow -->
        <div
            class="relative z-10 flex h-12 w-12 items-center justify-center rounded-full bg-white ring-1 shadow-md shadow-zinc-800/5 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">

            <!-- Displays the project logo if available -->
                <img v-if="project.logo" :src="project.logo" alt="" style="color: transparent;" loading="lazy" width="32"
                    height="32" decoding="async" data-nimg="1" class="h-8 w-8 rounded-full object-contain" />

                <!-- If no logo is available, render the project's icon -->
                <component v-else :is="project.icon" class="h-6 w-6 text-brand-text dark:text-zinc-200" />
        </div>

        <!-- Project title with hover effect -->
        <h2 class="mt-6 text-base font-semibold text-brand-headline dark:text-brand-headline-dark">
            <div
                class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50">
            </div>
            <span class="relative z-10 group-hover:text-brand">{{ project.name }}</span>
        </h2>

        <!-- Project description -->
        <p class="relative z-10 mt-2 text-sm text-brand-text dark:text-brand-text-dark">
            {{ project.description }}
        </p>

        <!-- Technologies used in the project -->
        <div class="flex flex-wrap gap-4 my-5 z-10">
            <div v-for="(tech, index) in project.techs" :key="index" class="flex items-center px-3 py-0 rounded-3xl border cursor-pointer transition-all duration-300 
         dark:bg-zinc-800/90 dark:text-zinc-200 dark:border-zinc-800 hover:text-opacity-100" :class="[
            tech.color,
            { 'group-hover:text-blue-500': tech.color === 'text-blue-500' },
            { 'group-hover:text-red-500': tech.color === 'text-red-500' },
            { 'group-hover:text-green-500': tech.color === 'text-green-500' },
            { 'group-hover:text-sky-400': tech.color === 'text-sky-400' },
            { 'group-hover:text-red-600': tech.color === 'text-red-600' },
            { 'group-hover:text-yellow-500': tech.color === 'text-yellow-500' },
            { 'group-hover:text-orange-500': tech.color === 'text-orange-500' }
        ]">
                <i v-if="tech.icon" :class="['mr-2 text-2xl fab', tech.icon]"></i>
                <span>{{ tech.name }}</span>
            </div>
        </div>

        <!-- Divider line -->
        <div class="w-full border dark:bg-zinc-800/90 dark:text-zinc-200 border-zinc-200 dark:border-zinc-800"></div>

        <!-- Project links -->
        <a v-for="link in project.links" :key="link.href"
            class="relative z-10 mt-6 flex text-sm font-medium text-brand-text transition hover:text-brand dark:text-zinc-200"
            :href="link.href" target="_blank">
            <LinkIcon class="h-6 w-6 flex-none" />
            <span class="ml-2">{{ link.label }}</span>
        </a>
    </li>
</template>

<script setup>
import { LinkIcon } from '@heroicons/vue/24/outline';

defineProps({
    project: {
        type: Object,
        required: true,
    },
});
</script>
