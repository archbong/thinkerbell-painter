<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Request a Quotation | The Beard Painter</title>
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
                <a href="testimonials.html" class="hover:text-gray-500">Testimonials</a>
                <a href="quotation.html" class="hover:text-gray-500">Quotation</a>
            </div>
        </div>
    </nav>

    <!-- Quotation Section -->
    <section class="container mx-auto my-12">
        <h1 class="text-4xl font-bold mb-8">Request a Quotation</h1>

        <!-- Quotation Form -->
        <form action="php/quotation.php" method="POST" class="max-w-lg mx-auto">
            <label for="name" class="block text-gray-600 mb-2">Your Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 border rounded mb-4" required>

            <label for="email" class="block text-gray-600 mb-2">Your Email</label>
            <input type="email" id="email" name="email" class="w-full p-2 border rounded mb-4" required>

            <label for="service" class="block text-gray-600 mb-2">Select Service</label>
            <select id="service" name="service" class="w-full p-2 border rounded mb-4" required>
                <option value="custom-painting">Custom Painting</option>
                <option value="portrait">Portrait</option>
                <option value="landscape">Landscape</option>
                <!-- Add more options as needed -->
            </select>

            <label for="message" class="block text-gray-600 mb-2">Additional Details</label>
            <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded mb-4"></textarea>

            <button type="submit" class="bg-gray-900 text-white py-2 px-6 rounded-full font-bold hover:bg-gray-700">
                Request Quotation
            </button>
        </form>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2023 The Beard Painter. All rights reserved.</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>

</html>
