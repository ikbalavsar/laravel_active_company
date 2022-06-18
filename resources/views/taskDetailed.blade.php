<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Rokkitt:wght@200&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <title>Welcome to Active Company</title>
</head>

<body>


<div class="logo-box header">
    <a href="/project"><img src="img/logo.png" alt="Logo" class="logo-header"></a>
    <h1 class="section-name">Projects</h1>
    <a href="/completedProjects" class="completed-projects">Completed Projects</a>
    <div class="search">
        <input type="text" placeholder="Search" class="search-text">
        <img src="img/search.png" alt="Search" class="search-icon">
    </div>
    <a href="#"><img src="img/help.png" alt="Find Help" class="find-help" title="Find Help"></a>
    <a href="/myProfile"><img src="img/profile.png" alt="Profile" class="profile find-help" title="Profile"></a>
    <a href="#"><img src="img/notification.png" alt="Notifications" class="notification find-help"
                     title="Notifications"></a>
</div>


<div class="container">

    <div class="row ">
        <div class="col-auto nav-bar">

            <nav class="nav-bar-items">
                <ul>
                    <li class="items">
                        <a href="/projects" class="nav-bar-link"><img src="img/project.png" alt="Project"
                                                                          class="nav-bar-icon"><span class="nav-bar-text">
                                    Projects
                                </span></a>
                    </li>

                    <li class="items">
                        <a href="/myWork" class="nav-bar-link"><img src="img/myWork.png" alt="My Work"
                                                                        class="nav-bar-icon"><span class="nav-bar-text">
                                    My Work
                                </span></a>
                    </li>

                    <li class="items">
                        <a href="/people" class="nav-bar-link"><img src="img/ekip.png" alt="People"
                                                                        class="nav-bar-icon"><span class="nav-bar-text">
                                    People
                                </span></a>
                    </li>

                    <li class="items">
                        <a class="nav-bar-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <img src="img/logout.png" alt="Log Out"
                                 class="nav-bar-icon"><span class="nav-bar-text">
                                    Log out
                                </span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>

        </div>



        <div class="col-sm p-4 project-cards-detailed">
            <div class="card-content-detailed">
                <h2 class="line-1">Task-1 <span class="company-name">
                            from
                            <b>Company X </b>
                        </span></h2>
                <h5>Created By Kemal Koçyiğit</h5>
                <div class="card-info-detail">

                    <p>Project ID: #1928</p>
                    <p>Task ID: #3746</p>

                    <p>Created Date: 01/01/2022</p>
                    <p style="color: darkgreen;">Status: IN PROGRESS </p>
                    <p>Due Date : 01/01/2023</p>

                </div>

                <p class="project-info">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque hic maiores esse odio,
                    quibusdam nesciunt voluptatem nobis consectetur, omnis rerum dignissimos tenetur, odit
                    accusantium? Accusamus fugit asperiores tenetur doloribus ut?

                </p>

                <div class="task-updates-message">
                    <input type="text" placeholder="Write a comment.." class="task-updates-message-input">
                    <button class="task-updates-message-btn">Send</button>
                </div>

                <div class="tasks-updates-info">
                    <img src="img/man.png" alt="Team Member" class="tasks-updates-info-img">
                    <h3>Emre Ayar </h3>
                    <p class="tasks-updates-info-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
                        ducimus cum aliquid libero assumenda illum maiores ab aut! Temporibus veritatis beatae aut!
                        Sunt architecto quos voluptate dignissimos accusantium laudantium eveniet?</p>

                </div>

                <div class="tasks-updates-info">
                    <img src="img/girl.png" alt="Team Member" class="tasks-updates-info-img">
                    <h3>İkbal Avsar </h3>
                    <p class="tasks-updates-info-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
                        ducimus cum aliquid libero assumenda illum maiores ab aut! Temporibus veritatis beatae aut!
                        Sunt architecto quos voluptate dignissimos accusantium laudantium eveniet?</p>

                </div>



            </div>


        </div>




    </div>
</div>

<script src="js/star.js"></script>

</body>

</html>
