@extends('layout.app')

@section('content')
<h2 style="margin-left: 50px; margin-top: 50px">Post list</h2>
<div class="col-10">
    <table class="table table-striped table-bordered" style="margin-left: 50px; margin-top: 25px">

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">userId</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                </tr>
            </thead>

        <tbody>
        @foreach($posts as $post)
            <tr>

                <td>{{ $post->id }}</td>
                <td>{{ $post->userId }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection



