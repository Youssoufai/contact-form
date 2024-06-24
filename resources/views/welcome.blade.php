<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-lig htGreen flex justify-center items-center h-full">
    @csrf
    <main class="bg-white w-[34rem] p-8 m-9 rounded-md">
        <a href="/success">success</a>
        <form class="space-y-8" method="POST">

            <h1 class="text-3xl text-mediumGreen">Contact Us</h1>
            <div class="flex justify-between items-center">
                <div class="flex flex-col gap-4 items-start">
                    <label for="first_name">First Name *</label>
                    <input type="text" name="first_name" id="first_name"
                        class="focus:outline-none p-4 ring-mediumGreen border border-mediumGreen focus:ring-mediumGreen rounded-lg h-8 focus:ring-1 w-[14.5rem]">
                </div>
                <div class="flex flex-col gap-4 items-start">
                    <label for="last_name">Last Name *</label>
                    <input type="text" name="last_name" id="last_name"
                        class="focus:outline-none p-4 ring-mediumGreen border border-mediumGreen focus:ring-mediumGreen rounded-lg h-8 focus:ring-1  w-[14.5rem]">
                </div>
            </div>
            <label for="email" class="block">Email Address</label>
            <input type="text" name="email" id="email"
                class="focus:outline-none p-4 ring-mediumGreen border border-mediumGreen focus:ring-mediumGreen rounded-lg focus:ring-1 my-8 w-full h-8">
            <div class="space-y-4">
                <label for="query" class="block">Query Type *</label>
                <div class="flex gap-4">
                    <div class="border border-mediumGreen w-3/6 px-4 py-2 rounded-lg">
                        <input type="radio" class="cursor-pointer" name="general" id="general">
                        <span>General Enquiry</span>
                    </div>
                    <div
                        class="border border-mediumGreen w-3/6 px-4 py-2 rounded-lg hover:cursor-pointer hover:bg-lightGreen">
                        <input type="radio" name="support" class="hover:bg-lightGreen cursor-pointer" id="support">
                        < span>Support Request</>
                    </div>
                </div>
            </div>
            <label for="message" class="block">Message *</label>
            <textarea name="message" class="h-[10rem] w-full border border-mediumGreen focus:outline-none p-4"></textarea>
            <input type="checkbox" name="consent" id="consent">
            <span>I consent to being contacted by the team *</span>
            <input type="submit" value="Submit">
        </form>
    </main>
</body>

</html>
