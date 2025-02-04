<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - {{ article.title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10 mb-16">
        <h1 class="text-4xl font-extrabold text-center text-indigo-600 mb-6">{{ article.title }}</h1>
        <div class="text-center text-sm text-gray-500 mb-8">
            <p>Article ID: {{ article.id }}</p>
        </div>
        <div class="prose max-w-none text-gray-700">
            <p>{{ article.content }}</p>
        </div>
        <div class="mt-8 text-center">
            <a href="{{ path('home') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white text-lg rounded-lg hover:bg-indigo-700 transition duration-300">
                Back to Article List
            </a>
        </div>
    </div>
</body>
</html>