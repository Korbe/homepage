<template>
    <PublicLayout title="Projekte">
        <Container class="mt-16 sm:mt-32">

            <header class="max-w-2xl">
                <h1
                    class="text-4xl font-bold tracking-tight text-brand-headline sm:text-5xl dark:text-brand-headline-dark">
                    Ideen, die ich zum Leben erweckt habe.
                </h1>
                <p class="mt-6 text-lg text-brand-text dark:text-brand-text-dark">
                    Abseits von meinen beruflichen Projekten habe ich über die Jahre an vielen Projekten
                    gearbeitet. Hier sind diejenigen, auf die ich
                    besonders stolz bin. Alle davon sind Open Source - also schau dir den Code an wenn du Lust hast.
                </p>
            </header>
            <div class="mt-16 sm:mt-20">
                <ul class="grid grid-cols-1 gap-x-12 gap-y-16 sm:grid-cols-2 lg:grid-cols-3 mt-16">
                    <ProjectCard v-for="project in projects" :key="project.name" :project="project" />
                </ul>
            </div>

            <Cta />

        </Container>
    </PublicLayout>
</template>

<script setup>
import PublicLayout from "@/Layouts/Public/PublicLayout.vue";
import ProjectCard from "./Partials/ProjectCard.vue";
import Cta from "./Partials/Cta.vue";
import Container from "@/Components/Container.vue";
import { WrenchScrewdriverIcon } from "@heroicons/vue/24/outline";

const projects = [
    {
        name: "PetriLog",
        description: "PetriLog ist das digitale Fischertagebuch für Österreich. Fangerfolge, Fotos und Details wie Länge, Gewicht, Köder oder Fangort lassen sich einfach festhalten, Statistiken auswerten und Erlebnisse mit Freunden teilen - unterwegs oder zuhause auf jedem Gerät.",
        links: [
            { href: "https://petrilog.com", label: "petrilog.com" },
            { href: "https://github.com/Korbe/sort-o-matic", label: "GitHub" },
        ],
        logo: "/images/petrilog-logo.png",
        icon: WrenchScrewdriverIcon,
        techs: [
            { name: "Laraval", icon: "fa-laravel", color: "text-red-500" },
            { name: "Vuejs", icon: "fa-vuejs", color: "text-green-500" },
            { name: "Tailwindcss", icon: "", color: "text-sky-400" }
        ]
    },
    {
        name: "FCG Villach",
        description: "Die Website der FCG Villach ist eine custom WebApp , die Informationen zu Gottesdiensten, Veranstaltungen und Neuigkeiten bereitstellt. Mithilfe eines Admin Dashboards können die FCG Mitglieder den Content steuern.",
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
        description: "Meine eigene Homepage. Diese Website dient als Informationsplattform über mich, meine Dienstleistungen und meine Projekte.",
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
