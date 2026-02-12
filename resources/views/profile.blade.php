<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <main class="max-w-3xl mx-auto p-6">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">
            👤 Profile Page
        </h1>

        <div class="bg-white shadow-md rounded-xl p-6 space-y-4">

            <div>
                <p class="text-gray-500">Name:</p>
                <p class="text-lg font-semibold">
                    {{ $profile["name"]}}
                </p>
            </div>

            <div>
                <p class="text-gray-500">Email:</p>
                <p class="text-lg font-semibold">
                    {{ $profile["email"]}}
                </p>
            </div>

            <div>
                <p class="text-gray-500">Account Created At:</p>
                <p class="text-lg font-semibold">
                    2026-02-01
                </p>
            </div>

        </div>

    </main>
</body>
</html>
