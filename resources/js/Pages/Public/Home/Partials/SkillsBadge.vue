<template>
    <div class="flex flex-wrap gap-4 my-5">
        <div
            v-for="(skill, index) in skills"
            :key="index"
            class="flex items-center px-3 py-0 rounded-3xl border cursor-pointer transition-all duration-300 dark:bg-zinc-800/90 dark:text-zinc-200 dark:border-zinc-800 hover:text-opacity-100"
            :class="[
                skill.color,
                {
                    'hover:text-blue-500': skill.color === 'text-blue-500',
                    'hover:text-red-500': skill.color === 'text-red-500',
                    'hover:text-green-500': skill.color === 'text-green-500',
                    'hover:text-sky-400': skill.color === 'text-sky-400',
                    'hover:text-red-600': skill.color === 'text-red-600',
                    'hover:text-yellow-500': skill.color === 'text-yellow-500',
                    'hover:text-orange-500': skill.color === 'text-orange-500',
                },
                {
                    'dark:hover:text-blue-500': skill.color === 'text-blue-500',
                    'dark:hover:text-red-500': skill.color === 'text-red-500',
                    'dark:hover:text-green-500':
                        skill.color === 'text-green-500',
                    'dark:hover:text-sky-600': skill.color === 'text-sky-600',
                    'dark:hover:text-red-600': skill.color === 'text-red-600',
                    'dark:hover:text-yellow-500':
                        skill.color === 'text-yellow-500',
                    'dark:hover:text-orange-500':
                        skill.color === 'text-orange-500',
                },
            ]"
        >
            <i :class="['text-2xl fab', skill.icon]"></i>
            <span class="ml-2">{{ skill.name }}</span>
        </div>
    </div>
</template>

<script setup>
const skills = [
    {
        icon: "fa-hashtag",
        name: "C#",
        color: "text-blue-500",
    },
    {
        icon: "fa-laravel",
        name: "Laravel",
        color: "text-red-500",
    },
    {
        icon: "fa-vuejs",
        name: "Vue",
        color: "text-green-500",
    },
    {
        icon: "",
        name: "Tailwindcss",
        color: "text-sky-400",
    },
    {
        icon: "fa-angular",
        name: "Angular",
        color: "text-red-600",
    },
    {
        icon: "fa-js",
        name: "JavaScript",
        color: "text-yellow-500",
    },
    {
        icon: "fa-html5",
        name: "Html",
        color: "text-orange-500",
    },
    {
        icon: "fa-css3-alt",
        name: "Css",
        color: "text-blue-500",
    },
    {
        icon: "fa-react",
        name: "React",
        color: "text-blue-500",
    },
    {
        icon: "",
        name: "und vieles mehr",
        color: "text-green-500",
    },
];
</script>
