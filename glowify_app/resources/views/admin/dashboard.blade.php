@extends('layouts.app')

@section('content')
<div class="sidebar">
    <h2 style="text-align: center;">Admin Panel</h2>
    <a href="/admin/dashboard">Dashboard</a>
    <a href="/admin/articles">Manage Articles</a>
    <a href="/admin/users">Manage Users</a>
    <a href="/admin/settings">Settings</a>
    <a href="/logout">Logout</a>
</div>

<div class="main-content">
    <h1>Welcome, Admin!</h1>
    <div class="content-section">
        <h2>Recent Articles</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamic Content Example -->
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->author }}</td>
                    <td>
                        <button class="btn">Edit</button>
                        <button class="btn">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="content-section">
        <h2>Manage Users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamic Content Example -->
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button class="btn">Edit</button>
                        <button class="btn">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
