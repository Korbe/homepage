<template>
    <PublicLayout title="Mein Setup">
        <Container className="mt-16 sm:mt-32">

            <header className="max-w-2xl">
                <h1 className="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
                    Die Werkzeuge, die mich bei jedem Schritt begleiten.
                </h1>
                <p className="mt-6 text-base text-zinc-600 dark:text-zinc-400">
                    Diese Werkzeuge sind mehr als nur Technik. Sie sind die ständigen Begleiter, die mir ermöglichen,
                    meine kreativen Ideen umzusetzen, effizient zu arbeiten und jeden Schritt meines Projekts zu
                    meistern. Mit diesem Setup ist der Erfolg vorprogrammiert. 😉
                </p>
            </header>

            <div className="mt-16 sm:mt-20">
                <div className="space-y-20">
                    <div v-for="(section, index) in sections" :key="index">
                        <ToolsSection :title="section.sectionTitle">
                            <Tool v-for="(tool, toolIndex) in section.tools" :key="toolIndex" :title="tool.title"
                                :href="tool.link">
                                {{ tool.description }}
                            </Tool>
                        </ToolsSection>
                    </div>
                </div>
            </div>

        </Container>
    </PublicLayout>
</template>
<script setup>
import Container from '@/Components/Container.vue';
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';
import ToolsSection from './partials/ToolsSection.vue';
import Tool from './partials/Tool.vue';

const sections = [
    {
        sectionTitle: "Mein Arbeitstier",
        tools: [
            {
                title: "AMD Ryzen 7 7800X3D",
                link: "https://geizhals.at/amd-ryzen-7-7800x3d-100-100000910wof-a2872148.html",
                description: "Der AMD Ryzen 7 7800X3D ist ein leistungsstarker Prozessor der neuesten Generation, der mit seiner 3D V-Cache-Technologie außergewöhnliche Gaming- und Multitasking-Leistung bietet, ideal für anspruchsvolle Anwendungen und hochmoderne Spiele."
            },
            {
                title: "Corsair Vengeance 32GB, DDR5-6400",
                link: "https://geizhals.at/corsair-vengeance-schwarz-dimm-kit-32gb-cmk32gx5m2b6400c32-a2866111.html",
                description: "Das Corsair Vengeance 32GB DDR5-6400 bietet hohe Geschwindigkeit und Leistung für anspruchsvolle Anwendungen und Gaming."
            },
            {
                title: "GIGABYTE B650 AORUS Elite AX V2",
                link: "https://geizhals.at/gigabyte-b650-aorus-elite-ax-v2-b650-aorus-elite-ax-v2-a3062563.html",
                description: "Das GIGABYTE B650 AORUS Elite AX V2 ist ein leistungsstarkes Mainboard mit Unterstützung für PCIe 5.0, Wi-Fi 6E und DDR5, ideal für High-End-Gaming und anspruchsvolle Workloads."
            },
            {
                title: "MSI MAG A850GL - 850W",
                link: "https://geizhals.at/msi-mag-a850gl-pcie5-850w-atx-3-0-306-7zp8a11-ce0-a2979546.html",
                description: "Das MSI MAG A850GL ist ein 850W Netzteil, das mit hoher Effizienz und stabiler Leistung für Gaming-PCs und leistungsintensive Systeme sorgt."
            },
            {
                title: "Noctua NH-D15",
                link: "https://geizhals.at/noctua-nh-d15-chromax-black-a2152704.html",
                description: "Der Noctua NH-D15 ist ein hochperformanter Dual-Tower-CPU-Kühler, bekannt für seine exzellente Kühlleistung und leisen Betrieb, ideal für anspruchsvolle Systeme und Übertaktung."
            },
            {
                title: "Western Digital WD_BLACK SN850X 2TB",
                link: "https://geizhals.at/western-digital-wd-black-sn850x-nvme-ssd-2tb-wds200t2x0e-00bca0-a2770177.html",
                description: "Die Western Digital WD_BLACK SN850X 2TB ist eine NVMe SSD mit hoher Geschwindigkeit und großer Kapazität, die besonders für Gaming und leistungsintensive Anwendungen optimiert ist."
            },
            {
                title: "Zotac Gaming GeForce RTX 4070 Ti SUPER Trinity Black Edition - 16GB",
                link: "https://geizhals.at/zotac-gaming-geforce-rtx-4070-ti-super-trinity-black-edition-zt-d40730d-10p-a3103639.htmls",
                description: "Die Zotac Gaming GeForce RTX 4070 Ti SUPER Trinity Black Edition mit 16GB bietet erstklassige Leistung für 4K-Gaming und anspruchsvolle Anwendungen, dank der Ada Lovelace Architektur für optimiertes Raytracing und KI."
            },
            {
                title: "Western Digital Blue - 4TB",
                link: "",
                description: "Die Western Digital Blue 4TB ist eine zuverlässige und leistungsstarke Festplatte, ideal für die Speicherung großer Datenmengen und den täglichen Gebrauch."
            },
            {
                title: "Fractal Design North Charcoal Black TG Dark, Glasfenster",
                link: "https://geizhals.at/fractal-design-north-charcoal-black-tg-dark-fd-c-nor1c-02-a2861682.html",
                description: "Das Fractal Design North Charcoal Black TG Dark ist ein elegantes Mid-Tower-Gehäuse mit einem Glasfenster, das eine ausgezeichnete Belüftung und ein modernes, minimalistisches Design bietet. Ich finde es einfach geil."
            }
        ]
    },
    {
        sectionTitle: "Laptop",
        tools: [
            {
                title: "SCHENKER VISION 15",
                link: "https://www.schenker-tech.de/schenker-vision-15/",
                description: "Ich liebe den SCHENKER VISION 15 - er ist unglaublich schnell, schlank und elegant. Das riesige Touchpad und der Touchscreen sind fantastisch, und der Tastenanschlag ist einfach top."
            },

        ]
    },
    {
        sectionTitle: "Smartphone",
        tools: [
            {
                title: "Google Pixel 8 Pro",
                link: "https://geizhals.at/google-pixel-8-pro-128gb-bay-a3034071.html",
                description: "Das Google Pixel 8 Pro liefert herausragende Leistung, eine beeindruckende Kamera und clevere Funktionen. Ich bin begeistert von den Fotos, die dieses Smartphone macht, und auch das Betriebssystem gefällt mir sehr – es ist sauber und frei von Drittanbieter-Apps."
            },

        ]
    },
    {
        sectionTitle: "Sonstige Hardware",
        tools: [
            {
                title: "Logitech MX Keys S, Graphite",
                link: "https://geizhals.at/logitech-mx-keys-s-graphite-920-011565-a2964796.html",
                description: "Das Logitech MX Keys S in Graphite ist eine hochwertige, kabellose Tastatur mit komfortablen Tasten, einem eleganten Design und langlebiger Leistung, ideal für produktives Arbeiten."
            },
            {
                title: "Logitech G703",
                link: "https://geizhals.at/logitech-g703-lightspeed-910-005093-910-005094-a1638503.html",
                description: "Die Logitech G703 ist eine präzise, kabellose Gaming-Maus mit HERO-Sensor und einer hohen Abtastrate, die für schnelle Reaktionen und komfortables Gaming sorgt."
            },
            {
                title: "Corsair HS80",
                link: "https://geizhals.at/corsair-hs80-rgb-wireless-v101211.html",
                description: "Das Corsair HS80 ist mein Gaming-Headset, das mit hochwertigem Sound, komfortablem Design und langlebiger Bauweise für ein immersives Spielerlebnis sorgt."
            },
            {
                title: "Sennheiser HD 4.40",
                link: "https://geizhals.at/sennheiser-hd-4-40-bt-wireless-506782-a1566301.html",
                description: "Das Sennheiser HD 4.40 ist mein Headset, das ich immer bei der Arbeit trage. Es bietet klaren Sound und komfortablen Sitz für lange Nutzung ohne Ermüdung."
            },
            {
                title: "Bose Soundlink Mobile Speaker 2",
                link: "https://www.backmarket.at/de-at/p/lautsprecher-bluetooth-bose-soundlink-mobile-speaker-ll-schwarzgrau/aeb080fa-36a9-4112-9c5b-afa35b99162f",
                description: "Der Bose Soundlink Mobile Speaker 2 ist perfekt für Lofi-Sounds im Hintergrund bei langen Programmier-Sessions. Mit klarer Klangqualität und tragbarem Design sorgt er für eine angenehme Atmosphäre während des Arbeitens."
            },
            {
                title: 'Acer Nitro XV2 2K 27"',
                link: "https://geizhals.at/acer-nitro-xv5-xv275uvymipruzx-um-hx5ee-v01-a2863541.html",
                description: 'Der Acer Nitro XV2 2K 27" ist mein Hauptmonitor. Das Besondere daran ist, dass er einen integrierten KVM-Switch hat, mit dem ich alle Peripheriegeräte anschließen kann, und gleichzeitig bietet er eine beeindruckende Bildqualität.'
            },
            {
                title: 'Samsung 4K 27"',
                link: "",
                description: 'Der Samsung 4K 27" ist mein Zweitmonitor. Er ist ein solider Arbeitsmonitor, der ausreichend Platz für Multitasking bietet.'
            },
        ]
    },
    {
        sectionTitle: "Software",
        tools: [
            {
                title: "Visual Studio Code",
                link: "https://code.visualstudio.com/",
                description: "Visual Studio Code ist mein bevorzugter Code-Editor. Er bietet eine schnelle, anpassbare Benutzeroberfläche, zahlreiche Erweiterungen und hervorragende Unterstützung für verschiedene Programmiersprachen, was ihn ideal für die Softwareentwicklung macht."
            },
            {
                title: "SourceTree",
                link: "https://www.sourcetreeapp.com/",
                description: "SourceTree ist mein bevorzugtes Git-Management-Tool. Es bietet eine benutzerfreundliche Oberfläche für die Verwaltung von Repositories, das Verfolgen von Änderungen und das Arbeiten mit Git, ohne dass man die Kommandozeile verwenden muss."
            },
            {
                title: "Github",
                link: "https://github.com/",
                description: "GitHub ist meine Plattform für Versionskontrolle. Sie ermöglicht es mir, Code in der Cloud zu speichern."
            },
            {
                title: "Laragon",
                link: "https://laragon.org/",
                description: "Laragon ist meine bevorzugte Entwicklungsumgebung für lokale Webentwicklung. Es bietet eine schnelle und benutzerfreundliche Möglichkeit, PHP, MySQL, Node.js und andere Technologien zu verwalten, ohne dass zusätzliche Konfiguration erforderlich ist."
            },
            {
                title: "Blisk",
                link: "https://blisk.io/",
                description: "Blisk ist ein Browser, der speziell für Webentwickler entwickelt wurde. Er bietet eine Vielzahl von Geräten und Bildschirmgrößen zur Vorschau von Websites und ermöglicht so eine schnelle, plattformübergreifende Entwicklung und Tests."
            },
            {
                title: "NotePad++",
                link: "https://notepad-plus-plus.org/",
                description: "Notepad++ - das gute alte Notepad++ - ist ein solider Begleiter für temporäre Textdateien."
            },
            {
                title: "Google Chrome",
                link: "https://www.google.com/intl/de_at/chrome/",
                description: "Google Chrome ist mein bevorzugter Browser. Er bietet schnelles Surfen, eine benutzerfreundliche Oberfläche und eine Vielzahl von Erweiterungen."
            },
            {
                title: "ChatGPT",
                link: "https://chatgpt.com/",
                description: "ChatGPT ist ein vielseitiger KI-Chatbot, der bei einer Vielzahl von Aufgaben hilft – von der Beantwortung von Fragen über das Erstellen von Inhalten bis hin zu kreativen Ideen und Problemlösungen. Ein praktisches Tool für schnelle Informationen und kreative Unterstützung!"
            },
            {
                title: "Windows 11",
                link: "https://www.microsoft.com/de-at/windows/windows-11",
                description: "Windows 11 ist mein Betriebssystem, auch wenn ich Linux beherrsche. Die nahtlose Integration von Apps und Tools machen Windows 11 zur besten Wahl für meinen Alltag."
            },
            {
                title: "Excalidraw",
                link: "https://excalidraw.com/",
                description: "Excalidraw ist mein bevorzugtes Tool für schnelle, handgezeichnete Diagramme und Skizzen. Es bietet eine einfache, intuitive Oberfläche, um Ideen visuell darzustellen und direkt mit anderen zu teilen. Ideal für Brainstorming und Konzeptentwürfe!"
            },
        ]
    }
]

</script>