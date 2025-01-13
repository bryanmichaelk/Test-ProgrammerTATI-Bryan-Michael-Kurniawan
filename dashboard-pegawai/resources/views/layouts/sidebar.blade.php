<div class="w-64 bg-gray-800 text-white flex flex-col">
    <!-- Profile Section -->
    <div class="p-4 flex items-center space-x-4 border-b border-gray-700">
        <div  class="w-10 h-10 rounded-full bg-slate-500"></div>
        <div>
            <p id="profile-name" class="text-lg font-semibold">{{auth()->user()->name}}</p>
            <span class="text-sm text-gray-400">{{auth()->user()->role}}</span>
        </div>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-1 p-4 space-y-2">
        <a href="{{route('dashboard')}}" class="block px-3 py-2 rounded-lg hover:bg-gray-700">Dashboard</a>
        <a href="{{ route('logs')}}" class="block px-3 py-2 rounded-lg hover:bg-gray-700">Log Harian</a>
        <a href="{{ route('logs.verifikasi')}}" class="block px-3 py-2 rounded-lg hover:bg-gray-700">Verifikasi</a>
    </nav>

    <!-- Logout -->
    <div class="p-4 border-t border-gray-700">
        <button id="logout-btn" class="w-full text-center font-bold px-3 py-2 bg-red-500 rounded-lg hover:bg-red-600">
            Logout
        </button>
    </div>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="GET" class="hidden">
        @csrf
    </form>

    <!-- Logout Script -->
     <script>
        document.getElementById('logout-btn').addEventListener('click', function() {
            document.getElementById('logout-form').submit();
        });
     </script>
</div>