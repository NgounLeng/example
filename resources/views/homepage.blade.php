<x-layout>
    
<x-slot:heading>Home page</x-slot:heading>

<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-100 via-white to-blue-100">
    <div class="text-center w-full px-6">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Expand Your Knowledge</h1>
      <p class="text-lg text-gray-600 mb-6">Discover insightful blogs, tips, and tutorials to boost your learning journey every day.</p>
      <a href="#explore" class="inline-block bg-purple-600 text-white px-6 py-3 rounded-xl text-lg hover:bg-purple-700 transition-all">Explore Now</a>
    </div>
  </section>

<!-- Section: Word Mastery -->
<section id="explore" class="py-24 px-4 md:px-10 lg:px-20 bg-white">
    <div class="w-full flex flex-col md:flex-row gap-12 items-center">
      <img src="https://images3.alphacoders.com/131/1318914.png" alt="Word Mastery" class="w-full md:w-1/2 rounded-2xl shadow-lg" />
      <div class="md:w-1/2">
        <h2 class="text-4xl font-bold mb-4 text-blue-900">Master Microsoft Word</h2>
        <p class="text-gray-600 mb-4">From formatting to templates, unlock the full potential of Word. Learn shortcuts, layouts, and design techniques that make your documents shine professionally.</p>
        <a href="#" class="text-blue-600 hover:underline font-semibold">Discover Word Tips →</a>
      </div>
    </div>
  </section>

  <!-- Section: Excel Genius -->
  <section class="py-24 px-4 md:px-10 lg:px-20 bg-blue-50">
    <div class="w-full flex flex-col md:flex-row-reverse gap-12 items-center">
      <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/370767-hero-background-1600x616?resMode=sharp2&op_usm=1.5,0.65,15,0&wid=2000&hei=770&qlt=100&fmt=png-alpha&fit=constrain" alt="Excel Mastery" class="w-full md:w-1/2 rounded-2xl shadow-lg" />
      <div class="md:w-1/2">
        <h2 class="text-4xl font-bold mb-4 text-green-800">Excel Like a Pro</h2>
        <p class="text-gray-600 mb-4">PivotTables, Formulas, Dashboards – level up your Excel game with hands-on tutorials, cheat sheets, and real business use cases.</p>
        <a href="#" class="text-green-700 hover:underline font-semibold">Explore Excel Tutorials →</a>
      </div>
    </div>
  </section>

  <!-- Section: PowerPoint Design -->
  <section class="py-24 px-4 md:px-10 lg:px-20 bg-purple-50">
    <div class="w-full flex flex-col md:flex-row gap-12 items-center">
      <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/key-features-2-351314?resMode=sharp2&op_usm=1.5,0.65,15,0&wid=832&hei=354&qlt=100&fmt=png-alpha&fit=constrain" alt="PowerPoint Design" class="w-full md:w-1/2 rounded-2xl shadow-lg" />
      <div class="md:w-1/2">
        <h2 class="text-4xl font-bold mb-4 text-purple-900">Powerful Presentations</h2>
        <p class="text-gray-600 mb-4">Stand out with PowerPoint. Learn how to build elegant slides, use custom animations, and deliver impact-driven stories.</p>
        <a href="#" class="text-purple-700 hover:underline font-semibold">Learn PowerPoint Tricks →</a>
      </div>
    </div>
  </section>

  <!-- Section: Blog & Tips -->
  <section class="py-24 px-4 md:px-10 lg:px-20 bg-gradient-to-r from-white via-gray-100 to-white">
    <div class="w-full text-center">
      <h2 class="text-4xl font-bold mb-6">Featured Blog Articles</h2>
      <p class="text-gray-600 max-w-3xl mx-auto mb-12">Stay updated with the latest articles, tips, and tutorials from productivity experts, tech enthusiasts, and Office pros.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition">
          <h3 class="text-xl font-semibold mb-2">Top 10 Excel Formulas</h3>
          <p class="text-gray-500 mb-3">Boost your spreadsheet speed with these go-to formulas.</p>
          <a href="#" class="text-blue-600 hover:underline">Read More →</a>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition">
          <h3 class="text-xl font-semibold mb-2">PowerPoint Slide Design Rules</h3>
          <p class="text-gray-500 mb-3">Create slides that catch attention and communicate clearly.</p>
          <a href="#" class="text-purple-600 hover:underline">Read More →</a>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition">
          <h3 class="text-xl font-semibold mb-2">Word Formatting Secrets</h3>
          <p class="text-gray-500 mb-3">Learn how to style documents like a pro with hidden formatting features.</p>
          <a href="#" class="text-blue-600 hover:underline">Read More →</a>
        </div>
      </div>
    </div>
  </section>

</x-layout>  
