<html>
<head>
  <title>Portofolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap">
</head>
<body class="bg-gray-200">
  <div id="app" class="min-h-screen flex flex-col">
    <header class="bg-gray-300 p-4 flex justify-between items-center">
      <div class="text-4xl font-bold" style="font-family: 'Roboto', sans-serif;">PORTOFOLIO</div>
      <nav class="space-x-4 text-xl" style="font-family: 'Roboto', sans-serif;">
        <a href="#" class="text-red-700">HOME</a>
        <a href="#" class="text-red-700">ABOUT ME</a>
        <a href="#" class="text-red-700">FAMILY</a>
        <a href="#" class="text-red-700">CONTACT</a>
      </nav>
    </header>
    <main class="flex-grow bg-red-700 text-white p-8 flex items-center justify-center">
      <div class="max-w-4xl mx-auto flex items-center">
        <div class="mr-8">
          <p class="text-lg">HI NAMA SAYA</p>
          <h1 class="text-4xl font-bold" style="font-family: 'Roboto', sans-serif;">MEYLA ARISTA JATI PRAMESTI</h1>
          <p class="text-lg">SAYA SEKOLAH DI SMK TELKOM PURWOKERTO</p>
        </div>
        <div class="w-48 h-48 rounded-lg overflow-hidden">
          <img src="https://placehold.co/192x192" alt="A person posing for a photo" class="w-full h-full object-cover">
        </div>
      </div>
    </main>
  </div>
  <script src="https://registry.npmmirror.com/vue/3.3.11/files/dist/vue.global.js"></script>
  <script>
    const { createApp, ref } = Vue
    createApp({
      setup() {
        const message = ref('Hello vue!')
        return {