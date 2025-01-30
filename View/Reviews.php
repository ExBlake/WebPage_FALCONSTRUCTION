<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Clone</title>
    <link rel="stylesheet" href="Estilos_Header">
    <link rel="stylesheet" href="Estilos_Resenas">
    <!-- Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="Estilos_Footer">
</head>

<body>
    <?php
    // Inclusión del Header
    require_once 'Layout/Header.php';
    ?>

    <!-- Main Content -->
    <main class="main-content-review">
        <div class="container-review">
            <!-- Feed Section -->
            <div class="feed-section-review">
                <!-- Stories -->


                <!-- Posts -->
                <div class="posts-review" id="post-Santiago Villada">
                    <div class="post-review">
                        <div class="post-header-review">
                            <img src="PImageResenas/Retrato1.jpg"
                                alt="user" class="profile-pic-review">
                            <span class="username-review">Santiago Villada</span>

                        </div>
                        <div class="post-carousel-review">
                            <div class="carousel-container-review">
                                <div class="carousel-slide-review">
                                    <img src="PImageResenas/Retrato1.jpg"
                                        alt="post">
                                </div>
                                <div class="carousel-slide-review">
                                    <video class="custom-video" src="PVideoBanner/video2.mp4" autoplay muted loop></video>
                                </div>
                                <div class="carousel-slide-review">
                                    <img src="PImageResenas/Retrato1.jpg"
                                        alt="post">
                                </div>
                            </div>
                            <button class="carousel-button-review prev-review"></button>
                            <button class="carousel-button-review next-review"></button>
                        </div>
                        <div class="post-actions-review">
                            <div class="actions-left-review">
                                <i class="far fa-star" data-rating="1"></i>
                                <i class="far fa-star" data-rating="2"></i>
                                <i class="far fa-star" data-rating="3"></i>
                                <i class="far fa-star" data-rating="4"></i>
                                <i class="far fa-star" data-rating="5"></i>
                            </div>
                        </div>
                        <div class="post-info-review">
                            <div class="caption-review">
                                Game day! Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero assumenda
                                accusantium fugit tempora, architecto doloribus ipsam iste earum doloremque culpa sint
                                dicta quae sed consequuntur saepe nobis aut neque suscipit. 🏀
                            </div>
                            <span class="timestamp-review">28/02/2025</span>
                        </div>
                    </div>
                </div>
                <!-- Posts -->
                <div class="posts-review" id="post-Mateo Villada">
                    <div class="post-review">
                        <div class="post-header-review">
                            <img src="PImageResenas/Retrato1.jpg"
                                alt="user" class="profile-pic-review">
                            <span class="username-review">Mateo Villada</span>

                        </div>
                        <div class="post-carousel-review">
                            <div class="carousel-container-review">
                                <div class="carousel-slide-review">
                                    <video class="custom-video" src="PVideoBanner/video2.mp4" autoplay muted loop></video>
                                </div>
                                <div class="carousel-slide-review">
                                    <img src="PImageResenas/Retrato1.jpg"
                                        alt="post">
                                </div>
                                <div class="carousel-slide-review">
                                    <img src="PImageResenas/Retrato1.jpg"
                                        alt="post">
                                </div>
                            </div>
                            <button class="carousel-button-review prev-review"></button>
                            <button class="carousel-button-review next-review"></button>
                        </div>
                        <div class="post-actions-review">
                            <div class="actions-left-review">
                                <i class="far fa-star" data-rating="1"></i>
                                <i class="far fa-star" data-rating="2"></i>
                                <i class="far fa-star" data-rating="3"></i>
                                <i class="far fa-star" data-rating="4"></i>
                                <i class="far fa-star" data-rating="5"></i>
                            </div>
                        </div>
                        <div class="post-info-review">
                            <div class="caption-review">
                                Game day! Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero assumenda
                                accusantium fugit tempora, architecto doloribus ipsam iste earum doloremque culpa sint
                                dicta quae sed consequuntur saepe nobis aut neque suscipit. 🏀
                            </div>
                            <span class="timestamp-review">28/02/2025</span>
                        </div>
                    </div>
                </div>
                <!-- Posts -->
                <div class="posts-review" id="post-Miguel Villada">
                    <div class="post-review">
                        <div class="post-header-review">
                            <img src="PImageResenas/Retrato1.jpg"
                                alt="user" class="profile-pic-review">
                            <span class="username-review">Miguel Villada</span>

                        </div>
                        <div class="post-carousel-review">
                            <div class="carousel-container-review">
                                <div class="carousel-slide-review">
                                    <img src="PImageResenas/Retrato1.jpg"
                                        alt="post">
                                </div>
                                <div class="carousel-slide-review">
                                    <video id="custom-video" src="PVideoBanner/video2.mp4" autoplay muted loop></video>
                                    <div class="video-controls">
                                        <div class="progress-bar" id="progress-bar">
                                            <div class="progress" id="progress"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-button-review prev-review"></button>
                            <button class="carousel-button-review next-review"></button>
                        </div>
                        <div class="post-actions-review">
                            <div class="actions-left-review">
                                <i class="far fa-star" data-rating="1"></i>
                                <i class="far fa-star" data-rating="2"></i>
                                <i class="far fa-star" data-rating="3"></i>
                                <i class="far fa-star" data-rating="4"></i>
                                <i class="far fa-star" data-rating="5"></i>
                            </div>
                        </div>
                        <div class="post-info-review">
                            <div class="caption-review">
                                Game day! Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero assumenda
                                accusantium fugit tempora, architecto doloribus ipsam iste earum doloremque culpa sint
                                dicta quae sed consequuntur saepe nobis aut neque suscipit. 🏀
                            </div>
                            <span class="timestamp-review">28/02/2025</span>
                        </div>
                    </div>
                </div>
                <!-- Posts -->
                <div class="posts-review">
                    <div class="post-review">
                        <div class="post-header-review">
                            <img src="PImageResenas/Retrato1.jpg"
                                alt="user" class="profile-pic-review">
                            <span class="username-review">Santiago Villada</span>

                        </div>
                        <div class="post-carousel-review">
                            <div class="carousel-container-review">
                                <div class="carousel-slide-review">
                                    <img src="PImageResenas/Retrato1.jpg"
                                        alt="post">
                                </div>
                                <div class="carousel-slide-review">
                                    <video src="video.mp4" controls></video>
                                </div>
                                <div class="carousel-slide-review">
                                    <img src="PImageResenas/Retrato1.jpg"
                                        alt="post">
                                </div>
                            </div>
                            <button class="carousel-button-review prev-review"></button>
                            <button class="carousel-button-review next-review"></button>
                        </div>
                        <div class="post-actions-review">
                            <div class="actions-left-review">
                                <i class="far fa-star" data-rating="1"></i>
                                <i class="far fa-star" data-rating="2"></i>
                                <i class="far fa-star" data-rating="3"></i>
                                <i class="far fa-star" data-rating="4"></i>
                                <i class="far fa-star" data-rating="5"></i>
                            </div>
                        </div>
                        <div class="post-info-review">
                            <div class="caption-review">
                                Game day! Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero assumenda
                                accusantium fugit tempora, architecto doloribus ipsam iste earum doloremque culpa sint
                                dicta quae sed consequuntur saepe nobis aut neque suscipit. 🏀
                            </div>
                            <span class="timestamp-review">28/02/2025</span>
                        </div>
                    </div>
                </div>
                <!-- Posts -->
                <div class="posts-review">
                    <div class="post-review">
                        <div class="post-header-review">
                            <img src="PImageResenas/Retrato1.jpg"
                                alt="user" class="profile-pic-review">
                            <span class="username-review">Santiago Villada</span>

                        </div>
                        <div class="post-carousel-review">
                            <div class="carousel-container-review">
                                <div class="carousel-slide-review">
                                    <img src="PImageResenas/Retrato1.jpg"
                                        alt="post">
                                </div>
                                <div class="carousel-slide-review">
                                    <video src="video.mp4" controls></video>
                                </div>
                                <div class="carousel-slide-review">
                                    <img src="PImageResenas/Retrato1.jpg"
                                        alt="post">
                                </div>
                            </div>
                            <button class="carousel-button-review prev-review"></button>
                            <button class="carousel-button-review next-review"></button>
                        </div>
                        <div class="post-actions-review">
                            <div class="actions-left-review">
                                <i class="far fa-star" data-rating="1"></i>
                                <i class="far fa-star" data-rating="2"></i>
                                <i class="far fa-star" data-rating="3"></i>
                                <i class="far fa-star" data-rating="4"></i>
                                <i class="far fa-star" data-rating="5"></i>
                            </div>
                        </div>
                        <div class="post-info-review">
                            <div class="caption-review">
                                Game day! Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero assumenda
                                accusantium fugit tempora, architecto doloribus ipsam iste earum doloremque culpa sint
                                dicta quae sed consequuntur saepe nobis aut neque suscipit. 🏀
                            </div>
                            <span class="timestamp-review">28/02/2025</span>
                        </div>
                    </div>
                </div>


                <!-- Sidebar -->
                <div class="sidebar-review">
                    <div class="profile-section-review">
                        <img src="PImageResenas/Retrato1.jpg"
                            alt="profile" class="profile-pic-review">
                        <div class="profile-info-review">
                            <span class="username-review">Santiago Villada</span>
                            <span class="sub-text-review">Santiago Villada</span>
                        </div>
                        <button class="switch-btn-review" data-username="Santiago Villada"><i
                                class="fa-solid fa-eye"></i></button>
                    </div>
                    <div class="profile-section-review">
                        <img src="PImageResenas/Retrato1.jpg"
                            alt="profile" class="profile-pic-review">
                        <div class="profile-info-review">
                            <span class="username-review">Mateo Villada</span>
                            <span class="sub-text-review">Mateo Villada</span>
                        </div>
                        <button class="switch-btn-review" data-username="Mateo Villada"><i
                                class="fa-solid fa-eye"></i></button>
                    </div>
                    <div class="profile-section-review">
                        <img src="PImageResenas/Retrato1.jpg"
                            alt="profile" class="profile-pic-review">
                        <div class="profile-info-review">
                            <span class="username-review">Miguel Villada</span>
                            <span class="sub-text-review">Miguel Villada</span>
                        </div>
                        <button class="switch-btn-review" data-username="Miguel Villada"><i
                                class="fa-solid fa-eye"></i></button>
                    </div>
                    <div class="profile-section-review">
                        <img src="PImageResenas/Retrato1.jpg"
                            alt="profile" class="profile-pic-review">
                        <div class="profile-info-review">
                            <span class="username-review">eloears</span>
                            <span class="sub-text-review">eloears</span>
                        </div>
                        <button class="switch-btn-review"><i class="fa-solid fa-eye"></i></button>
                    </div>
                    <div class="profile-section-review">
                        <img src="PImageResenas/Retrato1.jpg"
                            alt="profile" class="profile-pic-review">
                        <div class="profile-info-review">
                            <span class="username-review">eloears</span>
                            <span class="sub-text-review">eloears</span>
                        </div>
                        <button class="switch-btn-review"><i class="fa-solid fa-eye"></i></button>
                    </div>

                </div>
            </div>
    </main>

    <?php
    // Inclusión del footer
    require_once 'Layout/Footer.php';
    ?>
    <script src="Script_Header"></script>
    <script src="Script_Resenas"></script>
</body>

</html>