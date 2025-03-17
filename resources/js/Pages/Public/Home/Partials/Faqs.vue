<template>
    <div class="max-w-4xl py-12">
        <h2 class="text-4xl font-semibold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark">Auf Fragen
            gibt es Antworten</h2>
        <dl class="my-12 divide-y divide-gray-900/10">
            <Disclosure as="div" v-for="(faq, index) in faqs" :key="faq.question" class="py-6 first:pt-0 last:pb-0"
                :defaultOpen="index === 0" v-slot="{ open }">
                <dt>
                    <DisclosureButton
                        class="flex w-full items-start justify-between text-left text-brand-headline sm:text-3xl dark:text-brand-headline-dark">
                        <span class="cursor-pointer text-base/7 font-semibold">{{ faq.question }}</span>
                        <span class="ml-6 flex h-7 items-center">
                            <PlusIcon v-if="!open" class="cursor-pointer size-6" aria-hidden="true" />
                            <MinusIcon v-else class="cursor-pointer size-6" aria-hidden="true" />
                        </span>
                    </DisclosureButton>
                </dt>
                <DisclosurePanel as="dd" class="mt-2 pr-12">
                    <p class="text-base/7 text-brand-text dark:text-brand-text-dark">{{ faq.answer }}</p>
                </DisclosurePanel>
            </Disclosure>
        </dl>
    </div>
</template>
<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { MinusIcon, PlusIcon } from '@heroicons/vue/24/outline'

const faqs = [
    {
        question: "Welche Art von Software entwickelst du?",
        answer: "Ich entwickle maßgeschneiderte Webapps, die wie klassische Apps funktionieren, aber die Flexibilität und die Vorteile von Websites bieten. Jedes Projekt wird individuell auf die Bedürfnisse und Wünsche des Nutzers abgestimmt.",
    },
    {
        question: "Was ist der Unterschied zwischen einer Webapp und einer klassischen App?",
        answer: "Eine Webapp verhält sich wie eine native App, läuft aber im Webbrowser und benötigt keine Installation. Sie bietet alle Vorteile von Webseiten, wie einfache Updates, plattformübergreifende Nutzung und keine App-Store-Beschränkungen.",
    },
    {
        question: "Wie lange dauert es, eine Webapp zu entwickeln?",
        answer: "Die Entwicklungszeit hängt von der Komplexität des Projekts ab und variiert zwischen einigen Wochen und Monaten. Da ich derzeit Vollzeit angestellt bin, kann es etwas länger dauern. Dafür bleibt der Preis jedoch fair und ohne hohe Agenturgebühren.",
    },
    {
        question: "Ich habe technische Probleme mit meinem PC oder Smartphone. Kannst du mir helfen?",
        answer: "Ja, ich biete technische Unterstützung bei einer Vielzahl von Geräten an, von PCs über Smartphones bis hin zu Druckern. Wenn du technische Fragen hast oder Unterstützung bei der Fehlerbehebung benötigst, stehe ich gerne zur Verfügung.",
    },
    {
        question: "Was kostet es, dich für technischen Support zu engagieren?",
        answer: "Die Preise variieren je nach Art und Umfang der Anfrage. Kontaktiere mich einfach direkt für ein maßgeschneidertes Angebot. Ich verlange einen kleinen Obulus - deutlich günstiger als ein Schlüsseldienst und genauso schnell.",
    },

    {
        question: "Hast du Erfahrung mit der Automatisierung von Prozessen?",
        answer: "Ja, ich arbeite aktuell an Projekten in der Hochautomatisierung und helfe gerne dabei, Prozesse zu optimieren. Zudem kann ich dir maßgeschneiderte Tools entwickeln, die dir bei der Automatisierung von alltäglichen Aufgaben helfen.",
    },
    {
        question: "Bietest du auch Workshops oder Schulungen an?",
        answer: "Derzeit biete ich keine regulären Workshops an, aber wenn du Interesse an einem Vortrag oder einer Schulung hast, lass es mich wissen! Ich bin auch offen für Nachhilfe im Programmieren und helfe dir gerne weiter.",
    },
    {
        question: "Kannst du mir bei der Auswahl eines neuen Smartphones oder Gaming Setups helfen?",
        answer: "Ja, ich helfe dir gerne bei der Auswahl von Smartphones, Laptops oder anderen Geräten, die perfekt auf deine Bedürfnisse und dein Budget abgestimmt sind. Ich unterstütze dich auch beim Zusammenstellen und Aufbau eines Gaming-PCs sowie bei der Einrichtung des idealen Setups für dein Zuhause oder Büro.",
    },
]
</script>