<template>
    <div class="w-full overflow-hidden">
        <h2 class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
            Ich entwickle mit...
        </h2>

        <!-- Marquee Container -->
        <div class="relative flex overflow-hidden whitespace-nowrap">
            <!-- Gruppe von Skills -->
            <div class="marquee flex">
                <div v-for="(skill, index) in skills" :key="'a' + index" class="flex items-center px-4 py-1 mx-2 rounded-3xl border shadow-sm cursor-pointer transition-all duration-300 
                      dark:bg-zinc-800/90 dark:text-zinc-200 dark:border-zinc-800 hover:scale-110" :class="[
                        skill.color,
                        {
                            'hover:text-blue-500': skill.color === 'text-blue-500',
                            'hover:text-red-500': skill.color === 'text-red-500',
                            'hover:text-green-500': skill.color === 'text-green-500',
                            'hover:text-sky-400': skill.color === 'text-sky-400',
                            'hover:text-red-600': skill.color === 'text-red-600',
                            'hover:text-yellow-500': skill.color === 'text-yellow-500',
                            'hover:text-orange-500': skill.color === 'text-orange-500',
                            'hover:text-violet-600': skill.color === 'text-violet-600',
                        },
                        {
                            'dark:hover:text-blue-500': skill.color === 'text-blue-500',
                            'dark:hover:text-red-500': skill.color === 'text-red-500',
                            'dark:hover:text-green-500': skill.color === 'text-green-500',
                            'dark:hover:text-sky-600': skill.color === 'text-sky-600',
                            'dark:hover:text-red-600': skill.color === 'text-red-600',
                            'dark:hover:text-yellow-500': skill.color === 'text-yellow-500',
                            'dark:hover:text-orange-500': skill.color === 'text-orange-500',
                            'dark:hover:text-violet-600': skill.color === 'text-violet-600',
                        },
                    ]">
                    <i v-if="skill.icon" :class="['text-2xl', skill.icon]"></i>
                    <span class="ml-2">{{ skill.name }}</span>
                </div>
            </div>

            <!-- Doppelte Gruppe von Skills für nahtloses Scrollen -->
            <div class="ml-80 marquee flex" aria-hidden="true">
                <div v-for="(skill, index) in skills" :key="'b' + index" class="flex items-center px-4 py-1 mx-2 rounded-3xl border shadow-sm cursor-pointer transition-all duration-300 
                      dark:bg-zinc-800/90 dark:text-zinc-200 dark:border-zinc-800 hover:scale-110" :class="[
                        skill.color,
                        {
                            'hover:text-blue-500': skill.color === 'text-blue-500',
                            'hover:text-red-500': skill.color === 'text-red-500',
                            'hover:text-green-500': skill.color === 'text-green-500',
                            'hover:text-sky-400': skill.color === 'text-sky-400',
                            'hover:text-red-600': skill.color === 'text-red-600',
                            'hover:text-yellow-500': skill.color === 'text-yellow-500',
                            'hover:text-orange-500': skill.color === 'text-orange-500',
                            'hover:text-violet-600': skill.color === 'text-violet-600',
                        },
                        {
                            'dark:hover:text-blue-500': skill.color === 'text-blue-500',
                            'dark:hover:text-red-500': skill.color === 'text-red-500',
                            'dark:hover:text-green-500': skill.color === 'text-green-500',
                            'dark:hover:text-sky-600': skill.color === 'text-sky-600',
                            'dark:hover:text-red-600': skill.color === 'text-red-600',
                            'dark:hover:text-yellow-500': skill.color === 'text-yellow-500',
                            'dark:hover:text-orange-500': skill.color === 'text-orange-500',
                            'dark:hover:text-violet-600': skill.color === 'text-violet-600',
                        },
                    ]">
                    <i v-if="skill.icon" :class="['text-2xl', skill.icon]"></i>
                    <span class="ml-2">{{ skill.name }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const skills = [
    { icon: "fab fa-hashtag", name: "C#", color: "text-blue-500" },
    { icon: "fab fa-hashtag", name: ".NET", color: "text-blue-500" },
    { icon: "fab fa-php", name: "PHP", color: "text-violet-600" },
    { icon: "fab fa-laravel", name: "Laravel", color: "text-red-500" },
    { icon: "fa-solid fa-database", name: "SQL", color: "text-orange-500" },
    { icon: "fab fa-vuejs", name: "Vue.js", color: "text-green-500" },
    { icon: "", name: "TailwindCSS", color: "text-sky-400" },
    { icon: "fab fa-js", name: "JavaScript", color: "text-yellow-500" },
    { icon: "fab fa-react", name: "React", color: "text-blue-500" },
    { icon: "fab fa-angular", name: "Angular", color: "text-red-600" },
    { icon: "fab fa-git", name: "Git", color: "text-red-600" },
];
</script>

<style scoped>
/* Endloses Marquee */
.marquee {
    display: flex;
    min-width: 100%;
    animation: marquee-scroll 20s linear infinite;
}

/* Animation für nahtloses Scrollen */
@keyframes marquee-scroll {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-100%);
    }
}
</style>
