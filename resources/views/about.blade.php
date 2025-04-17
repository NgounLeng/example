<x-layout>
<x-slot:heading>About page</x-slot:heading>
 <!-- Hero Section -->
 <section class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-r from-purple-100 via-white to-blue-100 text-center">
    <div class="max-w-4xl px-6">
      <img src="https://png.pngtree.com/png-vector/20220618/ourmid/pngtree-batman-superhero-fictional-icon-costume-png-image_5209167.png" alt="Male Character" class="w-32 h-32 rounded-full mx-auto mb-6">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Hi, I'm [Nobody]</h1>
      <p class="text-lg text-gray-600 mb-6">
        I specialize in creating websites, educational and more. As a broke guy(still) I know how you feel.
        I'm Nobody but I can help you become Somebody.
      </p>
      <a href="#skills" class="inline-block bg-purple-600 text-white px-6 py-3 rounded-xl text-lg hover:bg-purple-700 transition-all">Why I do that?</a>
    </div>
  </section>

<!-- Why I do that Section -->


  <!-- Skills Section -->
  <section id="skills" class="py-24 px-6 md:px-20 bg-white">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold mb-4 text-blue-900">Why?</h2>
      <p class="text-gray-600">Cause I am Batman,I like help Weaker people beat Stronger People.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-center">
      <div>
        <img src="https://miro.medium.com/v2/resize:fit:1400/0*7VyEZgzwUhQMeBqb" alt="Skill 1" class="mx-auto mb-4">
        <h3 class="text-2xl font-semibold mb-2">Web Development</h3>
        <p class="text-gray-600">Struggling in University cause no professor talk to me, So Youtube is only choice. Also wrote code on papers casue I'm broke.</p>
      </div>
      <div>
        <img src="https://miro.medium.com/v2/resize:fit:1400/0*7VyEZgzwUhQMeBqb" alt="Skill 2" class="mx-auto mb-4">
        <h3 class="text-2xl font-semibold mb-2">Graphic Designer</h3>
        <p class="text-gray-600">I want to create and see my unreal imagination ideas and hopefully make it possible.</p>
      </div>
      <div>
        <img src="https://miro.medium.com/v2/resize:fit:1400/0*7VyEZgzwUhQMeBqb" alt="Skill 3" class="mx-auto mb-4">
        <h3 class="text-2xl font-semibold mb-2">Graphic Design</h3>
        <p class="text-gray-600">Designing engaging graphics and user-friendly interfaces that enhance the user experience.</p>
      </div>
      <div>
        <img src="https://miro.medium.com/v2/resize:fit:1400/0*7VyEZgzwUhQMeBqb" alt="Skill 3" class="mx-auto mb-4">
        <h3 class="text-2xl font-semibold mb-2">Microsoft office</h3>
        <p class="text-gray-600">Designing engaging graphics and user-friendly interfaces that enhance the user experience.</p>
      </div>
    </div>
  </section>

  <!-- Slideshow Section -->
  <!-- Contact Section -->
   <section class="py-24 px-6 md:px-20 bg-gradient-to-r from-white via-gray-100 to-white">
      <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4 text-blue-900">You can find me in all this platform</h2>
          <p class="text-gray-600">If you want to collaborate or just say hi, reach out to me!</p>
        </div>
      <div class=" my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
        <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
          <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="card-image" />
        </div>
        <div class="p-4">
          <h6 class="mb-2 text-slate-800 text-xl font-semibold">
            Website Review Check
          </h6>
          <p class="text-slate-600 leading-normal font-light">
            The place is close to Barceloneta Beach and bus stop just 2 min by walk
            and near to &quot;Naviglio&quot; where you can enjoy the main night life in
            Barcelona.
          </p>
        </div>
        <div class="px-4 pb-4 pt-0 mt-2">
          <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
            Read more
          </button>
        </div>
      </div>  

      
   </section>
  <!-- <section id="contact" class="py-24 px-6 md:px-20 bg-gradient-to-r from-white via-gray-100 to-white">
    
    <div class="max-w-4xl mx-auto">
      <form action="#" method="POST" class="grid grid-cols-1 gap-6">
        <input type="text" name="name" placeholder="Your Name" class="p-4 border rounded-lg w-full" required>
        <input type="email" name="email" placeholder="Your Email" class="p-4 border rounded-lg w-full" required>
        <textarea name="message" placeholder="Your Message" class="p-4 border rounded-lg w-full" rows="4" required></textarea>
        <button type="submit" class="bg-purple-600 text-white px-6 py-3 rounded-xl text-lg hover:bg-purple-700 transition-all">Send Message</button>
      </form>
    </div>
  </section> -->


</x-layout>