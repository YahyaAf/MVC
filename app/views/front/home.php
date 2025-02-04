<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <h1 class="text-4xl text-center font-bold my-8">Article List</h1>

    <div class="max-w-screen-lg mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
            <?php foreach ($articles as $article): ?>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-center text-indigo-600"><?= htmlspecialchars($article['title']) ?></h2>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-b-lg">
                        <p class="text-base text-gray-700"><?= htmlspecialchars($article['content']) ?></p>
                        <!-- Button with article ID -->
                        <div class="text-center mt-4">
                            <a href="/article?id=<?= $article['id'] ?>" class="inline-block px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300">
                                View Article 
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</body>
</html>
