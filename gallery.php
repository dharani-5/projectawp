<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pics</title>
    <style>
        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-color: #F5F5F5;
            padding: 20px;
        }
        .gallery-item {
            width: 300px;
            height: 200px;
            margin: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .gallery-item img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <h1><center>Gallery</center></h1>
    <div class="gallery">
        <div class="gallery-item">
            <img src="photos/s2.jpg">
        </div>
        <div class="gallery-item">
            <img src="photos/s3.jpg">
        </div>
        <div class="gallery-item">
            <img src="photos/s4.jpg">
        </div>
        <div class="gallery-item">
            <img src="photos/s5.jpg">
        </div>
        <div class="gallery-item">
            <img src="photos/s8.jpg">
        </div>
        <div class="gallery-item">
            <img src="photos/s9.jpg">
        </div>
        <div class="gallery-item">
            <img src="photos/s7.jpg">
        </div>
    </div>
</body>
</html>
