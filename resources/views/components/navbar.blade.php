<nav class="bg-white shadow">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div>
                <a href="/" class="text-lg font-semibold text-gray-900">Webサービス</a>
            </div>
            @auth
            <ul class="flex space-x-4">
                <li><a href="{{ route('profile.index') }}" class="text-gray-700 hover:text-gray-900">プロフィール</a></li>
                <li><a href="#tasks" class="text-gray-700 hover:text-gray-900">課題管理</a></li>
                <li><a href="#ai-assessment" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">AI自由入力課題</a></li>
                <li><a href="#travel" class="text-gray-700 hover:text-gray-900">旅行計画</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-gray-900">ログアウト</button>
                    </form>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>