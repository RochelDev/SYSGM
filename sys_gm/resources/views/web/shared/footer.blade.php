<!-- ====== footer ====== -->

<footer class="bg-gray-100 pt-12 pb-6 px-8">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="p-4">
                <h3 class="font-bold text-xl mb-4 text-primary">SYS<span class="text-primary">GM</span></h3>
                <p class="text-gray-600 mb-4">
                    Plateforme de gestion de la mobilité des agents de l'administration publique béninoise.
                </p>
            </div>

            <div class="p-4">
                <h4 class="font-semibold mb-4 text-lg">Liens Rapides</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-primary">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-primary">À propos</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-primary">Contact</a></li>
                </ul>
            </div>

            <div class="p-4">
                <h4 class="font-semibold mb-4 text-lg">Ressources</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('faq') }}" class="text-gray-600 hover:text-primary transition-colors">FAQ</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary transition-colors">Guides</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary transition-colors">Documentation</a></li>
                </ul>
            </div>

            <div class="p-4">
                <h4 class="font-semibold mb-4 text-lg">Contact</h4>
                <ul class="space-y-2 text-gray-600">
                    <li>Email: <a href="mailto:contact@mobilite.gouv.bj" class="hover:text-primary">contact@mobilite.gouv.bj</a></li>
                    <li>Téléphone: +229 XX XX XX XX</li>
                    <li>Adresse: Cotonou, Bénin</li>
                </ul>
            </div>
        </div>

        <hr class="my-6 border-gray-200" />

        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm text-gray-600">
                © 2025 MOBILITE - Tous droits réservés
            </p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="text-sm text-gray-600 hover:text-primary transition-colors">Mentions légales</a>
                <a href="#" class="text-sm text-gray-600 hover:text-primary transition-colors">Politique de confidentialité</a>
                <a href="#" class="text-sm text-gray-600 hover:text-primary transition-colors">Conditions d'utilisation</a>
            </div>
        </div>
    </div>
</footer>


<!-- ====== END footer ====== -->
