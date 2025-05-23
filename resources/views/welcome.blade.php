<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
   
 
  </head>
  <body class="bg-white text-[#1e1e2f] font-['Inter'] dark:text-[#f9f9ff]">
    <header class="flex justify-between items-center p-4 bg-white shadow-md dark:bg-[#2e2e3f]">
      <div class="flex items-center gap-3 text-[#6b46ff] font-bold text-xl">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="#805ad5"
          stroke-width="2"
          width="24"
          height="24"
        >
          <circle cx="12" cy="12" r="10" />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M9 12l2 2 4-4"
          />
        </svg>
        <span>Plan It, Do It</span>
      </div>
      <nav class="flex gap-6">
        @if (Route::has('login'))
              <div class="sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                  <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                  <a href="{{ route('login') }}" class="ml-4 px-4 py-2 bg-gray-200 text-[#1e1e2f] rounded-md dark:bg-gray-700 dark:text-white">Log in</a>
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 px-4 py-2 bg-[#7f56d9] text-white rounded-md dark:bg-[#a78bfa]">Register</a>
                  @endif
                  @endauth
                  @endif
              </div>
      </nav>
     
    </header>

    <section id="home" class="py-16 px-10 bg-white dark:bg-[#2e2e3f]">
      <div class="max-w-6xl mx-auto flex flex-wrap justify-between items-center">
        <div class="flex-1 max-w-lg">
          <h1 class="text-4xl font-bold text-[#222] dark:text-[#f9f9ff]">
            Organize today, <span class="text-[#7f56d9] dark:text-[#a78bfa]">achieve tomorrow</span>
          </h1>
          <p class="text-lg my-4 text-[#a5a2a2] dark:text-[#cfcfcf]">
            Plan It, Do It helps you organize your day efficiently and
            accomplish your tasks.
          </p>
          <div class="flex mt-3">
            <button 
            id="aboutUsButton" 
            class="px-4 py-2 bg-[#7f56d9] text-white rounded-md dark:bg-[#a78bfa]" 
            onclick="toggleAboutUsModal()">
            ABOUT US
        </button>
          </div>
        </div>
        <!-- Pop-up Modal -->
        
<div 
id="aboutUsModal" 
class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
<div class="bg-white dark:bg-[#2e2e3f] rounded-lg shadow-lg p-6 max-w-lg w-full">
    <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-4">About Us</h2>
    <p class="text-gray-600 dark:text-gray-300">
        Plan It, Do It is your ultimate task management tool designed to help you organize your day, track your progress, and achieve your goals efficiently. Our mission is to empower individuals and teams to stay productive and focused.
    </p>
    <div class="mt-6 text-right">
        <button 
            class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md dark:bg-gray-700 dark:text-white" 
            onclick="toggleAboutUsModal()">
            Close
        </button>
    </div>
</div>
</div>

<script>
// Function to toggle the modal visibility
function toggleAboutUsModal() {
    const modal = document.getElementById('aboutUsModal');
    modal.classList.toggle('hidden');
}
</script>

        <aside class="bg-white shadow-lg rounded-lg p-6 max-w-sm mx-auto mt-8 md:mt-0 dark:bg-[#3e3e4f]">
          <ul class="space-y-4">
            <li class="flex items-center bg-[#f4f6ff] p-4 rounded-md dark:bg-[#4e4e5f]">
              <span class="mr-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="#805ad5"
                  stroke-width="2"
                  width="16"
                  height="16"
                >
                  <circle cx="12" cy="12" r="10" />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 12l2 2 4-4"
                  />
                </svg>
              </span>
              Complete project presentation
            </li>
            <li class="flex items-center bg-[#f4f6ff] p-4 rounded-md dark:bg-[#4e4e5f]">
              <span class="mr-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="#805ad5"
                  stroke-width="2"
                  width="16"
                  height="16"
                >
                  <circle cx="12" cy="12" r="10" />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 12l2 2 4-4"
                  />
                </svg>
              </span>
              Schedule team meeting
            </li>
            <li class="flex items-center bg-[#f4f6ff] p-4 rounded-md dark:bg-[#4e4e5f]">
              <span class="mr-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="#805ad5"
                  stroke-width="2"
                  width="16"
                  height="16"
                >
                  <circle cx="12" cy="12" r="10" />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 12l2 2 4-4"
                  />
                </svg>
              </span>
              Review monthly goals
            </li>
          </ul>
        </aside>
      </div>
    </section>

    <section id="features" class="py-12 px-6 bg-white text-center dark:bg-[#2e2e3f]">
      <div class="mb-10">
        <h2 class="text-2xl font-bold text-[#222] dark:text-[#f9f9ff]">
          Features That Help You Stay Productive
        </h2>
        <p class="text-[#a5a2a2] text-lg dark:text-[#cfcfcf]">
          Simple yet powerful tools to organize your tasks and boost
          productivity.
        </p>
      </div>
      <div class="flex flex-wrap justify-center gap-8 max-w-5xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow-md max-w-xs text-center dark:bg-[#3e3e4f]">
          <div class="text-4xl mb-4">🗂️</div>
          <h3 class="text-lg font-bold text-gray-800 dark:text-[#f9f9ff]">Task Management</h3>
          <p class="text-[#a5a2a2] dark:text-[#cfcfcf]">
            Create, edit, and organize your tasks with ease. Mark tasks as
            complete when you're done.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md max-w-xs text-center dark:bg-[#3e3e4f]">
          <div class="text-4xl mb-4">📅</div>
          <h3 class="text-lg font-bold text-gray-800 dark:text-[#f9f9ff]">Due Dates</h3>
          <p class="text-[#a5a2a2] dark:text-[#cfcfcf]">
            Set due dates for your tasks so you know what needs to get done and
            when.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md max-w-xs text-center dark:bg-[#3e3e4f]">
          <div class="text-4xl mb-4">👤</div>
          <h3 class="text-lg font-bold text-gray-800 dark:text-[#f9f9ff]">Personal Account</h3>
          <p class="text-[#a5a2a2] dark:text-[#cfcfcf]">
            Your tasks are saved to your personal account, accessible from
            anywhere.
          </p>
        </div>
      </div>
    </section>

    <section id="contact" class="bg-gradient-to-r from-[#f0f0ff] to-[#f6f6ff] py-12 text-center dark:from-[#3e3e4f] dark:to-[#4e4e5f]">
      <h3 class="text-2xl font-bold mb-4 dark:text-[#f9f9ff]">Ready to Get Things Done?</h3>
      <p class="text-lg text-[#a5a2a2] mb-6 dark:text-[#cfcfcf]">
        Plan it, track it, complete it! Task by task, day by day, achieve your
        goals the organized way.
      </p>
      <button class="px-6 py-3 bg-[#7f56d9] text-white rounded-md dark:bg-[#a78bfa]">
        Get Started Now
      </button>
    </section>

   
  </body>
</html>
