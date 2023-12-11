<?php
http_response_code(404);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto text-center my-12">
        <h1 class="text-4xl font-bold mb-4">404 Not Found</h1>
        <p class="text-gray-700">Oops! The page you're looking for doesn't exist.</p>
        <a 
            href="../index.php" 
            class="text-blue-500 hover:underline">
            Go back to home
        </a> <!-- Adjust the path based on your project structure -->
    </div>
</body>

</html>
