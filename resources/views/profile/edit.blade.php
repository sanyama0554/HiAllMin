@extends('layouts.app')

@section('title', 'プロフィール編集')

@section('content')
<section id="profile-edit">
    <h2 class="text-xl font-semibold mb-4">プロフィール編集</h2>
    
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}" class="space-y-4">
        @csrf
        <input type="hidden" name="id" value="{{ $profile->id }}">
        <div>
            <label for="username" class="block text-sm font-medium text-gray-700">名前</label>
            <input type="text" name="username" id="username" value="{{ $user->username }}" required class="w-full p-2 border rounded">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" required class="w-full p-2 border rounded">
        </div>
        <div>
            <label for="age" class="block text-sm font-medium text-gray-700">年齢</label>
            <input type="number" name="age" id="age" value="{{ $profile->age ?? '' }}" class="w-full p-2 border rounded">
        </div>
        <div>
            <label for="gender" class="block text-sm font-medium text-gray-700">性別</label>
            <select name="gender" id="gender" class="w-full p-2 border rounded">
                <option value="male" {{ $profile->gender == 'male' ? 'selected' : '' }}>男性</option>
                <option value="female" {{ $profile->gender == 'female' ? 'selected' : '' }}>女性</option>
                <option value="other" {{ $profile->gender == 'other' ? 'selected' : '' }}>その他</option>
            </select>
        </div>
        <div>
            <label for="location" class="block text-sm font-medium text-gray-700">所在地</label>
            <input type="text" name="location" id="location" value="{{ $profile->location ?? '' }}" class="w-full p-2 border rounded">
        </div>
        <div>
            <label for="bio" class="block text-sm font-medium text-gray-700">自己紹介</label>
            <textarea name="bio" id="bio" class="w-full p-2 border rounded">{{ $profile->bio ?? '' }}</textarea>
        </div>
        <div>
            <label for="interests" class="block text-sm font-medium text-gray-700">興味</label>
            <textarea name="interests" id="interests" class="w-full p-2 border rounded">{{ $profile->interests ?? '' }}</textarea>
        </div>
        <div>
            <label for="languages_spoken" class="block text-sm font-medium text-gray-700">話せる言語</label>
            <textarea name="languages_spoken" id="languages_spoken" class="w-full p-2 border rounded">{{ $profile->languages_spoken ?? '' }}</textarea>
        </div>
        <div>
            <label for="visited_places" class="block text-sm font-medium text-gray-700">訪れた場所</label>
            <textarea name="visited_places" id="visited_places" class="w-full p-2 border rounded">{{ $profile->visited_places ?? '' }}</textarea>
        </div>
        <div>
            <label for="travel_preferences" class="block text-sm font-medium text-gray-700">旅行の好み</label>
            <textarea name="travel_preferences" id="travel_preferences" class="w-full p-2 border rounded">{{ $profile->travel_preferences ?? '' }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">更新</button>
    </form>
</section>
@endsection