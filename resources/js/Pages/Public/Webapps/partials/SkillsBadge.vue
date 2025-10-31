<template>
    <div class="w-full py-10">
        <h2 class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark mb-6">
            Ich entwickle mit...
        </h2>

        <div class="flex flex-wrap gap-3">
            <div
                v-for="(skill, index) in skills"
                :key="index"
                class="flex items-center px-4 py-2 rounded-2xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-900 shadow-sm"
            >
                <i v-if="skill.icon" :class="['text-xl', skill.icon, skill.color]"></i>
                <span :class="['ml-2 font-medium', skill.color]">{{ skill.name }}</span>
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
    { icon: "fab fa-vuejs", name: "Vue", color: "text-green-500" },
    { icon: "", name: "TailwindCSS", color: "text-sky-400" },
    { icon: "fab fa-js", name: "JavaScript", color: "text-yellow-500" },
    { icon: "fab fa-react", name: "React", color: "text-blue-500" },
    { icon: "fab fa-angular", name: "Angular", color: "text-red-600" },
    { icon: "fab fa-git", name: "Git", color: "text-red-600" },
];
</script>