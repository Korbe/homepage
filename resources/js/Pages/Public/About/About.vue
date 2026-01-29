<template>
    <PublicLayout title="Über mich">
        <Container class="mt-16 sm:mt-32">
            <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-[2fr_1fr] lg:grid-rows-[auto_1fr] lg:gap-y-12">
                <div class="lg:pl-4">
                    <div class="max-w-xs px-2.5 lg:max-w-none">
                        <img src="/images/me-new.jpg" alt="" sizes="(min-width: 1024px) 32rem, 20rem"
                            class="aspect-square rotate-3 rounded-2xl object-cover" />
                    </div>
                </div>
                <div class="lg:order-first lg:row-span-2">
                    <h1
                        class="text-4xl font-bold tracking-tight text-brand-headline sm:text-5xl dark:text-brand-headline-dark">
                        Ich bin Ing. Lukas Korbitsch aus Villach und bringe Code zum Leben.
                    </h1>
                    <div class="mt-6 space-y-7 text-lg text-brand-text dark:text-brand-text-dark">
                        <p>
                            Mein erstes Computerspiel, das mich als Kind nicht mehr losließ, war <b>Anno 1701</b>. Schon
                            damals
                            war ich fasziniert von Computern, auch wenn ich noch nicht wusste, welchen Weg ich später
                            einschlagen würde.
                        </p>
                        <p>
                            Während meiner Schulzeit an der <a class="underline" target="_blank"
                                href="https://www.htl-villach.at/"><b>HTL Villach</b></a> entdeckte ich meine
                            Leidenschaft für das
                            Programmieren. Heute liebe ich es, Software zu entwickeln - auch wenn es manchmal
                            herausfordernd sein kann. Doch genau das reizt mich: Dinge zu automatisieren, Prozesse zum
                            Leben zu erwecken und kreative Lösungen zu finden.
                        </p>
                        <p>
                            Beruflich bin ich Angestellter bei der Firma <a class="underline" target="_blank"
                                href="https://software-cube.at"><b>SoftwareCUBE</b></a> und
                            arbeite für <a class="underline" target="_blank"
                                href="https://www.infineon.com/cms/de/"><b>Infineon Technologies</b></a> an
                            diversen Projekten in der Hochautomatisierung. Neben meiner Tätigkeit in der
                            Softwareentwicklung helfe
                            ich auch gerne anderen mit ihren technischen Fragen -
                            sei es beim PC, Smartphone, Kaufempfehlungen oder sogar bei der Erstellung von Websites.
                            Dabei arbeite ich nicht mit Baukastensystemen, sondern entwickle <b>maßgeschneiderte
                                Webapps</b>.
                            Jede von ihnen ist ein handgefertigtes Unikat, das genau auf die Wünsche und Anforderungen
                            des Nutzers zugeschnitten ist. Webapps sehen aus und verhalten sich wie klassische Apps,
                            sind aber technisch gesehen Websites - mit allen Vorteilen, die das mit sich bringt.
                        </p>
                        <p>
                            In meiner Freizeit widme ich mich gerne meinen anderen Leidenschaften: <b>Programmieren</b>
                            (wenig
                            überraschend 😉), <b>Pflanzen</b>, <b>Computerspielen</b>, <b>Outdoor-Aktivitäten</b>. 
                            Und mein Hund kommt auch nicht zu kurz.
                        </p>
                        <p>
                            Zum Ausgleich zum vielen Sitzen im Büro und beim Programmieren gehe ich regelmäßig ins
                            <b>Fitnessstudio</b>. Außerdem bin ich gerne <b>draußen in der Natur</b>, sei es beim
                            <b>Camping in meiner
                                Hängematte</b> oder um einfach bei Spaziergängen frische Luft zu schnappen. Besonders
                            wichtig
                            sind mir auch <b>Treffen mit Freunden</b>, denn gute Gespräche und gemeinsame Erlebnisse
                            gehören für mich genauso zum Leben dazu.
                        </p>
                        <p>
                            Ein besonders wichtiger Teil meines Lebens ist meine <b>wundervolle Freundin</b> die mich in allem,
                            was ich tue, unterstützt. Sie gibt mir Rückhalt, motiviert mich und macht das Leben noch
                            schöner.
                            
                        </p>

                        <div class="border w-10 my-10 mx-auto border-brand-text dark:border-brand-text-dark"></div>

                        <blockquote class="text-center italic font-bold">
                            <p>Wenn ich etwas noch nicht kann, dann lerne ich es - in
                                Zeiten von Google und ChatGPT gibt es kaum ein Problem, das sich nicht lösen lässt. Wer
                                nicht lernt bleibt stehen, und wer
                                stehen bleibt hört auf
                                gut zu sein.
                            </p>
                        </blockquote>
                    </div>
                </div>
                <div class="lg:pl-20">
                    <ul role="list">
                        <SocialLinks />
                        <ContactLinksVertical />
                        <VButton class="w-full mt-5" @click="downloadVCF">Kontakt speichern</VButton>
                        <VButton class="w-full mt-5" @click="isOpen = true">Download CV</VButton>
                        <EmailCVModal v-if="isOpen" :isOpen="isOpen" @update:isOpen="isOpen = $event" />
                    </ul>
                </div>
            </div>
        </Container>
    </PublicLayout>
</template>
<script setup>
import Container from '@/Components/Container.vue';
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';
import SocialLinks from './Partials/SocialLinks.vue';
import ContactLinksVertical from '../../../Components/ContactLinksVertical.vue';
import VButton from '@/Components/VButton.vue';
import EmailCVModal from './Partials/EmailCVModal.vue';
import { ref } from 'vue';
import { downloadVCF } from '@/vcard';
import Photos from '../Home/Partials/Photos.vue';


const isOpen = ref(false);
</script>