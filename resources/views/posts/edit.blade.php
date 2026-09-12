<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit post | Pinapagawa</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css'])
</head>
<body>
  <header class="app-header">
    <div class="container py-2">
      <nav class="d-flex flex-wrap justify-content-between align-items-center gap-3" aria-label="Account navigation">
        <a class="brand" href="{{ url('/') }}"><span class="brand-mark">P</span>Pinapagawa</a>
        <a href="{{ url('/') }}" class="btn-logout">Posts</a>
      </nav>
    </div>
  </header>

  <main class="container section-pad">
    <div class="form-shell">
      <div class="mb-4">
        <h1 class="h3 mb-1">Edit post</h1>
        <p class="mb-0">Blank template for the post update form.</p>
      </div>
      <form action="#" method="post">
        <div class="mb-3">
          <label for="postTitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="postTitle" name="title" />
        </div>
        <div class="mb-4">
          <label for="postBody" class="form-label">Content</label>
          <textarea class="form-control" id="postBody" name="body" rows="8"></textarea>
        </div>
        <div class="d-flex gap-2">
          <button type="submit" class="btn btn-primary text-white">Save changes</button>
          <a href="{{ url('/') }}" class="btn btn-ghost">Cancel</a>
        </div>
      </form>
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
