<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #8200d9, #d97b00);
            color: #fff;
        }
        
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-header img {
            width: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-header h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .profile-header p {
            font-size: 18px;
        }

        .profile-info {
            margin-bottom: 30px;
        }

        .profile-info h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .profile-info p {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .contact-info h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .contact-info a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: #c26b00;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.4s;
        }

        .contact-info a:hover {
            background-color: #784200;
        }

        .portfolio {
            margin-top: 30px;
        }

        .portfolio h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .portfolio-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .portfolio-item i {
            font-size: 24px;
            margin-right: 10px;
        }

        .portfolio-item p {
            font-size: 18px;
            margin: 0;
        }

        .portfolio-item:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-header">
        <p> <img src="{{ asset('images/profile.jpg') }}" alt="Nama Gambar"></p>
            <h1>My Portfolio</h1>
            <p>Welcome to my portfolio website, guests</p>
        </div>

        <div class="profile-info">
            <h2>Personal Information</h2>
            <p><i class="fas fa-user"></i> : Annete Ompusunggu</p>
            <p><i class="fas fa-birthday-cake"></i> : Surabaya, 23 April 2004</p>
            <p><i class="fas fa-envelope"></i> : jovanca3anete@gmail.com</p>
            <p><i class="fas fa-graduation-cap"></i> : Mahasiswa TRM dari PENS</p>
            <p><i class="fas fa-paint-brush"></i> : 3D Animator</p>
        </div>

        <div class="contact-info">
            <h2>Contact Me</h2>
            <p>Feel free to contact me if you have any questions or job opportunities</p>
            <a href="mailto:jovanca3annete@gmail.com">Send Email</a>
        </div>
    </div>

    </div>
</body>
</html>