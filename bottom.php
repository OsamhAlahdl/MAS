
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>

<style>
    
    .bottom-navbar {
        position: fixed;
        bottom: 0px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        width: 100%;
        background: #fff;
        border-radius: 30px 30px 0px 0px;
        padding: 10px 0px;
        box-shadow: 0px 0px 30px 0px rgba(0,0,0,.05);
    }
    .bottom-navbar button {
        width: 60px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 0px;
        background: transparent;
        border-radius: 20px;
        transition: all .25s ease;
    }

    .bottom-navbar button.active::after {
        color: rgb(232, 76, 79);
    }
    .bottom-navbar button i {
        font-size: 1.5rem;
        pointer-events: none;
    }
    .con-effect {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0px;
        left: 0px;
        overflow: hidden;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .effect {
        background: rgba(232, 76, 79, .15);
        width: 60px;
        height: 50px;
        position: absolute;
        left: 33px;
        border-radius: 18px;
    }
    @media (min-width: 600px) {
        .bottom-navbar {
        width: 5%;
        height: 620px;
        position: fixed;
        bottom: 0px;
        display: block;
        border-radius: 10px 30px 0px 0px;
    }
    .bottom-navbar button {
        margin-top: 22px;
        margin-bottom: 40px;
    }
    .bottom-navbar button.active{
        color: rgb(232, 76, 79);
    }
    .effect {
        background: #fff;
        width: 0px;
        height: 0px;

    }
}


</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="bottom-navbar">
        <div class="con-effect">
            <div class="effect"></div>
        </div>
        <button >
            <i class='bx bx-home'></i>
        </button>
        <button >
            <i class='bx bx-chat' ></i>
        </button>
        <button>
            <i class='bx bx-plus' ></i>
        </button>
        <button>
            <i class='bx bx-shopping-bag' ></i>
        </button>
        <button>
            <i class='bx bx-user' ></i>
        </button>
    </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js'></script>
  <script  src="bottom.js"></script>

</body>
</html>
