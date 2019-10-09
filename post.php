<!DOCTYPE html>
    <head>
        <title>Welcome Victoria's Blog</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <?php
                function getPostDetailsFromDatabase() {

                $postDetails = array('title' => 'Animal: Fox', 
                                        'date' => '10/05/2019',
                                        'author' => 'Victoria Bowie',
                                        'content' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas bibendum sodales libero id lobortis. Phasellus condimentum sollicitudin neque porta pellentesque. Pellentesque at sem sed dui interdum molestie eget vel eros. Nullam tempor felis ut dui molestie, non sollicitudin est aliquam. Aliquam laoreet ex vel sagittis porttitor. Donec vitae sem ac est semper lobortis. Sed a nibh a est condimentum pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam nec feugiat neque. Duis egestas odio eget nunc efficitur, eu viverra lacus pulvinar. Vestibulum urna tellus, tempus eu metus vel, imperdiet tincidunt magna. Curabitur at lobortis turpis, a pellentesque ipsum. Mauris ac eros in ligula posuere bibendum.</p>
                                            <p> Vestibulum vestibulum metus rhoncus nisl elementum rhoncus. Praesent sit amet massa id magna bibendum dictum. Etiam lacinia ligula at velit pretium, gravida maximus odio blandit. Morbi mauris ipsum, consequat sed ex nec, scelerisque finibus urna. Maecenas posuere mattis neque ac tempor. Fusce maximus leo malesuada quam imperdiet, ut fringilla nibh accumsan. Cras eget tristique nulla. Vestibulum sem odio, scelerisque ac velit pellentesque, placerat mollis eros. Sed non efficitur purus. Sed convallis mi eu ex suscipit molestie. Praesent fermentum dui augue, eget vestibulum nisi pellentesque in. Sed elit leo, accumsan ac vestibulum eget, porttitor in libero. Phasellus quam lorem, scelerisque ac placerat vitae, malesuada et risus. Nulla euismod ex a ipsum efficitur laoreet. Morbi eu dui tempor, auctor sem eget, viverra erat.</p>'
                                        );
                    return $postDetails;
                }
                

                $postDetails = getPostDetailsFromDatabase();
            ?>
            <h2 class="post-title"><?php echo $postDetails["title"]; ?></h2>
            <div class="post-date"><?php echo $postDetails["date"]; ?></div>
            <div class="post-content"><?php echo $postDetails["content"]; ?></div>
            <div class="post-author"><?php echo $postDetails["author"]; ?></div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>
