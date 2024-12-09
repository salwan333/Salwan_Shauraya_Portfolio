<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zima Case Study</title>
    <link rel="stylesheet" href="css/zima.css"> 
    <?php
require_once('includes/connect.php');

$query = 'SELECT * FROM projects, media WHERE project_id = projects.id AND media.id ='.$_GET['id']; 

$results = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($results);

?>
</head>
<body>
    
    <header class="header">
        <h1>Zima</h1>
    </header>

    
    <main class="main-content">
       
        <section class="image-placeholder">
            <img src="images/zima.png" alt="Zima Project Image" />
        </section>

       
        <section class="text-section">
            <h2>Case Study: Rebranding Zima</h2>
            <p>Hello! This is a project in which we were assigned to rebrand Zima, and it turned out to be an exciting creative journey. My partner, Divij Saddul, and I started by brainstorming ideas for a fresh visual identity that captures the spirit of the brand. We designed a new logo and created wireframes to map out our vision.</p>
            <p>Using Cinema 4D, we crafted model cans and wrapped the packaging around them to give everything a modern, appealing look. To really bring our designs to life, we produced a dynamic 3D animation for promotional videos that highlights the new branding in an engaging way.</p>
            <p>On top of that, we built a complete website using HTML, CSS, and JavaScript, ensuring it offers a smooth and enjoyable experience for users. This project not only sharpened our design and coding skills but also showed us how important it is to have a cohesive brand presence across different platforms. Overall, it was a fantastic opportunity to collaborate and bring something new to life!</p>
        </section>
    </main>

    <footer class="footer">
        <p>Zima</p>
    </footer>

</body>
</html>
