<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Biltmore Print and Image Admin</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>{{ link_to_route('quotes.index', 'Quotes', [], ['class' => 'visible-xs-block']) }}</li>
          <li>{{ link_to_route('uploads.index', 'Uploads', [], ['class' => 'visible-xs-block']) }}</li>
          <li>{{ link_to_route('work.index', 'Work', [], ['class' => 'visible-xs-block']) }}</li>
          <li>{{ link_to_route('logout', 'Logout') }}</li>
        </ul>
      </div>
    </div>
  </nav>