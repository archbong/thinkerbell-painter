<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Portfolio | The Beard Painter</title>
</head>

<body>
    <!-- Navigation Section -->
    <nav class="bg-gray-900 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">The Beard Painter</div>
            <div class="flex space-x-4">
                <a href="index.html" class="hover:text-gray-500">Home</a>
                <a href="about.html" class="hover:text-gray-500">About</a>
                <a href="portfolio.html" class="hover:text-gray-500">Portfolio</a>
                <a href="contact.html" class="hover:text-gray-500">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Portfolio Section -->
    <section class="container mx-auto my-12">
        <h1 class="text-4xl font-bold mb-8">Art Portfolio</h1>

        <!-- Image Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Add images and captions for the portfolio -->
            <div>
                <img src="images/painting1.jpg" alt="Painting 1" class="w-full h-64 object-cover mb-4">
                <p class="text-gray-700">Sunset Dreams</p>
            </div>
            <div>
                <img src="images/painting2.jpg" alt="Painting 2" class="w-full h-64 object-cover mb-4">
                <p class="text-gray-700">Abstract Waves</p>
            </div>
            <div>
                <img src="images/painting3.jpg" alt="Painting 3" class="w-full h-64 object-cover mb-4">
                <p class="text-gray-700">Nature's Harmony</p>
            </div>
            <!-- Add more images and captions as needed -->
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2023 The Beard Painter. All rights reserved.</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>

</html>
