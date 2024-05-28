<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
</head>

<style>
    .header-logo img {
        max-height: 60px;
    }
    .Btn {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background-color: #ef233c;
}

/* plus sign */
.sign {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sign svg {
  width: 17px;
}

.sign svg path {
  fill: white;
}
/* text */
.text {
  position: absolute;
  right: 0%;
  width: 0%;
  opacity: 0;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  transition-duration: .3s;
}
/* hover effect on button width */
.Btn:hover {
  width: 125px;
  border-radius: 40px;
  transition-duration: .3s;
}

.Btn:hover .sign {
  width: 30%;
  transition-duration: .3s;
  padding-left: 20px;
}
/* hover effect button's text */
.Btn:hover .text {
  opacity: 1;
  width: 70%;
  transition-duration: .3s;
  padding-right: 10px;
}
/* button click effect*/
.Btn:active {
  transform: translate(2px ,2px);
}
@import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

body {
    font-family: "Roboto", sans-serif;
    background: #E6E9ED;
    min-height: 100vh;
    position: relative;
}
.cd__main{
   display: block !important;
}
.notification-ui a:after {
    display: none;
}

.notification-ui_icon {
    position: relative;
}

.notification-ui_icon .unread-notification {
    display: inline-block;
    height: 7px;
    width: 7px;
    border-radius: 7px;
    background-color: #66BB6A;
    position: absolute;
    top: 7px;
    left: 12px;
}

@media (min-width: 900px) {
    .notification-ui_icon .unread-notification {
        left: 20px;
    }
}

.notification-ui_dd {
    padding: 0;
    border-radius: 10px;
    -webkit-box-shadow: 0 5px 20px -3px rgba(0, 0, 0, 0.16);
    box-shadow: 0 5px 20px -3px rgba(0, 0, 0, 0.16);
    border: 0;
    max-width: 400px;
}

@media (min-width: 900px) {
    .notification-ui_dd {
        min-width: 400px;
        position: absolute;
        left: -192px;
        
    }
}



.notification-ui_dd .notification-ui_dd-header {
    border-bottom: 1px solid #ddd;
    padding: 15px;
}

/* .notification-ui_dd .notification-ui_dd-header h3 {
    margin-bottom: 0;
} */

/* .notification-ui_dd .notification-ui_dd-content {
    max-height: 500px;
    overflow: auto;
} */

.notification-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 20px 0;
    margin: 0 25px;
    border-bottom: 1px solid #ddd;
}

/* .notification-list--unread {
    position: relative;
} */

/* .notification-list--unread:before {
    content: "";
    position: absolute;
    top: 0;
    left: -25px;
    height: calc(100% + 1px);
    border-left: 2px solid #29B6F6;
} */

.notification-list .notification-list_img img {
    height: 48px;
    width: 48px;
    border-radius: 50px;
    margin-right: 20px;
}

.notification-list .notification-list_detail p {
    margin-bottom: 5px;
    line-height: 1.2;
}

/* .notification-list .notification-list_feature-img img {
    height: 48px;
    width: 48px;
    border-radius: 5px;
    margin-left: 20px;
}
.white-mode {
    text-decoration: none;
    padding: 17px 40px;
    background-color: yellow;
    border-radius: 3px;
    color: black;
    transition: .35s ease-in-out;
    position: fixed;
    left: 15px;
    bottom: 15px
} */
#alertDropdownLink{
    display: flex;
align-items: center;
justify-content: flex-start;
width: 45px;
height: 45px;
border: none;
border-radius: 50%;
cursor: pointer;
position: relative;
overflow: hidden;
transition-duration: .3s;
box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
background-color: #335c67;
margin-left: 165px;
margin-right: 20px; /* Adjust the value as needed */

  
}
.notif {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.notif svg {
  width: 17px;
}

.notif svg path {
  fill: white;
}
#ttt{
    background-color: #335c67;
    border-color: #335c67;
}
.notification-count {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: red;
    color: white;
    border-radius: 50%;
    padding: 3px 6px;
    font-size: 10px;
}

</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head content goes here -->
</head>

<style>
    /* Your styles go here */
</style>

<body>

    <header class="p-3 d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <a href="/">
                <img src='/images/log.png' alt="Logo" class="h-20 w-auto rounded-full">
            </a>
        </div>
        
        <div id="logoutButtonContainer" style="display: inline; " class="p-3 d-flex justify-content-between items-center ">
            <div class="dropdown">
                <a href="#" role="button" id="alertDropdownLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="notif">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                        </svg>
                      
                        @if($stagiaireAlertCount > 0)
                            <span class="notification-count">{{ $stagiaireAlertCount }}</span>
                        @endif 
                    </div>
                </a>
            
                <div class="dropdown-menu notification-ui_dd show" aria-labelledby="alertDropdownLink">
                <div class="notification-ui_dd-header">
                    <h3 class="text-center">Notifications</h3>
                </div>
                <div class="notification-ui_dd-content">
                    <!-- Sample alert item -->
                    @foreach ($stagiaireAlert as $stagiaireAlert)
                    <div class="notification-list notification-list--unread">
                        <div class="notification-list_img">
                            <img src="{{ asset('images/' . $stagiaireAlert->photo) }}" alt="user">
                        </div>
                        <div class="notification-list_detail">
                            <p><b>{{ $stagiaireAlert->nom }} {{ $stagiaireAlert->prenom }}</b> new stagiaire</p>
                            <p><small>{{ $stagiaireAlert->created_at }}</small></p>
                        </div>
                        <div class="notification-list_feature-img d-flex justify-content-between items-center gap-1">
                          <a href="cancelStagire/{{ $stagiaireAlert->id }}">
                            <button class=" btn btn-danger">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                                <path d="M15 8a6.973 6.973 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
                              </svg>
                               
                              </button>
                        </a> <br> &nbsp;
    
                        <a  href="validationStagire/{{ $stagiaireAlert->id }}">
                            <button class="btn btn-success">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                              </svg>
                               
                              </button>
                        </a><br>&nbsp;
                        </div>
                    </div>
                    @endforeach
                    <!-- Add more alert items as needed -->
                </div>
                <div class="notification-ui_dd-footer">
                    <a href="{{ url('/listedatent') }}" class="btn btn-danger btn-block" id="ttt">View All Notifications</a>
                </div>
            </div>
        </div>
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                  
                    
                    <button class="Btn">
                        <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                        <div class="text">Logout</div>
                    </button>
                    
                </form>
            @endauth
        </div>
    </header>

    <!-- Your other HTML content goes here -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Assuming you have a variable `isLoggedIn` that is true if the user is logged in
        var isLoggedIn = true; // Change this to reflect the actual login status

        function updateButtonVisibility() {
            var logoutButtonContainer = document.getElementById('logoutButtonContainer');

            if (isLoggedIn) {
                logoutButtonContainer.style.display = 'block';
            } else {
                logoutButtonContainer.style.display = 'none';
            }
        }

        // Call the function to set initial visibility
        updateButtonVisibility();
    </script>
     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

     <!-- Core theme JS-->
     <script src="js/scripts.js"></script>
     <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
</body>

</html>