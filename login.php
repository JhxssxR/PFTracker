

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>PFTracker - Sign In</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-b from-white to-slate-50 flex items-start justify-center py-12">
  <div class="w-full max-w-md">
    <div class="text-center mb-6">
      <div class="inline-flex items-center justify-center w-14 h-14 rounded-xl bg-gradient-to-br from-purple-500 to-violet-600 shadow-lg">
        <!-- SVG Icon -->
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white">
          <path d="M3 11c0-2.761 2.239-5 5-5h1" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M21 11c0 2.761-2.239 5-5 5H8c-2.761 0-5-2.239-5-5 0-1.528.678-2.897 1.745-3.849L7 5v-1a1 1 0 0 1 1-1h3" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="17.5" cy="8.5" r="0.8" fill="white"/>
          <path d="M9 14v2" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <h1 class="mt-4 text-2xl font-semibold text-slate-800">PFTracker</h1>
      <p class="text-sm text-slate-500">Personal Financial Suite</p>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
      <h2 class="text-center text-2xl font-medium text-slate-800 mb-2">Welcome</h2>
      <p class="text-center text-sm text-slate-500 mb-6">Sign in to your account or create a new one</p>

      <?php if (!empty($_SESSION['error'])): ?>
        <div class="mb-4 text-sm text-red-600 bg-red-100 p-2 rounded"><?=htmlspecialchars($_SESSION['error']); unset($_SESSION['error']);?></div>
      <?php endif; ?>

      <form action="signin_process.php" method="post" class="space-y-4">
        <div>
          <label class="text-xs font-medium text-slate-600">Email</label>
          <input type="email" name="email" required class="mt-1 block w-full rounded-lg border border-slate-200 bg-slate-50 px-3 py-2 text-sm" placeholder="Enter your email" />
        </div>

        <div>
          <label class="text-xs font-medium text-slate-600">Password</label>
          <div class="relative">
            <input type="password" id="signin_password" name="password" required class="mt-1 block w-full rounded-lg border border-slate-200 bg-slate-50 px-3 py-2 pr-10 text-sm" placeholder="Enter your password" />
            <button type="button" onclick="togglePass('signin_password', this)" class="absolute right-2 top-2 text-slate-500 text-sm">Show</button>
          </div>
        </div>

        <div>
          <button type="submit" class="w-full py-3 rounded-lg bg-slate-900 text-white font-medium">Sign In</button>
        </div>

        <div class="flex items-center justify-center gap-2 text-sm text-slate-400">
          <hr class="w-1/4 border-slate-200"> OR <hr class="w-1/4 border-slate-200">
        </div>

        <!-- DEMO MODE BUTTON -->
        <div>
          <a href="demo.php" class="block w-full text-center py-3 rounded-lg border border-slate-200 bg-white hover:bg-slate-100 transition text-sm font-medium">
            Try Demo Mode
          </a>
        </div>

        <div class="text-center text-sm text-slate-500">
          Don’t have an account? <a href="signup.php" class="text-indigo-600">Create one</a>
        </div>
      </form>
    </div>

    <p class="text-center text-xs text-slate-400 mt-4">
      By continuing, you agree to our <a href="#" class="text-indigo-600">Terms of Service</a> and
      <a href="#" class="text-indigo-600">Privacy Policy</a>
    </p>
  </div>

  <script>
    function togglePass(id, btn) {
      const el = document.getElementById(id);
      if (el.type === 'password') { el.type = 'text'; btn.innerText = 'Hide'; }
      else { el.type = 'password'; btn.innerText = 'Show'; }
    }
  </script>
</body>
</html>
