<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pinapagawa Posts</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css'])
</head>
<body>

  <header class="app-header">
    <div class="container py-2">
      <nav class="d-flex flex-wrap justify-content-between align-items-center gap-3" aria-label="Account navigation">
        <a class="brand" href="index.html">
          <span class="brand-mark">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
          </span>
          Pinapagawa
        </a>
        <div class="d-flex align-items-center gap-2">
          <a href="{{ url('/profile') }}" class="btn-logout">My profile</a>
          <a href="{{ url('/login') }}" class="btn-logout">Log out</a>
        </div>
      </nav>
    </div>
  </header>

  <main class="section-pad post-section">
    <div class="container">
      <div class="post-feed">
        <div id="create-post" class="feed-heading">
          <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3">
            <div>
              <h1 class="h3 mb-1">Latest posts</h1>
              <p class="mb-0">Practical notes from the Pinapagawa team.</p>
            </div>
            <a class="btn btn-primary text-white" href="create-post.html">Create post</a>
          </div>
        </div>

      </div>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
      <span>&copy; 2026 Pinapagawa.</span>
      <a href="{{ url('/profile') }}">My Profile</a>
    </div>
  </footer>

</body>
</html>
