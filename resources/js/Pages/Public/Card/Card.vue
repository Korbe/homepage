<template>
    <PublicHeader />
    <div class="flex justify-center flex-col items-center bg-zinc-100 h-full">
        <div class="flex gap-5">

            <div>
                <div class="flex items-center gap-5">
                    <h1 class="text-3xl my-2 dark:text-zinc-200">Vorderseite</h1>
                    <VButton class="my-5" @click="exportToSVG(cardFront, 'Front')">SVG exportieren</VButton>
                </div>

                <div ref="cardFront" class="card bg-black p-20 dark:text-[rgb(234,234,237)] relative">
                    <!-- Graue Balken oben und unten -->
                    <div class="absolute top-0 left-0 right-0 h-[100px] bg-zinc-800"></div>
                    <div class="absolute bottom-0 left-0 right-0 h-[100px] bg-zinc-800"></div>

                    <!-- Inhalt mit Schattierung -->
                    <div class="flex justify-center items-center h-full shadow-xl rounded-lg">
                        <!-- Bild -->
                        <img class="h-60 mr-16 rounded-full" src="/images/me-xl.jpg" />

                        <!-- Text- und Icon-Bereich -->
                        <div class="flex flex-col">
                            <h1 class="text-[rgb(234,234,237)] text-5xl mt-5">Ing. Lukas Korbitsch</h1>

                            <!-- Icon und Text -->
                            <div class="pt-8 text-3xl flex font-medium text-zinc-800 dark:text-[rgb(234,234,237)]">
                                <EnvelopeIcon class="h-10 w-10 text-[rgb(99,100,113)] align-middle" />
                                <span class="ml-4 pb-5 leading-none align-middle">{{ emailText }}</span>
                            </div>

                            <div class="mt-4 text-3xl flex font-medium dark:text-[rgb(234,234,237)]">
                                <PhoneIcon class="h-10 w-10 text-[rgb(99,100,113)] align-middle" />
                                <span class="ml-4 pb-5 leading-none align-middle">{{ phoneText }}</span>
                            </div>

                            <div class="mt-4 text-3xl flex font-medium dark:text-[rgb(234,234,237)]">
                                <GlobeEuropeAfricaIcon class="h-10 w-10 text-[rgb(99,100,113)] align-middle" />
                                <span class="ml-4 pb-5 leading-none align-middle">{{ website }}</span>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div>
                <div class="flex items-center gap-5">
                    <h1 class="text-3xl my-2 dark:text-zinc-200">Vorderseite</h1>
                    <VButton class="my-5" @click="exportToSVG(cardBack, 'Back')">SVG exportieren</VButton>
                </div>

                <div ref="cardBack"
                    class="card bg-black p-20 flex flex-col justify-center items-center dark:text-[rgb(234,234,237)] relative">
                    <div class="absolute top-0 left-0 right-0 h-[100px] bg-zinc-800"></div>
                    <div class="absolute bottom-0 left-0 right-0 h-[100px] bg-zinc-800"></div>
                    <h1 class="text-5xl mt-5">Alles Rund um PC, Smartphone und IT</h1>
                    <p class="text-4xl">Rufen Sie mich an, eine Lösung gibt es immer</p>
                </div>
            </div>

        </div>
    </div>
</template>
<script setup>
import { ref } from "vue";
import html2canvas from "html2canvas";
import VButton from "@/Components/VButton.vue";
import contact from "@/contact.js"
import { EnvelopeIcon, GlobeEuropeAfricaIcon, PhoneIcon } from "@heroicons/vue/24/outline";
import PublicHeader from "@/Layouts/Public/PublicHeader.vue";

const emailText = contact.email;
const phoneText = contact.phoneText;
const website = contact.website;

const cardFront = ref(null);
const cardBack = ref(null);

const exportToSVG = async (element, suffix) => {
    if (!element) {
        console.log("Element ist nicht vorhanden");
        return;
    }

    // Screenshot als PNG mit hoher Auflösung
    const canvas = await html2canvas(element, { scale: 4 });
    const imgData = canvas.toDataURL("image/png");

    // Erstelle SVG mit richtiger Größe
    const svgData = `
        <svg xmlns="http://www.w3.org/2000/svg" width="85mm" height="55mm" viewBox="0 0 1004 650">
        <image href="${imgData}" width="1004" height="650"/>
        </svg>`;

    // Download als SVG-Datei
    const blob = new Blob([svgData], { type: "image/svg+xml" });
    const url = URL.createObjectURL(blob);
    const a = document.createElement("a");
    a.href = url;
    a.download = `visitenkarte_${suffix}.svg`;
    a.click();
};
</script>

<style scoped>
.card {
    width: 1004px;
    height: 650px;
    box-sizing: border-box;
}
</style>