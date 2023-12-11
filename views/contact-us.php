<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact The Beard Painter</title>
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

    <!-- Contact Section -->
    <section class="container mx-auto my-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="images/contact-image.jpg" alt="Contact The Beard Painter" class="w-full h-auto mb-8 rounded-lg">
            </div>
            <div>
                <h1 class="text-4xl font-bold mb-4">Contact The Beard Painter</h1>
                <p class="text-gray-700 leading-loose">
                    Have a question, want to commission a painting, or just want to say hello? Feel free to reach out using
                    the form below.
                </p>

                <!-- Contact Form -->
                <form action="php/contact.php" method="POST" class="mt-8">
                    <label for="name" class="block text-gray-600 mb-2">Your Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded mb-4" required>

                    <label for="email" class="block text-gray-600 mb-2">Your Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border rounded mb-4" required>

                    <label for="message" class="block text-gray-600 mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded mb-4" required></textarea>

                    <button type="submit" class="bg-gray-900 text-white py-2 px-6 rounded-full font-bold hover:bg-gray-700">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2023 The Beard Painter. All rights reserved.</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>

</html>
