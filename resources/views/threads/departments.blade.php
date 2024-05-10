<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PIE</title>
    <link rel="stylesheet" href="./assets/css/dashboard.css" />
</head>
<style>
    .navBar {
        margin: 0px auto 0px auto;
        width: 95%;
        height: 74px;
        border-bottom: 1px solid black;
        justify-content: space-between;
        display: flex;
    }

    .logo {
        font-weight: bold;
        display: flex;
        align-content: center;
        align-items: center;
    }

    .nav-cont {
        display: flex;
    }

    .nav-opt {
        font-size: 14px;
        width: 50px;
        margin: auto 10px auto 10px;
    }

    .logo-Name {
        margin-left: 9px;
    }

    .nav-Logo {
        height: 48px;
        width: 52px;
    }

    .container-General {
        display: flex;
        margin: 0px auto 0px auto;
        width: 95%;
    }

    .left-Container {
        width: 255px;
        height: 664px;
        background-color: #f5f1f1;
        border-right: 1px solid black;
        display: block;
        justify-content: center;
        text-align: center;
    }

    /* inside left container */
    .Lcont-img {
        width: 36px;
        height: 33px;
        margin-right: 5px;
    }

    .Lcontainer-logo {
        height: 44px;
        width: 136px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        font-size: 14px;
        background-color: white;
        border-radius: 9px;
        margin: 14px auto 0px auto;
    }

    a {
        color: rgb(0, 0, 0);
        text-decoration: none;
    }

    a:hover {
        font-weight: bold;
    }

    a:active {
        background-color: #f5f1f1d3;
        transform: translateY(1px);
    }

    .Lcontent {
        margin: 12px auto 22px auto;
        width: 213px;
        height: 41px;
        border-top: 1px solid black;
        padding-top: 10px;
        font-weight: bold;
        font-size: 16px;
    }

    li {
        font-size: 14px;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        margin: 0px auto 14px auto;
        width: 213px;
        height: 41px;
        align-content: center;
    }

    /* inside right container */
    .right-Container {
        width: 1132px;
        height: 100%px;
        border-right: 1px solid black;
    }

    .welcome-Img {
        height: 287px;
        width: 450px;
    }

    .rContainer-Content {
        margin: auto;
        padding-top: 64px;
        width: 653px;
        height: 252px;
        font-weight: bold;
        text-align: center;
    }

    h2 {
        margin-top: 30px;
    }
</style>

<body>
    <div class="navBar">
        <div class="logo">
            <img src="./assets/images/logo.png" alt="Logo" class="nav-Logo" />
            <p class="logo-Name">PIE</p>
        </div>
        <div class="nav-cont">
            <a href="profile.html" class="nav-opt">Profile</a>
            <a href="index.html" class="nav-opt">Logout</a>
        </div>
    </div>
    <div class="container-General">
        <div class="left-Container">
            <div class="Lcontainer-logo">
                <img src="./assets/images/logo.png" alt="Register" class="Lcont-img" />
                <p>Dashboard</p>
            </div>
            <div class="departments">
                <p class="Lcontent">Departments</p>
                <ul>
                    <li class="list-left"><a href="ccs.html">CCS</a></li>
                    <li class="list-left"><a href="coc.html">COC</a></li>
                    <li class="list-lef1"><a href="coe.html">COE</a></li>
                    <li class="list-left"><a href="cas.html">CAS</a></li>
                    <li class="list-left"><a href="ced.html">CED</a></li>
                </ul>
            </div>
        </div>
        <div class="right-Container">
            <div class="rContainer-Content">
                <img src="./assets/images/welcome.png" alt="Welcome Picture" class="welcome-Img" />
                <p>
                    Welcome to PIE, your virtual hub for all things St. Peters College!
                    Whether you're an alumni reminiscing about the good old days, a
                    current student eager to stay updated, or a prospective student
                    seeking insights into campus life, PIE is your go-to destination.
                    Here, threads of memories intertwine with updates on campus
                    happenings, creating a vibrant tapestry of our school's rich history
                    and present-day vibrancy. Join us in this digital space to connect,
                    engage, and share in the spirit of St. Peters College. Let's
                    explore, reminisce, and celebrate the past, present, and future
                    together!
                </p>
                <h2>
                    Select the respective department you wish to see on the sidebar
                </h2>
            </div>
        </div>
    </div>
</body>

</html>