<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Codeline.io</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Films</a></li>
      <li class="{{ request()->is('create') ? 'active' : '' }}"><a href="/create">Create film</a></li>
      <li class="{{ request()->is('register') ? 'active' : '' }}"><a href="/register">Register</a></li>
       <li class="{{ request()->is('login') ? 'active' : '' }}"><a href="/login">Login</a></li>
      <li><a href="/logout">Logout</a></li>
    </ul>
  </div>
</nav>