<template>
    <div class="w-full overflow-hidden">
        <h2 class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
            Ich entwickle mit...
        </h2>

        <!-- Marquee Container -->
        <div class="relative flex overflow-hidden whitespace-nowrap">
            <!-- Gruppe von Skills -->
            <div class="marquee flex">
                <div v-for="(skill, index) in allSkills" :key="'a' + index" tabindex="0" class="flex items-center px-4 py-1 mx-2 rounded-3xl border shadow-sm cursor-pointer transition-all duration-300 
                      dark:bg-zinc-800/90 dark:text-zinc-200 dark:border-zinc-800 focus:scale-110 active:scale-110" :class="[
                        skill.color,
                        {
                            'focus:text-blue-500': skill.color === 'text-blue-500',
                            'focus:text-red-500': skill.color === 'text-red-500',
                            'focus:text-green-500': skill.color === 'text-green-500',
                            'focus:text-sky-400': skill.color === 'text-sky-400',
                            'focus:text-red-600': skill.color === 'text-red-600',
                            'focus:text-yellow-500': skill.color === 'text-yellow-500',
                            'focus:text-orange-500': skill.color === 'text-orange-500',
                            'focus:text-violet-600': skill.color === 'text-violet-600',
                        },
                        {
                            'dark:focus:text-blue-500': skill.color === 'text-blue-500',
                            'dark:focus:text-red-500': skill.color === 'text-red-500',
                            'dark:focus:text-green-500': skill.color === 'text-green-500',
                            'dark:focus:text-sky-600': skill.color === 'text-sky-600',
                            'dark:focus:text-red-600': skill.color === 'text-red-600',
                            'dark:focus:text-yellow-500': skill.color === 'text-yellow-500',
                            'dark:focus:text-orange-500': skill.color === 'text-orange-500',
                            'dark:focus:text-violet-600': skill.color === 'text-violet-600',
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
import { computed } from 'vue'

const skills = [
    { icon: "fab fa-hashtag", name: "C#", color: "text-blue-500" },
    { icon: "fab fa-hashtag", name: ".NET", color: "text-blue-500" },
    { icon: "fab fa-php", name: "PHP", color: "text-violet-600" },
    { icon: "fab fa-laravel", name: "Laravel", color: "text-red-500" },
    { icon: "fa-solid fa-database", name: "SQL", color: "text-orange-500" },
    { icon: "fab fa-vuejs", name: "Vue", color: "text-green-500" },
    { icon: "", name: "TailwindCSS", color: "text-sky-400" },
    { icon: "fab fa-js", name: "JavaScript", color: "text-yellow-500" },
    { icon: "fab fa-react", name: "React", color: "text-blue-500" },
    { icon: "fab fa-angular", name: "Angular", color: "text-red-600" },
    { icon: "fab fa-git", name: "Git", color: "text-red-600" },
];

const allSkills = computed(() => [...skills, ...skills, ...skills, ...skills]);
</script>

<style scoped>
/* Endloses Marquee */
.marquee {
    display: flex;
    min-width: 400%;
    animation: marquee-scroll 60s linear infinite;
}

@media (max-width: 768px) {
    .marquee {
        animation: marquee-scroll 25s linear infinite;
    }
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
