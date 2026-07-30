<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Columns Slide Out</title>
    <link rel="stylesheet" href="three-columns-slide-out.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 40px;
            background: #0a0a12;
        }
    </style>
</head>
<body>

    <?php
        $images = ['image1.jpg', 'image2.jpg', 'image3.jpg'];
        $totalImages = count($images);
    ?>

    <!-- Basic -->
    <div id="three-columns-slide-out">
        <?php foreach ($images as $idx => $img) { ?>
            <div class="image-slide <?php echo $idx === 0 ? 'active' : ''; ?>" data-index="<?php echo $idx; ?>">
                <?php for ($col = 1; $col <= 3; $col++) { ?>
                    <div class="slide-out">
                        <div class="layout">
                            <img src="<?php echo $img; ?>" alt="Image <?php echo $idx + 1; ?>"/>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <!-- For Elementor -->
    <!--     
    <div id="three-columns-slide-out">
        <div class="image-slide active">
            <div class="slide-out">
                <div class="layout">
                    <img src="image1.jpg"/>
                </div>
            </div>
            <div class="slide-out">
                <div class="layout">
                    <img src="image1.jpg"/>
                </div>
            </div>
            <div class="slide-out">
                <div class="layout">
                    <img src="image1.jpg"/>
                </div>
            </div>
        </div>
        <div class="image-slide">
            <div class="slide-out">
                <div class="layout">
                    <img src="image2.jpg"/>
                </div>
            </div>
            <div class="slide-out">
                <div class="layout">
                    <img src="image2.jpg"/>
                </div>
            </div>
            <div class="slide-out">
                <div class="layout">
                    <img src="image2.jpg"/>
                </div>
            </div>
        </div>
        <div class="image-slide">
            <div class="slide-out">
                <div class="layout">
                    <img src="image3.jpg"/>
                </div>
            </div>
            <div class="slide-out">
                <div class="layout">
                    <img src="image3.jpg"/>
                </div>
            </div>
            <div class="slide-out">
                <div class="layout">
                    <img src="image3.jpg"/>
                </div>
            </div>
        </div>
    </div>
    -->

    <script>
        (function() {
            const container = document.getElementById('three-columns-slide-out');
            const slides = container.querySelectorAll('.image-slide');
            const total = slides.length;
            let current = 0;

            function showNext() {
                const prevSlide = slides[current];
                current = (current + 1) % total;
                const nextSlide = slides[current];

                const wasVisible = nextSlide.classList.contains('prev');

                slides.forEach(s => s.classList.remove('prev'));
                prevSlide.classList.remove('active');
                prevSlide.classList.add('prev');
                nextSlide.classList.add('active');

                if (wasVisible) {
                    nextSlide.querySelectorAll('.slide-out').forEach(col => {
                        col.style.animation = 'none';
                        col.offsetHeight;
                        col.style.animation = '';
                    });
                }
            }

            setInterval(showNext, 4000);
        })();
    </script>

</body>
</html>