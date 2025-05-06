<x-app-layout>
    <x-slot name="header">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>My Tasks</title>
    
            <!-- Tailwind CSS -->
            <script src="https://cdn.tailwindcss.com"></script>
    
            <!-- FullCalendar CSS & JS -->
            <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    
            <style>
                .calendar-day.today {
                    background-color: #ef4444;
                    color: white;
                    border-radius: 50%;
                }
            </style>
        </head>
        <body class="bg-gray-100 text-gray-800">
            <!-- Header -->
            <header class="flex justify-between items-center p-4 border-b border-gray-200">
               
            </header>
    
            <!-- Main Content -->
            <main class="p-4">
                <!-- Metrics Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
                        <div class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span class="font-medium">Completion</span>
                        </div>
                        <div class="text-2xl font-bold">0%</div>
                        <div class="text-sm text-gray-500">0 of 0 tasks complete</div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
                        <div class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span class="font-medium">Due Today</span>
                        </div>
                        <div class="text-2xl font-bold">0</div>
                        <div class="text-sm text-gray-500">0 overdue tasks</div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
                        <div class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span class="font-medium">Average Progress</span>
                        </div>
                        <div class="text-2xl font-bold">0%</div>
                        <div class="text-sm text-gray-500">Across all tasks</div>
                    </div>
                </div>
    
                <!-- Calendar Section -->
                <section class="bg-white p-6 rounded shadow mb-6">
                    <h2 class="text-xl font-semibold mb-4">Calendar</h2>
                    <div id="calendar"></div>
                </section>
    
                <!-- Today's Tasks Section -->
                <section class="bg-white p-6 rounded shadow">
                    <h2 class="text-xl font-semibold mb-4">Today's Tasks</h2>
                    <ul class="space-y-3">
                        <li class="flex justify-between items-center">
                            <span>Finish report</span>
                            <input type="checkbox">
                        </li>
                        <li class="flex justify-between items-center">
                            <span>Team meeting at 3PM</span>
                            <input type="checkbox">
                        </li>
                        <li class="flex justify-between items-center">
                            <span>Code review</span>
                            <input type="checkbox">
                        </li>
                    </ul>
                </section>
            </main>
    
            <!-- FullCalendar Initialization -->
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var calendarEl = document.getElementById('calendar');
    
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        headerToolbar: {
                            left: 'prev,next today',
                            center: 'title',
                            right: ''
                        },
                        events: [
                            { title: 'Team Meeting', start: '2025-05-07' },
                            { title: 'Project Deadline', start: '2025-05-10' },
                            { title: 'Demo Day', start: '2025-05-15' }
                        ],
                        dayCellClassNames: function (date) {
                            var today = new Date();
                            if (
                                date.date.getFullYear() === today.getFullYear() &&
                                date.date.getMonth() === today.getMonth() &&
                                date.date.getDate() === today.getDate()
                            ) {
                                return 'today';
                            }
                            return '';
                        }
                    });
    
                    calendar.render();
                });
            </script>
        </body>
        </html>
    
    </x-slot>

   </x-app-layout>
