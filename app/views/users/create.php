<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center p-6 bg-gradient-to-br from-[#3e2723] via-[#5d4037] to-[#795548]">

  <div class="backdrop-blur-md bg-white/10 p-10 rounded-2xl shadow-2xl w-full max-w-md border border-white/20">
    <h1 class="text-4xl font-extrabold text-center mb-8 text-amber-300 tracking-wider drop-shadow-lg">
      Create User
    </h1>

    <form action="<?= site_url('users/create'); ?>" method="POST" class="space-y-6">
      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-semibold text-amber-100 mb-2">Username</label>
        <input 
          type="text" 
          name="username" 
          id="username" 
          required 
          class="w-full px-4 py-3 rounded-lg border-2 border-white/30 bg-white/10 text-white placeholder-amber-200 focus:outline-none focus:ring-2 focus:ring-amber-400 transition"
          placeholder="Enter username"
        >
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-semibold text-amber-100 mb-2">Email</label>
        <input 
          type="email" 
          name="email" 
          id="email" 
          required 
          class="w-full px-4 py-3 rounded-lg border-2 border-white/30 bg-white/10 text-white placeholder-amber-200 focus:outline-none focus:ring-2 focus:ring-amber-400 transition"
          placeholder="Enter email"
        >
      </div>

      <!-- Submit Button -->
      <button 
        type="submit" 
        class="w-full bg-amber-400 hover:bg-amber-500 text-[#3e2723] font-bold py-3 px-4 rounded-lg shadow-lg transition duration-300 transform hover:scale-105"
      >
        Save User
      </button>
    </form>
  </div>

</body>
</html>
