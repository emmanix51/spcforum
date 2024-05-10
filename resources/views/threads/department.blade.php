<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PIE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
              extend: {
                colors: {
                  spcmain: "#630809",
                },
              },
            },
          };
    </script>
    <link rel="stylesheet" href="./assets/css/threads.css" />
</head>
<style>
    * {
        border: 0px;
        padding: 0px;
        margin: 0px;
        font-family: Arial, Helvetica, sans-serif;
        list-style: none;
    }

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

        margin: auto 15px;
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
        position: absolute;
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
        width: 115px;
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

    .list-left {
        font-size: 14px;
        /* border-top: 1px solid black; */
        border-bottom: 1px solid black;
        margin: 0px auto 14px auto;
        width: 213px;
        height: 41px;
        align-content: center;
    }

    .list-left1 {
        font-size: 14px;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        margin: 0px auto 14px auto;
        width: 213px;
        height: 41px;
        align-content: center;
        background-color: white;
    }

    /* inside right container */
    .right-Container {
        margin-left: 255px;
        width: 1132px;
        height: 100%px;
    }

    .rContainer-Content {
        width: 1032px;
        height: 198px;
        margin-top: 14px;
        border-bottom: 1px solid black;
    }

    .cover-Pic {
        overflow: hidden;
        margin: auto;
        background-color: rgb(233, 233, 233);
        width: 978px;
        height: 157px;
        border-radius: 19px;
        display: flex;
        align-content: center;
        justify-content: center;
    }

    .department-Pic {
        width: 93px;
        height: 93px;
        margin: -60px 0px 0px 40px;
        border-radius: 50px;
        background-color: #d9d9d9;
    }

    .thread {
        margin-top: 10px;
        width: 650px;
        height: 346px;
        background-color: #2722229f;
        border-radius: 27px;
    }

    .rcont-bottom {
        padding-top: 10px;
        margin-left: 30px;
        width: 690px;
        height: 440px;
        border-right: 1px solid black;
    }

    .flex {
        display: flex;
    }

    .quote {
        margin: 30px;
        width: 291px;
        height: 126px;
        text-align: center;
        font-style: italic;
    }

    .Img {
        max-width: 100%;
        max-height: 100%;
        border-radius: 50px;
    }

    .coverImg {
        max-width: 100%;
        max-height: 100%;
        border-radius: 19px;
    }
</style>

<body>
    <div class="navBar">
        <div class="logo">
            <img src="{{asset($collegelogo)}}" alt="Logo" class="nav-Logo" />
            <p class="logo-Name">{{$department}}</p>
        </div>
        <div class="nav-cont">
            <a href="{{ route('threads.create') }}" class="hover:text-spcmain flex flex-row items-center">
                <button type="submit"
                    class="h-10 w-20 text-white rounded-lg bg-spcmain hover:bg-white hover:border-2 hover:text-black">
                    Create
                </button>
            </a>

            <a href="{{route('dashboard')}}" class="nav-opt">Dashboard</a>
            <a href="{{route('users.show')}}" class="nav-opt">Profile</a>
            <a href="{{route('logout')}}" class="nav-opt">Logout</a>
        </div>
    </div>
    <div class="container-General">
        <div class="left-Container">

            <div class="departments">
                <p class="Lcontent">Departments</p>
                <ul>
                    <li class="list-left"><a href="{{route('department','ccs')}}">CCS</a></li>
                    <li class="list-left"><a href="{{route('department','coc')}}">COC</a></li>
                    <li class="list-left"><a href="{{route('department','coe')}}">COE</a></li>
                    <li class="list-left"><a href="{{route('department','cas')}}">CAS</a></li>
                    <li class="list-left"><a href="{{route('department','ced')}}">CED</a></li>
                    <li class="list-left"><a href="{{route('department','cba')}}">CBA</a></li>
                </ul>
            </div>
        </div>
        <div class="right-Container">
            <div class="rContainer-Content">
                <div class="cover-Pic">
                    <img src="{{asset($collegelogo)}}" alt="ccsCoverPicture" class="coverImg" />
                </div>
                <div class="department-Pic">
                    <img src="{{asset($collegelogo)}}" alt="ccsPicture" class="Img" />
                </div>
            </div>
            <div class="flex">
                <div class="rcont-bottom">
                    <div class="thread">
                        @foreach ($threads as $thread)
                        @include('shared.thread-card')
                        @endforeach

                        <div class="mx-4">{{ $threads->links() }}</div>
                    </div>
                </div>
                <div class="quote">
                    <p>
                        {{$quote}}
                    </p>
                </div>
            </div>

        </div>
    </div>
</body>

</html>