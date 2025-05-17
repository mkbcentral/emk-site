<x-layouts.app.main>
    <!-- Main Content with Hero Banner -->
    <section class="pt-36 bg-gradient-to-br from-blue-900 to-blue-700 text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Contactez-nous</h1>
                <p class="text-xl text-blue-100 mb-8">Nous sommes à votre disposition pour répondre à toutes vos
                    questions</p>
            </div>
        </div>
        <div class="wave-divider h-20 bg-bottom bg-no-repeat bg-cover"
            style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 1440 320\'%3E%3Cpath fill=\'%23F9FAFB\' fill-opacity=\'1\' d=\'M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\'%3E%3C/path%3E%3C/svg%3E');">
        </div>
    </section>

    <!-- Contact Info & Form Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div
                class="max-w-6xl mx-auto bg-white rounded-xl shadow-xl overflow-hidden transform hover:shadow-2xl transition-all duration-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-2/5 bg-gradient-to-br from-blue-900 to-blue-700 p-8 text-white">
                        <h3 class="text-2xl font-semibold mb-6">Informations de contact</h3>
                        <div class="space-y-6 mb-8">
                            <div
                                class="flex items-start space-x-4 transform transition-transform duration-300 hover:translate-x-2">
                                <i class="fas fa-map-marker-alt mt-1 text-blue-300 text-xl"></i>
                                <div>
                                    <h4 class="font-medium text-lg">Adresse</h4>
                                    <p class="text-blue-100">03,Pièrre Malagano, Terminus golf, Lshi, RDC Fuastin</p>
                                </div>
                            </div>
                            <div
                                class="flex items-start space-x-4 transform transition-transform duration-300 hover:translate-x-2">
                                <i class="fas fa-phone mt-1 text-blue-300 text-xl"></i>
                                <div>
                                    <h4 class="font-medium text-lg">Téléphone</h4>
                                    <p class="text-blue-100">+243 12 345 6789</p>
                                </div>
                            </div>
                            <div
                                class="flex items-start space-x-4 transform transition-transform duration-300 hover:translate-x-2">
                                <i class="fas fa-envelope mt-1 text-blue-300 text-xl"></i>
                                <div>
                                    <h4 class="font-medium text-lg">Email</h4>
                                    <p class="text-blue-100">contact@emkminesoffice.org</p>
                                </div>
                            </div>
                            <div
                                class="flex items-start space-x-4 transform transition-transform duration-300 hover:translate-x-2">
                                <i class="fas fa-clock mt-1 text-blue-300 text-xl"></i>
                                <div>
                                    <h4 class="font-medium text-lg">Heures d'ouverture</h4>
                                    <p class="text-blue-100">Lundi - Vendredi: 8h00 - 17h00</p>

                                </div>
                            </div>
                        </div>

                        <h4 class="text-lg font-medium mb-4">Suivez-nous</h4>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="md:w-3/5 p-8">
                        <h3 class="text-2xl font-semibold mb-6 text-blue-900">Envoyez-nous un message</h3>
                        <form id="contact-form" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom
                                        complet *</label>
                                    <input type="text" id="name" name="name"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300"
                                        required>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                        *</label>
                                    <input type="email" id="email" name="email"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300"
                                        required>
                                </div>
                            </div>
                            <div>
                                <label for="phone"
                                    class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Sujet
                                    *</label>
                                <input type="text" id="subject" name="subject"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300"
                                    required>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message
                                    *</label>
                                <textarea id="message" name="message" rows="5"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300"
                                    required></textarea>
                            </div>
                            <div class="flex items-start">
                                <input type="checkbox" id="privacy" name="privacy"
                                    class="mt-1 focus:ring-2 focus:ring-blue-500" required>
                                <label for="privacy" class="ml-2 text-sm text-gray-600">
                                    J'accepte que mes données soient traitées conformément à la politique de
                                    confidentialité
                                </label>
                            </div>
                            <div>
                                <button type="submit"
                                    class="bg-blue-700 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-800 transition-colors duration-300 w-full flex items-center justify-center">
                                    <span>Envoyer le message</span>
                                    <i class="fas fa-paper-plane ml-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-blue-900 mb-4">Notre emplacement</h2>
                    <p class="max-w-2xl mx-auto text-gray-600">Retrouvez notre cabinet au cœur de Kinshasa</p>
                </div>

                <div class="bg-gray-200 h-[400px] rounded-xl overflow-hidden shadow-lg relative">
                    <!-- This is a placeholder for a map - in a real implementation you'd use Google Maps or similar -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-map-marker-alt text-5xl text-blue-700 mb-4"></i>
                            <p class="text-gray-700 font-medium">Carte interactive indisponible en prévisualisation</p>
                            <p class="text-gray-500">123 Avenue Minière, Kinshasa, RDC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // FAQ Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const icon = question.querySelector('i');

                    // Toggle this answer
                    answer.classList.toggle('hidden');
                    icon.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' :
                        'rotate(180deg)';

                    // Close other answers
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== question) {
                            const otherAnswer = otherQuestion.nextElementSibling;
                            const otherIcon = otherQuestion.querySelector('i');

                            otherAnswer.classList.add('hidden');
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    });
                });
            });
        });
    </script>
</x-layouts.app.main>
