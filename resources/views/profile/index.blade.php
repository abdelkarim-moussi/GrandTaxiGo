<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - PIPYalah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.html" class="text-2xl font-bold text-yellow-500">PIPYalah</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="index.html" class="text-gray-600 hover:text-yellow-500">Accueil</a>
                    <a href="drivers.html" class="text-gray-600 hover:text-yellow-500">Chauffeurs</a>
                    <a href="passenger-reservations.html" class="text-gray-600 hover:text-yellow-500">Mes Réservations</a>
                    <a href="profile.html" class="text-yellow-500">Profil</a>
                    <a href="login.html" class="text-gray-600 hover:text-yellow-500">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <!-- Profile Photo -->
            <div class="md:col-span-1">
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="text-center">
                        <img class="h-32 w-32 rounded-full mx-auto" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Photo de profil">
                        <div class="mt-4">
                            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300 transition text-sm">
                                Changer la photo
                            </button>
                        </div>
                    </div>
                    <div class="mt-6 border-t border-gray-200 pt-6">
                        <div class="text-center">
                            <h3 class="text-lg font-medium text-gray-900">Mohammed Karimi</h3>
                            <p class="text-sm text-gray-500">Membre depuis Janvier 2025</p>
                        </div>
                        <div class="mt-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Note moyenne</span>
                                <span class="text-gray-900 font-medium">4.8/5</span>
                            </div>
                            <div class="flex justify-between text-sm mt-3">
                                <span class="text-gray-500">Courses effectuées</span>
                                <span class="text-gray-900 font-medium">127</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Information -->
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-6">Informations personnelles</h3>
                        <form>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Prénom</label>
                                    <input type="text" name="first-name" id="first-name" value="Mohammed" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Nom</label>
                                    <input type="text" name="last-name" id="last-name" value="Karimi" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                </div>

                                <div class="col-span-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
                                    <input type="email" name="email" id="email" value="mohammed.karimi@email.com" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                </div>

                                <div class="col-span-6">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
                                    <input type="tel" name="phone" id="phone" value="+212 6XX-XXXXXX" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                </div>

                                <div class="col-span-6">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Adresse</label>
                                    <input type="text" name="address" id="address" value="123 Rue Mohammed V, Rabat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                                    Enregistrer les modifications
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Security Settings -->
                <div class="bg-white shadow rounded-lg mt-6">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-6">Sécurité</h3>
                        <form>
                            <div class="space-y-4">
                                <div>
                                    <label for="current-password" class="block text-sm font-medium text-gray-700">Mot de passe actuel</label>
                                    <input type="password" name="current-password" id="current-password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                </div>

                                <div>
                                    <label for="new-password" class="block text-sm font-medium text-gray-700">Nouveau mot de passe</label>
                                    <input type="password" name="new-password" id="new-password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                </div>

                                <div>
                                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirmer le nouveau mot de passe</label>
                                    <input type="password" name="confirm-password" id="confirm-password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                                    Changer le mot de passe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
