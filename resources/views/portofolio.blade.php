<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }
        .hero {
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.5rem;
            margin-top: 1rem;
        }
        .section-title {
            margin-bottom: 2rem;
            font-size: 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero text-center">
        <h1>Welcome to My Portfolio</h1>
        <p>I'm a Laravel Developer</p>
    </div>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <p>
                Hi, I'm a passionate web developer specializing in Laravel framework. I love creating modern and responsive web applications that deliver great user experiences.
            </p>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Project 1</h5>
                            <p class="card-text">A brief description of the project goes here.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Project 2</h5>
                            <p class="card-text">A brief description of the project goes here.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Project 3</h5>
                            <p class="card-text">A brief description of the project goes here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Services</h2>
            <p>I offer the following services:</p>
            <ul>
                <li>Web Development</li>
                <li>API Integration</li>
                <li>Custom Laravel Solutions</li>
            </ul>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Contact Me</h2>
            <p>If you'd like to work together, feel free to reach out!</p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name
