<div class="side-bar">
    <div id="close-btn">
        <i class="fas fa-times"></i>
    </div>
    <div class="profile">
        <img src="images/pic-1.jpg" class="image" alt="">
        <h3 class="name">shaikh anas</h3>
        <p class="role">student</p>
        <a href="{{ route('profile') }}" class="btn">view profile</a>
    </div>
    <nav class="navbar">
        <a href="{{ route('home') }}"><i class="fas fa-home"></i><span>home</span></a>
        <a href="{{ route('about') }}"><i class="fas fa-question"></i><span>about</span></a>
        <a href="{{ route('courses') }}"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
        <a href="{{ route('teachers') }}"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
        <a href="{{ route('contact') }}"><i class="fas fa-headset"></i><span>contact us</span></a>
    </nav>
</div>
