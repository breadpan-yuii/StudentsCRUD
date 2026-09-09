<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log in | Pinapagawa</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>

  <header class="site-header">
    <nav class="navbar navbar-light py-2">
      <div class="container-fluid">
        <a class="brand" href="login.html">Pinapagawa</a>
        <a class="btn btn-ghost btn-sm" href="register.html">Register</a>
      </div>
    </nav>
  </header>

  <main class="auth-shell d-flex flex-column flex-lg-row">

    <!-- Brand / context panel -->
    <section class="auth-aside col-lg-5">
      <a class="brand" href="index.html">
        <span class="brand-mark">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
        </span>
        Pinapagawa
      </a>

      <div class="my-5 my-lg-0">
        <h1 class="auth-headline">Welcome back.</h1>
        <p class="auth-sub mt-3">Sign in to access your dashboard.</p>
      </div>

    </section>

    <!-- Form panel -->
    <section class="auth-main col-lg-7">
      <div class="auth-card">
        <div class="auth-card-body">
          <h2 class="h4 mb-1">Log in</h2>
          <p class="mb-4">Enter your account details.</p>

          <form action="index.html" method="get" novalidate>
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Username or email</label>
              <input type="text" class="form-control" id="loginEmail" name="loginEmail" placeholder="you@email.com" autocomplete="username" required />
            </div>

            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <div class="input-with-action">
                <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter your password" autocomplete="current-password" required />
                <button type="button" class="password-toggle" data-password-toggle="loginPassword" aria-label="Show password" aria-pressed="false">
                  <svg data-icon="show" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8Z"/><circle cx="12" cy="12" r="3"/></svg>
                  <svg data-icon="hide" class="d-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a20.3 20.3 0 0 1 5.06-5.94M9.9 4.24A10.4 10.4 0 0 1 12 4c7 0 11 8 11 8a20.3 20.3 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><path d="M1 1l22 22"/></svg>
                </button>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberMe" />
                <label class="form-check-label" for="rememberMe">Remember me</label>
              </div>
              <a href="register.html" class="eyebrow-link">Register</a>
            </div>

            <button type="submit" class="btn btn-primary text-white w-100">Log in</button>
          </form>

          <p class="text-center mb-0" style="color: var(--text-muted); font-size: 0.9rem;">Need an account? <a href="register.html">Register</a></p>
        </div>
      </div>
    </section>

  </main>

  <footer class="site-footer">
    <div class="container d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
      <span>&copy; 2026 Pinapagawa.</span>
      <a href="register.html">Register</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
