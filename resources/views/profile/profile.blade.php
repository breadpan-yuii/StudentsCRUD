<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My profile | Pinapagawa</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css'])
</head>
<body>

  <header class="app-header">
    <div class="container py-2">
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
        <a class="brand" href="index.html">
          <span class="brand-mark">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
          </span>
          Pinapagawa
        </a>
        <a href="{{ url('/') }}" class="btn-logout">Posts</a>
      </div>
    </div>
  </header>

  <main class="container section-pad">
    <div class="row g-4">
      <section class="panel profile-card col-12 col-lg-5">
        <div class="profile-card-body">
          <span class="avatar profile-avatar">JD</span>
          <h1 class="h3 mt-3 mb-1">Juan Dela Cruz</h1>
          <p class="mb-1">IT Support Agent</p>
          <span class="profile-handle">@juandelacruz</span>
        </div>
      </section>

      <section class="panel col-12 col-lg-7">
        <div class="panel-header d-flex justify-content-between align-items-center gap-2">
          <h2>My Profile</h2>
          <a class="btn btn-primary btn-sm text-white" href="create-post.html">Create post</a>
        </div>
        <div class="panel-body profile-details">
          <div>
            <span class="profile-label">Email</span>
            <span>juan.delacruz@pinapagawa.test</span>
          </div>
          <div>
            <span class="profile-label">Posts</span>
            <span>24 published posts</span>
          </div>
          <div>
            <span class="profile-label">Member since</span>
            <span>January 2026</span>
          </div>
        </div>
      </section>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
      <span>&copy; 2026 Pinapagawa.</span>
      <a href="{{ url('/') }}">Posts</a>
    </div>
  </footer>
</body>
</html>
