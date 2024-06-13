<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course</title>
    @vite('resources/css/app.css')

</head>

<body>
    <x-front-end-navbar />

    <section class="py-5">
        <div class=" container m-auto ">
            <h1 class=" text-3xl text-center">Add Courses</h1>
            <form action="/post_course" method="post">
                @csrf
                {{-- genreate the token to submit the form data if token is not passed then then the action path page will not open. --}}
                {{-- It is compulsory to pass --}}
                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label for="name">Course Name</label>
                        <input type="text" class="w-full" name="course_name" id="courseName">
                    </div>

                    <div>
                        <label for="price">Course Price</label>
                        <input type="text" class="w-full" name="course_price" id="coursePrice">

                    </div>

                    <div class="bg-red-500">

                        <label for="image">Course Image</label>

                        <input type="file" class="w-full" name="image" id="image">
                    </div>
                </div>
                <div class="py-5">
                    <button type="submit" class="bg-blue-500 px-8 py-2 rounded-md text-white">Add</button>
                </div>

            </form>
        </div>
    </section>

</body>

</html>
