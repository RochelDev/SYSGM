<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MOBILITE (Sys-gm) simplifie la gestion de la mobilité des fonctionnaires au Bénin. Découvrez notre mission, vision et valeurs pour une administration plus efficace.">
    <title>À propos - MOBILITE</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('web.shared.header')

<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <div class="mb-8">
                <h1 class="text-3xl font-bold mb-4">À propos de Sys-gm </h1>
                <p class="text-gray-700 text-lg mb-6">
                    Face aux défis actuels dans la gestion de la mobilité des agents de l'État,
                    ce projet propose une solution innovante : une application web conçue pour
                    digitaliser ces processus, centraliser les informations et améliorer l'efficacité globale.
                </p>
            </div>

            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Notre Objectif Principal</h2>
                <p class="text-gray-700 text-lg">
                    L'objectif principal de cette application est d'optimiser la gestion de la mobilité
                    des agents de l'État en :
                </p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Accélérant les processus administratifs.</li>
                    <li>Améliorant la transparence pour les agents et les intervenants.</li>
                    <li>Assurant la conformité avec les réglementations en vigueur.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold mb-4">Fonctionnalités Clés du Système</h2>
                <p class="text-gray-700 text-lg">
                    Le Sys_gm est conçu pour :
                </p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Gérer les différents types de mobilité (détachement, disponibilité, etc.)
                        conformément aux réglementations en vigueur.</li>
                    <li>Permettre la gestion et le suivi des documents justificatifs requis
                        (certificat de cessation de paiement, etc.).</li>
                    <li>Offrir une accessibilité multi-profils via une interface web adaptée
                        aux agents et aux différents intervenants des processus de mobilité.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('web.shared.footer')

</body>
</html>
