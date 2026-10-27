<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Scroll Animation Trigger</title>
    <style>
        .box {
            width: 100px;
            height: 100px;
            background: red;
            opacity: 0;
            transition: opacity 2s;
            margin: 600px auto;  /* Ensures it starts out of view */
        }
    </style>
</head>
<body>
<p>Keep scrolling down to see the animation!</p>
<div class="box"></div>

<script>
    let hasAnimated = false;
    window.addEventListener('scroll', function() {
        const box = document.querySelector('.box');
        const rect = box.getBoundingClientRect();
        
        if (rect.top < window.innerHeight && !hasAnimated) {
            box.style.opacity = 1;  // Fade in the box when it comes into view
            hasAnimated = true;
        }
    });
</script>
</body>
</html>