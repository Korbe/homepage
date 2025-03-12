<template>
    <PublicLayout title="Projekte">
        <Container class="mt-16 sm:mt-32">
            <header class="max-w-2xl">
                <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
                    Ideen, die ich zum Leben erweckt habe.
                </h1>
                <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">
                    Abseits von meinen beruflichen Projekten habe ich über die Jahre an vielen kleinen Projekten gearbeitet. Hier sind diejenigen, auf die ich
                    besonders stolz bin. Alle davon sind Open Source - also schau dir den Code an wenn du Lust hast.
                </p>
            </header>
            <div class="mt-16 sm:mt-20">
                <ul class="grid grid-cols-1 gap-x-12 gap-y-16 sm:grid-cols-2 lg:grid-cols-3 mt-16">
                    <ProjectCard v-for="project in projects" :key="project.name" :project="project" />
                </ul>
            </div>

            <div class="text-zinc-600 dark:dark:text-zinc-100 text-center mt-20">
                <h2 class="text-2xl font-bold tracking-tight text-zinc-800 sm:text-3xl dark:text-zinc-100 my-3">
                    Du willst auch dein Projekt hier sehn?
                </h2>
                <p class="text-lg">
                    Ich helfe dir gerne dein digitales Projekt zum Leben zu erwecken.
                </p>
                <p class="text-lg">
                    Von Websites bis hin zu individuellen Webanwendungen
                </p>
                <div class="flex justify-center items-center gap-5 py-5">
                <div class="flex ">
                    <a :href="emailHref"
                        class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500">
                        <i
                            class="text-2xl fa-solid fa-envelope h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"></i>
                        <span class="ml-4">{{ emailText }}</span>
                    </a>
                </div>
                <div class="flex">
                    <a :href="phoneHref"
                        class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500">
                        <i
                            class="text-2xl fa-solid fa-phone h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"></i>
                        <span class="ml-4">{{ phoneText }}</span>
                    </a>
                </div>
            </div>
            </div>
        </Container>
    </PublicLayout>
</template>

<script setup>
import PublicLayout from "@/Layouts/Public/PublicLayout.vue";
import ProjectCard from "./Partials/ProjectCard.vue";
import Container from "@/Components/Container.vue";
import { WrenchScrewdriverIcon } from "@heroicons/vue/24/outline";
import { ref, onMounted } from "vue";

const emailHref = ref("");
const emailText = ref("");
const phoneHref = ref("");
const phoneText = ref("");

onMounted(() => {
    const user = "korbitschl";
    const domain = "gmail.com";
    emailHref.value = `mailto:${user}@${domain}`;
    emailText.value = `${user}@${domain}`;

    phoneHref.value = "tel:+436601401425";
    phoneText.value = "+43 660 14 0 14 25";
});


const projects = [
    {
        name: "FCG Villach",
        description: "Die Website der FCG Villach ist eine custom Webapp , die Informationen zu Gottesdiensten, Veranstaltungen und Neuigkeiten bereitstellt. Mithilfe eines Admin Dashboards können die FCG Mitglieder den Content steuern.",
        links: [
            { href: "http://fcg-villach.at", label: "fcg-villach.at" },
            { href: "https://github.com/Korbe/fcg-vih-webapp", label: "GitHub" },
        ],
        logo: "https://fcg-villach.at/images/fcg-villach-logo-minimal.png",
        icon: null,
        techs: [
            { name: "Laraval", icon: "fa-laravel", color: "text-red-500" },
            { name: "Vuejs", icon: "fa-vuejs", color: "text-green-500" },
            { name: "Tailwindcss", icon: "", color: "text-sky-400" }
        ]
    },
    {
        name: "Korbitsch Homepage",
        description: "Meine eigene Homepage. Diese Website dient als Informationsplattform über mich, meine Erfahrungen und meine Projekte.",
        links: [
            { href: "https://korbitsch.at", label: "korbitsch.at" },
            { href: "https://github.com/Korbe/homepage", label: "GitHub" },
        ],
        logo: "/images/me.jpg",
        icon: null,
        techs: [
            { name: "Laraval", icon: "fa-laravel", color: "text-red-500" },
            { name: "Vuejs", icon: "fa-vuejs", color: "text-green-500" },
            { name: "Tailwindcss", icon: "", color: "text-sky-400" }
        ]
    },
    {
        name: "Sort-o-Matic",
        description: "Sort-O-Matic ist ein Python-Skript, das Bilder basierend auf Dateinameninformationen, EXIF-Daten und Dateieigenschaften in Jahres- und Monatsordner organisiert.",
        links: [
            { href: "https://github.com/Korbe/sort-o-matic", label: "GitHub" },
        ],
        logo: null,
        icon: WrenchScrewdriverIcon,
        techs: [
            { name: "Python", icon: "fa-python", color: "text-yellow-500" },
        ]
    },
];
</script>
