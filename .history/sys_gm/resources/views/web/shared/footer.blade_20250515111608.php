<!-- ====== footer ====== -->

<footer class="bg-gray-700 pt-12 pb-6 px-8">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="p-4">
                <h3 class="text-white font-bold text-xl mb-4">SYS<span class="text-blue-700">GM</span></h3>
                <p class="text-white mb-4">
                    Plateforme de gestion de la mobilité des agents de l'administration publique béninoise.
                </p>
            </div>

            <div class="p-4">
                <h4 class="text-white font-semibold mb-4 text-lg">Liens Rapides</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-white hover:text-blue-700">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="text-white hover:text-blue-700">À propos</a></li>
                    <li><a href="{{ route('services') }}" class="text-white hover:text-blue-700">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white hover:text-blue-700">Contact</a></li>
                </ul>
            </div>

            <div class="p-4">
                <h4 class="text-white font-semibold mb-4 text-lg">Ressources</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('faq') }}" class="text-white hover:text-blue-700 transition-colors">FAQ</a></li>
                    <li><a href="#" class=" text-white hover:text-blue-700 transition-colors">Guides</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 transition-colors">Documentation</a></li>
                </ul>
            </div>

            <div class="p-4">
                <h4 class="text-white font-semibold mb-4 text-lg">Contact</h4>
                <ul class="space-y-2 text-white">
                    <li>Email: <a href="mailto:mobilitecontact@gm   " class="hover:text-blue-700">contact@mobilite.gouv.bj</a></li>
                    <li>Téléphone: +229 XX XX XX XX</li>
                    <li>Adresse: Cotonou, Bénin</li>
                </ul>
            </div>
        </div>

        <hr class="my-6 border-gray-200" />

        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm text-white">
                © 2025 MOBILITE - Tous droits réservés
            </p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="text-sm text-white hover:text-blue-700 transition-colors">Mentions légales</a>
                <a href="#" class="text-sm text-white hover:text-blue-700 transition-colors">Politique de confidentialité</a>
                <a href="#" class="text-sm text-white hover:text-blue-700 transition-colors">Conditions d'utilisation</a>
            </div>
        </div>
    </div>
</footer>


<!-- ====== END footer ====== -->
