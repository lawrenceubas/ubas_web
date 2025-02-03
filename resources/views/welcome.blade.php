<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            background-image: url('q.jpg'); /* Add the image URL here */
            background-size: cover; /* Make the image cover the entire screen */
            background-position: center; /* Center the image */
            color: #000;
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        h1 {
            color:rgb(0, 0, 0);
        }
        .button-container {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .button {
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 16px;
            color: #fff;
            background-color: #9bf8f4;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #9bf8f4;
        }
        .section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            width: 300px;
            box-shadow: 0 4px 8px |rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
        }
        .card iframe {
            width: 100%;
            height: 200px;
            border: none;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-content {
            padding: 10px;
        }
        .card-content h3 {
            margin: 0;
            color: #333;
        }
        .card-content p {
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <a href="{{ route ('login') }}" class="button">Login</a>
        <a href="{{ route ('register') }}" class="button">Register</a>
    </div>

    <div class="container">
        <h1>Welcome to Our Page!</h1>
        <p>Explore our collection of videos and pictures below to learn more.</p>

        <div class="section">
            <div class="card">
                <iframe src="https://www.youtube.com/embed/-wKTbx50aTY" title="Welcome Video"></iframe>
                <div class="card-content">
                    <h3>Batang Quiapo</h3>
                    <p>An introduction to our platform.</p>
                </div>
            </div>

            <div class="card">
                <iframe src="https://www.youtube.com/embed/QAm4XodAnTQ" title="Introduction Video"></iframe>
                <div class="card-content">
                    <h3>Zarckaroo</h3>
                    <p>Learn about our mission and goals.</p>
                </div>
            </div>

            <div class="card">
                <iframe src="https://www.youtube.com/embed/3JZ_D3ELwOQ" title="Tutorial Video"></iframe>
                <div class="card-content">
                    <h3>Tutorial Video</h3>
                    <p>A guide to getting started with our services.</p>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="card">
                <img src="../../../login-and-register-form/img/2.jpg" alt="Placeholder Image 1">
                <div class="card-content">
                    <h3>Gallery Image 1</h3>
                    <p>A glimpse of our work environment.</p>
                </div>
            </div>

            <div class="card">
                <img src="../../../login-and-register-form/img/3.webp" alt="Placeholder Image 2">
                <div class="card-content">
                    <h3>Gallery Image 2</h3>
                    <p>Highlights from our recent event.</p>
                </div>
            </div>

            <div class="card">
                <img src="../../../login-and-register-form/img/4.webp" alt="Placeholder Image 3">
                <div class="card-content">
                    <h3>Gallery Image 3</h3>
                    <p>A snapshot of our team in action.</p>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="card">
                <div class="card-content">
                    <h3>Informational Paragraph</h3>
                    <p>Our platform is designed to bring people together and provide valuable resources to help them achieve their goals. Whether you're here to learn, connect, or explore, we're glad to have you with us!</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
