<template>
    <PublicHeader />
    <div class="flex justify-center flex-col items-center bg-zinc-100 h-full">
        <div class="flex gap-5">
            <div>
                <div class="flex items-center gap-5">
                    <h1 class="text-3xl my-2 text-zinc-700">Vorderseite</h1>
                    <VButton class="my-5" @click="exportToPNG(cardFront, 'Front')">Exportieren</VButton>
                </div>

                <div ref="cardFront"
                    class="card relative bg-black text-[rgb(234,234,237)] w-[1004px] h-[650px] flex flex-col">
                    <!-- Oberer Bereich mit harter Schattenkante -->
                    <div class="h-[100px] bg-[#27272a] flex-shrink-0"></div>

                    <!-- Hauptkarte mit sichtbarem Schatten & Abstand -->
                    <div class="flex justify-center items-center rounded-lg bg-black relative z-10 
              shadow-[0px_30px_50px_rgba(0,0,0,0.8),0px_-30px_50px_rgba(0,0,0,0.8)] flex-grow">
                        <!-- Bild -->
                        <img class="h-60 mr-16 rounded-full border-[10px] border-[#27272a] shadow-lg"
                            src="/images/me-xl.jpg" />

                        <!-- Text- und Icon-Bereich -->
                        <div class="flex flex-col">
                            <h1 class="text-[rgb(234,234,237)] text-5xl mt-5 pb-2">
                                Ing. Lukas Korbitsch
                            </h1>

                            <div class="mt-5 border-b-2 border-[#27272a]"></div>


                            <div class="pt-8 text-3xl flex items-center font-medium dark:text-[rgb(234,234,237)]">
                                <EnvelopeIcon class="h-10 w-10 text-[rgb(99,100,113)]" />
                                <span class="ml-4 align-text-top leading-none">{{ emailText }}</span>
                            </div>

                            <div class="mt-4 text-3xl flex items-center font-medium dark:text-[rgb(234,234,237)]">
                                <PhoneIcon class="h-10 w-10 text-[rgb(99,100,113)]" />
                                <span class="ml-4 align-text-top leading-none">{{ phoneText }}</span>
                            </div>

                            <div class="mt-4 text-3xl flex items-center font-medium dark:text-[rgb(234,234,237)]">
                                <GlobeEuropeAfricaIcon class="h-10 w-10 text-[rgb(99,100,113)]" />
                                <span class="ml-4 align-text-top leading-none">{{ website }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Unterer Bereich mit harter Schattenkante -->
                    <div class="h-[100px] bg-[#27272a] flex-shrink-0"></div>
                </div>
            </div>

            <!-- Rückseite -->
            <div>
                <div class="flex items-center gap-5">
                    <h1 class="text-3xl my-2 text-zinc-700">Rückseite</h1>
                    <VButton class="my-5" @click="exportToPNG(cardBack, 'Back')">Exportieren</VButton>
                </div>

                <div ref="cardBack"
                    class="card relative bg-black text-[rgb(234,234,237)] w-[1004px] h-[650px] flex flex-col">
                    <!-- Oberer Bereich mit harter Schattenkante -->
                    <div class="h-[100px] bg-[#27272a] flex-shrink-0"></div>

                    <!-- Hauptkarte mit sichtbarem Schatten & Abstand -->
                    <div class="flex justify-center items-center rounded-lg bg-black relative z-10 
              shadow-[0px_30px_50px_rgba(0,0,0,0.8),0px_-30px_50px_rgba(0,0,0,0.8)] flex-grow">
                        <!-- Textbereich -->
                        <div class="flex text-center align-center justify-center w-full">
                            <h1 class="text-[rgb(234,234,237)] w-2/3 text-4xl mt-5 border-b-2 border-[#27272a] pb-2">
                                Ihr Partner für alle Fragen rund um PC, Smartphone und IT
                            </h1>
                        </div>
                    </div>

                    <!-- Unterer Bereich mit harter Schattenkante -->
                    <div class="h-[100px] bg-[#27272a] flex-shrink-0"></div>
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

// Exportiere das Element als PNG
const exportToPNG = async (element, suffix) => {
    if (!element) {
        console.log("Element ist nicht vorhanden");
        return;
    }

    // Screenshot als PNG mit hoher Auflösung
    const canvas = await html2canvas(element, {
        scale: 4, // Erhöht die Auflösung
        logging: true
    });

    // Konvertiere das Canvas in ein PNG-Bild
    const imgData = canvas.toDataURL("image/png");

    // Download als PNG-Datei
    const a = document.createElement("a");
    a.href = imgData;
    a.download = `visitenkarte_${suffix}.png`;
    a.click();
};
</script>

<style scoped>
.card {
    width: 1004px;
    max-width: 1004px;
    height: 650px;
    max-height: 650px;
}
</style>